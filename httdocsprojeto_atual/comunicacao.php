<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $garcom = $_POST['garcom'];
    $mesa = $_POST['mesa'];
    $horario = $_POST['horario'];
    $pedido = $_POST['pedido'];

    // Conecta ao banco de dados (substitua pelos seus detalhes de conexão)
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "restaurante";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insere os dados na tabela de pedidos
        $stmt = $conn->prepare("INSERT INTO pedidos (garcom, mesa, horario_pedido, pedido) VALUES (:garcom, :mesa, :horario, :pedido)");
        $stmt->bindParam(':garcom', $garcom);
        $stmt->bindParam(':mesa', $mesa);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':pedido', $pedido);
        $stmt->execute();

        echo "Pedido enviado com sucesso!";
    } catch(PDOException $e) {
        echo "Erro ao enviar o pedido: " . $e->getMessage();
    }

    $conn = null;
}
?>
