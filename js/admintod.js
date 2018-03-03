$(function(){
	$('a.activar').click(function(e) {
		val=$(this).attr('href');
        $.post('php/procesos.php?m=a', {val:val},
		  function(data){
			 alert(data);
			 location.href=location.href;
		});
		return false;
    });
	$('a.desactivar').click(function(e) {
		val=$(this).attr('href');
       $.post('php/procesos.php?m=d', {val:val},
		  function(data){
			   alert(data);
			   location.href=location.href;
		});
		return false;
    });
	$('a.remover').click(function(e) {
		confirmar=confirm("¿Está seguro que deseas eliminar la empresa y sus ofertas?"); 
		if (confirmar) {
		val=$(this).attr('href');
       $.post('php/procesos.php?m=r', {val:val},
		  function(data){
			   alert(data);
			   location.href=location.href;
		});
		}
		return false;
    });
	
});
function logout(){	
	$.post('php/logout.php', {},
	  function(data){
		  location.href=location.href;
	});
}