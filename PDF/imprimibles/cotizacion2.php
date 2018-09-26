<?php
//set_time_limit(0);
@include("../../forms/conexion.php");
//ini_set("display_errors","on");
//include("../mpdf.php");


function dias_fecha($fechaIni, $fechaFin)
{
	list($anio1, $mes1, $dia1) = explode("-", $fechaIni);
	@list($anio2, $mes2, $dia2) = explode("-",$fechaFin);
	@$timestamp1 = mktime(0,0,0,$mes1, $dia1, $anio1);
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
$dia2=1;

 $sqlReq="select r.ae_id_requerimiento,r.cliente,r.ae_desc_requerimiento,r.id_usuario,r.ae_fecha_cotizacion,r.ae_num_personas,r.ae_fecha_inicial,r.ae_hora_ini,r.ae_hora_fin,r.ubicacion,r.tipo,r.propina,r.origen,r.ae_fecha_final,r.pago,r.estado,r.organizador,r.organizado_por, r.contacto, c.*, obs.* from requerimientos r, clientes c, observacion obs where r.ae_id_requerimiento=".$req." and r.cliente=c.ae_nom_cliente and obs.ae_id_requerimiento=".$req. " and obs.dia=".$dia2;
 @$query=mysql_query($sqlReq);


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
	$fechaCot = $res["ae_fecha_cotizacion"];
	$organizador=$res["organizador"];
	$organizador_por=$res["organizado_por"];
	$fPago = $res["pago"];
	$observaciones = @$res["obs_comerciales"];
	$ubicacion = $res["ubicacion"];
	$sqlCoti="select * from cotizaciones where id_requerimiento = ".$req;
	$queryCoti=mysql_query($sqlCoti);
	$resCoti = mysql_fetch_array($queryCoti);
	$cotizacion = @$resCoti["ae_id_cotizacion"];

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

	@$horaIni = $res["ae_hora_ini"];
	@$horaFin = $res["ae_hora_fin"];
	@$pax = $res["ae_num_personas"];
	@$ini= "'".$horaIni."','Ini'";
	@$fin= "'".$horaFin."','Fin'";
	@$entrega=substr(@$_GET["Entrega"],0,2);
	@$dia=" ";
	
	if($entrega>12)
	{
	@$entrega=$entrega-12;
	@$dia=" pm";
	}

@$html.='
<style>
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
		      <tr>
		        <td width="225"><img src="/imagenes_corporativas/logopdf.png" style="width:225px" /></td>
		        <td width="420" style="margin-top:-150px;"><table width=530 border="0" style="margin-top:-10px;">
		        <tr>
		         <td style="padding:20px 5px 5px; font-size:20px;">
                   <center>Cite Hotel</center>
                    </td></tr>
                    <tr><td><strong><center>INVERSIONES DEL VIRREY S.A</center></strong></td></tr>
                   <tr><td><strong><center> NIT: 900.149.470 </center></strong></td></tr>
                   <tr><td><strong><center>Carrera 15 No. 88-10 - Tel. 646 7777  Fax: 2 360769 </center></strong></td></tr>
                   <tr><td style="padding:5px 5px 10px;"><strong><center>NO SOMOS GRANDES CONTRIBUYENTES - NI AUTORETENEDORES</center></strong></td></tr>
		           <tr><td style="padding:50px 0px 0px 0px; color:red;"><i><center><strong>SOMOS EXENTOS DE RETENCIÓN EN LA FUENTE SEGÚN CONCEPTO 5697 DE FEB 23 DE 2015 DE LA DIAN </center></i></strong></td></tr>								

		         </table>
<br /></td>
		        <td width="10%">
                 <table width="30" border="0" style="margin-top:-140px;">
                  <tr>
                   <td style="padding:10px; border:3px solid black;"><strong>COTIZACION</strong></td>
                   </tr>
                   <tr>
                   <td style="padding:10px; color:red; border:3px solid black;"><strong><center>20170907</center></strong></td>
                   </tr>
                 </table>
                </td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td>&nbsp;</td>
	      </tr>
		  <tr>
			<td valign="top"><table width="897" height="240" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:Verdana, Geneva, sans-serif;font-size:12px; border: 2px solid #000">
		      <tr>
		        <td width="233"><strong>Evento: </strong></td>
			      <td id="convenio" width="214" align="center">'.$descReq.'</td>
			      <td width="212"><strong>No Personas:</strong></td>
			      <td width="208" align="center">'.$res["ae_num_personas"].' Pax</td>
	          </tr>
			    <tr>
			      <td><strong>Compañía:</strong></td>
			      <td align="center"><strong>'.$cliente.' <br /> '.$contacto.'</strong></td>
			      <td><strong>Fecha Evento:</strong></td>
			      <td align="center"><strong>'.fecha_larga($fechaIni).' a '.fecha_larga($fechaFin).'</strong></td>

		        </tr>
			    <tr>
			      <td><strong>NIT o C.C:</strong></td>
			      <td align="center">'.$nit.'</td>
			      <td><strong>Hora:</strong></td>
			      <td align="center">'.$horaIni.' - '.$horaFin.'</td>
		        </tr>
			    
			    <tr>
			      <td><strong>Telefono:</strong></td>
			      <td align="center">'.$telefono.'</td>
			      <td><strong>Salon:</strong></td>
			      <td align="center"><strong> </strong>'.$ubicacion.'</td>
		        </tr>
			    <tr>
			      <td><strong>Organizador:</strong></td>
			      <td align="center">'.$organizador.'</td>
				  <td><strong>Ejecutivo de Evento:</strong></td>
			      <td align="center">'.$organizador_por.'</td>
				  </tr>
			    <tr>
			      <td><strong>Celular:</strong></td>
			      <td align="center"><strong> </strong> </td>
				   <td><strong>Forma de Pago:</strong>
				   <td align="center">'.$fPago.'</strong></td>
		        </tr>
			    <tr>
			      <td><strong>Email:</strong></td>
			      <td align="center">'.$mailContacto.' </td>
			      <td><strong>Fecha de Cotizacion:</strong></td>
			      <td align="center">'.$fechaCot.'</td>
		        </tr>
		      </table>
			  <br />
			  <br />';



	$sqlSalon = "select * from ubicaciones_req ur, ubicaciones u, tipo_montaje tp where ur.id_requerimiento = ".$req." and u.ae_id_ubicacion = ur.id_ubicacion  and ur.id_montaje = tp.ae_id_tipo_montaje group by ur.id_ubicacion";

	$querySalon = mysql_query($sqlSalon);

	while(@$resSalon = mysql_fetch_array($querySalon))
	{
		@$salon .= $resSalon["ae_desc_ubicacion"]."/";
		@$montaje .= $resSalon["ae_desc_ubicacion"].":".$resSalon["ae_desc_tipo_montaje"]." - <b>".$resSalon["cant_personas"]." personas<br>";
	}

	$sqlUsuario="select * from usuarios where ae_id_usuario = ".$res["id_usuario"];
	$queryUsuario=mysql_query($sqlUsuario);
	$resUsuario = mysql_fetch_array($queryUsuario);
	$usuario = $resUsuario["ae_nombre"]." ".$resUsuario["ae_apellido"];



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
		      
                  
$html.="
<table  width='900' border='1' cellpadding='0' cellspacing='0' bordercolor='#000000' style='font-family:Arial, Geneva, sans-serif;font-size:12px; width:900px;'>
  <tr style='background-color:gray;'>
	<td style='padding:10px;'><b>Fecha/Hora</b></td>
    <td style='padding:10px;'><b>Descripcion Alimentos y Bebidas</b></td>
    <td style='padding:10px;'><b>Cantidad</b></td>
    <td style='padding:10px;'><b>Precio Unitario</b></td>
    <td style='padding:10px;'><b>Precio Total</b></td>
  </tr>";
	$html.="
		<tr>
		<td style='background-color:lightgray; padding:10px;'></td>
		<td style='background-color:lightgray; padding:10px;'></td>
		<td style='background-color:lightgray; padding:10px;'></td>
		<td style='background-color:lightgray; padding:10px;'></td>
		<td style='background-color:lightgray; padding:10px;'></td>
		</tr>
		<tr>
	    <td style='padding:10px;'>2017-05-23</td>
	    <td style='padding:10px;'>bebidas basadas en cero alcolhol</td>
	    <td style='padding:10px;'><center>5</center></td>
	    <td style='padding:10px;'>$34000</td>";
	    $html.="<td style='padding:10px;'>$348759000</td>
	  </tr>";
	 

///aqui viene el codigo de la tabla de orden
		
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:x="urn:schemas-microsoft-com:office:excel"
		xmlns="http://www.w3.org/TR/REC-html40">
<head>
        <meta charset="iso-8859-1" />
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