<?php
//set_time_limit(0);
include("../../conexion/conexion.php");
include("../mpdf.php");


$req=$_GET["req"];
//$mpdf = new mPDF();
//setlocale(LC_CTYPE,"es_ES");
/*$hhtml = '
<htmlpageheader name="myHTMLHeaderOdd" style="display:none">
<div style="background-color:#BBEEFF" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpageheader>
<htmlpagefooter name="myHTMLFooterOdd" style="display:none">
<div style="background-color:#CFFFFC" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpagefooter>
<sethtmlpageheader name="myHTMLHeaderOdd" page="O" value="on" show-this-page="1" />
<sethtmlpagefooter name="myHTMLFooterOdd" page="O" value="on" show-this-page="1" />
';
*/

$sql="select req.cliente cli,
cli.ae_tel_cliente clitel,cli.ae_representante reprs,cli.ae_ciudad ciucli,
suc.ae_nom_sucursal nomsuc,suc.ae_tel_sucursal telsuc,
suc.ae_ciu_sucursal ciusuc,suc.ae_dir_sucursal dirsuc,
suc.ae_fax_suc faxsuc,req.ae_desc_requerimiento descr
from clientes cli,
requerimientos req,sucursales suc
where 
req.cliente=cli.ae_nom_cliente
and req.ae_id_requerimiento='$req'
and
suc.ae_id_sucursal=cli.id_sucursal";
$query=mysql_query($sql);
$r=mysql_fetch_array($query);	



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$sqlb="select req.ae_fecha_inicial fechain,req.ae_fecha_final fechafin,req.cliente cli,
coti.ae_fecha_cotizacion fechcot,req.ubicacion lugar,
req.ae_hora_ini hi,req.ae_hora_fin hf,cli.ae_doc_cliente doccli,
IF(coti.ae_estado_cotizacion=1,'Aprobadas',
(IF(coti.ae_estado_cotizacion=3,'Sin Aprobar','Canceladas'))) estado,
FORMAT(sum(it.ae_valor*ir.cantidad),2) valor,coti.ae_id_cotizacion nocot,it.ae_desc_item item,
FORMAT(it.ae_valor,2) vu,ir.cantidad cant ,total.tc tc,total.tot tot,total.iva iva
from cotizaciones coti,clientes cli,
requerimientos req,items it,items_req ir,(select FORMAT(sum(i.ae_valor*itr.cantidad),2) tc,
FORMAT((sum(i.ae_valor*itr.cantidad)*16)/100,2) iva, FORMAT(sum(i.ae_valor*itr.cantidad)+
(sum(i.ae_valor*itr.cantidad)*16)/100,2) tot
,r.ae_id_requerimiento ireq
from requerimientos r,items_req itr,items i where r.ae_id_requerimiento=itr.id_requerimiento
and i.ae_id_item=itr.id_item and r.ae_id_requerimiento='$req') total
where 
req.ae_id_requerimiento=coti.id_requerimiento
and req.cliente=cli.ae_nom_cliente
and ir.id_requerimiento=req.ae_id_requerimiento
and ir.id_item=it.ae_id_item
and req.ae_id_requerimiento='$req'
and total.ireq=req.ae_id_requerimiento
group by it.ae_id_item";
$queryb=mysql_query($sqlb); 


	

	$html='
	<header>
	<style>
	   #cabcotizacion{
		
		margin-top:200px;
		 border-collapse: collapse;
  border: 1px solid #666666;
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #f6f6f6;
  text-align:left;
		}
		#dercotizacion{
		margin-left:330px;
		margin-top:-140px;
		 border-collapse: collapse;
  
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #f6f6f6;
  text-align:left;
		}
		#cuerpocot{
		margin-top:65px;;
		border-style:solid;
		border-width:1px;
		height:100%;
		}
	#tabla{
		width:100%;
	 border-collapse: collapse;
  border: 1px solid #666666;
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #f6f6f6;
  text-align:left;	}
	
	#sub{
		float:right;
		border-style:solid;
		border-width:2px;
		text-align:right;
		width:200px;
		margin-right:10px;
		margin-top:280px;
		
			}
		table td{
			border-style:solid;
			border-width:1px;
			}
#esp {
	height:500px;
	margin-top:200px;
	
	
	}
	</style>
	</heaader>
	<div id="cabcotizacion">
	<div id="izqcotizacion">
	<p><img src="../../imagenes_corporativas/logokaf.png"></p>
	<p>&nbsp;Sucursal: '.$r["nomsuc"].'</p>
	<p>&nbsp;Direccion: '.$r["dirsuc"].'</p>
	<p>&nbsp;Telefono:'.$r["telsuc"].'</p>
	<p>&nbsp;Fax: '.$r["faxsuc"].'</p>
	<p></p>
	
	</div>
	<div id="dercotizacion">
	
	
	<p>&nbsp;Evento: '.$r["descr"].'</p>
	<p>&nbsp;Cliente: '.utf8_decode($r["cli"]).'</p>
	<p>&nbsp;Telefono Cliente: '.$r["clitel"].'</p>
	<p>&nbsp;Ciudad: '.$r["ciucli"].'</p>
	</div>
	
	</div>
	<div id="cuerpocot">
	
	<table id="tabla">
	<tr>
	<td>
	Item
	</td>
	<td>
	Cantidad
	</td>
	<td>
	Valor/U
	</td>
	<td>Valor/T</td>
	</tr>';
	while($r2=mysql_fetch_array($queryb)){
	$html.='<tr>
	<td>'.$r2["item"].'</td>
	<td>'.$r2["cant"].'</td>
	<td>'.$r2["vu"].'</td>
	<td>'.$r2["valor"].'</td>
	</tr>
	';
	
	
	$sub=$r2["tc"];
	$iva=$r2["iva"];
	$tot=$r2["tot"];
	
	
	}
	
	
	$html.='
	<tr id="esp">
	<td></td>
	<td></td>
	<td></td>
	<td>
	<table ><tr><td>Subtotal: '.$sub.'</td></tr>
	<tr><td>Iva: '.$iva.'</td></tr>
	<tr><td>Total: '.$tot.'</td></tr>
	</table>
	</td>
	
	</tr>
	
	</table>
	</div>
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