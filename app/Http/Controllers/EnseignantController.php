<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use Illuminate\Support\Facades\DB;


class EnseignantController extends Controller
{
    public function listepage(){
        $enseignant = Enseignant::all(); 
        return view('enseignants.liste', compact('enseignant'));  
    }
    
    public function addEnseignant(Request $request){   
        $ens=new Enseignant([
            "cin"=>$request->input("cin"),
            "nom"=>$request->input("nom"),
            "prenom"=>$request->input("prenom"),
            "email"=>$request->input("email"),
            "specialite"=>$request->input("specialite"),

        ]);
        
       $ens->save();
       return redirect()->route('listeEnseignant')->with('success','enseignants added');
    
        }
        public function allEnseignant(){
            $Enseignant= Enseignant::all();     
            return view('enseignants.liste')->with("Enseignant",$Enseignant) ;    
        }

        //supprimer enseignant
    public function delete($id){
        DB::table('enseignants')->where('id',$id)->delete();
        return redirect()->route('listeEnseignant');    
    }

    
    public function edit($id){
        $data=Enseignant::select('*')->find($id);
        return view('enseignants.modifier',(['data'=>$data]));
      
    }
    public function update(Request $request , $id){    
       $ens=[
        "cin"=>$request->input("cin"),
        "nom"=>$request->input("nom"),
        "prenom"=>$request->input("prenom"),
        "email"=>$request->input("email"),
        "specialite"=>$request->input("specialite"),
       ];
       $row=Enseignant::where('id',$id)->update($ens);
       if($row>0){
        return redirect()->route('listeEnseignant')->with('success','enseignants updated');
       }
       else{
        return redirect()->route('listeEnseignant')->with('error','failed to update');
       }
    }
}
