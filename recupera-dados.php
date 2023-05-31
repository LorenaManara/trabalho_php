<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se os campos foram enviados
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade']) && isset($_POST['hobbie'])) {
        // Obtém os valores dos campos do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $hobbie = $_POST['hobbie'];

         // Validação do nome
         if (strlen($nome) < 6) {
            echo "O nome precisa ter no mínimo 6 caracteres.<br>";
        }

        // Validação da idade
        if ($idade <= 18) {
            echo "A idade precisa ser maior que 18.<br>";
        }

        // Faça o processamento necessário com os dados recebidos
        // Aqui, por exemplo, estamos apenas imprimindo os valores
        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo "Hobbie: " . $hobbie . "<br>";
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
