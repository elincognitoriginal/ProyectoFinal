<?php
include("conexion.php");
session_start();

$correo = $_POST["correo"];
$password = $_POST["password"];

$sql = $conexion->prepare("SELECT id, nombre_usuario, password_hash FROM usuarios WHERE correo = ?");
$sql->bind_param("s", $correo);
$sql->execute();
$resultado = $sql->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($password, $usuario["password_hash"])) {

        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nombre"] = $usuario["nombre_usuario"];

        echo "<script>alert('Bienvenido ".$usuario['nombre_usuario']."'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }

} else {
    echo "<script>alert('El correo no existe'); window.location='login.php';</script>";
}
?>
