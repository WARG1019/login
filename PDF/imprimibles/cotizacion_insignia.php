<?php
//set_time_limit(0);

include("../../forms/conexion.php");

include("../mpdf.php");

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
		$rfec=substr($fecdma,6,4)."-".substr($fecdma,3,3).substr($fecdma,0,2); //convertir a AÑO-MES-DIA
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
			if (substr($varfecha,2,1)=="-") // convierte formato DIA-MES-AÑO a AÑO-MES-DIA
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
	//Fin Modificación

//$mpdf = new mPDF();

$req=$_GET["req"];

/*
$hhtml = '<htmlpageheader name="myHTMLHeaderOdd" style="display:none">
<div style="background-color:#BBEEFF" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpageheader>
<htmlpagefooter name="myHTMLFooterOdd" style="display:none">
<div style="background-color:#CFFFFC" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpagefooter>
<sethtmlpageheader name="myHTMLHeaderOdd" page="O" value="on" show-this-page="1" />
<sethtmlpagefooter name="myHTMLFooterOdd" page="O" value="on" show-this-page="1" />';
*/

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
	//$direccion = $res["ae_dir_cliente"];
	$telefono = $res["ae_tel_cliente"];
	$fechaIni = $res["ae_fecha_inicial"];
	$fechaFin = $res["ae_fecha_final"];
	$fPago = $res["pago"];
	$observaciones = $res["obs_comerciales"];
	
	$sqlTipo="select * from tipos_requerimiento where ae_id_tipo_requerimiento = ".$res["tipo"];
	$queryTipo=mysql_query($sqlTipo);
	$resTipo = mysql_fetch_array($queryTipo);
	$tipoEvento = $resTipo["ae_desc_tipo_requerimiento"];
	
	$sqlContacto = "select * from contactos where id_cliente = ".$res["ae_id_cliente"];
	$queryContacto = mysql_query($sqlContacto);
	$resContacto = mysql_fetch_array($queryContacto);
	
	$contacto = $resContacto["ae_nom_contacto"];
	$mailContacto = $resContacto["ae_email_contacto"];
	$cargo = $resContacto["ae_cargo_contacto"];
	
	$salon = $res["ubicacion"];
	$horaIni = $res["ae_hora_ini"];
	$horaFin = $res["ae_hora_fin"];
	$pax = $res["ae_num_personas"];
	
}

$html = '<style>
			table
			{
				font:Verdana, Geneva, sans-serif;
				font-size:10px;	
			}
		</style>
		<center><table border="0" style="font-family:Verdana, Geneva, sans-serif;font-size:10px;width:700px;">
		  <tr>
		    <td height="44" colspan="2"><table width="1440" border="0" cellspacing="4" cellpadding="4">
		      <tr>
		        <td width="112">&nbsp;</td>
		        <td width="1300">&nbsp;</td>
	          </tr>
	        </table></td>
	      </tr>
		  <tr>
		    <td colspan="2">&nbsp;</td>
	      </tr>
		  <tr>
			<td width="491"><strong>Fecha: '.$fechaIni.'</strong>
			<br>
			<strong>Nombre del evento: </strong>'.$descReq.'
			<br><strong>Empresa: </strong>'.$cliente.'
			<br><strong>Contacto: </strong>'.$contacto.'
			<br><strong>Email: </strong>'.$mailContacto.'
			<br><strong>Forma de Pago: </strong>'.$fPago.'
			<br><strong>Obs. Comerciales: </strong>'.utf8_decode($observaciones).'
			</td>
			<td width="504" valign="top"><br>
			<br>
			<strong>NIT</strong>: '.$nit.'
			<br><strong>Tel&eacute;fono: </strong>'.$telefono.'
			<br><strong>Cargo: </strong>'.$cargo.'
			<br><strong>Tipo Evento: </strong>'.$tipoEvento.'
			<br><strong>Tipo Evento: </strong>'.$tipoEvento.'
			
			</td>
		  </tr>';

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
	
	
	$html.='<tr>
			<td colspan="2" bgcolor="#CCCCCC" ><strong>'.fecha_larga($nuevafecha).'</strong></td>
		  </tr>
		  <tr>
    		<td  bgcolor="#FFFFFF"><p><strong>Sal&oacute;n: </strong>'.$salon.'<br>
       			 <strong>Hora Inicio: </strong>'.$horaIni.'<br>
        		<strong>Hora fin: </strong>'.$horaFin.'<br>
   		 </p></td>
    	 	<td  bgcolor="#FFFFFF"><strong>N&uacute;mero personas: </strong>'.$pax.'</td>
  			</tr>';
	
	
	$sqlItems = "select ir.*, i.*, c.*, ts.*, im.* from items_req ir, items i, categorias c, tipo_servicio ts, impuestos im where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and i.id_impuesto = im.ae_id_impuesto and ir.ae_dia = ".($i+1)." and ir.id_requerimiento = ".$req." order by c.ae_id_categoria";
	$queryItems = mysql_query($sqlItems);
	
	while($resItems = mysql_fetch_array($queryItems))
	{
		
		if($catAnt=="")
		{
			$html.='<tr>
				    <td colspan="2"  bgcolor="#FFFFFF" style="border:1px solid #000">'.$resItems["ae_desc_categoria"].'</td>
  					</tr>
					<tr>
					    <td colspan="2"  bgcolor="#FFFFFF"><table border="0" style="width:600px;">
						  <tr>
							<td bgcolor="#CCCCCC" style="width:250px;">Descripci&oacute;n</td>
							<td bgcolor="#CCCCCC">Cantidad</td>
							<td bgcolor="#CCCCCC" style="width:200px;">Vlr Unitario</td>
							<td bgcolor="#CCCCCC" style="width:250px;">Vlr Total</td></tr>';
							
			$catAnt = $resItems["ae_id_categoria"];
		}
		if($catAnt!=$resItems["ae_id_categoria"])
		{
			$html.='<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#CCCCCC" style="width:500px;"><strong>Subtotal '.$resItems["ae_desc_categoria"].': $'.number_format($subTCat,0,'','.').'<br>
							 IVA '.$resItems["ae_desc_categoria"].': $'.number_format($ivaCat,0,'','.').'</strong></td></tr></table>';
			$html.='<tr>
				    <td colspan="2"  bgcolor="#FFFFFF" style="border:1px solid #000">'.$resItems["ae_desc_categoria"].'</td>
  					</tr>
					<tr>
					    <td colspan="2"  bgcolor="#FFFFFF"><table border="0" style="width:600px;">
						  <tr>
							<td bgcolor="#CCCCCC" style="width:250px;">Descripci&oacute;n</td>
							<td bgcolor="#CCCCCC">Cantidad</td>
							<td bgcolor="#CCCCCC" style="width:200px;">Vlr Unitario</td>
							<td bgcolor="#CCCCCC" style="width:250px;">Vlr Total</td></tr>';
			$catAnt = $resItems["ae_id_categoria"];
			$gSubTReq+=$subTCat;
			$gIvaReq+=$ivaCat;
			
			$subTCat=0;
			$ivaCat=0;
			
		}
		
		$html.='<tr>
				<td bgcolor="#FFF">'.$resItems["ae_desc_item"].'</td>
				<td bgcolor="#FFF">'.$resItems["cantidad"].'</td>
				<td bgcolor="#FFF" align="right">'.number_format($resItems["ae_valor"],0,'','.').'</td>
				<td bgcolor="#FFF" align="right">'.number_format($resItems["ae_valor"]*$resItems["cantidad"],0,'','.').'</td></tr>';
				$subTCat+=$resItems["ae_valor"]*$resItems["cantidad"];
				$ivaCat+=(($resItems["ae_valor"]*$resItems["cantidad"])*$resItems["ae_impuesto"])/100;
		
		$cat1=$resItems["ae_id_categoria"];
		$desCat1 = $resItems["ae_desc_categoria"];
	}
	
	if($catAnt==$cat1)
	{
		$html.='<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#FFF">&nbsp;</td>
							<td bgcolor="#CCCCCC" style="width:500px;"><strong>Subtotal '.$desCat1.': $'.number_format($subTCat,0,'','.').'<br>
							 IVA '.$desCat1.': $'.number_format($ivaCat,0,'','.').'</strong></td></tr></table>';
		$catAnt="";
		$gSubTReq+=$subTCat;
		$gIvaReq+=$ivaCat;
	}
	

}
$html.='<tr>
    <td colspan="2" align="right"  bgcolor="#FFFFFF"><p><strong>Subtotal Items: $'.number_format($gSubTReq,0,'','.').'<br>
      Iva Items: $'.number_format($gIvaReq,0,'','.').'<br>
      TOTAL A PAGAR: $'.number_format($gSubTReq+$gIvaReq,0,'','.').' 
   </strong></p></td>
  </tr></table></center>';
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:x="urn:schemas-microsoft-com:office:excel"
		xmlns="http://www.w3.org/TR/REC-html40">
<head>
        <meta charset="iso-8859-1" />
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
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
         <link href="estiloscoti.css" rel="stylesheet"> 
         <link href="estilostabla.css" rel="stylesheet"> 
         </head>
<?=$html?>    
