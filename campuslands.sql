CREATE DATABASE campuslands;

USE campuslands;

CREATE TABLE campers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreCamper VARCHAR(50),
    apellidoCamper VARCHAR(50),
    fechaNacimiento DATE,
    idRegion INT,
    Foreign Key (idRegion) REFERENCES regiones(id)
);
CREATE TABLE paises(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombrePais VARCHAR(50)
);

CREATE TABLE departamentos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreDepartamento VARCHAR(50),
    idPais INT,
    Foreign Key (idPais) REFERENCES paises(id)
);

CREATE TABLE regiones(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreRegion VARCHAR(50),
    idDepartamento INT,
    Foreign Key (idDepartamento) REFERENCES departamentos(id)
);

