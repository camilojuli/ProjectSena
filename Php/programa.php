<?php
include("Conexion.php");
//Estas lineas de codigo traen lo que tengo en la tabla programa
$query2 = "SELECT id_Programa, nombre_programa from programa";
$stmt2 = $conexion->prepare($query2);
 $stmt2->execute();
 $resultado2 = $stmt2->get_result();
 while ($row = $resultado2->fetch_array()) {
    $id_Programa = $row['id_Programa'];
    $nombre_programa = $row['nombre_programa'];
   echo "<option value='" . $id_Programa . "'>" . $nombre_programa . "</option>";
 }
?>