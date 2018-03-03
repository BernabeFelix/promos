// JavaScript Document
//Powered by José Luis Martínez
$(document).ready(function(){
	$('#area_login').corner();
	$('.ofer_der').corner("right");
	$('.ofer_izq').corner("left");
	$('.redondea').corner();
	$('#formreg').submit(function () {
		$("#ventana").ventana();
		$('#ventana').css("width","250px");
		$('#ventana').css("height","180px");
		$("#ventana").html('<br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
		$('#ventana').center();
		url = $("#formreg").attr( 'action' );
		var serializedForm = $("#formreg").serialize();
		$.post(url+'?op=comprueba', serializedForm,
			  function(data){
				  $('#ventana').css("width","360px");
				$('#ventana').css("height","60px");
			 var correcto=data.indexOf('Error');
			  if (correcto!= -1 ) {
				  
				$("#ventana").html('<br><center style="color:red;">'+data+'</center>');
				timer = setTimeout("cerrar_ventana();", 3000);
			}else{
				$("#ventana").html('<br><center style="color:green;">'+data+'</center>');
				timer = setTimeout("location.href='./cuenta.php';", 3500);
			}
		});
		return false;
	});
	
	$('#frmlogin').submit(function () {
		url = $("#frmlogin").attr( 'action' );
		var serializedForm = $("#frmlogin").serialize();
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
	$('div#menu2 a').click(function(e) {
        if($(this).attr('href')=="quien" || $(this).attr('href')=="servicios" || $(this).attr('href')=="contacto"){
			$("#ventana").ventana();
			$("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div><br><br><br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
			$.post('php/paginas.php', {pag:$(this).attr('href')},
			  function(data){
				  $("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div>'+data);
			  });
			return false;
		}
    });
	$('div#lost a').click(function(e) {
		$("#ventana").ventana();
		//$('#ventana').css("width","250px");
		$('#ventana').css("height","184px");
		$("#ventana").html('<br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
		$('#ventana').center();
		$.post('php/paginas.php', {pag:$(this).attr('href')},
			  function(data){
				  $("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div>'+data);
		  });
		return false;
	});
	//------------------
	$('div#pies a').click(function(e) {
        
			$("#ventana").ventana();
			$("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div><br><br><br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
			$.post('php/paginas.php', {pag:$(this).attr('href')},
			  function(data){
				  $("#ventana").html('<a href="#" onclick="cerrar_ventana(); return false;"><div id="cerrar_ventana"></div></a><div class="limpiar"></div>'+data);
			  });
			return false;
		
    });
	
	(function($) {
  var cache = [];
  $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
      var cacheImage = document.createElement('img');
      cacheImage.src = arguments[i];
      cache.push(cacheImage);
    }
  }
})(jQuery);
jQuery.preLoadImages("images/loading.gif");
	//------------
	$('#frmlogina').submit(function () {
		url = $("#frmlogina").attr( 'action' );
		var serializedForm = $("#frmlogina").serialize();
		$.post(url, serializedForm,
			  function(data){
			  alert(data);
			 var correcto=data.indexOf('Error');
			  if (correcto!= -1 ) {
				
			}else{
				location.href=location.href;
			}
		});
		return false;
	});

});