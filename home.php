<?php

//session_start();

require("enlace.php");


if (isset($_GET['b'])) {

        $g = $_GET['b'];

    }


if(isset($_POST['b'])){

   $g = $_POST['b'];

}    

if (isset($_GET['c'])) {

        $c = $_GET['c'];

    }


if(isset($_POST['c'])){

   $c = $_POST['c'];

}

if (isset($_POST["usu"])){


    $c = $_POST["c"];

    $b = $_POST["b"];

    $usu = $_POST["usu"];

 }


if (isset($_GET["usu"])){


    $c = $_GET["c"];

    $b = $_GET["b"];

    $usu = $_GET["usu"];

}


if(!isset($_POST["clien"])){

    $_POST["clien"] = "Ninguno";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Aplicacion Kaf</title>

    <link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>

    <script src="js/all.js"></script>

	<link href="bootstrap/estilos2.css" rel="stylesheet"/>
    
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script src="js/jquery.min.js"></script>

    <script src="js/js/jquery-1.5.2.min.js"></script>

    <script src="js/main.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/js/scriptbreaker-multiple-accordion-1.js"></script>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">




    <!--<link rel="stylesheet" href="js/plugins/jqueryui/all/themes/base/jquery.ui.all.css" />-->
   
</head>
<body>
	
	<header class="container-fluid fixed-top">
     <div class="row">
     	<div class="col-md-6">
         <h3 class="text-left"><a class="enlace" style="text-decoration:none;" href="#"><span class="titulo">Kaf</span>Admin</a></h3>
     	</div>
     	<div class="col-md-6">
     	 <h3 class="text-right">Usuario: <?php echo $_SESSION["user"]; ?></h3>	 
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
								<li><a href="#"><i class="fas fa-cog"></i>&nbsp;&nbsp;Configuracion<i class="icon-derecha fa fa-chevron-down"></i></a>
                                 <ul style="display:none;">
                                    <li><a href="?b=1" id="us">Administracion</a></li>
                                    <li><a href="home.php?c=43" >Impuesto</a></li>
                                    <li><a href="home.php?c=44" >Propina</a></li>
                                    <li><a href="home.php?c=30">Datos servidor de Correo</a></li>
                                    <li><a href="home.php?c=4">Crear Sucursal</a></li>
                                    </ul>
                                </li>
								<li><a href="#"><i class="fas fa-chart-pie"></i>&nbsp;&nbsp;Comercial<i class="icon-derecha fa fa-chevron-down"></i></a>
                                <ul class="nuevomenu">
                                 	<li><a href="?b=2" id="cli">Clientes</a></li>
                                 	<li><a href="?b=3">Panel de cotizaciones</a></li>
                                 	<li><a href="">Cotizaciones Canceladas</a></li>
                                 	<li><a href="">Cotizaciones Pendientes por aprobacion</a></li>
                                  </ul>
								</li>
								<li><a href="#""><span class="fa fa-calendar"></span>&nbsp;&nbsp;Calendario</a></li>
								<li><a href="#"><i class="fas fa-comment-alt"></i>&nbsp;&nbsp;Mensajeria</a></li>
								<li><a href="#"><span class="fa fa-image"></span>&nbsp;&nbsp;Diapositivas</a></li>
								<li><a href="#"><span class="fa fa-birthday-cake"></span>&nbsp;&nbsp;Cumpleaños</a></li>
								<li><a href="#"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Salir</a></li>	
								</ul>
							</nav>
					  </div>   
			    </div>
	    </div>
</div>


    <section class="container contenedor col-5 col-md-9 mt-5">
        <section class="row">
           <article class="col-12  mt-3">
              <div class="card pt-5 pr-5 pl-5 pb-5">
                  <div class="card-block">
                    <div class="container">
                        <div class="row nuevocontenedor">
                         <?php

                         $metodo = new enlace();

                         
                         if(isset($g)){

                         switch ($g) {
                          
                         case 1: 
                           
                        echo $metodo->usuarios();

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
              <div class="card  pt-5 pr-5 pl-5 pb-5">
                  <div class="card-block" id="contenedor23" style="border:5px solid lightgray; border-radius:7px;">

                    <?php

                       if(isset($c)){

                       switch($c){
                        case 1:
                           
                           echo $metodo->crear_cliente();
                        break;

                        case 2: 
                           
                           echo $metodo->mostrar_usuario();
                        
                        break;
                        
                         case 3:
                         
                         echo $metodo->crear_usuario();

                         break; 

                        case 4:

                        echo $metodo->editar_usuario($usu);

                        break;
                        
                        case 5: 

                        echo $metodo -> crear_evento();  
                          
                        break;  

                        case 6:

                        echo $metodo -> mostrar_cliente();

                        break;

                        case 7:

                        echo $metodo -> ver_requerimiento();

                     }

                    } 
                   

                    ?>
              </div>    
            </article>


        </section>
      </section>    

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

              <script>

                $(document).ready(function(){
                    $('#horainicio').timepicker({
                         scrollbar: true,
                         showDuration: true
                    });

                    $('#horafinal').timepicker({

                      scrollbar: true,
                      showDuration:true
                    });

                });

                </script>


                <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>



  </body>
</html>

