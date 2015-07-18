<?php 

class Cliente {
	
	private $db;
	
	public function __construct(ConexaoInterface $conexao){
		$this->db = $conexao->connect();
	}
	
	public function listar() {
		$query = "select * from clientes";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		return $stmt->fechAll(\PDO::FETCH_ASSOC);
	}
}