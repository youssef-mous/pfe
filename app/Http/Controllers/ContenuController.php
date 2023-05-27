<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Contenu;

class ContenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   // retourner les apprenants dans un view 
    public function edit($id){
        $listcontenu=Contenu::find($id);
        //formulaire de edition des Contenus ; 
        //return view('Contenus');
   
}
    //lister les apprenants
    public function index(){
            $listContenu= Contenu::paginate(15);
            return view(,compact('$listContenu');
                // add to view  $listcontenu->links('pagination::bootstrap-5');



    }
    // afficher le formulaire de creation des Contenus
    public function create(){
        return view ('// view pour le formulaire de Contenu ');
    }
    // enregistre un Contenu
    public function store(Request $request,$id){
        
         $request->validate([
            'type_contenu'=>'required',
            'date_creation'=>'required',
            'eplacement'=>'required',
        ]);



        $contenu= new Contenu();
        $contenu->type_contenu=$request->input('type_contenu');
        $contenu->date_creation=$request->input('date_creation');
        $contenu->eplacement=$request->input('eplacement');
        $contenu->formation_id=$id;


        $contenu->save();




    }
    // modifier un contenu

    public function update(Request $request,$id){
        $request->validate([
            'type_contenu'=>'required',
            'date_creation'=>'required',
            'eplacement'=>'required',
        ]);



        $contenu=Contenu::find($id);
        $contenu->type_contenu=$request->input('type_contenu');
        $contenu->date_creation=$request->input('date_creation');
        $contenu->eplacement=$request->input('eplacement');

        $contenu->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un contenu 
    public function destroy($id){
    $contenu=Contenu::find($id);
    $apprenant->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
