<?php
//En estas lineas de codigo se importan las clases nesesarias para guardar insumo
include_once("../Conexion.php");


class guardarInsumo{
    public function __construct(public $conexion)
    {}

    public function guardarInsumos($ninsumo, $umedida){
        if (empty($ninsumo)) {
            return "<div>Por favor ingrese el insumo</div>";
        }
        if (empty($umedida)) {
            return "<div>Por favor ingrese la unidad de medida</div>";
        }
        $codigo = "roca"; // Puedes generar este código de manera dinámica si es necesario

        $query = "INSERT INTO producto (Codigo_Producto, Nombre_Producto, Unidad_Medida) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sss", $codigo, $ninsumo, $umedida);

        if ($stmt->execute()) {
            return "<div>Datos guardados correctamente</div>";
        } else {
            return "<div>Error al guardar los datos: " . $stmt->error . "</div>";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['guardar'])) {
        $ninsumo = $_POST['ninsumo'] ?? '';
        $umedida = $_POST['umedida'] ?? '';

        // Crea una instancia de InsumoManager y pasa la conexión
        $insumoManager = new guardarInsumo($conexion);
        // Llama al método guardarInsumo y muestra el resultado
        echo $insumoManager->guardarInsumos($ninsumo, $umedida);
    }
}

?>