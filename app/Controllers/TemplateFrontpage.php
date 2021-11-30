<?php

namespace App\Controllers;

use Sober\Controller\Controller;

global $post;

class TemplateFrontpage extends Controller
{
    public function datas() {
        return (object) array(
            'header_illu' => get_field("header_illu", $post->ID),
            'header_text' => get_field("header_text", $post->ID),
            'map_title' => get_field("map_title", $post->ID),
            'map_points' => get_field("map_points", $post->ID),
            'faq_questions' => get_field("faq_questions", $post->ID),
            'testimonials' => get_field("testimonials", $post->ID),
            'bottle_number' => get_field("bottle_number", $post->ID),
        );
    }   
}