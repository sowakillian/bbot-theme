<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    public function datas() {
        return (object) array(
            'title' => get_field("title"),
            'contact_goals' => explode("|", get_field("contact_goals"))
        );
    }   
}