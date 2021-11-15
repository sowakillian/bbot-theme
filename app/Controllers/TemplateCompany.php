<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCompany extends Controller
{
    public function datas() {
        return (object) array(
            'description' => get_field("description"),
            'values' => get_field("values"),
            'team' => []
        );
    }   
}