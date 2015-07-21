<?php
//listagem e insersao de clientes
error_reporting(E_ALL);
ini_set('display_errors','On');

require_once "Conexao.php";
require_once "ConexaoDSN.php";
require_once 'Cliente.php';
 
$conexao = new Conexao("localhost", "diservice", "root", "th1nk1ng0utl0ud");
$conexaoDSN = new ConexaoDSN("mysql:server=localhost;dbname=diservice", "root", "th1nk1ng0utl0ud");

$objCliente = new Cliente($conexaoDSN);



$clientes = $objCliente->listar();

require_once 'clientes.list.php';

//closing connections
$conexao = null;
$conexaoDSN = null;
?>
