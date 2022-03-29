/*  Comentario en SQL 
    SQL: Structure Query Language - Lenguaje estructurado de consulta

    Base de Datos: Una coleccion de datos que estan organizados

    Gestores o manejadores de BD son los programas que nos permiten administrar los datos

    Ejemplos de gestores de BD: Microsoft Access, Microsoft SQL Server, ORACLE, Informix, DBASE, SQL Lite, PostgreSQL, MySQL

    Una sentencia SQL es una lidea de codigo para trabajar con nuestra BD

    Existen dos tipos de sentencias SQL:

    1) Sentencias estructurales: Son las que nos permitiran crear, modificar o eliminar objetos, usuarios y propiedades de nuestra BD

    2)Sentencias de Datos: Son las que nos permitiran insertar, eliminar, modificar y buscar informacion en nuestra BD

    En MySQL existen dos tipos de engine para tablas: 

    1) MySAM - Tablas planas, son como si fuera a trabajar datos en Excel
    2) InnoDB - Tablas relacionales, son como si fuera a trabajar datos en Access
*/

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),
    PRIMARY KEY(email),
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais (id_pais, pais) VALUES
    (1,"Mexico"),
    (2,"Colombia"),
    (3,"Guatemala"),
    (4,"España"),
    (5,"Brasil"),
    (6, "Uruguay"),
    (7, "Peru"),
    (8, "Argentina"),
    (9, "Chile"),
    (10, "Paraguay"),
    (11, "Honduras"),
    (12, "El Salvador"),
    (13, "Nicaragua"),
    (14, "Costa Rica"),
    (15, "Panama"),
    (16, "Venezuela"),
    (17, "Ecuador"),
    (18, "Bolivia"),
    (19, "Canada"),
    (20, "Estados Unidos"),
    (21, "Groenlandia"),
    (22, "Republica Dominicana"),
    (23, "Haitì"),
    (24, "Cuba"),
    (25, "Belice"),
    (26, "Inglaterra"),
    (27, "Francia"),
    (28, "Alemania"),
    (29, "Italia"),
    (30, "Japon"),
    (31, "China"),
    (32, "Egipto"),
    (33, "Sudafrica"),
    (34, "Australia"),
    (35, "Nueva Zelanda");