<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {   
        $etudiant= new \App\Models\Etudiants();
        $etudiants=$etudiant->select(['nom','prenom'])->findAll();
        
       

        
        //$data = [
          //  'prenom'   => 'JUlein',
            //'message' => 'AIME le copyright',
        //];
            
        //array_push($data, );
        
        
        return view('liste_etudiants',['listeetudiants'=> $etudiants] );
    }
    public function test(): string
    {
         return view('test');
    }
    
}
