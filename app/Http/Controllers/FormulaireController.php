<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envois=Formulaire::all();
        return view('adminHome',compact('envois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

  $envois=Formulaire::all();
        return view('adminHome',compact('connexions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'objet' => 'required',
            'nEntreprise'=>'required'
        ]
        , [

            'nom.required' => 'le nom est requis ',
            'prenom.required' => 'le prenom est requis ',
            'objet.required' => 'Formuler votre demande ',
            'nEntreprise.required' => 'le nom de l\'entreprise est requis',
        ]);
        $envois=Formulaire::create($request->all());
        return redirect()->route ('connexion.create');
        session()->flash('success','Demande envoyer avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validation du formulaire
         $request->validate([

            'statue'=>'required'
        ]);
        $connexions->updateOrFail($request->all());
        return redirect()->route('connexion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $connexions->deleteOrFail();
        return redirect()->route('connexion.create');
    }
}
