<?php

namespace App\Http\Controllers;
use Core\Support\Facade\Log;

class HomeController extends Controller
{
    public function index()
    {
        return Log::warning("Bosh sahifa" );
//        return "Bosh sahifa";
    }

    public function about()
    {
        return "Biz haqimizda";
    }
    public function formPost()
    {
        return "Form post";
    }
}