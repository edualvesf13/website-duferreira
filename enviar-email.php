<?php
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$subject = $_POST['assunto'];
$message = $_POST['mensagem'];


$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "<h3>Formulário da página de contato </h3> <br>";
$corpo .= "<strong> Nome: </strong>" . $name . " <br>";
$corpo .= "<strong> Email: </strong>" . $email . " <br>";
$corpo .= "<strong> Telefone: </strong>" . $tel . " <br>";
$corpo .= "<strong> Assunto: </strong>" . $subject . " <br>";
$corpo .= "<strong> Mensagem: </strong>" . $message . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@duferreira.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>