<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('glowna.index');
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
        $validatedData = $request->validate([
            'credit-val' => 'required',
            'rate-val' => 'required'
        ], [
            'credit-val.required' => 'Proszę wybrać kwotę weksla!',
            'rate-val.required' => 'Proszę wybrać ratę!'
        ]);

        // Extract the specific form data
        $formData = [
            'creditVal' => $validatedData['credit-val'],
            'rateVal' => $validatedData['rate-val']
        ];

        // Pass the form data to the view
        return view('zapytanie.zloz-zapytanie', compact('formData'));
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
