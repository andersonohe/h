<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Recibir el id del producto
$id_produto = $_GET['id_produto'];

// Consultar el precio del producto
$sql = "SELECT preco_produto FROM produtos WHERE id_produto='$id_produto'";
$resultado = mysqli_query($Conexon, $sql);

// Obtener el precio del producto
$preco_produto = mysqli_fetch_assoc($resultado)['preco_produto'];

// Calcular la cantidad de productos
$quantidade_produtos = 10;

// Calcular el total del pedido
$total_pedido = $preco_produto * $quantidade_produtos;

// Mostrar el total del pedido
echo $total_pedido;

?>