<?php 

require_once "Conexao.php";

class Cliente {
	
	private $db;
	
	public function __construct(){
		$conexao = new Conexao("localhost", "diservice", "root", "th1nk1ng0utl0ud");
		$this->db = $conexao->connect();
	}
	
	public function listar() {
		
		
		$query = "select * from clientes";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		return $stmt->fechAll(\PDO::FETCH_ASSOC);
	}
}