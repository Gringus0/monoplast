<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function setLocale($lang){
        if(in_array($lang,['sr', 'en'])){
            App::setLocale($lang);
            Session(['locale' => $lang]);
        }
        return redirect()->route('home');
    }
}
