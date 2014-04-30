CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(254) NOT NULL,
  `director` varchar(254) NOT NULL,
  `year` int(4) UNSIGNED NOT NULL,
  `keywords` varchar(254) NOT NULL,
  PRIMARY KEY  (`id`),
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- i did should parser it from imdb :/
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(1, 'Gravity', 'Alfonso Cuaron', '2013', 'Dramma,Sci-Fi,Thriller');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(2, 'Inception', 'Chrispoher Nolan', '2010', 'Action,Adventure,Sci-Fi,Mystery,Thriller');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(3, 'Donnie Darko', 'Richard Kelly', '2002', 'Dramma,Mystery,Sci-Fi');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(4, 'The Rock', 'Michael Bay', '1996', 'Action,Adventure,Thriller');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(5, 'Jurassic Park', 'Steven Spielberg', '1993', 'Adventure,Sci-Fi');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(6, 'Back to the Future', 'Robert Zemechkis', '1985', 'Adventure,Comedy,Sci-Fi');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(7, 'Star Wars: Episone V - The Empire Strikes Back', 'Irvin Kershner', '1980', 'Action,Sci-Fi,Adventure');
INSERT INTO `movies` (`id`, `title`, `director`, `year`, `keywords`) 
  VALUES(8, 'The Great Dictator', 'Charles Chaplin', '1940', 'Comedy,Drama,War');

Reviews



Ratings



Comments


