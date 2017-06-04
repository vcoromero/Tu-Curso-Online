<?php
require_once ('modules/conexionDB.php');

class mAcceso{

    function validarLogin($usuario, $contrasena)
    {
        $cn=new conexionDB();
        $query=$cn-> prepare("SELECT * FROM usuarios where nombre=:usuario and contrasena=:contrasena and estado=1");
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':contrasena', $contrasena);
        $query->execute();
        if($query)
        {
            if($row=$query->fetch())
            {
                $_SESSION['estado']=1;
                $_SESSION['idUsuario'] = $row['idUsuario'];
                $_SESSION['nombreUsuario'] = $row['nombre'];
                $_SESSION['tipoUsuario'] = $row['fidtipousuario'];
                header("location: index.php");   
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
?>