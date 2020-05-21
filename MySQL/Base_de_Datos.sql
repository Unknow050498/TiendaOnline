
CREATE DATABASE coffeeshop_datas;               --Base de Datos creada

/*================================TABLA CANTIDADES======================================*/
CREATE TABLE bebidas(
Id INT NOT NULL,
Amounts VARCHAR(60) NOT NULL);

INSERT INTO bebidas (Id, Amounts) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5');

ALTER TABLE bebidas ADD PRIMARY KEY (Id);
/*======================================================================================*/

/*====================================TABLA REGISTRO====================================*/
CREATE TABLE registro(
    Id INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(70) NOT NULL,
    Email VARCHAR(70) NOT NULL,
    Password VARCHAR(75) NOT NULL);

ALTER TABLE registro ADD PRIMARY KEY (Id);
/*======================================================================================*/