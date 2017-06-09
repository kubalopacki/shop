-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `telefon` varchar(30) NOT NULL DEFAULT '-',
  `miasto` varchar(30) NOT NULL DEFAULT '-',
  `kod_pocztowy` varchar(30) NOT NULL DEFAULT '-',
  `nr_domu` varchar(30) NOT NULL DEFAULT '-',
  `ulica` varchar(30) NOT NULL DEFAULT '-',
  `imie_nazwisko` varchar(30) NOT NULL DEFAULT '-',
  `password` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customers` (`telefon`, `miasto`, `kod_pocztowy`, `nr_domu`, `ulica`, `imie_nazwisko`, `password`, `login`, `customer_id`) VALUES
('601288895',	'Świdnica',	'58-100',	'3',	'Norwida',	'Kuba Łopacki',	'abcd',	'uzytkownik',	1),
('601288895',	'Świdnica',	'58-100',	'1',	'Norwida',	'Kuba Łopacki',	'9io9io',	'Kuba',	8);

-- 2017-06-09 11:09:41
