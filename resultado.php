<?php
/*
Olá, nome!
Recebemos a seguinte mensagem que você enviou:
msg
Assim que possível, iremos responder para o email email ou telefone tel.
Obrigado.
*/
// Verificar se a página está recebendo alguma informação por POST:
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Atribuir os valores vindos do POST em variáveis:
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['msg'];
}else{
    // Redirecionar o usuário para a página de contato:
    header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">  
    <div id="contact">
    <h3>Contato</h3>
    <h4><?php
    // Mostrar as informações:
        echo "Olá, {$nome}!<br>Recebemos a seguinte mensagem que você enviou:<br>";
        echo "{$msg}<br>";
        echo "Assim que possível, iremos responder para o email {$email} ou telefone {$tel}.<br>";
        echo "Obrigado!";
    ?>
    </h4>
    </div>
    
</div>
</body>
</html>