<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LenguageController extends Controller
{
    public function __invoke(Request $request,$locale) {
        return redirect()->back()->withCookie(cookie()->forever('lenguage', $locale));
    }
}
