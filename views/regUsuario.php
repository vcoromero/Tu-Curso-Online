<?php
require_once('modules/mRegistro.php');
$obj= new mRegistro();

if(isset($_POST['btnEnviar']))
{
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena']; 
    $correo=$_POST['correo'];
    $nombre=$_POST['nombre'];
    $appaterno=$_POST['appaterno']; 
    $apmaterno=$_POST['apmaterno'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    $sexo=$_POST['sexo'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];

    $obj->nuevoUsuario($usuario, $contrasena, $nombre, $appaterno, $apmaterno, $fechaNacimiento, $sexo, $correo, $telefono, $direccion);
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Crea tu cuenta y comienza a aprender con nuestro asombroso contenido</h2>
        </div>
        <div class="col-md-12">
            <form action="" method="POST" role="form">
                    <legend>Nuevo usuario de Tu Curso Online</legend>                            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Correo:</label>
                    <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo" required="required">
                </div>                                
                <div class="form-group">
                    <label for="">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required="required">
                </div>                                
                <div class="form-group">
                    <label for="">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasena" placeholder="Ingrese su contraseña" required="required">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="">Apellido paterno:</label>
                    <input type="text" name="appaterno" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="">Apellido materno:</label>
                    <input type="text" name="apmaterno" class="form-control" required="required">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group"> 
                    <label for="">Fecha de nacimiento:</label>                    
                    <input type="date" name="fechaNacimiento" class="form-control" required="required">                     
                </div>
                <div class="form-group"> 
                    <label for="">Dirección:</label>
                    <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group"> 
                    <div class="col-md-6">
                        <label for="">Sexo:</label>        
                        <div class="radio">
                            <label><input type="radio" name="sexo" value="M">M</label>
                            <label><input type="radio" name="sexo" value="F">F</label>
                        </div>                   
                    </div>
                    <div class="col-md-6">
                        <label for="">Teléfono:</label>
                        <input type="tel" name="telefono" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="btnEnviar">Finalizar Registro</button>
            </div>
            </form>
        </div>
    </div>
</div>