<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiprovas</title>
</head>
<body>
	 <header>
        <h1 id="titulo-da-pagina">Multiprovas</h1>
    </header>

    <aside>
        <a href="/Perguntas Postadas.php">Perguntas Postadas</a>
    </aside>

    <?php

        include('classes/Pergunta.classe.php');

        if(isset($_POST['acao'])){
            $arr = array($_POST['respostaA'],$_POST['respostaB'],$_POST['respostaC'],$_POST['respostaD'],$_POST['respostaE']);
            $q = count($arr);

            $Q->Cadastrar_Questão($_POST['pergunta'],$q,$arr,$_POST['respostacorreta']);
            $Q->getRespostaCorreta();
        }

    ?>

    <main>
		<form action="Perguntas Postadas.php" method="post">
                <h2>Escreva sua Questão:</h2>
                <textarea type="text" name="pergunta" cols="60" rows="5"></textarea>
                <br /><br />
                <label >Resposta A:</label>
                <input type="text" name="respostaA" size="30"/><br>
                <label >Resposta B:</label>
                <input type="text" name="respostaB" size="30"/><br>
                <label >Resposta C:</label>
                <input type="text" name="respostaC" size="30"/><br>
                <label >Resposta D:</label>
                <input type="text" name="respostaD" size="30"/><br>
                <label >Resposta E:</label>
                <input type="text" name="respostaE" size="30"/><br>
                <label >Resposta Correta:</label>
                <select name="respostacorreta">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                </select>
                <br /><br />
            <input type="submit" name="acao" value="Enviar">
        </form>
    </main>

</body>
</html>