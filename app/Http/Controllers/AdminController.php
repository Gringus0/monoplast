<?php

namespace App\Http\Controllers;

use App\Models\BananaBezOjacanja;
use App\Models\BananaBezOjacanjaIFalt;
use App\Models\BananaOjacanaIliFleksibilna;
use App\Models\BananaOjacanaIliFleksibilnaIFalt;
use App\Models\BlankoBezOjacanja;
use App\Models\BlankoOjacanaIFalt;
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
        try {
            DB::beginTransaction();
            $imageName = time() . "." . $request->image->extension();
            $request->image->move(public_path('assets/img/images/galerija'), $imageName);
            $image = new Gallery();
            $image->malaslika = "0";
            $image->velikaslika = $imageName;
            $image->idgalerije = $request->galleryId;
            $image->opis = $request->description;
            $image->save();

            DB::commit();
            return back()->with('success', 'Slika je uspešno dodata.');
        } catch (\Exception $ex) {
            DB::rollBack();
            return back()->with('error', 'Došlo je do greške! Pokušajte ponovo ili kontaktirajte administratora.');
        }
    }

    public function showImage($id)
    {
        return view('pages.admin.show-image');
    }

    public function destroyImage($id)
    {

    }

    public function listPrices(Request $request)
    {
        $vrstaKese = $request->vrsta;
        $velicinaKese = $request->velicina;

        switch ($vrstaKese) {
            case 'banana_bez_ojacanja':
                $data = BananaBezOjacanja::where('velicina', $velicinaKese)->get();
                break;
            case 'banana_ojacana_fleksibilna':
                $data = BananaOjacanaIliFleksibilna::where('velicina', $velicinaKese)->get();
                break;
            case 'banana_ojacana_fleksibilna_falt':
                $data = BananaOjacanaIliFleksibilnaIFalt::where('velicina', $velicinaKese)->get();
                break;
            case 'banana_bez_ojacanja_falt':
                $data = BananaBezOjacanjaIFalt::where('velicina', $velicinaKese)->get();
                break;
            case 'blanko_bez_ojacanja':
                $data = BlankoBezOjacanja::where('velicina', $velicinaKese)->get();
                break;
            case 'blanko_ojacana_falt':
                $data = BlankoOjacanaIFalt::where('velicina', $velicinaKese)->get();
                break;
            default:
                $data = collect(); // return empty collection
                break;
        }

        return view('pages.admin.list-prices', ['data' => $data]);
    }

    public function getVelicine(Request $request)
    {
        $vrsta = $request->vrsta;
        $velicine = [];

        switch ($vrsta) {
            case 'banana_bez_ojacanja':
                $velicine = BananaBezOjacanja::all();
                break;
            case 'banana_ojacana_fleksibilna':
                $velicine = BananaOjacanaIliFleksibilna::all();
                break;
            case 'banana_ojacana_fleksibilna_falt':
                $velicine = BananaOjacanaIliFleksibilnaIFalt::all();
                break;
            case 'banana_bez_ojacanja_falt':
                $velicine = BananaBezOjacanjaIFalt::all();
                break;
            case 'blanko_bez_ojacanja':
                $velicine = BlankoBezOjacanja::all();
                break;
            case 'blanko_ojacana_falt':
                $velicine = BlankoOjacanaIFalt::all();
                break;
            default:
                $velicine = collect(); // return empty collection
                break;
        }

        return response()->json($velicine);
    }

    public function changePrice(Request $request)
    {
        dd($request->all());
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

    public function showOrder($id)
    {
        dd($id);
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
