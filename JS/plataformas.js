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
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
			else
				location.reload();
		}
	});
}
plataformas.deregistrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/plataformas/deregistrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
			else
				location.replace(`${window.location.href.split('?')[0]}?noterminado=videojuegos&cambio=0`);
		}
	});
}
plataformas.cargar = () => {
	$.ajax({
		method: "POST",
		url: "/api/plataformas/usuario.php",
		success: (response) => {
			if(response.exito){
				response.plataformas.forEach(plataforma => {
					console.log(plataforma);
					$(`#${plataforma}`).prop('checked', true);
				});
			}else
				alert('No se pudo obtener la lista');
		}
	});
}