<?php
/*var_dump(openssl_get_cert_locations());*/

/**
* test.php:
*/
$ch = curl_init('http://saudevivaz.com.br/info.php');

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'foo' => $_GET['bar']
));

curl_exec($ch);
?>
