<?php
include("Conexion.php");

class Proceso
{
    public function __construct(public $conexion)
    {
    }

    public function obtenerProcesos()
    {
        $query = "SELECT id_Proceso, nombre_proceso from proceso";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();

        //Array para almacenar las dependencias
        $procesos = [];

        while ($row = $resultado->fetch_array()) {
            $procesos[] = [
                'id_proceso' => $row['id_Proceso'],
                'nombre_proceso' => $row['nombre_proceso']
            ];
        }
        return $procesos;
    }
    public function mostrarProcesos()
    {
        $procesos = $this->obtenerProcesos();

        foreach ($procesos as $pro) {
            echo "<option value='" . $pro['id_proceso'] . "'>" . $pro['nombre_proceso'] . "</option>";
        }
    }
}
?>