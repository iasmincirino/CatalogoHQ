<?php
   // CONFIRMANDO A EXCLUSÃO DA HQ

   session_start();
   include_once("conexao.php");
   $id = filter_input(INPUT_GET, 'id');

  $result_hq = "DELETE FROM quadrinhos WHERE id='$id'";
  $resultado_hq = mysqli_query($conn, $result_hq);

  if(mysqli_affected_rows($conn)){
      header("Location: listar.php");
  }
?>