<?php


require('carro.php');


$carro = new Carro();
if ($_POST['action'] == 'create') {
    $carro->createCarro($_POST['placa'], $_POST['modelo'], $_POST['marca']);
    header('Location: index.php');

}

else if ($_POST['action'] == 'delete') {
    $carro->deletarCarro($_POST['id']);
    header('Location: index.php');
}

else if ($_POST['action'] == 'update') {
    $carro->updateCarro($_POST['id'],$_POST['placa'], $_POST['modelo'], $_POST['marca']);
      header('Location: index.php');
}



