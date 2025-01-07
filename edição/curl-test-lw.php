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
//curl_setopt_array($curl, array(
//    CURLOPT_URL => $url,
//    CURLOPT_RETURNTRANSFER => true,
//    //CURLOPT_ENCODING => '',
//    //CURLOPT_MAXREDIRS => 10,
//    CURLOPT_AUTOREFERER => true,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS => $body,
//    CURLOPT_HTTPHEADER => $headers,
//    CURLINFO_HEADER_OUT => true,
//    CURLOPT_VERBOSE => true,
//));

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $body,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer SFyzjU6oZKR7Ar7lRe5rHtNYBWErnM87',
        'Content-Type: application/json'
    ),
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 0,
    //CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1,
    //CURLOPT_CAPATH => dirname(getcwd()) . '/home/storage/2/3e/ad/saudevivaz1/certificado',
    CURLOPT_CAPATH => dirname(getcwd()) . '/certificado',
    //CURLOPT_CAINFO => dirname(getcwd()) . '/home/storage/2/3e/ad/saudevivaz1/certificado/cacert.pem'
    CURLOPT_CAINFO => dirname(getcwd()) . '/certificado/cacert.pem'
));

$response = curl_exec($curl);

error_log("headers : " . json_encode($headers));
error_log("body : " . $body);

$sent_request = curl_getinfo($curl, CURLINFO_HEADER_OUT);
error_log($sent_request);

$error
    = curl_error($curl);
if ($error) {
    echo json_encode(array("status" => 503, "msg" => "cURL Error #:" . $error));
} else if (empty($response)) {
    // some kind of an error happened
    curl_close($curl);
    echo json_encode(array("status" => 503, "msg" => "Problema no servidor. Por favor, entre em contato com a associação para finalizar a inscrição."));
} else {
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if (empty($httpcode)) {
        echo json_encode(array("status" => 504, "msg" => "Problema no servidor. Por favor, entre em contato com a associação para finalizar a inscrição."));
    } else if ($httpcode >= 200 && $httpcode < 300) {
        $parsed = get_string_between($response, '<html lang="pt-BR">', '</html>');
        echo json_encode(array("status" => $httpcode, "msg" => $parsed));
    } else if ($httpcode >= 300) {
        $parsed = get_string_between($response, '<p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">', '</p>');
        echo json_encode(array("status" => $httpcode, "msg" => trim($parsed)));
        //curl_close($curl);
        //echo json_encode(array("status" => $httpcode, "msg" => $response));
    } else {
        echo json_encode(array("status" => $httpcode, "msg" => $response));
    }
}

// $postdata = http_build_query($bodyArray);
// $opts = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peername' => false
//         // Ideally use instead
//         // 'cafile' => 'path Certificate Authority file on local filesystem'
//     ),
//     'http' =>
//     array(
//         'method' => 'POST',
//         'header' => 'Content-type: application/json\r\n' .
//             'Authorization: Bearer ' . $token . '\r\n',
//         'content' => $postdata
//     )
// );
// $context = stream_context_create($context_options);
// $result = file_get_contents('https://csweb.clubsystem.com.br/api/forms', false, $context);

// // A good friend when it fails:
// var_dump($http_response_header);
