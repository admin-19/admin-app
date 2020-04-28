<!DOCTYPE html>
<html lang="es">
<?php   
$http  =     $_SERVER["REQUEST_SCHEME"];
$host  =     $_SERVER["HTTP_HOST"];
$path  =     $http."://".$host."/Rexpress/";
$url_style=  $path."view/style";
$url_js=     $path."view/js"; 
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="rex, rexpress, re">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href=<?php echo "'{$url_style}/header-style.css'";?>>
        <link rel="stylesheet" href=<?php echo "'{$url_style}/content-style.css'";?>>
        <link rel="stylesheet" href=<?php echo "'{$url_style}/foot-style.css'";?>>
        <link rel="stylesheet" href=<?php echo "'{$url_style}/comun-style.css'";?>>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src=<?php echo "'{$url_js}/jquery-3.3.1.js'"?>></script>
        <script src=<?php echo "'{$url_js}/rexpress-ready.js'"?>></script>
        <script src=<?php echo "'{$url_js}/rexpress-1.0.0.js'"?>></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <title>Rexpress</title>
    </head>
    <body>
        <div class="contenedor-body">
        <div class="rexp-error"></div>
<?php 
        session_start();
        include 'view/templates/header.php';
        include 'view/templates/content.php';
        include 'view/templates/foot.php';
?>
    <!-- popUp -->
        </div>
<?php 
        include 'view/templates/popupform.php'
?>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>