<html>
      <head>
            <title>Exibir produtos</title>
      </head>
      <body>
            <?php
                  $pdo = new PDO("sqlite:estoque.db");

                  $queryProdutos = "SELECT produtos.id, produtos.nome, categorias.nome as nome_categoria
                  FROM produtos INNER JOIN categorias
                  WHERE produtos.categoria_id = categorias.id;";

                  $produtos = $pdo->query($queryProdutos);

                  echo "<table border=2>";
                  echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Nome</th>";
                  echo "<th>Categoria</th>";
                  echo "<tr>";
                  

                  foreach($produtos as $produto){
                        echo "<tr><td>".$produto["id"]."</td>";
                        echo "<td>".$produto["nome"]."</td>";
                        echo "<td>".$produto["nome_categoria"]."</td></tr>";
                  }

                  echo "</table>";

            ?>
      </body>

</html>