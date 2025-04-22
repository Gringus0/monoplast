<?php

namespace App\Http\Controllers;

use App\Models\BananaBezOjacanja;
use App\Models\BananaBezOjacanjaIFalt;
use App\Models\BananaOjacanaIliFleksibilna;
use App\Models\BananaOjacanaIliFleksibilnaIFalt;
use App\Models\BlankoBezOjacanja;
use App\Models\BlankoOjacanaIFalt;
use App\Models\Bod;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProductsWithGallery() {
        return view('pages.products.products');
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
            $kesa->boja1 = $kesa->boja1 * $vrednostBoda;
            if ($kesa->boja2) {
                $kesa->boja2 = $kesa->boja2 * $vrednostBoda;
                $kesa->boja3 = $kesa->boja3 * $vrednostBoda;
                $kesa->boja4 = $kesa->boja4 * $vrednostBoda;
                $kesa->boja5 = $kesa->boja5 * $vrednostBoda;
            }
        }
    }
}
