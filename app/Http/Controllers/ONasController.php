<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ONas;

class ONasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = ONas::latest()->get();
        return view('admin.o-nas.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.o-nas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        ONas::create([
            'name'=>$request->get('name'),
            'content'=>$request->get('content')
        ]);

        return redirect()->back()->with('message', 'Sekcja dodana pomyślnie!');
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

    // ValidateForm function
    function validateForm($request) {
        $this->validate($request, [
            'name'=>'required|min:3',
            'content'=>'required|min:3'
        ], [
            'name.required'=>'Nazwa sekcji jest wymagana.',
            'name.min'=>'Nazwa sekcji musi zawierać więcej niż 3 znaki.',
            'content.required'=>'Treść jest wymagana.',
            'content.min'=>'Treść musi zawierać więcej niż 3 znaki.'
        ]);
    }
}
