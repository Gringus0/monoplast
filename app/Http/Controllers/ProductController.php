<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\BananaBezOjacanja;
use App\Models\BananaBezOjacanjaIFalt;
use App\Models\BananaOjacanaIliFleksibilna;
use App\Models\BananaOjacanaIliFleksibilnaIFalt;
use App\Models\BlankoBezOjacanja;
use App\Models\BlankoOjacanaIFalt;
use App\Models\Bod;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProductsWithGallery(Request $request) {

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
            return view('pages.products.gallery', ['data' => $data[$category]]);
        }
        return redirect('/gallery?category=reklamneKese');
    }

    public function listProductPrices() {
        $bananaBezOjacanja = BananaBezOjacanja::get();
        $bananaOjacanaIliFleksibilna = BananaOjacanaIliFleksibilna::get();
        $bananaOjacanaIliFleksibilnaIFalt = BananaOjacanaIliFleksibilnaIFalt::get();
        $bananaBezOjacanjaIFalt = BananaBezOjacanjaIFalt::get();
        $blankoBezOjacanja = BlankoBezOjacanja::get();
        $blankoOjacanaIFalt = BlankoOjacanaIFalt::get();

        $vrednostBoda = Bod::first()->vrednost;

        $this->calculatePrices($bananaBezOjacanja, $vrednostBoda);
        $this->calculatePrices($bananaOjacanaIliFleksibilna, $vrednostBoda);
        $this->calculatePrices($bananaOjacanaIliFleksibilnaIFalt, $vrednostBoda);
        $this->calculatePrices($bananaBezOjacanjaIFalt, $vrednostBoda);
        $this->calculatePrices($blankoBezOjacanja, $vrednostBoda);
        $this->calculatePrices($blankoOjacanaIFalt, $vrednostBoda);

        return view('pages.products.prices', [
            'bananaBezOjacanja' => $bananaBezOjacanja,
            'bananaOjacanaIliFleksibilna' => $bananaOjacanaIliFleksibilna,
            'bananaOjacanaIliFleksibilnaIFalt' => $bananaOjacanaIliFleksibilnaIFalt,
            'bananaBezOjacanjaIFalt' => $bananaBezOjacanjaIFalt,
            'blankoBezOjacanja' =>  $blankoBezOjacanja,
            'blankoOjacanaIFalt' => $blankoOjacanaIFalt
        ]);
    }

    private function calculatePrices($nizKesa, $vrednostBoda)
    {
        foreach ($nizKesa as $kesa) {
            $kesa->boja1 = number_format($kesa->boja1 * $vrednostBoda, 2);
            if ($kesa->boja2) {
                $kesa->boja2 = number_format($kesa->boja2 * $vrednostBoda, 2);
                $kesa->boja3 = number_format($kesa->boja3 * $vrednostBoda, 2);
                $kesa->boja4 = number_format($kesa->boja4 * $vrednostBoda, 2);
                $kesa->boja5 = number_format($kesa->boja5 * $vrednostBoda, 2);
            }
        }
    }
    public function listProducts(){

        return view('pages.products.products');

    }

    public function listActions()
    {
        $actions = Action::where('akcija_do', '>=', date('Y-m-d'))
            ->where('akcija_od', '>=', date('Y-m-d'))
            ->get();
//        dd($actions);
        return view('pages.products.actions', ['actions' => $actions]);
    }
}
