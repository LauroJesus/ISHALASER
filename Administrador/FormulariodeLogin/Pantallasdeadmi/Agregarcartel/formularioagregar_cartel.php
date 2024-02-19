<!DOCTYPE html>
<html>
  <head>
   <title>Tabla</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="css/estilos.css">
   <meta charset="UTF-8">
   <script>
    function valida_enviar(){
    //valido el nombre
    if (document.enviar_cartel.nombre.value.length==0){ 
    alert("Tiene que escribir el nombre del cartel") 
    document.enviar_cartel.nombre.focus() 
    return 0
    }
    if (document.enviar_cartel.precio.value.length==0){ 
    alert("Tiene que escribir el Precio del cartel") 
    document.enviar_cartel.precio.focus() 
    return 0
    }
    if (document.enviar_cartel.m_ancho.value.length==0){ 
    alert("Tiene que escribir el la medida del ancho del cartel") 
    document.enviar_cartel.m_ancho.focus() 
    return 0
    }
    if (document.enviar_cartel.m_largo.value.length==0){ 
    alert("Tiene que escribir la medida del  largo del cartel") 
    document.enviar_cartel.m_largo.focus() 
    return 0
    }
    if (document.enviar_cartel.imagen.value.length==0){ 
    alert("Tiene que seleccionar una imagen de cartel desde el ordenador ") 
    document.enviar_cartel.imagen.focus() 
    return 0
    }    
    //el formulario se envia 
    alert("Muchas gracias por enviar el formulario"); 
    document.enviar_cartel.submit() 
    }
    
    const input = document.querySelector('#imagen');
    const preview = document.querySelector('#imagen-preview');
  
    input.addEventListener('change', () => {
    const file = input.files[0];
    const reader = new FileReader();
    
    reader.addEventListener('load', () => {
    preview.src = reader.result;
    }, false);
    
    if (file) {
      reader.readAsDataURL(file);
    }
  }, false);

</script>
  <style>
  </style>
  </head>
  <body>
  <?php 
     include ('../barraadmi.php'); 
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    <center><div class="container">
        <p class="form-titulo">Inserta los datos del cartel para agregarlo a la pagina web</p>

        <form METHOD="POST" ACTION="agregar.php" name = "enviar_cartel" class="table table-striped col-sm-12 col-md-4 col-lg col-xl-4" enctype="multipart/form-data">
            <table class="table table-info">
               
               <tr><td>Nombre del cartel*:</td><td><input type="text" name="nombre"></td></tr>  
               <tr><td>Precio del cartel* $:</td><td><input type="text"name="precio"></td></tr> 
               <tr><td>Medida en Ancho* (cm)</td><td><input type="text"  name="m_ancho"></td></tr>
               <tr><td>Medida Largo* (cm)</td><td><input type="text"  name="m_largo"></td></tr> 
               <tr><td>Selecciona una imagen*:</td><td><input type="file"  name="imagen"></td></tr>
               <br>
               <img id="imagen-preview">
 
          
            </table>
            
            <input type="submit" value="Agregar" NAME = "accion"><br><br><br>
          </form>
    </div><center>
    <script src="js/form.js"></script>
  </body>
</HTML>