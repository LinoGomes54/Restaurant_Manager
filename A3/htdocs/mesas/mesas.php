<?php
include "../sql/conn.php";
include "../sql/deletar.php";

DeletarTodosPedidos($conn);

$stmt = $conn ->prepare("SELECT * FROM pedidos");
$stmt ->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html>

<head>
    <title>Projeto GDM </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/inline.css">
    <link rel="stylesheet" href="../css/mesas.css">
</head>

<body id="principal">
    <!--Cabeçalho do Site-->
    <!--Header-->
    <div class="centro">
        <button class="cyber-button bg-red fg-white">
            <a href="../PaginaInicial/index.php">Home</a>
            <span class="glitchtext">Home</span>
            <span class="tag"></span>
        </button>
        <button class="cyber-button bg-red fg-white">
            <a href="../cardapio/cardapio.php">Cardapio</a>
            <span class="glitchtext">Mesas</span>
            <span class="tag"></span>
        </button>
        <button class="cyber-button bg-red fg-white">
            <a href="mesas.php">mesas</a>
            <span class="glitchtext">Contato</span>
            <span class="tag"></span>
        </button>
    </div>
    <div class="formata">
        <img class="banner" src="../img/banner.png">
    </div>
    <br>
    <br>
    <div>
    <a href="../controladores/mesas/ControleMesasDeletarALL.php" style="color: black;">Deletar Todos</a>
        <table border="1" id="tabelaPedidos">
            <tr>
                <th>Garçom</th>
                <th>Mesa</th>
                <th>Horário do Pedido</th>
                <th>Pedido</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($results as $row) : ?>

                <tr>
                    <td><?= $row['garcom']; ?></td>
                    <td><?= $row['mesa']; ?></td>
                    <td><?= $row['horario_pedido']; ?></td>
                    <td><?= $row['pedido'];?></td>
                    <td>
                        <a href="../controladores/mesas/ControleMesasExcluir.php?id_pedido=<?= $row['id']; ?>" style="color: black;">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>


        <form action="../controladores/mesas/ControleMesas.php" method="post">
            <label for="garcom">Garçom:</label>
            <input type="text" id="garcom" name="garcom"><br><br>

            <label for="mesa">Mesa:</label>
            <input type="text" id="mesa" name="mesa"><br><br>


            <label for="pedido">Pedido:</label>
            <input type="text" id="pedido" name="pedido"><br><br>

            <div class="centro2">
                <button class="cyber-button bg-blue fg-white m-2 vt-bot" id="btnRegistrar" type="submit">Adicionar Pedido</button>
            </div>
        </form>



    </div>
    <br>
    <br>
    <!--Rodapé do Site-->
    <div id="rodape">
        <button class="cyber-button bg-blue fg-white m-2 vt-bot">
            <span class="glitchtext">Desanima</span>
            <span class="tag"></span>
            <a href="https://github.com/LinoGomes54/Restaurant_Manager">Github</a>
        </button>
        <button class="cyber-button bg-blue fg-white m-2 vt-bot" href="contato.html">
            Trello
            <span class="glitchtext">Educação</span>
            <span class="tag"></span>
        </button>
    </div>


</body>

</html>