var videojuegos = {};
videojuegos.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/listar.php",
		success: callback
	});
}
videojuegos.registrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/registrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(response.exito)
				alert('Registro de videojuegos exitoso');
			else
				alert('No se pudo realizar el registro');
			location.reload();
		}
	});
}