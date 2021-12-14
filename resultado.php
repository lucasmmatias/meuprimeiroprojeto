<?php 



// atribuir os valores vindos do POST em variáveis:

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];

// Mostrar as informações:

 echo "Olá {$nome} Seja Bem Vindo! <br>";
 echo "Seu email é {$email}. <br> ";
 echo "Seu email é {$tel}. <br>";
 echo "{$msg} Foi a mensagem Que recebemos De Você! <br>";
 

?>