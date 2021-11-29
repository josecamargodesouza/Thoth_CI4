<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    /*
    *   index
    */
    public function __construct()
    {
        $this->UsuarioModel = new UsuarioModel();   
         
    }
    public function index()
    {     
        $session = session();   
        $data['userData'] = $this->UsuarioModel->getUsuario($session->get('userLogado'), '');
               
        
        return view ('admin/profile', $data);
    }

    public function logoff(){
        $session = session();   
        $session->destroy();
        return redirect()->to("/Home");
    }

} 
