var videojuegos = {};
videojuegos.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/videojuegos/listar.php",
		success: callback
	});
}