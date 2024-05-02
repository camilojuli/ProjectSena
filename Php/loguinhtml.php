<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loguin.css">
    <title>Loguin</title>
</head>

<body>
    <form method="POST" autocomplete="off" >
    <div class="ContendorPrincipal">
        <div class="ContendorSecundario">
            <h1 class="h1">
                Inicio de sesión
            </h1>
            <?php
            include("Conexion.php");
            include("ingresar.php");
            ?>
            <h2 class="h2Principal">Usuario</h2>
            <input type="text" name="user" placeholder="Ej: admin" class="input1">
            <h2 class="h2Secundario">Contraseña</h2>
            <input type="password" name="password" placeholder="Ej: 12345" class="input1" id="inputPassword">
            <div class="ContenedorTerciario">
                <input type="checkbox" id="mostrarContraseña">
                <h5>Mostrar Contraseña</h5>
            </div>
            <input type="submit" name="ingresar" class="BotonIngresar" value="Enviar">

            <a class="PrimeraAncla" href="">¿Olvidaste tu contraseña?</a>
            <div>
                <img class="PrimeraImagen" src="../Imagenes/logou.png" alt="Logotipo de la universidad">
            </div>
        </div>

    </div>
    </form>

    <!-- <?php
   //include("ingresar.php");
   // ?> -->




    <script>

        const checkbox = document.getElementById('mostrarContraseña');
        const input = document.getElementById('inputPassword');

        checkbox.addEventListener('click', function () { mostrarContraseña() });

        function mostrarContraseña() {
            if (input.type === "password") { input.type = "text"; }
            else { input.type = "password"; }
        }

    </script>
</body>

</html>