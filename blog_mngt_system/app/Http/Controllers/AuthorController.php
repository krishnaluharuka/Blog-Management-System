<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function AuthorDashboard(Request $request){
        return view('author.author_dashboard');
    }
}
