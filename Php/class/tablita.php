<?php
include("Conexion.php");

class Tablita{
    public function __construct(public $conexion)
    {
    }
    public function TraerTabla()
    {
        $query = "SELECT Codigo_Producto, Nombre_Producto, Unidad_Medida from producto";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();

        $tabla = [];

        while ($row = $resultado->fetch_array()) {
            $tabla[] = [
                'codigoProducto' => $row['Codigo_Producto'], 'nombreProducto' => $row['Nombre_Producto'], 'unidad_Medida' => $row['Unidad_Medida']
            ];
        }
        return $tabla;
    }
    public function mostrarTabla()
    {
        $tabla = $this->TraerTabla();

        foreach ($tabla as $tab) {
            echo "<tr>
                <td>" . $tab['codigoProducto'] . "</td>
                <td>" . $tab['nombreProducto'] . "</td>
                <td>" . $tab['unidad_Medida'] . "</td>
                </tr>";
        }
    }

}
?>