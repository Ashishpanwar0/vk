<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message', [
            'slides' => include APPPATH . 'Data/hero_slider.php',
            'facilities' => include APPPATH . 'Data/facilities.php',
        ]);
    }
}