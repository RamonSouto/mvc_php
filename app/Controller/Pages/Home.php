<?php


declare(strict_types=1);

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page
{
        /**
         * Método responsavel por retornar o conteudo (view) da home do site
         * 
         * @return string
         */
        public static function getHome(): string
        {
            $organization = new Organization;

            // RETORNAR A VIEW DA HOME
            $content = View::render('pages/home',[
                'name'=> $organization->name,
                'description'=> $organization->description,
                'site' => $organization->site
            ]);

            // RETORNA A VIEW PDA PÁGINA 
            return parent::getPage("Home", $content);
        }
}