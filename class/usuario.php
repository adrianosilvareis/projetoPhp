<?php 

	require_once 'Crud.php';

	class Usuario extends Crud{
		
		protected $table = "pessoa";
		private $nome;
		private $telefone;

		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}

		public function insert(){
			
		}
	}