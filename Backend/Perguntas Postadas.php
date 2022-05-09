<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perguntas Postadas</title>
</head>
<body>
	<header>
        <h1 id="titulo-da-pagina">Multiprovas</h1>
    </header>

    <aside>
        <a href="/index.php">Criar Pergunta</a>
    </aside>

    <?php $respostacorreta = @$_POST['respostacorreta'] ?>

    <main>
    	<form action="Resposta.php" method="post">
    		<label>Questão: <?php echo $_POST['pergunta']; ?> </label> <br>
    		<label>A) <?php echo $_POST['respostaA']; ?> </label> <input type="radio" name="resposta" value="A"> <br>
    		<label>B) <?php echo $_POST['respostaB']; ?> </label> <input type="radio" name="resposta" value="B"> <br>
    		<label>C) <?php echo $_POST['respostaC']; ?> </label> <input type="radio" name="resposta" value="C"> <br>
    		<input type="hidden" name="respostacorreta" value="<?php echo $respostacorreta; ?>"> 
    		<input type="submit" name="acao" value="Enviar">
    	</form>
    </main>

</body>
</html>