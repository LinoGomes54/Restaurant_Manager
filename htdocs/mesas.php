<?php
    // Inclui o arquivo que contém o código para consultar os pedidos
    include 'comunicacao.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projeto GDM </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="inline.css">
        <link rel="stylesheet" href="mesas.css">
    </head>
    <body id="principal">
        <!--Cabeçalho do Site-->
        <!--Header-->
        <div class="centro">
            <button class="cyber-button bg-red fg-white" href="index.html">
                <a href="index.html">Home</a>
                <span class="glitchtext">Home</span>
                <span class="tag"></span>
            </button>
            <button class="cyber-button bg-red fg-white">
                <a href="cardapio.html">Cardapio</a>
                <span class="glitchtext">Mesas</span>
                <span class="tag"></span>
            </button>
            <button class="cyber-button bg-red fg-white">
               <a href="mesas.html">mesas</a>
                <span class="glitchtext">Contato</span>
                <span class="tag"></span>
            </button>
        </div>
        <div class="formata">
            <img class="banner" src="img/banner.png">
        </div>
        <br>
        <br>
        <div>
        <table id="tabelaPedidos">
    <tr>
        <th>Garçom</th>
        <th>Mesa</th>
        <th>Horário do Pedido</th>
        <th>Pedido</th>
    </tr>
    <?php include 'PuxarDados.php'; ?>
</table>


              <form action="comunicacao.php" method="post">
    <label for="garcom">Garçom:</label>
    <input type="text" id="garcom" name="garcom"><br><br>
    
    <label for="mesa">Mesa:</label>
    <input type="text" id="mesa" name="mesa"><br><br>
    
    <label for="horario">Horário do Pedido:</label>
    <input type="text" id="horario" name="horario"><br><br>
    
    <label for="pedido">Pedido:</label>
    <input type="text" id="pedido" name="pedido"><br><br>
    
    <input type="submit" value="Enviar Pedido">
</form>


              <div class="centro2">
              <button class="cyber-button bg-blue fg-white m-2 vt-bot" id="btnRegistrar" onclick="adicionarPedido()">Adicionar Pedido</button>
             </div>
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

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

        <script>
            function adicionarPedido() {
                var garcom = prompt("Digite o nome do garçom:");
                var mesa = prompt("Digite o número da mesa:");
                var horario = prompt("Digite o horário do pedido:");
                var pedido = prompt("Digite o pedido:");
        
                if (garcom && mesa && horario && pedido) {
                    var tabela = document.getElementById("tabelaPedidos");
                    var newRow = tabela.insertRow(-1);
        
                    var cell1 = newRow.insertCell(0);
                    var cell2 = newRow.insertCell(1);
                    var cell3 = newRow.insertCell(2);
                    var cell4 = newRow.insertCell(3);
        
                    cell1.innerHTML = garcom;
                    cell2.innerHTML = mesa;
                    cell3.innerHTML = horario;
                    cell4.innerHTML = pedido;
                } else {
                    alert("Por favor, preencha todas as informações do pedido.");
                }
            }
        </script>
    </body>
</html>