<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/principal');
    }
    
    public function contacto(): string
    {
        return view('front/contacto');
    }
}
