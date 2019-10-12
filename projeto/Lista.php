<?php
/**
 * Mostrar a lista de nomes contido no arquivo
 */

class Lista 
{
    // armazena o que é mostrado
    private $data;


    // construtor
    public function Lista(Array $dados)
    {
        $this->data = $dados;
    }

    /**
     * Mostra os dados da tela
     */
    public function show()
    {
        $html = '<ul>';
        foreach ($this->data as $key => $value) {
            $html .= "<li> $value </li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}

