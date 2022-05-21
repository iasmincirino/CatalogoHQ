<?php
    session_start();
    include_once("conexao.php");
?>

<!-- LISTA COM TODAS AS HQ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de HQ</title>
    <style>
        h1{
            text-align: center;
        }

        .btn{
            background: black;
            color: #fff;
            margin: 20px;
            padding: 10px;
        }

        .btn:hover{
            background: #131313;
            color: #fff;
        }

        .edit{
            background: #218b9e;
            color: #fff;
            padding: 6px;
            border-radius: 8px;
            text-decoration: none;
        }

        .edit:hover{
            background: #2594a8;
            color: #fff;
        }

        .apag{
            background: #ed2a2a;
            color: #fff;
            padding: 6px;
            border-radius: 8px;
            text-decoration: none;
        }

        .apag:hover{
            background: #f43d3d;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Lista de HQ</h1>
    <?php
        // quadrinho
        $result_quadrinho = "SELECT * FROM  quadrinhos";
        $resultado_quadrinho = mysqli_query($conn, $result_quadrinho);
    ?>
    
    <div class="tabela">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">titulo</th>
            <th scope="col">marca</th>
            <th scope="col">faixa_etaria</th>
            <th scope="col">data</th>
            <th scope="col">Apagar</th>
            <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row_hq = mysqli_fetch_assoc($resultado_quadrinho)) {
            echo "<tr>";
            echo "<td>".$row_hq['id']. "</td>";
            echo "<td>".$row_hq['titulo']. "</td>";
            echo "<td>".$row_hq['marca']. "</td>";
            echo "<td>".$row_hq['faixa_etaria']. "</td>";
            echo "<td>".$row_hq['data']. "</td>";
            echo "<td> <a class='apag' href='confir_apagar.php?id=" . $row_hq['id'] . "'>Apagar</a></td>";
            echo "<td> <a class='edit' href='editar.php?id=" . $row_hq['id'] . "'>Editar</a></td>";
        }
        ?>
        </tbody>
        </table>
        <a href="index.php"><input type="submit" class="btn" value="Cadastrar"></a>
    </div>
</body>
</html>