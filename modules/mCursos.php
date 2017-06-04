<?php
require_once ('modules/conexionDB.php');

class mCursos
{
    public function getCursosActivos()
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * FROM cursos WHERE estado=1');
        $qr->execute();
        if ($qr)
        {
            return $qr->fetchAll();
        }
    }
    public function getCursosPreparacion()
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * FROM cursos WHERE estado=2');
        $qr->execute();
        if ($qr)
        {
            return $qr->fetchAll();
        }
    }
}
?>