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
    img blob(65000),
    tempo int(100) not null,
    dificuldade varchar(300) not null,
    categoria varchar(300) not null,
    rende int(100) not null,
    ingr varchar(1000) not null,
    preparo varchar(1000) not null,
    primary key(id)
);

create table blogs(
    id int not null auto_increment,
    titulo varchar(200) not null,
    descr varchar(300) not null,
    texto varchar(2000) not null,
    img blob(65000),
    primary key(id)
);

create table mapa(
    id int not null auto_increment,
    nome varchar(100) not null,
    loc varchar(300) not null,
    descr varchar(300) not null,
    img blob(65000),
    primary key(id)
);