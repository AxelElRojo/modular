var usuarios = {};
usuarios.login = (usuario, contrasena) => {
	if(!usuario || !contrasena)
		alert("Faltan datos por llenar");
	else
		$.ajax({
			method: "POST",
			url: "/api/usuarios/login.php",
			data: {
				usuario: usuario,
				contrasena: contrasena
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
					login(usuario, contrasena);
				}else
					alert("No se pudo crear el usuario");
			}
		});
}
usuarios.modificar = (id, usuario, correo, nombre, contrasena, descripcion, discord) => {
	if(!id || !usuario || !correo || !nombre || !contrasena || !descripcion || !discord)
		alert("Faltan datos por llenar");
	else
		$.ajax({
			method: "POST",
			url: "/api/usuarios/alta.php",
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
				if(response.exito){
					alert("Usuario creado correctamente");
					login(usuario, contrasena);
				}else
					alert("No se pudo crear el usuario");
			}
		});
}
usuarios.detalles = (idUsuario, callback) => {
	$.ajax({
		method: "POST",
		url: "/api/usuarios/alta.php",
		data: {
			id: idUsuario
		},
		success: callback
	});
}