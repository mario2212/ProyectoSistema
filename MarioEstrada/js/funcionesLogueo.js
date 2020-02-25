$(document).ready(inicioEventos)


function inicioEventos(){
  var formLogin = $('#formLogin');
  formLogin.submit(validaLogueo);
}


function validaLogueo(){
	
	var user = $('#user').val();
	var pass = $('#pass').val();
	
	$.ajax({
		async:true,
		type:"POST",
		dataType:"HTML",
		contentType:"application/x-www-form-urlencoded",
		url: 'php/validaLogueo.php',
		data: 'user='+user + '&pass='+pass,
		beforeSend: inicioEnvio,
		success: llegadaEnvio,
		error:errorEnvio
	});
		return false;
}


function inicioEnvio(){
	var resultados = $('#resultados');
	resultados.html('Validando...');
}


function llegadaEnvio(Datos){
	
	if(Datos == 'true'){
		window.location.href = "menu/index.php";
	}else{
		$('#resultados').html('Usuario y/o contraseña no son correctos');
	}
	
}


function errorEnvio(){
	var resultados = $('#resultados');
	resultados.html('Error de grabacion...');
}