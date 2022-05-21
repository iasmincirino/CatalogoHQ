<?php
   // CONFIRMANDO A EDIÇÃO DA HQ

   session_start();
   include_once("conexao.php");

   $id = filter_input(INPUT_POST, 'id');
   $titulo = filter_input(INPUT_POST, 'titulo');
   $marca = filter_input(INPUT_POST, 'marca');
   $faixa_etaria = filter_input(INPUT_POST, 'faixa_etaria');
   $data = filter_input(INPUT_POST, 'data');

   // hq
   $result_hq = "UPDATE quadrinhos SET titulo='$titulo', marca='$marca', faixa_etaria='$faixa_etaria', data='$data' WHERE id='$id'";

   $resultado_hq = mysqli_query($conn, $result_hq);

   if(mysqli_affected_rows($conn)){
      header("Location: listar.php");
  }
?>