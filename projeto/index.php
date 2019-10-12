<?php

/**
 * Centralizar as chamadas
 */
require_once 'FileIo.php';
require_once 'Lista.php';

$op = $_GET['op'] ?? false;

if (!$op) {
    header('Location: /projeto?op=lista');
}
switch ($op) {
    case 'lista':
        $fIo   = new FileIo('novo.txt');
        $lista = new Lista($fIo->readFile());
        $lista->show();
        break;
    case 'form':
        echo file_get_contents('form.html');
        break;
    case 'insere':
        $fIo   = new FileIo('novo.txt');
        $str   = $_POST['valor'] ?? '';
        $fIo->writeFile($str);
        header('Location: /projeto?op=lista');
        break;
    default:
        header('Location: /projeto?op=lista');
        break;
}

