<?php

	class Usuario{
		
		private $usuario = '';
		private $senha = '';
		private $email = '';
		private $tipo = '';
		private $conta = [];

		public function Criar_Conta($usuario,$senha,$email,$tipo){
			// Criar a conta do usuario e se é conta aluno ou professor

		}

		public function Logar_Conta($usuario,$senha){
			// Logar no usuario
		}

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getUsuario(){
			echo $this->usuario;
			echo "<br />";
		} 

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getSenha(){
			echo $this->senha;
			echo "<br />";
		} 

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			echo $this->email;
			echo "<br />";
		} 

		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function getTipo(){
			echo $this->tipo;
			echo "<br />";
		} 
	}

?>