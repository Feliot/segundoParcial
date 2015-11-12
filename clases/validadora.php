<?php
session_start();

class validadora
{
    public static function validarUsuario($usuario)
    {
        if($usuario=="José" || $usuario=="María")
        {			

            setcookie("tiempo",date("Y-m-d H:i:s"),  time()-36000 , '/');
            $_SESSION['registrado']=$usuario;
            return true;


        }

        return false;
    }
    
    public static function validarSesionActual()
    {
        if(isset($_SESSION['registrado']))
        {
            $segundos = strtotime(date("Y-m-d H:i:s")) - strtotime($_SESSION['tiempo']);
            if ($segundos <= 5)
            {
                $_SESSION['tiempo']= date("Y-m-d H:i:s");
                return true;
            }
            
        }
        
        return false;
    }
}
?>