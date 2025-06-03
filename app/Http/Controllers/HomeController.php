<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
//         return Redirect::to('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        return view('pages.main.home');
    }

    public function about()
    {
        return view('pages.main.about');
    }
}
