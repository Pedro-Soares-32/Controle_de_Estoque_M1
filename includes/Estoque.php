<?php
if(file_exists("Global.php")){ /* verifica se arquivo existe */
    include_once './Global.php';
}else if(file_exists("includes/Global.php")){
    include_once './includes/Global.php';
}

function salvar() {
    if(
        isset($_POST['nome']) and
        isset($_POST['valor']) and
        isset($_POST['qtd'])
    ){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $qtd = $_POST['qtd'];
        
        $dtval = (isset($_POST['dtval']) ? $_POST['dtval'] : "");
        
        $SQL = "INSERT INTO produto (nome,valor,quantidade,data_de_validade) values (:nome, :valor, :qtd, :dtval);";
        $preparo = conexao()->prepare($SQL);
        $preparo->bindValue("nome", $nome);
        $preparo->bindValue("valor", $valor);
        $preparo->bindValue("qtd", $qtd);
        $preparo->bindValue("dtval", $dtval);
        $preparo->execute();
        if($preparo->rowCount() == 1){
            echo "Sucesso!";
        }else{
            echo "Erro!";
        }
    }
}

function listar(){
    $SQL = "SELECT * FROM produto WHERE 1;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while ($linha = $preparo->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td><a href='?excluir=".$linha['idProduto']."'>Excluir</a></td>";
        echo "<td>".$linha['idProduto']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['valor']."</td>";
        echo "<td>".$linha['quantidade']."</td>";
        echo "<td>".$linha['data_de_validade']."</td>";
        echo "</tr>";
    }
}