<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>
<?php 
     include ('../../../menu.php'); 
     ?>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <H1 align="center">ISHA LASER</H1>
                <h2> CONTACTO <br> Y <br>COTIZACIONES</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> tucorreo@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +52 0123456789</p>
            </section>
        </section>

        <form action="enviar.php" method="post"class="form_contact">
            <h2>Envia un mensaje por email</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" required>

                <label for="phone">Telefono* / Celular</label>
                <input type="text" id="phone" name="telefono" required>

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" required>

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
