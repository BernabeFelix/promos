<?php
include 'php/inc.config.php';
include 'php/inc.funciones.php';
$user = limpia_html(trim($_POST['user']));
$pass = limpia_html(trim($_POST['pass']));
if ($user == "Usuario:" or $user == "") {echo "Error: indica un nombre de usuario.";exit;}
if ($pass == "Contrase&ntilde;a:" or $pass == "") {echo "Error: indica una contraseña.";exit;}
$pass = md5($pass);
$sql = mysqli_query($mysqli, "select * from usuarios where usuario='" . $user . "'");
if ($row = $sql -> fetch_array()) {
    $sql1 = mysqli_query($mysqli, "select * from usuarios where usuario='" . $user . "' and pass='" . $pass . "'");
    if ($row1 = $sql1 -> fetch_array()) {
        $_SESSION['id_user'] = $row1['id'];
        session_start();
        echo "Datos Correctos";
    } else {
        echo " Error: Datos Incorrectos.";
    }
    mysqli_free_result($sql1);
} else {
    echo " Error: Datos Incorrectos.";
}
mysqli_free_result($sql);
