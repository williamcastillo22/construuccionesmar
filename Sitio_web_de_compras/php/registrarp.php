<?php
session_start();
include("conexion.php"); 

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    
    if (password_verify($password, $fila['password'])) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['acceso_formulario'] = true; 
        header("Location: formulario.php"); 
        exit();
    } else {
        echo "<script>
                alert('Usuario o contraseña incorrectos');
                window.location.href = '../admin/index.php'; 
              </script>";
    }
} else {
    echo "<script>
            alert('Usuario o contraseña incorrectos');
            window.location.href = '../admin/index.php'; 
          </script>";
}
?>
