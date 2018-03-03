<?
include('php/inc.config.php');
include('php/inc.funciones.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Todalasemana.com</title>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.corners.js"></script>
<script type="text/javascript" src="js/ventanas.js"></script>
<script type="text/javascript" src="js/web.js"></script>
<link href="css/web.css" rel="stylesheet" type="text/css" />
<? if(isset($_SESSION[id_admin])){?>
<script type="text/javascript" src="js/admintod.js"></script>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<? }?>
</head>
<body>
<div id="top">
  <div style="float:right; background:#4ab8e6;  width:765px; height:136px;">
    <div style="float:right; width:700px; height:109px; font-size:50px; font-variant:small-caps; font-weight:bold; font-family:'Arial Narrow', 'Times New Roman'; letter-spacing:1px;">
    <? if(isset($_SESSION[id_admin])){?>
		<div>Bienvenido al </div>
        <div style="text-align:right; padding-right:25px;">Panel de Administración</div>
	<? }else{?>
    	<div>Acceso al </div>
        <div style="text-align:right; padding-right:25px;">Panel de Administración</div>
    <? }?>
    </div>
  </div>
</div>
<div id="sep_top"></div>
<div style="margin:auto; width:1015px;">
  
  <div id="contenedor">
    <?
    if(isset($_SESSION[id_admin])){
		?>
        <table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="177" valign="top">
            <div id="mnu_admin">
        <a href="?mod=empresas"><li>Empresas</li></a>
        <a href="https://www.google.com/accounts/ServiceLoginAuth" target="_blank"><li>Estadisticas</li></a>
        <a href="#" onclick="logout(); return false;"><li>Salir</li></a>
        </div>
            </td>
            <td width="23">&nbsp;</td>
            <td width="800" valign="top">
            <?
            if($_GET[mod]=="empresas"){
				if($_GET[emp]!=""){
					$_sql=mysql_query("select * from usuarios where id='".$_GET[emp]."'");
					if($_row=mysql_fetch_array($_sql)){
					?>
                    <div>
                <table cellpadding="0" cellspacing="0" border="0" width="800" class="tblusuarios">
                      <tr>
                        <td width="129" class="titulo">Usuario</td>
                        <td width="178" class="titulo">Empresa</td>
                        <td width="162" class="titulo">Nombre</td>
                        <td width="150" class="titulo">Apellidos</td>
                        <td width="179" class="titulo">E-Mail</td>
                      </tr>                   
                      <tr>
                        <td class="datos"><?=$_row[usuario]?></td>
                        <td class="datos"><?=$_row[empresa]?></td>
                        <td class="datos"><?=$_row[nombre]?></td>
                        <td class="datos"><?=$_row[apellidos]?></td>
                        <td class="datos"><?=$_row[email]?></td> 
                      </tr>
                      </table><br />
                      <table cellpadding="0" cellspacing="0" border="0" width="800" class="tblusuarios">
                    <tr>
                        <td width="157" class="titulo">Colonia</td>
                        <td width="150" class="titulo">Municipio</td>
                        <td width="105" class="titulo">C&oacute;digo Postal</td>
                        <td width="165" class="titulo">Estado</td>
                        <td width="120" class="titulo">Tel</td>
                        <td width="101" class="titulo">Servicio</td>
                      </tr>                   
                      <tr>
                        <td class="datos"><?=$_row[colonia]?></td>
                        <td class="datos"><?=$_row[municipio]?></td>
                        <td class="datos"><?=$_row[cp]?></td>
                        <td class="datos"><?=$_row[estado]?></td>
                        <td class="datos"><?=$_row[tel]?></td>
                        <td class="datos"><?=$_row[servicio]?></td> 
                      </tr>
                    </table>
                </div><br />
                <div style="text-align:center; width:720px; margin:auto;">
      	<?
		$sql=mysql_query("select * from ofertas where id_u='".$_GET[emp]."'");
		if($row=mysql_fetch_array($sql)){
			if($activo=="no"){echo"Las ofertas aún no han sido aprobadas por el administrador.<br><br>";}
		}else{echo"Aún no hay ninguna oferta agregada";}
		mysql_free_result($sql);
		?>
        <div class="limpia"></div>
        <?
		$hoy=date("Ymd");
		$sql=mysql_query("select * from ofertas where id_u='".$_GET[emp]."' order by id");
		while($row=mysql_fetch_array($sql)){
			$f_o=explode("-",$row[fecha]);
			$f_o_n=$f_o[2].$f_o[1].$f_o[0];
		?>
        <li class="ofertas"><div><img src="images/logos/pc_<?=$row[img]?>" width="119" /></div><br /><? if($f_o_n<$hoy){echo"<span class='expirado'>Expiró $f_o[0]-".mes($f_o[1])."-$f_o[2]</span>";}else{echo"<span>Expira $f_o[0]-".mes($f_o[1])."-$f_o[2]</span>";}?></li>
        <?
		}
		mysql_free_result($sql);
		?>
        
      </div>
                    <?
					}mysql_free_result($_sql);
				}else{
			?>
            <div>
            <table cellpadding="0" cellspacing="0" border="0" width="800" id="tblusuarios">
                  <tr>
                    <td width="129" class="titulo">Usuario</td>
                    <td width="178" class="titulo">Empresa</td>
                    <td width="232" class="titulo">Datos Personales</td>
                    <td width="80" class="titulo">Ofertas</td>
                    <td width="179" class="titulo">Acciones</td>
                  </tr>
            <?
            $sql=mysql_query("select * from usuarios order by id");
			while($row=mysql_fetch_array($sql)){
				$activado=$row[activo];
				$_sql=mysql_query("select * from ofertas where id_u='".$row[id]."'");
				$num_ofers=mysql_num_rows($_sql);
				mysql_free_result($_sql);
				
				?>
                
                  <tr>
                    <td class="datos"><?=$row[usuario]?></td>
                    <td class="datos"><?=$row[empresa]?></td>
                    <td class="datos"><?=$row[nombre]?> <?=$row[apellidos]?></td>
                    <td align="center" class="datos"><?=$num_ofers?></td>
                    <td align="center" class="datos"><a href="?mod=empresas&emp=<?=$row[id]?>">Ver</a> | <? if($activado=="no"){?><a href="<?=$row[id]?>" class="activar">Activar</a><? }else{?><a href="<?=$row[id]?>" class="desactivar">Desactivar</a><? }?> | <a href="<?=$row[id]?>" class="remover">Remover</a></td> 
                  </tr>
                
                <?
			}mysql_free_result($sql);
			?></table>
            </div>
            <? }
			}?>
            </td>
          </tr>
        </table>

     
      <?
	}else{
	?>
    <br /><br /><br />
   	  <div id="area_login">
   	    <form id="frmlogina" action="comprobar.php">
   		  <div class="label">Usuario:</div>
                <div class="form"><input type="text" name="user"  /></div>
          <div class="label">Contraseña:</div>
                <div class="form"><input type="password" name="pass"  /></div>
                <div class="submit"><input type="submit" value="&nbsp;" /></div>
                </form>
   	  </div>
     <? }?>
  </div>
    <div class="limpia_o"></div>
              <div style="height:1px; background:#FFF; margin:25px 4px 15px; "></div>

    <div id="menu2"><a href="./">inicio</a>•<a href="quien">Quienes Somos</a>•<a href="servicios">Servicios</a>•<a href="contacto">Contacto</a></div>
</div>
<div id="pie">
<div>Copyright &copy; 2011 Todalasemana.com   •   Todos los derechos reservados.</div>
<div><span>Desarrollo por GrupoCybernet.com</span></div>
</div>
</body>
</html>