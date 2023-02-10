<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="BS/styles.css" />
</head>
<form action="inicio.php" method="post">

    <body class="bg-success d-flex justify-content-center align-items-center vh-100">
        <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="text-center fs-1 fw-bold text-dark">Inicio de Sesión</div>
            <div class="input-group mt-4">
                <div class="input-group-text bg-success bg-gradient">
                    <img src="assets/usuario.png" alt="username-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="text" placeholder="Usuario" />
            </div>
            <div class="input-group mt-1">
                <div class="input-group-text bg-success bg-gradient">
                    <img src="assets/candado.png" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="password" placeholder="Contraseña" />
            </div>
            <div class="d-flex justify-content-around mt-1">

            </div>
            <div>
                <button type="submit" class="btn btn-outline-dark  w-100 mt-4 fw-semibold shadow-sm">Iniciar
                    sesión</button>
            </div>
            <div class="d-flex gap-1 justify-content-center mt-1">
                <a href="registro.php" class="text-decoration-none text-success fw-semibold">Registrarte</a>
            </div>
</form>
</div>
</body>

</html>