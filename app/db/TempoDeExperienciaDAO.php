<?php
class TempoDeExperienciaDAO extends DAO
{
	public function buscartodos() {
		$query = $this->Conexao->prepare("SELECT id, descrição FROM tempo_experiencia ORDER BY descrição DESC");
		$query->execute(); 
		return $query->fetchALL(PDO::FETCH_ASSOC);
	}
	
	public function buscarPorId($id) {
		$query = $this->Conexao->prepare("SELECT id, descricao FROM tempo_experiencia WHERE id = ? ORDER BY descricao");
		$query->bindParam(1, $id, PDO::PARAM_INT);
		$query->execute();
		return $query->fetchALL(PDO::FETCH_ASSOC); 
	}
}
?> 