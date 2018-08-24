<?php

session_start();
require("conexion/conexion.php");

//require("funciones/funciones.php");

 //$func = new funciones();

/*

 if (isset($_GET['b'])) {

        $g = $_GET['b'];

    }


if (isset($_GET['b']) or isset($_POST['b'])) {



        switch ($g) {



            case 1:echo $func->usuarios();

                break;

			 case 2:echo $func->clientes();

                break;

				

             case 5:echo $func->requerimientos();

                break;	

           case 6:echo $func->pop();

                break;	

			 

			  case 8:echo $func->requerimientoxtipo();

                break;			

           case 9:echo $func->adminsusu();

                break;	

        }

    }

*/
?>
   

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    
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
  <a href="" class="btn btn-success" style="width:200px; height:80px;"><i class="fas fa-list-alt fa-2x fa-lg"></i>
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
 <div class="container ">
 <div class="row">
  <div class="col-12">
<form  method="post" action="login.php" id="formcli">
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
  
        $sel = "";
        $sel.="<select name='".$nombre."'  class='form-control'>";
        $sel.="<option value=''>--Seleccione--</option>";
        while ($res = mysql_fetch_array($r)) {
        if ($res[$valor] == $id){
        $sel.="<option value=". $res[$valor] . "  selected>" . $res[$campo] . "</option>";
    }
    else {
     $sel.="<option value=". $res[$valor] . "  >" . $res[$campo] . "</option>";
      
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

                   <form method="post" action="login.php" id="formmodus" >
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
                                  <a id="enlace12" data-fancybox-type="iframe" href="funciones/crear_evento.php" class="fancybox form-control btn btn-success" >Clientes</a> 

                            </div>
                              
                               <div class=" col-12 col-md-5">
                                  <img src="imagenes/icon_help.png" title="Digite el Apellido del usuario">&nbsp;&nbsp;<label for="apellido ">Nombre del Evento:</label>
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
                           
            
                                      <button class="btn btn-primary  btn-block btn-sm ml-2 mt-5" type="submit" name="gcli" style="width:80%; height:50px;" >Guardar</button>
                                

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
                      <table id="clientes" style="width:800px; color:black;" class="table table-responsive table-hover">
                      <thead class="thead-inverse">
                         <tr>
                             <th style="width: 105px;"><b>Nombre</b></th>
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
                                      <td style="width: 135px;" >'. utf8_encode($reg['ae_nom_cliente']) . '</td>
                                      <td style="width: 60px;">' . $reg['ae_doc_cliente'] . '</td>
                                                                  <td style="width: 105px;">' . $reg['ae_tel_cliente'] . '</a></td>
                                                                  <td style="width: 105px;">' . $reg['ae_email_cliente'] . '</a></td>

                                                                  <td style="width: 105px;">' . $reg['ae_tipo_cliente'] . '</a></td>

                                                                      <td>' . $this->input("clientes", "ae_nom_cliente", $cond, "clien", "", "clien", "radio") . '</a></td>

                               </tr>';
                          }
                      $pop.="</table>

       </div>

    </div>

 </div>

                      ";


  echo $pop;
  
}



function mostrar_cliente(){

$this->seleccion3("clientes", "*", "");
 $r = mysql_query($this->query);

$clien = '

<div class="container">
        <div class="row">
          <div class="col-12 col-md-12">

                   <h1>Listado de Clientes</h1>
                    <br>
                      <table style="color:black;" class="table table-responsive table-hover">
                      <thead class="thead-inverse">
                         <tr>
                             <th style="width: 105px;"><b>Nombre</b></th>
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

                                                                      <td>' . $this->input("clientes", "ae_nom_cliente", $cond, "clien", "", "clien", "radio") . '</a></td>

                               </tr>';
                          }
                      $clien.='</table>

       </div>

    </div>

 </div>

';

echo $clien;


}

   
 
}



?>
