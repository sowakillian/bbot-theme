<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBtobMarket extends Controller
{
    public function datas() {
        return (object) array(
            'solutions' => array(
                'block1' => get_field("bbot_solutions_block_1"),
                'block2' => get_field("bbot_solutions_block_2"),
                'block3' => get_field("bbot_solutions_block_3")
            ),
            'testimonials' => get_field("testimonials"),
            'partners' => get_field('partners'),
            'partners_number' => get_field('partners_number'),
            'faq_questions' => get_field("faq_questions_btob"),
            'reviews' => get_field("reviews", 140),
            'why_first_slide' => get_field("why_first_slide"),
            'why_slides' => get_field("why_slides"),
            'services_first_slide' => get_field("services_first_slide"),
            'services_slides' => get_field("services_slides"),
            'ask_bbot_text' => get_field("ask_bbot_text"),
        );
    }   
}