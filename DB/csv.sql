SELECT id, usuario FROM usuarios
	INTO OUTFILE '/tmp/usuarios.csv'
	FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\n';
SELECT id, nombre FROM hobbies
	INTO OUTFILE '/tmp/hobbies.csv'
	FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\n';
SELECT id, nombre FROM videojuegos
	INTO OUTFILE '/tmp/videojuegos.csv'
	FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\n';
SELECT id, nombre FROM plataformas
	INTO OUTFILE '/tmp/plataformas.csv'
	FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\n';