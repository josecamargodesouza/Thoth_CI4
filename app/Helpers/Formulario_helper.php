<?php


function mensagemSucesso()
{
    $texto = '';
    if (isset(session()->msgSuccess)) {

        $texto .= '
                    <div class="alert pr-5 pl-5 alert-success alert-dismissible fade show" role="alert">
                        <strong>' . session()->msgSuccess. '</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

    }

    return $texto;
}

function mensagemError()
{
    $texto = '';
    if (isset(session()->msgError)) {

        $texto .= '
                    <div class="alert alert-danger pr-5 pl-5 alert-dismissible fade show" role="alert">
                        <strong>' . session()->msgError. '</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

    }

    return $texto;
}

function cadError()
{
    $texto = '';
    if (isset(session()->msgCadError)) {

        $texto .= '
                    <div class="alert alert-danger pr-5 pl-5 alert-dismissible fade show" role="alert">
                        <strong>' . session()->msgCadError. '</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

    }

    return $texto;
}


function loginError()
{
    $texto = '';
    if (isset(session()->msgLoginError)) {

        $texto .= '
                    <div class="alert alert-danger pr-5 pl-5 alert-dismissible fade show" role="alert">
                        <strong>' . session()->msgLoginError. '</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

    }

    return $texto;
}


/**
 * setaMsgErrorCampo
 *
 * @param string $chave 
 * @param array $errors 
 * @return varchar
 */
function setaMsgErrorCampo($chave, $errors)
{
    $texto = '';

    if (!empty($errors[$chave])) {
        $texto = '<div class="text-danger mt-2">' . $errors[$chave] . '</div>';
    }

    return $texto;
}

/**
 * setaValor
 *
 * @param string $chave 
 * @param array $vetorDados 
 * @param mixed $valorDefault 
 * @return string
 */
function setaValor($chave, $vetorDados, $valorDefault = '')
{
    if (!empty(set_value($chave))) {
        return set_value($chave);
    } else {
        if (isset($vetorDados[$chave])){
            return $vetorDados[$chave];
        } else {
            return $valorDefault;
        }
    }
}