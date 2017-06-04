<?php
require_once('modules/conexionDB.php');
class mRegistro
{
    public function nuevoUsuario($usuario, $contrasena, $nombre, $appaterno, $apmaterno, $fechaNacimiento, $sexo, $correo, $telefono, $domicilio)
    {
        
        $cn=new conexionDB();
        $qr=$cn->prepare('INSERT INTO personas(nombre, appaterno, apmaterno, fecha_nacimiento, sexo, correo, telefono, domicilio, estado)
        VALUES(:nombre,:appaterno,:apmaterno,:fechaNacimiento,:sexo,:correo,:telefono,:domicilio, 1)');
        $qr->bindParam(':nombre',$nombre);
        $qr->bindParam(':appaterno',$appaterno);
        $qr->bindParam(':apmaterno',$apmaterno);
        $qr->bindParam(':fechaNacimiento',$fechaNacimiento);
        $qr->bindParam(':sexo',$sexo);
        $qr->bindParam(':correo',$correo);
        $qr->bindParam(':telefono',$telefono);
        $qr->bindParam(':domicilio',$domicilio);
        $qr->execute();
        if($qr)
        {
            $qr2=$cn->prepare("SELECT *FROM personas WHERE nombre=:nombre AND estado=1");
            $qr2->bindParam(':nombre',$nombre);
            $qr2->execute();
            if($qr2)
            {
                $row=$qr2->fetch();
                $id=$row['idpersonas'];
                $qr3=$cn->prepare('INSERT INTO usuarios(nombre, contrasena, estado, fidtipousuario, fidpersonas) VALUES(:usuario, :contrasena, 1, 3, :id)');
                $qr3->bindParam(':usuario', $usuario);
                $qr3->bindParam(':contrasena', $contrasena);
                $qr3->bindParam(':id', $id);
                $qr3->execute();
                if($qr3)
                {
                    include('modules/mAcceso.php');
                    $obj=new mAcceso();
                    $data=$obj->validarLogin($_POST['usuario'],$_POST['contrasena']);
                    return true;
                }
            }
        }
    }
}
?>