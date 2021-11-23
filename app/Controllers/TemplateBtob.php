<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBtob extends Controller
{
    public function datas() {
        return (object) array(
            'who' => array(
                'block1' => get_field("bbot_who_block_1"),
                'block2' => get_field("bbot_who_block_2"),
                'block3' => get_field("bbot_who_block_3")
            ),
            'solutions' => array(
                'block1' => get_field("bbot_solutions_block_1"),
                'block2' => get_field("bbot_solutions_block_2"),
                'block3' => get_field("bbot_solutions_block_3")
            ),
            'testimonials' => get_field("testimonials")
        );
    }   
}