<?php
include("conexion.php");

$usuario = $_POST["nombre_usuario"];
$correo = $_POST["correo"];
$password = $_POST["password"];

$hash = password_hash($password, PASSWORD_BCRYPT);

$check = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
$check->bind_param("s", $correo);
$check->execute();
$check->store_result();
if($check->num_rows > 0){
    echo "<script>alert('El correo ya está registrado'); window.location='registro.html';</script>";
    exit;
}

// Registrar usuario
$sql = $conexion->prepare("INSERT INTO usuarios (nombre_usuario, correo, password_hash) VALUES (?, ?, ?)");
$sql->bind_param("sss", $usuario, $correo, $hash);

if ($sql->execute()) {
    echo "<script>alert('Registro exitoso'); window.location='login.html';</script>";
} else {
    echo "<script>alert('Error: usuario o correo ya existe'); window.location='registro.html';</script>";
}
?>
