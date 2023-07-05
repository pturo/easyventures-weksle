<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atuty;
use App\Models\ONas;
use App\Models\Wspolpraca;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atuty = Atuty::all();
        $onas = ONas::latest()->first();
        $wspolpraca = Wspolpraca::latest()->first();
        return view('glowna.index', compact('atuty', 'onas', 'wspolpraca'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('glowna.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'name'=>'required|min:3|max:30',
            'surname'=>'required|min:3|max:30',
            'email'=>'required|email',
            'city'=>'required|min:3|max:30',
            'zip-code'=>'required|max:6',
            'street'=>'required|min:3|max:50',
            'home-number'=>'required|integer'
        ], [
            'name.required'=>'Proszę podać imię.',
            'name.min'=>'Imię nie może być mniejsze niż 3 znaki.',
            'name.max'=>'Imię nie może przekraczać 30 znaków.',
            'surname.required'=>'Proszę podać nazwisko.',
            'surname.min'=>'Nazwisko nie może być mniejsze niż 3 znaki.',
            'surname.max'=>'Nazwisko nie może przekraczać 30 znaków.',
            'email.required'=>'Proszę podać adres e-mail.',
            'email.email'=>'Proszę podać prawidłowy adres e-mail.',
            'city.required'=>'Proszę podać nazwę miejscowości.',
            'city.min'=>'Nazwa miejscowości nie może być mniejsze niż 3 znaki.',
            'city.max'=>'Nazwa miejscowości nie może przekraczać 30 znaków.',
            'zip-code.required'=>'Proszę podać kod pocztowy.',
            'zip-code.max'=>'Kod pocztowy nie może przekraczać 5 liczb.',
            'street.required'=>'Proszę podać nazwę ulicy.',
            'street.min'=>'Nazwa ulicy nie może być mniejsza niż 3 znaki.',
            'street.max'=>'Nazwa ulicy nie może przekraczać 50 znaków.',
            'home-number.required'=>'Proszę podać numer domu/mieszkania.',
            'home-number.integer'=>'Podano nieprawidłowy numer domu/mieszkania.'
        ]);

        return dd($request);

        //return redirect()->back();
    }
}
