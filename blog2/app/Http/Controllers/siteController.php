<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function showHome(){

        return view('Home');

    }

    function showAbout(){

        return view('About');
    }

    function showPortfolio(){

        return view('Portfolio');
        
    }

    function showService(){

        return view('Service');
    }

}
