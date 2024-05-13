<?php
include "conexao.php";
$id = $_GET['id'];
$sala = $_POST['sala'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$sql = "update tb_reunioes set sala='$sala' , data='$data' , hora='$hora', descricao='$descricao' where id = $id";


mysqli_query($conexao,$sql);
mysqli_close($conexao);
header('location:index.php')
?>