<?php
// URLs que você deseja abrir
$urls = [
    "https://www.coursera.org/my-learning?myLearningTab=IN_PROGRESS",
    "https://www.cod3r.com.br/enrollments",
    "https://skillsforall.com/pt/",
    "https://www.certificacaotecnica.com.br/course/view.php?id=3886"
];

foreach ($urls as $url) {
    // Executa o comando para abrir o navegador com a URL
    exec("start firefox \"$url\"");
    // Aguarda 2 segundos para garantir que o navegador tenha tempo para abrir
    sleep(2);
}
