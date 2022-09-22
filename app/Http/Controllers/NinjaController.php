<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function show()
    {
        $title = "Welkom op de page";
        $text = "nieuw onderdeel";

        return view('Ninja', compact(var_name: 'title', var_names: 'text'));
    }
    //
}
