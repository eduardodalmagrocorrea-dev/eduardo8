CREATE DATABASE IF NOT EXISTS academia_fitpro;
USE academia_fitpro;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    nascimento DATE NOT NULL,
    genero VARCHAR(20) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    plano VARCHAR(20) NOT NULL
);
