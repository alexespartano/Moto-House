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
    $value = $this->values;
    if(strtoupper($_SESSION['username']) == 'ADMIN'){
        echo '<br><div class="cols-sm-1"></div><div class="col-sm-2"><a href="/detalles/eliminar/'.$value[0][5].'" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a></div>';
      }
      if(strtoupper($_SESSION['username']) == 'ADMIN'){
        echo '<div id="main">
        <br><br><br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
            <img src="../../public/img/motos/'.$value[0][5].'.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-sm.3"></div>
            <div class="col-sm-5">
            <form action="/detalles/modificar" method="POST">
            <div class="form-group">
            <input type="text" id ="linea" name="linea" class="form-control" value=" '.$value[0][0].'">
          </div>
          <div class="form-group">
            <input type="text" id ="marca" name="marca" class="form-control" value=" '.$value[0][1].'">
          </div>

          <div class="form-group">
            <input type="text" id ="modelo" name="modelo" class="form-control" value=" '.$value[0][2].'">
          </div>

          <div class="form-group">
            <input type="text" id ="precio" name="precio" class="form-control" value=" '.$value[0][3].'">
          </div>

          <div class="form-group">
            <input type="text" id ="descrip" name="descrip" class="form-control" value=" '.$value[0][4].'">
          </div>
          <input type="hidden" id ="identy" name="identy" class="form-control" value=" '.$value[0][5].'">
          
          <button type="submit" class="btn btn-primary">Modificar</button>
          </form>

            </div>
        </div><br><br><br>';

      }else{
    echo '<div id="main">
        <br><br><br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
            <img src="../../public/img/motos/'.$value[0][5].'.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-sm.3"></div>
            <div class="col-sm-5">
                <ul class="list-group">
                    <li class="list-group-item">LINEA: '.$value[0][0].'</li>
                    <li class="list-group-item">MARCA: '.$value[0][1].'</li>
                    <li class="list-group-item">MODELO: '.$value[0][2].'</li>
                    <li class="list-group-item">PRECIO: $ '.$value[0][3].'</li>
                    <li class="list-group-item">DESCRIPCION: '.$value[0][4].'</li>
                </ul>
            </div>
        </div><br><br><br>';}
        ?>
        <?php require 'views/footer.php'; ?>
</body>

</html>