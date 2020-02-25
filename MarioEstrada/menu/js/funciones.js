$(document).ready(inicioEventos);

function inicioEventos(){
	
	$('#inicio').click(muestraMenu);
	
}

function muestraMenu(event){
	event.preventDefault();
	
	$('#menu').removeAttr('hidden');
}