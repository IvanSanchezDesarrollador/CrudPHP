<?php
include('config/bd.php');
$id = $_GET['id'];
$consulta = mysqli_query($conex, "select*from productos where (cod_productos= '$id')");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8  mx-auto">
          <?php foreach ($consulta as $value) {?>
            <h3>Nombre</h3>
            <p>
              <?php
              echo $value['Producto'];
              ?>
            </p>
            <h3>Categoria</h3>
            <p>
              <?php
              echo $value['Categoria'];
              ?>
            </p>
            <h3>Cantidad (stock)</h3>
            <p>
              <?php
              echo $value['stock'];
              ?>
            </p>
            <h3>Precios</h3>
            <p>
              <?php
              echo $value['precio'];
              ?>
            </p>
            <h3>Estado</h3>
            <p>
              <?php
              echo $value['Estado'];
              ?>
            </p>
            <a href="index.php" class="btn btn-danger">Regresar</a>
          <?php }?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>