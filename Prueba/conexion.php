<?php

$conexion = mysqli_connect("localhost", "root", "26861907Julian", "bdsena");

if($conexion){
    //echo 'Conectado exitosamente a la base de datos';
}else{
    echo 'No se ha podido conectar a la base de datos';
}

?>