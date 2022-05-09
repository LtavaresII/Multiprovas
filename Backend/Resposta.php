<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resposta</title>
</head>
<body>

	<header>
        <h1 id="titulo-da-pagina">Multiprovas</h1>
    </header>

    <aside>
        <a href="/index.php">Criar Pergunta</a>
    </aside>

    <?php
    	if (@$_POST['resposta'] == @$_POST['respostacorreta']) {
    		echo 'Resposta Correta';	    	
    	}else {
    		echo 'Resposta Errada';
    	}
    ?>

</body>
</html>