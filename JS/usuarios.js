var usuarios = {};
usuarios.login = (usuario, contrasena, nuevo = false) => {
	if(!usuario || !contrasena)
		alert("Faltan datos por llenar");
	else
		$.ajax({
			method: "POST",
			url: "/api/usuarios/login.php",
			data: {
				usuario: usuario,
				contrasena: contrasena,
				nuevo: Number(nuevo)
			},
			success: (response) => {
				if(!response.exito)
					alert("Error iniciando sesión");
				location.reload();
			}
		});
}
usuarios.alta = (usuario, correo, nombre, contrasena, descripcion, discord) => {
	if(!usuario || !correo || !nombre || !contrasena || !descripcion || !discord)
		alert("Faltan datos por llenar");
	else
		$.ajax({
			method: "POST",
			url: "/api/usuarios/alta.php",
			data: {
				usuario: usuario,
				correo: correo,
				nombre: nombre,
				contrasena: contrasena,
				descripcion: descripcion,
				discord: discord
			},
			success: (response) => {
				if(response.exito){
					alert("Usuario creado correctamente");
					usuarios.login(usuario, contrasena, true);
				}else
					alert("No se pudo crear el usuario");
			}
		});
}
usuarios.modificar = (id, usuario, correo, nombre, contrasena, descripcion, discord) => {
	if(!usuario || !correo || !nombre || !descripcion || !discord)
		alert("Faltan datos por llenar");
	else
		$.ajax({
			method: "POST",
			url: "/api/usuarios/modificacion.php",
			data: {
				id: id,
				usuario: usuario,
				correo: correo,
				nombre: nombre,
				contrasena: contrasena,
				descripcion: descripcion,
				discord: discord
			},
			success: (response) => {
				console.log(response);
				if(response.exito){
					alert("Modificación correcta");
					window.location.replace("/");
				}else
					alert("No se pudo modificar");
			}
		});
}
usuarios.detalles = (idUsuario, callback) => {
	$.ajax({
		method: "POST",
		url: "/api/usuarios/detalles.php",
		data: {
			id: idUsuario
		},
		success: callback
	});
}
usuarios.repetido = (nombre) => {
	if(nombre)
		$.ajax({
			method: "POST",
			url: "/api/usuarios/repetido.php",
			data: {
				usuario: nombre,
			},
			success: (response) => {
				if(response.repetido){
					alert("El nombre de usuario está repetido");
					$('#btnsbt').prop('disabled', true);
				}else
					$('#btnsbt').prop('disabled', false);
			}
		});
}