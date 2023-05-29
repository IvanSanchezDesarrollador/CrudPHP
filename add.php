<?php
include ('config/bd.php');

if($_POST){
    $productoname = $_POST['productoNames'];
    $categoria=$_POST['categoriaNames'];
    $stock=$_POST['cantStock'];
    $precio=$_POST['precioProduct'];
    $estado=$_POST['estadoProduc'];
    $consulta = mysqli_query($conex,"insert into productos(Producto,Categoria,stock,precio,Estado) values('$productoname','$categoria','$stock','$precio','$estado')");
    if($consulta){
        header('location: index.php');
    }
}

/*if (!empty($_POST['productoNames'])) {
    $productoname = $_POST['productoNames'];
    $query = mysqli_query($conex,"insert into productos(Producto) values('$productoname')");
    if ($query) {
        header('location: index.php');
    }
}
*/
?>