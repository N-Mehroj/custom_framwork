<?php

namespace App\Http\Controllers;
class HomeController extends Controller
{
    public function index()
    {
        return "Bosh sahifa";
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