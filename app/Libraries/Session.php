<?php

namespace App\Lib;

class Session
{
    /*
    *   Seta um valor ($value) para a sessão indicada na $key
    */

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /*
    *   Recupera o valor de  uma sessão indicada em $key
    */

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    /*
    *   Destroy/exclui uma sessão indica em $key
    */

    public static function destroy($key)
    {
        unset($_SESSION[$key]);
    }

    /*
    *   Retornar valor da sessão indicada no parametro $key e destroy a sessão
    */

    public static function getDestroy($key)
    {
        $ret = Session::get($key);
        Session::destroy($key);
        
        return $ret;
    }

}