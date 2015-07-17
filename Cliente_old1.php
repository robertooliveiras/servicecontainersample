<?php

require_once "conexao.php";

class Cliente {
	public function listar() {
		global $db;
		
		$query = "select * from clientes";
		$stmt = $db->prepare($query);
		$stmt->execute();
		
		return $stmt->fechAll(\PDO::FETCH_ASSOC);
	}
}