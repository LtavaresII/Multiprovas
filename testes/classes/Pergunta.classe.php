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

		public function Comparar_Resposta($resposta){
			// Verificar se a resposta está correta
			if($this->respostacorreta == $resposta){
				echo "Resposta Correta";
			}else {
				echo "Resposta Errada";
			}
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
			$op = array('A','B','C','D');
			for($i=0;$i < $this->quantas;$i++){
				echo $op[$i],') ',$this->respostas[$i];
				echo "<br />";
			}
		}

		public function getRespostaCorreta(){
			echo $this->respostacorreta;
			echo "<br />";
		}

	}

?>

