<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Formation;
class FormationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   // retourner les formations dans un view 
    public function edit($id){
        $formation=Formation::find($id);
        //formulaire de edition des formations ; 
        //return view('formations');
   
}
    //lister les formations
    public function index(){
            $listFomation= Formation::paginate(15);
            return view(,compact('$listFomation');
                // add to view  $listFormation->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des formations
    public function create(){
        return view ('// view pour le formulaire de Formation ');
    }
    // enregistre une formation 
    public function store(Request $request,$idformateur){
        
         $request->validate([
            'domain_form'=>'required',
            'intitule_form'=>'required',
            'objectif_form'=>'required',
            'date_deb'=>'required',
            'date_fin'=>'required',
            'certifier'=>'required'
        ]);



        $formation= new Formation();
        $formation->domain_form=$request->input('domain_form');
        $formation->intitule_form=$request->input('intitule_form');
        $formation->objectif_form=$request->input('objectif_form');
        $formation->date_deb=$request->input('date_deb');
        $formation->date_fin=$request->input('date_fin');
        $formation->certifier=$request->input('certifier');
        $formation->codPost_A=$request->input('codePostal');
        $formation->montant=$request->input('montant');
        $formation->imagePlace_formation=$request->input('imagePlace_formation');
        $formation->formateur_id=$idformateur;


        $formation->save();




    }
    // modifier une formation 

    public function update(Request $request,$id,$idformateur){
         $request->validate([
            'domain_form'=>'required',
            'intitule_form'=>'required',
            'objectif_form'=>'required',
            'date_deb'=>'required',
            'date_fin'=>'required',
            'certifier'=>'required'
        ]);



        $formation=Formation()::find($id);
        $formation->domain_form=$request->input('domain_form');
        $formation->intitule_form=$request->input('intitule_form');
        $formation->objectif_form=$request->input('objectif_form');
        $formation->date_deb=$request->input('date_deb');
        $formation->date_fin=$request->input('date_fin');
        $formation->certifier=$request->input('certifier');
        $formation->codPost_A=$request->input('codePostal');
        $formation->montant=$request->input('montant');
        $formation->imagePlace_formation=$request->input('imagePlace_formation');
        $formation->formateur_id=$idformateur;


        $formation->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un formation 
    public function destroy($id){
    $formation=Formation::find($id);
    $formation->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
