<?php
// Lê um arquivo em um array.  Nesse exemplo nós obteremos o código fonte de
// uma URL via HTTP
$lines = file ('teste.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
    echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
}


var_dump($lines);

?>