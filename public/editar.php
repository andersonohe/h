<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Recibir los datos del formulario
$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$preco_produto = $_POST['preco_produto'];

// Actualizar los datos del producto en la base de datos
$sql = "UPDATE produtos SET nome_produto='$nome_produto', preco_produto='$preco_produto' WHERE id_producto='$id_producto'";
$resultado = mysqli_query($Conexion, $sql);

// Verificar si se realizó la actualización
if ($resultado) {
    // Redireccionar a la página de inicio
    header("Location: index.php");
} else {
    // Mostrar un mensaje de error
    echo "Error au actualizar os dados dos produtos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexaon);