<?php 

	include('Pergunta.classe.php');
	class Prova{

		private $num;
		private $gabarito;
		private $questoes;
		private $resposta;
		private $titulo;
		private $acertos;
		private $tempo;

		function __construct($gabarito = array(),$questoes = array(), $resposta = array()){
			$this->gabarito = $gabarito;
			$this->questoes = $questoes;
			$this->resposta = $resposta;
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
			for($i = 0;$i < $this->num ;$i++){
				$this->questoes[$i]->getPergunta();
				echo "<br />";
				$this->questoes[$i]->getRespostas();
				echo "<br />";
			}
		}

		public function Visualizar_Questoes($n){
			$this->questoes[$n-1]->getPergunta();
		}

		public function Visualizar_Respostas($n,$s){
			$this->questoes[$n-1]->Respostas($s-1);
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function Armazenar_Questoes($Q){
			array_push($this->questoes, $Q);
		}

		public function Armazenar_Resposta($R){
			array_push($this->resposta, $R);
		}

		public function Armazenar_Gabarito($respostacorreta){
			array_push($this->gabarito, $respostacorreta);
		}

		public function Gabarito(){
			// Mostrar o gabarito
			echo 'Gabarito da Prova:';
			echo "<br />";
			for ($i=0;$i < $this->num;$i++){
				echo 'Questão ',$i+1,': ',$this->gabarito[$i];
				echo "<br />"; 
			}
		}

		public function Resultado(){
			echo 'Resultado da Prova:';
			echo "<br />";
			for ($i=0;$i < $this->num;$i++){
				if($this->gabarito[$i] == $this->resposta[$i]){
					echo 'Questão ',$i+1,': ','Acertou';
					echo "<br />"; 
				}else{
					echo 'Questão ',$i+1,': ','Errou';
					echo "<br />"; 
				}
			}
			echo "<br />";
			self::Gabarito();

		}

		public function MandarEmail($email){
			ini_set('smtp_port', 587);
			$assunto = 'Resultado de Prova';
			$menssagem = self::Resultado();
			mail($email, $assunto, $menssagem);
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