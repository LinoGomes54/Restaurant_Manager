<?php
include 'conn.php';

$sql = "UPDATE pedidos 
SET status = 'Expirado' 
WHERE status = 'Pronto' 
AND DATE(horario_pedido) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

if ($conn->query($sql) === TRUE) {
    echo "All records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
header("Location: index.php#mesas");
exit();
?>
