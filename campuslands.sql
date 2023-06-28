CREATE DATABASE campuslands;

USE campuslands;

CREATE TABLE campers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreCamper VARCHAR(50),
    apellidoCamper VARCHAR(50),
    fechaNacimiento DATE,
    idRegion INT
   
);
CREATE TABLE paises(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombrePais VARCHAR(50)
);

CREATE TABLE departamentos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreDepartamento VARCHAR(50),
    idPais INT

);

CREATE TABLE regiones(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreRegion VARCHAR(50),
    idDepartamento INT

);

INSERT INTO campers (id, nombreCamper, apellidoCamper, fechaNacimiento, idRegion) VALUES

(1, 'Amed Felipe','rincon','2000/03/06',1),
(2, 'Jesus Alberto','suarez','2000/03/06',2),
(3, 'jose javier','diaz','2000/03/06',3),
(4, 'josue','suarez','2000/03/06',4),
(5, 'andres','giraldo','2000/03/06',5),
(6, 'julian','duran','2000/03/06',6),
(7, 'sebastian','camacho','2000/03/06',7),
(8, 'camilo','gomez','2000/03/06',8),
(9, 'santiago','ortiz','2000/03/06',9),
(10, 'Miguel andres','niño','2000/03/06',10);


INSERT INTO paises (id, nombrePais) VALUES

(1, 'Colombia'),
(2, 'Argentina'),
(3, 'rusia'),
(4, 'panama'),
(5, 'ecuador'),
(6, 'venezuela'),
(7, 'italia'),
(8, 'peru'),
(9, 'chile'),
(10, 'Brasil');

INSERT INTO departamentos (id,nombreDepartamento,idPais) VALUES


(1, 'amazonas',1),
(2, 'Antioquia',2),
(3, 'Boyaca',3),
(4, 'Caldas',4),
(5, 'Casanare',5),
(6, 'Cordoba',6),
(7, 'Cauca',7),
(8, 'meta',8),
(9, 'nariño',9),
(10, 'cesar',10);

INSERT INTO regiones (id, nombreRegion, idDepartamento) VALUES

(1, 'Amazonia',1),
(2, 'El Caribe',2),
(3, 'Orinoquia',3),
(4, 'Andina e Insular',4),
(5, 'Pacifico',5);
