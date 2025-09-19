<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Etudiant extends BaseController
{
    public function ajout()
    {
        echo 'coucou ajout';
    }
    public function modif($id)
    {
        echo "coucou modif $id";
    }
    public function delete($id)
    {
        echo "coucou delete $id";
    }
}
