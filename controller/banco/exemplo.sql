DROP DATABASE IF EXISTS projetointegrador;

CREATE DATABASE projetointegrador DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE projetointegrador;

DROP USER IF EXISTS 'admvini'@'localhost';

CREATE USER 'admvini'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON projetointegrado.* TO 'admvini'@'localhost';

CREATE TABLE usuario(
  nomeLogin VARCHAR(40) NOT NULL, 
  senha VARCHAR(30) NOT NULL,
  PRIMARY KEY (nomeLogin)
);

create table lote(
  numLote INTEGER NOT NULL,
  dtRecebimento DATE NOT NULL,
  dtEntrega DATE NOT NULL,
  numRecebido INTEGER NOT NULL,
  numEntregue INTEGER NOT NULL,
  numMorte INTEGER NOT NULL,
  PRIMARY KEY (numLote)
);

create table gastos(
  numLote INTEGER NOT NULL,
  gtVeterinario FLOAT NOT NULL,
  gtMedicamento FLOAT NOT NULL,
  descMortalidade FLOAT NOT NULL,
  gtRacao FLOAT NOT NULL,
  txFunrural FLOAT NOT NULL,
  manPropriedade FLOAT NOT NULL,
  descAbate FLOAT NOT NULL,
  FOREIGN KEY (numLote) REFERENCES lote(numLote)
);

create table recebimentos(
  numLote INTEGER NOT NULL,
  valorBaseVigente FLOAT NOT NULL,
  boniPropriedade FLOAT NOT NULL,
  pontuacaoLote FLOAT NOT NULL,
  quiloBonificacao FLOAT NOT NULL,
  boniEmpresa FLOAT NOT NULL,
  boniProdutor FLOAT NOT NULL,
  valorSuino FLOAT NOT NULL,
  FOREIGN KEY (numLote) REFERENCES lote(numLote)
);