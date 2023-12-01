<?php
// Incluir la conexión a la base de datos
include("Conexaon.php");

// Crear un nuevo registro en la tabla "productos"
$sql = "INSERT INTO produto (nome_produto, preco_produto) value ('$nome_produto', '$preco_produto')";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se realizó el registro
if ($resultado) {
    // Redireccionar a la página de inicio
    header("Location: index.php");
} else {
    // Mostrar un mensaje de error
    echo "Error au se crear o registro.";
}

// Cerrar la conexión a la base de datos
mysqli_close($Conexaon);