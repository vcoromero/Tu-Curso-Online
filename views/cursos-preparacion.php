<?php

include_once('modules/mCursos.php');
$obj=new mCursos();
$data=$obj->getCursosPreparacion();
?>
<div style="text-align: center"class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Cursos en preparación, puedes votar cual será el siguiente.</h2>
        </div>
        <div style="margin-top:2%" class="col-md-12">
            <?php foreach ($data as $row):?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">    
                        <img src="assets/img/<?php echo $row['rutaImg']?>.png" class="img-responsive" alt="Image">
                        <p style="margin-top:2%"><?php echo $row['nombre']?></p> 
                        <figcaption><?php echo $row['descripcion']?></figcaption>
                        <a class="btn btn-primary btn-block btn-lg" href="?sec=cursoPreparacion&id=<?php echo $row['idcursos']?>" role="button">Ver</a> 
                    </div>
                </div>    
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>