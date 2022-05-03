CREATE DATABASE registroNotas;


use registroNotas;

CREATE TABLE carreras(
cod INT PRIMARY KEY auto_increment,
nombreCarrera VARCHAR(50) NOT NULL
);


CREATE Table estudiantes(
cod VARCHAR(10) PRIMARY KEY NOT NULL,
nombre VARCHAR(50) NOT NULL,
apellidoP VARCHAR(50) NOT NULL,
apellidoM VARCHAR(50),
codCarrera INT,
FOREIGN KEY (codCarrera) REFERENCES carreras(cod)
);

CREATE Table notas (
cod int PRIMARY KEY auto_increment,
nota TINYINT(100) not NULL,
semestre VARCHAR(50) not NULL,
parcial TINYINT(10),
codEStudiantes VARCHAR(10),
FOREIGN KEY(codEStudiantes) REFERENCES estudiantes(cod)
);

INSERT INTO carreras(nombreCarrera)
VALUES("Ingenieria Comercial");
INSERT INTO carreras(nombreCarrera)
VALUES("Ingenieria Agricola");
INSERT INTO carreras(nombreCarrera)
VALUES("Ingenieria en Sistema Electronicos");
INSERT INTO carreras(nombreCarrera)
VALUES("Ingenieria en Sistema");
INSERT INTO carreras(nombreCarrera)
VALUES("Ingenieria Civil");
INSERT INTO carreras(nombreCarrera)
VALUES("T.S Informática");
INSERT INTO carreras(nombreCarrera)
VALUES("T.S contrución Civil");
INSERT INTO carreras(nombreCarrera)
VALUES("T.S Diseño grafico");