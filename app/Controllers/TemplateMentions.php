<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateMentions extends Controller
{
    public function datas() {
        return (object) array(
            'content' => get_field("content"),
        );
    }   
}