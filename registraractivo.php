<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redistro activo</title>
</head>
<body>
<?php
  $codigoactivo = $_POST['codigoactivo'];
  $conex = mysqli_connect('localhost','root','','activos');
  $consulta = mysqli_query($conex,"INSERT INTO datosactivos(codigoactivo, marca, seriall,  referencia ,  ubicacion ,  procesador ,  estado ,  cantidad ,  velocidad ,  marcadiscoduro ,  capasidaddiscoduro ,  serialunidaddedisco ,  marcamonitor ,  serialmonitor ,  referenciamonitor ,  codigoactivomonitor ,  cabledepodermonitor ,  estadomonitor ,  marcateclado ,  estadoteclado ,  serialteclado ,  nombrepc ,  tipodireccionip ,  serialsoftware ,  nombresistemaope ,  versionsistemaope ,  meses ,  fechamantenimiento ,  tipodeservicio ,  repuestos ,  siguienterevision ,  descripcion ) VALUES ('$codigoactivo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')");
  if ($consulta) {
   
    echo '<center><h1>Registro Exitoso😁 <br> redirigiendo</h1></center>';
   
  }
  else{
    echo '<center><h1>Ups algo fallo...😢<br> redirigiendo</h1></center>';
  }
  ?>
  <script>
    setTimeout(()=>{
    location.href='../formularios/agregar.html'
},3000)
  </script>
</body>
</html>
