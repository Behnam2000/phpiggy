<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AboutController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEW);
    }

    public function about()
    {
        echo $this->view->render("/about.php", [
            'title' => 'About Page',
            'email' => 'safaribehnam6@gmail.com',
            'phone' => '+989361970108',
            'address' => '15 Ershad St. Asadabad - Hamedan - Iran',
            'telegram' => 'Behnam7924',
            'instagram' => 'behnam.7924'
        ]);
    }
}
