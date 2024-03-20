<html>
      <head>
            <title>Exibir Categorias</title>
      </head>
      <body>
            <?php
                  $pdo = new PDO("sqlite:estoque.db");

                  $queryCategorias = "SELECT * FROM
                  categorias";

                  $categorias = $pdo->query($queryCategorias);

                  echo "<table border=2>";
                  echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Nome</th>";
                  echo "<th>Categoria</th>";
                  echo "<tr>";
                  

                  foreach($categorias as $categoria){
                        echo "<tr><td>".$categoria["id"]."</td>";
                        echo "<td>".$categoria["nome"]."</td></tr>";
            
                  }

                  echo "</table>";
                  
            ?>
      </body>

</html>