<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
        public function services()
    {
        return view('services');
    }
        public function about()
    {
        return view('about');
    }
        public function portfolio()
    {
        return view('portfolio');
    }
        public function contact()
    {
        return view('contact');
    }


}
