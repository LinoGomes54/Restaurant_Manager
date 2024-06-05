<?php
// PuxarDados.php
include 'conn.php';

$sql = "SELECT * FROM pedidos where status <> 'cancelado' AND status <> 'Expirado'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["garcom"] . "</td>
                <td>" . $row["mesa"] . "</td>
                <td>" . $row["pedido"] . "</td>
                <td>" . $row["quantidade"] . "</td>
                <td>" . $row["horario_pedido"] . "</td>
                <td>" . $row["status"] . "</td>
                <td>
                    <form action='deletar.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["Id"] . "'>
                        <button type='submit' class='delete-button'>Cancelar</button>
                    </form>
                    <form action='status.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["Id"] . "'>
                        <button type='submit' class='status-button'>Pronto</button>
                    </form>   
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum pedido encontrado</td></tr>";
}
$conn->close();
?>
