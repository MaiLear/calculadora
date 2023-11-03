<?php
class Calculadora{
    public $resultado;

public function suma(int $num1, int $num2)
{
    $this->resultado = $num1 + $num2;
}


public function resta(int $num1, int $num2)
{
    $this->resultado = $num1 - $num2;
}

public function multiplicacion(int $num1, int $num2)
{
    $this->resultado = $num1 * $num2;
}

public function division(int $num1, int $num2)
{
    $this->resultado = $num1 / $num2;
}


}


?>