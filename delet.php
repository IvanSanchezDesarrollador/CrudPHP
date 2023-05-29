<?php
include ('config/bd.php');

$id= $_GET['id'];

$query = mysqli_query($conex,"delete from productos where (cod_productos = '$id')");



if ($query) {
    header('location: index.php');
}
?>