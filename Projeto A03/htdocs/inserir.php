<?php
include 'conn.php';

date_default_timezone_set('America/Sao_Paulo');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $garcom = $_POST['garcom'];
    $mesa = $_POST['mesa'];
    $pedido = $_POST['pedido'];
    $quantidade = $_POST['quantidade'];
    $horario_pedido = date('Y-m-d H:i:s');  // Obtém a data e hora atual no formato 'YYYY-MM-DD HH:MM:SS'

    $sql = "INSERT INTO pedidos (garcom, mesa, pedido, quantidade, horario_pedido ) VALUES ('$garcom', '$mesa', '$pedido', '$quantidade', '$horario_pedido')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php#mesas");
    exit();
}
?>
