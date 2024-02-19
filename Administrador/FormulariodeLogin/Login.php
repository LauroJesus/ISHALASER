<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <script>
        jjj
    </script>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>
    <?php include '../../menu.php'; ?>
    <br>
    <br>
    <br>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <H1 align="center">ISHA LASER</H1>
                <h2> LOGIN ADMINISTRADOR<br> </h2>
            </section>
            <section class="info_items">
                <p></p>
                <p></p>
            </section>
        </section>
         
        <form action="control.php" method="post"class="form_contact">
            <h2>Ingresa con tu usuario de administrador</h2>
            <div class="user_info">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" required>

                <label for="password">Contraseña *</label>
                <input id="password" type ="password" name="contrasenia" required>
                
                <br>
                <center><input type="submit" value="LOGIN" id="btnSend"></center>
               
            </div>
        </form>
        <center><a  href="../Registro_administrador/../Registro_administrador/formularioa.php"><button class="btn btn-success" align="center">No tienes cuenta Registrate Aqui</button></a></center>
    </section>
   
</body>
</html>
