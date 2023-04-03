<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        // echo view('index');
        return view('landingPage/index');
    }
}
