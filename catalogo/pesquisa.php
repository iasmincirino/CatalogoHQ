<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>CRUD - Pesquisar</title>	
        <style>
        body{
            background: url('img/homem-aranha.jpg') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
            width: 100%;
            color: #fff;
        }

        .lista{
            background: #edf0f29f;
        }

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

         /* Style botão de editar e apagar */

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

        /* Style pesquisa */

        form{
            padding-left: 20px;
            padding-top: 20px;
        }

        label{
            font-size: 25px;
        }

        .txt{
            border-radius: 20px;
            border-color: #3a3a3a;
            background: #edf0f29f;
        }

        .botao{
            background: black;
            color: #fff;
            margin: 2px;
            padding: 5px;
            border-radius: 8px;
        }
    </style>	
</head>
<body>
		
	<h1>Pesquisar</h1>
		
	<form method="POST" action="">
		<label>Título: </label>
		<input type="text" name="titulo" placeholder="Digite o título" class="txt">
			
	    <input name="SendPesqUser" type="submit" value="Pesquisar" class="botao">
	</form><br>

    <div class="tabela">
    <table class="table">
    <thead>
        <tr class="lista">
        <th scope="col">#</th>
        <th scope="col">titulo</th>
        <th scope="col">marca</th>
        <th scope="col">faixa_etaria</th>
        <th scope="col">data</th>
        <th scope="col">Apagar</th>
        <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody class="lista">
	<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser');
		if($SendPesqUser){
			$titulo = filter_input(INPUT_POST, 'titulo');
			$result_quadrinho = "SELECT * FROM quadrinhos WHERE titulo LIKE '%$titulo%'";
			$resultado_quadrinho = mysqli_query($conn, $result_quadrinho);
			while($row_hq = mysqli_fetch_assoc($resultado_quadrinho)){
                echo "<tr>";
                echo "<td>".$row_hq['id']. "</td>";
                echo "<td>".$row_hq['titulo']. "</td>";
                echo "<td>".$row_hq['marca']. "</td>";
                echo "<td>".$row_hq['faixa_etaria']. "</td>";
                echo "<td>".$row_hq['data']. "</td>";
                echo "<td> <a class='apag' href='confir_apagar.php?id=" . $row_hq['id'] . "'>Apagar</a></td>";
                echo "<td> <a class='edit' href='editar.php?id=" . $row_hq['id'] . "'>Editar</a></td>";
			}
		}
	?>
    </tbody>
    </table>
    <a href="index.php"><input type="submit" class="btn" value="Cadastrar"></a>
    <a href="listar.php"><input type="submit" class="btn" value="Lista de HQ"></a>
</body>
</html>