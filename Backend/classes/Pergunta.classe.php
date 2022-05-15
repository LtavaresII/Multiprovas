<?php 

	class Pergunta{
		
		private $pergunta = '';
		private $respostas = [];
		private $quantas = 0;
		private $respostacorreta = '';

		public function Armazenar_Pergunta($pergunta){
			// Armazenar as questões
			$this->pergunta = $pergunta;
		}

		public function Armazenar_Respostas($quantas,$respostas,$respostacorreta){
			// Armazenar as respostas
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

		public function setPergunta($pergunta){
			$this->pergunta = $pergunta;
		}

		public function getPergunta(){
			echo $this->pergunta;
			echo "<br />";
		}

		public function setQuantas($quantas){
			$this->quantas = $quantas;
		}

		public function getQuantas(){
			echo $this->quantas;
			echo "<br />";
		} 

		public function setRespostas($respostas){
			$this->respostas = $respostas;
		}

		public function getRespostas(){
			for($i=0;$i<$this->quantas;$i++){
				echo $this->respostas[$i];
				echo "<br />";
			}
		}

		public function setResposraCorreta($respostacorreta){
			$this->respostacorreta = $respostacorreta;
		}

		public function getResposraCorreta(){
			echo $this->respostacorreta;
			echo "<br />";
		} 

	}

?>