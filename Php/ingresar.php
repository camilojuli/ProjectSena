<?php
include("Conexion.php");

if (!empty($_POST['ingresar'])) {
    if (empty($_POST['user'])) {
        $etiqueta = "<div>Por favor ingrese el usuario</div>";
        echo "<div>Por favor ingrese el usuario</div>";
    } else if (empty($_POST['password'])) {
        echo 'Por favor ingrese la contraseña';
    } else {


        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM bdsena.usuario WHERE usuario = ? AND contrasena = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("ss", $user, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            header("Location: ../Plantilla/index.html");
        }
    }
}
?>
