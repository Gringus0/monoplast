<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('pages.user.order');
    }

    public function store(OrderRequest $request)
    {
        try {
            DB::beginTransaction();
            $order = new Order();
            $imageName = '';
            if ($request->image) {
                $imageName = time() . "." . $request->image->extension();
                $request->image->move(public_path('assets/img/images/porudzbine'), $imageName);
            }
            $order->fajl1 = $imageName;
            $order->vrsta_kese = $request->tipKese;
            $order->materijal = $request->materijal;
            $order->visina = $request->visina;
            $order->sirina = $request->sirina;
            $order->boja_rucke = '';
            if ($request->bojaRucke) {
                $order->boja_rucke = $request->bojaRucke;
            }
            $order->sesija_kupca = time();
            $order->boja_kese = $request->bojaKese;
            $order->vrsta_stampe = $request->stampaTip;
            $order->kolicina = $request->kolicinaKese;
            $order->informacije = '';
            if ($request->message) {
                $order->informacije = $request->message;
            }
            $order->ime = Auth::user()->ime;
            $order->mail = Auth::user()->mail;
            $order->telefon = Auth::user()->telefon;
            $order->firma = Auth::user()->firma;
            $order->datum = date('Y-m-d');
            $order->broj_porudzbine = time();
            $order->save();
            DB::commit();

            Mail::to(env('MAIL_TO'))->send(new OrderMail($order));

            return back()->with('success', 'Porudžbina uspešna!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return back()->with('error', 'Došlo je do greške! Pokušajte ponovo ili kontaktirajte administratora.');
        }

    }
}
