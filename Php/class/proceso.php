<?php
include("Conexion.php");
//Estas lineas de codigo traen lo que tengo en la tabla programa
$query = "SELECT id_Proceso, nombre_proceso FROM proceso ";
$stmt = $conexion->prepare($query);
 $stmt->execute();
 $resultado = $stmt->get_result();
 while ($row = $resultado->fetch_array()) {
    $id_proceso = $row['id_Proceso'];
    $nombre_proceso = $row['nombre_proceso'];
   echo "<option value='" . $id_proceso . "'>" . $nombre_proceso . "</option>";
 }
?>