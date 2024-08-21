DROP TABLE IF EXISTS `notebook`;

CREATE TABLE `notebook`(
	`id_notebook` int NOT NULL AUTO_INCREMENT,
	`nome_notebook` varchar(150) NOT NULL,
	`valor_notebook` varchar(150) NOT NULL,
	`processador` varchar(150) NOT NULL,
	`mem_ram` varchar(150) NOT NULL,
	`armaz` varchar(150) NOT NULL,
	`sis_op` varchar(150) NOT NULL,
	`imagem` varchar(100) NOT NULL,
	primary KEY (`id_notebook`)
)

INSERT INTO `notebook` VALUES
   (1, 'Acer Aspire Nitro 5', 'R$7.999,00', 'Intel Core i5 de 9ª geração (2.4 a 4.1 GHz)', '8 GB expansível até 32 GB', 'HD de 1 TB expansível até 2 TB + SSD de 128 GB expansível até 512 GB', 'Windows 10 Home', './fotos-note/notebook-acer.png'),
   (2, 'MacBook Air', 'R$8.099,00', 'Intel Core i5', '8 GB', 'SSD de 256 GB', 'macOS', './fotos-note/notebook-apple.png'),
   (3, 'Dell Inspiron i15 3501', 'R$6.049,00', 'Intel Core i7 de 11ª geração (2.8 a 4.7 GHz)', '8 GB', 'SSD de 128 GB + HD de 1 TB', 'Windows 10 Home', './foto-note/notebook-dell.png'),
   (4, 'ASUS VivoBook X543', 'R$2.299,00', 'Intel i5 de 8ª geração (1.60 a 3.40 GHz)', '4 GB expansível até 8 GB', 'SSD de 256 GB', 'Windows 10 Home', './fotos-note/notebook-asus.png'),
   (5, 'Lenovo Ideapad S145', 'R$5.100,00', 'Intel Core i5 de 10ª geração (1.0 GHz)', '8 GB expansível até 20 GB', 'SSD de 256 GB com slot livre para HD', 'Windows 10 Home', './fotos-note/notebook-lenovo.png')
   