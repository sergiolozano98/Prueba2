<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
  </head>
  <body>
    <?php
    include 'beneficios.php';
//creamos la venta 1
    $venta1=new beneficios();
//le asignamos los valores tanto de venta como gastos 
    $venta1->venta(5);
    $venta1->venta(-5);
    $venta1->venta(9);
    $venta1->gastos(3);
    $venta1->gastos(2.9);
    $venta1->gastos(6);

    $venta1->imprimirv();
    $venta1->imprimirg();
    $venta1->beneficios();

     ?>
  </body>
</html>
