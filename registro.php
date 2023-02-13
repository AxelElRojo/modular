<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="BS/styles.css" />
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background:#48C9B0;">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 45rem">
        <form class="row g-3 needs-validation" action="index.php" method="post" novalidate>
        <div class="text-center fs-1 fw-bold text-dark">Formulario de Registro</div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label fw-semibold">Nombres</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Alejandro Miguel" required>
                <div class="valid-feedback">
                    Llenado Correctamente
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label fw-semibold">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ruíz Villareal" required>
                <div class="valid-feedback">
                Llenado Correctamente
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label fw-semibold">Usuario</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" placeholder="OsitoBear" required>
                    <div class="invalid-feedback">
                        Elige un usuario
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label fw-semibold">Correo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="osito@gmail.com" required>
                <div class="valid-feedback">
                Llenado Correctamente
                </div>
            </div>
            <div class="col-md-8">
                <label for="validationCustom02" class="form-label fw-semibold">Descripción</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Cuentanos sobre ti"
                    required>
                <div class="valid-feedback">
                Llenado Correctamente
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acuerdo de terminos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debes de aceptar para continuar
                    </div>
                </div>
            </div>
            <div class="col-6">
                <button class="btn btn-outline-dark  w-100 mt-4 fw-semibold shadow-sm" type="submit">Registrar</button>
            </div>
            <div class="col-6">
                <a class="btn btn-outline-danger  w-100 mt-4 fw-semibold shadow-sm" href="index.php" role="button">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>

    <script src="JS/formulario.js">

    </script>
</body>

</html>