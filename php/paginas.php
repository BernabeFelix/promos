<?
if($_SERVER['HTTP_REFERER']==""){
	echo "<script>location.href='../';</script>";
}
if($_POST[pag]=="quien"){
	?>
    <div id="tit_pag">¿Quienes Somos?</div>
    <div id="text_pag">Todalasemana es un portal que se dedica a satisfacer la necesidad el mkt online y el mobile mkt, debido a las ventajas que estos servicios ofrecen a las marcas. Durante los últimos anos las marcas han querido impactar a nichos muy específicos y amplificar sus estrategias de marketing, tanto para captar a nuevos clientes como para fidelizar a los que ya tienen.<br><br>
    Ante esta necesidad de implementar nuevos métodos de marketing surge todalasemana.com. Empresa dedicada a la publicación y difusión online de material promocional (descuentos, paquetes, lanzamiento de nuevos productos, etc).
    </div>
    <?
}
if($_POST[pag]=="servicios"){
	?>
    <div id="tit_pag">Nuestros Servicios</div>
    <div id="text_pag">El acelerado crecimiento del uso de internet y de los dispositivos móviles ha modificado las formas del marketing y con ello el interactuar de los clientes con las marcas. Ante el crecimiento exponencial del uso de dispositivos que integran servicios de internet, hemos identificado la necesidad de implementar el mobile y online marketing. <br><br>
    Ante la necesidad de utilizar herramientas como el mkt online y el mobile mkt,                     Todalasemana es un portal dedicado a la publicación y difusión de material promocional tales como ofertas, descuentos, paquetes, lanzamiento de nuevos productos, etc.
    </div>
    <?
}
if($_POST[pag]=="contacto"){
	?>
    <div id="tit_pag">Contacto</div>
    <div id="img_cont">
    	<div id="dato">TodalaSemana.com<br>
Gerente de Ventas<br>
Guillermo Avila</div>
		<div class="datos">Cel. (33) 3377 9607</div>
        <div class="datos">info@todalasemana.com<br>
ventas@todalasemana.com</div>
    </div>
    <?
}
if($_POST[pag]=="politicas"){
	?>
    <div id="tit_pag">Políticas de Uso</div>
    <div id="text_pag">El acelerado crecimiento del uso de internet y de los dispositivos móviles ha modificado las formas del marketing y con ello el interactuar de los clientes con las marcas. Ante el crecimiento exponencial del uso de dispositivos que integran servicios de internet, hemos identificado la necesidad de implementar el mobile y online marketing. <br><br>
    Ante la necesidad de utilizar herramientas como el mkt online y el mobile mkt,                     Todalasemana es un portal dedicado a la publicación y difusión de material promocional tales como ofertas, descuentos, paquetes, lanzamiento de nuevos productos, etc.
    </div>
    <?
}
if($_POST[pag]=="lost"){
	?>
<script type="text/javascript">
$(function(){
	$('#formlost').submit(function () {
		url = $("#formlost").attr( 'action' );
		var serializedForm = $("#formlost").serialize();
		$.post(url, serializedForm,
			  function(data){
			  alert(data);
			 var correcto=data.indexOf('Error');
			  if (correcto!= -1 ) {
				
			}else{
				location.href='./';
			}
		});
		return false;
	});
	
});
</script>
    <div id="tit_pag">¿Olvidaste tu Contraseña?</div>
<form id="formlost" action="php/paginas.php?pag=lost2">
<div style="font-size:12px; width:380px; margin:20px auto;">Ingresa el correo electronico que utilizaste para registrarte.<br />
*La contraseña sera enviada a esta cuenta de correo electronico.</div>

<table width="350" border="0" cellspacing="0" cellpadding="0" align="center" id="tbllost">
      <tr>
        <td width="227" id="text"><input type="text" name="correo" value="*Correo electronico:"  onfocus="javascript:if(this.value=='*Correo electronico:') this.value='';" onBlur="javascript:if(this.value=='') this.value='*Correo electronico:';" /></td>
        <td width="123" align="right" id="submit"><input type="submit" value="&nbsp;" /></td>
      </tr>
</table>
</form>
<br /><br />
<?
}
if($_GET[pag]=="lost2"){
include('inc.config.php');
include('inc.funciones.php');
$email=limpia_html(trim($_POST[correo]));
if($email=="*Correo electronico:" or $email==""){echo"Error: indica tu Correo electronico."; exit;}

	$sql=mysql_query("select * from usuarios where email='".$email."'");
		if($row=mysql_fetch_array($sql)){
			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
			for($i=0;$i<22;$i++) {
				$cad .= substr($str,rand(0,62),1);
			}
			$cad=$cad;
			mysql_query("update usuarios set md5='".$cad."' where id='".$row[id]."'");
			$email_msg='<strong>'.$row[nombre].'</strong>, no es posible recuperar la contrase&ntilde;a, usa el siguiente link para cambiarla.<br><br>
			<a href="http://www.todalasemana.com/?token='.$cad.'">http://www.todalasemana.com/?token='.$cad.'</a>
		
		';
		$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
		$headers .= "From: Todalasemana.com <administracion@todalasemana.com> \r\n";
		$asunto=html_entity_decode ("Recuperaci&oacute;n de contrase&ntilde;a");
		mail($email,$asunto,$email_msg,$headers);//
		echo "Se te ha enviado un mail con el proceso para cambiar tu contraseña.";
		}else{
			echo "Error: el correo electrónico no se encuentra registrado.";
		}mysql_free_result($sql);
}
if($_GET[pag]=="lost3"){
	?>
     <script type="text/javascript">
$(function(){
	$('#formlost1').submit(function () {
		url = $("#formlost1").attr( 'action' );
		var serializedForm = $("#formlost1").serialize();
		$.post(url, serializedForm,
			  function(data){
			  alert(data);
			 var correcto=data.indexOf('Error');
			  if (correcto!= -1 ) {
				
			}else{
				location.href='./cuenta.php';
			}
		});
		return false;
	});
	
});
</script>
    <div id="tit_pag">Ingresa tu nueva contraseña</div>
<div style="font-size:12px; width:380px; margin:20px auto;"></div>
<form id="formlost1" action="php/paginas.php?pag=lost4">
<input type="hidden" value="<?=$_POST[md5]?>" name="md" />
<table width="350" border="0" cellspacing="5" cellpadding="0" align="center" id="tbllost">
      <tr>
        <td width="227" id="text"><input type="text" name="pass1" value="*Nueva contraseña:"  onfocus="javascript:if(this.value=='*Nueva contraseña:'){ this.value=''; this.type='password';}" onBlur="javascript:if(this.value==''){ this.type='text';  this.value='*Nueva contraseña:';}" tabindex="1" /></td>
        <td width="123" rowspan="2" align="right" id="submit"><input type="submit" value="&nbsp;" style="background:url(images/btncambiar.jpg) 0 0 no-repeat;" tabindex="3" /></td>
      </tr>

      <tr>
        <td width="227" id="text"><input type="text" name="pass2" value="*Repetir Nueva contraseña:"  onfocus="javascript:if(this.value=='*Repetir Nueva contraseña:'){ this.value=''; this.type='password'; }" onBlur="javascript:if(this.value==''){ this.type='text'; this.value='*Repetir Nueva contraseña:';}" tabindex="2" /></td>
      </tr>
</table>
</form>
    <?
}
if($_GET[pag]=="lost4"){
include('inc.config.php');
include('inc.funciones.php');
$pass1=limpia_html(trim($_POST[pass1]));
$pass2=limpia_html(trim($_POST[pass2]));
if($pass1=="*Nueva Contrase&ntilde;a:" or $pass1==""){echo"Error: indica tu nueva contraseña."; exit;}
if($pass2=="*Repetir Nueva Contrase&ntilde;a:" or $pass2==""){echo"Error: repite tu nueva contraseña."; exit;}
if($pass1!=$pass2){echo"Error: las contraseñas no coinciden.";}
$pass=md5($pass1);
$sql=mysql_query("select * from usuarios where md5='".$_POST[md]."'");
if($row=mysql_fetch_array($sql)){
	mysql_query("update usuarios set pass='".$pass."', md5='' where md5='".$_POST[md]."'");
	$_SESSION[id_user]=$row[id];
	session_start();
	$mail="
		Estos son tus nuevos datos en Todalasemana.com<br><br>
		Usuario: $row[usuario]<br>
		Contrase&ntilde;a: $pass1<br>
		";
		$head .= "Content-type: text/html; charset=iso-8859-1 \r\n";
		$head .= "From: Todalasemana.com <admin@todalasemana.com> \r\n";
		mail($row[email],'Tus nuevos datos de acceso en Todalasemana.com',$mail,$head);
}
mysql_free_result($sql);
echo "Tu contraseña ha sido modificado con éxito.";
}
?>