
<?php
 $estatusEntrada="";
if(isset($_POST["chSalida"])){
    $estatusEntrada = $_POST["salida"];
}elseif(isset($_POST["chEntrada"])){
    $estatusEntrada = $_POST["entrada"];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/master.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Página principal</title>
</head>

<body>
    <h3 style="text-align: center; padding-top: 15px">Entradas y salidas de veículos</h3>

    <div class="form-group" id="form1">
        <form action="" method="POST"> 
            <label for="codigo">ingrese el código del propietario: </label>
            <input class="form-control" type="text" id="codigo" name="codigo" placeholder="Código" style="width: 50%;"><br>
            <button name="buscaCodigo" class="btn btn-success">Buscar</button>
            <br>
            <hr>
            <img style="float: right" width="150" height="150" src="moto.jpg" alt="foto del veículo">

            <br><br>



            <p>Propietario: </p>
            <p>Veículos: </p>
            <select class="form-control" name="motosSelect" style="width: 50%;" id="">
                <option value="ej1">ej1</option>
            </select>
            <br>
            <p>N. placas: </p>
            <p>Color: </p>
            <p>Marca: </p>
            <p>Status: <?= $estatusEntrada  ?> </p>
            <br>
            <input type="hidden" name="entrada" value="IN">
            <input type="hidden" name="salida" value="OUT">
            <button name="chEntrada" class="btn btn-success">Checar entrada</button>
            <button name="chSalida" class="btn btn-danger">Checar salida</button>




        </form>
        <br>
        <div id="btnReg">
            <a href="src/php/registro.php"><button class="btn btn-warning">registrar un nuevo usuario</button></a>
        </div>

    </div>



</body>

</html>
<?php


?>