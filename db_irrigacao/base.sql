-- Scripts do Banco Projeto Irrigacao
use db_irrigacao;

create table usuario(
    idUsuario INTEGER AUTO_INCREMENT not null,
    nome varchar(20) not null,
    email varchar(20) not null,
    senha varchar(30) not null,
	primary key(idUsuario)
);

create table planta(
    idPlanta integer auto_increment not null,
	nome varchar(20),
	imagem varchar(100),
    descricao varchar(50),
	idUsuario integer not null,
	primary key(idPlanta),
	foreign key(idUsuario) 
		references usuario(idUsuario)
);

create table dadoPlanta(
	idDadosPlanta INTEGER AUTO_INCREMENT not null,
	umidadeAr double,
	umidadeSolo double,
	temperatura double,
	idPlanta integer not null,
	primary key(idDadosPlanta),
	foreign key(idPlanta)
		references planta(idPlanta) 
			on update cascade
			on delete cascade
);


