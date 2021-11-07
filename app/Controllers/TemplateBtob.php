<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBtob extends Controller
{
    public function datas() {
        return (object) array(
            'descriptive_text' => 'Que ce soit pour des interviews ou des articles, B:bot adore être sous le feu des projecteurs et montrer de quoi elle est capable.',
            'phone_number' => '01 84 60 63 68',
            'email' => 'ksowa@outlook.fr'
        );
    }   
}