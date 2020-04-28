/*localhost:3303 usuario=root pass=  */

create database rexpress;
create database rexpress_d;

/*USE rexpress;*/
USE rexpress_d;

/*DROP TABLE administrador;*/
DROP TABLE usuario;

CREATE TABLE usuario(
idusuario INT AUTO_INCREMENT,
nombre VARCHAR(50),
apellido VARCHAR(50),
correo VARCHAR(50) UNIQUE ,
password VARCHAR(100) ,
activo INT(1),/*1=TRUE ; 0=FALSE*/
tipo VARCHAR (3), /*USU=EMPLEADO ; ADM=ENCARGADO*/
PRIMARY KEY (idusuario)
);

/*CREATE TABLE usuario(
idusuario INT AUTO_INCREMENT ,
nombre VARCHAR(50),
apellido VARCHAR (50),
correo VARCHAR(50) UNIQUE,
password VARCHAR(100),
PRIMARY KEY(idusuario)
);*/
USE rexpress;
/*DROP TABLE administrador;*/
DROP TABLE usuario;

CREATE TABLE usuario(
idusuario INT AUTO_INCREMENT,
nombre VARCHAR(50),
apellido VARCHAR(50),
correo VARCHAR(50) UNIQUE ,
password VARCHAR(100) ,
activo INT(1),/*1=TRUE ; 0=FALSE*/
tipo VARCHAR (3), /*USU=EMPLEADO ; ADM=ENCARGADO*/
PRIMARY KEY (idusuario)
);

/*CREATE TABLE usuario(
idusuario INT AUTO_INCREMENT ,
nombre VARCHAR(50),
apellido VARCHAR (50),
correo VARCHAR(50) UNIQUE,
password VARCHAR(100),
PRIMARY KEY(idusuario)
);*/

/*CREATE TABLE datos(
iddatos INT PRIMARY KEY AUTO_INCREMENT ,
idusuario INT NOT NULL,
total DECIMAL (20,2),
ingresado DECIMAL (20,2),
fecha DATE,
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE
);*/

/*
otras formas de asignar primary key
->CONSTRAINT PK_Person PRIMARY KEY (ID,LastName)
->PRIMARY KEY (ID)

añadir primary key con las tablas  cradas 
ALTER TABLE Persons ADD PRIMARY KEY (ID);

ALTER TABLE Persons ADD CONSTRAINT PK_Person PRIMARY KEY (ID,LastName);

elininar primary key
ALTER TABLE Persons DROP PRIMARY KEY;
*/

/*
crear FOREIGN KEY 
CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
 
crear con las tablas creadas
ALTER TABLE Orders ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);
ALTER TABLE Orders ADD CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

eliminas 
ALTER TABLE Orders DROP FOREIGN KEY FK_PersonOrder;
*/
/*correo = admin@gmail.com*/
/*password = admin*/
INSERT INTO `usuario` (`nombre`, `apellido`, `correo`, `password`, `activo`, `tipo`) VALUES ('admin', 'admin', 'admin@gmail.com', '$2y$10$C0UJ1QaCyhnKc1sugAdKPu1F6ARa.RQveITpmstFNTGr4gATyWs7i', '1', 'ADM');
