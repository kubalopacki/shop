-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `full_name` tinytext NOT NULL,
  `image` blob NOT NULL,
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `price` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`full_name`, `image`, `product_id`, `name_`, `price`) VALUES
('BSD Soulja',	'https://cdn.avebmx.pl/image/Manyfest/bsd-soulja-frame-blk.jpg',	2,	'Rama',	300),
('Division Valhalla',	'https://cdn.avebmx.pl/image/Valhalla/Division/Widelce/AveBMX_Ada%C5%9B/Division_Valhalla_Fork_Black_AveBMX.pl-2.jpg',	3,	'Widelec',	459),
('BSD Giraffic',	'https://cdn.avebmx.pl/image/0000Ave/bsdbarsgirafficxlblack001.jpg',	4,	'Kierownica',	259),
('34R Rim',	'https://cdn.avebmx.pl/image/47%20Mef/trzyczteryer%20(3%20of%2027).jpg',	5,	'Obrecz',	89),
('Animal Remix',	'https://cdn.avebmx.pl/image/Animal%202011/animal_remix_mix.jpg',	6,	'Mostek',	229),
('Vans Grips',	'https://cdn.avebmx.pl/image/27%20Uros/vans-131128-184.jpg',	7,	'Gripy',	29),
('34R Headset',	'https://cdn.avebmx.pl/image/34R/_MG_8799.jpg',	8,	'Stery',	15),
('BSD Donnasqueak',	'https://cdn.avebmx.pl/image/BSD/Opony/AveBMX_Ada%C5%9B/bsd-donnasqueak-tire-chocolate.jpg',	9,	'Opona',	65),
('34R Spoke',	'https://cdn.avebmx.pl/image/34R/_MG_8841.jpg',	10,	'Szprycha',	1),
('DT ',	'https://cdn.avebmx.pl/image/7%20Anna%202/ViewIewrwermage.jpg',	11,	'Nypel',	1),
('Kenda',	'https://cdn.avebmx.pl/image/stare_zdjecia6/detka.jpg',	12,	'Dętka',	10),
('34R Orto',	'https://cdn.avebmx.pl/image/34R/12423152312522135123253153352regerrrerg34235.jpg',	13,	'Korby',	549),
('34R Suport',	'https://cdn.avebmx.pl/image/34R/mid.jpg',	14,	'Support',	60),
('Cult Nylon',	'https://cdn.avebmx.pl/image/cult%202/142421124124214124124tumblr_nvvf4yEFyM1uiw7xvo1_1280.jpg',	15,	'Pedały',	45),
('Cult 410',	'https://cdn.avebmx.pl/image/38%20Uros/Kolo%20cult,%20lancuch%20(24%20of%2026).jpg',	16,	'Łańcuch',	39),
('BSD Front Street PRO',	'https://cdn.avebmx.pl/image/Manyfest/bsd-front-street-pro.jpg',	17,	'Piasta Przednia',	229),
('Eclat Cortex',	'https://cdn.avebmx.pl/image/WTP%202014/E446464clat_Cortex_rear_hub_01-960x640.jpg',	18,	'Piasta Tylna',	545),
('Division Seatpost',	'https://cdn.avebmx.pl/image/12%20Uros/Divizion11.jpg',	19,	'Sztyca',	38),
('BSD Acid Fat',	'https://cdn.avebmx.pl/image/000BART/Siodelko-BSD-Acid-Fat-Pivotal-1.jpg',	20,	'Siodło',	119),
('BSD Crackpipe',	'https://cdn.avebmx.pl/image/Sebek/bsdproductspegscrackpipe001.jpg',	21,	'Pegi',	39),
('Helmet ',	'https://cdn.avebmx.pl/image/0000Ave/kask-harsh-blue-przod.jpg',	22,	'Kask',	229),
('Burton Tinder',	'https://cdn.avebmx.pl/image/BURNT%20ORCHE/Tinder/Burton/Plecaki/AveBMX_Ada%C5%9B/98f2fd0774bcd2d5137186a84abca8ba.jpg',	23,	'Plecak',	349);

-- 2017-05-31 12:07:44
