<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function whatWeDo(){
        return view('welcome');
    }

    public function clients(){
        return view('welcome');
    }

    public function aboutUs(){
        return view('welcome');
    }

    public function workingAt(){
        return view('pages.working-at');
    }

    public function contact(){
        return view('pages.contact');
    }
}
