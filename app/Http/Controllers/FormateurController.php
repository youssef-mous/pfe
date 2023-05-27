<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Formateur;

class FormateurController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        return view('formateur');
    }

    
   // retourner les Formateurs dans un view 
    public function edit($id){
        $formateur=Formateur::find($id);
        //formulaire de edition des Formateurs ; 
        //return view('Formateurs');
   
}
    //lister les Formateurs
    public function index(){
            $listFormateur= Formateur::paginate(15);
            return view(,compact('$listFormateur');
                // add to view  $listFormateur->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des Formateurs
    public function create(){
        return view ('// view pour le formulaire de Formateur ');
    }
    // enregistre un Formateur
    public function store(Request $request){
        
         $request->validate([
            'nom_f'=>'required',
            'prenom_f'=>'required',
            'email_f'=>'required|email',
            'telephone_f'=>'required',
            'genre_f'=>'required',
            'ville_f'=>'required',
            'codePostal_f'=>'required',
            'dateNaissance_f'=>'required',
            'adresse'=>'required',
        ]);



        $formateur= new Formateur();
        $formateur->nom_f=$request->input('nom');
        $formateur->prenom_f=$request->input('prenom');
        $formateur->email_f=$request->input('email');
        $formateur->numTel_f=$request->input('telephone');
        $formateur->genre_f=$request->input('genre');
        $formateur->ville_f=$request->input('ville');
        $formateur->codPost_f=$request->input('codePostal');
        $formateur->dateNai_f=$request->input('dateNaissance');
        $formateur->salaire=$request->input('salaire');
        $formateur->adresse=$request->input('adresse');
        $formateur->imagePlace_formateur=$request->input('image');


        $formateur->save();




    }
    // modifier un formateur 

    public function update(Request $request,$id){

         $request->validate([
            'nom_f'=>'required',
            'prenom_f'=>'required',
            'email_f'=>'required|email',
            'telephone_f'=>'required',
            'genre_f'=>'required',
            'ville_f'=>'required',
            'codePostal_f'=>'required',
            'dateNaissance_f'=>'required',
            'adresse'=>'required',
        ]);



        $formateur=Formateur::find($id);
        $formateur->nom_f=$request->input('nom');
        $formateur->prenom_f=$request->input('prenom');
        $formateur->email_f=$request->input('email');
        $formateur->numTel_f=$request->input('telephone');
        $formateur->genre_f=$request->input('genre');
        $formateur->ville_f=$request->input('ville');
        $formateur->codPost_f=$request->input('codePostal');
        $formateur->dateNai_f=$request->input('dateNaissance');
        $formateur->salaire=$request->input('salaire');
        $formateur->adresse=$request->input('adresse');
        $formateur->imagePlace_formateur=$request->input('image');


        $formateur->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un formateur
    public function destroy($id){
    $formateur=Formateur:find($id);
    $formateur->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
