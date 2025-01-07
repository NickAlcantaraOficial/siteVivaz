<?php
//criando o recurso cURL(biblioteca e uma ferramenta de linha de comando amplamente utilizada para realizar transferências de dados com URLs)
$cr = curl_init();
//definindo a url de busca
curl_setopt($cr, CURLOPT_URL, "http://www.google.com");
//executando recurso
curl_exec($cr);
//fechando-o para liberação do sistema.
curl_close($cr); //fechamos o recurso e liberamos o sistema...
?>
