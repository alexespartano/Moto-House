<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moto-House</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <?php require 'views/header.php';

        echo '<div id="main">
        <br><br><br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-5">
            <form action="/agregar/add" method="POST" enctype="multipart/form-data">

            <div class="form-group">
            <label for="imag">SELECCIONAR IMAGEN A MOSTRAR (solo jpg)</label>
            <input type="file" name="imag" id="imag" class="sb">
                </div>         

            <div class="form-group">
            <input type="text" id ="linea" name="linea" class="form-control" PLACEHOLDER="LINEA DE LA MOTO">
          </div>
          <div class="form-group">
            <input type="text" id ="marca" name="marca" class="form-control" PLACEHOLDER="MARCA DE LA MOTO">
          </div>

          <div class="form-group">
            <input type="text" id ="modelo" name="modelo" class="form-control" PLACEHOLDER="MODELO DE LA MOTO">
          </div>

          <div class="form-group">
            <input type="text" id ="precio" name="precio" class="form-control" PLACEHOLDER="COSTO">
          </div>

          <div class="form-group">
            <input type="text" id ="descrip" name="descrip" class="form-control" PLACEHOLDER="DESCRIPCION">
          </div>
          <button type="submit" class="btn btn-primary">AGREGAR</button>
          </form>

            </div>
        </div><br><br><br>';
        ?>
        <?php require 'views/footer.php'; ?>
</body>

</html>