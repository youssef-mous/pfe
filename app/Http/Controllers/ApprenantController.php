<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    // retourner les apprenants dans un view 
    public function edit($id){
        $apprenant=Apprenant::find($id);
        //formulaire de edition des apprenants ; 
        //return view('Apprenants');
   
}
    //lister les apprenants
    public function index(){
            $listApprenant= Apprenant::paginate(15);
            return view(,compact('$listApprenant');
                // add to view  $listApprenant->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des apprenants
    public function create(){
        return view ('// view pour le formulaire de inscription ');
    }
    // enregistre un apprenant 
    public function store(Request $request){
        
         $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email',
            'telephone'=>'required',
            'genre'=>'required',
            'ville'=>'required',
            'codePostal'=>'required',
            'dateNaissance'=>'required',
            'adresse'=>'required'
        ]);



        $apprenant= new Apprenant();
        $apprenant->nom_A=$request->input('nom');
        $apprenant->prenom_A=$request->input('prenom');
        $apprenant->email_A=$request->input('email');
        $apprenant->numTel_A=$request->input('telephone');
        $apprenant->genre_A=$request->input('genre');
        $apprenant->ville_A=$request->input('ville');
        $apprenant->codPost_A=$request->input('codePostal');
        $apprenant->dateNai_A=$request->input('dateNaissance');
        $apprenant->adresse=$request->input('adresse');
        $apprenant->imagePlace_apprenant=$request->input('image');


        $apprenant->save();




    }
    // modifier un apprenant 

    public function update(Request $request,$id){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email',
            'telephone'=>'required',
            'genre'=>'required',
            'ville'=>'required',
            'codePostal'=>'required',
            'dateNaissance'=>'required'
        ]);

        $apprenant=Apprenant::find($id);
        $apprenant->nom_A=$request->input('nom');
        $apprenant->prenom_A=$request->input('prenom');
        $apprenant->email_A=$request->input('email');
        $apprenant->numTel_A=$request->input('telephone');
        $apprenant->genre_A=$request->input('genre');
        $apprenant->ville_A=$request->input('ville');
        $apprenant->codPost_A=$request->input('codePostal');
        $apprenant->dateNai_A=$request->input('dateNaissance');
        $apprenant->adresse=$request->input('adresse');
        $apprenant->imagePlace_apprenant=$request->input('image');

        $apprenant->save();
        // redirect to a page 
        return redirect('');

    }
    // supprimer un apprenant 
    public function destroy($id){
    $apprenant=Apprenant::find($id);
    $apprenant->delete();
    // redirect to a place after an delete 
     return redirect('');

    }


}
