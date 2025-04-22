<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProductsWithGallery() {
        return view('pages.products.products');
    }

    public function listProductPrices() {
        return view('pages.products.prices');
    }
}
