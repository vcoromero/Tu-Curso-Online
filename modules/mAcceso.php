<?php
require_once ('modules/conexionDB.php');

class mAcceso{

    function validarLogin($usuario, $contrasena)
    {
        $cn=new conexionDB();
        $query=$cn-> prepare("SELECT * FROM usuarios where nombre=:usuario and contraseña=:contrasena and estado=1");
        $query->bindParam(':usuario',$usuario);
        $query->bindParam(':contrasena',$contrasena);
        $query->execute();
        if($query)
        {
            session_start(); 
            if($row= $query->fetch())
            {
            //     $_SESSION['idUsuario'] = $row['idUsuario'];
            //     $_SESSION['matriculaUsuario'] = $row['matriculaUsuario'];	
            //     $_SESSION['tipoUsuario'] =  utf8_encode($row['nombreTipoUsuario']);
            //     $_SESSION['nombreUsuario'] = utf8_encode($row['nombre']);	
            //     $_SESSION['idPersona'] = $row['idPersona'];	
            //     $_SESSION['idTipoUsuario']=$row['idTipoUsuario'];
                
                $msg="<strong>¡SE LOGEO!:</strong> Inicio de sesión perfecto";
                header("location: ?sec=login&msg=".$msg);   
                return true;
            }
            else
            {
                $msg="<strong>¡ERROR AL LOGEARSE!:</strong> Verifique sus datos";
                header("location: ?sec=login&msg=".$msg);             
                return false;
            }
        }
    }
}