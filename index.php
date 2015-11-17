<?php
    include './includes/Global.php';
    $title = "Controle de Estoque";
    include './template/header.php';
?>

<form method="post">
    <div class="center">
        Nome: <input type="text" name="nome" />
        Valor: <input type="text" name="valor" />
        Quantidade: <input type="text" name="qtd" />
        Data de Validade: <input type="text" name="dtval" />
        <input type="submit" value="Cadastrar" />
    </div>
</form>

<?php
    include './template/footer.php';
?>