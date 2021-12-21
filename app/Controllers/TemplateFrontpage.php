<?php

namespace App\Controllers;

use Sober\Controller\Controller;

global $post;

class TemplateFrontpage extends Controller
{
    public function datas() {
        return (object) array(
            'header_illu' => get_field("header_illu"),
            'header_text' => get_field("header_text"),
            'map_title' => get_field("map_title"),
            'map_points' => get_field("map_points"),
            'map_overlay' => get_field("map_overlay"),
            'faq_questions' => get_field("faq_questions"),
            'testimonials' => get_field("testimonials"),
            'reviews' => get_field("reviews"),
            'bottle_number' => get_field("bottle_number"),
            'bottle_subtitle' => get_field("bottle_subtitle"),
            'bottle_description' => get_field("bottle_description"),
            'glitter_first_slide' => get_field("glitter_first_slide"),
            'glitter_slides' => get_field("glitter_slides"),
            'process_first_slide' => get_field("process_first_slide"),
            'process_slides' => get_field("process_slides"),
        );
    }   
}