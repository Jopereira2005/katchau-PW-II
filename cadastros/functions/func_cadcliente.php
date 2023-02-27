<?php 
require '../../lib/conn.php';

extract($_POST);//quando vc coloca o extract já é criada as variaveis de acordo com o nome do id

$sqlInsert = "INSERT INTO clientes VALUES(0, :nome, :endereco, :email)";
$stmt = $conn->prepare($sqlInsert);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':endereco', $endereco);
$stmt->bindValue(':email', $email);
$stmt->execute();
?>
<script>alert('Cliente cadastrado com sucesso')</script>

<meta http-equiv="refresh" content="0; url=../cadcliente.php">

