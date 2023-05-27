<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Facture;

class FactureController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   // retourner les factures dans un view 
    public function edit($id){
        $facture=Facture::find($id);
        //formulaire de edition des factures ; 
        //return view('factures');
   
}
    //lister les factures
    public function index(){
            $listfacture= Facture::paginate(15);
            return view(,compact('$listfacture');
                // add to view  $listfacture->links('pagination::bootstrap-5');



    }
    // afficher le forulaire de creation des factures
    public function create(){
        return view ('// view pour le formulaire de facture ');
    }
    // enregistre une facture
    public function store(Request $request,$idApprenant){
        
         $request->validate([
            'date_facture'=>'required',
            'montant'=>'required',
        ]);



        $facture= new Facture();
        $facture->date_facture=$request->input('date_facture');
        $facture->montant=$request->input('montant');
        $facture->apprenant_id=$idApprenant;
      


        $facture->save();




    }
    // modifier un facture 

    public function update(Request $request,$id){
       $request->validate([
            'date_facture'=>'required',
            'montant'=>'required',
        ]);



        $facture= Facture()::find($id);
        $facture->date_facture=$request->input('date_facture');
        $facture->montant=$request->input('montant');
      


        $facture->save();
        // redirect to a page 
        return redirect('')

    }
    // supprimer un factures
    public function destroy($id){
    $facture=Facture:find($id);
    $facture->delete();
    // redirect to a place after an delete 
     return redirect('');

    }
}
