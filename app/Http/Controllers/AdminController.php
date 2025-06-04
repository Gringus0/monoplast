<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        return view('pages.admin.index');
    }

    public function loginForm()
    {
        //promeniti
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

    public function gallery()
    {
        return view('pages.admin.gallery');
    }

    public function createImage()
    {

    }

    public function storeImage(Request $request)
    {

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
        return view('pages.admin.buyer-list');
    }

    public function listOrders()
    {
        return view('pages.admin.order-list');
    }

    public function editBod()
    {
        return view('pages.admin.edit-bod');
    }

    public function updateBod(Request $request)
    {

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
