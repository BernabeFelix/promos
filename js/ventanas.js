// JavaScript Document
//Powered by José Luis Mtz
$(document).ready(function(){
	jQuery.fn.center = function () {  
		this.css("position","fixed");  
		this.css("top", ( $(window).height() - this.outerHeight()) / 2);
		this.css("left", ( $(window).width() - this.outerWidth()) / 2);
   		return this;  
	}
	$(window).resize(function() {
		if ($('#ventana').length){
		 $("#ventana").center();
		}
	});
	jQuery.fn.ventana = function () {
		$("<div id='fondo'></div>").appendTo("body");
		$('#fondo').css("position","fixed");
		$('#fondo').css("display","none");
		$("#fondo").css({ opacity: 0.7 });
		$('#fondo').fadeIn('fast');	
		$("<div id='ventana' class='alerta'></div>").appendTo("body");
		$('#ventana').css("display","none");
		$('#ventana').css("position","fixed");
		$('#ventana').fadeIn('fast');
		$('#ventana').corner();
		$("#ventana").center();
		
	}
});
function cerrar_ventana(){
	$('#fondo').fadeOut('fast', function() {
		$('#fondo').remove();
	});
	$('#ventana').fadeOut('fast', function() {
		$('#ventana').remove();
	});

}