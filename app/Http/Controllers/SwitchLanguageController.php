<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchLanguageController extends Controller
{
    public function __invoke(Request $request, string $locale)
    {
        app()->setLocale($locale);

        session()->put('locale', $locale);

        return redirect()->back();
    }
}
