<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="BS/styles.css" />
    <style>
    
        .titulo {
            display: flex;
            margin-right: 14cm;
        }
        .caja{
          position: relative;
          display: inline-block;
        }
        .texto{
          position: absolute;
          margin-left: 300px;
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
                        <a class="nav-link active fw-bold" aria-current="page" href="menu_inicio.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_perfil.html">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_conocer.html">Conocer</a>
                    </li>
                </ul>
                <h2 class="titulo">¡Bienvenido!</h2>
                <span class="navbar-text">
                    <a href="index.php"><img src="assets/salida.png" alt="username-icon" style="height: 2rem" /></a>
                </span>
            </div>
        </div>
    </nav>
    <!--Inicio del contenido -->
    <div class="row">
    <img allign= "center" src="assets/fondo.jpg" alt="" width="40" height="400" />
    <div class="texto">¿Estás listo para conocer nuevos gamers?</div>
    </div><br><br>
        <!-- Contenido después de la imagen-->
        <div class="row">
            <div class="col-lg-4">
              <img src="assets/razon.png" placeholder width="140" height="140" background="#777" color="#777" class="rounded-circle" >
              <h2 class="fw-normal">Razón de ser</h2>
              <p>El aislamiento social y la cuarentena durante la pandemia causada por el COVID-19 constituyen medidas efectivas con el objetivo de salvaguardar vidas.
                Sin embargo, estas medidas traen consigo un importante costo para la salud mental. El gaming puede ser mucho más que una herramienta de entretenimiento, ha sido
                uno de los mayores aliados de las personas en el distanciamiento físico, ya que permite seguir interactuando y teniendo conexiones humanas mientras nos cuidamos
                entre todos.
              </p>
              <p><a class="btn btn-secondary" href="https://scielosp.org/article/rcsp/2020.v46suppl1/e2488/es/">Click para conocer más &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="assets/objetivo.png" placeholder width="145" height="145" background="#777" color="#777" class="rounded-circle" >
              <h2 class="fw-normal">Objetivos</h2>
              <p>Desarrollar una plataforma en la que mediante un algoritmo de inteligencia artificial, y mediante la información
                dada por el usuario, se pueda encontrar a otra persona con caracteristicas de juego y aptitudes personales similares,
                teniendo como objetivo el crear un emparejamiento justo entre jugadores.
              </p>
              <p><a class="btn btn-secondary" href="menu_conocer.html">¡Conoce! &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="assets/distancia.png" placeholder width="145" height="145" background="#777" color="#777" class="rounded-circle" >
              <h2 class="fw-normal">¿Cómo funciona?</h2>
              <p>Lo único que debes hacer es escribir tu nombre, tus hobbies, las plataformas donde juegas, algunos
                juegos que te gustan y esta plataforma te ayudará a encontrar personas con caracteristicas similares,
                para que así, puedas platicar y comenzar a jugar con ellos.
              </p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
    
    
        
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">&copy; (2023) Playder.com</p>
          
              <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#"/></svg>
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
