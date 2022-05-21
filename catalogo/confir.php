<?php
   // MANDANDO O CADASTRO PARA O BANDO DE DADOS
   
   session_start();
   include_once("conexao.php");

   $titulo = filter_input(INPUT_POST, 'titulo');
   $marca = filter_input(INPUT_POST, 'marca');
   $faixa_etaria = filter_input(INPUT_POST, 'faixa_etaria');
   $data = filter_input(INPUT_POST, 'data');

   // hq
   $result_hq = "INSERT INTO quadrinhos (titulo, marca, faixa_etaria, data) VALUES ('$titulo', '$marca', '$faixa_etaria', '$data')";

   $resultado_hq = mysqli_query($conn, $result_hq);

   if(mysqli_affected_rows($conn)){
      header("Location: listar.php");
  }
?>
