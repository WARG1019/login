<?php

session_start();
require("conexion/conexion.php");


//require("funciones/funciones.php");

 //$func = new funciones();



?>

  
   
    <script src="js/jquery.min.js"></script>

    <script src="js/vue.js"></script>
    
    <script src="js/reactiv.js"></script>
    

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

    
  

            

               <script type="text/javascript">
                $(document).ready(function() { 
                $(".fancybox"). fancybox();
                });



            $("#enlace12").fancybox({
                width       : '350%',
                height      : '350%',
                type        : 'iframe',
                maxWidth    : 1900,
                maxHeight   : 600,
                fitToView   : false,
                autoSize    : false,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none'
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
 $this->query="select ".$campo." from ".$tabla;
  //echo $this->query;
$this->cons=mysql_query($this->query);
}

function seleccion3($tabla,$campo,$cond){
 $this->query="select ".$campo." from ".$tabla." ".$cond;
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
        $sel.="<option value=". $res[$valor] . "selected>" . $res[$campo] . "</option>";
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



function label($tabla, $campo, $cond) {
          $this->seleccion3($tabla,$campo,$cond);
    //    $query = "select  " . $campo . " from " . $tabla . " " . $cond . "  order by 1 desc   ";
        //$query="select * from empleados where ec_nom_empleado = 'prueba'";
      //  $cons = mysql_query($query);
        $res = mysql_fetch_array($this->cons);
        $val = $res[$campo];
        return ('<label>' . html_entity_decode($val) .  '</label>');
    }


function label2($tabla, $campo,$valor ,$cond) {
          $this->seleccion3($tabla,$campo,$cond);
    //    $query = "select  " . $campo . " from " . $tabla . " " . $cond . "  order by 1 desc   ";
        //$query="select * from empleados where ec_nom_empleado = 'prueba'";
      //  $cons = mysql_query($query);
        $res = mysql_fetch_array($this->cons);
        $val = $res[$valor];
        return ('<label>' . $val .  '</label>');
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
            <div class="container" id="nuevo">
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
                                   <label for="propina" class="form-check-label"><input type="checkbox" value="0" id="propina2" name="propina2" v-model="checked" />&nbsp;&nbsp;Habilitar propina
                                   </label>
                                  </div> 
                                
                                     <div class="col-12 col-md-10 mt-2"  id="column" v-if="checked">        
                                     <label id="sinopeso" v-if="checked">Valor de la propina en Pesos($)</label><input type="text"  class ="form-control" id="propi" name="propi" v-if="checked" value="0" />
                                     
                                  </div>
                                  
                           </div> 

                          <div class="form-group row"> 
                             <div class=" col-12 col-md-10">
                                   <img src="imagenes/icon_help.png" title="¿Cómo conocí al cliente?">&nbsp;&nbsp;
                                   <label for="origen">Origen:</label>
                                     <select name="origen" class="form-control">
                                      <option v-for="orig in services" 
                                       :value="orig.id"
                                       v-text="orig.name">
                                       </option>
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
                      <table id="clientes" style="color:black;" class="table table-responsive table-hover">
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
                                                                  <td style="width:100px;">' . $reg['ae_email_cliente'] . '</a></td>

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

                <h2 class="mt-2 mb-3">Listado de Pre-Cotizaciones</h2>
                    
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
                    <td><a href="home.php?c=8&b=3&requeri=' . $req . '" title="Ver Cotizacion" style="color:black;">' . ($reg['ae_id_requerimiento']) . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '" title="Ver Cotizacion" style="color:black;">' . $reg['ae_nom_cliente'] . '</a></td>
                      <td><a href="home.php?c=8&b=3&requeri=' . $req . '" title="Ver Cotizacion" style="color:black;">' . utf8_encode($reg['ae_desc_requerimiento']) . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '" title="Ver Cotizacion" style="color:black;">' . $reg['ae_fecha_inicial'] . '</a></td>
                        <td><a href="home.php?c=8&b=3&requeri=' . $req . '" title="Ver Cotizacion" style="color:black;">' . $reg['ae_fecha_final'] . '</a></td>

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

           
           function ver_pre_cotizacion($requeri){
           
             $this->seleccion("categorias ca,items_req ir,items it", " max(ir.ae_dia), ae_dia ", "where it.ae_id_item=ir.id_item
                             and ir.id_requerimiento='$requeri' and ca.ae_id_categoria=it.id_categoria group by ae_dia");
                            
              $rc = mysql_query($this->query);
              $this->seleccion("impuestos", "*", "");
              $imp = mysql_query($this->query);
              $impuesto = mysql_fetch_array($imp);
              $this->seleccion3("cotizaciones", "*", "where id_requerimiento=" . $requeri);
              $r2 = mysql_query($this->query);
              $this->seleccion3("ordenes", "*", "where id_requerimiento = " . $requeri);
              $r3 = mysql_query($this->query);
              $ord = mysql_num_rows($r3);
              $this->seleccion3("prefacturas", "*", "where id_requerimiento = ".$requeri);
              $r4 = mysql_query($this->query);
              $pre = mysql_num_rows($r4);
              $this->seleccion3("cotizaciones", "*", "where id_requerimiento = ".$requeri);
              $r5 = mysql_query($this->query);
              $ncot = mysql_num_rows($r5);
              $res = mysql_fetch_array($r2);
              //echo "<script>alert(".$res['ae_id_cotizacion'].");</script>";
              $srquery="select ae_tipo_cliente from requerimientos, clientes where ae_id_requerimiento='".$requeri."' and ae_nom_cliente=cliente;";
              $newquery=mysql_query($srquery);

        

     $cot = '
         <div class="container">

            <div class="row">

                   <div class="col-md-12">
                     
                         <p><strong>Estado : ';

                         $estado = $res["ae_estado_cotizacion"];

                         //echo "<script>alert('$requeri')</script>";

                           if ($res["ae_estado_cotizacion"] == 0) {

                            $cot.='Sin Aprobar</strong></p>';

                             if($this->label("cotizaciones", "ae_id_cotizacion", "where id_requerimiento=" . $requeri) == ""){
                               $enc = 'Cotización No. ' . $this->label("cotizaciones", "ae_id_cotizacion", "where id_requerimiento = " . $requeri); 
                                 } else {

                                   $enc = 'Cotización No. ' . $requeri;

                                  }

                                } else {
                                 
                                 $cot.='Aprobada</strong></p>

                               </div>

                             <div class="col-md-6">';
                             
                            
                                  $enc = 'Orden No. ' . $this->label("ordenes", "ae_id_orden", "where id_requerimiento = ". $requeri);
                                    
                                    //echo "<script>alert('$enc')</script>";

                                    }

                                    @$coti.= $res["ae_id_cotizacion"];
                                 
                                  @$_GET["ubication"]=substr($this->label("requerimientos,ubicaciones", "ae_desc_ubicacion", "where ae_id_requerimiento=" . $requeri . "
                                  and ubicacion=ae_desc_ubicacion"),7,length-8);
                                  @$_GET["montage"]=substr($this->label("requerimientos,tipo_montaje", "ae_desc_tipo_montaje", "where requerimientos.tipo = tipo_montaje.ae_id_tipo_montaje and ae_id_requerimiento =" . $requeri),7,length-8);
                                  @$_GET["quantitypeople"]=substr($this->label("requerimientos", "ae_num_personas", "where ae_id_requerimiento=" . $requeri) ,7,length-8);
                                  @$_GET["horainic"]=substr($this->label("requerimientos", "ae_hora_ini", "where ae_id_requerimiento=" . $requeri) ,7,2);
                                  @$_GET["horafina"]=substr($this->label("requerimientos", "ae_hora_fin", "where ae_id_requerimiento=" . $requeri) ,7,2);
                                 @$_GET["mininic"]=substr($this->label("requerimientos", "ae_hora_ini", "where ae_id_requerimiento=" . $requeri) ,10,2);
                                 @$_GET["minfina"]=substr($this->label("requerimientos", "ae_hora_fin", "where ae_id_requerimiento=" . $requeri) ,10,2);
                                 $cot.='</p>

                                 <p><h2>' . $enc . '</h2></p>

                            </div> 

                             <div class="col-md-6">
                              <p id="pes"><strong>Fecha Pre-Cotizacion:</strong><br />' . $this->label("requerimientos", "ae_fecha_cotizacion", "where ae_id_requerimiento=" . $requeri) . '</p>
                              </div>

                             <div class="col-md-6">
                             
                             <p><strong>Fecha Cotizacion:</strong> ' . $this->label("cotizaciones", "ae_fecha_cotizacion", "where ae_id_cotizacion=" . $requeri) . '</p>

                             </div> 

                             <div class="col-md-6">
                             
                                <p><strong>Cliente:</strong> ' . $this->label("requerimientos,clientes", "ae_nom_cliente", "where ae_id_requerimiento=" . $requeri . " and 
                                 ae_nom_cliente=cliente") . '</p>

                             </div>

                              <div class="col-md-6">
                             
                                <p><strong>Contacto:</strong> ' . $this->label("requerimientos", "contacto", "where ae_id_requerimiento=" . $requeri) . '</p>

                             </div>
                             
                             <div class="col-md-6">
                             
                                <p><strong>Documento('.$this->label("requerimientos,clientes", "ae_tipo_documento", "where ae_id_requerimiento=" . $requeri . " and 
                                  ae_nom_cliente=cliente")  .'):</strong> '.
                                  $this->label("requerimientos,clientes", "ae_doc_cliente", "where ae_id_requerimiento=" . $requeri . " and 
                                    ae_nom_cliente=cliente") . '</p>

                             </div>

                             <div class="col-md-6">
                             
                                <p><strong>Email:</strong> ' . $this->label("requerimientos,clientes", "ae_email_cliente", "where ae_id_requerimiento=" . $requeri . " and 
                                  ae_nom_cliente=cliente") . '</p>

                             </div>
                              
                              <div class="col-md-6">
                             
                                 <p><strong>Telefono:</strong> ' . $this->label("requerimientos,clientes", "ae_tel_cliente", "where ae_id_requerimiento=" . $requeri . " and 
                                    ae_nom_cliente=cliente") . '</p>

                             </div>

                             <div class="col-md-6">
                             
                                  <p><strong>Observaciones Comerciales:</strong> <br /> <details><code>' . $this->label("requerimientos", "obs_comerciales", "where ae_id_requerimiento=" . $requeri) . '</code></details></p>

                             </div>

                            <div class="col-md-6">
                             
                               <p><strong>Observaciones Operativas:</strong> <br /><details> ' . $this->label("requerimientos", "obs_operativas", "where ae_id_requerimiento=" . $requeri) . '</details></p>
                            </div>
                            
                            <div class="col-md-6">
                             
                             <p><b>Fecha Inicial:</b> ' . $this->label("requerimientos", "ae_fecha_inicial", "where ae_id_requerimiento=" . $requeri) . '</p>
                               
                            </div>

                            <div class="col-md-6">
                             
                              <p><strong>Fecha Final:</strong> ' . $this->label("requerimientos", "ae_fecha_final", "where ae_id_requerimiento=" . $requeri) . '</p>
                               
                            </div>
                            
                            <div class="col-md-6">';
                             
                               if ($_GET["horainic"]<=12){
                                $cot.='<p><strong>Hora Inicio : </strong>'.$this->label("requerimientos", "ae_hora_ini", "where ae_id_requerimiento=" . $requeri)  .   '  am </p>';
                                } else {
                                $cot.='<p><strong>Hora Inicio : </strong>'.$this->label("requerimientos", "ae_hora_ini", "where ae_id_requerimiento=" . $requeri)  .   '  pm </p>' ; 
                                } 
                               
                            $cot.='</div>

                            <div class="col-md-6">';
                              
                              if ($_GET["horafina"]<=12){
                                $cot.='<p><strong>Hora Fin:</strong> '. $this->label("requerimientos", "ae_hora_fin", "where ae_id_requerimiento=" . $requeri)  .   '  am </p>';
                                } else {
                                $cot.='<p  id="pes"><strong>Hora Fin:</strong> '. $this->label("requerimientos", "ae_hora_fin", "where ae_id_requerimiento=" . $requeri)  .   '  pm </p>' ; 
                                } 

                               $cot.='</div>

                               <div class="col-md-6">

                                <p><strong>Forma de pago:</strong> ' . $this->label("requerimientos", "pago", "where ae_id_requerimiento=" . $requeri) . '</p>

                                </div>

                                <div class="col-md-6">
                                  
                                  <p><strong>Ubicacion:</strong> ' . $this->label("requerimientos,ubicaciones", "ae_desc_ubicacion", "where ae_id_requerimiento=" . $requeri . "
                                     and ubicacion=ae_desc_ubicacion") . '</p>

                                </div>

                                <div class="col-md-6">
                                  
                                  <p  id="pes"><strong>Tipo de evento:</strong> ' . $this->label("requerimientos,tipo_montaje", "ae_desc_tipo_montaje", "where requerimientos.tipo = tipo_montaje.ae_id_tipo_montaje and ae_id_requerimiento =" . $requeri) . '</p>

                                </div>
                             

                                <div class="col-md-6">

                                   <p><strong>Cantidad de personas:</strong> ' . $this->label("requerimientos", "ae_num_personas", "where ae_id_requerimiento=" . $requeri) . '</p>

                                </div>
                               
                               <div class="col-md-6">

                                 <p><strong>Nombre del Evento:</strong> ' . $this->label("requerimientos", "ae_desc_requerimiento", "where ae_id_requerimiento=" . $requeri) . '</p>'; 

                                 $cot.='</div>

           </div>

        </div>   


        <div class="container">
          <div class="row">
            <div class="col-12">
             
                  <h1 class="mt-5">Detalles de la Cotización:</h1>

                  <table class="table mt-5 table-responsive">';

                  $diaAnt = "";

                  while ($resu = mysql_fetch_array($rc)) 
                   {

                    $this->seleccion3("items_req ir,items it, tipo_servicio ts, categorias c, ubicaciones u", "distinct ir.ae_id_item_req, c.ae_desc_categoria, it.ae_desc_item decit,sum(ir.cantidad) cantidad,ir.ae_dia,ir.id_ubicacion, u.ae_desc_ubicacion, FORMAT(it.ae_valor,0) vu, FORMAT(sum(it.ae_valor+ir.descuento),0) nuevdesc,FORMAT(sum(((it.ae_valor+ir.descuento)*ir.cantidad)+(((it.ae_valor+ir.descuento)*ir.cantidad)*ir.iva)/100),0) vt,ir.iva,ir.descuento, ir.descripcion,  ae_desc_tipo_servicio", "where it.ae_id_item=ir.id_item and c.ae_id_categoria = it.id_categoria and u.ae_id_ubicacion = ir.id_ubicacion and ir.id_requerimiento='$requeri' and ir.id_tipo_servicio = ts.ae_id_tipo_servicio and ir.ae_dia = " . $resu["ae_dia"] . " GROUP BY ir.ae_id_item_req, c.ae_desc_categoria, decit, ir.iva, ir.descuento, ir.descripcion, ts.ae_desc_tipo_servicio ORDER BY ir.ae_dia");

                      $r = mysql_query($this->query);

                      //echo "<script>alert('$r');</script>";

                      $cateAnt = "";
                      
                       //echo "<script>alert('$cateAnt');</script>";

                      while ($rese = mysql_fetch_array($r))
                      {
                         
                       //echo "<script>alert('esta entrando');</script>";
                         
                        if($diaAnt=="")
                         {  
                    
                          $diaAnt = $resu["ae_dia"];

                          //echo "<script>alert(".$resu["ae_dia"].")</script>";

                           $cot.="<tr>
                                <td colspan='10' style='background-color:#ffffff; color:black;'><p><b><h2>Día: " . $diaAnt."</h2></b></p>";

                           $cot.="<h6>Ubicaciones para este día:<br>";

                           $sqlUbi = "select * from tipo_montaje tm, ubicaciones u, ubicaciones_req ur where ur.id_requerimiento = ".$requeri." and ur.id_ubicacion = u.ae_id_ubicacion and ur.id_montaje = ae_id_tipo_montaje and ur.dia = ".$resu["ae_dia"];

                            $resUbi = mysql_query($sqlUbi);
                               while($rUbi = mysql_fetch_array($resUbi))
                               {
                                $cot.="
                                <p><h6>Salon: ".$rUbi["ae_desc_ubicacion"]."<br>
                                 Tipo Montaje: ".$rUbi["ae_desc_tipo_montaje"]."<br>
                                Pax: ".$rUbi["cant_personas"]."</p></h6>";
                               }
                               $cot.="</td>

                              </tr>";
                    
                          }

                          
                              $resaedia=$rese["ae_dia"];
                        
                          // echo "<script>alert('el valor  de resaedia es : $resaedia');</script>";

                             if($diaAnt!=$rese["ae_dia"])
                            {
                                
                          //  echo "<script>alert(' valor de diaAnt es diferente de resaedia');</script>";
                            //$cot.="<tr ><td colspan='5' bgcolor='#ffffff' style='background-color:#ffffff;'><p><b>Categoria: " . $resu["ae_desc_categoria"] . "</b></p></td></tr>";
                            $cot.="<tr ><td colspan='10' bgcolor='#ffffff' style='background-color:#ffffff;'><p><b><h2>Día: " . $rese["ae_dia"] . " -</h2></b></p>";
                            $cot.="<h6>Ubicaciones para este día:<br>";
                            $sqlUbi = "select * from tipo_montaje tm, ubicaciones u, ubicaciones_req ur where ur.id_requerimiento = ".$requeri." and ur.id_ubicacion = u.ae_id_ubicacion and ur.id_montaje = ae_id_tipo_montaje and ur.dia = ".$rese["ae_dia"];
                            //echo $sqlUbi;
                            $resUbi = mysql_query($sqlUbi);
                            while($rUbi = mysql_fetch_array($resUbi))
                            {
                                $cot.="<p><h6>Salon: ". $rUbi["ae_desc_ubicacion"]."<br>
                                Tipo Montaje: ". $rUbi["ae_desc_tipo_montaje"]."<br>
                                Pax: ".$rUbi["cant_personas"]."</p></h6>";
                            }
                            $cot.="</td></tr>";
                            $diaAnt = $rese["ae_dia"];

                        }

                          $cate=$rese["ae_desc_categoria"];         
                            if($cateAnt!=$rese["ae_desc_categoria"])
                             {

                                //  echo "<script>alert('el valor de cateant es al cumplir condicion : $cate');</script>";
                                  $cot.="<tr ><td colspan='10' bgcolor='#ffffff' style='background-color:#ffffff;'><p><b>Categoria: " . $rese["ae_desc_categoria"] . "</b></p></td></tr>"; 
                                  $cot.="<tr>
                                          <th style='color:black;'><b>Item</b></th>
                                          <th style='color:black;'><b>Tipo Serv.</b></th>
                                          <th style='color:black;'><b>Descripción</b></th>
                                          <th style='color:black;'><b>Ubicación</b></th>  
                                          <th style='color:black;'><b>Cant.</b></th>              
                                          <th style='color:black;'><b>Unitario</b></th>
                                          <th style='color:black;'><b>IVA %</b></th>
                                          <th style='color:black;'><b>Dto. %</b></th>
                                          <th style='color:black;'><b>Total</b></th>
                                          <th style='color:black;'><b>Opciones</th>";
                                  $cateAnt=$rese["ae_desc_categoria"]; 
                              }
                          
                             $cot.='<tr><td style="width:120px; color:black;">' . utf8_encode($rese["decit"]) . '</td>
                              <td style="color:black;">' . utf8_encode($rese["ae_desc_tipo_servicio"]) . '</td>
                              <td align="right" style="width:160px; color:black;">' . $rese["descripcion"] . '</td>
                              <td align="right" style="color:black;">' . utf8_encode($rese["ae_desc_ubicacion"]) . '</td>
                              <td align="right" style="color:black;">' . $rese["cantidad"] . '</td>';
                              if($rese["vu"]==$rese["nuevdesc"]){
                              $cot.='<td align="right" style="color:black;">' . $rese["vu"] . '</td>';
                              }else
                              {
                              $cot.='<td align="right" style="color:black;"><b style="color:red;">'.$rese["nuevdesc"].'</b><br /><c style="text-decoration: line-through;">'.$rese["vu"].'</c></td>';
                                  }
                              $cot.=' 
                              <td align="right" style="color:black;">' . $rese["iva"] . '</td>
                              <td align="right" style="color:black;">' . $rese["descuento"] . '</td>
                              <td align="right" style="color:black;">' . $rese["vt"] . '</td>
                              <td align="right" style="color:black;">
                                  <a href="templates/editar_item.php?req=' . $requeri . '&item='.$rese["ae_id_item_req"].'&lightbox[iframe]=true&lightbox[width]=700&lightbox[height]=400" 
                          class="lightbox"><img src="imagenes/pencil.png" style="width:16px;" alt="Editar" /></a>
                                  <a href="templates/borrar_item.php?req=' . $requeri . '&item='.$rese["ae_id_item_req"].'&lightbox[iframe]=true&lightbox[width]=700&lightbox[height]=400" 
                          class="lightbox"><img src="imagenes/minus-circle.png" style="width:16px;" alt="Eliminar" /></a>
                                  <a href="templates/duplicar_items.php?req=' . $requeri . '&item='.$rese["ae_id_item_req"].'&dia='.$rese["ae_dia"].'&lightbox[iframe]=true&lightbox[width]=700&lightbox[height]=400" 
                          class="lightbox"><img src="imagenes/plus-circle.png" style="width:16px;" alt="Copiar" /></a>
                              </td>
                              </tr>';    
                           

                       }  
   
                   
                   }

                 $cot.=' 
                  


                  </table> 
                  
                  <table class="table">
                  
                  <tr>

                      <td style="color:black;font-weight:bold;">Sub Total: $' . $this->label2("items,items_req", "FORMAT(sum(ae_valor*cantidad),0) as total", "total", "where 
                      id_requerimiento=" . $requeri . " and ae_id_item=id_item") .  '</td>

                      <td style="color:black;font-weight:bold;">Ajustes: $ '. $this->label2("items,items_req", "FORMAT(sum(ae_valor*cantidad*(descuento/100)),0) as dto", "dto", "where 
                      id_requerimiento=" . $requeri . " and ae_id_item=id_item") . '</td>';

                      $sqlDesc = "select sum(ae_valor*cantidad*(descuento/100)) as dto from items,items_req where id_requerimiento=1 and ae_id_item=id_item";
                      $resDesc = mysql_query($sqlDesc);
                      $rDesc = mysql_fetch_array($resDesc);
                      $desc = $rDesc["dto"];

                      $cot.='<td style="color:black;font-weight:bold;">Impuesto: $'.$this->label2("items,items_req", "FORMAT(sum(ae_valor*cantidad*(iva/100)),0) as imp", "imp", "where 
                      id_requerimiento=" . $requeri . " and ae_id_item=id_item") .  '</td>';

                      $cot.='<td style="color:black;font-weight:bold;">Total: $'.$this->label2("items,items_req", "FORMAT(sum((ae_valor+descuento)*cantidad*(iva/100)+((ae_valor+descuento)*cantidad)),2) as imp", "imp", "where 
                      id_requerimiento=" . $requeri . " and ae_id_item=id_item") .  '</td>';


                      @$total=substr($this->label2("items,items_req", "FORMAT(sum((ae_valor+descuento)*cantidad*(iva/100)+((ae_valor+descuento)*cantidad)),2) as imp", "imp", "where 
                      id_requerimiento=" . $requeri . " and ae_id_item=id_item"),7,length-11);



                      $ana='<a class="lightbox" target="_blank" href="';
                      $bna='" target='.'><input type="button" name="envmail" id="envma" value="Orden de Servicio" class="button lightblue icon"></a>'; 
                       
                      $cot.='
                        <input type="hidden" name="total" id="total" value="'.$total.'" />
                        </tr>
                        </table>                         

                    </div>';
                     
                        
                  if ($estado == 0) {
                  $cot.='
                  <div class="col-3 col-md-3 mt-5">
                       <form method="post" action="login.php">
                            <input type="hidden" name="b" value="5">
                            <input type="hidden" name="c" value="19">
                          <input type="hidden" name="requerimiento" value="' . $requeri . '">
                          <input type="hidden" name="requer" value="' . $requeri . '">
                          <input type="hidden" name="coti" value="' . $coti . '">
                    <button type="submit" name="aprueba" id="envma" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                      <br>
                        <label for="aprobar"><strong>Aprobar</strong></label>
                    </button>
                   </form>
                  </div>';
             //$cot.='<td><input type="submit" name="envmail" id="envma" value="Email" class="button lightblue icon"></td><tr>';
             $cot.='<div class="col-3 col-md-3 mt-5">
                       <a href="PDF/imprimibles/cotizacion.php?requeri='.$requeri.'" target="_blank" name="envmail" id="envma" class="btn btn-primary" style="width:200px; height:80px;">
                         <i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                       <br>
                        <label for="cotizacion"><strong>Ver Cotizacion</strong></label>
                       </a>
                   </div>';

                 } else {


                   $otroquery=mysql_fetch_array($newquery);
                   $comp=$otroquery["ae_tipo_cliente"];
                   if($comp == "Empresarial"){
                   $cot.='
                     <div class="col-3 col-md-3  mt-5">
                        <a data-fancybox-type="iframe href="templates/contacto.php?req=' . $requeri .' target="_blank" class="btn btn-success" style="width:200px; height:80px;">
                         <i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                          <br>
                          <label for="contacto" style="color:white;"><strong>Contacto</strong></label>
                        </a>
                      </div>';

                       } else{
                        

                     }  
  
                   
                    $cot.='<div class="col-3 col-md-3  mt-5">
                       <a href="PDF/imprimibles/cotizacion.php?requeri='.$requeri.'" target="_blank" name="envmail" id="envma" class="btn btn-primary" style="width:200px; height:80px;">
                         <i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                       <br>
                        <label for="cotizacion"><strong>Ver Cotizacion</strong></label>
                       </a>
                   </div>

                    <input type="hidden" id="requeri" name="requeri" value="'. $requeri . '"/>'; 
                   
                    if ($ord == 0) {
                    $cot.='<!--<tr>
                     <td><input name="corden" type="submit" id="gor" value="Orden" class="button lightblue icon"></td>
                     </tr>-->';
                    }

                   if ($pre == 0 and $ord == 1) {
                   /* $cot.='<tr>
                        <td><a  class="button lightblue icon" href="PDF/imprimibles/prefactura.php?req=' . $req . '" target="_blank">
                         &nbsp;&nbsp;Prefactura&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                         </tr>';*/
                        }
                   }

                  
                   $cot.='
                    <div class="col-3 col-md-3 mt-5">
                     <a id="enlace12" data-fancybox-type="iframe" href="templates/observaciones_evento.php?requeri=' . $requeri.'" class="btn btn-success" name="envmail" id="envma" style="width:200px; height:80px;">
                        <i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                        <br>
                        <label for="observacion">Observaciones</label>
                      </a>
                    </div> 
                     ';
                  $cot.='
                  <div class="col-3 col-md-3 mt-5">
                    <a href="templates/ubicaciones_evento.php?requeri='.$requeri.'&ubic='. $_GET["ubication"].
                      '&mont='.$_GET["montage"].'&cantp='.$_GET["quantitypeople"].'&horaini='.$_GET["horainic"].'&horafin='.$_GET["horafina"].'&minini='.$_GET["mininic"].'&minfin='.$_GET["minfina"].'&lightbox[iframe]=true&lightbox[width]=1000&lightbox[height]=620"
                        target="_blank" value="Ubicaciones" class="btn btn-primary" style="width:200px; height:80px;">
                          <i class="fas fa-calendar-alt fa-2x fa-lg"></i>
                        <br>
                          <label for="ubicaciones"><strong>Ubicaciones</strong></label> 
                    </a>
                  </div>';
        
                    
                    if($ncot==0){
                      $cot.='
                      <div class="col-3 col-md-3 mt-5"> 
                         <a href="login.php?gcot=1&requer='.$requeri.'&b=5&requeri='.$requeri.'" title="Guardar Cotización" class="btn btn-primary" style="width:200px; height:80px;">
                           <i class="fas fa-calendar-alt fa-2x fa-lg"></i>

                            <br>
                            <label for="guardar"><strong>Guardar</strong></label>

                         </a>';
                      }
                      $cot.='

                         </div>

                      <!--</form> -->  
                    
                    </div>  


                  </div>
                      
              
              </div>

                      


                     ';


        echo $cot;
     
   }
                            
 
}



?>
