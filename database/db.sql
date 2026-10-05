CREATE DATABASE gestao_produtos;
USE gestao_produtos;

CREATE TABLE produtos{
    produtos_id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produtos VARCHAR(50) NOT NULL,
    categoria_produtos VARCHAR(50) NOT NULL,
    preco_produtos VARCHAR(50) NOT NULL,
    estoque VARCHAR(50) NOT NULL,
    cadastrar_produtos VARCHAR(50) NOT NULL,
    };