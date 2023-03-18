<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Superheros;

class SuperherosController extends Controller
{
    public function index(){
        $page_title = "Super Heros";

        $superheros = Superheros::all();

        $men = Superheros::where('gender', '=', 'Male')->get();

        return view('superheros', compact('page_title', 'superheros', 'men'));
    }
}
