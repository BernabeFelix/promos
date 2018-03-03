<?
session_start();
if($_GET[op]=="comprueba"){
require('php/inc.funciones.php');
include('php/inc.config.php');
	$nombre=limpia_html(trim($_POST[nombre]));
	$apellidos=limpia_html(trim($_POST[apellidos]));
	$empresa=limpia_html(trim($_POST[empresa]));
	$direccion=limpia_html(trim($_POST[direccion]));
	$municipio=limpia_html(trim($_POST[municipio]));
	$col=limpia_html(trim($_POST[colonia]));
	$cp=limpia_html(trim($_POST[cp]));
	$estado=limpia_html(trim($_POST[estado]));
	$email=limpia_html(trim($_POST[email]));
	$tel=limpia_html(trim($_POST[tel]));
	$serv=limpia_html(trim($_POST[serv]));
	$user=limpia_html(trim($_POST[user]));
	$pass1=limpia_html(trim($_POST[pass1]));
	$pass2=limpia_html(trim($_POST[pass2]));
	if($nombre=="*Nombre:" or $nombre==""){echo "Error: el nombre es obligatorio."; exit;}
	if($apellidos=="*Apellidos:" or $apellidos==""){echo "Error: los apellidos son obligatorios."; exit;}
	if($empresa=="*Empresa:" or $empresa==""){echo "Error: el nombre de la empresa es obligatorio."; exit;}
	if($direccion=="*Direcci&oacute;n:" or $direccion==""){echo "Error: la dirección es obligatoria."; exit;}
	if($col=="*Colonia:" or $col==""){echo "Error: la colonia es obligatoria."; exit;}
	if($municipio=="*Municipio:" or $municipio==""){echo "Error: el municipio es obligatorio."; exit;}
	if($cp=="*C&oacute;digo Postal:" or $cp==""){echo "Error: el código postal es obligatorio."; exit;}
	if($estado=="*Estado:" or $estado==""){echo "Error: el estado es obligatorio."; exit;}
	if($email=="*E-Mail:" or $email==""){echo "Error: el e-mail es obligatorio."; exit;}
	if($tel=="*Tel&eacute;fono:" or $tel==""){echo "Error: el teléfono es obligatorio."; exit;}
	if($serv=="*Servicio:" or $serv==""){echo "Error: el servicio es obligatorio."; exit;}
	if($user=="*Usuario:" or $user==""){echo "Error: el nombre de usuario es obligatorio."; exit;}
	if($pass1=="Contrase&ntilde;a:" or $pass1==""){echo "Error: la contraseña es obligatoria."; exit;}
	if($pass2=="Repetir Contrase&ntilde;a:" or $pass2==""){echo "Error: repite la contraseña."; exit;}
	if($pass1!=$pass2){echo "Error: las contraseñas no coinciden."; exit;}
	$pass=md5($pass1);
	$sql=mysql_query("select * from usuarios  where usuario='".$user."'");
	if($row=mysql_fetch_array($sql)){
		echo "Error: el usuario ".$user." ya se encuentra registrado."; exit;
	}mysql_free_result($sql);
	mysql_query("insert into usuarios (usuario, pass, activo, nombre, apellidos, empresa, direccion, colonia, municipio, cp, estado, email, tel, servicio) values('$user','$pass','no','$nombre','$apellidos','$empresa','$direccion','$col','$municipio','$cp','$estado','$email','$tel','$serv')");
	$email_msg="<strong>Nombre:</strong> $nombre<br>
		<strong>Apellidos:</strong> $apellidos<br>		
		<strong>Empresa:</strong> $empresa<br>
		<strong>Direcci&oacute;n:</strong> $direccion<br>
		<strong>Municipio:</strong> $municipio<br>
		<strong>Colonia:</strong> $col<br>
		<strong>C&oacute;digo Postal:</strong> $cp<br>
		<strong>Estado:</strong> $estado<br>
		<strong>E-mail:</strong> $email<br>
		<strong>Tel&eacute;fono:</strong> $tel<br>		
		<strong>Servicio:</strong> $serv<br>
		";
		$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
		$headers .= "From: Todalasemana.com <admin@todalasemana.com> \r\n";
		$asunto=html_entity_decode ("Hay un nuevo usuario registrado");
		mail('administracion@todalasemana.com',$asunto,$email_msg,$headers);//administracion@todalasemana.com
		$mail="
		Bienvenido a Todalasemana.com<br><br>
		Tus datos de accceso son:<br><br>
		Usuario: $user<br>
		Contrase&ntilde;a: $pass1<br>
		";
		$head .= "Content-type: text/html; charset=iso-8859-1 \r\n";
		$head .= "From: Todalasemana.com <admin@todalasemana.com> \r\n";
		mail($email,'Tus datos de registro en Todalasemana.com',$mail,$head);
		$sql=mysql_query("select * from usuarios where pass='".$pass."' and usuario='".$user."'");
		$row=mysql_fetch_array($sql);
		$_SESSION[id_user]=$row[id];
		session_start();
		mysql_free_result($sql);
	echo"Usuario registrado con éxito.";	
}else{
if(isset($_SESSION[id_user])){
	echo"<script>location.href='./cuenta.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Promociones, descuentos, paquetes, regalos, restaurantes, café, bar, antro, discotheque, lanzamiento, nuevos productos, Mobile marketing, móvil marketing, marketing online, cupones, publicidad en línea, publicidad accesible, publicidad efectiva, publicidad barata. " />

<title>Todalasemana.com</title>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.corners.js"></script>
<script type="text/javascript" src="js/ventanas.js"></script>
<script type="text/javascript" src="js/web.js"></script>

<link href="css/web.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
  <div id="text_right"><span>elige el d&iacute;a de tu preferencia</span></div>
  <div id="menu">
    	<a href="./?dia=lunes"<?=$lun_activo?>><div id="lun"><span>Lunes</span></div></a>
        <a href="./?dia=martes"<?=$mar_activo?>><div id="mar"><span>Martes</span></div></a>
        <a href="./?dia=miercoles"<?=$mie_activo?>><div id="mie"><span>Mi&eacute;rcoles</span></div></a>
        <a href="./?dia=jueves"<?=$jue_activo?>><div id="jue"><span>Jueves</span></div></a>
        <a href="./?dia=viernes"<?=$vie_activo?>><div id="vie"><span>Viernes</span></div></a>
        <a href="./?dia=sabado"<?=$sab_activo?>><div id="sab"><span>S&aacute;bado</span></div></a>
        <a href="./?dia=domingo"<?=$dom_activo?>><div id="dom"><span>Domingo</span></div></a>
  </div>
</div>
<div id="sep_top"></div>
<div style="margin:auto; width:1015px;">

  <div id="contenedor" style="background:none;">
  	<div id="cont_reg">
    	<h1>Registrate Completamente Gratis</h1>
        <h2>Los campos marcados con * son obligatorios.</h2>
        <form id="formreg" action="registro.php">
        <table cellpadding="0" cellspacing="3" border="0" width="800" class="tblreg">
          <tr>
            <td><input type="text" value="*Nombre:" name="nombre" onfocus="javascript:if(this.value=='*Nombre:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='*Nombre:';}" />
            </td>
            <td><input type="text" value="*Apellidos:" name="apellidos" onfocus="javascript:if(this.value=='*Apellidos:'){ this.value='';}" onBlur="javascript:if(this.value==''){ this.value='*Apellidos:';}" />
            </td>
            <td><input type="text" value="*Empresa:" name="empresa" onfocus="javascript:if(this.value=='*Empresa:'){ this.value='';}" onBlur="javascript:if(this.value==''){ this.value='*Empresa:';}" />
            </td>
          </tr>
          <tr>
            <td colspan="2"><input type="text" id="largo" name="direccion" value="*Dirección:" onfocus="javascript:if(this.value=='*Dirección:'){ this.value='';}" onBlur="javascript:if(this.value==''){ this.value='*Dirección:';}" /></td>
            <td><input type="text" value="*Colonia:" name="colonia" onfocus="javascript:if(this.value=='*Colonia:'){ this.value='';}" onBlur="javascript:if(this.value==''){this.value='*Colonia:';}" />
            </td>
          </tr>
          <tr>
            <td><input type="text" value="*Municipio:" name="municipio" onfocus="javascript:if(this.value=='*Municipio:'){ this.value='';}" onBlur="javascript:if(this.value==''){this.value='*Municipio:';}" />
            </td>
            <td><input type="text" value="*Código Postal:" name="cp" onfocus="javascript:if(this.value=='*Código Postal:'){ this.value='';}" onBlur="javascript:if(this.value==''){ this.value='*Código Postal:';}" />
            </td>
            <td><input type="text" value="*Estado:" name="estado" onfocus="javascript:if(this.value=='*Estado:'){ this.value='';}" onBlur="javascript:if(this.value==''){ this.value='*Estado:';}" />
            </td>
          </tr>
          <tr>
            <td><input type="text" value="*E-Mail:" name="email" onfocus="javascript:if(this.value=='*E-Mail:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='*E-Mail:';}" />
            </td>
            <td><input type="text" value="*Teléfono:" name="tel" onfocus="javascript:if(this.value=='*Teléfono:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='*Teléfono:';}" />
            </td>
            <td><input type="text" value="*Servicio:" name="serv" onfocus="javascript:if(this.value=='*Servicio:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='*Servicio:';}" />
            </td>
          </tr>
        </table>
        <div style="height:1px; background:#FFF; margin:25px 4px;"></div>
        <center><h1>Datos de Cuenta</h1></center>
        <table cellpadding="0" cellspacing="3" border="0" width="800" class="tblreg">
          <tr>
            <td><input type="text" value="*Usuario:" onfocus="javascript:if(this.value=='*Usuario:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='*Usuario:';}" name="user" />
            </td>
            <td><input type="text" value="Contraseña:" name="pass1" onfocus="javascript:if(this.value=='Contraseña:'){ this.value=''; this.type='password'}" onBlur="javascript:if(this.value==''){ this.type='text'; this.value='Contraseña:';}" />
            </td>
            <td><input type="text" value="Repetir Contraseña:" name="pass2" onfocus="javascript:if(this.value=='Repetir Contraseña:'){ this.value=''; this.type='password'}" onBlur="javascript:if(this.value==''){ this.type='text'; this.value='Repetir Contraseña:';}" />
            </td>
          </tr>
        </table>
        <div id="btnsubmit"><input type="submit" value="&nbsp;" /></div>
        </form>
    </div>  
  </div>
    <div class="limpia_o">
    
    </div>
    <div id="menu2"><a href="./">inicio</a>•<a href="quien">Quienes Somos</a>•<a href="servicios">Servicios</a>•<a href="contacto">Contacto</a></div>
</div>
<div id="pie">
<div>Copyright &copy; 2011 - 2012 Todalasemana.com&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Todos los derechos reservados.&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;<a href="politicas.php">Políticas de Uso</a></div>
<div><span>Desarrollo por GrupoCybernet.com</span></div>
</div>
</body>
</html>
<? include('php/analytics.php');?>
<? }?>