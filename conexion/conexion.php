<?php
$local="localhost";
$root="root";
$contra ="warg";
$bda = "u465272718_cite";
$conexion = @mysql_connect($local,$root,$contra);
@mysql_select_db($bda,$conexion)or die ("falla la conexion  db1");
?>