CREATE DATABASE BANCO;

USE BANCO;

CREATE TABLE Cidade (
    c_id INT PRIMARY KEY AUTO_INCREMENT,
    c_nome VARCHAR(100),
    c_estado CHAR(2)
);

CREATE TABLE Pessoa (
    p_id INT PRIMARY KEY AUTO_INCREMENT,
    p_nome VARCHAR(100),
    P_email VARCHAR(256),
    p_endereço VARCHAR(100),
    p_bairro VARCHAR(100),
    p_cep VARCHAR(10),
    c_id INT,
    FOREIGN KEY (c_id) REFERENCES Cidade(c_id)
);

CREATE TABLE Animal (
    a_id INT PRIMARY KEY AUTO_INCREMENT,
    a_nome VARCHAR(100),
    a_especie VARCHAR(100),
    a_raça VARCHAR(100),
    a_datan DATE,
    a_idade INT(2),
    a_castrado BOOL,
    p_id INT,
    FOREIGN KEY (p_id) REFERENCES Pessoa(p_id)
);