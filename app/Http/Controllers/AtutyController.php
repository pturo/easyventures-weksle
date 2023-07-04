<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atuty;

class AtutyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Atuty::all();
        return view('admin.atuty.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.atuty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        Atuty::create([
            'icon'=>$request->get('icon'),
            'name'=>$request->get('name'),
            'description'=>$request->get('description')
        ]);

        return redirect()->back()->with('message', 'Wpis został dodany.');
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
        $entry = Atuty::find($id);
        return view('admin.atuty.edit', compact('$entry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateForm($request);

        $entry = Atuty::find($id);
        $entry->icon = $request->get('icon');
        $entry->name = $reuest->get('name');
        $entry->description = $request->get('description');
        $entry->save();

        return redirect()->back()->with('message', 'Wpis został zaktualizowany.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entry = Atuty::find($id);
        $entry->delete();

        return redirect()->route()->with('message', 'Wpis został usunięty.');
    }

    // ValidateForm function
    function validateForm($request) {
        $this->validate($request, [
            'icon'=>'required|min:3',
            'name'=>'required|min:3',
            'description'=>'required|min:3'
        ], [
            'icon.required'=>'Ikona jest wymagana (format: fa fa-book).',
            'icon.min'=>'Ikona musi zawierać więcej niż 3 znaki (format: fa fa-book).',
            'name.required'=>'Nazwa jest wymagana.',
            'name.min'=>'Nazwa musi zawierać więcej niż 3 znaki.',
            'description.required'=>'Opis jest wymagany.',
            'description.min'=>'Opis musi zawierać więcej niż 3 znaki.'
        ]);
    }
}
