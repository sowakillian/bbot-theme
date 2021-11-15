<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePress extends Controller
{

    public function datas() {
        return (object) array(
            'descriptive_text' => get_field("descriptive_text"),
            'phone_number' => get_field("phone_number"),
            'email' => get_field("email"),
            'photo' => get_field("photo")
        );
    }   
}
