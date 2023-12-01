<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Consultar los productos de la base de datos
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($Conexaon, $sql);

// Mostrar los productos en una tabla
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Precio</th>";
echo "</tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['id_produto'] . "</td>";
    echo "<td>" . $fila['nome_produto'] . "</td>";
    echo "<td>" . $fila['preco_produto'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($Conexaon);
?>