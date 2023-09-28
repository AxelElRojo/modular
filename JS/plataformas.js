var plataformas = {};
plataformas.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/plataformas/listar.php",
		success: callback
	});
}
plataformas.registrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/plataformas/registrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(response.exito)
				alert('Registro de plataformas exitoso');
			else
				alert('No se pudo realizar el registro');
			location.reload();
		}
	});
}