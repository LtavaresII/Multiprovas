<?php 

	include('Pergunta.classe.php');
	class Prova{

		private $num;
		private $gabarito;

		function __construct($num = 0,$gabarito = array()){
			$this->num = $num;
			$this->gabarito = $gabarito;
		}

		public function Adicionar_Pergunta($pergunta,$quantas,$respostas,$respostacorreta){
			// Adicionar questões na prova e armazenar o gabarito
			$Q = new Pergunta();
			$Q->setPergunta($pergunta);
			$Q->setQuantas($quantas);
			$Q->setRespostas($respostas);
			$Q->setRespostaCorreta($respostacorreta);
			self::Armazenar_Gabarito($respostacorreta);
		}

		public function Armazenar_Gabarito($respostacorreta){
			$this->num = $this->num++;
			array_push($this->gabarito, $respostacorreta);
		}

		public function Gabarito(){
			// Mostrar o gabarito
			for ($i=0;$i < $this->num;$i++){
				echo this->gabarito[$i];
				echo "<br />"; 
			}
		}

		public function setNum($num){
			$this->num = $num;
		}

		public function getNum(){
			echo $this->num;
			echo "<br />";
		} 

	}

?>