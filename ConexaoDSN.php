<?php 

require_once 'ConexaoInterface.php';

class ConexaoDSN implements ConexaoInterface {
	
	
	private $dsn;
	private $user;
	private $password;
	
	public function __construct($d, $u, $p) {
		$this->dsn 		= $d;
		$this->user		= $u;
		$this->password = $p;
	}
	
	public function connect() {
		return new \PDO($this->dsn, $this->user, $this->password);
	}
}
