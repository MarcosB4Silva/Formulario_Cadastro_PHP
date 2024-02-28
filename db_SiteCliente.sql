create database siteCliente;

use siteCliente;

create table fomulario_Cadastro(
	nomeCompleto varchar(100) not null,
	email varchar(100) not null,
	senha varchar(30) not null,
	telefone int(11) not null,
	genero varchar(20) not null,
	data_nasc date,
	endereco varchar(100) not null,
	cidade varchar(50) not null,
	estado varchar(50) not null
);