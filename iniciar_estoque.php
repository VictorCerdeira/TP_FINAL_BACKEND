<?php
    echo $_GET["quantidade"]."<br>";
    echo $_GET["exibir_produto"];

    $queryIniciaEstoque = "INSERT INTO estoque (quantidade, produto_id)
	VALUES (".$_GET["quantidade"].", ".$_GET["exibir_produto"].")";

    $pdo = new PDO("sqlite:estoque.db");

    $pdo->query($queryIniciaEstoque);

?>