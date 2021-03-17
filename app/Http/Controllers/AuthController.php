<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('Auth.login');
    }
    public function login(Request $request)
    {

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password], true)) {

            if (Auth::user()->id == 1) {
                return redirect()->route('id1.index');
            } else {
                return redirect()->route('id2.index');
            }
        } else {
            session()->flash('failed','tên hoặc mật khẩu sai');
            return back();
        }
    }
}
