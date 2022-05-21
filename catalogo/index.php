<?php
    session_start();
?>

<!-- CADASTRO INICIAL DA PÁGINA -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Catálogo de HQ</title>
</head>
<body>
<div class="background">
        <div class="catalogo">
            <form action="confir.php" method="post">
                <h2>Catálogo de HQ</h2>
                <!--Escrever o Título da HQ-->
                <label>Título:</label>
                <input type="text" name="titulo" placeholder="Título" class="btn" required><br><br>
                <!--Selecionar a marca-->
                <label>Marcas:</label>
                <select name="marca" class="btn">
                    <option>DC</option>
                    <option>Marvel</option>
                </select><br><br>
                <!--Selecionar a faixa etária-->
                <label>Faixa Etária:</label>
                <select name="faixa_etaria" class="btn">
                    <option>Livre</option>
                    <option>10 anos</option>
                    <option>12 anos</option>
                    <option>14 anos</option>
                    <option>16 anos</option>
                    <option>18 anos</option>
                </select><br><br>
                <!--Selecionar a data-->
                <label>Lançamento:</label>
                <input type="date" name="data" class="btn" required><br><br>
                <!--Enviar-->
                <input type="submit" class="botao" name="enviar" value="Enviar">
                <a href="listar.php"><input type="button" class="botao" value="Lista"></a>
            </form>
        </div>
    </div>
</body>
</html>