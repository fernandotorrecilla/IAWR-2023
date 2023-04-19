create database login;
use login;
create table usuarios(
    id_usuario INT AUTO_INCREMENT PRIMARy KEY,
    nombre VARCHAR(30) UNIQUE NOt NULL,
    password VARCHAR(100) NOT NULL
);

CREATE USER login@localhost IDENTIFIED BY 'asdh378r*sd234';
GRANT INSERT,SELECT,DELETE, UPDATE ON login.*
TO login@localhost;

select * from usuarios;