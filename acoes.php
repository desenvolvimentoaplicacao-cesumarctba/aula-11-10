<?php

$item = $_GET['valor'] ?? false;  

if (!$item) {
    die('Não foi informado valor para ser salvo!');
}
// faz a leitura do arquivo dados.txt
$dados = file_get_contents('dados.txt');

// valor informado jogando pra dentro da varivel dados
$dados .= $item;

// escrita de arquivo
file_put_contents('dados.txt', $dados);




