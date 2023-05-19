CREATE USER reflexiones2@localhost
    IDENTIFIED BY 'Asadkdsfy87asdj-';

CREATE DATABASE reflexiones2;
USE reflexiones2;

CREATE TABLE reflexiones(
    id_reflexion INT AUTO_INCREMENT PRIMARY KEY ,
    texto TEXT NOT NULL,
    color CHAR(7) DEFAULT '#000000',
    tam TINYINT DEFAULT 12,
    tipo VARCHAR(20) DEFAULT 'serif'
);

GRANT INSERT,SELECT,UPDATE,DELETE ON reflexiones2.* TO reflexiones2@localhost;
select * from reflexiones;
delete from reflexiones;