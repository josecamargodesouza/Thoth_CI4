<?php

namespace App\Lib;

class Formulario
{

    /*
     * 
     * Exibe mensagens de sucesso ou error
     */
        
    static function exibeMensagem() 
    {
        
        $cRet = "";
        
        if (Session::get("msgSucesso")) {

            $cRet .= '
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                ' . Session::getDestroy("msgSucesso") . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>';            
        }

        if (Session::get("msgError")) {
            
            $cRet = ' 
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ' .Session::getDestroy("msgError") . ' 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>';
        }
        
        return $cRet;
        
    }

    /*
    *   Exibe a ação para o formulário (sub-titulo)
    */

    static function setFormSubTitulo($acao) 
    {
        $cRet = "";

        if ($acao == 'new') {
            $cRet = "Inclusão";
        } else if ($acao == 'update') {
            $cRet = "Alteração";
        } else if ($acao == 'delete') {
            $cRet = "Exclusão";
        } else if ($acao == 'view') {
            $cRet = "Visualização";
        }

        return $cRet;
    }

    /*
    *   Seta o valor para o campo do formulário
    */

    static function setValue($campo, $dados = [], $default = "")
    {
        if (isset($dados[$campo])) {
            return $dados[$campo];
        } else {
            return $default;
        }
    }

    /*
    *
    */

    static function setDescricao($value, $dados)
    {
        if (isset($dados[$value])) {
            return $dados[$value];
        } else {
            return "...";
        }
    }


}