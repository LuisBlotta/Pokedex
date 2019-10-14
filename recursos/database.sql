create database pokemons_Blotta_Luis;
use pokemons_Blotta_Luis;
create table usuario (id int primary key auto_increment, nombre varchar(20) not null, password varchar(20) not null);
create table tipo (id int primary key auto_increment, descripcion varchar(50) not null);
create table pokemon (id int primary key auto_increment, numero int not null, nombre varchar(50) not null, tipo int not null, imgPath varchar(50) not null, foreign key (tipo) references tipo(id));
insert into tipo (descripcion) values ("Fuego"),("Agua"),("Hierba"),("Electrico");
insert into usuario (nombre, password) value ("admin", "pass1");
insert into pokemon (numero, nombre,tipo, imgPath) values	 (1,"Bulbasaur",3, "recursos/uploads/bulbasaur.png"), 
															 (2,"Ivysaur",3, "recursos/uploads/ivysaur.png"),
															 (3,"Venusaur",3, "recursos/uploads/venusaur.png"),
															 (4,"Charmander",1, "recursos/uploads/charmander.png"),
                                                             (5,"Charmeleon",1, "recursos/uploads/charmeleon.png"),
                                                             (6,"Charizard",1, "recursos/uploads/charizard.png"),
                                                             (10,"Pikachu",4, "recursos/uploads/pikachu.png");
select * from pokemon;