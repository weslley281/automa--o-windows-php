<?php
// URLs que você deseja abrir
$urls = [
    "http://www.primeirosite.com",
    "http://www.segundosite.com",
    "http://www.terceirosite.com"
];

foreach ($urls as $url) {
    // Executa o comando para abrir o navegador com a URL
    exec("start firefox \"$url\"");
    // Aguarda 2 segundos para garantir que o navegador tenha tempo para abrir
    sleep(2);
}
