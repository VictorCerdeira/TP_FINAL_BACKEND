<?php
    echo $_GET["nome"]."<br>";
    echo $_GET["descricao"]."<br>";
    echo $_GET["preco"]."<br>";
    echo $_GET["exibir_categorias"]."<br>";
    
    $queryInsereProduto = "INSERT INTO produtos (nome, descricao, preco, categoria_id)
	VALUES (\"".$_GET["nome"]."\", \"".$_GET["descricao"]."\", ".$_GET["preco"].", ".$_GET["exibir_categorias"].")";

    $pdo = new PDO("sqlite:estoque.db");
    $pdo->query($queryInsereProduto);

?>