var hobbies = {};
hobbies.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "/api/hobbies/listar.php",
		success: callback
	});
}