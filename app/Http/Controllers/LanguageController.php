<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $language = ['HTML', 'CSS', 'Javascript', 'PHP', 'Python', 'Ruby', 'Swift'];
        return view('language.index', ['language' => $language]);
    }
}
