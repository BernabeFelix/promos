<?
if(eregi('movil.php',$_SERVER['PHP_SELF'])){
header('location: ./');
}
?>
<!DOCTYPE html> 
<html> 
	<head>  
	<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todalasemana.com</title>
	<link rel="stylesheet"  href="./css/jquery.mobile-1.0b1.min.css" />
	<link rel="stylesheet" href="css/jqm-docs.css" />
	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-1.0b1.min.js"></script>
</head> 
<body> 
<!-- Start of first page -->
<div data-role="page" id="inicio">

	<div data-role="header" id="cabeza">
		<h1>Todalasemana.com</h1>
	</div><!-- /header -->

	<div data-role="content" style="margin-top:0; background:#FFF; padding-top:0;">
    	<div>
        	<div id="clogo"></div>
            <p class="intro"><strong>Mejores</strong> <b>Ofertas, descuentos, promociones, cupones.</b></p>
        </div>	
		<div style="clear:both;"></div>			
			<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="e">
				<li data-role="list-divider">Elije un día</li>
				<li><a href="#lunes" data-transition="slide">Lunes</a></li>
				<li><a href="#martes" data-transition="slide">Martes</a></li>
				<li><a href="#miercoles" data-transition="slide">Miércoles</a></li>
				<li><a href="#jueves" data-transition="slide">Jueves</a></li>
                <li><a href="#viernes" data-transition="slide">Viernes</a></li>
                <li><a href="#sabado" data-transition="slide">Sábado</a></li>
				<li><a href="#domingo" data-transition="slide">Domingo</a></li>
			</ul>		
		
	</div><!-- /content -->
	<? include('php/piemovil.php');?>
    <!-- /footer -->
</div><!-- /page -->


<!-- Lunes -->
<div data-role="page" id="lunes">
<? $dia_actual="Lunes";?>
	<? include('php/headmovil.php');?>
	<!-- /header -->  
  <? include('php/sqlmovil.php');?>
    <!-- /content -->
    <? include('php/piemovil.php');?>
    <!-- /footer -->
</div><!-- /page -->

<!-- Martes -->
<div data-role="page" id="martes">
<? $dia_actual="Martes";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?>
	<!-- /footer -->
</div><!-- /page -->
<!-- miercoles -->
<div data-role="page" id="miercoles">
<? $dia_actual="Mi&eacute;rcoles";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?>
  <!-- /footer -->
</div><!-- /page -->
<!-- Jueves -->
<div data-role="page" id="jueves">
<? $dia_actual="Jueves";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?>
  <!-- /footer -->
</div><!-- /page -->
<!-- Viernes -->
<div data-role="page" id="viernes">
<? $dia_actual="Viernes";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?>
  <!-- /footer -->
</div><!-- /page -->
<!-- Sabado -->
<div data-role="page" id="sabado">
<? $dia_actual="S&aacute;bado";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?>
  <!-- /footer -->
</div><!-- /page -->
<!-- Domingo -->
<div data-role="page" id="domingo">
<? $dia_actual="Domingo";?>
	<? include('php/headmovil.php');?>
    <!-- /header -->
  <? include('php/sqlmovil.php');?>
  <!-- /content -->
  <? include('php/piemovil.php');?><!-- /footer -->
</div><!-- /page -->
</body>
</html>
<? include('php/analytics.php');?>