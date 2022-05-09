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
                <label >Resposta Correta:</label>
                <select name="respostacorreta">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <br /><br />
            <input type="submit" name="acao" value="Enviar">
        </form>
    </main>

</body>
</html>