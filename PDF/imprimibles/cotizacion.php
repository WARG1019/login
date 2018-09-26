<?php
//set_time_limit(0);
session_start();
include("../../forms/conexion.php");

//include("../mpdf.php");

function valorcoti($num){
 $valor=" ";
$cad=(String)$num;
$cantidad=strlen($cad);
if($cantidad==5){
}else{
if($cantidad==4){
 $valor="0".$num;
}else{
 if($cantidad==3){
 $valor= "00".$num;
 }else{
 if($cantidad==2){
 $valor= "000".$num;
 }else{
 if($cantidad==1){
 $valor="000".$num;
 }
 }
 }
}
}   
return $valor;
}


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

//$mpdf = new mPDF();

$req=$_GET["req"];

/*$hhtml = '<sethtmlpageheader name="header" page="O" value="on" show-this-page="1" />
<sethtmlpageheader name="header" page="E" value="on" />';*/

$sqlReq="select r.*, c.* from requerimientos r, clientes c where r.cliente = c.ae_nom_cliente and ae_id_requerimiento = ".$req;

$query=mysql_query($sqlReq);
//$r=mysql_fetch_array($query);	

$sqlb="";

$queryb=mysql_query($sqlb);

while ($res = mysql_fetch_array($query)) 
{
	$cliente = $res["cliente"];
	$contacto = $res["contacto"];
	$nit=$res["ae_doc_cliente"];
	$direccion = $res["direccion"];
	$descReq = $res["ae_desc_requerimiento"];
	$nit = $res["ae_doc_cliente"];
	//$direccion = $res["ae_dir_cliente"];
	$telefono = $res["ae_tel_cliente"];
	$fechaIni = $res["ae_fecha_inicial"];
	$fechaFin = $res["ae_fecha_final"];
	$hora = $res["ae_hora_ini"]." a ".$res["ae_hora_fin"];
	$lugar= $res["ubicacion"];
	$fPago = $res["pago"];
                    $ciudad=$res["ae_ciudad"];
	$observaciones = $res["obs_comerciales"];
                    $tiposerv=$res["ae_tipo_cliente"];
                    $emailcliente=$res["ae_email_cliente"];
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
	$tipoEvento = $resTipo["ae_desc_tipo_requerimiento"];
	
	$sqlContacto = "select * from contactos where id_cliente = ".$res["ae_id_cliente"]; 
                 // *." and ae_nom_contacto = '".$contacto."'";
	$queryContacto = mysql_query($sqlContacto);
	$resContacto = mysql_fetch_array($queryContacto);
	
	$contacto = $resContacto["ae_nom_contacto"];
	$mailContacto = $resContacto["ae_email_contacto"];
	$cargo = $resContacto["ae_cargo_contacto"];
                    $telefcontacto=$res["ae_tel_contacto"];
	
	$sqlSalon = "select * from ubicaciones_req ur, ubicaciones u, tipo_montaje tp where ur.id_requerimiento = ".$req." and u.ae_id_ubicacion = ur.id_ubicacion  and ur.id_montaje = tp.ae_id_tipo_montaje group by ur.id_ubicacion";
	
	$querySalon = mysql_query($sqlSalon);

	while($resSalon = mysql_fetch_array($querySalon))
	{
		$salon .= $resSalon["ae_desc_ubicacion"].", ";
                                    $montaje .= $resSalon["ae_desc_ubicacion"].":".$resSalon["ae_desc_tipo_montaje"]." - <b>".$resSalon["cant_personas"]." personas<br>";	
	
                                        //$montaje .= $resSalon["ae_desc_tipo_montaje"]." - ";
        }
	
	$sqlUsuario="select * from usuarios where ae_id_usuario = ".$res["id_usuario"];
	$sqlGerente="select * from usuarios where ae_id_usuario = 2";
	$queryGerente=mysql_query($sqlGerente);
	$resGerente = mysql_fetch_array($queryGerente);
	$Gerente = $resGerente["ae_nombre"]." ".$resGerente["ae_apellido"];
	
	$queryUsuario=mysql_query($sqlUsuario);
	$resUsuario = mysql_fetch_array($queryUsuario);
	$usuario = $resUsuario["ae_nombre"]." ".$resUsuario["ae_apellido"];
                
            	
	$horaIni = $res["ae_hora_ini"];
	$horaFin = $res["ae_hora_fin"];
	$pax = $res["ae_num_personas"];
}
       $sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>''";
						
$queryItems = mysql_query($sqlItems);

$subTCat = 0;
$ivaCat = 0;
//toda la informacion del PDF ->http://pdfcrowd.com/save-to-pdf/
//Consulta que captura el nombre del 
$consul="select * from sucursales";
$sql23=mysql_query($consul);
$resultado=mysql_fetch_array($sql23);
 
 $html.= '
   <header>
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
</style>
   
   
   <script>
function fecha_larga(dato){
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date(dato);
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
}
</script>

        <div class="logo">
		<div class="tooltip">
           <img src="../../imagenes_corporativas/logopdf.png" width="229" height="120" >
		   <span class="tooltiptext"><a href="//pdfcrowd.com/url_to_pdf/?width=8.5in&height=11in&vmargin=30mm&hmargin=25mm&pdf_name='.$cliente.'-'.valorcoti($cotizacion).'" title="http://pdfcrowd.com/save-to-pdf/">Descargar como PDF</a></span>
		   </div>
           </div>
		   </div>
        </header>
    <br>
    <br>
    <p class="encabezado0" align="left">'.$ciudad.' '.strtolower(fecha_larga(date("Y-m-d"))).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cotizacion No. '.valorcoti($cotizacion).'</p>';
	
//valorcoti($cotizacion)-strtolower(fecha_larga(date('Y-m-d'))).' </p>

$html.='
<br>
    <br>';
  // echo $tiposerv; 
   if($tiposerv=="Empresarial"){
    $html.='<p class="encabezado1">Señores</p>
   <p class="cliente">'.$cliente.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nit: '.$nit.'</b></p>
   <p class="contacto">Atte: '.$contacto.'</p>
   <p class="telefono">Dir. '.$direccion.'</p>
   <p class="telefono">Tel. '.$telefono.'</p>';
   }else{
     $html.='<p class="encabezado1">Señor(a) :</p>
   <p class="cliente">'.$cliente.'</p>
   <br>
   <p class="telefono">Tel. '.$telefono.'</p>
   <p class="E-mail">Cargo: '.$cargo." - ".$mailContacto.'</p>
   <p class="contacto">Ciudad: '.$ciudad .'</p>';
   }
    
   $html.='<br>
    <br>
    <p class="pa1" align="justify">

        Apreciados señores: 
        <br>
        <br>
		Reciban un cordial saludo del <b>'.$resultado['ae_nom_sucursal'].'</b>.
		<br />
		<br />
        Muchas gracias por considerar a nuestro Hotel como el sitio ideal para alojar a los Ejecutivos e Invitados de su Empresa.
		<br />
		<br />
		Estamos ubicados en un sector exclusivo y estratégico al norte de la ciudad, cerca de restaurantes y a solo unos minutos de la Zona Rosa y del Parque de la 93, permitiendo que nuestro huéspedes tengan a su alcance los sitios mas reconocidos de Bogotá.'//.$resultado['iniciales']
		.'Somos un Hotel de lujo con 132 confortables habitaciones para el Ejecutivo Moderno, el cual cuenta con el Restaurante Ágata, el Bar Big Bang, Servicio a la Habitación las 24 horas, Internet inalámbrico, Centro de Negocios, Piscina, Gimnasio, Turco, Spa y una agradable terraza con una hermosa vista  a los cerros orientales desde el Salón VIP Lounge.
		<br />
		<br />
		Para sus eventos Empresariales, Sociales y Académicos el Hotel dispone de 7 salones con capacidad hasta para 300 personas con ayudas audiovisuales y tecnológicas necesarias para el éxito de su evento, adicionalmente con servicio de parqueadero.
		<br /> 
		<br />
		<center>
<img src="http://doubletree.sitevirtual.tech/imagenes_corporativas/cotizacion.png">
		</center>
        <hr style="margin-top: 10%;">';  
          
        $html.='<p class="piedepagina"><center>Central de reserva: '.$resultado["ae_tel_sucursal"].' - '.$resultado["ae_fax_suc"].' -  '.$resultado["ae_dir_sucursal"].'
		<br />' 
		.$resultado["ae_desc_sucursal"].
		'<br />'
		.iconv("UTF-8", "ISO-8859-1",$resultado["ae_ciu_sucursal"]).
		'</center>
        <br>
        <br>
        <br>
    </p>

    <header>
        <div class="logo">
           <img src="../../imagenes_corporativas/logopdf.png" width="229" height="120">
           </div>
        </header>
        <br>
        <br>
		<p>A continuación, me permito presentar la siguiente propuesta para el evento a realizarse en nuestras instalaciones:
		</p>
        <p class="pa2"><b>
		Fecha(s) del Evento: </b>'.$fechaIni.' - '.$fechaFin.' <b>Tipo de Montaje: </b>'.$tipoEvento.'<br />
		<b>Horario: </b>'.$hora.' <b>Salon(es): </b>'.$lugar.' 
<br />
		<b>Numero de Personas: </b>'.$pax .' Pax 
		</strong></p>
        </p>';
                $sql="select max(ae_dia)  as valor from items_req where id_requerimiento=".$req;
                $querysql1=mysql_query($sql);
                $resmax= mysql_fetch_array($querysql1);
                $maxdia=$resmax["valor"];
              
			  @$fecha=new DateTime($fechaIni);
		  for($j=1;$j<=$maxdia;$j++){
			
			$fecha->modify('+1 day');
			$html.= '
			<center><table width="897" height="100" border="1" cellpadding="0" cellspacing="0" class="tabla" style="font-family:arial; font-size:15px"><br><P><strong style="background-color: lavender;">Dia '.$j.' - 

<script>fecha_larga("'.
$fecha->format("Y-m-d").
'");</script></strong></P> <br>';
      
              
					$html.='<tr>
		        <th><strong>Cant </strong></th>
                  <th align="center"><strong>Descripcion</strong></th>
                  <th align="center"><strong>Vr.Unitario</strong></th>
				  <th align="center"><strong>Impuestos</strong></th>
                  <th align="center"><strong>Vr.Total</strong></th>
	          </tr >';
	
                $sub=0;
				$iva=0;
                $sqlItems = "select ir.*, i.*, c.*, ts.*, u.* from items_req ir, items i, categorias c, tipo_servicio ts, ubicaciones u where ir.id_item = i.ae_id_item and i.id_categoria = c.ae_id_categoria and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.id_requerimiento = ".$req." and ir.id_ubicacion = u.ae_id_ubicacion order by c.ae_id_categoria and ir.id_ubicacion<>''";
						
               $queryItems = mysql_query($sqlItems);
		while($resItems = mysql_fetch_array($queryItems)){
	                     $ivaCat+=(($resItems["ae_valor"]*$resItems["cantidad"])*$resItems["iva"])/100;
                                              if($j==$resItems["ae_dia"]){
$html.='<tr>
			      <td align="center">  '.$resItems["cantidad"].'</td>
			      <td align="center"> <b>'.iconv('UTF-8', 'ISO-8859-1',$resItems["ae_desc_item"]).'</b><br>'. iconv("UTF-8", "ISO-8859-1", $resItems["descripcion"]).'</td>
                                                                 <td align="center">$'.number_format(($resItems["ae_valor"]+$resItems["descuento"]),0,'','.').'</td>

<td align="center"><b>('.substr($resItems["iva"],0,2).'%)</b> - $'.number_format(($resItems["ae_valor"]+$resItems["descuento"])*$resItems["cantidad"]*($resItems["iva"]/100),0,'','.'). '</td>';

$iva =($resItems["ae_valor"]+$resItems["descuento"])*$resItems["cantidad"]*($resItems["iva"]/100);
$iva_total=$iva_total+$iva;

$html.='<td align="center">$'.number_format(($resItems["ae_valor"]+$resItems["descuento"])*$resItems["cantidad"]+$iva,0,'','.').'</td>
		                         </tr>';
				
               	$sub=$sub+($resItems["ae_valor"] + $resItems["descuento"])*$resItems["cantidad"];

                                                    }
                                        }                        
	$html.='<tr>
                               <td style="border-color:transparent;" colspan="3"></td>
                               <td  style="border:1px solid lightgray;"><strong><center>SUBTOTAL</center></strong></td>
                               <td style="border:1px solid lightgray;">$'.number_format($sub,0,'','.').'</td>
                                </tr>
                               <tr>
                               <td style="border-color:transparent;" colspan="3"></td>
                               <td style="border:1px solid lightgray;"><strong><center>Total Imp.</center></strong></td>
                               <td style="border:1px solid lightgray;">$'.number_format($iva_total,0,"",".").'</td>
                                 </tr>
                                <tr>
                               <td style="border-color:transparent;" colspan="3"></td>
                               <td style="border:1px solid lightgray;"><strong><center>TOTAL</center></strong></td>
                               <td  style="border:1px solid lightgray;">$'.
							   number_format($iva_total+$sub,0,'','.')
							   .'</td>
                                 </tr>';	
                
	}

        $sqlcons="select * from observacion  where  ae_id_requerimiento = ".$req;

        $sqlconsulta=mysql_query($sqlcons);
        
        $resultconsult=mysql_fetch_array($sqlconsulta);
        
       // echo $resultconsult["obs_operativas"];
              $html.='
                  </table></center>
              <br>
			 <p> <img src="http://www.wsdot.com/traffic/trafficalerts/images/33.gif"> <b>Importante: </b> El valor del salón está ligado única y exclusivamente al consumo de alimentos y bebidas, en caso de variar o modificar este último también se modificará el cobro del salón.
			 </p>
              <center> 
<table  class="tablet"width="897" height="150" style=" text-align: center;  border:1px solid black; border-radius:3px;font-family:arial"> 
<tbody style=" text-align: center; ">
  <tr> 
     <td style=" text-align: center; padding:5px;">
              <h2 style=" text-align: center; ">Observaciones Importantes:</h2> <br> 
                <p style=" text-align: center; "><b> Dia: '.iconv("UTF-8", "ISO-8859-1",$resultconsult["dia"])."</b><hr />".iconv("UTF-8", "ISO-8859-1",$resultconsult["obs_operativa"]).'</p>
       </td> 
    </tr> 
</tbody>
</table> </center>   
    <br>
    <br>
    <br>
	<br>
    <br>
    <br>
	<br>
    <br>
    <br>
	<br>
    <br>
    <br>
	<br>
    <br>
    <br>
	<br>
	 <header>
        <div class="logo">
           <img src="../../imagenes_corporativas/logopdf.png" width="229" height="120">
           </div>
        </header>
	<br>
	<br>
	<br>
	
    <h2 style=" text-align: center; font-family: sans-serif; ">Garantía de Evento</h2><br>
	
	<p class="pa1" align="justify" style="*/font-size:20px; line-height:1.5;/*"> Para garantizar su reserva y asignarle un salón de acuerdo a disponibilidad, es necesario que nos envíe una comunicación confirmando que acepta la cotización acordada con el Hotel; una vez recibida, se verificará la disponibilidad para garantizar el evento.</p>
<p>&nbsp;</p>	
	<p align="justify" class="pa1">Esta cotización no implica una reservación. Entiéndase por confirmación el pago del 50% del evento y la aceptación escrita vía e-mail. No se nos aplican retenciones.</p>
<p>&nbsp;</p>	
     <p align="justify" class="pa1"><b>Los menús para los eventos se deberán definir con mínimo 15 días antes de la fecha pactada, de lo contrario serán a elección del Chef.</b></p>
<p>&nbsp;</p>	 
     <p align="justify" class="pa1">Cualquier modificación referente a la reducción de los consumos del evento como: número de personas, tiempo de utilización del salón, cambio de menús, equipos audiovisuales, etc., debe ser informado por escrito con 72 horas de anticipación al evento, después de este término no se aceptan disminuciones.</p>
<p>&nbsp;</p>	 
     <p align="justify" >De presentarse se aplicaran las siguientes penalidades por parte de '.$resultado['iniciales'].'</p>
<p>&nbsp;</p>	 
     <p>- 8 días antes de la fecha del evento, se cobrará el 60% del valor total contratado</p>
<p>&nbsp;</p>
<p>- 3 días antes de la fecha del evento, se cobrará el 100% del valor total contratado.</p>
<p>&nbsp;</p>
     <br>
     <h2 style="text-align:center; font-family: sans-serif;">Parqueaderos</h2><br>
    <p align="justify" style="*/font-size:20px; line-height:1.5;/*" class="pa1"> Actualmente contamos con espacios para estacionamiento como cortesía; sin embargo están sujetos a disponibilidad del momento.</p>
<p>&nbsp;</p>	
     <p align="justify" class="pa1">Agradecemos su interés en nuestros servicios y quedamos a la espera de su  confirmación.</p>
<p>&nbsp;</p>	 
     <p align="justify" class="pa1">Cualquier inquietud o solicitud, con gusto la atenderemos en nuestro <b>'.$resultado['ae_nom_sucursal'].'</b>.</p>
<p>&nbsp;</p>	 
    <br>
    <p class="pa1">
    Atentamente,
    </p>
    <br>
    <table width="897" height="240">
    <tr>
        <td><p><strong>'.$resUsuario["ae_nombre"]." ".$resUsuario["ae_apellido"].'</strong></p>
        <p>Asesor Ejecutivo(a)</p>
        <p>Tel. '.$resUsuario["ae_mobil"].'</p>
        <p>E-mail. ' .$resUsuario["ae_correo"].'</p>
        </td>
        <center><td>
        <p><strong>'.$resGerente["ae_nombre"]." ".$resGerente["ae_apellido"].'</strong></p>
        <p>Gerente operativo</p>
        <p>Tel. '.$resGerente["ae_mobil"].'</p>
		<p>Email. '.$resGerente["ae_correo"].'</p>
        </td>
        </tr>
    </table>
    <br>
    <br>
	<br>
        

';
              
        ?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:x="urn:schemas-microsoft-com:office:excel"
		xmlns="http://www.w3.org/TR/REC-html40">
<head>
        <meta charset="iso-8859-1" />
        <link rel="shortcut icon" href="../../imagenes_corporativas/kaf.ico">
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