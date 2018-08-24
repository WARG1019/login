
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet"/>
<script src="../js/jquery.min.js"></script>

<?php

require("../conexion/conexion.php");
include("../enlace.php");

$metodos = new enlace();

$metodos -> listar_cliente();



?>