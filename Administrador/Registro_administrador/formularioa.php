<?php
//include('../seguridad.php');
session_start();

if(!$_SESSION){
  header("Location:https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php");
exit();
}


?>
<!DOCTYPE html>
<html>
  <head>
   <title>Tabla</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   
   
   <meta charset="UTF-8">
   <script>
   function valida_enviar(){
    //valido el nombre
    if (document.enviar_cartel.nombre.value.length==0){ 
    alert("Tiene que escribir su nombre") 
    document.enviar_cartel.nombre.focus() 
    return 0
    }
    if (document.enviar_cartel.apellido.value.length==0){ 
    alert("Tiene que escribir su apellido") 
    document.enviar_cartel.apellido.focus() 
    return 0
    }
    if (document.enviar_cartel.correo.value.length==0){ 
    alert("Tiene que escribir su correo electronico") 
    document.enviar_cartel.correo.focus() 
    return 0
    }
    if (document.enviar_cartel.celular.value.length !== 10) {
    alert("El número de celular debe tener 10 dígitos");
    document.enviar_cartel.celular.focus();
    return false;
    }
    if (document.enviar_cartel.contra.value.length==0){ 
    alert("Tiene que escribir su contraseña") 
    document.enviar_cartel.contra.focus() 
    return 0
    } 
    if (document.enviar_cartel.repetir_contra.value.length==0){ 
    alert("Tiene que volver a escribir su contraseña") 
    document.enviar_cartel.repetir_contra.focus() 
    return 0
    }
    if (document.enviar_cartel.contra.value != document.enviar_cartel.repetir_contra.value) {
    alert("Las contraseñas no coinciden");
    document.enviar_cartel.contra.focus();
    return 0;
    }
    //el formulario se envia 
    alert("Muchas gracias por su registro Administrador"); 
    document.enviar_cartel.submit() 
    }
</script>
 
  </head>
  <body>
  <?php include ('../FormulariodeLogin/Pantallasdeadmi/barraadmi.php'); ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    
        

        <center><form METHOD="POST" ACTION="agregarbd.php" name = "enviar_cartel">
        <h1>Inserta los datos solicitados</h1>
            <table class="table table-primary table-striped table align-middle">
               
               <tr class="table table-secondary"><td>Nombre*:</td><td><input type="text" name="nombre"></td></tr>  
               <tr><td>Apellido*:</td><td><input type="text"name="apellido"></td></tr> 
               <tr><td>Correo Electronico*</td><td><input type="text"  name="correo"></td></tr>
               <tr><td>celular* </td><td><input type="number" name="celular" maxlength="10"></td></tr> 
               <tr><td>Contraseña*:</td><td><input type="password"  name="contra"></td></tr>
               <tr><td>Repetir Contraseña*:</td><td><input type="password"  name="repetir_contra"></td></tr>
               <br>
             
 
          
            </table>
            
            <input type="button" value="Agregar" onclick="valida_enviar()" NAME = "accion"><br><br><br>
           
          </form></center>
   
  </body>
</HTML>