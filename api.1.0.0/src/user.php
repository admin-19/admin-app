<?php 
/*$user=isset($_POST['usu'])?$_POST['usu']: "null";
$password=isset($_POST['pass'])?$_POST['pass']: "null";


$link = mysqli_connect('localhost', 'root', '', 'test');
if (!$link) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$stmt = mysqli_prepare($link, "SELECT * FROM test.usuario WHERE nombre='?' and password='?'");
mysqli_stmt_bind_param($stmt, 'ss', $user, $password);
mysqli_stmt_execute($stmt);
$filasInsertadas=mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);*/
phpinfo();      
?>