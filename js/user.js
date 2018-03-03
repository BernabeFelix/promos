// JavaScript Document
$(document).ready(function(){
	$('li.ofertas a').click(function(e) {
		confirmar=confirm("¿Está seguro que deseas eliminar la oferta?"); 
		if (confirmar) {
			of = $(this).attr('href');
			$.post('php/procesos.php?rem=of', {of:of},
			function(data){
			  alert(data);
			  location.href=location.href;
			});
		}
		return false;
    });
	$('#frmofer').submit(function () {
		$("#ventana").ventana();
	$('#ventana').css("width","250px");
	$('#ventana').css("height","180px");
	$("#ventana").html('<br><center><img src="images/loading.gif"><br><br>Procesando...</center>');
	$('#ventana').center();
	});
});
function logout(){
	$.post('php/logout.php', {},
	  function(data){
		  location.href='./';
	});
}
