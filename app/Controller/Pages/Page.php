<?php


declare(strict_types=1);

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
         /**
         * Método responsável por renderizar o topo da página
         * 
         * @return string
         */
        private static function getHeader(): string
        {
            return View::render('pages/header');
        }

        /**
         * Método responsável por renderizar o topo da página
         * 
         * @return string
         */
        private static function getFooter(): string
        {
            return View::render('pages/footer');
        }

        /**
         * Método responsável por retornar o conteudo (view) da home do site
         * 
         * @return string
         */
        public static function getPage(string $title, string $content): string
        {
            return View::render('pages/page',[
                'title'=> $title,
                'header'=> self::getHeader(),
                'footer' => self::getFooter(), 
                'content'=> $content
                
            ]);
        }
}