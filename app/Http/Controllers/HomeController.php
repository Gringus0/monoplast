<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('pages.main.home');
    }

    public function about()
    {
        return view('pages.main.about');
    }

    public function contact() {
        return view('pages.main.contact');
    }

}
