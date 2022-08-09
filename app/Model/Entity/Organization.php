<?php

declare(strict_types=1);

namespace App\Model\Entity;

class Organization{

    /**
     * ID da organização
     * @var integer
     */
    public $id = 1;

    /**
     * Nome da organização
     * @var string
     */
    public $name = 'Canal DEV';

    /**
     * Site da organização
     * @var integer
     */
    public $site = 'https://youtube.com/wdevoficial';

     /**
     * Descrição da organização
     * @var integer
     */
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dicta libero provident aliquam ad ut quia harum ratione excepturi error rem a at quisquam maxime non natus, adipisci dolorem modi.';

}