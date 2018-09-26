<?php
//set_time_limit(0);
include("../../forms/conexion.php");
//ini_set("display_errors","on");
//include("../mpdf.php");

function dias_fecha($fechaIni, $fechaFin)
{
	list($anio1, $mes1, $dia1) = explode("-", $fechaIni);
	list($anio2, $mes2, $dia2) = explode("-",$fechaFin);
	$timestamp1 = mktime(0,0,0,$mes1, $dia1, $anio1);
	$timestamp2 = mktime(0,0,0,$mes2, $dia2, $anio2);

	$sec_dif = $timestamp2-$timestamp1;
	$dias_dif = $sec_dif / (60*60*24);

	$dias_dif = abs($dias_dif);
	$dias_dif = floor($dias_dif);

	return $dias_dif;
}

	function fec_amd($fecdma)
	{
		$rfec=substr($fecdma,6,4)."-".substr($fecdma,3,3).substr($fecdma,0,2); //convertir a A?O-MES-DIA
		return($rfec);
	}
	function fecha_larga($varfecha)
	{
		$tfecha="";
		if ($varfecha=="" or substr($varfecha,0,2)=="00")
			{return($tfecha);}
		if (gettype($varfecha)=="string")//convertir fecha caracter a numerica
		{
			$nwf=$varfecha;
			if (substr($varfecha,2,1)=="-") // convierte formato DIA-MES-A?O a A?O-MES-DIA
			{$nwf=fec_amd($varfecha);}
			$varfecha=strtotime($nwf);
		}
		$varano=date("Y",$varfecha);
		$varmes=date("m",$varfecha);
		$vardia=date("d",$varfecha);
		$varnum=date("w",$varfecha);
		if ($varano <= 0)
		{return($tfecha);}
		$tdia=nombre_dia($varnum);
		$tdia=strtoupper($tdia);
		$tmes=nombre_mes($varmes);
		$tmes=strtoupper($tmes);
		$tfecha=$tdia . " " . $vardia .  " " . $tmes." DE ".$varano;

		return($tfecha);
	}
	function nombre_dia($varnum)
{
	$tdia="";
	$varnum=intval($varnum);
	switch($varnum)
	 {
		case 0;
			$tdia="Domingo";
		break;
		case 1;
			$tdia="Lunes";
		break;
		case 2;
			$tdia="Martes";
		break;
		case 3;
			$tdia="Miercoles";
		break;
		case 4;
			$tdia="Jueves";
		break;
		case 5;
			$tdia="Viernes";
		break;
		case 6;
			$tdia="Sabado";
		break;
	 }
	return($tdia);
}
/**************************************************/
/* funcion que convierte numero mes a texto       */
/* recibe variables $mes = numero del mes         */
/**************************************************/
function nombre_mes($varmes)
{
	$tmes="";
	switch($varmes)
	 {
		case "01";
		$tmes="Enero";
		break;
		case "02";
		$tmes="Febrero";
		break;
		case "03";
		$tmes="Marzo";
		break;
		case "04";
		$tmes="Abril";
		break;
		case "05";
		$tmes="Mayo";
		break;
		case "06";
		$tmes="Junio";
		break;
		case "07";
		$tmes="Julio";
		break;
		case "08";
		$tmes="Agosto";
		break;
		case "09";
		$tmes="Septiembre";
		break;
		case "10";
		$tmes="Octubre";
		break;
		case "11";
		$tmes="Noviembre";
		break;
		case "12";
		$tmes="Diciembre";
		break;
	 }
	return($tmes);
}
	//Fin Modificaci?n

//$mpdf = new mPDF();


$req=$_GET["req"];
@$ord=$_GET["ord"];
$dia2=$_GET["dia"];


$sqlReq="select r.*, c.* from requerimientos r, clientes c where r.cliente = c.ae_nom_cliente and ae_id_requerimiento = ".$req;

$query=mysql_query($sqlReq);
//$r=mysql_fetch_array($query);

$sqlb="";

$queryb=mysql_query($sqlb);

while ($res = mysql_fetch_array($query))
{
	$cliente = $res["cliente"];
	$descReq = $res["ae_desc_requerimiento"];
	$nit = $res["ae_doc_cliente"];
	$direccion = $res["direccion"];
	$dir_facturacion = $res["dir_facturacion"];
	$telefono = $res["ae_tel_cliente"];
	$fechaIni = $res["ae_fecha_inicial"];
	$fechaFin = $res["ae_fecha_final"];
	$fPago = $res["pago"];
	$observaciones = $res["obs_comerciales"];
	if($res["propina"]=="0")
		$propina = "El cliente no paga propina";
	else
		$propina = "El cliente paga propina";

	$sqlCoti="select * from cotizaciones where id_requerimiento = ".$req;
	$queryCoti=mysql_query($sqlCoti);
	$resCoti = mysql_fetch_array($queryCoti);
	$cotizacion = $resCoti["ae_id_cotizacion"];

	$sqlTipo="select * from tipos_requerimiento where ae_id_tipo_requerimiento = ".$res["tipo"];
	$queryTipo=mysql_query($sqlTipo);
	$resTipo = mysql_fetch_array($queryTipo);
	$tipoEvento = utf8_encode($resTipo["ae_desc_tipo_requerimiento"]);

	$sqlContacto = "select * from contactos where id_cliente = ".$res["ae_id_cliente"];
	$queryContacto = mysql_query($sqlContacto);
	$resContacto = mysql_fetch_array($queryContacto);

	@$contacto = $resContacto["ae_nom_contacto"];
	@$mailContacto = $resContacto["ae_email_contacto"];
	@$cargo = $resContacto["ae_cargo_contacto"];

	$sqlSalon = "select * from ubicaciones_req ur, ubicaciones u, tipo_montaje tp where ur.id_requerimiento = ".$req." and u.ae_id_ubicacion = ur.id_ubicacion  and ur.id_montaje = tp.ae_id_tipo_montaje group by ur.id_ubicacion";

	$querySalon = mysql_query($sqlSalon);

	while(@$resSalon = mysql_fetch_array($querySalon))
	{
		@$salon .= $resSalon["ae_desc_ubicacion"]."/";
		@$montaje .= $resSalon["ae_desc_ubicacion"].":".$resSalon["ae_desc_tipo_montaje"]." - <b>".$resSalon['cant_personas']." personas<br>";
	}

	$sqlUsuario="select * from usuarios where ae_id_usuario = ".$res["id_usuario"];
	$queryUsuario=mysql_query($sqlUsuario);
	$resUsuario = mysql_fetch_array($queryUsuario);
	$usuario = $resUsuario["ae_nombre"]." ".$resUsuario["ae_apellido"];

	@$horaIni = $res["ae_hora_ini"];
	@$horaFin = $res["ae_hora_fin"];
	@$pax = $res["ae_num_personas"];

}
$sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>''";

$queryItems = mysql_query($sqlItems);

@$subTCat = 0;
@$ivaCat = 0;
while($resItems = mysql_fetch_array($queryItems))
{
	@$subTCat+=$resItems["ae_valor"]*$resItems["cantidad"];
	@$ivaCat+=(($resItems["ae_valor"]*$resItems["cantidad"])*$resItems["iva"])/100;
}

@$ini= "'".$horaIni."','Ini'";
@$fin= "'".$horaFin."','Fin'";
@$entrega=substr(@$_GET["Entrega"],0,2);
@$dia=" ";
if($entrega>12)
{
	@$entrega=$entrega-12;
	@$dia=" pm";
	}
/*

$update="?req=".$_GET['req']."&ord=".$_GET['ord']."&Folio=".$_GET['Folio']."&EjecutivoCuenta=".$GET['EjecutivoCuenta']."&FormaPago=".@$_GET['FormaPago'].
"&TotalFinal=".$_GET['TotalFinal']."&TotalCotizacion=".$_GET['TotalCotizacion']."&Diferencia=".$_GET['Diferencia']."&Item1=".@$_GET['Item1']."&Valor1=".@$_GET['Valor1'].
"&Total1=".$_GET['Total1']."&Item2=".$_GET['Item2']."&Valor2=".$_GET["Valor2"]."&Item3=".$_GET['Item3']."&Valor3=".@$_GET['Valor3']."&Total3=".@$_GET['Total3'].
"&Item4=".$_GET['Item4']."&Valor4=".$_GET['Valor4']."&Total4=".$_GET['Total4']."&Item5=".$_GET['Item5']."&Valor5=".@$_GET['Valor5']."&Total5=".@$_GET['Total5'].
"&Item6=".$_GET['Item6']."&Valor6=".$_GET['Valor6']."&Total6=".$_GET['Total6']."&Item7=".$_GET['Item7']."&Valor7=".@$_GET['Valor7']."&Total7=".@$_GET['Total7'].
"&Item8=".$_GET['Item8']."&Valor8=".$_GET['Valor8']."&Total8=".$_GET['Total8']."&Item9=".$_GET['Item9']."&Valor9=".@$_GET['Valor9']."&Total9=".@$_GET['Total9'].
"&Item10=".$_GET['Item10']."&Valor10=".$_GET['Valor10']."&Total10=".$_GET['Total10'];

mysql_query("update ordenes SET datos ='".$update."' WHERE ordenes.ae_id_orden = ".$ord);
*/

$html='
<style>

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

			table
			{
				font:Verdana, Geneva, sans-serif;
				font-size:12px;
			}
			hr{
			background-color: lavender;
    		height: 20px;
    		margin-bottom: -20px;
				}
		</style>
<center><table width="964" border="0" style="font-family:Verdana, Geneva, sans-serif;font-size:12px;width:700px; ">
		  <tr>
		    <td width="958" height="56"><table width="893" border="0" style="font-family:Verdana, Geneva, sans-serif;font-size:12px; border: 2px solid #000">
		  </tr>
		  <tr>
		        <td width="245" rowspan="2">
				<div class="tooltip">
<img src="../../imagenes_corporativas/logopdf.png" style="width:235px">
    <span class="tooltiptext"><a href="//pdfcrowd.com/url_to_pdf/" title="http://pdfcrowd.com/save-to-pdf/">Descargar como PDF</a></span>
		   </div>
</td>
		           <td width="100" rowspan="2">CONVENIO DE EVENTOS <br />NO. '.$cotizacion.'</td>
				   <td rowspan="2"><b>Degustacion</ b></td>
				   <td><b>Ejecutivo de Cuenta</b></td>
				   <td>'.$usuario.'</td>
				   <tr>
  				   <td><b>Duración de Evento</b></td>
  				   <td>'.$fechaIni.'  -  '.$fechaFin.'</td>
				   </tr>
				   ';
                  
$sqlReq2="SELECT * FROM sucursales WHERE sucursales.ae_id_sucursal = '1'";
 
$query2=mysql_query($sqlReq2);
 
$hotel=mysql_fetch_array($query2);  
$html.=
    $hotel["ae_nom_sucursal"].'<br />'.
    $hotel["ae_doc_sucursal"].'<br />'.
    $hotel["ae_tel_sucursal"].' - '.$hotel["ae_fax_sucursal"].'<br />'.
    $hotel["ae_dir_sucursal"].'<br />'.
    $hotel["ae_desc_sucursal"].'<br />'.                 
'<br />
                  </td>
				  <tr style="
    text-align: center;
           "><td colspan="5">Facturacion</td>
</tr>
<!--                
				<td width="350"><strong>Fecha de Impresión: '.fecha_larga(date('Y-m-d')).'<br />
                Fecha de Elaboracion Convenio:<br />
Orden de Evento <br /> No :</strong> '.@$_GET["ord"].' - <b>Revision No: </b><!-- Codigo Revision -->
<img src="http://www.reliablecounter.com/count.php?page=kaf.sitevirtual.tech/PDF/imprimibles/orden.php&digit=style/plain/10/&reloads=0" alt="" title="Revisiones" height="10" border="0">
<!-- Codigo Revision -->
- <b>Convenio: </b><label id="text2"></label> <br />
<b>Pedido No: </b>'.@$_GET["req"].'
- <b>Folio No: </b>'.@$_GET["Folio"].'
</tr>
		       
	          </tr>
			  -->
	        </table></td>
	      </tr>
		  <tr>
		    <td height="19">&nbsp;</td>
	      </tr>
		  <tr>
			<td valign="top"><table width="897" height="240" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:Verdana, Geneva, sans-serif;font-size:12px;">
		      <tr>
		        <td width="233"><strong>Convenio Numero: </strong></td>
			      <td id="convenio" width="214" align="center">'.$cotizacion.'</td>
			      <td width="232"><strong>Hora de entrega del lugar</strong></td>
			      <td width="208" align="center">'.$entrega.substr(@$_GET["Entrega"],2,3).$dia.'</td>
	          </tr>
			    <tr>
			      <td><strong>Empresa</strong></td>
			      <td align="center"><strong> </strong>'.$cliente.' </td>
			      <td><strong>Fecha del evento</strong></td>
			      <td align="center"><strong> '.$fechaIni.'  -  '.$fechaFin.'</strong></td>
		        </tr>
			    <tr>
			      <td><strong>Organizado por </strong></td>
			      <td align="center">'.$contacto.'</td>
			      <td><strong>Salon</strong></td>
			      <td align="center">'.@$salon.'</td>
		        </tr>
			    <tr>
			      <td><strong>Tipo de Evento</strong></td>
			      <td align="center">'.$tipoEvento.' </td>
			      <td><strong>Hora</strong></td>
			      <td align="center"><strong> </strong>
				  <m id="Ini"></m> a <m id="Fin"></m></td>
		        <p id="horaIni">
				</tr>
			    <tr>
			      <td><strong>Nombre de organizador</strong></td>
			      <td align="center">'.$contacto.'</td>
			      <td><strong>Numero de personas</strong></td>
			      <td align="center"><strong> </strong>'.$pax.' PAX </td>
		        </tr>
			    <tr>
			      <td><strong>Direccion de facturacion</strong></td>
			      <td align="center">'.$dir_facturacion.'</td>
				  <td><strong>Gerente General</strong></td>
			      <td align="center">'.@$_GET["EjecutivoCuenta"].'</td>
				  </tr>
			    <tr>
			      <td><strong>Numero Telefonico</strong></td>
			      <td align="center"><strong> </strong>'.$telefono.' </td>
				   <td><strong>Firma del ejecutivo:</strong>
				   <td align="center">'.$usuario.'</strong></td>
		        </tr>
			    <tr>
			      <td><strong>Documento NIT/CC </strong></td>
			      <td align="center"> '.$nit.' </td>
			      <td><strong>Valor total del evento</strong></td>
			      <td align="center"> $ '.number_format($subTCat+$ivaCat,0,'','.').'</td>
		        </tr>
			    <tr>
			      <td><strong>Folio Numero</strong></td>
			      <td align="center">'.@$_GET["Folio"].'</td>
			      <td><strong>Forma de pago</strong></td>
			      <td align="center"><strong> </strong>'.$fPago.'</td>
		        </tr>
				<td><strong>Acuerdos de pago:</strong></td>
				<td colspan="3">'.@$_GET["FormaPago"].'</td>
		      </table>
			  <br />
		      <table width="900" height="193" border="1"  bordercolor="#000000" cellpadding="0" cellspacing="0" style="font-family:Verdana, Geneva, sans-serif;font-size:12px;">
		        <tr>
		          <td width="450" align="center" height="180">';

				  $sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>'' and i.id_categoria <> 5";

						$queryItems = mysql_query($sqlItems);
						$catAnt="";
						while($resItems = mysql_fetch_array($queryItems))
						{
							if($catAnt=="")
							{
								$html.= '<strong>'.utf8_encode($resItems["ae_desc_categoria"])."</strong><br>";
								$catAnt = utf8_encode($resItems["ae_desc_categoria"]);
							}
							$html.='<strong>'.utf8_encode($resItems["ae_desc_item"])."<br><br>".utf8_encode($resItems["ae_desc_tipo_servicio"]).'</strong><br>'.$resItems["descripcion"]."<br>";
							if($catAnt!=$resItems["ae_desc_categoria"])
							{
								$html.= '<strong>'.utf8_encode($resItems["ae_desc_categoria"])."</strong><br>";
								$catAnt = utf8_encode($resItems["ae_desc_categoria"]);
							}
						}

				  $html.='</td>
		          <td width="400" rowspan="2" align="center">
				  <hr />
				  <big><strong>Observaciones por Área</strong>
                  <div align="center" style=" width:100%">'.$observaciones.'</div>





				  </td>
	            </tr>
		        <tr>
		          <td>
                  <hr />
                  <h2 style="margin-top: 0px;">Tabla de Items Facturados:</h2>
				  <p></p>
                  <table width="450" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:Verdana, Geneva, sans-serif;font-size:12px; width:450px;">';

                  //AQUI ITEMS
		            $dias = dias_fecha($fechaIni, $fechaFin);

					if($dias == 0)
						$dias = 1;
					$catAnt="";
					$subTCat = 0;
					$ivaCat = 0;
					$gSubTReq = 0;
					$gIvaReq = 0;
					for($i=0;$i<=$dias;$i++)
					{
						$nuevafecha = $fechaIni;
						if($i>0)
						{
							$fecha = $fechaIni;
							$nuevafecha = strtotime ( '+'.$i.' days' , strtotime ( $fecha ) ) ;
							$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
						}

						$diaActual = $i+1;
						$html.='<tr>
							  <td colspan="2" style="background-color:lavender;">
							  <strong>Dia: </strong>'.$diaActual.' - '.$nuevafecha.'</td>
							</tr>';


						$sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.ae_dia = ".($i+1)." and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>''";

						$queryItems = mysql_query($sqlItems);

						while($resItems = mysql_fetch_array($queryItems))
						{
							$html.='
							<tr>
							  <td width="225"><strong>'.$resItems["ae_desc_item"].' ('.@$resItems['cantidad'].' Unid.) $'.number_format(($resItems["ae_valor"]+$resItems["descuento"]),0,'','.').'</strong></td>
							  <td width="225"> <strong>$'.number_format(($resItems["ae_valor"]+$resItems["descuento"])*$resItems["cantidad"],0,'','.').'</strong></td>
							</tr>

						 ';
              $subTCat+=($resItems["ae_valor"]+$resItems["descuento"])*$resItems["cantidad"];
						  $ivaCat+=(($resItems["ae_valor"]*$resItems["cantidad"])*$resItems["iva"])/100;



        	}

		}
		 $html.=' <tr>
				  <td><strong>Total Evento</strong></td>
				  <td> <strong>$'.number_format($subTCat+$ivaCat,0,'','.').'</strong></td>
					</tr>
					</table>';
///aqui viene el codigo de la tabla de orden

$html.= "<hr />
<h2 style='margin-top: 0px;'>Tabla para Orden</h2>
<table  width='450' border='1' cellpadding='0' cellspacing='0' bordercolor='#000000' style='font-family:Verdana, Geneva, sans-serif;font-size:12px; width:450px;'>
  <tr style='background-color:lavender;'>
	<td><b>Cant</b></td>
    <td><b>Item</b></td>
    <td><b>Valor Unit.</b></td>
    <td><b>Total</b></td>
  </tr>";
	$sub=0;
	$sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>''";
	$queryItems = mysql_query($sqlItems);
	while($resItems = mysql_fetch_array($queryItems)){
		$ivaCat+=(($resItems["ae_valor"]*$resItems["cantidad"])*$resItems["iva"])/100;
	if($dia2==$resItems["ae_dia"])
	  {
	$html.="
		<tr>
	    <td>".$resItems["cantidad"]."</td>
	    <td>".$resItems["ae_desc_item"]."</td>
	    <td>$ ".$resItems["ae_valor"]."</td>";
			$sub=$sub+($resItems["ae_valor"] + $resItems["descuento"])*$resItems["cantidad"];
	    $html.="<td>$ ".number_format($sub,0,'','.')."</td>
	  </tr>";
	  }
 }

///aqui viene el codigo de la tabla de orden
		$html.='</td>
				</tr>
						<tr>
						  <td height="45" rowspan="2">&nbsp;</td>
						  <td align="center"><strong>Firma del ejecutivo: '.$usuario.'</strong></td>
						</tr>
						<tr>
						  <td align="center"><strong>Por favor confirmar con el cliente la hora de los servicios de los alimentos</strong></td>
						</tr>

            </table></td>
		  </tr>';
$html.='</table>


<table width="1105" border="0" cellspacing="0" cellpadding="0" style="font-family:Verdana, Geneva, sans-serif;font-size:9px;" >
</table></center>
<br />
		';

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:x="urn:schemas-microsoft-com:office:excel"
		xmlns="http://www.w3.org/TR/REC-html40">
<head>
        <meta charset="iso-8859-1" />
        <link rel="shortcut icon" href="../../imagenes_corporativas/kaf.ico">
        <meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
        <meta name=ProgId content=Excel.Sheet>
        <meta name=Generator content="Microsoft Excel 11">
        <!--[if gte mso 9]><xml>
         <x:ExcelWorkbook>
          <x:ExcelWorksheets>
           <x:ExcelWorksheet>
            <x:Name>Cartera</x:Name>
            <x:WorksheetOptions>
             <x:Selected/>
             <x:FreezePanes/>
             <x:FrozenNoSplit/>
             <x:SplitHorizontal>** FROZEN ROWS + 1 **</x:SplitHorizontal>
             <x:TopRowBottomPane>** FROZEN ROWS + 1 **</x:TopRowBottomPane>
             <x:SplitVertical>** FROZEN COLUMNS + 1 **</x:SplitVertical>
             <x:LeftColumnRightPane>** FROZEN COLUMNS + 1**</x:LeftColumnRightPane>
             <x:ActivePane>0</x:ActivePane>
             <x:Panes>
              <x:Pane>
               <x:Number>3</x:Number>
              </x:Pane>
              <x:Pane>
               <x:Number>1</x:Number>
              </x:Pane>
              <x:Pane>
               <x:Number>2</x:Number>
              </x:Pane>
              <x:Pane>
               <x:Number>0</x:Number>
              </x:Pane>
             </x:Panes>
             <x:ProtectContents>False</x:ProtectContents>
             <x:ProtectObjects>False</x:ProtectObjects>
             <x:ProtectScenarios>False</x:ProtectScenarios>
            </x:WorksheetOptions>
           </x:ExcelWorksheet>
          </x:ExcelWorksheets>
          <x:ProtectStructure>False</x:ProtectStructure>
          <x:ProtectWindows>False</x:ProtectWindows>
         </x:ExcelWorkbook>
        </xml><![endif]-->
        <meta name="Content-Disposition" content="attachment; filename=REPORTE_CARTERA.xls">

<script>
function horario(horario,etiqueta) {
var str = horario;
var hora = str.substring(0, 2);
if (hora<12){str= str + " am";}else{
	str = (str.substring(0, 2)-12) + str.substring(2, 5) + " pm";}
    var n = str;
    document.getElementById(etiqueta).innerHTML = n;
}
function copiar(){
document.getElementById('text2').innerHTML=document.getElementById('convenio').innerHTML;
	}
</script>

</head>
<?=$html?>
