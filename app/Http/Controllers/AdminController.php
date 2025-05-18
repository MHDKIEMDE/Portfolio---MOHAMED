<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Home()
    {
        return view('dasboard.home');
    }
    function About()
    {
        return view('dasboard.about');
    }
    function Experiences()
    {
        return view('dasboard.experience');
    }
    function Services()
    {
        return view('dasboard.service');
    }
    function Portfolio()
    {
        return view('dasboard.portfolio');
    }
    function Prix()
    {
        return view('dasboard.prix');
    }
}
