<?php 
$update="?req=".$_GET['req']."&ord=".$_GET['ord']."&folio=".$_GET['folio']."&EjecutivoCuenta=".$GET['EjecutivoCuenta']."&FormaPago=".$_GET['FormaPago'].
"&TotalFinal=".$_GET['TotalFinal']."&TotalCotizacion=".$_GET['TotalCotizacion']."&Diferencia=".$_GET['Diferencia']."&Item1=".$_GET['Item1']."&Valor1=".$_GET['Valor1'].
"&Total1=".$_GET['Total1']."&Item2=".$_GET['Item2']."&Valor2=".$_GET["Valor2"]."&Item3=".$_GET['Item3']."&Valor3=".$_GET['Valor3']."&Total3=".$_GET['Total3'].
"&Item4=".$_GET['Item4']."&Valor4=".$_GET['Valor4']."&Total4=".$_GET['Total4']."&Item5=".$_GET['Item5']."&Valor5=".$_GET['Valor5']."&Total5=".$_GET['Total5'].
"&Item6=".$_GET['Item6']."&Valor6=".$_GET['Valor6']."&Total6=".$_GET['Total6']."&Item7=".$_GET['Item7']."&Valor7=".$_GET['Valor7']."&Total7=".$_GET['Total7'].
"&Item8=".$_GET['Item8']."&Valor8=".$_GET['Valor8']."&Total8=".$_GET['Total8']."&Item9=".$_GET['Item9']."&Valor9=".$_GET['Valor9']."&Total9=".$_GET['Total9'].
"&Item10=".$_GET['Item10']."&Valor10=".$_GET['Valor10']."&Total10=".$_GET['Total10'];

mysql_query("update ordenes SET datos ='".$update."' WHERE ordenes.ae_id_orden = ".$ord);

header('"Location: orden.php'.$update.'"');
?>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=<?php echo'orden.php'.$update;?>"> 
