-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `book_form`;
CREATE TABLE `book_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_b` varchar(255) NOT NULL,
  `email_b` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int NOT NULL,
  `arrivals` date NOT NULL,
  `days` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `book_form` (`id`, `name_b`, `email_b`, `phone`, `address`, `location`, `guests`, `arrivals`, `days`) VALUES
(40,	'qww',	'aswaffd@ru.ru',	'111',	'West',	'South',	1,	'2022-12-09',	2),
(42,	'Hucker',	'hasjc@cz.cz',	'1111',	'hq',	'CannKUN',	2,	'2022-12-08',	14),
(48,	'esdfgh',	'xcfgvbh@cz.cz',	'1234567899',	'sdfgh',	'sdfgvbhnjm',	1,	'2022-12-11',	2),
(52,	'Boris',	'boris@uk.uk',	'777111222',	'London UK',	'Kyevvvv',	1,	'2022-12-24',	1),
(54,	'aa',	'aaaa@cz.cz',	'77777',	'Qwert',	'QQwerret',	1,	'2022-12-14',	1),
(55,	'Alwka',	'a@cz.cz',	'77777',	'Chaloupeckeho 1915_ ',	'qqqqqqq',	1,	'2022-12-11',	1),
(63,	'hren',	'hren99@cz.cz',	'777999888',	'hren 99',	'hren',	10,	'2022-12-12',	14),
(64,	'Wer',	'macht@cz.cz',	'722277555',	'Saxon',	'Dresden',	1,	'2022-12-29',	14),
(68,	'Mari',	'fmg4251@gmail.com',	'774409174',	'Behounska 4',	'Ukraine',	1,	'2023-01-19',	1);

DROP TABLE IF EXISTS `comment_form`;
CREATE TABLE `comment_form` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `topic_id` tinyint NOT NULL,
  `message` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sender` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `comment_form` (`comment_id`, `topic_id`, `message`, `sender`, `date`) VALUES
(6,	1,	'     Good. I will recommend it. Nice!!!',	'Aleks',	'2022-12-04 16:14:17'),
(7,	1,	'What is it??? It is trable Bro',	'Aleks',	'2022-12-04 16:15:03'),
(10,	2,	'            It was AWFUL!! Bad company. Bad tour!!\r\n',	'Twister',	'2022-12-04 16:29:14'),
(27,	1,	'I jope this site will get at leeast 35',	'Arlan',	'2022-12-04 19:09:26'),
(33,	5,	'France is Magnifique. Oui. Paris in my heart ♥♥',	'Luter King',	'2022-12-04 20:20:10'),
(34,	5,	'Nepohane misce dlya vidpochunku z simyeyu. Pojichala tydu z sestroyu, vidvidaly Versal ta Luvr, excursovod vidstij.',	'Mario',	'2022-12-04 20:37:36'),
(35,	4,	'High quality. I spent a great time. m/       ',	'Tigra',	'2022-12-04 23:43:55'),
(36,	1,	'Not bad. I have been to Mexico. Everything was good.',	'Matej',	'2022-12-05 13:18:26'),
(37,	4,	'Good. Good.\r\nI will try to try it again. \r\nI liked so much..',	'Dijkstra',	'2022-12-05 16:45:30'),
(38,	2,	'It Was AWfuL anD I donT Like!! ♀☼☻',	'Arab',	'2022-12-05 17:40:56'),
(39,	3,	'Reaaly like it.\r\nGOOOOOOOOOOOOD!                ',	'Gektor',	'2022-12-05 21:44:23'),
(44,	3,	'I have been to Austria ( Oestereich ).\r\nThe best ski is in Linz.\r\n♥♥ Linz ist im meinem Herzen ♥♥               ',	'Stark',	'2022-12-07 11:01:53'),
(45,	5,	'Prague Is TOP. \r\nBut I like Brno more then Prague.\r\nYeeyeeeyeyeyeyyeyeee...',	'Chuck Norris',	'2022-12-07 14:32:37'),
(47,	1,	'I do not like!!! It is not good!!',	'Riko',	'2022-12-08 14:52:01'),
(48,	5,	'RRRRRRR /\r\nI Reeeealy like. It is awesome. OMG ☻☻ ',	'Tigra Ivanovich',	'2022-12-08 20:13:55'),
(56,	2,	'Самый лучший сайт',	'Alina',	'2022-12-09 09:55:26'),
(57,	4,	'I L0V3 KRABOVYJE PALO4KI..\r\n                                  :::ALO4KI..\r\n                                  ::::::::O4KI..\r\n                                  :::::::::::::::KI..',	'KRAB',	'2022-12-10 15:25:38'),
(58,	5,	'Why I cannot send the ####### XSS.\r\nI dont like it bro.\r\nI dont like you.. :(\r\n',	'HuckerZ',	'2022-12-10 15:27:12'),
(60,	1,	'I will destroy this website. \r\nU ####### cheater.\r\nI am so AnGrY!!!!!',	'HuckerZ',	'2022-12-10 20:33:37'),
(66,	5,	'☺☻♥♦♣♠•◘○►☼◄▲▼',	'aa',	'2022-12-13 08:08:27'),
(70,	5,	'Ja nastojaschij HUCKERZ',	'Wasya',	'2022-12-13 11:37:13'),
(71,	5,	'LOV3 TH1S W3B ♥♥♥♥',	'qqqq',	'2022-12-13 11:44:34'),
(78,	1,	'I need to write smth but I dont know wat',	'Vlad',	'2022-12-13 23:12:39'),
(79,	4,	'Proverka svyazi',	'Kniga',	'2022-12-13 23:13:24'),
(81,	4,	'I have a problem with Header:Location',	'XZZX',	'2022-12-13 23:16:09'),
(82,	1,	'We Did It Mane',	'Aleks',	'2022-12-13 23:19:50'),
(93,	3,	'Was ist das.',	'QQQ',	'2022-12-14 08:08:04'),
(117,	4,	'Co to je??????? Bro',	'Wasya',	'2022-12-14 14:45:17'),
(118,	4,	'always wanted to visit australia',	'nadia',	'2022-12-15 14:49:27'),
(120,	2,	'Looking forward to it star heard star',	'skydiver',	'2022-12-17 12:14:02'),
(121,	2,	'heart heart heart',	'remake',	'2022-12-17 12:15:03'),
(122,	3,	'Yes. AAAA. Where is Redirect?',	'Kniga',	'2022-12-17 12:17:20'),
(123,	5,	'I am So happy, that you have ended your website.',	'CatsLover',	'2022-12-17 14:53:50'),
(125,	2,	'Fortunately it was the best day in my life. Buka buka buka',	'Mario',	'2022-12-20 18:28:45'),
(127,	2,	'Zajima te jenom ta tva webova stranka, takze mej se.',	'\r\n        Mario',	'2022-12-20 18:31:58'),
(165,	1,	'adssssssssssssssssssssssss',	'Davos',	'2022-12-21 16:54:50'),
(166,	1,	'uuuuuuuuuuuuser111',	'Aleks',	'2022-12-21 16:55:47'),
(167,	2,	'Do you have a minute for a cup of tea with me?♥♥ ',	'Mario',	'2022-12-21 17:04:39'),
(168,	1,	'Zfucjvjvjvjvjvjvj',	'Kate',	'2022-12-21 17:11:05'),
(169,	4,	'I really like your web ♥♥♥',	'alena',	'2022-12-21 20:08:06'),
(170,	1,	'sdfqweqw',	'Davos',	'2022-12-21 22:46:33'),
(171,	5,	'Exellent my friend ♥',	'Aleks',	'2022-12-22 10:10:32'),
(184,	5,	'TEST_INSERT_COMMENT_VIA_DATABASE_>>longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_longest_string_will_destroy_everything_',	'Aleks',	'2022-12-22 21:01:50'),
(192,	1,	'eeeeeeee',	'Aleks',	'2022-12-24 19:34:03');

DROP TABLE IF EXISTS `pagination`;
CREATE TABLE `pagination` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `emp_country` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_info` varchar(2000) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `pagination` (`emp_id`, `emp_country`, `emp_name`, `emp_email`, `emp_info`) VALUES
(1,	'USA',	'\"Tom&Co\"',	'tom@mail.us',	'Our American partners. The company provides the following types of services: ► Realization of a tourist product; ► Booking of individual tourist services, including excursions; ► Implementation of individual tourist services, including excursions. The company is one of the best in its country.'),
(2,	'Canada',	'\"Raider\"',	'raid@mail.us',	'The company provides the following types of services:► Promotion of a tourist product; ► Booking a tourist product; ► Realization of a tourist product.'),
(3,	'Australia',	'\"Kenga\"',	'ken@au.au',	'The company provides the following types of services: ► Choice of type of tourism and tour route; ► Specification of the number of days of the tour; ►- Choice of hotel category; ► Catering. Just text them.'),
(4,	'Czech Republic',	'\"Cesta\"',	'cesta@mail.cz',	'Our Czech partners. The company provides the following types of services: ► Promotion of a tourist product; ► Booking a tourist product; ► Realization of a tourist product.'),
(5,	'France',	'\"Wer\"',	'wer@france.com',	'One of the best French company provides the following types of services: ► Promotion of a tourist product; ► Booking a tourist product; ► Realization of a tourist product.'),
(6,	'Mexico',	'\"Bingo\"',	'mex@bingo.com',	'The company provides the following types of services: ► Choice of type of tourism and tour route; ► Specification of the number of days of the tour; ► Choice of hotel category; ► Catering. The company is one of the best in its country.'),
(7,	'Spain',	'\"Amigo\"',	'amigo@gmail.es',	'Our Spanish partners. The company provides the following types of services: ► Realization of a tourist product; ► Booking of individual tourist services, including excursions; ► Implementation of individual tourist services, including excursions.'),
(8,	'Bali',	'\"Travelato\"',	'travel@bali.com',	'The company provides the following types of services:► Promotion of a tourist product; ► Booking a tourist product; ► Realization of a tourist product.'),
(9,	'Russia',	'\"SPB\"',	'spb@mail.ru',	'The best Russian company provides the following types of services:► Choice of type of tourism and tour route; ► Specification of the number of days of the tour; ► Choice of hotel category; ► Catering. You will be satisfied with the service. '),
(10,	'Ireland',	'\"Paris\"',	'paris@gmail.com',	'Our Irish partners. The company provides the following types of services: ►Realization of a tourist product; ► Booking of individual tourist services, including excursions; ► Implementation of individual tourist services, including excursions. The company is one of the best in its country.'),
(11,	'UAE',	'\"Luft\"',	'luft@gmail.com',	'Our Arab partners. The company provides the following types of services:► Choice of type of tourism and tour route; ► Specification of the number of days of the tour; ► Choice of hotel category; ► Catering.'),
(12,	'Portugal',	'\"Waffe\"',	'potru@gmail.com',	'The company provides the following types of services: ► Promotion of a tourist product; ► Booking a tourist product; ► Realization of a tourist product.'),
(13,	'China',	'\"Panda\"',	'panda@gmail.cn',	'Our Chinese partners. The company provides the following types of services: ► Realization of a tourist product; ► Booking of individual tourist services, including excursions; ► Implementation of individual tourist services, including excursions. The company is one of the best in its country. '),
(14,	'Ukraine',	'\"Taras\"',	'tar@mail.ua',	'Our Ukrainian partners. The company provides the following types of services: ► Promotion of a tourist product; ► Realization of a tourist product.'),
(15,	'USA',	'\"A&MG\"',	'us@gmail.us',	'24/7 online'),
(16,	'Canada',	'\"NiaGaRRa\"',	'us@gmail.us',	'24/7 online, Website'),
(17,	'USA',	'\"GTA\"',	'gta@lax.us',	'Good partners from San Andreas'),
(18,	'Russia',	'\"Medved\"',	'med@ved.ru',	'Good and best partners from Syberia. Best price in Easr Europe.');

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE `user_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user_form` (`id`, `firstname`, `email`, `password`, `user_type`, `login`) VALUES
(1,	'Aleks',	'aleks@cz.cz',	'$2y$10$iO6S2s51jsq2H6ajq6Fe1Obi4Phraj5mqy.c.js.Ku/m4TE0CosIa',	'user',	'aleks'),
(2,	'Tigra',	'tigra@cz.cz',	'$2y$10$mCSTTlgJ5IUrYukPS47h1unX1914/i9ZIb1Jc3.gMwH4ESvQk6LiO',	'user',	'tigra'),
(3,	'Kate',	'kat@kat.com',	'$2y$10$IcX5dd99Go2nbiv6KbztsO4ZtE2/vAD2PHmWQgwTGAGlu8V2XAf9K',	'admin',	'kate'),
(4,	'Arlan',	'arlan@ar.com',	'$2y$10$iGKCoJDq0Y6W2yOBm55GYOOlyTl2s4lwMzj6VyxmSrcJrtSwFHWly',	'user',	'arlan'),
(5,	'Master',	'master@mail.cz',	'$2y$10$6F9o74B0zx7CLokpnTLKzepDMCNk3.VHmKK8TSWjEQu/u4i7OcTsC',	'user',	'master'),
(6,	'Qwerty',	'qwerty@cz.cz',	'$2y$10$NScxjxA.4j/o1sU3dA6XderdnrGrjrzqOS3Sq082PHxrFiQ/S/LKa',	'user',	'qwerty'),
(7,	'Billy',	'billy@cz.cz',	'$2y$10$RzXPnwsHO/TXJ6HJdk1SC.3h1B8rvWbZ54qerqvF4V2Dl1Zz/zhSu',	'admin',	'billy'),
(8,	'zxcvb',	'zxcvb@cz.cz',	'$2y$10$l3gRLAwiBeBgQh0x5cwLguWuJgc0E/JSEHSyxOPnRT3k31byNZ8oW',	'user',	'zxcvb'),
(99,	'Wee',	'wsefe@c.cz',	'$2y$10$wCaq/kBM6V.zy8xlFMWaQOGYc/giDVz9A31QmutsHWxDojbI1LQPK',	'user',	'qwwwe'),
(107,	'TroyZ',	'troy@czz.cz',	'$2y$10$.EbtJhmdk.HzkNBTAwoA/O3P6TZFqLANjVLI.CPYIS4svyOFEXFk.',	'user',	'troy10'),
(108,	'test',	'test@cz.cz',	'$2y$10$FJOlghwD1AUlbPCgpTR4c.4UApmcrU8jatGEsyJTYdLX7691cf4RC',	'user',	'test1'),
(131,	'trew',	'trew@as.vg',	'$2y$10$LDtI4GgnL0qwAnWewQrdEuPPmh8Z31eITNmghpdPkUK4W8JEeuUxy',	'user',	'qwer12'),
(132,	'Aleks',	'aleks12@cz.cz',	'$2y$10$2XllBEOE8hiiCdA9X7Td3O9XmN1cBBTS4yhmidx94X8xft43aW2mq',	'admin',	'aleks12'),
(133,	'Troy',	'troy102@cz.cz',	'$2y$10$rI6veLZJfr7Ia5883qVmeu383FCOEEPEj8EUeilCpRB2/ENvgqiNK',	'admin',	'troy102'),
(135,	'Tyrion',	'lan@cz.cz',	'$2y$10$iaUQa146VjNZ7Qclo4EseOTsJanS3K0R1K0NsJFtlgC4W0aj8Vxa.',	'admin',	'lanister'),
(136,	'First',	'first@cz.cz',	'$2y$10$uCf.E7GOyNfAabBT4E9s1uPnFBDI4aDBnSH/HHtvScd67yq/CqF4C',	'admin',	'first'),
(137,	'West',	'west@cz.cz',	'$2y$10$76giniCRQBztaSqIEeKq5OZPyKuDWhcLXQ8nBPnT0MXAIdh7M5Rwy',	'admin',	'fifty'),
(138,	'Davos',	'sirdavos@cz.cz',	'$2y$10$i6HdPBsHnMCXyJH42Xrim.h49AwvaiTD63DoCVeiMAGVyHN21hWXW',	'admin',	'sirdavos'),
(139,	'masterz',	'masterz@cz.cz',	'$2y$10$bUyAXaUpU8BF.rwFDynmoeHBB..dNpR6SfI4.4cGnZG7J2K71ElKK',	'user',	'masterz'),
(140,	'nadia',	'zakopaylona@gmail.com',	'$2y$10$8KMCOSPPTId5MtGAxGG4lODtF.x4lw.yVvag1o7X2xUYIMUU316xW',	'admin',	'zakopnad'),
(141,	'Yurnero',	'vevu@gmail.com',	'$2y$10$YRyE5lEC.eT7AST.Fe2hnewLLeoK0GLDQSBU2tp0hLSCrPq1Snr.6',	'admin',	'juggernaut'),
(142,	'Mira',	'matejm42@fel.cvut.cz',	'$2y$10$Mu/nAKZ2ojKbbYU53zQfTuu3y/OpIWyV0B4H3gq5L8uAMT7p3mYbK',	'admin',	'spolubydla'),
(143,	'Mario',	'fmg4251@gmail.com',	'$2y$10$loNB2cqjNSK7AuITIf5IWuH7oROmKLi3aIMytGJzdTUadBCuPgpIa',	'admin',	'mario'),
(145,	'hater',	'hater@cz.cz',	'$2y$10$kjOcnEP2uUM9Rf2CLWHNYu.EQYCel9VZhU6iEDlVouwr/d8lAc1fa',	'admin',	'hater'),
(146,	'alena',	'ffffff@gmail.com',	'$2y$10$h.XL4rsTCmaRc9rWnebVJuhjN6rnNd6neOLC7/Jsgt9Bip2e/iGim',	'admin',	'koti'),
(148,	'aa',	'asdvxfb1@dcs.cz',	'$2y$10$159GdLrLRg1bt/WhsoB1s.4ZkGDbw2tw8qbJV7bm0iLZGcCfrvxMe',	'admin',	'aleks123');

-- 2022-12-25 19:18:42
