<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TranslationController extends Controller
{
    public function index()
    {
        // Boleh guna session('language', 'us_en');
        $language = Session::get('language', 'us_en'); // Default to 'us_en'

        // Tak ada model, tolong guna eloquent/model
        $translations = DB::table('translations')->get();

        return view('translations', compact('translations', 'language'));
    }

    public function setLanguage($lang)
    {
        // Boleh guna session(['language' => $lang]);
        Session::put('language', $lang);
        return redirect()->route('home');
    }
}
