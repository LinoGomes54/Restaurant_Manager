<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    
   
    $sql = "UPDATE pedidos SET status = 'Cancelado' WHERE id='$id' AND status <> 'Pronto'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php#mesas");
    exit();
}
?>
