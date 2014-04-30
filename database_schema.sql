use movies;

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(254) NOT NULL,
  `director` varchar(254) NOT NULL,
  `year` int(4) UNSIGNED NOT NULL,
  `keywords` varchar(254) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- i did should use parser for it
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

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) UNSIGNED NOT NULL,
  `rating` int(2) UNSIGNED NOT NULL, -- Minimum is 1, maximum is 10, like 10 stars
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- and for this table i did should use generator
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(1, 1, 10);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(2, 1, 9);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(2, 1, 6);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(3, 1, 5);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(4, 1, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(5, 2, 9);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(6, 2, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(7, 3, 8);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(8, 3, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(9, 4, 7);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(10, 4, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(11, 5, 6);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(12, 5, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(13, 6, 5);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(14, 6, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(15, 7, 4);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(16, 7, 1);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(17, 8, 3);
INSERT INTO `reviews` (`id`, `movie_id`, `rating`) VALUES(18, 8, 1);

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) UNSIGNED NOT NULL,
  `author` varchar(254) NOT NULL,
  `text` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`id`, `movie_id`, `author`, `text`, `created`) VALUES(1, 1, 'Mickey Mouse', 'Great movie!', NOW());
INSERT INTO `comments` (`id`, `movie_id`, `author`, `text`, `created`) VALUES(2, 1, 'Donald Duck', 'Wonderful work!', NOW());
INSERT INTO `comments` (`id`, `movie_id`, `author`, `text`, `created`) VALUES(3, 2, 'Bob', 'I recommend it', NOW());
INSERT INTO `comments` (`id`, `movie_id`, `author`, `text`, `created`) VALUES(4, 3, 'John', 'It is the best movie!', NOW());









