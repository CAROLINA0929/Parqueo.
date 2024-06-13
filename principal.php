<?php 
include  ('app/config.php');
include  ('LAYOUT/ADMIN/datos_usuario_sesion.php');
session_start();

if(isset($_SESSION['usuario_sesion'])){
    //echo "existe sesion";
    ?>
    
    <?php
    
}else {
    //echo"para ingresar a esta plataforma debe iniciar sesion";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include('layout/Admin/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('layout/Admin/menu.php'); ?>
<div class="content-wrapper">
<CENTER>
<H2>SISTEMA DE GESTION DE PARQUEO ORTCH</H2>
</CENTER>


</div>
<?php include('layout/Admin/footer.php'); ?>
</div>
<?php include('Layout/Admin/footer_links.php'); ?>
</body>
</html>
