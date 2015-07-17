<?php
//listagem e insersao de clientes


require_once 'Cliente.php';

$objCliente = new Cliente();
$clientes = $objCliente->listar();

require_once 'clientes.list.php';
?>
