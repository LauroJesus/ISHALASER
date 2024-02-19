<?php
//include('../seguridad.php');
session_start();

if(!$_SESSION){
  header("Location:https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php");
exit();
}


?>
<html> <!-- barra.html -->
<head>
<meta charset="UTF-8"> 
<title>Isha laser</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head> 
<body> 
     <?php 
     include ('barraadmi.php'); 
     ?>
     
      
 
<br>
<br>
<br>
<br>
<br>
<br>
    <header>
    
		<h1 style="text-align: center; font-size: 3em;">Cuentas Registradas de Empleados</h1>
	</header>




	<main>
		<p style="text-align: center; font-size: 1.2em; line-height: 1.5;">Empresa dedicada a brindar a sus clientes los mejores productos  en el mercado de letreros neón. 
Ofrece una amplia selección de letreros neón personalizados para su negocio, hogar o evento especial.
Además sus letreros neón son fabricados con materiales de alta calidad y diseñados para ser duraderos y resistentes. También, ofrecemos una gran variedad de colores y tamaños para que pueda elegir el que mejor se adapte a sus necesidades.</p>
	</main>

 
   

      <?php 
            include ("../conex.php");
            $link = Conectarse();
            $result = mysqli_query($link, "SELECT * FROM empleado");
        ?>
        <div class="" >
                <table width='80%' border='0' bordercolor='' align='center' class="table table-condensed">
                    <tr>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<td height='230' width='230'>";
                        echo "<br><b>Empleado  " . $i . ":</b><br>";
                        for ($j = 0; $j < 1; $j++) {
                    
                            echo "id: " . $row["id"] . "<br>";
                            echo "Nombre: " . $row["nombre"] . "<br>";
                            echo "Apellido: " . $row["apellido"] . "<br>";
                            echo "Correo Electronico: " . $row["correo_electronico"] . "<br>";
                            echo "Numero de Celular: " . $row["celular"] . "<br>";
                            echo "<a href='Modificar_CuentaE/formulariomodificar_cuentaE.php?id=".$row["id"]."'><button class='btn btn-warning'>Modificar</button></a><br><br>";
                            echo "<a href='Eliminar_Trabajador/eliminarE.php?id=".$row["id"]."'><button class='btn btn-danger'>Eliminar</button></a><br><br>";
  
                        }
                        echo "</td>";
                        if ($i % 4 == 0) {
                            echo "</tr><tr>";
                        }
                        $i++;
                    }
                    ?>
                    </tr>
                </table>
                <table width="80%" border="0" bordercolor="" align="center" > 
        <td>
            <center><a href="https://proydweb.com/proyectos/2023/Isha/Administrador/Registro_administrador/formularioa.php"><button class="btn btn-success" align="center">Agregar Cuenta de Empleado</button></a></center>
        </td>
        </table>
        </div>

        <?php
        mysqli_free_result($result);
        mysqli_close($link);
        ?>

           <table height="200" width="100%" bgcolor="orange">
                <tr align="center">
                    <td><a href="https://www.facebook.com/ElParaisodelManga/" target="_blank"><i class="fab fa-facebook-square fa-4x" style="color:#FFFFFF;"></i></a></td><!--<img src="face.png" width="20%">-->
                    <td><a href="https://twitter.com/ParaisoManga" target="_blank"><i class="fab fa-twitter-square fa-4x" style="color:#FFFFFF;"></i></a></td><!--<img src="twit.png" width="20%">-->
                    <td><a href="https://www.instagram.com/elparaisodelmanga/" target="_blank"><i class="fab fa-instagram-square fa-4x" style="color:#FFFFFF;"></i></a></td><!--<img src="inst.png" width="20%"  >-->
                </tr>
            </table>
            <table height="27" width="100%" bgcolor="#E08610">
                <tr align="center" valign="middle">
                    <td height="21"><font style="color: white; font-family: 'Righteous';">¡Síguenos en nuestras Redes Sociales!</font></td>
                </tr>
            </table>
</body> 
</html>
