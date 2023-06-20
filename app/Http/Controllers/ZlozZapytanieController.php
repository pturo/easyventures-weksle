<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZlozZapytanieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('zapytanie.zloz-zapytanie');
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
            'city'=>'required|min:3|max:30'
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
        ]);

        dd($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
