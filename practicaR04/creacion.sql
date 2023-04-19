create user tareas@localhost identified by 'aDAHG5asj6&';
create database tareas;
use tareas;
grant all privileges on tareas.* to tareas@localhost;
create table tareas(
                       id_tarea int primary key auto_increment,
                       titulo varchar(100) not null,
                       marcada tinyint(1) not null default 0
);

insert into tareas values(1,'Comprar pan',0);

