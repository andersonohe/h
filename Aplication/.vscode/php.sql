CREATE TABLE `produto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(255) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_producto`)
 );
 INSERT INTO produto (nome_produto, preco_produto) VALUES ('Produto 1', 10.99);

 CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) NOT NULL,
  `apellido_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `password_usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
); 
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Juan', 'Perez', 'juan.perez@gmail.com');

 CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_venta`)
);
INSERT INTO ventas (id_producto, id_usuario, fecha_venta, cantidad) VALUES (1, 1, '2023-03-08', 1);

