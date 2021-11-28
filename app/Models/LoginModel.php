<?php

use App\Lib\ModelMain;

class LoginModel extends ModelMain
{
    public $table = 'usuario';

    /*
    *   busca de usuário
    */

    public function getLogin($login)
    {

//  /*       
//         $this->db->db_insert(
//             "INSERT INTO usuario (nome, nivel, statusRegistro, login, senha, email)
//             VALUES (?, ?, ?, ?, ?, ?) ",
//             [
//                 'fasm',
//                 1,
//                 1,
//                 'fasm',
//                 password_hash('fasm', PASSWORD_DEFAULT ),
//                 'fasm@fasm.edu.br'
//             ]
//         );
//         exit;
// */

        $rsc = $this->db->db_select(
            "SELECT * FROM " . $this->table . " WHERE login = ?",
            [$login] 
        );

        return $this->db->db_busca_dados($rsc);
    }

}