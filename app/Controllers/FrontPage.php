<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function datas() {
        return (object) array(
            'header_illu' => get_field('group_6186f7ed93a2b'),
            'header_text' => get_field('header_text', 'group_6186f7ed93a2b'),
        );
    }   
}
