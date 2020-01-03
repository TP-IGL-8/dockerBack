<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantCtrl extends Controller
{
    
    public function newEtudiant(){
        $newEtudiant=new Etudiant();
        $newEtudiant->nom="user";
        $newEtudiant->prenom="99";
        $newEtudiant->mat="17";
        $newEtudiant->annee="1CS";
        $newEtudiant->grp="G04";
        $newEtudiant->email="user@esi.dz";
        $newEtudiant->password="zzzz";
        $newEtudiant->moy="14";
        $newEtudiant->save();
    }


    public function DataDisplayapi(){

        $Etudiant= Etudiant::all();
        return response()->json($Etudiant);
    }
    public function ShowSingleData($id){

        $Etudiant= Etudiant::find($id);
        return response()->json($Etudiant);
    }
    public function render($request, Exception $exception)
    {
    // This will replace our 404 response with
    // a JSON response.
    if ($exception instanceof ModelNotFoundException &&
        $request->wantsJson())
    {
        return response()->json([
            'data' => 'Resource not found'
        ], 404);
    }

    return parent::render($request, $exception);
}

    public function index(){
        return view('app');
    }
    /*public function cree(Request $request){
        $newEtu=new Etudiant();
        $newEtu->nom=$request->input('nom');
        $newEtu->prenom=$request->input('prenom');
        $newEtu->email=$request->input('email');
        $newEtu->mat=$request->input('mat');
        $newEtu->grp=$request->input('grp');
        $newEtu->annee=$request->input('annee');
        $newEtu->password=$request->input('password');
        $newEtu->moy=$request->input('moy');

        $newEtu->save();
      
    }*/
    public function cree(Request $request){
        $newEtu=new Etudiant();
        
       
        $newEtu->nom=$nom=$request->input('nom');
        $newEtu->prenom=$prenom=$request->input('prenom');
        $newEtu->email=$email=$request->input('email');
        $newEtu->mat=$mat=$request->input('mat');
        $newEtu->moy=$moy=$request->input('moy');
        $newEtu->grp=$grp=$request->input('grp');
        $newEtu->annee=$annee=$request->input('annee');
        $newEtu->password=$password=$request->input('password');
        $newetu->fonction='etudiant';
        $newEtu->save();
        return response()->json($newEtu, 201); 
    }
}
