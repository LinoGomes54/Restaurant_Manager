<?php
include "../../sql/deletar.php";
include "../../sql/conn.php";

$id = $_GET['id_pedido'];

DeletarPedido($conn,$id);




?>