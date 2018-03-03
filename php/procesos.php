<?
session_start();
require('inc.funciones.php');
include('inc.config.php');
if($_SERVER['HTTP_REFERER']==""){
	echo "<script>location.href='../';</script>";
}
if($_GET[rem]=="of"){
	$sql=mysql_query("select * from ofertas where id='$_POST[of]' and id_u='$_SESSION[id_user]'");
	if($row=mysql_fetch_array($sql)){
	unlink("../images/logos/movil_".$row[img]);
	unlink("../images/logos/pc_".$row[img]);
	mysql_query("delete from ofertas where id='$_POST[of]' and id_u='$_SESSION[id_user]'");
	}mysql_free_result($sql);
	echo "La oferta fué removido correctamente.";
}
if($_GET[m]=="a"){
	mysql_query("update usuarios set activo='si' where id='".$_POST[val]."'");
	$sql=mysql_query("select * from ofertas where id_u='".$_POST[val]."'");
	if($row=mysql_fetch_array($sql)){
		mysql_query("Update ofertas set activo='si' where id_u='".$_POST[val]."'");
	}
	mysql_free_result($sql);
	echo"La empresa fué activada correctamente.";
}
if($_GET[m]=="d"){
	mysql_query("update usuarios set activo='no' where id='".$_POST[val]."'");
	$sql=mysql_query("select * from ofertas where id_u='".$_POST[val]."'");
	if($row=mysql_fetch_array($sql)){
		mysql_query("Update ofertas set activo='no' where id_u='".$_POST[val]."'");
	}
	mysql_free_result($sql);
	echo"La empresa fué desactivada correctamente.";
}
if($_GET[m]=="r"){
	$sql=mysql_query("select * from ofertas where id='".$_POST[val]."'");
	if($row=mysql_fetch_array($sql)){
	unlink("../images/logos/movil_".$row[img]);
	unlink("../images/logos/pc_".$row[img]);
	}mysql_free_result($sql);
	mysql_query("delete from ofertas where id_u='".$_POST[val]."'");
	mysql_query("delete from usuarios where id='".$_POST[val]."'");
	echo "La empresa fué removido correctamente junto con sus ofertas.";
}
?>