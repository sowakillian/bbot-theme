<?php

namespace App\Controllers;

use Sober\Controller\Controller;
global $post;

class TemplatePress extends Controller
{

    public function datas() {
        return (object) array(
            'descriptive_text' => "zz",
            'phone_number' => '01 84 60 63 68',
            'email' => 'ksowa@outlook.fr'
        );
    }   
}
