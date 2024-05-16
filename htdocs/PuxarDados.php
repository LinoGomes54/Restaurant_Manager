<?php
// Conexão com o banco de dados (substitua pelos seus detalhes de conexão)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurante";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query SQL para selecionar todos os registros da tabela "pedidos"
    $sql = "SELECT * FROM pedidos";

    // Prepara a query
    $stmt = $conn->prepare($sql);

    // Executa a query
    $stmt->execute();

    // Retorna um array associativo contendo todas as linhas do conjunto de resultados
    $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibe os pedidos dentro da tabela HTML
    foreach ($pedidos as $pedido) {
        echo "<tr>";
        echo "<td>" . $pedido['garcom'] . "</td>";
        echo "<td>" . $pedido['mesa'] . "</td>";
        echo "<td>" . $pedido['horario_pedido'] . "</td>";
        echo "<td>" . $pedido['pedido'] . "</td>";
        echo "</tr>";
    }
} catch(PDOException $e) {
    // Em caso de erro na conexão ou execução da query, exibe o erro
    echo "Erro: " . $e->getMessage();
}

// Fecha a conexão com o banco de dados
$conn = null;
?>
