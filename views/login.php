<?php
if(isset($_POST['usuario']) && isset($_POST['contrasena']))
{
include('modules/mAcceso.php');
$obj=new mAcceso();
$data=$obj->validarLogin($_POST['usuario'],$_POST['contrasena']);
}
?>

<div class="container">
    <div class="row">
        <div style="padding: 10px" class="col-md-12">
            <h2>Inicia sesión para ver los más recientes cursos que tenemos aquí</h2>
        </div>
        <div style="padding: 10px" class="col-md-4 col-md-offset-4">
                <?php if(isset($_GET['msg'])):?>
                    <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_GET['msg']; ?></div>
                <?php endif; ?>
                
            <div class="panel panel-success">
                <div class="panel-body">                            
                    <form method="POST">
                        <legend>Iniciar sesión</legend>                            
                        <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required="required">
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" placeholder="Ingrese su contraseña" required="required">
                        </div>
                        <a href="?sec=recuperar-contrasena">¿Olvidaste la contraseña?</a>
                        <button style="margin-top:10px" type="submit" class="btn btn-block btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>