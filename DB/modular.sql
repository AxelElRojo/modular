CREATE TABLE usuarios(
	id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	usuario VARCHAR(64) NOT NULL,
	correo VARCHAR(64) NOT NULL,
	nombre VARCHAR(128) NOT NULL,
	contrasena VARCHAR(256) NOT NULL,
	descripcion TEXT NOT NULL,
	discord VARCHAR(32) NOT NULL,
	eliminado BOOL DEFAULT 0,
	UNIQUE KEY idx_usuario(usuario)
);

CREATE TABLE hobbies(
	id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(64) NOT NULL,
	eliminado BOOL DEFAULT 0
);

CREATE TABLE hobbiesUsuario(
	idUsuario INT(11) NOT NULL REFERENCES usuarios(id),
	idHobbie INT(11) NOT NULL REFERENCES hobbies(id)
);

CREATE TABLE mensajes(
	id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	texto TEXT NOT NULL,
	fechahora DATETIME DEFAULT CURRENT_TIMESTAMP,
	visto BOOLEAN DEFAULT 0,
	eliminado BOOL DEFAULT 0
);

CREATE TABLE plataformas(
	id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(32) NOT NULL,
	eliminado BOOL DEFAULT 0
);

CREATE TABLE plataformasUsuario(
	idUsuario INT(11) NOT NULL REFERENCES usuarios(id),
	idPlataforma INT(11) NOT NULL REFERENCES plataformas(id)
);

CREATE TABLE videojuegos(
	id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(64) NOT NULL,
	crossplay BOOLEAN NOT NULL,
	activado BOOLEAN DEFAULT 0,
	eliminado BOOL DEFAULT 0
);

CREATE TABLE videojuegosPlataforma(
	idVideojuego INT(11) NOT NULL REFERENCES videojuegos(id),
	idPlataforma INT(11) NOT NULL REFERENCES plataformas(id)
);

CREATE TABLE videojuegosUsuario(
	idVideojuego INT(11) NOT NULL REFERENCES videojuegos(id),
	idUsuario INT(11) NOT NULL REFERENCES usuarios(id)
);

CREATE TABLE sugerenciasVideojuego(
	idVideojuego INT(11) NOT NULL REFERENCES videojuegos(id),
	idUsuario INT(11) NOT NULL REFERENCES usuarios(id)
);
