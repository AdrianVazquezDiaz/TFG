<?php
//variables tabla users
$nombreUsuario = $users['name'];
$apellidoUsuario = $users['surname'];
$generoUsuario = $users['gender'];
$direccionUsuario = $users['address'];
$correoUsuario = $users['email'];
$contraseñaUsuario = $users['password'];

//variables tabla libros
$nombreLibro = $books['name'];
$autorLibro = $books['autor'];
$fechaLibro = $books['date'];
$categoriaLibro = $books['category'];
$descripcionLibro = $books['description'];
$precioLibro = $books['price'];
$imagenLibro = $books['image'];

//variables tabla orders
$tipoPedido = $orders['type'];
$metodoPagoPedido = $orders['paymentMethod'];
$precioTotalPedido = $orders['type'];

//variables tabla orders_child
$numeroLibros= $orders_child['quantity'];
?>