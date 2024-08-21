-- Se tiver tabala existente ele deleta
DROP TABLE IF EXISTS `troca-de-conhecimento`.`users`;
DROP TABLE IF EXISTS `troca-de-conhecimento`.`postagens`;

-- Criar tabela
CREATE TABLE `troca-de-conhecimento`.`users` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
)
CREATE TABLE `troca-de-conhecimento`.`postagens`(
	`id_postagem` int NOT NULL AUTO_INCREMENT,
	`img_postagem` varchar(255),
	`text_postagem` varchar(255),
	`date_postagem` date NOT NULL,
	PRIMARY KEY (`id_postagem`)
)

-- Inserir dados na tabela
INSERT INTO `troca-de-conhecimento`.`users` values

INSERT INTO `troca-de-conhecimento`.`postagens` values 
	(1, "", "Essa é a primeira Postagem feita pelo ADMIN.", "2023-10-26 08:22:00")
