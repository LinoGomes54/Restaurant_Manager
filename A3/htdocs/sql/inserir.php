<?php
include "conn.php";

function InserirPedido($conn,$garcom,$mesa,$pedido){
       
    

     $stmt = $conn->prepare("INSERT INTO pedidos (garcom, mesa, horario_pedido, pedido) VALUES (:garcom, :mesa, NOW(), :pedido)");
        $stmt->bindParam(':garcom', $garcom);
        $stmt->bindParam(':mesa', $mesa);
        $stmt->bindParam(':pedido', $pedido);
        $stmt->execute();

   header("location: ../../mesas/mesas.php");

}




?>