<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    public function datas() {
        return (object) array(
            'title' => 'Que cherchez-vous ?',
            'contact_reasons' => [
                'Je veux acheter une b:bot',
                'Je veux devenir partenaire de b:bot',
                'Je veux rejoindre la b:bot team',
                'Je veux acheter une b:bot',
                'Je veux acheter une b:bot',
                'Je veux acheter une b:bot',
                'Je veux acheter une b:bot',
            ]
        );
    }   
}