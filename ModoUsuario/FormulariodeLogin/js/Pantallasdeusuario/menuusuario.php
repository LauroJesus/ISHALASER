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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    function agregarAlCarrito( id ) {
        $.ajax(
        {
            url:"https://proydweb.com/proyectos/2023/Isha/Carrito/agregaCarrito.php",
            type:"POST",
            dataType:"text",
            data:{id: id},
            beforeSend:function()
            {
                
            },
            success:function(data)
            {
                response = $.parseJSON( data);	
                console.log("La solicitud se ha completado correctamente");
                console.log(data);
            },
            error:function(jqXHR,status,err)
            {
                console.log("Ha ocurrido un error al enviar la solicitud");
                console.log(status);
                console.log(err);
            },
            complete:function(jqXHR,opt)
            {
                alert("Agreado!!");
                console.log("La solicitud se ha completado pero no success correctamente");
            }
        });
    }
        
    </script>
</head>
<body>
     <?php
     include ('barraUsuario.php');
     ?>


    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/2.png" class="d-block w-100" alt="..."  height="380">
                </div>
                <div class="carousel-item">
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/1.png" class="d-block w-100" alt="..." height="290">
                </div>
                <div class="carousel-item">
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/3.png" class="d-block w-100" alt="40">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div> 
<br>
<br>
<header>

		<h1 style="text-align: center; font-size: 3em;">Bienvenido Gracias Por Registrarte  <?php echo $_SESSION['id_usuario']?></h1>
	</header>




	<main>
		<p style="text-align: center; font-size: 1.2em; line-height: 1.5;">Empresa dedicada a brindar a sus clientes los mejores productos  en el mercado de letreros neón.
Ofrece una amplia selección de letreros neón personalizados para su negocio, hogar o evento especial.
Además sus letreros neón son fabricados con materiales de alta calidad y diseñados para ser duraderos y resistentes. También, ofrecemos una gran variedad de colores y tamaños para que pueda elegir el que mejor se adapte a sus necesidades.</p>
	</main>




      <?php
            include ("../conex.php");
            $link = Conectarse();
            $result = mysqli_query($link, "SELECT * FROM letrero");
        ?>
        <div class="" >
                <table width='80%' border='0' bordercolor='' align='center' class="table table-condensed">
                    <tr>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<td height='230' width='230'>";
                        echo "<br><b>Letrero " . $i . ":</b><br>";
                        for ($j = 0; $j < 1; $j++) {
                            ?>
                            <img src='https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/img-menu/<?php echo $row['imagen']?> ' width="250">
                            <?php
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Precio: " . $row["precio"] . "<br>";
                            echo "Nombre: " . $row["nombre"] . "<br>";
                            echo "Tamaño(Largo): " . $row["medida_largo"] . "<br>";
                            echo "Tamaño(Ancho): " . $row["medida_ancho"] . "<br>";
                            echo "<button class='btn btn-success' onclick='agregarAlCarrito(" . $row["id"] . ")' >Agregar al carrito</button><br><br>";
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
            <table height="40px" width="100%" bgcolor="#E08610">
                <tr align="center" valign="middle">
                    <td><font style="color: white; font-family: 'Righteous';">¡Síguenos en nuestras Redes Sociales!</font></td>
                </tr>
            </table>


</body>
</html>
