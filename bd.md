create database db_vet;
use db_vet;
create table tb_vetCad(
  idcliente int primary key auto_increment,
  nome varchar(255) not null,
  genero varchar(255),
  nascimento date not null,
  cpf varchar(255) not null,
  email varchar(255) not null, 
  cel varchar(255) not null,
  senha varchar(255) not null
);
select * from tb_vetCad; 
INSERT INTO tb_vetCad (nome, genero, nascimento, cpf, email, cel, senha) VALUES('Beatriz', 'feminino', '2002-05-27', '11111111110', 'beatriz@gmail.com', '21999999', '123456');