<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'codUsuario';

    protected $allowedFields = ['user', 'email', "senha"];

    protected $useTimestamps = true;
    protected $useSoftDeletes = false;

    protected $validationRules = [
        'user' => [
            "label" => 'Usuário',
            'rules' => 'required|min_length[1]|max_length[50]'
        ],
        'email' => [
            'label' => 'Email',
            'rules' => 'required|min_length[1]|max_length[100]'
        ],
        'senha' => [
            'label' => 'Senha',
            'rules' => 'required|min_length[8]|max_length[255]'
        ]
    ];

    /**
     * Retorna todos departamentos em ordem alfabética
     *
     * @return array
     */
    public function getLista()
    {
        return $this->orderBy('descricao')->findAll();
    }

    public function getUsuario($user, $email){
        return $this
        ->select('codUsuario, user, email, senha')
        ->where('user' , $user)
        ->orWhere('email', $email)
        ->find();
    }

    /**
     * getMenuDepartamento
     *
     * @return array
     */
    public function getMenuDepartamento()
    {
        return $this
                ->select('id, descricao')
                ->where('statusRegistro', 1)
                ->orderBy('descricao')
                ->findAll();
    }

}