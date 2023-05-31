<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = 'user';
                $senha = '1234';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    // logado com sucesso
                    $_SESSION['login'] = 
                    header('Location: home.php');
                }else{
                    // algo deu errado
                    echo 'dados invalidos';
                }

            }

            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
            }
            include('home.php');
        }
    ?>
</body>
</html>