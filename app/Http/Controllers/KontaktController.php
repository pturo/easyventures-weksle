<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontakt;

class KontaktController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Kontakt::all();
        return view('admin.kontakt.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontakt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        Kontakt::create([
            'icon'=>$request->get('icon'),
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
        $entry = Kontakt::find($id);
        return view('admin.kontakt.edit', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateForm($request);

        $entry = Kontakt::find($id);
        $entry->icon = $request->get('icon');
        $entry->content = $request->get('content');
        $entry->save();

        return redirect()->back()->with('message', 'Wpis został zaktualizowany.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entry = Kontakt::find($id);
        $entry->delete();

        return redirect()->back()->with('message', 'Wpis został usunięty.');
    }

    // ValidateForm function
    function validateForm($request) {
        $this->validate($request, [
            'icon'=>'required|min:3',
            'content'=>'required|min:3'
        ], [
            'icon.required'=>'Nazwa ikony jest wymagana.',
            'icon.min'=>'Nazwa ikony musi zawierać więcej niż 3 znaki.',
            'content.required'=>'Treść jest wymagana.',
            'content.min'=>'Treść musi zawierać więcej niż 3 znaki.'
        ]);
    }
}
