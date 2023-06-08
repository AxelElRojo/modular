<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Encuentra personas!</title>
    <link rel="stylesheet" href="BS/styles.css" />
    <style>
        .box {
            display: flex;
            width: 350px;
            height: 75px;
            border-radius: 20px;
            background-color: #f4b34c;
            padding: 1em;

        }

        .usuario {
            display: flex;
            height: 3rem;
            margin-right: 0.5cm;
        }

        .chat {
            display: flex;
            margin-left: 1cm;
        }

        .titulo {
            display: flex;
            margin-right: 7cm;
        }

        .columnas {
            column-count: 2;
            column-gap: 300px;
        }
        .texto {
            position: absolute;
            margin-left: 150px;
            margin-top: 150px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: rgb(213, 213, 213);
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
                        <a class="nav-link" href="menu_inicio.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_perfil.html">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="menu_conocer.html">Conocer</a>
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
        <div class="texto">Aquí puedes encontrar a las personas que más te interesen</div>
    </div><br><br>

    <div class="columnas">
        <ul>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 1 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 2 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 3 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 4 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 5 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 6 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 7 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 8 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 9 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
            <p>
            <div class="box"><img class="usuario" src="assets/usuario.png" alt="username-icon">Persona 10 <form
                    class="chat" action="menu_chatear.html">
                    <input type="image" src="assets/chat.png" />
                </form>
            </div>
            </p>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

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