<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">TU CURSO ONLINE</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cursos<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="?sec=cursos-actuales">Actuales</a></li>
                    <li><a href="?sec=cursos-preparacion">Preparación</a></li>
                </ul> 
            </li>
            <li><a href="?sec=ser-tutor">¡¿Quieres ser tutor?!</a></li>
            <li><a href="?sec=conocenos">Conócenos</a></li>
        </ul>
         <ul class="nav navbar-nav navbar-right">
         <?php       
            if(!isset($_SESSION['estado'])){ ?>
           <li><a href="?sec=login">Iniciar sesión</a></li>
            <li><a href="?sec=regUsuario">Registrarse</a></li>
            <?php }else { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nombreUsuario']?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="?sec=misDatos">Mis datos</a></li>
                    <?php if($_SESSION['tipoUsuario']==1):?>
                        <li><a href="?sec=panelAdministrativo">Panel administrativo</a></li>
                    <?php endif;?>
                    <?php if($_SESSION['tipoUsuario']==2):?>
                        <li><a href="?sec=panelTutor">Panel Tutor</a></li>
                    <?php endif;?>
                    <?php if($_SESSION['tipoUsuario']==3):?>
                        <li><a href="?sec=panelTutorado">Panel Tutorado</a></li>
                    <?php endif;?>
                    <li><a href="salir.php">Cerrar sesión</a></li>
                </ul> 
            </li>
          <?php 
          }
        ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
