<?php 
require '../lib/conn.php';

$sql = "SELECT * FROM aluguel INNER JOIN clientes ON aluguel.id_cliente = clientes.id_cliente INNER JOIN carros ON aluguel.id_carro = carros.id_carro";
$listaAlugueis = $conn->query($sql);
$alugueis = $listaAlugueis->fetchAll(PDO::FETCH_OBJ);

//var_dump($alugueis); on caso de duvidas
?>

<!DOCTYPE html>
<html>

<head>
  <title>Katchau 9&#9889;5</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="../assets/js/jquery.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.js" type="text/javascript"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background: #FD2F4C">
    <a class="navbar-brand" href="#"><img src="../assets/img/relampago-marquinhos.png" width="50" alt="Relâmpago Marquinhos"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a href="../" class="nav-item nav-link active" style="color: #faff00;font-size: 18px;font-weight: bold">Katchau 9 <i class="fas fa-bolt" style="color: #faff00"></i> 5<span class="sr-only">(current)</span></a>
        <a href="../cadastros/" class="nav-item nav-link">Cadastros</a>
        <a href="./" class="nav-item nav-link">Listagem</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron" style="color: #FD2F4C !important">
          <div class="d-flex justify-content-between">
            <h1>Listagem de carros</h1>
            <a href="./" class="text-danger" style="font-size: 32px"><i class="far fa-arrow-alt-circle-left"></i></a>
          </div>
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <td scope="col">#</td>
                <td scope="col">Cliente</td>
                <td scope="col">Marca - Modelo</td>
                <td scope="col">Data da Retirada</td>
                <td scope="col">Data da Devolução</td>
                <td scope="col">Valor do Aluguel (R$)</td>
                <td scope="col">Pago</td>
              </tr>
            </thead>
            <tbody>
            <?php 
            foreach($alugueis as $aluguel){
            ?><tr>
                <td><?=$aluguel->id_aluguel?></td>
                <td><?=$aluguel->nome?></td>
                <td><?=$aluguel->marca, ' - ', $aluguel->modelo?></td>
                <td><?= date('d/m/Y', strtotime($aluguel->data))?></td>
                <td><?= date('d/m/Y', strtotime($aluguel->dataentrega))?></td>
                <td><?= number_format($aluguel->valor_aluguel, 2, ',', '.')?></td> 
                <td>
                  <?php
                    if($aluguel->pago == 0) {
                  ?>
                    <a href="pago.php?id_aluguel=<?=$aluguel->id_aluguel?>&id_carro=<?=$aluguel->id_carro?>"
                    class="btn btn-outline-danger"> 
                      <i class="fas fa-money-bill"></i>
                    </a>
                  <?php 
                    } else {
                  ?>
                    <a href="#" class="btn btn-outline-success"> 
                      <i class="fas fa-money-bill"></i>
                    </a>
                  <?php 
                  }
                  ?>
                </td>
              </tr>
            <?php 
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>