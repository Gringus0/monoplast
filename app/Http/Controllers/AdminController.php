<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActionRequest;
use App\Http\Requests\AdminGalleryRequest;
use App\Models\Action;
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
use Illuminate\Support\Facades\File;
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

    public function storeImage(AdminGalleryRequest $request)
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

    public function destroyImage(Request $request)
    {
        $imagePath = str_replace(asset('/'), '', $request->image_path);
        $fullPath = public_path($imagePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);

            Gallery::where('velikaslika', basename($imagePath))->delete();

            return redirect()->back()->with('success', 'Slika je uspešno obrisana.');
        }

        return redirect()->back()->with('error', 'Slika nije pronađena.');
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
        $vrsta = $request->vrsta;
        $velicina = $request->velicina;

        try {
            DB::beginTransaction();
            $prices = $this->changePriceDBcommit($vrsta, $velicina);
            $prices->boja1 = $request->boja1;
            if ($prices->boja2) {
                $prices->boja2 = $request->boja2;
                $prices->boja3 = $request->boja3;
                $prices->boja4 = $request->boja4;
                $prices->boja5 = $request->boja5;
            }
            $prices->save();
            DB::commit();
            return back()->with('success', 'Cene za kese uspešno izmenjene.');
        } catch (\Exception $ex) {
            DB::rollBack();
            return back()->with('error', 'Došlo je do greške. Molimo pokušajte opet ili kontaktirajte administratora.');
        }
    }

    private function changePriceDBcommit($vrsta, $velicina)
    {
        switch ($vrsta) {
            case 'banana_bez_ojacanja':
                $prices = BananaBezOjacanja::where('velicina', $velicina)
                    ->first();
                break;
            case 'banana_ojacana_fleksibilna':
                $prices = BananaOjacanaIliFleksibilna::where('velicina', $velicina)
                    ->first();
                break;
            case 'banana_ojacana_fleksibilna_falt':
                $prices = BananaOjacanaIliFleksibilnaIFalt::where('velicina', $velicina)
                    ->first();
                break;
            case 'banana_bez_ojacanja_falt':
                $prices = BananaBezOjacanjaIFalt::where('velicina', $velicina)
                    ->first();
                break;
            case 'blanko_bez_ojacanja':
                $prices = BlankoBezOjacanja::where('velicina', $velicina)
                    ->first();
                break;
            case 'blanko_ojacana_falt':
                $prices = BlankoOjacanaIFalt::where('velicina', $velicina)
                    ->first();
                break;
            default:
                $prices = collect(); // return empty collection
                break;
        }

        return $prices;
    }

    public function listActions()
    {
        $actions = Action::paginate(15);
        return view('pages.admin.list-actions', ['actions'  => $actions]);
    }

    public function createAction()
    {
        return view('pages.admin.add-action');
    }

    public function storeAction(ActionRequest $request)
    {
        try {
            DB::beginTransaction();
            $action = new Action();
            $imageName = time() . "." . $request->slika->extension();
            $request->slika->move(public_path('assets/img/images/akcije'), $imageName);
//            $imageName2 = time() . "." . $request->slika2->extension();
//            $request->slika2->move(public_path('assets/img/images/akcije'), $imageName2);
            $imageName2 = '';
            $action->slika = $imageName;
            $action->slika2 = $imageName2;
            $action->naslov = $request->naslov;
            $action->visina_akcije = $request->visina_akcije;
            $action->tekst = $request->tekst;
            $action->akcija_od = $request->datum_od;
            $action->akcija_do = $request->datum_do;
            $action->save();
            DB::commit();
            return back()->with('success', 'Akcija uspešno kreirana.');
        } catch (\Exception $ex) {
            DB::rollBack();
            return back()->with('error', 'Došlo je do greške! Pokušajte ponovo ili kontaktirajte administratora.');
        }
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
        $orders = Order::orderBy('id', 'DESC')->paginate(15);
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
