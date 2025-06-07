<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('pages.user.order');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $tipKese = $request->tipKese;
        $materijal = $request->materijal;
        $bojaKese = $request->bojaKese;
        if ($request->bojaRucke) {
            $bojaRucke = $request->bojaRucke;
        }
        $stampaTip = $request->stampaTip;
        $kolicinaKese = $request->kolicinaKese;
        $poruka = $request->message;


    }
}
