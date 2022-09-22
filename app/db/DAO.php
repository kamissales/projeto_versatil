<?php
abstract class DAO
{
	protected $conexao;
	
	public function __construct() {
		$this->Conexao = MySQLDatabase::getInstance();
	}
}
