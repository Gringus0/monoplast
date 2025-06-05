<?php

namespace App\Http\Controllers;

use App\Models\Bod;
use App\Models\Gallery;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        return view('pages.admin.index');
    }

    public function loginForm()
    {
        return view('pages.admin.login');
    }

    public function login(Request $request)
    {
        //promeniti
        $user = User::where('ime', 'admin')->first();
        if($user->ime == $request->username && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.index');
        }
        return redirect()->route('admin.login-form');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function gallery(Request $request)
    {
        // reklamne kese -> 1
        // trake za oznacavanje -> 2
        // dzakovi -> 3
        // strec folija -> 4
        // zip kese -> 5
        // tregerice -> 6
        // OPS ambalaza -> 7
        // air bubble folija -> 8
        // PET ambalaza -> 9??? NEMA NISTA U BAZI NI NA SAJTU
        // P.E. folije -> 10
        // Plast. siroke potrosnje -> 11
        // kese za zamrzivac -> 12
        // slike iz proizvodnje -> 13
        // sajmovi -> 14

        $category = $request->query('category');

        $data = [];

        $reklamneKese = Gallery::where('idgalerije', '1');
        $trakeZaOznacavanje = Gallery::where('idgalerije', '2');
        $dzakovi = Gallery::where('idgalerije', '3');
        $strecFolija = Gallery::where('idgalerije', '4');
        $zipKese = Gallery::where('idgalerije', '5');
        $tregerice = Gallery::where('idgalerije', '6');
        $opsAmbalaza = Gallery::where('idgalerije', '7');
        $airBubbleFolija = Gallery::where('idgalerije', '8');
        $petAmbalaza = Gallery::where('idgalerije', '9');
        $peFolija = Gallery::where('idgalerije', '10');
        $plastSirokePorosnje = Gallery::where('idgalerije', '11');
        $keseZaZamrzivac = Gallery::where('idgalerije', '12');
        $slikeIzProizvodnje = Gallery::where('idgalerije', '13');
        $sajmovi = Gallery::where('idgalerije', '14');

        $allCategories = [
            'reklamneKese' => $reklamneKese,
            'trakeZaOznacavanje' => $trakeZaOznacavanje,
            'dzakovi' => $dzakovi,
            'strecFolija' => $strecFolija,
            'zipKese' => $zipKese,
            'tregerice' => $tregerice,
            'opsAmbalaza' => $opsAmbalaza,
            'airBubbleFolija' => $airBubbleFolija,
            'petAmbalaza' => $petAmbalaza,
            'peFolija' => $peFolija,
            'plastSirokePotrosnje' => $plastSirokePorosnje,
            'keseZaZamrzivac' => $keseZaZamrzivac,
            'slikeIzProizvodnje' => $slikeIzProizvodnje,
            'sajmovi' => $sajmovi
        ];

        if ($category && array_key_exists($category, $allCategories)) {
            $data[$category] = $allCategories[$category]->paginate(18);
            return view('pages.admin.gallery', ['data' => $data[$category]]);
        }

        return redirect('/admin/gallery?category=reklamneKese');
    }

    public function createImage()
    {

    }

    public function storeImage(Request $request)
    {
//        try {
//            DB::beginTransaction();
//            $image = new Gallery();
//            $image->malaslika = "0";
//            $image->velikaslika = $request->image;
//
//        }
    }

    public function showImage($id)
    {
        return view('pages.admin.show-image');
    }

    public function destroyImage($id)
    {

    }

    public function listPrices()
    {
        return view('pages.admin.list-prices');
    }

    public function changePrice($id, Request $request)
    {

    }

    public function listActions()
    {
        return view('pages.admin.list-actions');
    }

    public function storeAction(Request $request)
    {

    }

    public function destroyAction($id)
    {

    }

    public function editAction($id)
    {

    }

    public function updateAction(Request $request, $id)
    {

    }

    public function listBuyers()
    {
        $users = User::paginate(15);
        return view('pages.admin.buyer-list', ['users' => $users]);
    }

    public function listOrders()
    {
        $orders = Order::paginate(15);
        return view('pages.admin.order-list', ['orders' => $orders]);
    }

    public function editBod()
    {
        $bod = Bod::first();
        return view('pages.admin.edit-bod', ['bod' => $bod]);
    }

    public function updateBod(Request $request)
    {
        try {
            DB::beginTransaction();
            $bod = Bod::first();
            $bod->vrednost = $request->bod;
            $bod->save();
            DB::commit();
            return back()->with('success', 'Izmena boda uspešna!');
        } catch(\Throwable $e) {
            DB::rollBack();
            return back()->with('error', 'Došlo je do greške! Pokušajte ponovo ili kontaktirajte administratora.');
        }


    }

    public function createAdmin() {
        $user = new User();
        $user->ime =  'admin';
        $user->mail = 'admin@gmail.com';
        $user->password = Hash::make('admin');
        $user->telefon = "0651234567";
        $user->telefon2 = "";
        $user->firma = "AdminFirma";
        $user->save();
    }

}
