<?php
$errorMSG = "";
// Nome
if (empty($_POST["name"])) {
    $errorMSG = "O campo nome é obrigatório ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "O campo e-mail é obrigatório ";
} else {
    $email = $_POST["email"];
}
// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "O campo assunto é obrigatório ";
} else {
    $msg_subject = $_POST["msg_subject"];
}
// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "O campo telefone é obrigatório ";
} else {
    $phone_number = $_POST["phone_number"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "O campo mensagem é obrigatório ";
} else {
    $message = $_POST["message"];
}
$EmailTo = "contato@saudevivaz.com.br";
$Subject = "NOVA MENSAGEM DO FORMULÁRIO DO SITE";
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
// enviar email
$success = mail($EmailTo, $Subject, $Body);
// redirect to success page
if ($success && $errorMSG == "") {
    echo "success";
} else {
    if ($errorMSG == "") {
        echo "Ocorreu algum erro, caso não consiga usar o formulário entre em contato pelo e-mail contato@saudevivaz.com.br";
    } else {
        echo $errorMSG;
    }
}