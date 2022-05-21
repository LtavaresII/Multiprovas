<?php 

	class Pergunta{
		
		public $pergunta;
		public $respostas;
		public $quantas;
		public $respostacorreta;

		function __construct($pergunta = '',$respostas = array(),$respostacorreta = ''){
			$this->pergunta = $pergunta;
			$this->respostas = $respostas;
			$this->respostacorreta = $respostacorreta;
		}

		public function Cadastrar_Questao($pergunta,$respostas,$respostacorreta){
			// Cadastrar a questão, as respostas e a resposta correta
			$this->pergunta = $pergunta;
			$this->quantas = 4;
			$this->respostas = $respostas;
			$this->respostacorreta = $respostacorreta;

		}

		public function getPergunta(){
			echo $this->pergunta;
			echo "<br />";
		}

		public function getQuantas(){
			echo $this->quantas;
			echo "<br />";
		} 

		public function getRespostas(){
			for($i=0;$i < $this->quantas;$i++){
				echo $this->respostas[$i];
				echo "<br />";
			}
		}

		public function Respostas($n){
			echo $this->respostas[$n];
			echo "<br />";
		}

		public function getRespostaCorreta(){
			echo $this->respostacorreta;
			echo "<br />";
		}

	}

?>

