-- Se tiver tabala existente chamada filme ele deleta
DROP TABLE IF EXISTS `filme`;

-- Criar tabela
CREATE TABLE `filme` (
  `id_filme` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `lancamento` datetime DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `diretores` varchar(100) DEFAULT NULL,
  `roteiristas` varchar(100) DEFAULT NULL,
  `bilheteria` varchar(100) DEFAULT NULL,
  `orcamento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_filme`)
)
-- Inserir dados na tabela
INSERT INTO `filme` VALUES 
(1, 'Guerra Ifinita', './imagens/poster-guerra-infinita.png', '2018-04-26 00:00:00', 'Açao Ficção, Cientifica, Super-Herói, Aventura e Fantasia', 'Anthony Russo e Joe Russo', 'Stephen McFeely e Christopher Markus', 'US$ 2,052 bilhões', 'US$ 316 milhões'),
(2, 'O Poderoso Chefão', './imagens/poster-poderoso-chefao.png', '1972-03-24 00:00:00', 'Mafia, Drama e Policia', 'Fancis Ford Coppola', 'Fancis Ford Coppola e Mario Puzo', 'US$ 120 milhoes', 'US$ 2 milhões'),
(3, 'Parasita', './imagens/poster-parasita.png', '2019-11-07', 'Suspense', 'Joon-ho Bong', 'Joon-ho Bong e Jin Won Han', 'US$ 204 milhoes', 'US$ 11 milhões'),
(4, '1917', './imagens/poster-1917.png', '2020-01-23', 'Guerra', 'Sam Mendes', 'Sam Mendes e Krysty Wilson-Cairns', 'US$ 384,6 milhoes', 'US$ 100 milhões'),
(5, 'O Irlândes', './imagens/poster-o-irlandes.png', '2020-07-08', 'Suspense e Biográfico', 'Martin Scorcese', 'Steve Zaillian', 'Não teve exibição cinematográfrica', 'US$ 160 milhões'),
(6, 'O Auto da Compadecida', './imagens/poster-auto-da-compadecida.png', '2000-09-10', 'Comédia e Aventura', 'Guel Arraes', 'Guel Arraes e João Falcão', 'R$ 11,4 milhões', 'R$ 400 mil');
