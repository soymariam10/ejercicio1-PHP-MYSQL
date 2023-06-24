-- Active: 1687626907076@@127.0.0.1@3306@formulario
CREATE DATABASE formulario;
USER campus;
CREATE TABLE registro(
    id_persona INT PRIMARY KEY AUTO_INCREMENT KEY NOT NULL,
    nombresRegistro VARCHAR (50),
    apellidosRegistro VARCHAR (50),
    documentoRegistro INT NOT NULL,
    fechanacRegistro DATE

);