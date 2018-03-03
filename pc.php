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
<?php
//if(eregi('./',$_SERVER['PHP_SELF'])){
$lun_activo = '';
$mar_activo = '';
$mie_activo = '';
$jue_activo = '';
$vie_activo = '';
$sab_activo = '';
$dom_activo = '';
if (isset($_GET['dia'])) {
    if ($_GET['dia'] == "lunes") {$lun_activo = ' class="active"';
        $dia_actual = "Lunes";} else if ($_GET['dia'] == "martes") {$mar_activo = ' class="active"';
        $dia_actual = "Martes";} else if ($_GET['dia'] == "miercoles") {$mie_activo = ' class="active"';
        $dia_actual = "Mi&eacute;rcoles";} else if ($_GET['dia'] == "jueves") {$jue_activo = ' class="active"';
        $dia_actual = "Jueves";} else if ($_GET['dia'] == "viernes") {$vie_activo = ' class="active"';
        $dia_actual = "Viernes";} else if ($_GET['dia'] == "sabado") {$sab_activo = ' class="active"';
        $dia_actual = "S&aacute;bado";} else if ($_GET['dia'] == "domingo") {$dom_activo = ' class="active"';
        $dia_actual = "Domingo";}
} else {
    if (date("w") == "0") {$dom_activo = ' class="active"';
        $dia_actual = "Domingo";}
    if (date("w") == "1") {$lun_activo = ' class="active"';
        $dia_actual = "Lunes";}
    if (date("w") == "2") {$mar_activo = ' class="active"';
        $dia_actual = "Martes";}
    if (date("w") == "3") {$mie_activo = ' class="active"';
        $dia_actual = "Mi&eacute;rcoles";}
    if (date("w") == "4") {$jue_activo = ' class="active"';
        $dia_actual = "Jueves";}
    if (date("w") == "5") {$vie_activo = ' class="active"';
        $dia_actual = "Viernes";}
    if (date("w") == "6") {$sab_activo = ' class="active"';
        $dia_actual = "S&aacute;bado";}
    /*if(dia(date("w")-1)=="Lunes"){$lun_activo=' class="active"'; $dia_actual="Lunes";}
if(dia(date("w")-1)=="Martes"){$mar_activo=' class="active"'; $dia_actual="Martes";}
if(dia(date("w")-1)=="Mi&eacute;rcoles"){$mie_activo=' class="active"'; $dia_actual="Mi&eacute;rcoles";}
if(dia(date("w")-1)=="Jueves"){$jue_activo=' class="active"';  $dia_actual="Jueves";}
if(dia(date("w")-1)=="Viernes"){$vie_activo=' class="active"';; $dia_actual="Viernes";}
if(dia(date("w")-1)=="S&aacute;bado"){$sab_activo=' class="active"'; $dia_actual="S&aacute;bado";}
if(dia(date("w")-1)=="Domingo"){$dom_activo=' class="active"'; $dia_actual="Domingo";}
if(dia(date("w")-1)==""){$dom_activo=' class="active"'; $dia_actual="Domingo";}*/
}

//    }

?>
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
  <div class="limpia"></div>
  <div id="contenedor">
   	  <div id="bloque_izq">

        	<div id="area_login">
			<?
        if(!isset($_SESSION[id_user])){
		?>
                <form id="frmlogin" action="comprueba.php">
                <div class="label">Usuario:</div>
                <div class="form"><input type="text" name="user" /></div>
                <div class="label">Contraseña:</div>
                <div class="form"><input type="password" name="pass"  /></div>
                <div class="submit"><input type="submit" value="&nbsp;" /></div>
                </form>
                <div id="registro"><a href="./registro.php">Registrate y anunciate</a></div>
                <div id="lost"><a href="lost">¿Olvidaste tu contraseña?</a></div>
				<? }else{?><div id="micuenta"><a href="./cuenta.php">Mi cuenta</a></div>
                <? }?>

            </div>

            <div id="redes">
            	<img src="images/sitiomovil.png" />
            </div>
        </div>
        <div id="cont_ofe">
        <?php

$sql = "select * from ofertas where fecha='" . sql_fecha($dia_actual) . "' and activo='si' order by id";
$n = 1;

while ($row = $mysqli -> query($sql) -> fetch_array()) {
    if ($n % 2 == 0) {
        ?>

                <div class="cont_ofer_der">
            	<div class="flecha_der"></div>
            	<div class="ofer_der">
                	<table cellpadding="0" cellspacing="0" border="0" width="490" class="tbl_ofer_der">
                      <tr>
                        <td width="142" align="center" valign="middle" class="cld_logo">
                        <img src="images/logos/pc_<?=$row[img]?>" width="119" />
                        </td>
                        <td width="268" valign="middle">
                        <span><?=$row[nombre]?></span><br />
                        <?=$row[descr]?>
                        </td>
                      </tr>
                    </table>
                </div>
            </div>
            <div class="limpia_o"></div>
                <?php
} else {
        ?>

                <div class="cont_ofer_izq">
            	<div class="flecha_izq"></div>
            	<div class="ofer_izq">
                	<table cellpadding="0" cellspacing="0" border="0" width="490" class="tbl_ofer_izq">
                      <tr>
                        <td width="268" valign="middle">
                        <span><?=$row[nombre]?></span><br />
                        <?=$row[descr]?>
                        </td>
                        <td width="142" align="center" valign="middle" class="cld_logo">
                        <img src="images/logos/pc_<?=$row[img]?>" width="119" />
                        </td>
                      </tr>
                    </table>
                </div>
            </div>
            <div class="limpia_o"></div>
                <?php
}
    $n++;
}
?>

        </div>
    </div>
    <div class="limpia_o"></div>
    <div id="menu2"><a href="./" id="activo">inicio</a>•<a href="quien">Quienes Somos</a>•<a href="servicios">Servicios</a>•<a href="contacto">Contacto</a></div>
</div>
<div id="pie">
	<div>Copyright &copy; 2011 - 2012 Todalasemana.com&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Todos los derechos reservados.&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;<a href="./politicas.php">Políticas de Uso</a></div>
	<div><span>Desarrollo por GrupoCybernet.com</span></div>
</div>
</body>
</html>
<? include('php/analytics.php');?>
<?php if ($_GET[token] != "") {
    $sql = mysql_query("select * from usuarios where md5='" . $_GET[token] . "'");
    if ($row = mysql_fetch_array($sql)) {
        ?>
        <script>
		$(document).ready(function(){
			$("#ventana").ventana();
			//$('#ventana').css("width","250px");
			$('#ventana').css("height","200px");
			$("#ventana").html('<br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
			$('#ventana').center();
			$.post('php/paginas.php?pag=lost3', {md5:'<?=$_GET[token]?>'},
			  function(data){
				  $("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div>'+data);
		 	});
		});
		</script>

        <?php
} else {
        echo "<script>alert('El enlace no es válido o a caducado.');</script>";
    }
    mysql_free_result($sql);
}
?>