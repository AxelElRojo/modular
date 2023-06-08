<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Este es tu perfil!</title>
    <link rel="stylesheet" href="BS/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <style>
        .titulo {
            display: flex;
            margin-right: 14cm;
        }

        .caja {
            position: relative;
            display: inline-block;
        }

        .texto {
            position: absolute;
            margin-left: 500px;
            margin-top: 150px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: rgb(20, 50, 76);
        }

        .contenido {
            position: relative;
            margin-left: 550px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: rgb(213, 213, 213);
        }

        .estilo {
            text-shadow: 0 5px 3px #CCC;
            color: #000;
            margin-left: 10px;
            font-size: 20px;
            text-align: center;

        }

        .txt {
            text-align: center;
        }
    </style>
</head>

<body>
    <!--Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background:#D5D5D5;">
        <div class="container-fluid">
            <img src="assets/banner.png" alt="username-icon" style="height: 4rem" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="menu_inicio.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="menu_perfil.html">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_conocer.html">Conocer</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="index.php"><img src="assets/salida.png" alt="username-icon" style="height: 2rem" /></a>
                </span>
            </div>
        </div>
    </nav>
    <!--Inicio del contenido -->
    <div class="row">
        <img allign="center" src="assets/fondo.jpg" alt="" width="40" height="400" />
        <div class="texto">Tu perfil personal</div>
    </div><br><br>

    <div class="contenido">
        <h2>¡Hola Usuario!</h2>
        <img src="assets/usuario.png" placeholder width="145" height="145" background="#777" color="#777"
            class="rounded-circle"><br><br>
    </div>

    <div class="estilo">
        <h3>En esta seccion va la descripción de la persona</h3>
    </div>
    <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dolor risus, convallis eget enim id,
        tristique sodales mi. Sed sed ipsum feugiat, malesuada est nec, posuere risus. Nunc scelerisque velit orci, et
        fringilla lorem accumsan ac. Vestibulum suscipit risus eu nisi mattis consectetur. Morbi porta purus odio, vitae
        sodales lacus lacinia vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nulla dolor,
        vestibulum vel tempus in, tempus in dolor. Integer ultrices fermentum cursus. Orci varius natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus. Aliquam lacus augue, blandit non maximus id, tincidunt ut
        massa. Nulla sodales fringilla libero vitae eleifend. Mauris bibendum semper nibh, non ullamcorper risus dapibus
        posuere.</p>
    <div class="estilo">
        <h3>En esta sección va las plataformas en las que juega</h3>
    </div>
    <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dolor risus, convallis eget enim id,
        tristique sodales mi. Sed sed ipsum feugiat, malesuada est nec, posuere risus. Nunc scelerisque velit orci, et
        fringilla lorem accumsan ac. Vestibulum suscipit risus eu nisi mattis consectetur. Morbi porta purus odio, vitae
        sodales lacus lacinia vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nulla dolor,
        vestibulum vel tempus in, tempus in dolor. Integer ultrices fermentum cursus. Orci varius natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus. Aliquam lacus augue, blandit non maximus id, tincidunt ut
        massa. Nulla sodales fringilla libero vitae eleifend. Mauris bibendum semper nibh, non ullamcorper risus dapibus
        posuere.</p>
    <div class="estilo">
        <h3>En esta seccion va los juegos favoritos</h3>
    </div>
    <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dolor risus, convallis eget enim id,
        tristique sodales mi. Sed sed ipsum feugiat, malesuada est nec, posuere risus. Nunc scelerisque velit orci, et
        fringilla lorem accumsan ac. Vestibulum suscipit risus eu nisi mattis consectetur. Morbi porta purus odio, vitae
        sodales lacus lacinia vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nulla dolor,
        vestibulum vel tempus in, tempus in dolor. Integer ultrices fermentum cursus. Orci varius natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus. Aliquam lacus augue, blandit non maximus id, tincidunt ut
        massa. Nulla sodales fringilla libero vitae eleifend. Mauris bibendum semper nibh, non ullamcorper risus dapibus
        posuere.</p>



    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; (2023) Playder.com</p>
            <a href="#"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Regresar a Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Preguntas</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Acerca de</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>