<?php
require('carro.php');
$carro = new Carro();
if (!empty($_POST['placa-index']) || !empty($_POST['modelo-index']) || !empty($_POST['marca-index'])) {
    $carro = $carro->getCarrosFiltrados($_POST['placa-index'], $_POST['modelo-index'], $_POST['marca-index']);
} else {
    $carro = $carro->getCarrosFiltrados();
}


?>
<div class="tabela">
    <table class=" table table-striped table-bordered table-hover table-responsive-md ">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Data de registro</th>
                <th class="col-md-auto"><a href="form-cars.php" class="btn btn-primary " role="button" aria-pressed="true">Adicionar</a></th>

            </tr>
        </thead>
        <tbody>
            <!-- inicia o for para pegar todos os valores do db -->
            <?php
            foreach ($carro as $key => $value) {

            ?>
                <tr>
                    <th scope="row"><?= $value["id"] ?></th>
                    <td><?= $value["placa"] ?></td>
                    <td><?= $value["modelo"] ?></td>
                    <td><?= $value["marca"] ?></td>
                    <td><?= $value["data_de_registro"] ?></td>
                    <td class="buttons-tabela">

                        <form action="controller.php" method="POST">
                            <input type="hidden" name="id" value="<?= $value["id"] ?>">
                            <input name="action" value="delete" type="hidden">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                        <a href="form-cars.php?id=<?= $value['id'] ?>" class="btn btn-warning" type="submit">Editar</a>




                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>