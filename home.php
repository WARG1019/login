<?php

require("enlace.php");

if (isset($_GET['b'])) {

        $g = $_GET['b'];

    } 


 if (isset($_POST['b'])) {

        $g = $_POST['b'];

    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Aplicacion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="bootstrap/font-awesome.min.css" rel="stylesheet"/>
	<link href="bootstrap/estilos2.css" rel="stylesheet">

</head>
<body>
	
	<header class="container-fluid">
     <div class="row">
     	<div class="col-md-6">
         <h3 class="text-left"><a class="enlace" href="#"><span class="titulo">Kaf</span>Admin</a></h3>
     	</div>
     	<div class="col-md-6">
     	 <h3 class="text-right">Practica</h3>	 
     	</div>
     </div>
	</header>	

<div class="siderbar">	
	 <div class="logotipo"></div>
	  <!-- <img src="imagen/logotipo23.png" class="img-fluid" alt="">	!-->
	  <div class="search">
	  	<img src="imagenes/search.png" alt="" style="margin-top:10px;">
	  	<input value="Kaf Event Manager" type="text" name="s" id="s" readonly />
	  </div>
        <div class="container">
	           <div class="row divide">
			           <div class="col-12 col-md-12">
						    <nav class="menu topnav">
							    <ul>
								<li><a href="#" class="desplegable" target="scriptbreaker"><span class="fa fa-home"></span>&nbsp;&nbsp;Informes<i class="icon-derecha fa fa-chevron-down"></i></a>
                                 <ul class="submenu">
                                 	<li><a href="#">Ubicaciones</a></li>
                                 	<li><a href="#">Vendedores</a></li>
                                 	<li><a href="#">Eventos</a></li>
                                 	<li><a href="#">Cotizaciones</a></li>
                                 	<li><a href="#">Items</a></li>
                                 	<li><a href="#">Clientes</a></li>
                                 	<li><a href="#">Indicadores</a></li>
                                  </ul>
								</li>
								<li><a href="#"><span class="fa fa-cog"></span>&nbsp;&nbsp;Configuracion</a></li>
								<li><a href="#"><span class="fa fa-pie-chart"></span>&nbsp;&nbsp;Comercial<i class="icon-derecha fa fa-chevron-down"></i></a>
                                <ul class="nuevomenu">
                                 	<li><a href="pract.html" target="_blank" >Clientes</a></li>
                                 	<li><a href="">Panel de cotizaciones</a></li>
                                 	<li><a href="">Cotizaciones Canceladas</a></li>
                                 	<li><a href="">Cotizaciones Pendientes por aprobacion</a></li>
                                  </ul>
								</li>
								<li><a href="home.php?b=2"><span class="fa fa-calendar"></span>&nbsp;&nbsp;Calendario</a></li>
								<li><a href="home.php?b=3"><span class="fa fa-commenting-o"></span>&nbsp;&nbsp;Mensajeria</a></li>
								<li><a href="#"><span class="fa fa-image"></span>&nbsp;&nbsp;Diapositivas</a></li>
								<li><a href="#"><span class="fa fa-birthday-cake"></span>&nbsp;&nbsp;Cumpleaños</a></li>
								<li><a href="#"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Salir</a></li>	
								</ul>
							</nav>
					  </div>   
			    </div>
	    </div>
</div>

      <section class="container contenedor  col-5 col-md-9 mt-5">
        <section class="row">
           <article class="col-12  mt-3">
              <div class="card pt-3 pr-3 pl-3 pb-3">
                  <div class="card-block">
                    <div class="container">
                        <div class="row nuevocontenedor">
                         <?php

                         $metodo = new enlace();

                         
                         if(isset($g)){

                         switch ($g) {
                          
                         case 1: 
      
                          
                            echo '<script>

                            $(".nuevocontenedor").empty();  

                            $(".nuevocontenedor").load("' . $metodo -> cliente() . '");


                            </script>';


                         break; 

                         case 2:

                         echo $metodo->cliente();

                          break;

                        case 3:
                        echo "<script>
                        $('.nuevocontenedor').empty();
                        </script>
                        ";
                        echo $metodo->paneldecotizacion();

                         break;

                           }     
                         }

                            
                         ?> 
                        </div>
                    </div>
                  </div>
              </div>    
            </article>

            <article class="col-12 mt-3 ">
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, rerum!</p> !-->
              <div class="card pt-3 pr-3 pl-3 pb-3">
                  <div class="card-block">
                    <h3>Encabezado</h3>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos officiis asperiores expedita ipsa magnam voluptates accusamus, debitis a error possimus deserunt, quis, dolor nulla eius harum sed laboriosam dolorum ut!
                  </div>
              </div>    
            </article>


        </section>
				<script src="js/jquery.min.js"></script>
                <script src="js/jquery-1.5.2.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="bootstrap/bootstrap.min.css">-->
				<!--<script src="js/main.js"></script>-->
                <script type="text/javascript" src="js/scriptbreaker-multiple-accordion-1.js"></script>

<script language="javascript">
  
$(document).ready(function() {
//use the scriptbreaker.com multiple accordion menu
    $(".topnav").accordion({
        accordion:true,
        speed: 500,
        closedSign: ' ',
        openedSign: ' '

    });
});
  
</script>

  </body>
</html>