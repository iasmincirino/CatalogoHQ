<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_hq = "SELECT * FROM quadrinhos WHERE id = '$id'";
    $resultado_hq = mysqli_query($conn, $result_hq);
    $row_hq = mysqli_fetch_assoc($resultado_hq);
?>

<!-- PÁGINA PARA EDITAR A HQ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="editar.css">
    <title>Editar HQ</title>
</head>
<body>
<div class="background">
        <div class="catalogo">
            <form action="confir_edit.php" method="post">
                <h2>Editar Catálogo</h2>
                
                <input type="hidden" name="id" class="btn" value="<?php echo $row_hq['id']; ?>"><br><br>
                <!--Escrever o Título da HQ-->
                <label>Título:</label>
                <input type="text" name="titulo" placeholder="Título" class="btn" value="<?php echo $row_hq['titulo']; ?>"><br><br>
                <!--Selecionar a marca-->
                <label>Marcas:</label>
                <select name="marca" class="btn">
                    <option>DC</option>
                    <option>Marvel</option>
                </select value="<?php echo $row_hq['marca']; ?>"><br><br>
                <!--Selecionar a faixa etária-->
                <label>Faixa Etária:</label>
                <select name="faixa_etaria" class="btn">
                    <option>Livre</option>
                    <option>10 anos</option>
                    <option>12 anos</option>
                    <option>14 anos</option>
                    <option>16 anos</option>
                    <option>18 anos</option>
                </select value="<?php echo $row_hq['faixa_etaria']; ?>"><br><br>
                <!--Selecionar a data-->
                <label>Lançamento:</label>
                <input type="date" name="data" class="btn" value="<?php echo $row_hq['data']; ?>"><br><br>
                <!--Editar-->
                <input type="submit" class="botao" name="editar" value="Editar">
                <a href="listar.php"><input type="button" class="botao" value="Lista"></a>
            </form>
        </div>
    </div>
</body>
</html>