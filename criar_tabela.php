<?php
$pdo = new PDO("sqlite:estoque.db");

$queryCriaTabelaCategorias = "CREATE TABLE if not exists categorias (
            id	INTEGER NOT NULL,
            nome	TEXT NOT NULL,
            PRIMARY KEY(id AUTOINCREMENT)
      )";

$pdo->query($queryCriaTabelaCategorias);

$queryCriaTabelaProdutos = "CREATE TABLE if not exists produtos (
            id	INTEGER NOT NULL,
            nome	TEXT NOT NULL,
            descricao	TEXT,
            preço	REAL NOT NULL,
            categoria_id	INTEGER,
            FOREIGN KEY(categoria_id) REFERENCES categorias(id),
            PRIMARY KEY(id AUTOINCREMENT)
      )";

$pdo->query($queryCriaTabelaProdutos);

$queryCriaTabelaEstoque = "CREATE TABLE if not exists estoque (
            id	INTEGER NOT NULL,
            quantidade	INTEGER NOT NULL,
            produto_id	INTEGER,
            PRIMARY KEY(id AUTOINCREMENT),
            FOREIGN KEY(produto_id) REFERENCES produtos(id)
      )";

$pdo->query($queryCriaTabelaEstoque);
