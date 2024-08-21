DROP TABLE IF EXISTS `jogadores`;
DROP TABLE IF EXISTS `perguntas`;

CREATE TABLE `jogadores`(
	`id_jogador` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(50) NOT NULL,
	`acerto` int NOT NULL,
	PRIMARY KEY (`id_jogador`)
)
CREATE TABLE `perguntas`(
	`id_pergunta` int NOT NULL AUTO_INCREMENT,
	`pergunta` varchar(500) NOT NULL,
	`resposta_certa` varchar(100) NOT NULL,
	`opcao_1` varchar(100) NOT NULL,
	`opcao_2` varchar(100) NOT NULL,
	`opcao_3` varchar(100) NOT NULL,
	`opcao_4` varchar(100) NOT NULL,
	primary KEY (`id_pergunta`)
)

INSERT INTO `perguntas` VALUES
	(1, 'Qual é o nome do protagonista do desenho Hora de Aventura?', 'Finn', 'Finn', 'Jake', 'John', 'Bob'),
	(2, 'Em O Laboratório de Dexter, qual é o nome da irmã de Dexter, que sempre tenta expor seus experimentos?', 'Dee Dee', 'Dee Dee', 'Mandy', 'Bubbles', 'Buttercup'),
	(3, 'Quem é o personagem verde e esbelto que adora dinheiro no desenho As Meninas Superpoderosas?', 'Ace', 'Mojo Jojo', 'Professor Utônio', 'Ace', 'Ricardito'),
	(4, 'Qual é o nome da série animada que segue as aventuras de Mac e Blooregard na mansão para amigos imaginários?', 'Foster, o Menino de Ouro', 'Vila Sésamo', 'Foster, o Menino de Ouro', 'O Poderoso Chefinho', 'Bob Esponja Calça Quadrada'),
	(5, 'No desenho Apenas um Show, qual é o nome do guaxinim protagonista que trabalha em um parque?', 'Rigby', 'Rigby', 'Mordecai', 'Clarence', 'Gumball');
	