<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $garcom = $_POST['garcom'];
    $mesa = $_POST['mesa'];
    $pedido = $_POST['pedido'];

    // Conecta ao banco de dados (substitua pelos seus detalhes de conexão)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurante";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insere os dados na tabela de pedidos
        $stmt = $conn->prepare("INSERT INTO pedidos (garcom, mesa, horario_pedido, pedido) VALUES (:garcom, :mesa, NOW(), :pedido)");
        $stmt->bindParam(':garcom', $garcom);
        $stmt->bindParam(':mesa', $mesa);
        $stmt->bindParam(':pedido', $pedido);
        $stmt->execute();

        echo "Pedido enviado com sucesso!";
    } catch(PDOException $e) {
        echo "Erro ao enviar o pedido: " . $e->getMessage();
    }

    $conn = null;
}
?>
