<?php
$sala = $_POST ['sala'];
$data = $_POST ['data'];
$hora = $_POST ['hora'];
$descricao = $_POST ['descricao'];

include "conexao.php";
$sql = "insert into tb_reunioes(sala, data, hora, descricao) values('$sala', '$data', '$hora', '$descricao')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:index.php');
?>