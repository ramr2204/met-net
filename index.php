<?php

include_once 'conexion.php';
//LEEER
$sql_leer = 'SELECT * FROM usuario';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

//var_dump($resultado);

//AGREGAR
if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql_agregar = 'INSERT INTO usuario(nombre,apellido) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$apellido));

    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <div class="container mt-5">
        <div class="row">
         <div class="col-md-6">
            <?php  foreach($resultado as $dato): ?>
                <div class="alert alert-primary" role="alert">
                <?php echo $dato['nombre']?>

                <?php echo $dato['apellido']?>
                <a href="" class="float-right"><i class="fas fa-pencil-alt"></i></a>
        </div>
      

<?php  endforeach ?>

    </div>
    <div class="col-md-6">
    <h2>AGREGAR ELEMENTOS</h2>
    <form method="POST">   
            <input type="text" class="form-control" name="nombre">
            <input type="text" class="form-control mt-3" name="apellido">
            <button class="btn btn-primary mt-3">Agregar</button>
    </form>
</div>
</div>
    </div>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>


