<html> <!-- barra.html -->
<head>
<meta charset="UTF-8"> 
<title>Isha laser</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head> 
<body> 
     <?php include ('menu.php');
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
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/1.png" class="d-block w-100" alt="..." height="380">
                </div>
                <div class="carousel-item">
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/3.png" class="d-block w-100" alt="..." height="380">
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
		<h1 style="text-align: center; font-size: 3em;"******</h1>
	</header>




	<main>
		<p style="text-align: center; font-size: 1.2em; line-height: 1.5;">Empresa dedicada a brindar a sus clientes los mejores productos  en el mercado de letreros neón. 
Ofrece una amplia selección de letreros neón personalizados para su negocio, hogar o evento especial.
Además sus letreros neón son fabricados con materiales de alta calidad y diseñados para ser duraderos y resistentes. También, ofrecemos una gran variedad de colores y tamaños para que pueda elegir el que mejor se adapte a sus necesidades.</p>
	</main>

 
   

      <?php 
            include ("conex.php");
            $link = Conectarse();
            $result = mysqli_query($link, "SELECT * FROM letrero");
        ?>
        <div class="" >
                <table width='80%' border='0' bordercolor='' align='center' class="table table-danger">
                    <tr>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<td height='230' width='230'>";
                        echo "<br><b>Letrero " . $i . ":</b><br>";
                        for ($j = 0; $j < 1; $j++) {
                            ?>
                            <img src='Imagenesishalaser/img-menu/<?php echo $row['imagen']?> ' width="250">
                            <?php
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Precio: " . $row["precio"] . "<br>";
                            echo "Nombre: " . $row["nombre"] . "<br>";
                            echo "Tamaño(Largo): " . $row["medida_largo"] . "<br>";
                            echo "Tamaño(Ancho): " . $row["medida_ancho"] . "<br>";
                            //echo "<button class='btn btn-success' onclick='agregarAlCarrito()'>Agregar al carrito</button><br><br>";
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

        <table height="40px" width="100%" bgcolor="#9a27f7">
        <tralign="center" valign="middle"><div class="redes">
            <ul>
                <td><li><a href="https://www.instagram.com/IshaLaser/"><img src="Imagenesishalaser/instagram.png" width="70px" height="70px" align="right"></a></li></td>
                 <td><li><a href="https://www.facebook.com/IshaLaser/"><img src="Imagenesishalaser/facebook.png" width="70px" height="70px" align="center"></a></li></td>
                  <td><li><a href="https://www.mercadolibre.com.mx/perfil/ISHA+LASER"><img src="Imagenesishalaser/mercado.png" width="70px" height="70px"></a></li></td>
            </ul>
            </div>
        </tr>
            </table>
            <table height="40px" width="100%" bgcolor="#E08610">
                <tr align="center" valign="middle">
                    <td><font style="color: white; font-family: 'Righteous';">¡Síguenos en nuestras Redes Sociales!</font></td>
                </tr>
            </table>
        
    
</body> 
</html>
