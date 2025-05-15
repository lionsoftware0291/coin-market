<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about() {
        return view('pages.about');
    }
    public function home() {
        return view('pages.homes');
    }

    public function apartments() {
        $apartments = \App\Models\Apartment::all();
        return view('pages.apartments', compact('apartments'));
    }

    public function plots() {
        $plots = \App\Models\Plot::all();
        return view('pages. ', compact('plots'));
    }

    public function farmHouses() {
        $farmHouses = \App\Models\FarmHouse::all();
        return view('pages.farmhouses', compact('farmHouses'));
    }

    public function newProjects() {
        $projects = \App\Models\NewProject::all();
        return view('pages.newprojects', compact('projects'));
    }
}

