<?php
    include './includes/Global.php';
    include './includes/Estoque.php';
    $title = "Controle de Estoque";
    include './template/header.php';
?>
<?php salvar(); ?>
<form method="post">
    <div class="center">
        <h2 style="text-align: center;">Cadastro de Produtos</h2>
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