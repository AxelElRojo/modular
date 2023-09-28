var hobbies = {};
hobbies.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/hobbies/listar.php",
		success: callback
	});
}
hobbies.registrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/hobbies/registrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(response.exito)
				alert('Registro de hobbies exitoso');
			else
				alert('No se pudo realizar el registro');
			location.reload();
		}
	});
}