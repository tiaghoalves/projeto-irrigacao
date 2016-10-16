-- Scripts do Banco Projeto Irrigacao
use db_irrigacao;

create table usuario(
    idUsuario integer AUTO_INCREMENT,
    nome varchar(20) not null,
	username varchar(50) not null,
    email varchar(20) not null,
    senha varchar(30) not null,
	primary key(idUsuario)
);

create table planta(
    idPlanta integer auto_increment,
	nome varchar(20),
	apelido varchar(20),
	imagem text,
    descricao text,
	idUsuario integer not null,
	primary key(idPlanta),
	foreign key(idUsuario) 
		references usuario(idUsuario)
);

create table dadoPlanta(
	idDadosPlanta integer AUTO_INCREMENT,
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


-- INSERTS Usuario:
INSERT INTO usuario(idUsuario, nome, username, email, senha) VALUES (null, 'test1', 'test1', 'test1@test.com', '123');
INSERT INTO usuario(idUsuario, nome, username, email, senha) VALUES (null, 'test2', 'test2', 'test2@test.com', '456');

-- INSERTS Planta:
INSERT INTO planta(idPlanta, nome, apelido, imagem, descricao, idUsuario) VALUES (null, 'Orquídea', 'Orquídea Negra', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Orchis_militaris_flowers.jpg' , 'Orquídeas são todas as plantas que compõem a família Orchidaceae, pertencente à ordem Asparagales, uma das maiores famílias de plantas existentes. Apresentam muitíssimas e variadas formas, cores e tamanhos e existem em todos os continentes, exceto na Antártida, predominando nas áreas tropicais. Maioritariamente epífitas, as orquídeas crescem sobre as árvores, usando-as somente como apoio para buscar luz; não são plantas parasitas, nutrindo-se apenas de material em decomposição que cai das árvores e acumula-se ao emaranhar-se em suas raízes. Elas encontram muitas formas de reprodução: na natureza, principalmente pela dispersão das sementes mas em cultivo pela divisão de touceiras, semeadura in-vitro ou meristemagem.' , 1);
INSERT INTO planta(idPlanta, nome, apelido, imagem, descricao, idUsuario) VALUES (null, 'Margarida', 'Daisy', 'https://static.significados.com.br/foto/margarida-0d.jpg' , 'A margarida, flor cujo nome científico é Chrysanthemum leucanthemum, é uma flor que também é conhecida como malmequer, crisântemo, bem-me-quer, bonina, margarita, margarita-maior, malmequer-maior, malmequer-bravo, e olho-de-boi.' , 1);

INSERT INTO planta(idPlanta, nome, apelido, imagem, descricao) VALUES (null, 'Margarida', 'Daisy', 'https://static.significados.com.br/foto/margarida-0d.jpg' , 'A margarida, flor cujo nome científico é Chrysanthemum leucanthemum, é uma flor que também é conhecida como malmequer, crisântemo, bem-me-quer, bonina, margarita, margarita-maior, malmequer-maior, malmequer-bravo, e olho-de-boi.');
	
delete from planta where idPlanta = 3;





