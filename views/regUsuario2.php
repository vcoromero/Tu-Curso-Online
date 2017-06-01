<div class="container">
    <div class="row">
        <div style="padding: 10px" class="col-md-12">
            <h2>Crea tu cuenta y comienza a aprender con nuestro asombroso contenido</h2>
        </div>
        
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Registra tus datos</legend>
                </div>
                <div class="col-md-4 col-md-offset-1">
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
                    <div class="form-group">
                        <a class="btn btn-success" href="?sec=regUsuario3" role="button">Siguiente</a>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group"> 
                        <label for="">Fecha de nacimiento:</label>                    
                        <input type="date" name="fechaNacimiento" class="form-control" required="required">                     
                    </div>
                    <div class="form-group"> 
                        <label for="">Dirección:</label>
                        <input type="text" name="direccion" class="form-control">
                    </div>
                    <div class="form-group"> 
                        <label for="">Sexo:</label>
                        
                        <div class="radio">
                            <label>
                                <input type="radio" name="sexo" value="M">M
                            </label>
                            <label>
                                <input type="radio" name="sexo" value="F">F
                            </label>
                        </div>                   
                    </div>
                </div>
        </form>
    </div>
</div>
