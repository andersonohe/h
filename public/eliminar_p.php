<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Recibir el id del producto a eliminar
$id_produto = $_GET['id_produto'];

// Eliminar el producto de la base de datos
$sql = "DELETE FROM produtos WHERE id_produto='$id_produto'";
$resultado = mysqli_query($Conexaon, $sql);

// Verificar si se realizó la eliminación
if ($resultado) {
    // Redireccionar a la página de inicio
    header("Location: index.php");
} else {
    // Mostrar un mensaje de error
    echo "Error ao eliminar o produto.";
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexaon);