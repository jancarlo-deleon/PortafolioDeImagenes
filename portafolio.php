<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {



    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp() . "_" . $_FILES['archivo']['name'];

    $imagen_temporal = $_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal, "imagenes/" . $imagen);

    $objconexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`idProyecto`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objconexion->ejecutar($sql);

    header("location:portafolio.php");

}

if ($_GET) {

    $id = $_GET['borrar'];
    $objconexion = new conexion();

    $imagen = $objconexion->consultar("SELECT imagen FROM `proyectos` WHERE idProyecto =" . $id);

    unlink("imagenes/" . $imagen[0]['imagen']);

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`idProyecto` =" . $id;
    $objconexion->ejecutar($sql);

    header("location:portafolio.php");

}

$objconexion = new conexion();
$proyectos = $objconexion->consultar("SELECT * FROM `proyectos`");

?>
<br />

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">

                        Nombre: <input required class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen: <input required class="form-control" type="file" name="archivo" id="">
                        <br />
                        Descripción:
                        <textarea required class="form-control" name="descripcion" rows="3"></textarea>

                        <br />
                        <button class="btn btn-success" type="submit">Guardar Imagen</button>

                    </form>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Desripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto) { ?>
                            <tr>
                                <td>
                                    <?php echo $proyecto['idProyecto']; ?>
                                </td>
                                <td>
                                    <?php echo $proyecto['nombre']; ?>
                                </td>
                                <td>
                                    <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">

                                </td>
                                <td>
                                    <?php echo $proyecto['descripcion']; ?>
                                </td>
                                <td><a class="btn btn-danger"
                                        href="?borrar=<?php echo $proyecto['idProyecto']; ?>">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>



<br />


<?php include("pie.php"); ?>