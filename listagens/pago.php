<?php
require '../lib/conn.php';

$id_aluguel = (int)$_GET['id_aluguel'];
$sqlAluguel = "UPDATE aluguel SET pago = 1 WHERE id_aluguel = :id_aluguel";

$atualizaAluguel = $conn->prepare($sqlAluguel);
$atualizaAluguel->bindValue(':id_aluguel', $id_aluguel);
$atualizaAluguel->execute();

$id_carro = (int)$_GET['id_carro'];
$sqlCarro = "UPDATE carros SET disponibilidade = 1 WHERE id_carro = :id_carro";

$atualizaCarro = $conn->prepare($sqlCarro);
$atualizaCarro->bindValue(':id_carro', $id_carro);
$atualizaCarro->execute();

header("Location: listalugueis.php");
?>