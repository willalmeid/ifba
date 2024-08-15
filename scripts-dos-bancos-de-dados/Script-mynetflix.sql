-- Se tiver tabala existente chamada filme ele deleta
DROP TABLE IF EXISTS `filme`;

-- Criar tabela
CREATE TABLE mynetflix.`filme` (
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

INSERT INTO mynetflix.`filme` VALUES 
(1, 'Guerra Ifinita', './imagens/poster-guerra-infinita.png', '2018-04-26 00:00:00', 'Açao Ficção, Cientifica, Super-Herói, Aventura e Fantasia', 'Anthony Russo e Joe Russo', 'Stephen McFeely e Christopher Markus', 'US$ 2,052 bilhões', 'US$ 316 milhões'),
(2, 'O Poderoso Chefão', './imagens/poster-poderoso-chefao.png', '1972-03-24 00:00:00', 'Mafia, Drama e Policia', 'Fancis Ford Coppola', 'Fancis Ford Coppola e Mario Puzo', 'US$ 120 milhoes', 'US$ 2 milhões'),
(3, 'Parasita', './imagens/poster-parasita.png', '2019-11-07', 'Suspense', 'Joon-ho Bong', 'Joon-ho Bong e Jin Won Han', 'US$ 204 milhoes', 'US$ 11 milhões'),
(4, '1917', './imagens/poster-1917.png', '2020-01-23', 'Guerra', 'Sam Mendes', 'Sam Mendes e Krysty Wilson-Cairns', 'US$ 384,6 milhoes', 'US$ 100 milhões'),
(5, 'O Irlândes', './imagens/poster-o-irlandes.png', '2020-07-08', 'Suspense e Biográfico', 'Martin Scorcese', 'Steve Zaillian', 'Não teve exibição cinematográfrica', 'US$ 160 milhões'),
(6, 'Auto da compadecida', './imagens/poster-auto-da-compadecida.png', '2000-09-10', 'Comédia e Aventura', 'Guel Arraes', 'Guel Arraes e João Falcão', 'R$ 11,4 milhões', 'R$ 400 mil'),
(7, 'John Wick: De volta ao jogo', './imagens/poster-de-volta-ao-jogo.png', '2014-11-17', 'Ação', 'David Leitch e Chad Stahelski', 'Derek Kolstad', 'US$ 86,1 milhões', 'US$ 29 milhões'),
(8, 'O Pianista', './imagens/poster-o-pianista.png', '2003-03-07', 'Drama e Histórico', 'Roman Polanski', 'Roman Polanski e Ronald Harwood', 'US$ 120 milhões', 'US$ 35 milhões'),
(9, 'O Grande Ditador', './imagens/poster-o-grande-ditador.png', '1942-08-12', 'Comédia Sátira', 'Charles Chaplin', 'Charles Chaplin', 'US$ 5 milhões', 'US$ 2 milhões'),
(10, 'A Grande Aposta', './imagens/poster-a-grande-aposta.png', '2016-01-14', 'Drama Comédia e Biografia', 'Adam Mckay', 'Adam Mckay e Charles Randolph', 'US$ 28 milhões', 'US$ 133,4 milhões');

