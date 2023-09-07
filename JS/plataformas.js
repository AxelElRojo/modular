var plataformas = {};
plataformas.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/plataformas/listar.php",
		success: callback
	});
}