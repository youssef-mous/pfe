<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Effectuer;
class EffectuerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   // retourner les Effectuers dans un view 
    public function edit($idApprenant,$idcontrole){
        $effectuer=Effectuer::find($idApprenant,$idcontrole);
        //formulaire de edition des Effectuer ; 
        //return view('Effectuer');
   
}
    //lister les Effectuers
    public function index(){
            $listEffectuer= Effectuer::paginate(2);
            return view(,compact('$listEffectuer');
                // add to view  $listEffectue->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des Effectuers
    public function create(){
        return view ('// view pour le formulaire de  Effectuer');
    }
    // enregistre un Effectue
    public function store(Request $request,$idApprenant,$idcontrole){
        
         $request->validate([
            'reponses'=>'required',
        ]);



        $effectue= new Effectuer();
        $effectuer->reponses=$request->input('reponses');
        $effectuer->controle_id=$idcontrole;
        $effectuer->apprenant_id=$idApprenant;
        


        $effectuer->save();




    }
    // modifier un apprenant 

    public function update(Request $request,$idApprenant,$idcontrole){


             $request->validate([
            'reponses'=>'required',
        ]);



        $effectue=Effectuer()::find($idApprenant,$idcontrole);
        $effectuer->reponses=$request->input('reponses');
        


        $effectuer->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un effectuer 
    public function destroy($idApprenant,$idcontrole){
    $effectuer=Effectuer:find($idApprenant,$idcontrole);
    $effectuer->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
