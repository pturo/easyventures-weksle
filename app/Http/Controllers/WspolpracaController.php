<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wspolpraca;

class WspolpracaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Wspolpraca::all();
        return view('admin.wspolpraca.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wspolpraca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        Wspolpraca::create([
            'content'=>$request->get('content')
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
        $entry = Wspolpraca::find($id);

        return view('admin.wspolpraca.edit', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateForm($request);

        $entry = Wspolpraca::find($id);
        $entry->content = $request->get('content');
        $entry->save();

        return redirect()->back()->with('message', 'Wpis został zaktualizowany.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entry = Wspolpraca::find($id);
        $entry->delete();

        return redirect()->back()->with('message', 'Wpis został usunięty.');
    }

    // ValidateForm function
    function validateForm($request) {
        $this->validate($request, [
            'content'=>'required|min:3'
        ], [
            'content.required'=>'Treść jest wymagana.',
            'content.min'=>'Treść musi zawierać więcej niż 3 znaki.'
        ]);
    }
}
