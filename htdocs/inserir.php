<?php
include 'conn.php';

// Defina o fuso horário correto
date_default_timezone_set('America/Sao_Paulo');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $garcom = $_POST['garcom'];
    $mesa = $_POST['mesa'];
    $pedido = $_POST['pedido'];
    $horario_pedido = date('Y-m-d H:i:s');  // Obtém a data e hora atual no formato 'YYYY-MM-DD HH:MM:SS'

    $sql = "INSERT INTO pedidos (garcom, mesa, horario_pedido, pedido) VALUES ('$garcom', '$mesa', '$horario_pedido', '$pedido')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
    exit();
}
?>
