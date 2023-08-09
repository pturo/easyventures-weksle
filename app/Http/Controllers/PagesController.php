<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function jakZlozycWniosek() {
        return view('pages.jak-zlozyc-wniosek');
    }

    public function jakSplacicNaleznosc() {
        return view('pages.jak-splacic-naleznosc');
    }

    public function warunkiFinansowania() {
        return view('pages.warunki-finansowania');
    }

    public function wspolpraca() {
        return view('pages.wspolpraca');
    }

    public function politykaPrywatnosci() {
        return view('pages.polityka-prywatnosci');
    }
}
