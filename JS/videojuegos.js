var videojuegos = {};
videojuegos.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/listar.php",
		success: callback
	});
}
videojuegos.usuario = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/usuario.php",
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
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
			else
				location.reload();
		}
	});
}
videojuegos.deregistrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/deregistrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
		}
	});
}
videojuegos.cargar = () => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/usuario.php",
		success: (response) => {
			if(response.exito){
				response.videojuegos.forEach(videojuego => {
					$(`#${videojuego}`).prop('checked', true);
				});
			}else
				alert('No se pudo obtener la lista');
		}
	});
}