<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BitnineController extends Controller
{

    public function index()
    {
        return view('bitnine.index');
    }
    public function usecases()
    {
        return view('bitnine.usecases');
    }

    public function services()
    {
        return view('bitnine.services');
    }

    public function about(){
        return view('bitnine.about');
    }

    public function contact()
    {
        return view('bitnine.contact');
    }

    public function documentation()
    {
        return view('bitnine.documentation');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
