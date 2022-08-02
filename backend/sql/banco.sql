create database vegan;

use vegan;

create table usuarios(
    id int not null auto_increment,
    nome varchar(200) not null,
    email varchar(200) not null,
    senha varchar(100) not null,
    primary key(id)
);

create table receitas(
    id int not null auto_increment,
    titulo varchar(200) not null,
    img varbinary(max),
    ingredientes varchar(300) not null,
    preparo varchar(500) not null,
    primary key(id)
);

create table blogs(
    id int not null auto_increment,
    titulo varchar(200) not null,
    descr varchar(300) not null,
    texto varchar(1500) not null,
    primary key(id)
)