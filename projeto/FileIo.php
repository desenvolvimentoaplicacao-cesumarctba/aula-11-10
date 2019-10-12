<?php
/**
 * Classe que trata leitura 
 * e escrita nos arquivo
 */

class FileIO
{
    // guarda o caminho do arquivo
    private $filepath;

    // construtor FileIo
    public function FileIo(String $pathFile)
    {
        $this->filepath = $pathFile;
    }

    // le e retorna o dados do arquivo
    public function readFile()
    {   
        $fileData = file_get_contents($this->filepath);      
        return explode(PHP_EOL, $fileData);
    }
    
    
    // grava no arquivo
    public function writeFile(String $data)
    {
        $data = urldecode($data);
        $data .= PHP_EOL;
        return file_put_contents($this->filepath, $data, FILE_APPEND);
    }
}

