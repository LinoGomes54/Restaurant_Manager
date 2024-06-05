<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <title>Restaurant Website</title>
</head>

<body>
<div class="background-geral">
    <div class="header" id = "header">
        <div class="header1">
            <h1>Restaurante A03</h1>
        </div>
        <div class="header2">
            <a href="#header">Home</a>
            <a href="#menu">Menu</a>
            <a href="#mesas">Mesas</a>
        </div>
    </div>
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-title">
                Sistema de Gerenciamento de Mesas
            </div>
            <div class="hero-about">
                <p>Bem-vindo ao Restaurante Inac.io, onde tradição e sabor se encontram. Nosso restaurante italiano oferece uma experiência gastronômica única, com pratos preparados com os ingredientes mais frescos e uma pitada de amor. Venha desfrutar de um ambiente acolhedor e um atendimento impecável. Nossa missão é proporcionar a você momentos inesquecíveis ao redor da mesa. O que é qualidade de software?</p>
            </div>
        </div>
    </div>
    </div>
    <div class="menu" id="menu">
        <h2 class="section-title">Nosso Cardápio</h2>
        <div class="menu-item">
            <img src="imgs/bruschetta.jpg" alt="Bruschetta"> <!-- Replace with your image path -->
            <div>
                <h3>Bruschetta</h3>
                <p>Fatias de pão tostado com tomate, manjericão, alho e azeite.</p>
                <p><strong>Preço: R$ 15.99</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/caprese-salad.jpg" alt="Caprese Salad"> <!-- Replace with your image path -->
            <div>
                <h3>Salada Caprese</h3>
                <p>Tomate, mussarela de búfala, manjericão e azeite balsâmico.</p>
                <p><strong>Preço: R$ 22.99</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/margherita-pizza.jpg" alt="Margherita Pizza"> <!-- Replace with your image path -->
            <div>
                <h3>Pizza Margherita</h3>
                <p>Molho de tomate, mussarela, tomate e manjericão fresco.</p>
                <p><strong>Preço: R$ 39.99</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/lasanha.jpg" alt="Lasagna"> <!-- Replace with your image path -->
            <div>
                <h3>Lasanha</h3>
                <p>Camadas de massa, carne moída, molho de tomate e queijo.</p>
                <p><strong>Preço: R$ 45.99</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/tiramisu.jpg" alt="Tiramisu"> <!-- Replace with your image path -->
            <div>
                <h3>Tiramisu</h3>
                <p>Camadas de biscoito embebido em café, creme de mascarpone e cacau.</p>
                <p><strong>Preço: R$ 18.99</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/coca-cola.jpeg" alt="Tiramisu"> <!-- Replace with your image path -->
            <div>
                <h3>Coca Cola 350ml</h3>
                <p></p>
                <p><strong>Preço: R$ 7.00</strong></p>
            </div>
        </div>
        <div class="menu-item">
            <img src="imgs/agua.png" alt="Tiramisu"> <!-- Replace with your image path -->
            <div>
                <h3>Água 500ml</h3>
                <p></p>
                <p><strong>Preço: R$ 5.00</strong></p>
            </div>
        </div>
        <!-- Adicione mais itens de menu conforme necessário -->
    </div>
    <div class="space">""</div>
    <div class="order-section" id="mesas">
        <h2 class="section-title">Pedidos Realizados</h2>
        <table class="order-table">
            <thead>
                <tr>
                    <th>Garçom</th>
                    <th>Mesa</th>
                    <th>Pedido</th>
                    <th>Quantidade</th>
                    <th>Horário do Pedido</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'PuxarDados.php'; ?>
                
            </tbody>
        </table>

        <form action="ControleMesasDeletarALL.php" method="post">
            <button type="submit" class="delete-all-button" title="Apagar pedidos prontos do dia anterior">Apagar pedidos expirados</button>
        </form>

        <h2 class="section-title">Inserção de Pedidos por Mesa</h2>
        <div class="order-form">
            <h2>Fazer Pedido</h2>
            <form action="inserir.php" method="post">
            <label for="garcom">Garçom</label>
            <select id="garcom" name="garcom" required>
            <option value="" disabled selected>Selecione um garçom</option>
            <option value="João">João</option>
            <option value="Maria">Maria</option>
            <option value="Pedro">Pedro</option>
            <option value="Ana">Ana</option>
            </select>

                <label for="mesa">Número da Mesa</label>
                <input type="text" id="mesa" name="mesa" required>
                <label for="pedido">Prato</label>
                <select id="pedido" name="pedido" required>
                    <option value="" disabled selected>Selecione um prato</option>
                    <option value="Bruschetta">Bruschetta</option>
                    <option value="Salada Caprese">Salada Caprese</option>
                    <option value="Pizza Margherita">Pizza Margherita</option>
                    <option value="Lasanha">Lasanha</option>
                    <option value="Tiramisu">Tiramisu</option>
                    <option value="Coca Cola 350ml">Coca Cola 350ml</option>
                    <option value="Água 500ml">Água 500ml</option>
                </select>

                <label for="quantidade">Quantidade</label>
                <input type="number" id="quantidade" name="quantidade" min="1" required>

                <button type="submit">Enviar Pedido</button>
            </form>
        </div>
    </div>

    <footer>
        <div class ="buttons-footer">
             <div>
                <a href="https://github.com/LinoGomes54/Restaurant_Manager" target="_blank" class="button-footer">Github</a>
                </div>
                <div> 
                <a href="https://trello.com/b/hQotaIWb/projeto-triocupado" target="_blank" class="button-footer">Trello</a>
                </div>
            </div>
        <p>&copy; 2024 REST INAC.io. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
