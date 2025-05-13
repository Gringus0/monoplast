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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProductsWithGallery() {
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

        try {
            DB::beginTransaction();

            $reklamneKese = Gallery::where('idgalerije', '1')->get();
            $trakeZaOznacavanje = Gallery::where('idgalerije', '2')->get();
            $dzakovi = Gallery::where('idgalerije', '3')->get();
            $strecFolija = Gallery::where('idgalerije', '4')->get();
            $zipKese = Gallery::where('idgalerije', '5')->get();
            $tregerice = Gallery::where('idgalerije', '6')->get();
            $opsAmbalaza = Gallery::where('idgalerije', '7')->get();
            $airBubbleFolija = Gallery::where('idgalerije', '8')->get();
            $petAmbalaza = Gallery::where('idgalerije', '9')->get();
            $peFolija = Gallery::where('idgalerije', '10')->get();
            $plastSirokePorosnje = Gallery::where('idgalerije', '11')->get();
            $keseZaZamrzivac = Gallery::where('idgalerije', '12')->get();
            $slikeIzProizvodnje = Gallery::where('idgalerije', '13')->get();
            $sajmovi = Gallery::where('idgalerije', '14')->get();

            DB::commit();
        } catch(\Throwable $e) {
            DB::rollBack();
        }

        return view('pages.products.products', [
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
            'plastSirokePorosnje' => $plastSirokePorosnje,
            'keseZaZamrzivac' => $keseZaZamrzivac,
            'slikeIzProizvodnje' => $slikeIzProizvodnje,
            'sajmovi' => $sajmovi
        ]);
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
