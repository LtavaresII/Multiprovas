<?php 

	include('Pergunta.classe.php');
	class Prova{

		private $num;
		private $gabarito;
		private $questoes;
		private $titulo;

		function __construct($gabarito = array(),$questoes = array()){
			$this->gabarito = $gabarito;
			$this->questoes = $questoes;
		}

		public function Adicionar_Pergunta($pergunta,$respostas,$respostacorreta){
			// Adicionar questões na prova e armazenar o gabarito
			$Q = new Pergunta();
			$Q->Cadastrar_Questao($pergunta,$respostas,$respostacorreta);
			$this->num = $this->num+1;
			self::Armazenar_Questoes($Q);
			self::Armazenar_Gabarito($respostacorreta);
		}

		public function Visualizar_Prova(){
			echo $this->titulo;
			echo "<br />";
			echo "<br />"; 
			for($i = 0;$i < $this->num ;$i++){
				$this->questoes[$i]->getPergunta();
				echo "<br />";
				$this->questoes[$i]->getRespostas();
				echo "<br />";
			}
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function Armazenar_Questoes($Q){
			array_push($this->questoes, $Q);
		}

		public function Armazenar_Gabarito($respostacorreta){
			array_push($this->gabarito, $respostacorreta);
		}

		public function Gabarito(){
			// Mostrar o gabarito
			for ($i=0;$i < $this->num;$i++){
				echo $i+1,'. ',$this->gabarito[$i];
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

		public function getTitulo(){
			echo $this->titulo;
			echo "<br />";
		}

	}

?>