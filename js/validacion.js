
         $(document).ready(function(){
          $("#enviar").click(function(){
          var otro;
          var data;
          otro = $('#form-username').val();
          data = $("#form-password").val();
          if(otro == ""){
                alert("El campo de Username no puede estar vacio");
                $('#form-username').focus();
                  return false;
                 }else{
                   
              if(data == ""){
                alert("El campo de Password no puede estar vacio");
                $('#form-password').focus();
                  return false;
                  }else{

                  }
                }  
             });
          }); 
         