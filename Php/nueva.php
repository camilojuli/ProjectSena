<?php
include("Conexion.php");
// class mydatabase
// {
//     private $conexion;
//     public function __construct($conexion)
//     {
//         $this->conexion = $conexion;
//     }
//     public function getDependencias()
//     {
//         $query = "SELECT * FROM bdsena.dependencia";
//         $stmt = $this->conexion->prepare($query);
//         if ($stmt->execute()) {
//             $resultado = $stmt->get_result();
//             while ($row = $resultado->fetch_array()) {
//                 $id_dependencia = $row['id_Dependencia'];
//                 $nombre_oficina = $row['nombre_oficina'];
//                 echo "<option value='" . $id_dependencia . "'>" . $nombre_oficina . "</option>";
//             }
//         } else {
//             echo "Error ejecutando la consulta de dependencias.";
//         }
//     }

//     public function getProgramas()
//     {
//         $query = "SELECT id_Programa, nombre_programa FROM programa";
//         $stmt = $this->conexion->prepare($query);
//         if ($stmt->execute()) {
//             $resultado = $stmt->get_result();
//             while ($row = $resultado->fetch_array()) {
//                 $id_Programa = $row['id_Programa'];
//                 $nombre_programa = $row['nombre_programa'];
//                 echo "<option value='" . $id_Programa . "'>" . $nombre_programa . "</option>";
//             }
//         } else {
//             echo "Error ejecutando la consulta de programas.";
//         }
//     }
// } 
// $database = new mydatabase($conexion);



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
