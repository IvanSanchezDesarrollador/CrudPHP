<?php
include('config/bd.php');
$resulConsul = mysqli_query($conex, 'select *  from productos');
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-3">
        <form action="add.php" method="post">
          <h1>Producto</h1>
          <br />
          <label for="nombreProducto" class="label-control">Nombre:</label>
          <input type="text" name="productoNames" class="form-control" id="nombreProducto" autocomplete="off">
          <label for="cateProduc" class="label-control">Categoria:</label>
          <input type="text" name="categoriaNames" class="form-control" id="cateProduc" autocomplete="off">
          <label for="cantStock" class="label-control">Stock:</label>
          <input type="text" name="cantStock" class="form-control" id="cantStock">
          <label for="preProduct" class="label-control">Precio:</label>
          <input type="text" name="precioProduct" class="form-control" id="preProduct" autocomplete="off">
          <label for="productEstado" class="label-control">Estado:</label>
          <input type="text" name="estadoProduc" class="form-control" id="productEstado" autocomplete="off">

          <input type="submit" class="btn btn-danger mt-2" value="Agregar">
        </form>
      </div>
      <!--TABLA-->
      <div class="col-lg-9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">N</th>
              <th scope="col">Producto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Stock</th>
              <th scope="col">Precio</th>
              <th scope="col">Estado</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
              <th scope="col">Infomacion</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">

            <?php foreach ($resulConsul as $value) { ?>
              <tr>

                <th scope="row"><?php echo $value['cod_productos'] ?></th>

                <td><?php echo $value['Producto'] ?></td>

                <td>
                  <?php
                  echo $value['Categoria'];
                  ?>
                </td>
                <td>
                  <?php
                  echo $value['stock'];
                  ?>
                </td>

                <td>
                  <?php
                  echo $value['precio'];
                  ?>
                </td>
                <td>
                  <?php
                  echo $value['Estado']
                  ?>
                </td>
                <td>
                <a href="" class="btn btn-danger">Editar</a>
                </td>
                <td>
                <a href="delet.php?id=<?php
                echo $value['cod_productos'];
                ?>
                " class="btn btn-danger">Eliminar</a>
                </td>
                <td>
                  <a href="informacion.php?id=
                  <?php
                  echo $value['cod_productos'];
                  ?>
                  " class="btn btn-info">Informacion</a>
                </td>
              </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>