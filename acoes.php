<?php

$item = $_GET['valor'] ?? false;  

if (!$item) {
    die('Não foi informado valor para ser salvo!');
}

$item .= PHP_EOL; // quebrar uma linha

// escrita de arquivo
file_put_contents('dados.txt', $item, FILE_APPEND);




