CREATE DATABASE tareas;
USE tareas;

CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT,
    nombre VARCHAR(30) not null,
    password VARCHAR(100) NOT NULL,
    CONSTRAINT usuarios_pk PRIMARY KEY (id_usuario),
    CONSTRAINT usuarios_uk1 UNIQUE(nombre)
);


CREATE TABLE tareas(
    id_tarea INT AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    prioridad TINYINT DEFAULT 1,
    marcada TINYINT DEFAULT 0,
    id_usuario INT NOT NULL,
    CONSTRAINT tareas_pk PRIMARY KEY(id_tarea),
    CONSTRAINT tareas_fk1 FOREIGN KEY(id_usuario)
                   REFERENCES usuarios(id_usuario)
                   ON DELETE CASCADE
);

CREATE USER tareas@localhost
    IDENTIFIED BY 'sgsdf76adfzs%';
GRANT INSERT,DELETE, UPDATE, SELECT ON tareas.*
    TO tareas@localhost;




INSERT INTO usuarios(nombre, password)
VALUES('Marta','123456');
INSERT INTO usuarios(nombre, password)
VALUES('Sonia','123456');
INSERT INTO usuarios(nombre, password)
VALUES('Pedro','123456');

select * from usuarios;

SELECT id_tarea,titulo FROM tareas WHERE id_usuario=1;

insert into tareas(titulo, id_usuario)
VALUES('Comprar agua',1);

select * from tareas;