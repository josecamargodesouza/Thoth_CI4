<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;


class Login extends BaseController
{
    public $UsuarioModel;

    /**
     * Método construstutor
     */
    public function __construct()
    {
        $this->UsuarioModel = new UsuarioModel();       
        helper(['Formulario', 'form']);
    }

    /**
     * Carrega view com a lista departamentos
     *
     * @return void
     */
    public function index()
    {

        return view('admin/login');
    }

    /**
     * form
     *
     * @param mixed $action 
     * @param mixed $id 
     * @return void
     */
    public function form($action = null, $id = null)
    {
        $this->dados['action'] = $action;
        $this->dados['data']   = null;
        $post = $this->request->getPost();
        if ($action != 'new') {
            $this->dados['data'] = $this->UsuarioModel->find($id);

            if (empty($this->dados['data'])) {
                throw new \CodeIgniter\Database\Exceptions\DatabaseException("Registro não localização na base de dados (" . $id .  ")");
            }
        }

        return view("admin/profile", $this->dados);
    }

    public function logar()
    {
        $session = session();

        if ($this->confereExiste(true) == false) {
            $post = $this->request->getPost();
            $userData = $this->UsuarioModel->getUsuario($post['usuario'], '');
            if (!empty($userData)) {
                if (strtolower($userData[0]['user']) == strtolower($post['usuario']) and $userData[0]['senha'] === md5($post['senha'])) {
                    $session->set('userLogado' , $userData[0]['user']);
                    $session->set('emailUser'  , $userData[0]['user']);
                    $data['userData'] = $this->UsuarioModel->getUsuario($session->get('userLogado'), '');
                    return view ('admin/profile', $data);
                } else {
                    return redirect()->to("/Login")->with('msgLoginError',  'Usuário e/ou senha incorretos.');
                }
            }else{
                return redirect()->to("/Login")->with('msgLoginError',  'Parece que você não faz parte da turma ainda. <a  id="sign-up-btn"> Crie Já sua conta! </a>');
            }
        } else {
            return redirect()->to("/Login")->with('msgLoginError',  $this->confereExiste());
        }
    }

    /**
     * store
     *
     * @return void
     */

    public function new()
    {
        //dd($this->confereExiste());
        if ($this->confereExiste() == false) {

            $post = $this->request->getPost();

            $aGravar = [
                'user'       => $post['usuario'],
                'email'         => $post['email'],
                'senha'         => md5($post['senha'])
            ];

            //

            if ($this->UsuarioModel->save($aGravar)) {

                return redirect()->to("/Login")->with('msgSuccess', 'Usuário Criado com Sucesso!');
            } else {
                return view("admin/profile", [
                    'action'    => $post['action'],
                    'data'      => $post,
                    'errors'    => $this->UsuarioModel->errors()
                ]);
            }
        } else {
            return redirect()->to("/Login")->with('msgCadError',  $this->confereExiste());
        }
    }

    public function confereExiste($eLogin = false)
    {
        $post = $this->request->getPost();
        $userData = $this->UsuarioModel->getUsuario($post['usuario'], $post['email']);
        
        if ($eLogin == false) {
            if (!empty($userData)) {
                if (strtolower($userData[0]['user']) == strtolower($post['usuario'])) {
                    return 'Nome de Usuário já utilizado.';
                } else if (strtolower($userData[0]['email']) == strtolower($post['email'])) {
                    return 'Email já utilizado.';
                } else {
                    return false;
                }
            } else {
                return false;
            }
            return false;
        }
    }
}
