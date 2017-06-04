<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once('templates/head.php');?>
<body class="jumbotron">
    <div class="container-fluid">
        <?php include('templates/nav.php'); ?>
        
        <div class="well well-lg">
            <div class="row">
                    <?php 

                    if(isset($_GET['sec'])){
                        $view=$_GET['sec'];
                    }else{
                        $view='principal';
                    }
                    include('views/'.$view.'.php');
                    ?>
                <?php include('templates/footer.php'); ?>
            </div>
        </div>
        
    </div>
</body>
</html>