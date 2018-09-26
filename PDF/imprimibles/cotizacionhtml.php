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
	
	function fecha_media($varfecha)
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
		
		$tfecha=$tmes .  " " . $vardia." De ".$varano;
		
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

/*$mpdf = new mPDF();

$req=$_GET["req"];

$hhtml = '<sethtmlpageheader name="header" page="O" value="on" show-this-page="1" />
<sethtmlpageheader name="header" page="E" value="on" />';*/

function creaHTM($req)
{
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
		
		$sqlSalon = "select * from ubicaciones_req ur, ubicaciones u, tipo_montaje tp where ur.id_requerimiento = ".$req." and u.ae_id_ubicacion = ur.id_ubicacion  and ur.id_montaje = tp.ae_id_tipo_montaje group by ur.id_ubicacion";
		
		$querySalon = mysql_query($sqlSalon);
	
		while($resSalon = mysql_fetch_array($querySalon))
		{
			$salon .= $resSalon["ae_desc_ubicacion"].", ";
			$montaje .= $resSalon["ae_desc_ubicacion"]."=>".$resSalon["ae_desc_tipo_montaje"]." - ";	
		}
		$horaIni = $res["ae_hora_ini"];
		$horaFin = $res["ae_hora_fin"];
		$pax = $res["ae_num_personas"];
		
	}

}
?>