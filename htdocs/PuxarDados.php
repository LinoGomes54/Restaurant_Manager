<?php
// PuxarDados.php
include 'conn.php';

$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["garcom"] . "</td>
                <td>" . $row["mesa"] . "</td>
                <td>" . $row["pedido"] . "</td>
                <td>" . $row["horario_pedido"] . "</td>
                <td>
                    <form action='deletar.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button type='submit' class='delete-button'>Deletar</button>
                    </form>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum pedido encontrado</td></tr>";
}
$conn->close();
?>
