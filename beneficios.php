<?php
/**
 *
 */
 //creamos la clase beneficios
class beneficios
{
  //definimos los dos arrays que estan vacios que mas adelantes le iremos añadiendo valores.
  private $ventas=[];
  private $gastos=[];
//creamos la funcion venta que usamos mas meter valores al array y le indicamos con el if que no puede ser menor a 0
  public function venta($ventas)
  {
    if ($ventas>=0) {
      $this->ventas[]=$ventas;
    }
    return $this->ventas;
  }
  //creamos la funcion gasto que usamos mas meter valores al array y le indicamos con el if que no puede ser menor a 0
  Public function gastos($gastos)
  {
    if($gastos>=0){
      $this->gastos[]=$gastos;
    }
    return $this->gastos;
  }
//la funcion imprimirv que imprime las ventas para mostrar los valores del array por pantalla
  public function imprimirv()
  {
    foreach ($this->ventas as $key => $value) {
      echo "Esto es la venta:".$value."<br>";
    }
    }
    //la funcion imprimirg que imprime los gastos para mostrar los valores del array por pantalla
    public function imprimirg()
    {
      foreach ($this->gastos as $key => $value) {
        echo "Esto es la gasto:".$value."<br>";
    }
    }
    // en esta funcion calculamos los beneficios que con los foreach recogemos los valores y los sumamos a las dos variables que son la suma de sus valores
   public function beneficios()
   {
     $tventas=0;
     foreach ($this->ventas as $key => $value) {
       $tventas=$tventas+$value;
     }
     $tgastos=0;
     foreach ($this->gastos as $key => $value) {
       $tgastos=$tgastos+$value;
     }
     $beneficio=$tventas-$tgastos;
     echo "Estos es el beneficio:".$beneficio."<br>";


   }

}




 ?>
