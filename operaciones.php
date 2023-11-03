<?php 
include_once('clases/calculadora.php');
class Operaciones{
    public $mathOperation;
    public function __construct(){
        $this->mathOperation = new Calculadora;
    }

public function make_suma($values){
    $num1 = '';
    $num2 = '';
    $positionSign = strpos($values, '+');
    for($i = 0; $i<strlen($values); $i++){
      if($values[$i] === '+')
      continue;

      $num1 = $i < $positionSign ?  $num1.$values[$i] : $num2.$values[$i];
      $this->mathOperation->suma(intval($num1), intval($num2));

      if($values[$i] === '-' || $values[$i] === '*' || $values[$i] === '/'){
        $this->otherOperation('+',$values);
      }

    }

    return $this->mathOperation->resultado;
}
public function make_resta($values){
    $num1 = '';
    $num2 = '';
    $positionSign = strpos($values, '-');
    for($i = 0; $i<strlen($values); $i++){
      if($values[$i] === '-')
      continue;

      $num1 = $i < $positionSign ?  $num1.$values[$i] : $num2.$values[$i];
      $this->mathOperation->resta(intval($num1), intval($num2));

      if($values[$i] === '+' || $values[$i] === '*' || $values[$i] === '/'){
        $this->otherOperation('-',$values);
      }

    }
    return $this->mathOperation->resultado;

}
public function make_multi($values){
    $num1 = '';
    $num2 = '';
    $positionSign = strpos($values, '*');
    for($i = 0; $i<strlen($values); $i++){
      if($values[$i] === '*')
      continue;

      $num1 = $i < $positionSign ?  $num1.$values[$i] : $num2.$values[$i];
      $this->mathOperation->multiplicacion(intval($num1), intval($num2));

      if($values[$i] === '+' || $values[$i] === '-' || $values[$i] === '/'){
        $this->otherOperation('*', $values);
      }

    }
    return $this->mathOperation->resultado;

}
public function make_div($values){
    $num1 = '';
    $num2 = '';
    $positionSign = strpos($values, '/');
    for($i = 0; $i<strlen($values); $i++){
      if($values[$i] === '/')
      continue;

      $num1 = $i < $positionSign ?  $num1.$values[$i] : $num2.$values[$i];
      $this->mathOperation->division(intval($num1), intval($num2));

      if($values[$i] === '-' || $values[$i] === '*' || $values[$i] === '+'){
        $this->otherOperation('/', $values);
      }

    }
    return $this->mathOperation->resultado;

}

public  function  otherOperation($signo, $values){
    $num1 = '';
    $num2 = '';
    $signoSuma = strpos($values, '+');
    $signoResta = strpos($values, '-');
    $signoMulti = strpos($values, '*');
    $signoDiv = strpos($values, '/');
    for($i = 0; $i<strlen($values); $i++){
        if($values[$i] === '+' && $values[$i] <> $signo){
            if($i < $signoSuma){
                $num1 .= $values[$i];
            }
            elseif($i > $signoSuma && $i < $signoResta || $i < $signoMulti || $i < $signoDiv){
                $num2 .= $values[$i]; 
            }
            $this->mathOperation->suma(intval($num1), intval($num2));
        }

        elseif($values[$i] === '-' && $values[$i] <> $signo){
            if($i < $signoResta){
                $num1 .= $values[$i];
            }
            elseif($i > $signoResta && $i < $signoSuma || $i < $signoMulti || $i < $signoDiv){
                $num2 .= $values[$i]; 
            }
            $this->mathOperation->resta(intval($num1), intval($num2));
        }

        elseif($values[$i] === '*' && $values[$i] <> $signo){
            if($i < $signoMulti){
                $num1 .= $values[$i];
            }
            elseif($i > $signoMulti && $i < $signoSuma || $i < $signoResta || $i < $signoDiv){
                $num2 .= $values[$i]; 
            }
            $this->mathOperation->multiplicacion(intval($num1), intval($num2));
        }

        elseif($values[$i] === '/' && $values[$i] <> $signo){
            if($i < $signoDiv){
                $num1 .= $values[$i];
            }
            elseif($i > $signoDiv && $i < $signoSuma || $i < $signoMulti || $i < $signoResta){
                $num2 .= $values[$i]; 
            }
            $this->mathOperation->division(intval($num1), intval($num2));
        }

    }
}

}