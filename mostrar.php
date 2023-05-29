<?php
include('config/bd.php');



$colsulta = mysqli_query($conex, "select*from productos");
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
    <div class="container">
        <h1>Todos los productos Seleccionados</h1>
        <div class="row">
            <div class="col-lg-2">
                <form action="mostrar.php" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <?php
                    foreach ($colsulta as $item) { ?>
                        <div class="col-lg-3 mt-2">
                            <div class="card" style="width: 16rem;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="card-title"><?php echo $item['Producto']; ?> </h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="text-warning">
                                                <?php
                                                echo $item['stock'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo $item['Categoria'] ?>
                                    </h6>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>