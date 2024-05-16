<?php
include "conn.php";

function DeletarPedido($conn,$id_pedido){

    $stmt = $conn->prepare("DELETE FROM pedidos WHERE id = $id_pedido");
    $stmt->execute();

    header("location: ../../mesas/mesas.php");
}

function DeletarTodosPedidos($conn){

    $stmt = $conn->prepare("DELETE FROM pedidos WHERE horario_pedido < CURDATE()");
    $stmt->execute();
   
}

function DeletarTodos($conn){

    $stmt = $conn->prepare("DELETE FROM pedidos");
    $stmt->execute();
 
    header("location: ../../mesas/mesas.php");
}





?>