<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Controle;

class ControleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   // retourner les controles dans un view 
    public function edit($id){
        $controle=Controle::find($id);
        //formulaire de edition des controles ; 
        //return view('controle');
   
}
    //lister les controles
    public function index(){
            $listControle= Controle::paginate(4);
            return view(,compact('$listControle');
                // add to view  $listControle->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des controles
    public function create(){
        return view ('// view pour le formulaire de Controle ');
    }
    // enregistre un controle 
    public function store(Request $request,$idformation,$idformateur){
        
         $request->validate([
            'date_controle'=>'required',
            'duree'=>'required',
            'docControle'=>'required|File'
        ]);



        $controle= new Controle();
        $controle->date_controle=$request->input('date_controle');
        $controle->duree=$request->input('duree');
        $controle->docControle=$request->input('docControle');
        $controle->formation_id=$idformation;
        $controle->formateur_id=$idformateur;

        $controle->save();




    }
    // modifier un controle 

    public function update(Request $request,$idcontrole){
       $request->validate([
            'date_controle'=>'required',
            'duree'=>'required',
            'docControle'=>'required|File'
        ]);



        $controle= Controle()::find($idcontrole);
        $controle->date_controle=$request->input('date_controle');
        $controle->duree=$request->input('duree');
        $controle->docControle=$request->input('docControle');
        $controle->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un controle 
    public function destroy($id){
    $controle=Controle::find($id);
    $controle->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
