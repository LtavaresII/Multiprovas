<?php 

	class Pergunta{
		
		private $pergunta;
		private $respostas;
		private $quantas;
		private $respostacorreta;

		public function Cadastrar_Questão($pergunta,$quantas,$respostas,$respostacorreta){
			$this->pergunta = $pergunta;
			$this->quantas = $quantas;
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
			for($i=0;$i < $this->quantas;$i++){
				echo $this->respostas[$i];
				echo "<br />";
			}
		}

		public function getRespostaCorreta(){
			echo $this->respostacorreta;
			echo "<br />";
		}

	}

	$Q = new Pergunta();

?>

