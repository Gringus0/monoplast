<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('pages.main.contact');
    }

    public function sendMail (Request $request) {
        try {

            Mail::to(env('MAIL_TO'))->send(new ContactMail(
                $request->ime,
                $request->telefon,
                $request->email,
                $request->text
            ));

            return back()->with('success', '<div class="alert alert-success marginBottom marginTop">Vaša poruka je uspešno poslata!</div>');
        } catch (\Throwable $th) {
            return back()->with('error', '<div class="alert alert-danger marginBottom marginTop">Došlo je do greške. Molimo pokušajte kasnije ili nas kontaktirajte telefonom.</div>');
        }


    }
}
