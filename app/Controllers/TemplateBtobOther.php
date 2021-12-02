<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBtobOther extends Controller
{
    public function datas() {
        return (object) array(
            'title' => get_field("title"),
            'description' => get_field('description')
        );
    }   
}