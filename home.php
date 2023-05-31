<?php
echo '<h2> ' . $_SESSION['login'] . '</h2?';
echo '<a href="?logout" Fazer logout<a/>';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Formulario de contato</title>
</head>

<body>
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col" id="imagem">
                    <img src="img/Discoveries.png" width="100%" left="50px">
                </div>
                <div class="col" id="formulario">
                    <div class="contato">
                        <h1>Preencha o formulário</h1>
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade:</label>
                                <input type="number" class="form-control" id="idade" placeholder="Digite sua idade">
                            </div>
                            <div class="form-group">
                                <label for="hobby">Hobby:</label>
                                <input type="text" class="form-control" id="hobby" placeholder="Digite seu hobby">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>