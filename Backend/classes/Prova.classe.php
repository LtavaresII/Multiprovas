<?php 

	include('Pergunta.classe.php');
	class Prova extends Pergunta{

		private $num = 0;
		private $gabarito = [];

		public function Adicionar_Pergunta($pergunta,$quantas,$respostas,$respostacorreta){
			// Adicionar questões na prova e armazenar o gabarito
			this->Armazenar_Pergunta($pergunta);
			this->Armazener_Respostas($quantas,$respostas,$respostacorreta);
			this->num = $num++;
			array_push($gabarito, $respostacorreta);

		}

		public function Gabarito(){
			// Mostrar o gabarito
			for ($i=0;$i<$this->num;$i++){
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