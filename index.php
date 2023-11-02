<?php
include_once('clases/calculadora.php');
$calculadora = new Calculadora;

$operation = $_REQUEST['inputData'] ?? '';

if($operation  <> ''){
  switch($operation){
  
      case str_contains($operation, '+'):
        $numbers = explode('+', $operation);
        $numbers = array_map('intval', $numbers);
        
        $resultado = $calculadora->suma($numbers);
        break;
  
      case str_contains($operation, '-'):
        $numbers = explode('-', $operation);
        $numbers = array_map('intval', $numbers);
        
        $resultado = $calculadora->resta($numbers);
        break;
  
      case str_contains($operation, '*'):
        $numbers = explode('*', $operation);
        $numbers = array_map('intval', $numbers);
        
        $resultado = $calculadora->multiplicacion($numbers);
        break;

      case str_contains($operation, '/'):
        $numbers = explode('/', $operation);
        $numbers = array_map('intval', $numbers);
        
        $resultado = $calculadora->division($numbers);
        break;
  
  
  }
}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div
      class="container d-flex justify-content-center align-items-center"
      style="height: 100vh"
    >
      <div class="card w-50 justify-content-center">
        <form
          action="index.php"
          method="post"
        >
          <div class="card-header">
            <input
              class="w-100 form-control"
              type="text"
              name="inputData"
              id="getValues"
              value=""
              readonly
            />
            <input type="text" class="w-25 form-control my-2" value="<?php echo $resultado ?? '' ?>" disabled  />
          </div>
          <div class="card-body row row-cols-4">
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border col-12"
              name="selectedbtn"
              value="/"
            >
              /
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="7"
            >
              7
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="8"
            >
              8
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="9"
            >
              9
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="*"
            >
              *
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="4"
            >
              4
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="5"
            >
              5
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="6"
            >
              6
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="-"
            >
              -
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="1"
            >
              1
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="2"
            >
              2
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="3"
            >
              3
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="+"
            >
              +
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="0"
            >
              0
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="."
            >
              .
            </button>
            <button
              type="button"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
              value="_"
            >
              _
            </button>
            <button
              type="submit"
              class="btnvalue mt-2 btn btn-light border"
              name="selectedbtn"
            >
              =
            </button>
          </div>
        </form>
      </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>
