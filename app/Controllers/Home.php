<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index_ui');
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function rooms()
    {
        return view('pages/rooms');
    }
    
    public function restaurant()
    {
        return view('pages/restaurant');
    }
    
    public function mawa()
    {
        return view('pages/mawa');
    }
    
    public function baithak()
    {
        return view('pages/baithak');
    }
    
    public function banquet()
    {
        return view('pages/banquet');
    }
    
    public function lawn()
    {
        return view('pages/lawn');
    }
    
    public function contact()
    {
        return view('pages/contact');
    }
    
    public function bookNow()
    {
        return view('pages/book-now');
    }
}