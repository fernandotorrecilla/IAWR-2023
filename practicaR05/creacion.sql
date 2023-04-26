CREATE DATABASE tareas2;
USE tareas2;

CREATE TABLE usuarios(
    id_usuario  INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) UNIQUE NOT NULL,
    pass VARCHAR(50) NOT NULL
);
CREATE TABLE tareas(
    id_tarea INT AUTO_INCREMENT PRIMARY KEY,
    tarea VARCHAR(100) NOT NULL,
    id_usuario INT REFERENCES usuarios,
    CONSTRAINT tareas_uk UNIQUE(tarea,id_usuario)
);
INSERT INTO usuarios(nombre,pass) VALUES('Ana','123456');
INSERT INTO usuarios(nombre,pass) VALUES('Marta','123456');
INSERT INTO usuarios(nombre,pass) VALUES('Jose','123456');
INSERT INTO usuarios(nombre,pass) VALUES('Sergio','123456');

CREATE USER tareas2@localhost IDENTIFIED BY 'tareas2';
GRANT SELECT, INSERT, DELETE ON tareas2.* TO tareas2@localhost;