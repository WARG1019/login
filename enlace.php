<?php

session_start();
require("conexion/conexion.php");


//require("funciones/funciones.php");

 //$func = new funciones();



?>

  
   
    <script src="js/jquery.min.js"></script>


    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>!-->
    
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

     <script src="js/Moment.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
   
    <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css"/>

    <script src="js/bootstrap-datetimepicker.min.js"></script> 
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    
    <!--<script src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">


    <link href="js/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet">

    <link href="js/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet">-->



    <!--<link rel="stylesheet" href="bootstrap/jquery.ui.min.css" />
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>-->



    <script type="text/javascript">
                $(document).ready(function() {  
                $ (".fancybox"). fancybox();
                });



            $("#enlace12").fancybox({
                width       : '90%',
                height      : '90%',
                maxWidth    : 800,
                maxHeight   : 600,
                fitToView   : false,
                autoSize    : false,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none',
            });


          

                     

                    </script> 


<?php

class enlace {


 function cliente(){

 	$opc='<div class="col-2 col-md-2 offset-0">
	 <a href="home.php?c=1&b=2" class="btn btn-primary" style="width:200px; height:80px;"> <i class="fas fa-user-plus fa-2x fa-lg"></i>
	 <br>
	 <label for="username"><strong>Crear Clientes</strong></label>	
	 </a>
	 </div>
	 <div class="col-2 col-md-2 offset-1">
	 <a href="home.php?c=6&b=2" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-user-circle fa-2x fa-lg"></i>
	 <br>
	 <label for="username"><strong>Clientes</strong></label>	
	</a>
	</div>
	<div class="col-2 col-md-2 offset-1">
	<a href="" class="btn btn-warning" style="width:200px; height:80px;"><i class="fas fa-chart-pie fa-2x fa-lg"></i>
	<br>
	<label for="username"><strong>Sectores</strong></label>	
	</a>
	</div>
	<div class="col-2 col-md-2 offset-1">
	<a href="" class="btn btn-danger" style="width:200px; height:80px;"><i class="fas fa-chart-pie fa-2x fa-lg"></i>
	<br>	
	<label for="username"><strong>Crear Sectores</strong></label>	
	</a>
	</div>';
	 		       echo $opc; 		        		
 }


 function paneldecotizacion(){

  $panel='<div class="col-2 col-md-2 offset-0">
  <a href="home.php?c=5&b=3" class="btn btn-primary" style="width:200px; height:80px;"><i class="fas fa-calendar-alt fa-2x fa-lg"></i>
  <br>
  <label for="newEvent"><strong>Nuevo Evento</strong></label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="home.php?c=7&b=3" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-list-alt fa-2x fa-lg"></i>
  <br>
  <label for="username"><strong>Pre Cotizacion</strong></label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="" class="btn btn-warning" style="width:200px; height:80px;"><i class="fas fa-list-ul fa-2x fa-lg"></i>
  <br>
  <label for="username"><strong>Cotizaciones</strong></label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="" class="btn btn-danger" style="width:200px; height:80px;"><i class="fas fa-shopping-cart fa-2x fa-lg"></i>
  <br>	
  <label for="username"><strong>Orden de Compra</strong></label>	
  </a>
  </div>';
	 	echo $panel;	        	

   }

function crear_cliente(){

$clien='<div class="container">
 <div class="row">       
  <div class="col-12">
  <h2>Formulario Creacion Cliente</h2>
  <br>
  <br>
  </div>
 </div>
</div> 
 <div class="container">
 <div class="row">
  <div class="col-12">
<form  method="post" action="home.php" id="formcli">
<input type="hidden" name="b" value="2">
<input type="hidden" name="c" value="1">
<input type="hidden" name="gcli" >
        <div class="form-group row">
                            
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Escriba o digite por favor el nombre del cliente"/>&nbsp;&nbsp;<label for="cliente1">Cliente</label>
                                  <input type="text"  class="form-control" placeholder="Cliente" name="cliente" id="cliente">
                                  </div>
                                 <div class=" col-12 col-md-5">
                                   <img src="imagenes/icon_help.png" title="Teléfono(s) fijos del contacto (indicar extensiones)."/>&nbsp;&nbsp;<label for="telefono1">Telefono Contacto</label>
                                <input type="text"  class="form-control" placeholder="Telefono" name="telefono" id="telefono">
                            </div>
                        
                       </div>
                  


        <div class="form-group row">
                            
                               <div class=" col-10 ">
                                  <img src="imagenes/icon_help.png" title="Seleccione el tipo de documento, digite el documento puede incluir guiones."/>&nbsp;&nbsp;<label for="documento1">Documento</label>
                                  <input type="text"  class="form-control" placeholder="Documento" name="doc" id="doc">
                                  <select name="td" class="form-control">
                                   <option value="">Tipo</option>
                                   <option>CC</option>
                                   <option>NIT</option>
                                   </select>
                                </div>
        </div>

       
        
        <div class="form-group row">                        
                                 <div class=" col-10">
                                <img src="imagenes/icon_help.png" title="Seleccione si es un cliente personal o viene en representación de una empresa."/>&nbsp;&nbsp;<label for="tipo_cliente">Tipo de Cliente</label>
                                  <select name="tipo" class="form-control">
                                  <option value="">--Seleccione--</option>
                                  <option value="Empresarial">Empresarial</option>
                                  <option value="Personal">Personal</option>
                                  </select>
                              
                            </div>

        </div>               


 <div class="form-group row">
                            
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Direccion(es) de correo electrónico."/>&nbsp;&nbsp;<label for="correo1">Correo</label>
                                   <input type="text" class="form-control" placeholder="Correo" name="correo" id="correo">
                                </div>
                                 <div class=" col-12 col-md-5">
                                <img src="imagenes/icon_help.png" title="Ciudad de residencia del cliente."/>&nbsp;&nbsp;<label for="ciudad1">Ciudad</label>
                                  <input type="text"  class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad">
                            </div>
        </div>    


    <div class="form-group row">
                            
                               <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="¿Cómo conocí el cliente?."/>&nbsp;&nbsp;<label for="origencliente" class="control-label">Origen Cliente</label>
                                  <select name="oc" class="form-control" >
                                  <option value="">--Seleccione--</option>
                                  <option value="Telefono">Telefono</option>
                                  <option value=">Internet">Internet</option>
                                  <option value="Web">Web</option>
                                  <option value="Recomendacion">Recomendacion</option>
                                  <option value="Personal">Visita Personal</option>
                                  </select>
                                </div>                                
                                 <div class=" col-12 col-md-10">
                                <img src="imagenes/icon_help.png" title="¿El cliente manejará crédito con el Hotel?."/>&nbsp;&nbsp;<label for="Credito" class="control-label">Credito</label>
                                <select name="credito" class="form-control">
                                <option value="">--Seleccione--</option>
                                <option value="NO">No</option>
                                <option value="SI">Si</option>
                                </select>
                            </div>
        </div>               







<div class="form-group row">
                            
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Dirección de contacto."/>&nbsp;&nbsp;<label for="direccion">Dirección</label>
                                  <input type="text"  class="form-control" placeholder="Dirección" name="direccion" id="direccion">
                                </div>
                                 <div class="col-12 col-md-5">
                                <img src="imagenes/icon_help.png" title="Dirección de contacto."/>&nbsp;&nbsp;<label for="Dir. Facturación">Dir. Facturacion</label>
                                <input type="text"  class="form-control" placeholder="Direccion alterna de cliente" name="dir_facturacion" id="dir_facturacion">
                            </div>

        </div>               


<div class="form-group row">
                            
                               <div class=" col-12 col-md-12" style="display:none;">
                                  <img src="imagenes/icon_help.png" title="Sector empresarial del cliente."/>&nbsp;&nbsp;<label for="sector" class="">Sector</label>                   
                                 <div class=" col-12 col-md-12" style="display:none;">
                                <label for="Tipo Relacion">Tipo Relacion</label>
                                <select name="tr" class="form-control">
                                <option value="Cliente">Cliente</option>
                                </select>
                            </div>
</div>               



<div class="form-group row">
                            
                               <div class=" col-12 col-md-12" name="campo" id="campo" style="display:none">
                                  <img src="imagenes/icon_help.png" title="Fecha de nacimiento para publicidad."/>&nbsp;&nbsp;<label for="fechanacimiento" class="control-label">Fecha de Nacimiento</label>
                                  <input type="date"  class="form-control" placeholder="Fecha de Nacimiento" name="ae_cumple" id="ae_cumple">
                                
                        </div>
        </div>             
 
       
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       
            <!--<input name="gcli" value="Guardar"  type="submit"  class="btn btn-primary btn-block btn-lg"/>-->
            <button class="btn btn-primary  btn-block btn-sm ml-5 mt-5" type="submit" name="gcli" style="width:80%; height:50px;">Guardar</button>
      

       <br>
       <br>

     </form>
    </div>
   </div>
 </div>';

 echo $clien;

}


function usuarios(){

 	$opc='


<table width="200px" cellspacing="50" cellpadding="10">

               <tr> 
                  <td>
                  <div class="tamaño">
                       <a href="home.php?c=3&b=1" class="btn btn-primary" style="width:200px; height:80px;"><i class="fas fa-user-plus fa-2x fa-lg"></i>
                       <br>
                       <label for="username"><strong>Crear Usuarios</strong></label> 
                       </a>
                      </div>
                    </td>
                  <td>
                     <div class="tamaño">
                       <a href="home.php?c=2&b=1" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-user-circle fa-2x fa-lg"></i>
                       <br>
                       <label for="username"><strong>Usuarios</label> 
                      </a>
                    </div>
                  </td>
                  <td>
                   
                   <div class="tamaño">
                      <a href="" class="btn btn-warning" style="width:200px; height:80px;"><i class="fas fa-map-marked fa-2x fa-lg"></i>
                      <br>
                      <label for="username"><strong>Crear ubicacion</strong></label> 
                      </a>
                    </div>

                  </td>
                  <td>

                    <div class="tamaño">
                      <a href="" class="btn btn-danger" style="width:200px; height:80px;"><i class="fas fa-home fa-2x fa-lg"></i>
                      <br>
                      <label for="username"><strong>Capacidad X Ubicacion</strong></label> 
                      </a>
                    </div>

                  </td>
                            
               </tr>

                     <tr>

                         <td> 
                          <div class="tamaño">
                            <a href="" class="btn btn-primary" style="width:200px; height:80px;"><i class="fas fa-map-marked-alt fa-2x fa-lg"></i>
                            <br>
                            <label for="username"><strong>Ubicaciones</strong></label> 
                            </a>
                        </div>
                       </td> 


                      <td>
                        <div class="tamaño">
                          <a href="" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-store fa-2x fa-lg"></i>
                          <br>
                          <label for="username"><strong>Crear Categoria</strong></label> 
                          </a>
                        </div>
                      </td>

                       <td>
                        <div class="tamaño">
                          <a href="" class="btn btn-warning" style="width:200px; height:80px;"><i class="fas fa-store-alt fa-2x fa-lg"></i>
                          <br>
                          <label for="username"><strong>Categoria</strong></label> 
                          </a>
                        </div>
                      </td>
                       <td>
                        <div class="tamaño">
                          <a href="" class="btn btn-danger" style="width:200px; height:80px;"><i class="fas fa-list-ol fa-2x fa-lg"></i>
                          <br>
                          <label for="username"><strong>Crear Items</strong></label> 
                          </a>
                        </div>
                     </td>
                   </tr>     

               <tr>
                       <td>
                         <div class="tamaño">
                            <a href="" class="btn btn-primary" style="width:200px; height:80px;"><i class="fas fa-hotel fa-2x fa-lg"></i>
                            <br> 
                            <label for="username"><strong>Capacidades x Salon</strong></label> 
                            </a>
                        </div>
                      </td>
                    
                    <td> 
                    <div class="tamaño">
                      <a href="" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-tasks fa-2x fa-lg"></i>
                      <br>
                      <label for="username"><strong>Items</strong></label> 
                      </a>
                    </div>
                   </td>

                   <td>  
                    <div class="tamaño">
                      <a href="" class="btn btn-warning" style="width:200px; height:80px;"><i class="fas fa-clipboard-list fa-2x fa-lg"></i>
                      <br>  
                      <label for="username"><strong>Crear Tipo Evento</strong></label> 
                      </a>
                    </div>
                   </td>

                   <td>
                    <div class="tamaño">
                      <a href="" class="btn btn-danger" style="width:200px; height:80px;"><i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                      <br>
                      <label for="username"><strong>Tipos de Eventos</strong></label>  
                      </a>
                    </div>
                   </td>  
                
             </tr>
             
               <tr>  

                     <td> 
                      <div class="tamaño">
                        <a href="" class="btn btn-primary" style="width:200px; height:80px;"><i class="fas fa-chart-pie fa-2x fa-lg"></i> 
                        <br>
                        <label for="username"><strong>Crear tipos de montaje</strong></label>  
                        </a>
                      </div>
                     </td> 
                 </tr>
            </table>             
	';

	echo $opc;

}


function crear_usuario(){

  $creus='
    <div class="container">
            <div class="row">       
              <div class="col-12">
                  <h2>Formulario Creacion Usuario</h2>
                    <br>
                    <br>
              </div>
            </div>
        </div> 
            <div class="container ">
               <div class="row">
                  <div class="col-12">
                    <form  method="post" action="login.php" id="formcreus">

                        <input type="hidden" name="b" value="1">
                        <input type="hidden" name="c" value="3">

                      <div class="form-group row">
                                                      
                           <div class=" col-12 col-md-5">
                                <img src="imagenes/icon_help.png" title="Escriba o digite por favor el nombre del usuario"/>&nbsp;&nbsp;<label for="usuario">Nombre de Usuario</label>
                                    <input type="text"  class="form-control" name="nome" placeholder="Nombre" >
                            </div>
                              
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Digite el Apellido del usuario">&nbsp;&nbsp;<label for="apellido ">Apellido</label>
                                        <input type="text"  class="form-control" name="ape"  placeholder="Apellido"> 
                               </div>
                                                  
                      </div>
                                            


                                  <div class="form-group row">
                                                      
                                      <div class=" col-10 ">
                                           <img src="imagenes/icon_help.png" title="introduzca la identificacion del usuario sin guiones."/>&nbsp;&nbsp;<label for="identificacion">Identificacion</label>
                                            <input type="text"  class="form-control" name="iden" placeholder="Identificacion">
                                    </div>
                                </div>

                                 
                                  
                                  <div class="form-group row">                        
                                    <div class=" col-10">
                                      <img src="imagenes/icon_help.png" title="Escriba o introduzca su correo electronico"/>&nbsp;&nbsp;<label for="correo">Correo</label>
                                        <input type="text" class="form-control" name="cor" id="email" placeholder="Correo Electronico">
                                        </div>
                                            
                                  </div>                       
                                  
               


                           <div class="form-group row">
                                                      
                              <div class=" col-12 col-md-10">
                                 <img src="imagenes/icon_help.png" title="ingrese su numero de telefono movil">&nbsp;&nbsp;<label for="movil">Movil (telefono)</label>
                                    <input type="text" class="form-control" placeholder="Telefono movil" name="movil" id="movil">
                                </div>
                           </div>    

                           
                           <div class="form-group row">     

                             <div class=" col-12 col-md-10">
                                 <img src="imagenes/icon_help.png" title="Ingrese el perfil del usuario: 1 - administrador, 2 - vendedor, 3 - Banquetes, 4 - Restaurante">&nbsp;&nbsp;<label for="perfil">Perfil del Usuario</label>
                                    <input type="text" class="form-control" placeholder="Perfil del Usuario" name="perfil" id="perfil">
                                </div>
                           </div>         
                          

                         <div class="form-group row">
                            <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="introduzca de cual sucursal de la empresa es">&nbsp;&nbsp;<label for="sucursal">Sucursal</label>
                                      <input type="text" class="form-control" placeholder="Sucursal" name="Sucursal" id="sucursal">
                                  </div>
                           </div>    

                          <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Esta Opcion le permitira entran a la aplicacion">&nbsp;&nbsp;<label for="user">Usuario</label>
                                      <input type="text" class="form-control" placeholder="user" name="user" id="user">
                                  </div>
                           </div>    
                           
                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Esta opcion le permite ingresar su contraseña de entrada a la aplicacion">&nbsp;&nbsp;<label for="password">Password</label>
                                      <input type="password" class="form-control" placeholder="password" name="password" id="password">
                                  </div>
                           </div>    
                           
            
                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;">Guardar</button>
                                

                                 <br>
                                 <br>

                     </form>
                    </div>
                   </div>
                 </div>';
                 echo $creus;
}


function seleccion($tabla,$campo){
 $this->query="select ".$campo." from ".$tabla." ";
  //echo $this->query;
$this->cons=mysql_query($this->query);
}

function seleccion3($tabla,$campo,$cond){
 $this->query="select ".$campo." from ".$tabla." ".$cond."";
  //echo $this->query;
$this->cons=mysql_query($this->query);
}

function input($tabla, $campo, $cond, $nombre, $clas, $car, $type) {
          $this->seleccion3($tabla,$campo,$cond);
          $res = mysql_fetch_array($this->cons);
          $val = $res[$campo];
          return ('<input type="' . $type . '"  id="'.$car.'"  name="' . $nombre . '" value="'.$val.'"  class="' . $clas . ' form-control">');
    }



function seleccion2($tabla,$campo,$cond,$valor,$nombre,$id) {

   $ca=$campo.",".$valor;  
   $this->seleccion($tabla,$ca);
     $r=mysql_query($this->query); 
     
        $sel="<select name='".$nombre."'  class='form-control'>";
        $sel.="<option value=''>--Seleccione--</option>";
        while ($res = mysql_fetch_array($r)) {
        if ($res[$valor] == $id){
        $sel.="<option value=". $res[$valor] . "  selected>" . $res[$campo] . "</option>";
    }
    else {
     $sel.="<option value=". $res[$valor] . "  >" . $res[$campo] .  "</option>";
      
      }
    }
        $sel.="</select>";
    return $sel;
    
    }


   
   function seleccion4($tabla,$campo,$campo2,$cond,$valor,$nombre,$id) {
    
  $ca=$campo.",".$valor.",".$campo2;  
   $this->seleccion($tabla,$ca);
     $r=mysql_query($this->query); 
     
        $sel="<select name='".$nombre."'  class='form-control'>";
        $sel.="<option value=''>--Seleccione--</option>";
        while ($res = mysql_fetch_array($r)) {

        if ($res[$valor] == $id){
        $sel.="<option value=". $res[$valor] . "  selected>" . $res[$campo] . "</option>";
    }
    else {
     $sel.="<option value=". $res[$valor] . "  >" . $res[$campo] . " ". $res[$campo2] . " PAX (Capacidad Maxima) </option>";
      
      }
    }
        $sel.="</select>";
    return $sel;
    
    }


 function mostrar_usuario(){

 /*$this->seleccion("usuarios", "*");
 $r = mysql_query($this->query);*/
 $this->seleccion3("usuarios,estados,perfiles", "ae_id_usuario,ae_nombre,ae_apellido,ae_identificacion,ae_correo,ae_mobil,
ae_desc_estado,ae_desc_perfil", "where id_perfil=ae_id_perfil and ae_estado=ae_id_estado");

    $r = mysql_query($this->query);
    
 /*echo "<script>alert('$r')</script>";*/

$modusu ='
 
  <div class="container">

    <div class="row">
          
           <div class="col-12 col-md-12">

                <form method="post" action="login.php" id="formmodus" >
                          <input type="hidden" name="b" value="1">
                          <input type="hidden" name="c" value="2">
              ';
                      $modusu.='
                      
                          <h1>Listado de Usuario del Sistema</h1>
                          <br>
                          <table class="table table-hover table-responsive"> 
                           <thead class="thead-inverse"> 
                              <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Identificacion</th>
                                    <th>Correo</th>
                                    <th>Mobil</th>
                                    <th>Estado</th>
                                    <th>Perfil</th>
                                </tr>
                            </thead>    
                            <tr>';
                                
                                 
                                while ($reg = mysql_fetch_array($r)) {
                               $usu = $reg['ae_id_usuario'];
                              $modusu.= '<tr>
                              <td ><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_nombre'] . '</a> 
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_apellido'] . '</a>
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_identificacion'] . '</a>
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_correo'] . '</a>
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_mobil'] . '</a>
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_desc_estado'] . '</a>
                              </td>
                              <td><a href="home.php?c=4&b=1&usu=' . $usu . '" id="link" title="Editar" style="color:black;">' . $reg['ae_desc_perfil'] . '</a>
                              </td>
                          </tr> ';
                                        
                            }
                                        $modusu.='</table>
                                       
                 </form>
   
             </div>
              
 
      </div>
      
</div>

';
   
   echo $modusu;

 }




 function editar_usuario($usu){

$this->seleccion3("usuarios", "*", "where ae_id_usuario=" . $usu . "");
$r = mysql_query($this->query);

 $usua='
         <div class="container">
            <div class="row">       
              <div class="col-12">
                  <h2>Formulario Edicion del Usuario</h2>
                    <br>
                    <br>
              </div>
            </div>
        </div> 
            <div class="container ">
               <div class="row">
                  <div class="col-12">

                   <form method="post" action="home.php" id="formmodus" >
                      <input type="hidden" name="b" value="1">
                      <input type="hidden" name="c" value="3">';

                      while ($resu = mysql_fetch_array($r)) {
            $cond = "where ae_identificacion=" . $resu["ae_identificacion"] . "";
            $usua.='
               <input type="hidden" name="identificacion" value="' . $resu["ae_identificacion"] . '">



                      <div class="form-group row">
                                                      
                           <div class=" col-12 col-md-5">
                                <img src="imagenes/icon_help.png" title="Escriba o digite por favor el nombre del usuario"/>&nbsp;&nbsp;<label for="usuario">Nombre de Usuario</label>
                                ' . $this->input("usuarios", "ae_nombre", $cond, "nome", "", "", "text") . '
                            </div>
                              
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Digite el Apellido del usuario">&nbsp;&nbsp;<label for="apellido ">Apellido</label>
                                ' . $this->input("usuarios", "ae_apellido", $cond, "ape", "", "", "text") . '   
                               </div>
                                                  
                      </div>
                                            


                                  <div class="form-group row">
                                                      
                                      <div class=" col-10 ">
                                           <img src="imagenes/icon_help.png" title="introduzca la identificacion del usuario sin guiones."/>&nbsp;&nbsp;<label for="identificacion">Identificacion</label>
                                            ' . $this->input("usuarios", "ae_identificacion", $cond, "iden", "", "", "text") . '
                                    </div>
                                </div>

                                 
                                  
                                  <div class="form-group row">                        
                                    <div class=" col-10">
                                      <img src="imagenes/icon_help.png" title="Escriba o introduzca su correo electronico"/>&nbsp;&nbsp;<label for="correo">Correo</label>
                                        ' . $this->input("usuarios", "ae_correo", $cond, "corre", "", "", "text") . '
                                        </div>
                                            
                                  </div>                       
                                  
               


                           <div class="form-group row">
                                                      
                              <div class=" col-12 col-md-10">
                                 <img src="imagenes/icon_help.png" title="ingrese su numero de telefono movil">&nbsp;&nbsp;<label for="movil">Movil (telefono)</label>
                                    ' . $this->input("usuarios", "ae_mobil", $cond, "mob", "", "", "text") . '
                                </div>
                           </div>    

                           
                           <div class="form-group row">     

                             <div class=" col-12 col-md-10">
                                 <img src="imagenes/icon_help.png" title="Ingrese el perfil del usuario: 1 - administrador, 2 - vendedor, 3 - Banquetes, 4 - Restaurante">&nbsp;&nbsp;<label for="perfil">Perfil del Usuario</label>
                                    ' . $this->seleccion2("perfiles", "ae_desc_perfil", " ", "ae_id_perfil", "perf", $resu["id_perfil"]) . '
                                </div>
                           </div>         
                          

                         <div class="form-group row">
                            <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="introduzca de cual sucursal de la empresa es">&nbsp;&nbsp;<label for="sucursal">Sucursal</label>
                                      <input type="text" class="form-control" placeholder="Sucursal" name="Sucursal" id="sucursal">
                                  </div>
                           </div>    

                          <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Esta Opcion le permitira entran a la aplicacion">&nbsp;&nbsp;<label for="user">Usuario</label>
                                      ' . $this->input("usuarios", "ae_usuario", $cond, "usu", "", "", "text") . '
                                  </div>
                           </div>    
                           
                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Esta opcion le permite ingresar su contraseña de entrada a la aplicacion">&nbsp;&nbsp;<label for="password">Password</label>
                                      ' . $this->input("usuarios", "ae_password", $cond, "pas", "", "", "password") . '
                                  </div>
                           </div>';    
                           
                                 }

                                  $usua.= '<button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;">Guardar</button>
                                

                                 <br>
                                 <br>

                     </form>
                    </div>
                   </div>
                 </div>';
 
          
          echo $usua;
 }



function crear_evento(){



$creareq='

<div class="container">
            <div class="row">       
              <div class="col-12">
                  <h2>Formulario Creacion Evento</h2>
                    <br>
                    <br>
              </div>
            </div>
        </div> 
            <div class="container ">
               <div class="row">
                  <div class="col-12">
                    <form id="formcrereq" name="form1" method="post">

                        <div id="result">
                          <input type="hidden" name="conf" value="0">
                        </div>

                      <div class="form-group row">
                                                      
                           <div class=" col-12 col-md-5">
                                <img src="imagenes/icon_help.png" title="Escriba o digite por favor el nombre del usuario"/>&nbsp;&nbsp;<label for="cliente2">Cliente</label>
                                  <a id="enlace12" data-fancybox-type="iframe" href="funciones/crear_evento.php" class="fancybox form-control btn btn-success">Cliente : '. $_POST["clien"] . '</a> 

                            </div>
                              
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Digite el Nombre del evento">&nbsp;&nbsp;<label for="apellido ">Nombre del Evento:</label>
                                        <input type="text"  class="form-control" name="des" value="" id="seus"  placeholder="Nombre de Evento"> 
                               </div>
                                                  
                      </div>
                                            


                                  <div class="form-group row">
                                                      
                                      <div class=" col-10 ">
                                           <img src="imagenes/icon_help.png" title="Haga click aqui para dentro del cuadro de texto y seleccione una fecha"/>&nbsp;&nbsp;<label for="fechainicial">Fecha Inicial</label>
                                            <input type="date"  class="form-control" id="fechainicial" name="fecreqin" placeholder="Fecha inicial">
                                    </div>
                                </div>

                                 
                                  
                                  <div class="form-group row">                        
                                    <div class=" col-10">
                                      <img src="imagenes/icon_help.png" title="Escriba la fecha final"/>&nbsp;&nbsp;<label for="fechafinal">Fecha Final</label>
                                        <input type="date" class="form-control" name="cor" id="fechafinal" placeholder="Fecha Final">
                                        </div>
                                            
                                  </div>                       
                                  
               


                           <div class="form-group row">
                                                      
                              <div class=" col-12 col-md-5">
                                 <img src="imagenes/icon_help.png" title="ingrese la hora de inicio del evento">&nbsp;&nbsp;<label for="movil">Hora de inicio del evento</label>
                                    <input type="text" class="form-control" placeholder="HH:MM" name="hi" id="horainicio">
                                </div>

                                <div class=" col-12 col-md-5">
                                 <img src="imagenes/icon_help.png" title="Ingrese hora de terminacion del evento">&nbsp;&nbsp;<label for="perfil">Hora final del evento</label>
                                    <input type="text" class="form-control" placeholder="HH:MM" name="hf" id="horafinal">
                                </div>
                           </div>    
                          

                         <div class="form-group row">
                            <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Personas que van a asistir al evento(PAX).">&nbsp;&nbsp;<label for="cantidadasistentes">Cantidad de Asistentes:</label>
                                      <input type="text" class="form-control" placeholder="Cantidad de asistencia" name="asis" id="asis">
                                  </div>
                           </div>    

                          <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Ubicacion del Evento">&nbsp;&nbsp;<label for="ubicacion">Ubicacion Principal:</label>'. $this->seleccion4("ubicaciones", "ae_desc_ubicacion", "ae_capacidad" , "","ae_id_ubicacion", "ubic","").'
                                  </div>
                           </div>    
                           
                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Estilo de montaje o preparacion del auditorio">&nbsp;&nbsp;<label for="montaje">Montaje</label>'.$this->seleccion2("tipo_montaje", "ae_desc_tipo_montaje", "", "ae_id_tipo_montaje", "tipmon", "").'
                                     
                                  </div>
                           </div>    
                            

                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Tipo de evento a realizar">&nbsp;&nbsp;<label for="tipodeevento">Tipo de Evento</label>'.$this->seleccion2("tipos_requerimiento", "ae_desc_tipo_requerimiento", "", "ae_id_tipo_requerimiento", "tipreq", "").'
                                     
                                  </div>
                           </div> 



                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                <img src="imagenes/icon_help.png" title="Activar la opcion de propina le permite digitar el valor para la propina.">&nbsp;
                                   <label for="propina" class="form-check-label">
                                   <input type="checkbox" value="0" id="propina2" name="propina2"/>&nbsp;&nbsp;Habilitar propina
                                   </label>
                                  </div> 
                                     
                                     <div class="col-12 col-md-10 mt-2"  id="column" style="style="display:none;">        
                                     <label id="sinopeso" style="display:none;">Valor de la propina en Pesos ($)</label><input type="text"  class ="form-control" id="propi" name="propi" style="display:none;" value="0" />
                                     
                                  </div>
                           </div> 

                          <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="¿Cómo conocí al cliente?">&nbsp;&nbsp;<label for="origen">Origen:</label>
                                     <select name="origen" class="form-control">
                                      <option value="">--Seleccione--</option>
                                      <option>Telefono</option>
                                      <option>Walk In</option>
                                      <option>Correo</option>
                                      <option>Referenciado</option>
                                      <option>Ejecutivo Ventas</option>
                                      <option>Reservas</option>
                                      <option>Web</option>
                                      </select>
                                  </div>
                           </div> 

                           <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Sistema de crédito a manejar en esta cotización.">&nbsp;&nbsp;<label 
                                   for="formadepago">Forma de Pago</label>

                                  <select name="pago" class="form-control">

                                    <option value="">--Seleccione--</option>
                                    <option>Pago Directo</option>
                                    <option>Cheque</option>
                                    <option>Tarjeta Credito</option>
                                    <option>Tarjeta Debito</option>
                                    <option>Transferencia</option>
                                    <option>Consginación</option>
                                    <option>Cuenta Compañia</option>

                                  </select>
                                   
                            </div>
                           </div> 

                           <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Asesor creador de la cotización, cargará automáticamente el usuario logueado.">&nbsp;&nbsp;<label for="cotizacioncreada">Cotizacion Creada por</label>

                                   <input type="text"  class ="form-control" name="organizadopor"  value="' . $_SESSION["nombre"] . '" id="organizadopor" placeholder="Organizado Por">


                                     
                                  </div>
                           </div> 

                            <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="Persona responsable del evento.">&nbsp;&nbsp;<label for="organizador">Organizador o presentador Principal</label>
                                  <input type="text" name="organizador"  value="" id="organizador" placeholder="Organizador" class="form-control">
                                  <input type="hidden" name="usu" value="' . $_SESSION["usuario"] . '">

                                  </div>
                           </div>





                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;" >Guardar Requerimientos</button>
                                

                                 <br>
                                 <br>

                                 


                     </form>



                      <script>
                      

                      document.getElementById("propina2").addEventListener("click",verificar,false);

                      function verificar(){
                         
                          if(document.getElementById("propina2").checked == true){ 
                         document.getElementById("sinopeso").style.display="block";
                         document.getElementById("propi").style.display="block";

                          }

                          else { 

                                document.getElementById("sinopeso").style.display="none";
                                document.getElementById("propi").style.display="none"; 
                              } 


                        }

                      

                      </script>




                    </div>
                   </div>
                 </div>
  


';
echo $creareq;

}

function listar_cliente(){

 $this->seleccion3("clientes", "*", "");
 $r = mysql_query($this->query);

 $pop = '
      
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
                     <h1><img src="../imagenes/icon_help.png" title="Seleccione el cliente para asignarle dicho evento">&nbsp;Listado de Clientes</h1>
                      <br>
                      <p>Si no lo has creado <a href="../home.php?c=1&b=2" target="_parent">Click Aqui</a></p>
                    <form action="../home.php?c=5&b=3" method="post" id="miform">
                     <input type="hidden" name=c value="5">
                     <input type="hidden" name=b value="3">
                      <table id="clientes" style="width:800px; color:black;" class="table table-responsive table-hover">
                      <thead class="thead-inverse">
                         <tr>
                              <th><b>Nombre</b></th>
                              <th><b>Documento</b></th>
                              <th><b>Telefono</b></th>
                              <th><b>Email</b></th>
                              <th><b>Tipo Cliente</b></th>
                              <th><b>Seleccionar</b></th>
                         </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th></th>
                              <th></th>
                          </tr>
                      </tfoot>
                          <tbody>';
                          while ($reg = mysql_fetch_array($r)) {
                              $cond = "where ae_id_cliente=" . $reg["ae_id_cliente"] . "";
                             $cliente = $reg['ae_id_cliente'];
                              $pop.= '<tr>
                                      <td>'. utf8_encode($reg['ae_nom_cliente']) . '</td>
                                      <td>' . $reg['ae_doc_cliente'] . '</td>
                                                                  <td>' . $reg['ae_tel_cliente'] . '</a></td>
                                                                  <td>' . $reg['ae_email_cliente'] . '</a></td>

                                                                  <td>' . $reg['ae_tipo_cliente'] . '</a></td>

                                                                      <td>' . $this->input("clientes", "ae_nom_cliente", $cond, "clien", "", "clien", "radio") . '</td>

                               </tr>';
                          }
                      $pop.='</table>



                   
                   <input class="btn btn-primary  btn-block btn-sm ml-2 mt-5" formtarget="_parent" type="submit" id="cli" style="width:80%; height:50px;" value="Enviar">
                  

                  <script>

                  
                  
                    $("#miform").submit(function(){
                    
                      $.post("home.php?c=5&b=3", {c:"5", b = "3", clien: $("input:radio[name=clien]:checked").val()});
                     alert($("input:radio[name=clien]:checked").val());

                       });
                  

                  </script>

           </form>

       </div>

    </div>

 </div>

                      ';


  echo $pop;
  
}



function mostrar_cliente(){

$this->seleccion3("clientes", "*", "");
 $r = mysql_query($this->query);

$clien = '

<div class="container">
        <div class="row">
          <div class="col-12 col-md-12">

                   <h1>Listado de clientes</h1>
                    <br>
                      <table style="color:black;" class="table table-responsive table-hover">
                      <thead class="thead-inverse">
                         <tr>
                              <th><b>Nombre</b></th>
                              <th><b>Documento</b></th>
                              <th><b>Telefono</b></th>
                              <th><b>Email</b></th>
                              <th><b>Tipo Cliente</b></th>
                         </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th></th>
                              <th></th>
                          </tr>
                      </tfoot>
                          <tbody>';
                          while ($reg = mysql_fetch_array($r)) {
                              $cond = "where ae_id_cliente=" . $reg["ae_id_cliente"] . "";
                        $cliente = $reg['ae_id_cliente'];
                              $clien.= '<tr>
                                      <td>'. utf8_encode($reg['ae_nom_cliente']) . '</td>
                                      <td>' . $reg['ae_doc_cliente'] . '</td>
                                                                  <td>' . $reg['ae_tel_cliente'] . '</a></td>
                                                                  <td>' . $reg['ae_email_cliente'] . '</a></td>

                                                                  <td>' . $reg['ae_tipo_cliente'] . '</a></td>

                               </tr>';
                          }
                      $clien.='</table>

       </div>

    </div>

 </div>

';

echo $clien;


}



function ver_requerimiento(){

$this->seleccion3("requerimientos r,clientes cl", "*", "where
        r.cliente=cl.ae_nom_cliente");

$r = mysql_query($this->query);  

$requ = ' 

  <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">

                <h1 class="mt-2 mb-2">Listado de Pre-Cotizaciones</h1>
                    
                      <table style="color:black;" class="table table-responsive table-hover">
                      <thead class="thead-inverse">
                         <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Descripcion</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th class="text-center">Opciones</th>
                      </thead>
                      <tfoot>
                          <tr>
                              <th></th>
                              <th></th>
                          </tr>
                      </tfoot>
                          <tbody>';

                         while ($reg = mysql_fetch_array($r)) {
            $req = $reg['ae_id_requerimiento'];
            $sql = " select DATEDIFF(req.ae_fecha_final,req.ae_fecha_inicial) dias
            from requerimientos req where req.ae_id_requerimiento=" . $req . "";
            $rs = mysql_query($sql);
            $reg3 = mysql_fetch_array($rs);
            $requ.= '<tr>
                    <td><a href="home.php?b=5&requer=' . $req . '" title="Ver Cotizacion" >' . ($reg['ae_id_requerimiento']) . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '">' . $reg['ae_nom_cliente'] . '</a></td>
                      <td><a href="home.php?c=8&b=3&requeri=' . $req . '">' . utf8_encode($reg['ae_desc_requerimiento']) . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '">' . $reg['ae_fecha_inicial'] . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '" >' . $reg['ae_fecha_final'] . '</a></td>

                        <td>

                         <a href="home.php?c=10&b=3&requeri=' . $req . '" class="btn btn-danger"><i class="fas fa-times"></i>
                         Eliminar
                        </a>
                        &nbsp;&nbsp;
                        
                        <a href="home.php?c=9&b=3&requeri=' . $req . '" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Editar
                        </a>

                        </td>


                        ';
             $requ.='</tr>';

           }

        $requ.='</tbody> 
 
             </table> 

         </div>
   </div>
 </div>

 ';
 
 echo $requ;

}




function valor($cliente, $valor_por_defecto){

    if($cliente == "" ){

      return $valor_por_defecto;

    }

    else{

      return $cliente;

    }

}

          function editar_evento($requeri){

                $this->seleccion3("requerimientos", "*", "where ae_id_requerimiento=" . $requeri. "");
                $r = mysql_query($this->query);

                $modevent='<div class="container">
                            <div class="row">       
                              <div class="col-12">
                                  <h2>Modificar Evento a Realizar</h2>
                                    <br>
                              </div>
                            </div>
                        </div> 

                            <div class="container">

                               <div class="row">
                                  <div class="col-12">
                                    <form id="formodreq" name="form2" method="post">
                                       <input type="hidden" name="b" value="1">
                                       <input type="hidden" name="c" value="3">

                                       </div>
                                    </div> ';

                                          while ($resu = mysql_fetch_array($r)) {

                                            $cond = "where ae_id_requerimiento=" . $resu["ae_id_requerimiento"] . "";
                                            $cond1 = "where ae_id_requerimiento = " . $resu["ae_id_requerimiento"]." and ubicaciones.ae_desc_ubicacion = requerimientos.ubicacion";
                                            $nombre = $resu["cliente"];
                                            $modevent.='  

                                                 <div class="form-group row">
                               
                                                   <div class=" col-12 col-md-5">
                                                        <img src="imagenes/icon_help.png" title="Escriba o digite por favor el nombre del usuario"/>&nbsp;&nbsp;<label for="cliente2">Cliente</label>
                                                          <a id="enlace12" data-fancybox-type="iframe" href="funciones/crear_evento.php" class="fancybox form-control btn btn-success">Cliente : '. $this->valor($nombre, $_POST["clien"]).'</a> 

                                                    </div>

                                              
                                               <div class=" col-12 col-md-5">
                                                  <img src="imagenes/icon_help.png" title="Digite el Nombre del evento">&nbsp;&nbsp;<label for="apellido ">Nombre del Evento:</label>
                                                        <input type="text"  class="form-control" name="des" value="'.$resu["ae_desc_requerimiento"].'" id="seus"  placeholder="Nombre de Evento"> 
                                               </div>
                                                                  
                                      </div>
                                                            


                                                  <div class="form-group row">
                                                                      
                                                      <div class=" col-10 ">
                                                           <img src="imagenes/icon_help.png" title="Haga click aqui para dentro del cuadro de texto y seleccione una fecha"/>&nbsp;&nbsp;<label for="fechainicial">Fecha Inicial</label>
                                                            <input type="date"  class="form-control" id="fechainicial" name="fecreqin" placeholder="Fecha inicial" value="'.$resu["ae_fecha_inicial"].'">
                                                    </div>
                                                </div>

                                                 
                                                  
                                                  <div class="form-group row">                        
                                                    <div class=" col-10">
                                                      <img src="imagenes/icon_help.png" title="Escriba la fecha final"/>&nbsp;&nbsp;<label for="fechafinal">Fecha Final</label>
                                                        <input type="date" class="form-control" name="cor" id="fechafinal" placeholder="Fecha Final" value="'.$resu["ae_fecha_final"].'">
                                                        </div>
                                                            
                                                  </div>                       
                                                  
                               


                                           <div class="form-group row">
                                                                      
                                              <div class=" col-12 col-md-5">
                                                 <img src="imagenes/icon_help.png" title="ingrese la hora de inicio del evento">&nbsp;&nbsp;<label for="movil">Hora de inicio del evento</label>
                                                    <input type="time" class="form-control" placeholder="HH:MM" name="hi" id="horainicio" value="'.$resu["ae_hora_ini"].'">
                                                </div>

                                                <div class=" col-12 col-md-5">
                                                 <img src="imagenes/icon_help.png" title="Ingrese hora de terminacion del evento">&nbsp;&nbsp;<label for="perfil">Hora final del evento</label>
                                                    <input type="time" class="form-control" placeholder="HH:MM" name="hf" id="horafinal" value="'.$resu["ae_hora_fin"].'">
                                                </div>
                                           </div>    
                                          

                                         <div class="form-group row">
                                            <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Personas que van a asistir al evento(PAX).">&nbsp;&nbsp;<label for="cantidadasistentes">Cantidad de Asistentes:</label>
                                                      <input type="text" class="form-control" placeholder="Cantidad de asistencia" name="asis" id="asis" value="'.$resu["ae_num_personas"].'">
                                                  </div>
                                           </div>    

                                          <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Ubicacion del Evento">&nbsp;&nbsp;<label for="ubicacion">Ubicacion Principal:</label>';

                                                     $sql= "select ubicaciones.ae_capacidad, ubicaciones.ae_desc_ubicacion, r.ae_id_requerimiento from ubicaciones, requerimientos r where r.ae_id_requerimiento = ".$requeri." and ubicaciones.ae_desc_ubicacion = r.ubicacion"; 

                                                     $res = mysql_query($sql); 



                                                    $rest = mysql_fetch_array($res);
                                                     
                                                     $id = $rest["ae_id_requerimiento"]; 

          
                                                     $modevent.="<select name='ubi' class='form-control'>";

                                                      $modevent.="<option value=''>--Seleccione--</option>";
        
                                                     if($rest["ae_id_requerimiento"] == $id){
        
                                                    $modevent.="<option value = ". $rest["ae_id_requerimiento"] . "  selected>" . $rest["ae_desc_ubicacion"] . " " . $rest["ae_capacidad"] . " PAX " . "</option>";

                                                     } else { 
                                                     
                                                    $modevent.="<option value=". $rest["ae_id_requerimiento"] . "  >" . $rest["ubicacion"] .  "</option>"; 

                                                      
                                                     }
                                                     

                                                      $sql2 = "select ae_desc_ubicacion from ubicaciones";

                                                      $re = mysql_query($sql2);

                                                      while($reu = mysql_fetch_array($re)){

                                                       
                                                        $modevent.="<option value=". $requeri . "  >" . $reu["ae_desc_ubicacion"] . " " . $rest["ae_capacidad"] . " PAX " . "</option>"; 



                                                        }



                                                        $modevent.="</select>";

                                                   $modevent.='

                                                  </div>
                                           </div>';   
                                           
                                            $modevent.='<div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Estilo de montaje o preparacion del auditorio">&nbsp;&nbsp;<label for="montaje">Montaje</label>'.$this->seleccion2("tipo_montaje", "ae_desc_tipo_montaje", "", "ae_id_tipo_montaje", "tipmon","").'
                                                     
                                                  </div>
                                           </div>    
                                            

                                            <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Tipo de evento a realizar">&nbsp;&nbsp;<label for="tipodeevento">Tipo de Evento</label>'.$this->seleccion2("tipos_requerimiento", "ae_desc_tipo_requerimiento", "", "ae_id_tipo_requerimiento", "tipreq", "").'
                                                     
                                                  </div>
                                           </div> 



                                            <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                <img src="imagenes/icon_help.png" title="Activar la opcion de propina le permite digitar el valor para la propina.">&nbsp;
                                                   <label for="propina" class="form-check-label">
                                                   <input type="checkbox" value="0" id="propina2" name="propina2"/>&nbsp;&nbsp;Habilitar propina
                                                   </label>
                                                  </div> 
                                                     
                                                     <div class="col-12 col-md-10 mt-2"  id="column" style="style="display:none;">        
                                                     <label id="sinopeso" style="display:none;">Valor de la propina en Pesos ($)</label><input type="text"  class ="form-control" id="propi" name="propi" style="display:none;" value="0" />
                                                     
                                                  </div>
                                           </div> 

                                          <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="¿Cómo conocí al cliente?">&nbsp;&nbsp;<label for="origen">Origen:</label>
                                                     <select name="origen" class="form-control">
                                                      <option value="">--Seleccione--</option>
                                                      <option>Telefono</option>
                                                      <option>Walk In</option>
                                                      <option>Correo</option>
                                                      <option>Referenciado</option>
                                                      <option>Ejecutivo Ventas</option>
                                                      <option>Reservas</option>
                                                      <option>Web</option>
                                                      </select>
                                                  </div>
                                           </div> 

                                           <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Sistema de crédito a manejar en esta cotización.">&nbsp;&nbsp;<label 
                                                   for="formadepago">Forma de Pago</label>

                                                  <select name="pago" class="form-control">

                                                    <option value="">--Seleccione--</option>
                                                    <option>Pago Directo</option>
                                                    <option>Cheque</option>
                                                    <option>Tarjeta Credito</option>
                                                    <option>Tarjeta Debito</option>
                                                    <option>Transferencia</option>
                                                    <option>Consginación</option>
                                                    <option>Cuenta Compañia</option>

                                                  </select>
                                                   
                                            </div>
                                           </div> 

                                           <div class="form-group row"> 
                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Asesor creador de la cotización, cargará automáticamente el usuario logueado.">&nbsp;&nbsp;<label for="cotizacioncreada">Cotizacion Creada por</label>

                                                   <input type="text"  class ="form-control" name="organizadopor"  value="' . $_SESSION["nombre"] . '" id="organizadopor" placeholder="Organizado Por">


                                                     
                                                  </div>
                                           </div> 

                                            <div class="form-group row"> 

                                             <div class=" col-12 col-md-10">
                                                   <img src="imagenes/icon_help.png" title="Persona responsable del evento.">&nbsp;&nbsp;<label for="organizador">Organizador o presentador Principal</label>
                                                  <input type="text" name="organizador"  value="" id="organizador" placeholder="Organizador" class="form-control">
                                                  <input type="hidden" name="usu" value="' . $_SESSION["usuario"] . '">

                                                  </div>

                                           </div>';


                                                 }


                                                    
                                                     $modevent.='<button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;" >Modificar Requerimientos</button>
                                                

                                                 <br>
                                                 <br>

                                                 


                                     </form>

                                     <script>
                      

                      document.getElementById("propina2").addEventListener("click",verificar,false);

                      function verificar(){
                         
                          if(document.getElementById("propina2").checked == true){ 
                         document.getElementById("sinopeso").style.display="block";
                         document.getElementById("propi").style.display="block";

                          }

                          else { 

                                document.getElementById("sinopeso").style.display="none";
                                document.getElementById("propi").style.display="none"; 
                              } 


                        }

                      

                      </script>


                              </div>';

                                     echo $modevent;




                }

                              


 
 
}



?>
