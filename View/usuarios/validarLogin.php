<?php 

include '../../Model/conexion.php';

$userLogin = $_POST['userLogin'];
$querySession = "SELECT * FROM usuarios WHERE Usuarios = '$userLogin' ";
$resultadoSession = mysqli_query($conexion, $querySession);
$filasLogin = mysqli_num_rows($resultadoSession);
if ($filasLogin) {
    
    $sql = $conexion->query("INSERT INTO registro_ingresos (registro_de_ingreso) VALUES('$userLogin')");
    header('Location:../../enrutadores.php');
}else {
    echo "<script> alert('Usuario no encontrado en la base de datos'); window.history.go(-1); </script>";
}
?>