<?php
include("Conexion.php");

class Programa
{
    public function __construct(public $conexion)
    {
    }

    public function obtenerProgramas()
    {
        $query = "SELECT id_Programa, nombre_programa from programa;";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();

        //Array para almacenar las dependencias
        $programas = [];

        while ($row = $resultado->fetch_array()) {
            $programas[] = [
                'id_programa' => $row['id_Programa'],
                'nombre_programa' => $row['nombre_programa']
            ];
        }
        return $programas;
    }
    public function mostrarProgramas()
    {
        $programas = $this->obtenerProgramas();

        foreach ($programas as $prog) {
            echo "<option value='" . $prog['id_programa'] . "'>" . $prog['nombre_programa'] . "</option>";
        }
    }
}
?>