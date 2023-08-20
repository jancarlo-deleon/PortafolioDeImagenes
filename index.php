<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php

$objconexion = new conexion();
$proyectos = $objconexion->consultar("SELECT * FROM `proyectos`");

?>

<div class="row align-items-md-stretch ">
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-primary border rounded-3">
            <h1 class="display-3">Bienvenidos</h1>
            <p class="lead">Esto es un portafolio de imágenes</p>
            <hr class="my-2">

        </div>
    </div>



</div>



<br>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($proyectos as $proyecto) { ?>

    <div class="col">
    <div class="card">
      <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
    </div>
  </div>

<?php } ?>
  

</div>

<?php include("pie.php"); ?>