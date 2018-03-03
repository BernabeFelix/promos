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
<?
	//if(eregi('./',$_SERVER['PHP_SELF'])){
		if(isset($_GET[dia])){
			if($_GET[dia]=="lunes"){$lun_activo=' class="active"'; $dia_actual="Lunes";}
			else if($_GET[dia]=="martes"){$mar_activo=' class="active"'; $dia_actual="Martes";}
			else if($_GET[dia]=="miercoles"){$mie_activo=' class="active"'; $dia_actual="Mi&eacute;rcoles";}
			else if($_GET[dia]=="jueves"){$jue_activo=' class="active"';  $dia_actual="Jueves";}
			else if($_GET[dia]=="viernes"){$vie_activo=' class="active"'; $dia_actual="Viernes";}
			else if($_GET[dia]=="sabado"){$sab_activo=' class="active"'; $dia_actual="S&aacute;bado";}
			else if($_GET[dia]=="domingo"){$dom_activo=' class="active"'; $dia_actual="Domingo";}
		}else{
			if(date("w")=="0"){$dom_activo=' class="active"'; $dia_actual="Domingo";}
			if(date("w")=="1"){$lun_activo=' class="active"'; $dia_actual="Lunes";}
			if(date("w")=="2"){$mar_activo=' class="active"'; $dia_actual="Martes";}
			if(date("w")=="3"){$mie_activo=' class="active"'; $dia_actual="Mi&eacute;rcoles";}
			if(date("w")=="4"){$jue_activo=' class="active"';  $dia_actual="Jueves";}
			if(date("w")=="5"){$vie_activo=' class="active"';; $dia_actual="Viernes";}
			if(date("w")=="6"){$sab_activo=' class="active"'; $dia_actual="S&aacute;bado";}
			/*if(dia(date("w")-1)=="Lunes"){$lun_activo=' class="active"'; $dia_actual="Lunes";}
			if(dia(date("w")-1)=="Martes"){$mar_activo=' class="active"'; $dia_actual="Martes";}
			if(dia(date("w")-1)=="Mi&eacute;rcoles"){$mie_activo=' class="active"'; $dia_actual="Mi&eacute;rcoles";}
			if(dia(date("w")-1)=="Jueves"){$jue_activo=' class="active"';  $dia_actual="Jueves";}
			if(dia(date("w")-1)=="Viernes"){$vie_activo=' class="active"';; $dia_actual="Viernes";}
			if(dia(date("w")-1)=="S&aacute;bado"){$sab_activo=' class="active"'; $dia_actual="S&aacute;bado";}
			if(dia(date("w")-1)=="Domingo"){$dom_activo=' class="active"'; $dia_actual="Domingo";}
			if(dia(date("w")-1)==""){$dom_activo=' class="active"'; $dia_actual="Domingo";}*/
		}
		
//	}
   
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
  <div id="contenedor">
    	<div id="bloque_izq">
        
        	<div id="area_login"><?
        if(!isset($_SESSION[id_user])){
		?>
                <form id="frmlogin" action="comprueba.php">
                <div class="label">Usuario:</div>
                <div class="form"><input type="text" name="user"  /></div>
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
      <div id="cont_ofe" class="poli" style="font-size:13px; width:700px; color:#000; margin-left:30px;">
        <strong>MODIFICACIÓN DE ESTAS CONDICIONES DE USO</strong><br /><br />
La empresa www.todalasemana.com se reserva el derecho de modificar los términos, condiciones y avisos bajo los que se ofrecen los Sitios o Servicios, incluyendo entre otros, los cargos asociados al uso de los Sitios o Servicios. Es responsabilidad suya revisar periódicamente estos términos, condiciones y las condiciones de uso adicionales expuestas en los concretos Sitios Web. El uso continuado de los Sitios o Servicios, supone la aceptación de los términos, condiciones y avisos respectivos.<br /><br />
<strong>Términos y condiciones de uso</strong><br /><br />
<li><strong>1.	Condiciones de uso.</strong>
<ul><li><strong>
1.1.	Uso prohibido o ilícito.</strong> Como condición para el uso por su parte de los Sitios o Servicios de www.todalasemana.com, no se utilizarán para ningún propósito que sea ilícito o esté prohibido por estos términos, condiciones y avisos. No puede usar el sitio de modo que puedan dañar, ofender, deshabilitar, sobrecargar o deteriorar algún Sitio, comercio, producto o persona; ni interferir en el uso y disfrute por cualquier tercero del servicio. No puede intentar obtener acceso no autorizado a ningún Sitio o Servicio ni a otras cuentas, sistemas informáticos o redes conectados a algún Sitio o Servicio de www.todalasemana.com mediante actos de intrusión (hacking), descifre de contraseñas (password mining) ni por cualquier otro medio. No puede obtener o intentar obtener ningún material o información por un medio que no se haya puesto a su disposición explícitamente para tal propósito a través del sitio o de los documentos entregados en caso de existir.
</li>
<li><strong>1.2.	Uso de los servicios.</strong> Los Sitios o Servicios de <span style="background:yellow; ">www.todalasemana.com</span> pueden contener servicios de correo electrónico, servicios de boletines electrónicos, zonas de chat, grupos de noticias, foros, comunidades, páginas Web personales, calendarios, álbumes de fotos, contenedores de archivos u otros dispositivos de mensajes o comunicación diseñados para permitirle la comunicación con otros (colectivamente, "Servicios de Comunicación"). Usted acepta usar los Servicios de Comunicación sólo para anunciar, enviar y recibir mensajes y materiales que sean apropiados y, en su caso, estén relacionados con ese Servicio de Comunicación en particular. A título de ejemplo, pero no como enumeración cerrada, usted acepta que al utilizar un Servicio de Comunicación, no realizará ninguna de las siguientes acciones:<br /><br />
<ul>

<li>
1.2.1.	Utilizar el Servicio de Comunicación en relación con encuestas, concursos, listas de distribución, cadenas de mensajes, correo electrónico no deseado, spamming o cualquier otro tipo de mensajes no solicitados ni consentidos (comerciales o de otro tipo).
</li>
<li>
1.2.2.	Difamar, abusar, acosar, acechar, amenazar o de otra forma infringir los derechos (tales como los derechos a la intimidad y a la propia imagen) de terceros.
</li>
<li>
1.2.3.	Publicar, anunciar, cargar, distribuir o divulgar cualquier asunto, nombre, material o información inapropiados, profanos, difamatorios, obscenos, inmorales o ilícitos.
</li>
<li>
1.2.4.	Publicar, anunciar, cargar, distribuir o divulgar cualquier asunto, nombre, material o información que fomente la discriminación, la violencia o el odio hacia una persona o colectivo por razón de su pertenencia a una raza, religión o nación, o que ofenda a las víctimas de los crímenes contra la humanidad negando la existencia de dichos crímenes. 
</li>
<li>
1.2.5.	Cargar o poner a disposición de cualquier otra forma archivos que contengan imágenes, fotografías, software u otro material protegido por las leyes sobre propiedad intelectual e industrial, incluyendo, a modo de ejemplo y no como enumeración cerrada, las leyes sobre derechos de autor y marcas (o por el derecho a la intimidad y a la propia imagen) a menos que usted sea titular de los derechos respectivos o haya recibido todos los consentimientos necesarios para hacerlo. 
</li>
<li>
1.2.6.	Utilizar cualquier material o información, incluidas imágenes o fotografías, puesto a su disposición a través de los Sitios o Servicios de www.todalasemana.com de forma que se infrinjan los derechos de autor, marcas, patentes, secretos comerciales u otros derechos protegidos de terceros.
</li>
<li>
1.2.7.	Cargar archivos que contengan virus, "caballos de Troya", "gusanos", bombas de tiempo, sistemas de cancelación de exposiciones (cancelbots), archivos dañados, o cualquier otro programa, virus o software similar que pueda perjudicar el funcionamiento de los equipos o la propiedad de terceros. 
</li>
<li>
1.2.8.	Usar búsquedas con etiquetas meta (meta tags) en los Sitios Web.
</li>
<li>
1.2.9.	Anunciar u ofrecer la venta o compra de cualquier bien o servicio para cualquier fin comercial, a menos que el Servicio de Comunicación permita específicamente dichos mensajes.<br />
Descargar algún archivo enviado por otro usuario de un Servicio de Comunicación del que usted conozca, o razonablemente debería conocer, que no puede distribuirse legalmente de dicha forma.
</li>
<li>
1.2.10.	Falsificar o eliminar avisos de derechos de autor, avisos legales o cualquier otro aviso relevante, designación o etiqueta indicativa del origen o la fuente del software u otro material contenido en un archivo que esté cargado.
</li>
<li>
1.2.11.	Restringir o inhabilitar a otros usuarios el uso y disfrute de los Servicios de Comunicación.
</li>
<li>
1.2.12.	Infringir cualquier código de conducta u otras directrices que sean aplicables para cualquier Servicio de Comunicación en particular.
</li>
<li>
1.2.13.	Recoger o de cualquier manera recopilar información acerca de terceros, incluidas direcciones de correo electrónico. 
</li>
<li>
1.2.14.	Infringir cualquier ley o normativa aplicable.
</li>
<li>
1.2.15.	Crear una identidad falsa con el propósito de confundir a terceros.
</li>
<li>
1.2.16.	Utilizar, descargar o de otra manera copiar o proporcionar (con o sin fines lucrativos) a una persona física o jurídica, cualquier directorio de los usuarios de Sitios o Servicios de www.todalasemana.com u otra información sobre los usuarios o sus usos o partes de la misma.
</li>
<li>
1.2.17.	www.todalasemana.com  no tiene ninguna obligación de supervisar los Servicios de Comunicación. Sin embargo, se reserva el derecho a revisar los materiales enviados a un Servicio de Comunicación y a eliminar cualquier material a su entera discreción. La empresa se reserva el derecho a impedir su acceso a alguno o a todos los Servicios de Comunicación en cualquier momento, sin previo aviso y por cualquier razón.
</li>
<li>
1.2.18.	Nos reservamos el derecho a revelar en cualquier momento cualquier información si lo cree necesario para cumplir con cualquier ley, reglamento, proceso legal o solicitud gubernamental aplicable, o a modificar, negarse a enviar o eliminar cualquier información o material, en todo o en parte, a su entera discreción. 
</li>
<li>
1.2.19.	Los materiales cargados en un Servicio de Comunicación pueden estar sujetos a las limitaciones de uso, reproducción y/o divulgación allí publicadas. Es responsabilidad suya cumplir con dichas limitaciones en el caso de que descargue los materiales.
</li>
</ul>
</li>
<li>
<strong>1.3.	Contenido no permitido.</strong><br /><br />
<ul>
<li>
1.3.1.	Lenguaje con contenido ofensivo, dañino o abusivo. Incluyendo sin limitación obscenidades, profanidad, hostigamiento, vulgaridades, lenguaje sexualmente explicito o lenguaje de odio, ejemplo: Comentarios racistas o discriminatorios.
</li>
<li>
1.3.2.	Referencias a actividades ilegales, negligencia, sobreprecio intencional, falsa publicidad o violaciones al código de salud. Ejemplo: intoxicación, objetos extraños en la comida, etc.
</li>
<li>
1.3.3.	Comentarios presentados por empleados actuales o anteriores del negocio, así como competidores según sean determinados por DREAMSCAN S. DE RL. DE C.V. Y/O QUEREMOSCOMER.COM
</li>
<li>
1.3.4.	Comentarios sobre instituciones, personas físicas o morales.
</li>
<li>
1.3.5.	Comentarios que contengan ataques personales o mencionen confrontaciones y/u hostigamiento sexual.
</li>
<li>
1.3.6.	Información personal conteniendo: domicilios, direcciones de correo electrónico, números telefónicos y URL’s
</li>
<li>
1.3.7.	Mensajes de naturaleza comercial o publicitaria, así como los que sean considerados como inapropiados en la sección donde desean ser publicados.
</li>
<li>
1.3.8.	Contenido que infrinja o viole cualquier ley federal, estatal, municipal y/o de derechos humanos.
</li>
<li>
1.3.9.	Lenguaje que intenta personificar a otros usuarios, incluyendo nombres de otros individuos, usuarios o firmas. Sean ofensivos o inadecuados.
</li>
<li>
1.3.10.	Contiendo que no es en español, que se encuentre encriptado, que contenga virus, caballos de troya, gusanos, bombas de tiempo, robots o spiders o cualquier programa o rutina de programa con el intento de dañar, interferir, interceptar o apropiarse de cualquier sistema o datos personales.
</li>
</ul></li>
</ul></li>
<li><strong>2.	Métodos y condiciones de pago.</strong>
<ul>
  <li>
<strong>2.1.	Uso y gozo de acceso a la plataforma.</strong> Para poder acceder a la plataforma y publicar cualquier tipo de material es necesario recibir de manera anticipada el pago correspondiente a los servicios, salvo lo acordado entre ambas partes.<br /><br />
<ul>
<li>
2.1.1.	<strong>Modos de pago.</strong> El pago se podrá realizar mediante depósito bancario, por medio del portal todalasemana.com, o transacción electrónica a las cuentas mencionadas en el punto 2.1.2. </li>
<li>
2.1.2.	<strong>Contratación de servicio:</strong> al realizarse el pago se podrá tener acceso 30 días naturales después de verse reflejado el depósito en las cuentas mencionadas en el punto 2.1.2. Dicho acceso permitirá la publicación del material que se desee, respetando los términos y condiciones acordados. </li>
<li>
2.1.3.	<strong>Cuentas de la empresa.</strong> Las cuentas bancarias registradas por la empresa son las siguientes. </li>
<li>
<table border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none; width:600px;">
    <tr style="height:13.0pt;">
      <td width="180" valign="top" style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt;"><p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><strong><span style="font-size:10.0pt; ">Institución bancaria</span></strong></p></td>
      <td width="200" valign="top" style="border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt;"><p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><strong><span style="font-size:10.0pt; ">CLABE</span></strong></p></td>
      <td width="228" valign="top" style="border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt;"><p class="MsoListParagraphCxSpLast" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><strong><span style="font-size:10.0pt; ">Beneficiario</span></strong></p></td>
    </tr>
    <tr style="height:13.75pt;">
      <td width="180" valign="top" style="border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.75pt;"><p class="MsoListParagraphCxSpFirst" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; ">BBVA BANCOMER</span></p></td>
      <td width="200" valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.75pt;"><p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; ">012560011995844555</span></p></td>
      <td width="228" valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.75pt;"><p class="MsoListParagraphCxSpLast" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; background:yellow; ">Guillermo Ávila V.</span></p></td>
    </tr>
    <tr style="height:14.5pt;">
      <td width="180" valign="top" style="border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.5pt;"><p class="MsoListParagraphCxSpFirst" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; ">SANTANDER    SERFIN</span></p></td>
      <td width="200" valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.5pt;"><p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; ">&nbsp;</span></p></td>
      <td width="228" valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.5pt;"><p class="MsoListParagraphCxSpLast" align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal;"><span style="font-size:10.0pt; background:yellow; ">Guillermo Ávila V.</span></p></td>
    </tr>
  </table>
  </li>
  <li>
2.1.4.	<strong>Cancelación y reembolso:</strong> En caso de cancelación no habrá reembolso si el plazo contratado fue de un período menor a 30 días. </li>
</ul></li>
</ul>
</li>
<strong>Bajo acuerdo de los involucrados, quedo satisfecho y enterado de los términos condiciones, comprometiéndome a cumplir con todas las especificaciones previamente señaladas y de conformidad leídas. </strong><br />
        	
    </div>
        
    </div>
    
    <div class="limpia_o"></div>
    <div style="height:1px; background:#FFF; margin:25px 4px;"></div>
    <div id="menu2"><a href="./">inicio</a>•<a href="quien">Quienes Somos</a>•<a href="servicios">Servicios</a>•<a href="contacto">Contacto</a></div>
</div>
<div id="pie">
<div>Copyright &copy; 2011 - 2012 Todalasemana.com&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Todos los derechos reservados.&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;<a href="politicas.php">Políticas de Uso</a></div>
<div><span>Desarrollo por GrupoCybernet.com</span></div>
</div>
</body>
</html>
<? include('php/analytics.php');?>