<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar insumo</title>

    <!-- Forma de poner bootstrap en nuestro proyecto pero con la ayuda en el servidor -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <form action="class/guardarInsumo.php" method="post">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 m-3">
                    <div class="row">
                        <h2 class="text-center text-blacks">Ingreso de nuevos insumos y/o Productos</h2>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label for="dependencia">Dependencia:</label>
                            <select class="form-select mb-3" name="dependencia" id="dependencia">
                                <option selected>Elije una opcion...</option>
                                <?php
                                include("class/Dependencias.php");
                                $dependencias = new Dependencia($conexion);
                                $dependencias->mostrarDependencias();
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="Oficina:">Oficina:</label>
                            <select class="form-select mb-3" name="provincia" id="provincia">
                                <option selected>Elije una opcion...</option>
                                <?php
                                include("class/procesos.php");
                                $procesos = new Proceso($conexion);
                                $procesos->mostrarProcesos();
                                ?>

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="programa">Programa</label>
                            <select class="form-select mb-3" name="programa" id="programa">
                                <option selected>Elije una opcion...</option>
                                <?php
                                include("class/programas.php");
                                $programas = new Programa($conexion);
                                $programas->mostrarProgramas();
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="nombreinsumo">Nombre del insumo:</label>
                            <input type="text" class="form-control" name="ninsumo">
                        </div>
                        <div class="col-6">
                            <label for="unidadmedida">Unidad de medida:</label>
                            <input type="text" class="form-control" name="umedida">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row  mt-2 ">
                        <div class="col-4 text-center">
                            <button type="submit" class="btn btn-primary " name="guardar">Guardar</button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="submit" class="btn btn-primary" name="modificar">Modificar</button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
                        </div>

                    </div>
                    <form method="POST" autocomplete="off">
                        <div class="row mt-1">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Dependencia</th>
                                        <th>Oficina</th>
                                        <th>Programa</th>
                                        <th>Nombre insumo</th>
                                        <th>Unidad de medida</th>
                                    </tr>
                                    <?php
                                    include("class/tablita.php");
                                    $tabla = new Tablita($conexion);
                                    $tabla->mostrarTabla();
                                    ?>
                                </thead>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>