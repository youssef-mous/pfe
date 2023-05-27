<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Inscription;
class InscriptionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   // retourner les inscriptions dans un view 
    public function edit($id){
        $inscription=Inscription::find($id);
        //formulaire de edition des inscription ; 
        //return view('Inscription');
   
}
    //lister les inscription
    public function index(){
            $listInscription= Inscription::paginate(10);
            return view(,compact('$listInscription');
                // add to view  $listInscription->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des inscriptions
    public function create(){
        return view ('// view pour le formulaire de inscription ');
    }
    // enregistre un inscription 
    public function store(Request $request,$idApprenant,$idFacture,$idFormation){
        
         $request->validate([
            'valider'=>'required',
            'regler'=>'required',
            'date_inscription'=>'required'
        ]);



        $inscription= new Inscription();
        $inscription->valider=$request->input('valider');
        $inscription->regler=$request->input('regler');
        $inscription->date_inscription=$request->input('date_inscription');
        $inscription->apprenant_id=$idApprenant;
        $inscription->facture_id=$idFacture;
        $inscription->formation_id=$idFormation;


        $inscription->save();




    }
    // modifier un apprenant 

    public function update(Request $request,$id){
        $request->validate([
            'valider'=>'required',
            'regler'=>'required',
            'date_inscription'=>'required'
        ]);



        $inscription=Inscription::find($id);
        $inscription->valider=$request->input('valider');
        $inscription->regler=$request->input('regler');
        $inscription->date_inscription=$request->input('date_inscription');


        $inscription->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un apprenant 
    public function destroy($id){
    $inscription=Inscription::find($id);
    $inscription->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
