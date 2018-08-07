<?php

session_start();

/*require("funciones/funciones.php");

$func = new funciones();


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


class enlace {


 function cliente(){

 	$opc='<div class="col-2 col-md-2 offset-0">
	 <a href="home.php?c=1&b=2" class="btn btn-primary fa fa-user-plus fa-lg">
	 <br>
	 <br>	
	 <label for="username">Crear Clientes</label>	
	 </a>
	 </div>
	 <div class="col-2 col-md-2 offset-1">
	 <a href="" class="btn btn-success fa fa-user-circle fa-lg">
	 <br>
	 <br>	
	 <label for="username">Clientes</label>	
	</a>
	</div>
	<div class="col-2 col-md-2 offset-1">
	<a href="" class="btn btn-warning fa fa-pie-chart fa-lg">
	<br>
	<br>	
	<label for="username">Sectores</label>	
	</a>
	</div>
	<div class="col-2 col-md-2 offset-1">
	<a href="" class="btn btn-danger fa fa-pie-chart fa-lg">
	<br>
	<br>	
	<label for="username">Crear Sectores</label>	
	</a>
	</div>';
	 		       echo $opc; 		        		
 }


 function paneldecotizacion(){

  $panel='<div class="col-2 col-md-2 offset-0">
  <a href="" class="btn btn-primary fa fa-user-plus fa-lg">
  <br>
  <br>	
  <label for="username">Nuevo Evento</label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="" class="btn btn-success fa fa-user-circle fa-lg">
  <br>
  <br>	
  <label for="username">Pre Cotizacion</label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="" class="btn btn-warning fa fa-pie-chart fa-lg">
  <br>
  <br>	
  <label for="username">Cotizaciones</label>	
  </a>
  </div>
  <div class="col-2 col-md-2 offset-1">
  <a href="" class="btn btn-danger fa fa-pie-chart fa-lg">
  <br>
  <br>	
  <label for="username">Orden de Compra</label>	
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
                                  <label for="cliente1">Cliente</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Digite el nombre completo del cliente.</span></div>
                                  <input type="text"  class="form-control" placeholder="Cliente" name="cliente" id="cliente">
                                  </div>
                                 <div class=" col-12 col-md-5">
                                   <label for="telefono1">Telefono Contacto</label>
                                <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Teléfono(s) fijos del contacto (indicar extensiones).</span>
                                </div>
                                <input type="text"  class="form-control" placeholder="Telefono" name="telefono" id="telefono">
                            </div>
                        
                       </div>
                  


        <div class="form-group row">
                            
                               <div class=" col-10 ">
                                  <label for="documento1">Documento</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Seleccione el tipo de documento, digite el documento puede incluir guiones.</span>
                                  </div><input type="text"  class="form-control" placeholder="Documento" name="doc" id="doc">
                                  <select name="td" class="form-control">
                                   <option value="">Tipo</option>
                                   <option>CC</option>
                                   <option>NIT</option>
                                   </select>
                                </div>
        </div>

       
        
        <div class="form-group row">                        
                                 <div class=" col-10">
                                <label for="tipo_cliente">Tipo de Cliente</label>
                                <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Seleccione si es un cliente personal o viene en representación de una empresa.</span></div>
                                  <select name="tipo" onchange="cambios(this.value);" class="form-control">
                                  <option value="">--Seleccione--</option>
                                  <option value="Empresarial">Empresarial</option>
                                  <option value="Personal">Personal</option>
                                  </select>
                              
                            </div>

        </div>               


 <div class="form-group row">
                            
                               <div class=" col-12 col-md-5">
                                  <label for="correo1">Correo</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Direccion(es) de correo electrónico.</span></div><input type="text" class="form-control" placeholder="Correo" name="correo" id="correo">
                                </div>
                                 <div class=" col-12 col-md-5">
                                <label for="ciudad1">Ciudad</label>
                                <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Ciudad de residencia del cliente.</span></div><input type="text"  class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad">
                            </div>
        </div>    


<div class="form-group row">
                            
                               <div class=" col-12 col-md-10">
                                  <label for="origencliente" class="control-label">Origen Cliente</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">¿Cómo conocí el cliente?.</span></div>
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
                                <label for="Credito" class="control-label">Credito</label>
                                <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">¿El cliente manejará crédito con el Hotel?.</span>
                                </div>
                                <select name="credito" class="form-control">
                                <option value="">--Seleccione--</option>
                                <option value="NO">No</option>
                                <option value="SI">Si</option>
                                </select>
                            </div>
        </div>               







<div class="form-group row">
                            
                               <div class=" col-12 col-md-5">
                                  <label for="direccion">Dirección</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Dirección de contacto.</span></div><input type="text"  class="form-control" placeholder="Dirección" name="direccion" id="direccion">
                                </div>
                                 <div class="col-12 col-md-5">
                                <label for="Dir. Facturación">Dir. Facturacion</label>
                                <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Dirección alterna del cliente.</span></div><input type="text"  class="form-control" placeholder="Direccion alterna de cliente" name="dir_facturacion" id="dir_facturacion">
                            </div>

        </div>               


<div class="form-group row">
                            
                               <div class=" col-12 col-md-12" style="display:none;">
                                  <label for="sector" class="">Sector</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Sector empresarial del cliente.</span></div>                    
        
                                 <div class=" col-12 col-md-12" style="display:none;">
                                <label for="Tipo Relacion">Tipo Relacion</label>
                                <select name="tr" class="form-control">
                                <option value="Cliente">Cliente</option>
                                </select>
                            </div>
</div>               



<div class="form-group row">
                            
                               <div class=" col-12 col-md-12" name="campo" id="campo" style="display:none">
                                  <label for="fechanacimiento" class="control-label">Fecha de Nacimiento</label>
                                  <div class="tooltip"><img src="imagenes_corporativas/icon_help.png"><span class="tooltiptext">Fecha de nacimiento para publicidad.</span></div><input type="date"  class="form-control" placeholder="Fecha de Nacimiento" name="ae_cumple" id="ae_cumple">
                                
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
             <a href="" class="btn btn-primary fa fa-user-plus fa-lg" style="width:200px; height:80px;">
             <br>
             <br>
             <label for="username"><strong>Crear Usuarios</strong></label> 
             </a>
            </div>
          </td>
        <td>
           <div class="tamaño">
             <a href="" class="btn btn-success fa fa-user-circle fa-lg" style="width:200px; height:80px;">
             <br>
             <br>
             <label for="username"><strong>Usuarios</label> 
            </a>
          </div>
        </td>
        <td>
         
         <div class="tamaño">
            <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
            <br>
            <br>
            <label for="username"><strong>Crear ubicacion</strong></label> 
            </a>
          </div>

        </td>
        <td>

          <div class="tamaño">
            <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
            <br>
            <br>
            <label for="username"><strong>Capacidad X Ubicacion</strong></label> 
            </a>
          </div>

        </td>
                  
     </tr>

     <tr>

                 <td> 
                  <div class="tamaño">
                    <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
                    <br>
                    <br>  
                    <label for="username"><strong>Ubicaciones</strong></label> 
                    </a>
                </div>
               </td> 


              <td>
                <div class="tamaño">
                  <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
                  <br>
                  <br>
                  <label for="username"><strong>Crear Categoria</strong></label> 
                  </a>
                </div>
              </td>

               <td>
                <div class="tamaño">
                  <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
                  <br>
                  <br>
                  <label for="username"><strong>Categoria</strong></label> 
                  </a>
                </div>
              </td>
               <td>
                <div class="tamaño">
                  <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
                  <br>
                  <br>
                  <label for="username"><strong>Crear Items</strong></label> 
                  </a>
                </div>
             </td>
           </tr>     

       <tr>
               <td>
                 <div class="tamaño">
                    <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
                    <br>
                    <br> 
                    <label for="username"><strong>Capacidades x Salon</strong></label> 
                    </a>
                </div>
              </td>
            
            <td> 
            <div class="tamaño">
              <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
              <br>
              <br>  
              <label for="username"><strong>Items</strong></label> 
              </a>
            </div>
           </td>

           <td>  
            <div class="tamaño">
              <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
              <br>
              <br>  
              <label for="username"><strong>Crear Tipo Evento</strong></label> 
              </a>
            </div>
           </td>

           <td>
            <div class="tamaño">
              <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;">
              <br>
              <br>  
              <label for="username"><strong>Tipos de Eventos</strong></label>  
              </a>
            </div>
           </td>  
        
     </tr>
     
       <tr>  

             <td> 
              <div class="tamaño">
                <a href="" class="btn btn-primary fa fa-pie-chart fa-lg" style="width:200px; height:80px;"> 
                <br>
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

   

} 




?>
