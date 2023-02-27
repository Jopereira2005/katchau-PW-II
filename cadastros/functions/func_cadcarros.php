<?php 
require '../../lib/conn.php';

extract($_POST);//quando vc coloca o extract já é criada as variaveis de acordo com o nome do id

$sqlVericaPlaca = "SELECT * FROM carros WHERE placa = :placa";
$verificaPlaca = $conn->prepare($sqlVericaPlaca);
$verificaPlaca->bindValue(':placa', $placa);
$verificaPlaca->execute();

if ($verificaPlaca->rowCount() === 0) {//rowCount conta as linhas do comando sql
$sqlInsert = "INSERT INTO carros VALUES(0, :modelo, :marca, :placa, :diaria, 1)";
$stmt = $conn->prepare($sqlInsert);
$stmt->bindValue(':modelo', $modelo);
$stmt->bindValue(':marca', $marca);
$stmt->bindValue(':placa', $placa);
$stmt->bindValue(':diaria', $valorDiaria);
$stmt->execute()

?>
<script>alert('Carro cadastrado com sucesso')</script>
<?php

} else {
?>
<script>alert('Carro com placa já existente')</script>

<?php
}
?>
<meta http-equiv="refresh" content="0; url=../cadcarros.php">



