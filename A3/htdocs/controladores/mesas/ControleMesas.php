<?php
include "../../sql/inserir.php";
include "../../sql/conn.php";


$garcom = $_POST['garcom'];
$mesa = $_POST['mesa'];
$pedido = $_POST['pedido'];

InserirPedido($conn,$garcom,$mesa,$pedido);


?>