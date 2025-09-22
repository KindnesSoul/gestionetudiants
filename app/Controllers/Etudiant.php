<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Etudiant extends BaseController
{
    public function ajout()
    {
        
        return view('nouvel_etudiant');
    }
    public function create(){
        dd($this->request->getPost());
        return view('');    
    }
    public function modif($id)
    {
        return view('modifier_etudiant',['data'=> $id]);
    }
    public function update(){
        dd($this->request->getPost());
        return view('');
    }
    public function delete($id)
    {
        //return "coucou delete $id";
        //$suppr="coucou delete $id"
        //return view("liste_etudiants",[]);
        return redirect()->back();
    }
}
