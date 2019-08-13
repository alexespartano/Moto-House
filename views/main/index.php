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
    <?php require 'views/header.php'; ?>
    <div id="main">

        <?php
        $count=0;
        $catalogo = $this->catalogo;
        $manyrows = intval(count($catalogo)/3);
        $i=0;
        if(strtoupper($_SESSION['username']) == 'ADMIN'){
          echo '<br><div class="cols-sm-1"></div><div class="col-sm-2"><a href="/agregar" class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">Agregar</a></div>';
        }
          for($i=0;$i<=$manyrows;$i++){
            echo "<br><br><br>";
            echo "<div class='row'>";
            echo "<div class='col-lg-1'></div>";
            for($c=0;$c<3;$c++){
              if($count < count($catalogo)){
                echo '<div class="col-sm-3">';
             echo '<div class="card" style="width: 18rem;">';
             echo '<img src="../../public/img/motos/'.$catalogo[$count][5].'.jpg" class="card-img-top" alt="...">';
             if(strtoupper($_SESSION['username']) == 'ADMIN'){
              echo '<div class="card-body">
              <h5 class="card-title">
                  '.$catalogo[$count][0].'
              </h5>
              <p class="card-text">'.$catalogo[$count][1].'</p>
              <p class="card-text">'.$catalogo[$count][2].'</p>
              <a href="/detalles/item/'.$catalogo[$count][5].'" class="btn btn-primary">Ver/Modificar/Eliminar</a>
          </div></div></div>';
            }else{
            echo '<div class="card-body">
                <h5 class="card-title">
                    '.$catalogo[$count][0].'
                </h5>
                <p class="card-text">'.$catalogo[$count][1].'</p>
                <p class="card-text">'.$catalogo[$count][2].'</p>
                <a href="/detalles/item/'.$catalogo[$count][5].'" class="btn btn-primary">Ir a Detalles $</a>
            </div></div></div>';
            }
                  
          }
    $count++; 
    } 
    echo "</div>";
    } ?>
    <?php require 'views/footer.php'; ?>
</body>

</html>