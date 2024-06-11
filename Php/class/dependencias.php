<?php
include("Conexion.php");

class Dependencia
{
    public function __construct(public $conexion)
    {
    }

    public function obtenerDependencias()
    {
        $query = "SELECT * FROM bdsena.dependencia";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();

        //Array para almacenar las dependencias
        $dependencias = [];

        while ($row = $resultado->fetch_array()) {
            $dependencias[] = [
                'id_dependencia' => $row['id_Dependencia'],
                'nombre_oficina' => $row['nombre_oficina']
            ];
        }
        return $dependencias;
    }
    public function mostrarDependencias()
    {
        $dependencias = $this->obtenerDependencias();

        foreach ($dependencias as $dep) {
            echo "<option value='" . $dep['id_dependencia'] . "'>" . $dep['nombre_oficina'] . "</option>";
            $d = $dep['nombre_oficina'];
            echo $d;
        }
        //return $d;
    }
}
?>