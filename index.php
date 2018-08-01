<?php

include("conexion/conexion.php");

login();


function login() {


       /*if(isset($_POST["formulario"])){
        header("location:form_registro.php");
       } */
  
        if (isset($_POST["usuario"]) and isset($_POST["password"])) {
  
          $us = $_POST["usuario"];
          $pas = $_POST["password"];
  
          $cons = "select * from usuarios where ae_usuario='$us' and ae_password='$pas'";
          @$res = mysql_query($cons);
          @$ar = mysql_num_rows($res);
          @$r = mysql_fetch_array($res);
          //$idus=$r["id_usuario"];
          if ($ar == 0) {
           //alerta();   
          } else {
            session_start();              
        //$sql="update usuarios set ae_conecta=1 where id_usuario='$idus'";
           //mysql_query($sql);
          // $_SESSION["perfil"]=$r["id_perfil"];
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["password"]=$_POST["password"];
             //  $_SESSION["user"]=$r["ae_usuario"];
             //    $_SESSION["username"]=$r["ae_usuario"];
             //  $_SESSION["nombre"]=$r["ae_nombre"]." ".$r["ae_apellido"];
                 header("Location:home.php");
          }
        }
      }
  


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>    
<link href="fonts/OleoScript-Regular.ttf" rel="stylesheet"/>
<link href="bootstrap/newstyle.css" rel="stylesheet" />
</head>    
<body>
        <div class="container formulario"> <!-- clase container de bootstrap !-->
           
            <div class="row"> <!-- clase row (fila) e bootstrap !-->
                <div class=" col-xs-12 col-md-12">
                   <img src="imagenes/login2.png" class="logo"/> 
                </div>
            </div>

            <div class="espaciado">
                
            </div>


            <div class="row">
                <fieldset class="col-xs-10 col-xs-offset-1">
                   <legend class="hidden-xs">
                     <h3>Inicio de sesion</h3>
                   </legend>

                
                    <form class="form-horizontal horizontal" id="form1" action="index.php" method="post"> 

                              <div class="form-group">
                                 <label class="col-xs-12 control-label" for="usuario"><h4>Usuario</h4></label>
                                    <div class="col-xs-12">
                                     <input type="text" class="form-control input" name="usuario" id="form-username"/>

                                    </div>    
                              </div>

                          <div class="form-group">
                             <label class="col-xs-12 control-label" for="Password"><h4>Password</h4></label>
                                <div class="col-xs-12">
                                 <input type="Password" class="form-control input" name="password" id="form-password"/>

                                </div>


                          </div>
    
                         
                                  <div class="button1">
                                    <button class=" btn btn-inline  btn-block btn-info" type="submit" id="enviar">Enviar</button>
                                    <button type="button" class=" btn btn-inline btn-block btn-info">Cancelar</button>
                                    </div>
                                      


                     </form>

                </fieldset>
            </div>
            
        </div>
         

          <script src="js/bootstrap.min.js"></script>
          <script src="js/validacion.js"></script>
</body>
</html>
