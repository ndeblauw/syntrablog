<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = \App\Models\User::all();

        return view('authors.index', ['authors' => $authors]);
    }
}
