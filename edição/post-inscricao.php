<?php

function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$token = 'SFyzjU6oZKR7Ar7lRe5rHtNYBWErnM87';
$uid = 'b5c7e6c2fdd249e78cacfbe9be869926';

$bodyArray = array(
    "cliente" => $uid,
    "origin" => 1,
    "nome" => $_POST['nome'],
    "apelido" => $_POST['apelido'],
    "cic" => $_POST['cic'],
    "email" => $_POST['email'],
    "datanasc" => substr($_POST['datanasc'], 0, 2) . "." . substr($_POST['datanasc'], 3, 2) . "." . substr($_POST['datanasc'], -4),
    "tel1" => substr($_POST['tel1'], 0, 7) . "-" . substr($_POST['tel1'], 7),
    "tel2" => substr($_POST['tel2'], 0, 7) . "-" . substr($_POST['tel2'], 7),
    "cep" => $_POST['cep'],
    "endlogr" => $_POST['endlogr'],
    "endnum" => $_POST['endnum'],
    "endcomp" => $_POST['endcomp'],
    "bairro" => $_POST['bairro'],
    "cidade" => $_POST['cidade'],
    "estado" => $_POST['estado'],
    "categoria" => (is_string($_POST['categoria'])) ? intval($_POST['categoria']) : $_POST['categoria'],
    "obs" => $_POST['obs'],
    "senha" => $_POST['senha'],
);

$body = json_encode($bodyArray);

$headers = array(
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
);

$url = 'https://csweb.clubsystem.com.br/api/forms';

$curl = curl_init();

$certLocation = "/usr/local/ssl/etc/pki/tls/cert.pem";

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $body,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer SFyzjU6oZKR7Ar7lRe5rHtNYBWErnM87',
        'Content-Type: application/json'
    ),
    CURLOPT_SSL_VERIFYPEER => $certLocation,
    CURLOPT_SSL_VERIFYHOST => $certLocation,
    CURLOPT_CAINFO => $certLocation,
    CURLOPT_CAPATH => $certLocation,
    CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
));

$response = curl_exec($curl);

error_log("headers : " . json_encode($headers));
error_log("body : " . $body);

$sent_request = curl_getinfo($curl, CURLINFO_HEADER_OUT);
error_log($sent_request);

$error
    = curl_error($curl);
if ($error) {
    echo json_encode(array("status" => 503, "msg" => "openssl.cafile: " . ini_get('openssl.cafile') . "\n" . "curl.cainfo: " . ini_get('curl.cainfo') . "\n" . " cURL Error #: " . $error));
} else if (empty($response)) {
    // some kind of an error happened
    curl_close($curl);
    echo json_encode(array("status" => 503, "msg" => "Problema no servidor. Por favor, entre em contato com a associação para finalizar a inscrição."));
} else {
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if (empty($httpcode)) {
        echo json_encode(array("status" => 504, "msg" => "Problema no servidor. Por favor, entre em contato com a associação para finalizar a inscrição."));
    } else if ($httpcode >= 200 && $httpcode < 500) {
        $parsed = get_string_between($response, '<html lang="pt-BR">', '</html>');
        echo json_encode(array("status" => $httpcode, "msg" => $parsed));
    } else if ($httpcode >= 500) {
        $parsed = get_string_between($response, '<p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">', '</p>');
        echo json_encode(array("status" => $httpcode, "msg" => trim($parsed)));
    } else {
        echo json_encode(array("status" => $httpcode, "msg" => $response));
    }
}