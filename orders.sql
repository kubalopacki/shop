-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `sposob_wysylki` tinytext NOT NULL,
  `wartosc_zamowienia` tinytext NOT NULL,
  `komentarz` tinytext NOT NULL,
  `customer_id` tinytext NOT NULL,
  `numer_telefonu` tinytext NOT NULL,
  `miasto` tinytext NOT NULL,
  `kod_pocztowy` tinytext NOT NULL,
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numer_domu` tinytext NOT NULL,
  `ulica` tinytext NOT NULL,
  `imie_nazwisko` tinytext NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2017-06-09 11:10:13
