


<!DOCTYPE html>
<html>
  <head>
   <title>Tabla</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8">
   <script>
    function valida_crear(){
    //valido el nombre
    if (document.Crear.texto.value.length==0){ 
    alert("Tiene que escribir un Texto para crear Su letrero") 
    document.Crear.texto.focus() 
    return 0; 
    }
    //valido la letra
    if (document.Crear.letra.value.length==0){ 
    alert("Tiene que seleccionar el tipo de letra") 
    document.Crear.letra.focus() 
    return 0; 
    } 
    if (document.Crear.color.value.length==0){ 
    alert("Tiene que seleccionar un color") 
    document.Crear.color.focus() 
    return 0; 
    } 
    //valido la longiituf del letrero 
    if (document.Crear.m_ancho.value==0){ 
            alert("Tiene que introducir el ancho del letrero.") 
            document.Crear.m_ancho.focus() 
            return 0; 
            }else{ 
                if (document.Crear.m_ancho.value < 20 && document.Crear.m_ancho.value>150){ 
                alert("El rango de medida esta entre 20 y 150 centimetros") 
                document.Crear.m_ancho.focus() 
                return 0; 
            } 
            } 
            if (document.Crear.m_largo.value==0){ 
            alert("Tiene que introducir el largo del letrero.") 
            document.Crear.m_largo.focus() 
            return 0; 
            }else{ 
                if (document.Crear.m_largo.value < 20 && document.Crear.m_largo.value>150){ 
                alert("El rango de medida esta entre 20 y 150 centimetros") 
                document.Crear.m_largo.focus() 
                return 0; 
            } 
            }      
    //el formulario se envia 
    alert("Inicia sesion en tu cuenta para continuar"); 
    document.Crear.submit(); 
    }
</script>
   <style>
   </style>
   </head>
     <body>
     <?php
     include ('../menu.php');
     ?>


    <br>
    <br>
    <br>
    <br>
    <br>
    <center> <h1>Cotiza tu letrero con neón led flexible</h1></center>

    <center><form METHOD="GET" ACTION="crear.php" name = "Crear"  class="table table-striped col-sm-12 col-md-4 col-lg col-xl-4" enctype="multipart/form-data">
        <table class="table-primary">
             
            <td>texto:</td><td><input 
            type="text" 
            name="texto" ></td>
           </tr>
           <tr>
            <td>letra:</td><td><select id="letra" name="letra">
                <option value="Electric1">Electric 1</option>
                <option value="Electric2">Electric 2</option>
                <option value="Electric3">Electric 3</option>
                <option value="Electric4">Electric 4</option></td>
           </tr>
           
           <tr>
            <td>Medida Largo (cm)</td><td><input type="text"  name="m_largo"></td>
          </tr>

               
          <tr>
            <td>Medida en Ancho (cm)</td><td><input type="text"  name="m_ancho"></td>
          </tr>
            
            <tr>
              <td>Selecciona un color:</td><td><select id="color" name="color">
                  <option value="Azul-Rey">Azul-Rey</option>
                  <option value="Cian">Cian</option>
                  <option value="Rosa">Rosa</option>
                  <option value="Amarillo">Amarillo</option>
                  <option value="Rojo">Rojo</option>
                  <option value="Verde">Verde</option>
                  <option value="Morado">Morado</option></td>
            </tr>

        </table>  
         
         <br>
         <input type="BUTTON"value="Enviar" onclick="valida_crear()"><br><br><br>
        </form></center>
     </body>
</HTML>