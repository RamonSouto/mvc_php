<?php

declare(strict_types=1);

namespace App\Utils;

class View
{
    /**
     * Metodo responsável por retornar o conteúdo de uma view
     * 
     * @param string $view
     * @return string
     */
    public static function getContentView(string $view): string
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /**
     * Método responsável por retornar o conteúdo renderizdo de uma view
     * 
     * @param string $view
     * @param array $vars(string/numerics)
     * @return string
     */
    public static function render(string $view, array $vars = []): string
    {
     
        //CONTEUDO DA VIEW
        $contentView = self::getContentView($view);

        //DESCOBRIR AS CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{' . $item . '}}';
        },$keys);


        //RETORNA O CONTEUDO DA VIEW RENDERIZADO
        return str_replace($keys, array_values($vars), $contentView);
    }

    
}
