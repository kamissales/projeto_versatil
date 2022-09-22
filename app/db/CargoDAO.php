<?php
class CargoDAO extends DAO
{
	public function buscartodos() {
		$query = $this->Conexao->prepare("SELECT id, descrição FROM cargo ORDER BY descrição");
		$query->execute(); 
		return $query->fetchALL(PDO::FETCH_ASSOC);
	}
	
	public function buscarPorId($id) {
		$query = $this->Conexao->prepare("SELECT id, descricao FROM cargo WHERE id = ? ORDER BY descricao");
		$query->bindParam(1, $id, PDO::PARAM_INT);
		$query->execute();
		return $query->fetchALL(PDO::FETCH_ASSOC); 
	}
}
?> 