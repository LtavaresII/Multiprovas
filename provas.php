<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Multiprovas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php 

    include('classes/Prova.classe.php');

        $titulo = 'Prova I';
        $pergunta = 'Pergunta ?';
        $resposta = array('A','B','C','D');
        $respostacorreta = 'A';
        $P = new Prova();
        $P->setTitulo($titulo);
        $P->Adicionar_Pergunta($pergunta,$resposta,$respostacorreta);
        $P->Adicionar_Pergunta($pergunta,$resposta,$respostacorreta);
        $P->Adicionar_Pergunta($pergunta,$resposta,$respostacorreta);
        $P->Adicionar_Pergunta($pergunta,$resposta,$respostacorreta);
?>

<body>
    <div class="pagina">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark menu">
            <a href="inicial.html"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Multiprovas</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column">
                <li>
                    <a href="professor.html" class="nav-link text-white menu-item">
                        Professor
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white menu-item">
                        Aluno
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <div class="py-4 conteudo text-center">
            <div class="row py-lg-4">
                <div class="col-lg-6 mx-auto">
                    <h2>DCA0205 - Projeto e Engenharia de Software - 2022.1</h2>
                    <p class="lead text-muted">Eduardo de Lucena Falcão</p>
                </div>
            </div>
            
            <div class="row py-lg-2">
                <div class="col-lg-12 mx-auto">
                    <h4>T01 - 24T56</h4>
                </div>
            </div>

            <div class="row py-lg-3">
                <div class="col-lg-12 mx-auto">
                    <h2><?php $P->getTitulo(); ?></h2>
                </div>
            </div>
            <div class="row py-lg-2">                
                <h5>Questão 1</h5>
            </div>
            <div class="row py-lg-2">
                <div class="col-lg-6 mx-auto questao border rounded shadow">
                    <form>
                        <div class="form-group py-lg-2">
                            <label for="enunciadoquest">Enunciado</label>
                            <textarea class="form-control" id="enunciadoquest" rows="5"></textarea>
                        </div>
                        <h5 class="pt-lg-4">Alternativas</h5>
                        <div class="form-group py-lg-2">
                            <label for="alt-a">A</label>
                            <input type="text" class="form-control" id="alt-a">
                        </div>
                        <div class="form-group py-lg-2">
                            <label for="alt-b">B</label>
                            <input type="text" class="form-control" id="alt-b">
                        </div>
                        <div class="form-group py-lg-2">
                            <label for="alt-c">C</label>
                            <input type="text" class="form-control" id="alt-c">
                        </div>
                        <div class="form-group py-lg-2">
                            <label for="alt-d">D</label>
                            <input type="text" class="form-control" id="alt-d">
                        </div>
                        <div class="form-group mx-auto col-lg-3 py-lg-2">
                            <label for="alt-d">Resposta</label>
                            <select id="resposta" class="form-control text-center">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                        <div class="my-4">
                            <button type="submit" class="mx-2 btn btn-c"><i class="bx bx-check"></i></button>
                            <button type="reset" class="mx-2 btn btn-x"><i class="bx bx-x"></i></button>
                        </div>                        
                    </form>
                </div>                
            </div>                
        </div>

    </div>
    <script src="bootstrap/js/projeto.js"></script>
</body>

</html>