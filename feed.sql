CREATE TABLE chave_valor (
  chave int NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  mensagem varchar(255) NOT NULL,
  imagem BLOB,
  PRIMARY KEY (chave)
);


SELECT chave, valor FROM chave_valor WHERE chave = 2;