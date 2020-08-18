<!-- verificar se o carro na pagina de cadastro existe ou nao para saber se ta editando ou criando um carro -->
 <?php

    require('carro.php');
    $carro = array();
    $carro['placa'] = '';
    $disabled = 'disabled';
    $action = 'create';
    if (!empty($_GET['id'])) {
        $carro = new Carro();
        $carro = $carro->getCarro($_GET['id']);
        $disabled = '';
        $action = 'update';
    }
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" </head> <link rel="stylesheet" href="/main.css" />
 </head>

 <body>
     <div class="container">

         <form action="controller.php" method="POST">
             <div class="form-group">
                 <label for="placa">Placa</label>
                 <input value='<?= $carro['placa'] ?>' type="text" class="form-control " name="placa" id="placa" placeholder="Exemplo: HMG0248" minlength="7" maxlength="7" required>
             </div>

             <div class="form-group">
                 <label for="marca">Marca</label>
                 <select name="marca" id="marca" class="form-control" onchange="cadastrarCarros()" required>
                     <option value="" hidden>Selecione uma marca</option>
                     <option value="Fiat">Fiat</option>
                     <option value="GM">GM</option>
                     <option value="Volkswagen">Volkswagen</option>
                 </select>
             </div>
             <div class="form-group">
                 <label for="modelo">Modelo</label>
                 <select name="modelo" id="modelo" class="form-control" <?= $disabled ?> required>
                     <option value="" hidden>Selecione uma modelo</option>
                 </select>

             </div>

             <div class="form-group ">
                 <button type="submit" class="btn btn-primary " name="save">Salvar</button>
                 <input type="hidden" name="id" value="<?= $carro['id'] ?>">
                 <input type="hidden" name="action" value="<?= $action ?>">

                 <a href="index.php" class="btn btn-link">Voltar</a>
             </div>
         </form>
     </div>

     <script src="function.js"> </script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>

 </html>