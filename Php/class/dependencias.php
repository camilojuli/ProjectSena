<?php
include("Conexion.php");

//Estas lineas de codigo traen lo que tengo en la tabla dependencia
$query = "SELECT * FROM bdsena.dependencia";
$stmt = $conexion->prepare($query);
$stmt->execute();
$resultado = $stmt->get_result();
while ($row = $resultado->fetch_array()) {
    $id_dependencia = $row['id_Dependencia'];
    $nombre_oficina = $row['nombre_oficina'];
    echo "<option value='" . $id_dependencia . "'>" . $nombre_oficina . "</option>";
}

?>