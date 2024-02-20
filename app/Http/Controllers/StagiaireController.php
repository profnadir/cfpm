<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::latest()->paginate(5);

        return view('stagiaires.index',[
            'stagiaires' => $stagiaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $this->validate($request,[
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'note' => 'required|numeric|min:0|max:20'
        ]);

        Stagiaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'note' => $request->note,
        ]);

        return redirect()->route('stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    //public function show(Stagiaire $stagiaire)
    public function show(Stagiaire $stagiaire)
    {
        //$stagiaire = Stagiaire::findorFail($id);

        return view('stagiaires.show',[
            'stagiaire' => $stagiaire
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //$stagiaire = Stagiaire::findorFail($id);

        return view('stagiaires.edit',[
            'stagiaire' => $stagiaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $validated = $this->validate($request,[
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'note' => 'required|numeric|min:0|max:20'
        ]);

       // $stagiaire = Stagiaire::findorFail($id);

        $stagiaire->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'note' => $request->note,
        ]);

        return redirect()->route('stagiaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //$stagiaire = Stagiaire::findorFail($id);

        $stagiaire->delete();
        return redirect()->route('stagiaires.index');
    }
}
