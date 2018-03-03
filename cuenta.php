<?
session_start();
require('php/inc.funciones.php');
include('php/inc.config.php');
if(!isset($_SESSION[id_user])){
	echo"<script>location.href='./registro.php';</script>";
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
<? if(isset($_SESSION[id_user])){?>
<script type="text/javascript" src="js/user.js"></script><? }?>
<link href="css/web.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
  <div style="float:right; background:#4ab8e6;  width:765px; height:136px;">
	<div id="div_logout" style="margin-right:25px; margin-top:15px; background:url(images/logout.png) center left no-repeat; width:150px; padding:15px 0; float:right;"><a href="#" onclick="logout(); return false;">Salir y Cerrar Sesión</a></div>
    <div style="clear:both;"></div>
    <div id="cuenta_arriba">Crea tu <span>Cupon</span>, <span>Oferta</span>, <span>Promocion</span>...</div>
  </div>
</div>
<div id="sep_top"></div>
<div style="margin:auto; width:1015px;">
  <div class="limpia"></div>
  <div id="contenedorc">
  	  <div style="float:right; width:531px; height:300px;">
      <div style="font-size:14px; color:#212121;">Podrás agregar ofertas y promociones de manera ilimitada. Estas únicamente se     mostrarán al momento de contratar uno de nuestros paquetes.
</div>
      	<div style="width:531px; background:#e6e6e6; margin-top:20px; height:210px;" class="redondea">
        
        	<div style="padding:20px;">
            <?
			$sql=mysql_query("select * from usuarios where id='".$_SESSION[id_user]."'");
		$row=mysql_fetch_array($sql);
		if($row[activo]=="si"){$activo="si";}else{$activo="no";}
		mysql_free_result($sql);
             if($_POST){
				 
					$desc=limpia_html(trim($_POST[desc]));
					
					$nombreo=limpia_html(trim($_POST[nombre]));
					$dia=limpia_html(trim($_POST[dia]));
					$mes=limpia_html($_POST[mes]);
					$anio=limpia_html(trim($_POST[anio]));
					$nombre_archivo = $_FILES['userfile']['name'];
				
					if(strlen($dia)==1){$dia="0".$dia;}
					if(strlen($mes)==1){$mes="0".$mes;}
					$fecha=$dia."-".$mes."-".$anio;

					if($nombreo=="" or $desc=="" or $nombre_archivo==""){$error= "Todos los campos son obligatorios.";}
					if($nombre_archivo!=""){
						$tamano_archivo = $_FILES['userfile']['size'];
						$tipo_archivo = $_FILES['userfile']['type'];
						if(!((strpos($tipo_archivo, "png") || strpos($tipo_archivo,"jpg") || strpos($tipo_archivo,"jpeg") || strpos($tipo_archivo,"gif"))) && ($tamano_archivo <= "3152306")){
						$error="Extensión o tamaño incorrecto<br>Solo se permiten imágenes jpg, png y gif y no mayor a 2.5mb";
						}
					}
					if(!$error){
						
						$path="images/logos/";
						$sep=explode('image/',$_FILES["userfile"]["type"]);
						$tipo=$sep[1];
						$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
						$cad="";
						for($i=0;$i<22;$i++) {
						$cad .= substr($str,rand(0,62),1);
						}
						$cad=$cad;
						if($tipo=="jpeg"){
							$tipo="jpg";
						}
						$up_correct="si";
					$tam=getimagesize($_FILES['userfile']['tmp_name']);
					$ancho = $tam[0];
					$alto =  $tam[1];
					$anchomax = 119;		
					
					if($tipo=="gif"){
						$imagenoriginal = imagecreatefromgif($_FILES['userfile']['tmp_name']);	
					}else if($tipo=="png"){
						$imagenoriginal = imagecreatefrompng($_FILES['userfile']['tmp_name']);
					}else{
						$imagenoriginal = imagecreatefromjpeg($_FILES['userfile']['tmp_name']);
					}
					if($ancho >= $anchomax){
						$nuevoalto = round($anchomax / $ancho * $alto);
						$imagennueva = imagecreatetruecolor($anchomax,$nuevoalto); 
						imagecopyresampled($imagennueva, $imagenoriginal, 0, 0, 0, 0, $anchomax, $nuevoalto, $ancho, $alto);
						imagejpeg($imagennueva, $path.'pc_'.$cad.'.jpg'); 
					}else{
						$imagennueva = imagecreatetruecolor($ancho,$alto); 
						$background = imagecolorallocate($imagennueva, 255, 255, 255);
						imagefill ($imagennueva, 0, 0, $background);
						imagecopyresampled($imagennueva, $imagenoriginal, 0, 0, 0, 0, $ancho, $alto, $ancho, $alto);
						imagejpeg($imagennueva, $path.'pc_'.$cad.'.jpg'); 	
					}//-------
					$tam=getimagesize($_FILES['userfile']['tmp_name']);
					$ancho = $tam[0];
					$alto =  $tam[1];
					$anchomax = 76;		
					
					if($tipo=="gif"){
						$imagenoriginal = imagecreatefromgif($_FILES['userfile']['tmp_name']);	
					}else if($tipo=="png"){
						$imagenoriginal = imagecreatefrompng($_FILES['userfile']['tmp_name']);
					}else{
						$imagenoriginal = imagecreatefromjpeg($_FILES['userfile']['tmp_name']);
					}
					if($ancho >= $anchomax){
						$nuevoalto = round($anchomax / $ancho * $alto);
						$imagennueva = imagecreatetruecolor($anchomax,$nuevoalto); 
						imagecopyresampled($imagennueva, $imagenoriginal, 0, 0, 0, 0, $anchomax, $nuevoalto, $ancho, $alto);
						imagejpeg($imagennueva, $path.'movil_'.$cad.'.jpg'); 
					}else{
						$imagennueva = imagecreatetruecolor($ancho,$alto); 
						$background = imagecolorallocate($imagennueva, 255, 255, 255);
						imagefill ($imagennueva, 0, 0, $background);
						imagecopyresampled($imagennueva, $imagenoriginal, 0, 0, 0, 0, $ancho, $alto, $ancho, $alto);
						imagejpeg($imagennueva, $path.'movil_'.$cad.'.jpg'); 	
					}
					
					//bd
					$SQLinserta="INSERT INTO ofertas (img, descr, fecha, id_u, activo, nombre) VALUES ('$cad.jpg','$desc','$fecha','$_SESSION[id_user]','$activo','$nombreo')";
					//echo $SQLinserta;
					mysql_query($SQLinserta);
					?>
                    <script>alert('La oferta fué agregado con éxito'); location.href=location.href;</script>
                    <?
					}else{
						?>
                    <script>alert('<?=$error?>'); history.back();</script>
                    <? 
					}//subida	
			 }
			?>
            <form action="" method="post" enctype="multipart/form-data" name="frmofer" id="frmofer">
            	<table width="478" border="0" cellspacing="5" cellpadding="0" align="center" class="tblofer">
            	  <tr>
            	    <td width="233"><input type="text" value="Nombre de la oferta, cupon, promocion:" name="nombre" onfocus="javascript:if(this.value=='Nombre de la oferta, cupon, promocion:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='Nombre de la oferta, cupon, promocion:';}" /></td>
            	    <td width="236"><input type="hidden" name="MAX_FILE_SIZE" value="3152306"><input name="userfile" type="file" id="archivo"></td>
          	    </tr>
          	  </table>
              <div style="float:left; width:240px; margin-left:2px; color:#4f4f4f; font-size:12px;">
              	Fecha de activación:<br />
                <table width="240" border="0" cellspacing="3" cellpadding="0" align="center" class="tblofer" >
                  <tr>
                    <td width="57" align="center">
                    <select name="dia">
                    <?
                    $n=1;
					while($n < 32){
					?>
                    	<option value="<?=$n?>"><?=$n?></option>
                        <?
					$n++;}
						?>
                    </select>
                    </td>
                    <td width="132" align="center">
                    <select name="mes">
                    <?
                    $n=1;
					while($n < 13){
					?>
                    	<option value="<?=$n?>"><?=mes($n)?></option>
                        <?
					$n++;}
						?>
                    </select>
                    </td>
                    <td width="39" align="center">
                    <select name="anio">
                    <?
                    $n=2011;
					while($n < 2020){
					?>
                    	<option value="<?=$n?>"><?=$n?></option>
                        <?
					$n++;}
						?>
                    </select>
                    </td>
                  </tr>
                </table>
                <br />
                <div id="cont_submit"><input type="submit" value="&nbsp;" /></div>
              </div>
              <div id="cont_textarea">
              	<textarea style="width:220px; height:100px; margin:10px; border:none;" name="desc" onfocus="javascript:if(this.value=='Descripci&oacute;n:'){ this.value=''; }" onBlur="javascript:if(this.value==''){ this.value='Descripci&oacute;n:';}">Descripci&oacute;n:</textarea>
              </div>
              </form>
          </div>
        </div>
      </div>
      <div class="limpia_o"></div>
      <div style="height:1px; background:#FFF; margin:25px 4px;"></div>
      <div style="text-align:center; width:720px; margin:auto; color:#000000">
      	<?
		$sql=mysql_query("select * from ofertas where id_u='".$_SESSION[id_user]."'");
		if($row=mysql_fetch_array($sql)){
			if($activo=="no"){echo"Tus ofertas aún no han sido aprobadas por el administrador.<br><br>";}
		}else{echo"Aún no hay ninguna oferta agregada";}
		mysql_free_result($sql);
		?>
        <div class="limpia"></div>
        <?
		$hoy=date("Ymd");
		$sql=mysql_query("select * from ofertas where id_u='".$_SESSION[id_user]."' order by id");
		while($row=mysql_fetch_array($sql)){
			$f_o=explode("-",$row[fecha]);
			$f_o_n=$f_o[2].$f_o[1].$f_o[0];
		?>
        <li class="ofertas"><div><img src="images/logos/pc_<?=$row[img]?>" width="119" /></div><br /><? if($f_o_n<$hoy){echo"<span class='expirado'>Expiró $f_o[0]-".mes($f_o[1])."-$f_o[2]</span>";}else{echo"<span>Expira $f_o[0]-".mes($f_o[1])."-$f_o[2]</span>";}?><br /><a href="<?=$row[id]?>">Remover</a></li>
        <?
		}
		mysql_free_result($sql);
		?>
        
      </div>
      <div class="limpia_o"></div>
      <div style="height:1px; background:#FFF; margin:25px 4px 0;"></div>
  </div>
    <div class="limpia"></div>
    <div id="menu2"><a href="./">inicio</a>•<a href="quien">Quienes Somos</a>•<a href="servicios">Servicios</a>•<a href="contacto">Contacto</a></div>
</div>
<div id="pie">
<div>Copyright &copy; 2011 -2012 Todalasemana.com&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Todos los derechos reservados.&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;<a href="politicas.php">Políticas de Uso</a></div>
<div><span>Desarrollo por GrupoCybernet.com</span></div>
</div>
</body>
</html>
<? include('php/analytics.php');?>