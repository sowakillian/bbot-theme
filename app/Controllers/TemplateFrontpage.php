<?php

namespace App\Controllers;

use Sober\Controller\Controller;

global $post;

class TemplateFrontpage extends Controller
{
    public function datas() {
        return (object) array(
            'header_illu' => get_field("header_illu", 721),
            'header_text' => get_field("header_text", 721),
            'logo' => get_field("logo", 721),
            'cycle' => get_field("cycle", 721),
            'map_title' => get_field("map_title"),
            'map_points' => get_field("map_points"),
            'map_overlay' => get_field("map_overlay"),
            'faq_questions' => get_field("faq_questions", 721),
            'testimonials' => get_field("testimonials", 721),
            'reviews' => get_field("reviews", 721),
            'bottle_number' => get_field("bottle_number", 721),
            'bottle_subtitle' => get_field("bottle_subtitle", 721),
            'bottle_description' => get_field("bottle_description", 721),
            'glitter_first_slide' => get_field("glitter_first_slide", 721),
            'glitter_slides' => get_field("glitter_slides", 721),
            'process_first_slide' => get_field("process_first_slide", 721),
            'process_slides' => get_field("process_slides", 721),
        );
    }   
}