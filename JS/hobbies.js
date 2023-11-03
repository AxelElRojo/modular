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
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
			else
				location.replace(`${window.location.href.split('?')[0]}?noterminado=plataformas&cambio=0`);
		}
	});
}
hobbies.deregistrar = (datos) => {
	$.ajax({
		method: "POST",
		url: "/api/hobbies/deregistrar.php",
		data: {
			ids: JSON.stringify(datos)
		},
		success: (response) => {
			if(getUrlParameter('cambio') == 1)
				window.location.replace("/");
		}
	});
}
hobbies.cargar = () => {
	$.ajax({
		method: "POST",
		url: "/api/hobbies/usuario.php",
		success: (response) => {
			if(response.exito){
				response.hobbies.forEach(hobby => {
					$(`#${hobby}`).prop('checked', true);
				});
			}else
				alert('No se pudo obtener la lista');
		}
	});
}