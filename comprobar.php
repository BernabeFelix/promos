<?php
include('php/inc.config.php');
include('php/inc.funciones.php');
$user=limpia_html(trim($_POST[user]));
$pass=limpia_html(trim($_POST[pass]));
if($user=="Usuario:" or $user==""){echo"Error: indica un nombre de usuario."; exit;}
if($pass=="Contrase&ntilde;a:" or $pass==""){echo"Error: indica una contraseña."; exit;}
$pass=md5($pass);

if($user!="administrador"){echo "Error: los datos son incorrectos."; exit;}
if($pass!=md5('HJR-657XT')){echo "Error: los datos son incorrectos."; exit;}
//$sql=mysql_query("select * from admin where usuario='".$user."'");
$_SESSION['id_admin']="1";
		session_start();
		echo"Datos Correctos";

/*		if($row=mysql_fetch_array($sql)){
			$sql1=mysql_query("select * from admin where usuario='".$user."' and pass='".$pass."'");
			if($row1=mysql_fetch_array($sql1)){
				$_SESSION[id_admin]=$row1[id];
				session_start();
				echo"Datos Correctos";
			}else{
				echo " Error: Datos Incorrectos.";
			}
			mysql_free_result($sql1);
		}else{
		echo " Error: Datos Incorrectos.";
}
mysql_free_result($sql);*/
?>