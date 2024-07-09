create database hospital;

use hospital;

/*Tabla datos de clientes*/
create table clientes(
	idCliente int primary key auto_increment,
    userC varchar(50) not null unique,-- Puede ser el correo o uno en especial depende de como se quiera manejar
    passC varchar(64) not null,
    nombreC varchar(45) not null,
    apellidosC varchar(45) not null,
    sexoC enum('F','M') not null,
    edadC tinyint not null,
    telefono varchar(10)
);

/*Tabla de doctores*/
create table doctor(
	idDoctor int primary key auto_increment,
    userD varchar(45) not null unique,-- Puede ser el correo o uno en especial depende de como se quiera manejar
    passD varchar(64) not null,
    nombreD varchar(45) not null,
    apellidosD varchar(70) not null,
    sexoD enum('F','M') not null,
    edadD tinyint not null,
    especialidad varchar(45) not null,
    turno enum('Matutino','Vespertino','Completo','Nocturno') not null,
    telefono varchar(10) not null,
    correo varchar(60) null
);

/*Tabla de consultas para clientes esta se puede tomar como el historial de la consulta*/
CREATE TABLE consultas(
	idConsulta int primary key auto_increment,
    fechaCita date not null,-- La fecha de la consulta es la que se guarda
    idCliente int not null,
    idDoctor int not null,
    observaciones text null,-- Me base en una reseta del imss y de la clemencia que te dan una con diagnostico
    medicamentos text null,--  y una con medicamentos separadas.
    foreign key (idCliente) references clientes(idCliente),
    foreign key (idDoctor) references doctor(idDoctor)
);