<?php
include("Conexion.php");
//Estas lineas de codigo traen lo que tengo en la tabla programa
$query = "SELECT id_Programa, nombre_programa from programa";
$stmt = $conexion->prepare($query);
 $stmt->execute();
 $resultado = $stmt->get_result();
 while ($row = $resultado->fetch_array()) {
    $id_Programa = $row['id_Programa'];
    $nombre_programa = $row['nombre_programa'];
   echo "<option value='" . $id_Programa . "'>" . $nombre_programa . "</option>";
 }
?>