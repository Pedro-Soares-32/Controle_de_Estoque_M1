<?php
    include './includes/Global.php';
    include './includes/Estoque.php';
    $title = "Controle de Estoque";
    include './template/header.php';
?>

<div class="center">
    <table style="width: 100%;">
        <tr style="background: #CCC;">
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Data de Validade</th>
        </tr>
        <?php listar(); ?>
    </table>
</div>

<?php
    include './template/footer.php';
?>