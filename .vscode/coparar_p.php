<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Recibir los datos de los productos
$id_produto_1 = $_POST['id_produto_1'];
$id_produto_2 = $_POST['id_produto_2'];

// Consultar los productos de la base de datos
$sql = "SELECT * FROM produto WHERE id_produto='$id_produto_1' OR id_produto='$id_produto_2'";
$resultado = mysqli_query($Conexaon, $sql);

// Comparar los productos
$produto_1 = mysqli_fetch_assoc($resultado);
$produto_2 = mysqli_fetch_assoc($resultado);

// Mostrar el resultado de la comparación
if ($produto_1['preco_produto'] < $produto_2['preco_produto']) {
    echo "El producto 1 es más barato.";
} else if ($produto_1['preco_produto'] > $produto_2['preco_produto']) {
    echo "El produto 2 es más barato.";
} else {
    echo "Los produtos tienen el mismo preco.";
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexaon);