<?php

include('database/connection.php');
require('carro.php');

$carro = new Carro();
$carro = $carro->getCarrosFiltrados(null, null, null);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" </head> <link rel="stylesheet" href="/main.css" />

<body>

  <div class="container">
    <form id="index-filter" method="POST">
      <input type="hidden" name="action" value="search"></input>
      <div class="row justify-content-center">
        <div class="form-group col">
          <label for="placa-index">Placa</label>
          <input type="text" class="form-control" name="placa-index" id="placa-index" placeholder="Exemplo: HMG0248" maxlength="7">
        </div>

        <div class="form-group col">
          <label for="marca-index">Marca</label>
          <select name="marca-index" id="marca-index" class="form-control" onchange="filtrarCarros()">
            <option value=""></option>
            <option value="Fiat">Fiat</option>
            <option value="GM">GM</option>
            <option value="Volkswagen">Volkswagen</option>
          </select>
        </div>

        <div class="form-group col">
          <label for="modelo-index">Modelo</label>
          <select name="modelo-index" id="modelo-index" class="form-control">F
            <option value="" hidden>Selecione uma modelo</option>
          </select>
        </div>
        <div class="form-group col ">
          <button value="submit" type="submit" form="index-filter" class="btn btn-primary" id="filter-button">Filtrar</button>
        </div>
      </div>
    </form>

  </div>

  <div class="tabela"></div>


  <script src="jquery.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="function.js"></script>


</body>

</html>