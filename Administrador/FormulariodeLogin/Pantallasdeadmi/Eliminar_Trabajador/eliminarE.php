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
     <?php 	
		// Vaciar información
    include ("../Modificar cartel/conex.php");
    $link=Conectarse(); 
    $id = $_GET["id"];
    
    $result=mysqli_query($link,"select * from empleado where id = '$id'");
    //mysqli_close($link);
    $row = mysqli_fetch_array($result)
    
    ?>
    <div class="container">
        <p class="form-titulo">Usted eliminara la cuenta de el TRABAJADOR con los siguientes datos</p>

        <form METHOD="POST" ACTION="procesarEE.php" name = "enviar_cartel"  enctype="multipart/form-data" class="table table-striped col-sm-12 col-md-4 col-lg col-xl-4">
            <table class="table table-danger">
               
               <tr><td>Id*:</td><td><input type="hidden" name="id" value="<?php echo $row["id"];?>"></td></tr> 
               <tr><td>Nombre:</td><td><input type="text" name="Nombre" value="<?php echo $row["nombre"];?>"></td></tr>  
               <tr><td>Apellido:</td><td><input type="text"name="Apellido" value="<?php echo $row["apellido"];?>"></td></tr> 
               <tr><td>Correo Electronico:</td><td><input type="text"  name="Correo Electronico" value="<?php echo $row["correo_electronico"];?>"></td></tr>
               <tr><td>Celular:</td><td><input type="text"  name="Celular" value="<?php echo $row["celular"];?>"></td></tr> 
     
               <br>
               <img id="imagen-preview">
 
          
            </table>
            
            <input type="submit" value="Eliminar"  NAME = "accion"><br><br><br>
          </form>
    </div>
    <script src="js/form.js"></script>
  </body>
</HTML>