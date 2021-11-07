<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCompany extends Controller
{
    public function datas() {
        return (object) array(
            'description' => 'crazy description text in HTML.',
            'values' => 'crazy values text in HTML',
            'team' => []
        );
    }   
}