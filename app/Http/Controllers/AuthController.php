<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function registerAndLoginForm() {
        return view('pages.auth.login-register');
    }

    public function register(RegisterRequest $request) {

        try {
            DB::beginTransaction();
            $user = new User;

            $user->ime = $request->input('name');
            $user->mail = $request->input('email');
            $user->telefon = preg_replace('/\D/', '', $request->input('phone'));
            $user->telefon2 = "";
            if($request->input('phone2')) {
                $user->telefon2 = preg_replace('/\D/', '', $request->input('phone2'));
            }
            $user->firma = $request->input('company');

            $user->save();
            DB::commit();
            return back()->with('success', '<UNK> <UNK> <UNK> <UNK> <UNK> <UNK> <UNK>');
        } catch (\Throwable $th) {
            DB::rollBack();
            return  back()->with('error', $th->getMessage());
        }



    }

    public function login(Request $request) {
        $input = $request->input('login-email');

        $user = User::where('mail', $input)->first();
        If(!$user) {
            return back()->with('error', 'Nema registracije sa datom email adresom.');
        }
        return back()->with('success', 'Login success!');
    }

}
