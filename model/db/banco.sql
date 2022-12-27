CREATE DATABASE administracao_pap;

CREATE TABLE tb_admin(
  id_admin int(11) PRIMARY KEY AUTO_INCREMENT,
  nome_admin varchar(50),
  email_admin varchar(50),
  senha_admin varchar(50),
  foto_admin varchar(500)
)

CREATE TABLE tb_posto_identificacao(
  id_posto int(11) PRIMARY KEY AUTO_INCREMENT,
  identificador varchar(50),
  email_posto varchar(50),
  senha_posto varchar(50),
  provincia varchar(50),
  municipio varchar(50),
  bairro varchar(50),
  rua varchar(50),
  id_admin int(11),
  FOREIGN KEY (id_admin) REFERENCES tb_admin(id_admin)
)

CREATE TABLE tb_users(
  id_user int(11) PRIMARY KEY AUTO_INCREMENT,
  nome_user varchar(50),
  email_user varchar(50),
  idade_user int(3),
  sexo_user varchar(50),
  foto_user varchar(500),
);

CREATE TABLE tb_tipo_documento(
  id_documento int(11) PRIMARY KEY AUTO_INCREMENT,
  nome_documento varchar(50)
);

CREATE TABLE tb_agenda()
