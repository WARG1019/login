


<?php
set_time_limit(0);
include("../../forms/htmlforms.php");
include("../mpdf.php");
$form = new htmlforms();
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

 

$form->select("items_req","*","where id_requerimiento=".$req."");
      $r=mysql_query($form->query);
	
$mpdf = new mPDF();
$hhtml ='
<htmlpageheader name="myHTMLHeaderOdd" style="display:none">
<div style="background-color:#BBEEFF" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpageheader>
<htmlpagefooter name="myHTMLFooterOdd" style="display:none">
<div style="background-color:#CFFFFC" align="center"><b>&nbsp;{PAGENO}&nbsp;</b></div>
</htmlpagefooter>
<sethtmlpageheader name="myHTMLHeaderOdd" page="O" value="on" show-this-page="1" />
<sethtmlpagefooter name="myHTMLFooterOdd" page="O" value="on" show-this-page="1" />
';
	$html='
	<style>
	   #cabcotizacion{
		border-style:solid;
		border-width:3px;
		margin-top:200px;
		}
		#dercotizacion{
		margin-left:330px;;
		margin-top:-165px;;
		
		}
		#cuerpocot{
		margin-top:65px;;
		border-style:solid;
		border-width:3px;
		}
	
	
	
	</style>
	
	
	<div id="contcotizacion">
<div id="cabcotizacion">
<div id="izqcotizacion">
<p><h2>Cotizacion No. '.$form->label("cotizaciones","ae_id_cotizacion","where id_requerimiento=".$req."").'</h2></p>
<p>Fecha. '.$form->label("cotizaciones","ae_fecha_cotizacion","where id_requerimiento=".$req."").'</p>
<p>Cliente. '.$form->label("requerimientos,clientes","ae_nom_cliente","where ae_id_requerimiento=".$req." and 
ae_id_cliente=id_cliente").'</p>
<p>Documento(Nit,CC).'.$form->label("requerimientos,clientes","ae_doc_cliente","where ae_id_requerimiento=".$req." and 
ae_id_cliente=id_cliente").'</p>
<p>Email.'.$form->label("requerimientos,clientes","ae_email_cliente","where ae_id_requerimiento=".$req." and 
ae_id_cliente=id_cliente").'</p>
</div>
<div id="dercotizacion">

<p>Fecha Evento. '.$form->label("requerimientos","ae_fecha_evento","where ae_id_requerimiento=".$req."").'</p>
<p>Hora Inicio. '.$form->label("requerimientos","ae_hora_ini","where ae_id_requerimiento=".$req."").'</p>
<p>Hora Fin. '.$form->label("requerimientos","ae_hora_fin","where ae_id_requerimiento=".$req."").'</p>
<p>Ubicacion. '.$form->label("requerimientos,ubicaciones","ae_desc_ubicacion","where ae_id_requerimiento=".$req."
and id_ubicacion=ae_id_ubicacion").'</p>
</div>


</div>
<div id="cuerpocot">
<table  class="tablecot">
<tr><td >Item</td>
<td >Cantidad</td>
<td >Valor Unitario</td>
<td >Total</td>
<tr>';


 while($resu=mysql_fetch_array($r)){
	 $cond="where ae_id_item=".$resu["id_item"]." ";	
$html.='<td>'.$form->label("items,items_req","ae_desc_item",$cond).'</td>
<td>'.$form->label("items,items_req","cantidad",$cond).'</td>
<td>'.$form->label("items,items_req","ae_valor",$cond).'</td>
<td>'.$form->label2("items,items_req","(ae_valor*cantidad) as vt","vt",$cond).'</td>
<tr>

';

 }


$html.='</tr></table>
</div>

<div id="pie">
<table>
<tr>
<td>Sub Total $'.$form->label2("items,items_req","sum(ae_valor*cantidad) as total","total","where 
id_requerimiento=".$req." and ae_id_item=id_item").'</td><tr>
<td>Impuesto $'.$form->label2("items,items_req","sum(ae_valor*cantidad)*0.16 as imp","imp","where 
id_requerimiento=".$req." and ae_id_item=id_item").'</td>
<td>Total $'.$form->label2("items,items_req","sum(ae_valor*cantidad)*0.16+sum(ae_valor*cantidad) as imp","imp","where 
id_requerimiento=".$req." and ae_id_item=id_item").'</td>
</tr>

</tr>
</table>
</div>



</div>

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