<?php

    namespace App\Lib;

    class ControllerMain
    {
        public function __construct($dados)
        {
            $this->dados    = $dados;
            $cModel         = $dados['model'] . "Model";

            // vericando se existe o model para ser carregado

            if (file_exists('app/model/' . $cModel . '.php')) {
                require_once 'app/model/' . $cModel . '.php';
                $this->model = new $cModel();
            }
        }

        /*
        *   carrega a view para exibição
        */

        public function loadView($nomeView, $dbDados = [])
        {
            $this->dbDados = $dbDados;

            if (file_exists("app/view/" . $nomeView . ".php")) {
                require_once "app/view/" . $nomeView . ".php";
            } else {
                require_once "app/view/erros.php";
            }
        }

        /*
        *   Verifica se o usuário está logado
        */

        static public function estaLogado()
        {
            if (!Session::get('isLogged'))  {
                Redirect::route('Home/login');
                return true;
            }

            return false;
        }

    }