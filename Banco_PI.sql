/*CREATE DATABASE PI_EAGLE;*/
CREATE DATABASE PI_EAGLE;


USE PI_EAGLE;

CREATE TABLE CADASTRO(
ID INT PRIMARY KEY IDENTITY(1,1),
EMAIL VARCHAR(100) NOT NULL UNIQUE,
NOME VARCHAR(50) NOT NULL,
SENHA VARCHAR (50) NOT NULL 
);
