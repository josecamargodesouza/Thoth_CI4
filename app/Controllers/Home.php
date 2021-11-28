<?php

namespace App\Controllers;

class Home extends BaseController
{
    /*
    *   index
    */

    public function index()
    {
        return view ('comuns/home.php');
    }

    /*
    *   Carrega a Materais
    */

    public function materias()
    {
        return view ('comuns/materias');
    }

    /*
    *   Carrega a Lista de Temas da matéria
    */

    public function temasMaterias()
    {
        return view ('comuns/temas-materia');
    }
    
    // Carreliga view Sobre Materia
    public function sobreMateria()
    {
        return view ( 'comuns/sobre-materia');
    }

    // Carreliga view Quiz
    public function quiz()
    {
        return view ('comuns/quiz');
    }


    /*
    *   Carrega a view Perfil
    */

    public function perfil()
    {
        return view ('perfil');
    }

    /*
    *    Carrega a view Login
    */

    public function login() 
    {
        return view ('admin/login');
    }

} 
