<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stagiaires =Stagiaire::all();
        return view('stagiaires.index')->with([
            'stagiaires' => $stagiaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stagiaires.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom'     => 'required',
            'prenom'  => 'required',
            'ecole'   => 'required',
            'filiere' => 'required',
            'ville'   => 'required',
            'phone'   => 'required',
            'date_de_début'  => 'required',
            'date_de_fin'    => 'required',
            'Demande_Stage'    => 'required|image|mimes:jpeg,jpg,png', //|image|mimes:jpeg,jpg,png
            'CV'    => 'required|file|mimes:pdf,doc,docx' //|file|mimes:pdf,doc,docx
        ]);

          $demandePath=time() . "." .$request->file('Demande_Stage')->getClientOriginalExtension();
          $request->file('Demande_Stage')->storeAs('public/images',$demandePath);
          $cvPath =$request->file('CV')->store('public/cv');
          $stagiaire = new Stagiaire();
          $stagiaire->nom =$validatedData['nom'];
          $stagiaire->prenom =$validatedData['prenom'];
          $stagiaire->ecole =$validatedData['ecole'];
          $stagiaire->filiere =$validatedData['filiere'];
          $stagiaire->ville =$validatedData['ville'];
          $stagiaire->phone =$validatedData['phone'];
          $stagiaire->date_de_début =$validatedData['date_de_début'];
          $stagiaire->date_de_fin =$validatedData['date_de_fin'];
          $stagiaire->Demande_Stage =$demandePath;
          $stagiaire->CV =$cvPath;
          $stagiaire->save();

        
          return redirect()->route('stagiaires.index')->with([
              'success' => 'Le stagiaire a été ajouté.',
          ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stagiaire =Stagiaire::where('id', $id)->first();
        return view('stagiaires.show')->with([
            'stagiaire' => $stagiaire
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stagiaire $stagiaire)
    {

        return view('stagiaires.edit')->with([
            'stagiaire' => $stagiaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Stagiaire $stagiaire) 
    {
        
        $validatedData = $request->validate([
            'nom'     => 'required',
            'prenom'  => 'required',
            'ecole'   => 'required',
            'filiere' => 'required',
            'ville'   => 'required',
            'phone'   => 'required',
            'date_de_début'  => 'required',
            'date_de_fin'    => 'required',
            'Demande_Stage'    => 'required|image|mimes:jpeg,jpg,png', //|image|mimes:jpeg,jpg,png
            'CV'    => 'required|file|mimes:pdf,doc,docx' //|file|mimes:pdf,doc,docx
        ]);

          $demandePath=time() . "." .$request->file('Demande_Stage')->getClientOriginalExtension();
          $request->file('Demande_Stage')->storeAs('public/images',$demandePath);
          $cvPath =$request->file('CV')->store('public/cv');
        //   $stagiaire = new Stagiaire();
          $stagiaire->nom =$validatedData['nom'];
          $stagiaire->prenom =$validatedData['prenom'];
          $stagiaire->ecole =$validatedData['ecole'];
          $stagiaire->filiere =$validatedData['filiere'];
          $stagiaire->ville =$validatedData['ville'];
          $stagiaire->phone =$validatedData['phone'];
          $stagiaire->date_de_début =$validatedData['date_de_début'];
          $stagiaire->date_de_fin =$validatedData['date_de_fin'];
          $stagiaire->Demande_Stage =$demandePath;
          $stagiaire->CV =$cvPath;
          $stagiaire->save();

        //   $stagiaire->update($request->except('_token','_method'));
          return redirect()->route('stagiaires.index')->with([
              'success' => 'Le stagiaire a été modifié. ',
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stagiaire =Stagiaire::where('id', $id)->first();
        $stagiaire->delete();
        return redirect()->route('stagiaires.index')->with([
            'success' => 'Le stagiaire a été supprimé. ',
        ]);
        
    }

    public function downloadCV($userId)
    {
        $stagiaire = Stagiaire::findOrFail($userId);
        return response()->download(storage_path('app/' . $stagiaire->CV));
    }

    public function demande(Stagiaire $stagiaire)
    {
        return view('stagiaires.demande',['stagiaire' => $stagiaire]);
    }
}