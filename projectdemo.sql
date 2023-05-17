-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 05:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pop` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `department`, `region`, `pop`) VALUES
(1, 'Paris', 'Paris', 'Ile-de-France', '2,243,833'),
(2, 'Marseille', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '850,726'),
(3, 'Lyon', 'Rhone', 'Rhone-Alpes', '484,344'),
(4, 'Toulouse', 'Haute-Garonne', 'Midi-Pyrenees', '441,802'),
(5, 'Nice', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '343,304'),
(6, 'Nantes', 'Loire-Atlantique', 'Pays de la Loire', '284,970'),
(7, 'Strasbourg', 'Bas-Rhin', 'Alsace', '271,782'),
(8, 'Montpellier', 'Herault', 'Languedoc-Roussillon', '257,351'),
(9, 'Bordeaux', 'Gironde', 'Aquitaine', '239,157'),
(10, 'Lille', 'Nord', 'Nord-Pas-de-Calais', '227,560'),
(11, 'Rennes', 'Ille-et-Vilaine', 'Brittany', '207,178'),
(12, 'Reims', 'Marne', 'Champagne-Ardenne', '179,992'),
(13, 'Le Havre', 'Seine-Maritime', 'Upper Normandy', '175,497'),
(14, 'Saint-Etienne', 'Loire', 'Rhone-Alpes', '171,260'),
(15, 'Toulon', 'Var', 'Provence-Alpes-Cote d\'Azur', '164,532'),
(16, 'Grenoble', 'Isere', 'Rhone-Alpes', '155,637'),
(17, 'Dijon', 'Cote-d\'Or', 'Burgundy', '151,212'),
(18, 'Angers', 'Maine-et-Loire', 'Pays de la Loire', '147,571'),
(19, 'Villeurbanne', 'Rhone', 'Rhone-Alpes', '145,150'),
(20, 'Saint-Denis', 'Reunion', 'Reunion', '145,022'),
(21, 'Le Mans', 'Sarthe', 'Pays de la Loire', '142,626'),
(22, 'Nimes', 'Gard', 'Languedoc-Roussillon', '142,205'),
(23, 'Aix-en-Provence', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '141,438'),
(24, 'Brest', 'Finistere', 'Brittany', '141,303'),
(25, 'Clermont-Ferrand', 'Puy-de-Dome', 'Auvergne', '139,860'),
(26, 'Limoges', 'Haute-Vienne', 'Limousin', '139,150'),
(27, 'Tours', 'Indre-et-Loire', 'Centre', '134,817'),
(28, 'Amiens', 'Somme', 'Picardy', '133,448'),
(29, 'Metz', 'Moselle', 'Lorraine', '120,738'),
(30, 'Perpignan', 'Pyrenees-Orientales', 'Languedoc-Roussillon', '117,419'),
(31, 'Besancon', 'Doubs', 'Franche-Comte', '116,914'),
(32, 'Boulogne-Billancourt', 'Hauts-de-Seine', 'Ile-de-France', '114,205'),
(33, 'Orleans', 'Loiret', 'Centre', '114,167'),
(34, 'Rouen', 'Seine-Maritime', 'Upper Normandy', '110,933'),
(35, 'Mulhouse', 'Haut-Rhin', 'Alsace', '109,588'),
(36, 'Caen', 'Calvados', 'Lower Normandy', '108,954'),
(37, 'Saint-Denis', 'Seine-Saint-Denis', 'Ile-de-France', '106,785'),
(38, 'Nancy', 'Meurthe-et-Moselle', 'Lorraine', '105,421'),
(39, 'Saint-Paul', 'Reunion', 'Reunion', '103,346'),
(40, 'Argenteuil', 'Val-d\'Oise', 'Ile-de-France', '103,125'),
(41, 'Montreuil', 'Seine-Saint-Denis', 'Ile-de-France', '102,770'),
(42, 'Roubaix', 'Nord', 'Nord-Pas-de-Calais', '94,713'),
(43, 'Dunkirk', 'Nord', 'Nord-Pas-de-Calais', '92,005'),
(44, 'Tourcoing', 'Nord', 'Nord-Pas-de-Calais', '91,923'),
(45, 'Creteil', 'Val-de-Marne', 'Ile-de-France', '89,985'),
(46, 'Avignon', 'Vaucluse', 'Provence-Alpes-Cote d\'Azur', '89,683'),
(47, 'Nanterre', 'Hauts-de-Seine', 'Ile-de-France', '89,185'),
(48, 'Poitiers', 'Vienne', 'Poitou-Charentes', '87,697'),
(49, 'Courbevoie', 'Hauts-de-Seine', 'Ile-de-France', '87,469'),
(50, 'Fort-de-France', 'Martinique', 'Martinique', '87,216'),
(51, 'Versailles', 'Yvelines', 'Ile-de-France', '86,110'),
(52, 'Vitry-sur-Seine', 'Val-de-Marne', 'Ile-de-France', '85,413'),
(53, 'Colombes', 'Hauts-de-Seine', 'Ile-de-France', '85,398'),
(54, 'Asnieres-sur-Seine', 'Hauts-de-Seine', 'Ile-de-France', '82,327'),
(55, 'Aulnay-sous-Bois', 'Seine-Saint-Denis', 'Ile-de-France', '82,120'),
(56, 'Pau', 'Pyrenees-Atlantiques', 'Aquitaine', '81,166'),
(57, 'Rueil-Malmaison', 'Hauts-de-Seine', 'Ile-de-France', '79,426'),
(58, 'Saint-Pierre', 'Reunion', 'Reunion', '79,228'),
(59, 'Aubervilliers', 'Seine-Saint-Denis', 'Ile-de-France', '76,087'),
(60, 'Champigny-sur-Marne', 'Val-de-Marne', 'Ile-de-France', '75,510'),
(61, 'La Rochelle', 'Charente-Maritime', 'Poitou-Charentes', '75,170'),
(62, 'Saint-Maur-des-Fosses', 'Val-de-Marne', 'Ile-de-France', '74,816'),
(63, 'Antibes', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '74,120'),
(64, 'Calais', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '73,636'),
(65, 'Le Tampon', 'Reunion', 'Reunion', '73,365'),
(66, 'Cannes', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '73,234'),
(67, 'Beziers', 'Herault', 'Languedoc-Roussillon', '70,955'),
(68, 'Colmar', 'Haut-Rhin', 'Alsace', '67,615'),
(69, 'Saint-Nazaire', 'Loire-Atlantique', 'Pays de la Loire', '67,031'),
(70, 'Drancy', 'Seine-Saint-Denis', 'Ile-de-France', '66,410'),
(71, 'Bourges', 'Cher', 'Centre', '66,381'),
(72, 'Merignac', 'Gironde', 'Aquitaine', '66,142'),
(73, 'Ajaccio', 'Corse-du-Sud', 'Corsica', '65,542'),
(74, 'Issy-les-Moulineaux', 'Hauts-de-Seine', 'Ile-de-France', '64,355'),
(75, 'Levallois-Perret', 'Hauts-de-Seine', 'Ile-de-France', '64,253'),
(76, 'Villeneuve-d\'Ascq', 'Nord', 'Nord-Pas-de-Calais', '63,572'),
(77, 'Quimper', 'Finistere', 'Brittany', '63,550'),
(78, 'Valence', 'Drome', 'Rhone-Alpes', '63,405'),
(79, 'Noisy-le-Grand', 'Seine-Saint-Denis', 'Ile-de-France', '62,964'),
(80, 'La Seyne-sur-Mer', 'Var', 'Provence-Alpes-Cote d\'Azur', '62,082'),
(81, 'Antony', 'Hauts-de-Seine', 'Ile-de-France', '61,793'),
(82, 'Neuilly-sur-Seine', 'Hauts-de-Seine', 'Ile-de-France', '61,754'),
(83, 'Troyes', 'Aube', 'Champagne-Ardenne', '60,280'),
(84, 'Venissieux', 'Rhone', 'Rhone-Alpes', '59,855'),
(85, 'Clichy', 'Hauts-de-Seine', 'Ile-de-France', '58,916'),
(86, 'Sarcelles', 'Val-d\'Oise', 'Ile-de-France', '58,614'),
(87, 'Les Abymes', 'Guadeloupe', 'Guadeloupe', '58,534'),
(88, 'Pessac', 'Gironde', 'Aquitaine', '58,025'),
(89, 'Ivry-sur-Seine', 'Val-de-Marne', 'Ile-de-France', '57,732'),
(90, 'Chambery', 'Savoie', 'Rhone-Alpes', '57,342'),
(91, 'Niort', 'Deux-Sevres', 'Poitou-Charentes', '57,325'),
(92, 'Lorient', 'Morbihan', 'Brittany', '57,204'),
(93, 'Cergy', 'Val-d\'Oise', 'Ile-de-France', '56,988'),
(94, 'Montauban', 'Tarn-et-Garonne', 'Midi-Pyrenees', '56,271'),
(95, 'Saint-Quentin', 'Aisne', 'Picardy', '55,978'),
(96, 'Cayenne', 'Guyane', 'French Guiana', '55,753'),
(97, 'Villejuif', 'Val-de-Marne', 'Ile-de-France', '55,490'),
(98, 'Beauvais', 'Oise', 'Picardy', '54,711'),
(99, 'Hyeres', 'Var', 'Provence-Alpes-Cote d\'Azur', '54,600'),
(100, 'Epinay-sur-Seine', 'Seine-Saint-Denis', 'Ile-de-France', '54,518'),
(101, 'Pantin', 'Seine-Saint-Denis', 'Ile-de-France', '54,136'),
(102, 'Cholet', 'Maine-et-Loire', 'Pays de la Loire', '54,098'),
(103, 'Saint-Andre', 'Reunion', 'Reunion', '53,955'),
(104, 'Bondy', 'Seine-Saint-Denis', 'Ile-de-France', '53,530'),
(105, 'Fontenay-sous-Bois', 'Val-de-Marne', 'Ile-de-France', '53,145'),
(106, 'Maisons-Alfort', 'Val-de-Marne', 'Ile-de-France', '52,943'),
(107, 'Chelles', 'Seine-et-Marne', 'Ile-de-France', '52,779'),
(108, 'La Roche-sur-Yon', 'Vendee', 'Pays de la Loire', '52,664'),
(109, 'Arles', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '52,661'),
(110, 'Clamart', 'Hauts-de-Seine', 'Ile-de-France', '52,546'),
(111, 'Vannes', 'Morbihan', 'Brittany', '52,515'),
(112, 'Evry', 'Essonne', 'Ile-de-France', '52,135'),
(113, 'Saint-Louis', 'Reunion', 'Reunion', '52,038'),
(114, 'Frejus', 'Var', 'Provence-Alpes-Cote d\'Azur', '51,839'),
(115, 'Le Blanc-Mesnil', 'Seine-Saint-Denis', 'Ile-de-France', '51,438'),
(116, 'Sartrouville', 'Yvelines', 'Ile-de-France', '51,150'),
(117, 'Narbonne', 'Aude', 'Languedoc-Roussillon', '51,039'),
(118, 'Grasse', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '51,036'),
(119, 'Laval', 'Mayenne', 'Pays de la Loire', '50,940'),
(120, 'Meaux', 'Seine-et-Marne', 'Ile-de-France', '50,755'),
(121, 'Evreux', 'Eure', 'Upper Normandy', '50,537'),
(122, 'Annecy', 'Haute-Savoie', 'Rhone-Alpes', '50,379'),
(123, 'Belfort', 'Territoire de Belfort', 'Franche-Comte', '50,078'),
(124, 'Sevran', 'Seine-Saint-Denis', 'Ile-de-France', '49,832'),
(125, 'Charleville-Mezieres', 'Ardennes', 'Champagne-Ardenne', '49,810'),
(126, 'Brive-la-Gaillarde', 'Correze', 'Limousin', '48,949'),
(127, 'Albi', 'Tarn', 'Midi-Pyrenees', '48,916'),
(128, 'Montrouge', 'Hauts-de-Seine', 'Ile-de-France', '48,597'),
(129, 'Vincennes', 'Val-de-Marne', 'Ile-de-France', '48,471'),
(130, 'Martigues', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '47,544'),
(131, 'Bobigny', 'Seine-Saint-Denis', 'Ile-de-France', '47,492'),
(132, 'Carcassonne', 'Aude', 'Languedoc-Roussillon', '47,419'),
(133, 'Saint-Ouen', 'Seine-Saint-Denis', 'Ile-de-France', '47,189'),
(134, 'Cagnes-sur-Mer', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '47,141'),
(135, 'Suresnes', 'Hauts-de-Seine', 'Ile-de-France', '46,723'),
(136, 'Blois', 'Loir-et-Cher', 'Centre', '46,492'),
(137, 'Aubagne', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '46,423'),
(138, 'Saint-Malo', 'Ille-et-Vilaine', 'Brittany', '46,342'),
(139, 'Saint-Brieuc', 'Cotes-d\'Armor', 'Brittany', '46,209'),
(140, 'Chateauroux', 'Indre', 'Centre', '46,140'),
(141, 'Chalons-en-Champagne', 'Marne', 'Champagne-Ardenne', '45,299'),
(142, 'Meudon', 'Hauts-de-Seine', 'Ile-de-France', '45,058'),
(143, 'Chalon-sur-Saone', 'Saone-et-Loire', 'Burgundy', '44,985'),
(144, 'Bayonne', 'Pyrenees-Atlantiques', 'Aquitaine', '44,820'),
(145, 'Puteaux', 'Hauts-de-Seine', 'Ile-de-France', '44,753'),
(146, 'Alfortville', 'Val-de-Marne', 'Ile-de-France', '44,201'),
(147, 'Valenciennes', 'Nord', 'Nord-Pas-de-Calais', '43,335'),
(148, 'Saint-Herblain', 'Loire-Atlantique', 'Pays de la Loire', '43,153'),
(149, 'Salon-de-Provence', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '43,152'),
(150, 'Corbeil-Essonnes', 'Essonne', 'Ile-de-France', '43,086'),
(151, 'Boulogne-sur-Mer', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '43,070'),
(152, 'Tarbes', 'Hautes-Pyrenees', 'Midi-Pyrenees', '43,034'),
(153, 'Bastia', 'Haute-Corse', 'Corsica', '43,008'),
(154, 'Mantes-la-Jolie', 'Yvelines', 'Ile-de-France', '42,969'),
(155, 'Sete', 'Herault', 'Languedoc-Roussillon', '42,774'),
(156, 'Istres', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '42,544'),
(157, 'Le Cannet', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '42,320'),
(158, 'Castres', 'Tarn', 'Midi-Pyrenees', '42,314'),
(159, 'Massy', 'Essonne', 'Ile-de-France', '42,258'),
(160, 'Douai', 'Nord', 'Nord-Pas-de-Calais', '42,197'),
(161, 'Saint-Priest', 'Rhone', 'Rhone-Alpes', '41,964'),
(162, 'Livry-Gargan', 'Seine-Saint-Denis', 'Ile-de-France', '41,808'),
(163, 'Angouleme', 'Charente', 'Poitou-Charentes', '41,613'),
(164, 'Arras', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '41,611'),
(165, 'Wattrelos', 'Nord', 'Nord-Pas-de-Calais', '41,541'),
(166, 'Vaulx-en-Velin', 'Rhone', 'Rhone-Alpes', '41,421'),
(167, 'Gennevilliers', 'Hauts-de-Seine', 'Ile-de-France', '41,364'),
(168, 'Caluire-et-Cuire', 'Rhone', 'Rhone-Alpes', '41,209'),
(169, 'Ales', 'Gard', 'Languedoc-Roussillon', '41,205'),
(170, 'Rosny-sous-Bois', 'Seine-Saint-Denis', 'Ile-de-France', '41,050'),
(171, 'Thionville', 'Moselle', 'Lorraine', '41,015'),
(172, 'Choisy-le-Roi', 'Val-de-Marne', 'Ile-de-France', '40,905'),
(173, 'Talence', 'Gironde', 'Aquitaine', '40,600'),
(174, 'Compiegne', 'Oise', 'Picardy', '40,517'),
(175, 'Saint-Germain-en-Laye', 'Yvelines', 'Ile-de-France', '40,481'),
(176, 'Bourg-en-Bresse', 'Ain', 'Rhone-Alpes', '40,088'),
(177, 'Garges-les-Gonesse', 'Val-d\'Oise', 'Ile-de-France', '40,012'),
(178, 'Gap', 'Hautes-Alpes', 'Provence-Alpes-Cote d\'Azur', '39,744'),
(179, 'Noisy-le-Sec', 'Seine-Saint-Denis', 'Ile-de-France', '39,733'),
(180, 'Melun', 'Seine-et-Marne', 'Ile-de-France', '39,589'),
(181, 'Le Lamentin', 'Martinique', 'Martinique', '39,360'),
(182, 'Gagny', 'Seine-Saint-Denis', 'Ile-de-France', '39,056'),
(183, 'Marcq-en-Baoeul', 'Nord', 'Nord-Pas-de-Calais', '38,947'),
(184, 'Chartres', 'Eure-et-Loir', 'Centre', '38,931'),
(185, 'Bron', 'Rhone', 'Rhone-Alpes', '38,717'),
(186, 'Cherbourg-Octeville', 'Manche', 'Lower Normandy', '38,433'),
(187, 'Reze', 'Loire-Atlantique', 'Pays de la Loire', '38,425'),
(188, 'Le Port', 'Reunion', 'Reunion', '38,418'),
(189, 'Montlucon', 'Allier', 'Auvergne', '38,402'),
(190, 'Saint-Laurent-du-Maroni', 'Guyane', 'French Guiana', '38,367'),
(191, 'Bagneux', 'Hauts-de-Seine', 'Ile-de-France', '38,080'),
(192, 'Anglet', 'Pyrenees-Atlantiques', 'Aquitaine', '38,032'),
(193, 'La Courneuve', 'Seine-Saint-Denis', 'Ile-de-France', '38,007'),
(194, 'Poissy', 'Yvelines', 'Ile-de-France', '37,680'),
(195, 'Savigny-sur-Orge', 'Essonne', 'Ile-de-France', '36,842'),
(196, 'Roanne', 'Loire', 'Rhone-Alpes', '36,806'),
(197, 'Nevers', 'Nievre', 'Burgundy', '36,762'),
(198, 'Draguignan', 'Var', 'Provence-Alpes-Cote d\'Azur', '36,391'),
(199, 'Auxerre', 'Yonne', 'Burgundy', '36,200'),
(200, 'Saint-Martin-d\'Heres', 'Isere', 'Rhone-Alpes', '36,177'),
(201, 'Joue-les-Tours', 'Indre-et-Loire', 'Centre', '35,976'),
(202, 'Saint-Joseph', 'Reunion', 'Reunion', '35,976'),
(203, 'Saint-Chamond', 'Loire', 'Rhone-Alpes', '35,793'),
(204, 'Echirolles', 'Isere', 'Rhone-Alpes', '35,748'),
(205, 'Villepinte', 'Seine-Saint-Denis', 'Ile-de-France', '35,658'),
(206, 'Pontault-Combault', 'Seine-et-Marne', 'Ile-de-France', '35,561'),
(207, 'Conflans-Sainte-Honorine', 'Yvelines', 'Ile-de-France', '35,380'),
(208, 'Villefranche-sur-Saone', 'Rhone', 'Rhone-Alpes', '35,326'),
(209, 'Montelimar', 'Drome', 'Rhone-Alpes', '35,314'),
(210, 'Colomiers', 'Haute-Garonne', 'Midi-Pyrenees', '35,186'),
(211, 'Saint-BenoÃ®t', 'Reunion', 'Reunion', '35,063'),
(212, 'Lens', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '35,032'),
(213, 'Vitrolles', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '35,021'),
(214, 'Six-Fours-les-Plages', 'Var', 'Provence-Alpes-Cote d\'Azur', '34,897'),
(215, 'Tremblay-en-France', 'Seine-Saint-Denis', 'Ile-de-France', '34,493'),
(216, 'Marignane', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '34,485'),
(217, 'Haguenau', 'Bas-Rhin', 'Alsace', '34,280'),
(218, 'Sainte-Genevieve-des-Bois', 'Essonne', 'Ile-de-France', '34,195'),
(219, 'Macon', 'Saone-et-Loire', 'Burgundy', '34,040'),
(220, 'Agen', 'Lot-et-Garonne', 'Aquitaine', '33,981'),
(221, 'Thonon-les-Bains', 'Haute-Savoie', 'Rhone-Alpes', '33,925'),
(222, 'Bagnolet', 'Seine-Saint-Denis', 'Ile-de-France', '33,883'),
(223, 'La Ciotat', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '33,829'),
(224, 'Stains', 'Seine-Saint-Denis', 'Ile-de-France', '33,829'),
(225, 'Saint-RaphaÃ«l', 'Var', 'Provence-Alpes-Cote d\'Azur', '33,603'),
(226, 'Creil', 'Oise', 'Picardy', '33,601'),
(227, 'Romans-sur-Isere', 'Drome', 'Rhone-Alpes', '33,536'),
(228, 'Neuilly-sur-Marne', 'Seine-Saint-Denis', 'Ile-de-France', '33,498'),
(229, 'Montigny-le-Bretonneux', 'Yvelines', 'Ile-de-France', '33,337'),
(230, 'Franconville', 'Val-d\'Oise', 'Ile-de-France', '33,097'),
(231, 'Epinal', 'Vosges', 'Lorraine', '32,842'),
(232, 'Chatillon', 'Hauts-de-Seine', 'Ile-de-France', '32,619'),
(233, 'Cambrai', 'Nord', 'Nord-Pas-de-Calais', '32,584'),
(234, 'Le Perreux-sur-Marne', 'Val-de-Marne', 'Ile-de-France', '32,520'),
(235, 'Chatellerault', 'Vienne', 'Poitou-Charentes', '32,459'),
(236, 'Villeneuve-Saint-Georges', 'Val-de-Marne', 'Ile-de-France', '32,239'),
(237, 'Annemasse', 'Haute-Savoie', 'Rhone-Alpes', '32,196'),
(238, 'Chatenay-Malabry', 'Hauts-de-Seine', 'Ile-de-France', '32,111'),
(239, 'Viry-Chatillon', 'Essonne', 'Ile-de-France', '32,045'),
(240, 'Dieppe', 'Seine-Maritime', 'Upper Normandy', '31,963'),
(241, 'Lievin', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '31,873'),
(242, 'Nogent-sur-Marne', 'Val-de-Marne', 'Ile-de-France', '31,637'),
(243, 'Houilles', 'Yvelines', 'Ile-de-France', '31,557'),
(244, 'Mont-de-Marsan', 'Landes', 'Aquitaine', '31,225'),
(245, 'Maubeuge', 'Nord', 'Nord-Pas-de-Calais', '31,046'),
(246, 'Dreux', 'Eure-et-Loir', 'Centre', '31,031'),
(247, 'Goussainville', 'Val-d\'Oise', 'Ile-de-France', '30,996'),
(248, 'Malakoff', 'Hauts-de-Seine', 'Ile-de-France', '30,982'),
(249, 'Vandaeuvre-les-Nancy', 'Meurthe-et-Moselle', 'Lorraine', '30,974'),
(250, 'Saint-Leu', 'Reunion', 'Reunion', '30,966'),
(251, 'Plaisir', 'Yvelines', 'Ile-de-France', '30,958'),
(252, 'Schiltigheim', 'Bas-Rhin', 'Alsace', '30,952'),
(253, 'Les Mureaux', 'Yvelines', 'Ile-de-France', '30,859'),
(254, 'Athis-Mons', 'Essonne', 'Ile-de-France', '30,393'),
(255, 'La Possession', 'Reunion', 'Reunion', '30,373'),
(256, 'Palaiseau', 'Essonne', 'Ile-de-France', '30,285'),
(257, 'Meyzieu', 'Rhone', 'Rhone-Alpes', '30,272'),
(258, 'Baie-Mahault', 'Guadeloupe', 'Guadeloupe', '30,251'),
(259, 'L\'Hay-les-Roses', 'Val-de-Marne', 'Ile-de-France', '30,201'),
(260, 'Chatou', 'Yvelines', 'Ile-de-France', '30,173'),
(261, 'Saint-Laurent-du-Var', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '29,963'),
(262, 'Rillieux-la-Pape', 'Rhone', 'Rhone-Alpes', '29,952'),
(263, 'Sainte-Marie', 'Reunion', 'Reunion', '29,951'),
(264, 'Saint-Cloud', 'Hauts-de-Seine', 'Ile-de-France', '29,873'),
(265, 'Clichy-sous-Bois', 'Seine-Saint-Denis', 'Ile-de-France', '29,750'),
(266, 'Thiais', 'Val-de-Marne', 'Ile-de-France', '29,653'),
(267, 'Perigueux', 'Dordogne', 'Aquitaine', '29,573'),
(268, 'Pontoise', 'Val-d\'Oise', 'Ile-de-France', '29,548'),
(269, 'Trappes', 'Yvelines', 'Ile-de-France', '29,380'),
(270, 'Charenton-le-Pont', 'Val-de-Marne', 'Ile-de-France', '29,348'),
(271, 'Vienne', 'Isere', 'Rhone-Alpes', '29,328'),
(272, 'Bois-Colombes', 'Hauts-de-Seine', 'Ile-de-France', '29,284'),
(273, 'Carpentras', 'Vaucluse', 'Provence-Alpes-Cote d\'Azur', '29,278'),
(274, 'Orange', 'Vaucluse', 'Provence-Alpes-Cote d\'Azur', '29,135'),
(275, 'Yerres', 'Essonne', 'Ile-de-France', '29,050'),
(276, 'Le Chesnay', 'Yvelines', 'Ile-de-France', '28,975'),
(277, 'Menton', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '28,858'),
(278, 'Sotteville-les-Rouen', 'Seine-Maritime', 'Upper Normandy', '28,835'),
(279, 'Soissons', 'Aisne', 'Picardy', '28,646'),
(280, 'Savigny-le-Temple', 'Seine-et-Marne', 'Ile-de-France', '28,599'),
(281, 'Lambersart', 'Nord', 'Nord-Pas-de-Calais', '28,504'),
(282, 'Draveil', 'Essonne', 'Ile-de-France', '28,491'),
(283, 'Villenave-d\'Ornon', 'Gironde', 'Aquitaine', '28,420'),
(284, 'Vallauris', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '28,252'),
(285, 'Cachan', 'Val-de-Marne', 'Ile-de-France', '28,248'),
(286, 'Matoury', 'Guyane', 'French Guiana', '28,110'),
(287, 'Saint-Etienne-du-Rouvray', 'Seine-Maritime', 'Upper Normandy', '28,102'),
(288, 'Villemomble', 'Seine-Saint-Denis', 'Ile-de-France', '28,006'),
(289, 'Bezons', 'Val-d\'Oise', 'Ile-de-France', '27,987'),
(290, 'Guyancourt', 'Yvelines', 'Ile-de-France', '27,966'),
(291, 'Aurillac', 'Cantal', 'Auvergne', '27,924'),
(292, 'Pierrefitte-sur-Seine', 'Seine-Saint-Denis', 'Ile-de-France', '27,883'),
(293, 'Aix-les-Bains', 'Savoie', 'Rhone-Alpes', '27,750'),
(294, 'Le Plessis-Robinson', 'Hauts-de-Seine', 'Ile-de-France', '27,727'),
(295, 'Saint-Medard-en-Jalles', 'Gironde', 'Aquitaine', '27,719'),
(296, 'Bergerac', 'Dordogne', 'Aquitaine', '27,648'),
(297, 'La Garenne-Colombes', 'Hauts-de-Seine', 'Ile-de-France', '27,628'),
(298, 'Ris-Orangis', 'Essonne', 'Ile-de-France', '27,463'),
(299, 'Ermont', 'Val-d\'Oise', 'Ile-de-France', '27,446'),
(300, 'Villiers-sur-Marne', 'Val-de-Marne', 'Ile-de-France', '27,338'),
(301, 'Vigneux-sur-Seine', 'Essonne', 'Ile-de-France', '27,331'),
(302, 'Saumur', 'Maine-et-Loire', 'Pays de la Loire', '27,283'),
(303, 'Vanves', 'Hauts-de-Seine', 'Ile-de-France', '27,002'),
(304, 'Vierzon', 'Cher', 'Centre', '26,946'),
(305, 'Elancourt', 'Yvelines', 'Ile-de-France', '26,829'),
(306, 'Illkirch-Graffenstaden', 'Bas-Rhin', 'Alsace', '26,805'),
(307, 'Villiers-le-Bel', 'Val-d\'Oise', 'Ile-de-France', '26,736'),
(308, 'Alencon', 'Orne', 'Lower Normandy', '26,704'),
(309, 'Grigny', 'Essonne', 'Ile-de-France', '26,638'),
(310, 'Gonesse', 'Val-d\'Oise', 'Ile-de-France', '26,356'),
(311, 'Le Gosier', 'Guadeloupe', 'Guadeloupe', '26,311'),
(312, 'Henin-Beaumont', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '26,278'),
(313, 'Fresnes', 'Val-de-Marne', 'Ile-de-France', '26,248'),
(314, 'Bourgoin-Jallieu', 'Isere', 'Rhone-Alpes', '26,173'),
(315, 'Rambouillet', 'Yvelines', 'Ile-de-France', '26,159'),
(316, 'Taverny', 'Val-d\'Oise', 'Ile-de-France', '26,144'),
(317, 'Sannois', 'Val-d\'Oise', 'Ile-de-France', '26,090'),
(318, 'Le Kremlin-Bicetre', 'Val-de-Marne', 'Ile-de-France', '26,046'),
(319, 'Herblay', 'Val-d\'Oise', 'Ile-de-France', '26,016'),
(320, 'Saintes', 'Charente-Maritime', 'Poitou-Charentes', '26,011'),
(321, 'Laon', 'Aisne', 'Picardy', '25,986'),
(322, 'La Garde', 'Var', 'Provence-Alpes-Cote d\'Azur', '25,930'),
(323, 'Montbeliard', 'Doubs', 'Franche-Comte', '25,875'),
(324, 'Sucy-en-Brie', 'Val-de-Marne', 'Ile-de-France', '25,820'),
(325, 'Romainville', 'Seine-Saint-Denis', 'Ile-de-France', '25,771'),
(326, 'Bethune', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '25,655'),
(327, 'Decines-Charpieu', 'Rhone', 'Rhone-Alpes', '25,562'),
(328, 'Saint-Dizier', 'Haute-Marne', 'Champagne-Ardenne', '25,526'),
(329, 'Brunoy', 'Essonne', 'Ile-de-France', '25,377'),
(330, 'Armentieres', 'Nord', 'Nord-Pas-de-Calais', '25,375'),
(331, 'Miramas', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '25,368'),
(332, 'Tournefeuille', 'Haute-Garonne', 'Midi-Pyrenees', '25,340'),
(333, 'Biarritz', 'Pyrenees-Atlantiques', 'Aquitaine', '25,306'),
(334, 'Lunel', 'Herault', 'Languedoc-Roussillon', '25,277'),
(335, 'Montfermeil', 'Seine-Saint-Denis', 'Ile-de-France', '25,269'),
(336, 'Kourou', 'Guyane', 'French Guiana', '25,189'),
(337, 'Villeneuve-la-Garenne', 'Hauts-de-Seine', 'Ile-de-France', '25,183'),
(338, 'Oullins', 'Rhone', 'Rhone-Alpes', '25,152'),
(339, 'Vernon', 'Eure', 'Upper Normandy', '25,147'),
(340, 'Rochefort', 'Charente-Maritime', 'Poitou-Charentes', '25,140'),
(341, 'Saint-Sebastien-sur-Loire', 'Loire-Atlantique', 'Pays de la Loire', '25,017'),
(342, 'Cavaillon', 'Vaucluse', 'Provence-Alpes-Cote d\'Azur', '24,951'),
(343, 'Le Grand-Quevilly', 'Seine-Maritime', 'Upper Normandy', '24,930'),
(344, 'Begles', 'Gironde', 'Aquitaine', '24,913'),
(345, 'Sens', 'Yonne', 'Burgundy', '24,883'),
(346, 'Les Ulis', 'Essonne', 'Ile-de-France', '24,792'),
(347, 'Vichy', 'Allier', 'Auvergne', '24,774'),
(348, 'Dole', 'Jura', 'Franche-Comte', '24,629'),
(349, 'La Teste-de-Buch', 'Gironde', 'Aquitaine', '24,591'),
(350, 'Agde', 'Herault', 'Languedoc-Roussillon', '24,567'),
(351, 'Orvault', 'Loire-Atlantique', 'Pays de la Loire', '24,504'),
(352, 'Champs-sur-Marne', 'Seine-et-Marne', 'Ile-de-France', '24,418'),
(353, 'Sainte-Anne', 'Guadeloupe', 'Guadeloupe', '24,192'),
(354, 'Abbeville', 'Somme', 'Picardy', '24,155'),
(355, 'Villeparisis', 'Seine-et-Marne', 'Ile-de-France', '24,122'),
(356, 'Eaubonne', 'Val-d\'Oise', 'Ile-de-France', '24,062'),
(357, 'Epernay', 'Marne', 'Champagne-Ardenne', '24,035'),
(358, 'Le Robert', 'Martinique', 'Martinique', '23,918'),
(359, 'Rodez', 'Aveyron', 'Midi-Pyrenees', '23,917'),
(360, 'Muret', 'Haute-Garonne', 'Midi-Pyrenees', '23,864'),
(361, 'Libourne', 'Gironde', 'Aquitaine', '23,624'),
(362, 'Saint-Ouen-l\'Aumone', 'Val-d\'Oise', 'Ile-de-France', '23,608'),
(363, 'Villeneuve-sur-Lot', 'Lot-et-Garonne', 'Aquitaine', '23,513'),
(364, 'Bruay-la-Buissiere', 'Pas-de-Calais', 'Nord-Pas-de-Calais', '23,408'),
(365, 'Fontenay-aux-Roses', 'Hauts-de-Seine', 'Ile-de-France', '23,351'),
(366, 'Bussy-Saint-Georges', 'Seine-et-Marne', 'Ile-de-France', '23,341'),
(367, 'Bretigny-sur-Orge', 'Essonne', 'Ile-de-France', '23,334'),
(368, 'Petit-Bourg', 'Guadeloupe', 'Guadeloupe', '23,199'),
(369, 'Etampes', 'Essonne', 'Ile-de-France', '23,158'),
(370, 'Le Bouscat', 'Gironde', 'Aquitaine', '23,095'),
(371, 'Gradignan', 'Gironde', 'Aquitaine', '23,063'),
(372, 'Cormeilles-en-Parisis', 'Val-d\'Oise', 'Ile-de-France', '23,038'),
(373, 'Chaumont', 'Haute-Marne', 'Champagne-Ardenne', '23,011'),
(374, 'Sevres', 'Hauts-de-Seine', 'Ile-de-France', '22,978'),
(375, 'Montgeron', 'Essonne', 'Ile-de-France', '22,880'),
(376, 'Maisons-Laffitte', 'Yvelines', 'Ile-de-France', '22,817'),
(377, 'Le Creusot', 'Saone-et-Loire', 'Burgundy', '22,783'),
(378, 'Oyonnax', 'Ain', 'Rhone-Alpes', '22,650'),
(379, 'Montigny-les-Metz', 'Moselle', 'Lorraine', '22,540'),
(380, 'Frontignan', 'Herault', 'Languedoc-Roussillon', '22,526'),
(381, 'Coudekerque-Branche', 'Nord', 'Nord-Pas-de-Calais', '22,474'),
(382, 'La Madeleine', 'Nord', 'Nord-Pas-de-Calais', '22,442'),
(383, 'Torcy', 'Seine-et-Marne', 'Ile-de-France', '22,425'),
(384, 'Sainte-Suzanne', 'Reunion', 'Reunion', '22,421'),
(385, 'Saint-Mande', 'Val-de-Marne', 'Ile-de-France', '22,396'),
(386, 'Beaune', 'Cote-d\'Or', 'Burgundy', '22,394'),
(387, 'Le Moule', 'Guadeloupe', 'Guadeloupe', '22,381'),
(388, 'Roissy-en-Brie', 'Seine-et-Marne', 'Ile-de-France', '22,321'),
(389, 'Fontaine', 'Isere', 'Rhone-Alpes', '22,243'),
(390, 'Cenon', 'Gironde', 'Aquitaine', '22,242'),
(391, 'Les Lilas', 'Seine-Saint-Denis', 'Ile-de-France', '22,228'),
(392, 'Lanester', 'Morbihan', 'Brittany', '22,219'),
(393, 'Mandelieu-la-Napoule', 'Alpes-Maritimes', 'Provence-Alpes-Cote d\'Azur', '22,203'),
(394, 'Manosque', 'Alpes-de-Haute-Provence', 'Provence-Alpes-Cote d\'Azur', '22,105'),
(395, 'Le Petit-Quevilly', 'Seine-Maritime', 'Upper Normandy', '21,898'),
(396, 'Millau', 'Aveyron', 'Midi-Pyrenees', '21,887'),
(397, 'Mons-en-Baraeul', 'Nord', 'Nord-Pas-de-Calais', '21,887'),
(398, 'Les Pavillons-sous-Bois', 'Seine-Saint-Denis', 'Ile-de-France', '21,746'),
(399, 'Sainte-Foy-les-Lyon', 'Rhone', 'Rhone-Alpes', '21,742'),
(400, 'Blagnac', 'Haute-Garonne', 'Midi-Pyrenees', '21,710'),
(401, 'Lisieux', 'Calvados', 'Lower Normandy', '21,640'),
(402, 'Hazebrouck', 'Nord', 'Nord-Pas-de-Calais', '21,598'),
(403, 'Loos', 'Nord', 'Nord-Pas-de-Calais', '21,592'),
(404, 'Auch', 'Gers', 'Midi-Pyrenees', '21,576'),
(405, 'Combs-la-Ville', 'Seine-et-Marne', 'Ile-de-France', '21,554'),
(406, 'Sarreguemines', 'Moselle', 'Lorraine', '21,540'),
(407, 'Forbach', 'Moselle', 'Lorraine', '21,510'),
(408, 'Deuil-la-Barre', 'Val-d\'Oise', 'Ile-de-France', '21,509'),
(409, 'Saint-Die-des-Vosges', 'Vosges', 'Lorraine', '21,447'),
(410, 'Vertou', 'Loire-Atlantique', 'Pays de la Loire', '21,443'),
(411, 'Herouville-Saint-Clair', 'Calvados', 'Lower Normandy', '21,434'),
(412, 'Orly', 'Val-de-Marne', 'Ile-de-France', '21,395'),
(413, 'Longjumeau', 'Essonne', 'Ile-de-France', '21,361'),
(414, 'Bois-Guillaume-Bihorel', 'Seine-Maritime', 'Upper Normandy', '21,270'),
(415, 'Montmorency', 'Val-d\'Oise', 'Ile-de-France', '21,194'),
(416, 'Fleury-les-Aubrais', 'Loiret', 'Centre', '21,171'),
(417, 'Grande-Synthe', 'Nord', 'Nord-Pas-de-Calais', '20,991'),
(418, 'La Celle-Saint-Cloud', 'Yvelines', 'Ile-de-France', '20,971'),
(419, 'Morsang-sur-Orge', 'Essonne', 'Ile-de-France', '20,944'),
(420, 'Schaelcher', 'Martinique', 'Martinique', '20,814'),
(421, 'La Valette-du-Var', 'Var', 'Provence-Alpes-Cote d\'Azur', '20,754'),
(422, 'Dammarie-les-Lys', 'Seine-et-Marne', 'Ile-de-France', '20,722'),
(423, 'Croix', 'Nord', 'Nord-Pas-de-Calais', '20,676'),
(424, 'Dax', 'Landes', 'Aquitaine', '20,665'),
(425, 'Gif-sur-Yvette', 'Essonne', 'Ile-de-France', '20,654'),
(426, 'Le Mee-sur-Seine', 'Seine-et-Marne', 'Ile-de-France', '20,609'),
(427, 'Neuilly-Plaisance', 'Seine-Saint-Denis', 'Ile-de-France', '20,508'),
(428, 'Gardanne', 'Bouches-du-Rhone', 'Provence-Alpes-Cote d\'Azur', '20,474'),
(429, 'Saint-Genis-Laval', 'Rhone', 'Rhone-Alpes', '20,357'),
(430, 'Denain', 'Nord', 'Nord-Pas-de-Calais', '20,351'),
(431, 'Ozoir-la-Ferriere', 'Seine-et-Marne', 'Ile-de-France', '20,268'),
(432, 'Lagny-sur-Marne', 'Seine-et-Marne', 'Ile-de-France', '20,236'),
(433, 'Halluin', 'Nord', 'Nord-Pas-de-Calais', '20,199'),
(434, 'Cahors', 'Lot', 'Midi-Pyrenees', '20,194'),
(435, 'Saint-Gratien', 'Val-d\'Oise', 'Ile-de-France', '20,156'),
(436, 'Sainte-Rose', 'Guadeloupe', 'Guadeloupe', '20,155'),
(437, 'Saint-Louis', 'Haut-Rhin', 'Alsace', '20,127'),
(438, 'Velizy-Villacoublay', 'Yvelines', 'Ile-de-France', '20,089'),
(439, 'Lannion', 'Cotes-d\'Armor', 'Brittany', '20,079'),
(440, 'Wasquehal', 'Nord', 'Nord-Pas-de-Calais', '20,046'),
(441, 'Saint-Michel-sur-Orge', 'Essonne', 'Ile-de-France', '20,046');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) NOT NULL,
  `percentage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` rising` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retrocession` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `percentage`, ` rising`, `retrocession`) VALUES
(1, '180', '300.32', ''),
(2, '1890', '39990.2', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_affair` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_authority` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_service` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `num_affair`, `name`, `default`, `service_price`, `request_authority`, `type_of_service`, `created_at`, `updated_at`) VALUES
(1, '2022/17784', 'Duy Tân', 'ádasd', 'ádsa', 'ádsd', 'ádadsads', '2023-02-17 18:11:00', '2023-02-23 16:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `profile_upload_file`
--

CREATE TABLE `profile_upload_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_upload_file`
--

INSERT INTO `profile_upload_file` (`id`, `profile_id`, `document_name`, `document_path`, `index`, `created_at`, `updated_at`) VALUES
(1, 1, 'donthuoc', 'public/images/donthuoc1.png', '1', '2023-02-17 18:11:37', '2023-02-18 10:19:39'),
(9, 1, 'z3996822344482_493ac0a5c1885998f2a9bd96aff63703', 'public/images/z3996822344482_493ac0a5c1885998f2a9bd96aff63703.jpg', '2', '2023-02-18 08:49:33', '2023-02-23 17:59:12'),
(10, 1, 'z3996823385061_81714fcd22396c152e8da26118469112', 'public/images/z3996823385061_81714fcd22396c152e8da26118469112.jpg', '3', '2023-02-18 08:50:58', '2023-02-23 17:58:55'),
(11, 1, 'z3996822812836_fd3681e94aa3aa3c79a2e5ac856e41a8', 'public/images/z3996822812836_fd3681e94aa3aa3c79a2e5ac856e41a8.jpg', '4', '2023-02-23 17:56:51', '2023-02-23 17:58:58'),
(12, 1, 'z3996823385061_81714fcd22396c152e8da26118469112', 'public/images/z3996823385061_81714fcd22396c152e8da26118469112.jpg', '5', '2023-02-24 15:42:20', NULL),
(13, 1, 'Screenshot 2023-03-09 111211', 'public/images/Screenshot 2023-03-09 111211.png', '6', '2023-03-15 07:47:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_code`
--

CREATE TABLE `sponsor_code` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parent_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsor_code`
--

INSERT INTO `sponsor_code` (`id`, `user_id`, `parent_user_id`, `created_at`, `updated_at`) VALUES
(1, 32, 12, '2023-02-11 15:43:26', '2023-02-11 15:43:26'),
(2, 33, 12, '2023-02-11 15:43:27', '2023-02-11 15:43:27'),
(3, 37, 12, '2023-02-11 15:43:30', '2023-02-11 15:43:30'),
(4, 38, 0, '2023-03-15 09:14:00', '2023-03-15 09:14:00'),
(5, 39, 39, '2023-04-09 15:03:44', NULL),
(6, 41, 39, '2023-04-09 15:04:54', NULL),
(7, 45, 39, '2023-04-09 15:51:24', NULL),
(8, 46, 39, '2023-04-11 02:20:25', NULL),
(9, 47, 47, '2023-04-11 02:21:56', NULL),
(10, 48, 48, '2023-04-11 02:24:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(2) NOT NULL DEFAULT 2 COMMENT '1:admin|2:user',
  `dateofbirth` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codepostal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `siret` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swift` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '18',
  `numberSSRS` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dissertation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` bigint(20) NOT NULL DEFAULT 1 COMMENT '1:Active|0:NoActive',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `name`, `email`, `role`, `dateofbirth`, `address1`, `address2`, `codepostal`, `city_id`, `siret`, `vat`, `iban`, `swift`, `sponsor`, `percentage`, `numberSSRS`, `default`, `provider`, `dissertation`, `active`, `email_verified_at`, `password`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr', 'Admin', 'admin@gmail.com', 1, '', '', '', '0', 1, '', '', '', '', '', '18', '0', '', '', '', 0, '0000-00-00 00:00:00', '$2y$10$kWukI9KARS7rfD2BUC09C.M9xg2n2lmC83Zkl5kD7E8VcYqMVSDWe', '', 'HOWqNgFJWfQeCcSZPJakxJtZY02vYsd0aR1pgdy1', '0000-00-00 00:00:00', '2023-04-08 09:39:47'),
(8, 'Dr', 'sd Lê', 'leduytan177222003@gmail.com', 2, '2/3/2023', 's', 's', '123', 1, 'sad', 'sda', 'sda', 'dsa', 'THE22939', '18', 'sadasd', 'sda', 'dsa', 'sad', 1, '0000-00-00 00:00:00', '$2y$10$99uAnFyYcxPpIj2QnBtGu.mAnV13LW3wtyqFXTY6pRz63jwZZWrXi', '', NULL, '0000-00-00 00:00:00', '2023-02-11 10:40:13'),
(12, 'Ms', 'Duy Tân Lê', 'leduytan1772003@gmail.com', 2, '7/17/2003', 'Thừa Thiên Huế', 'Thừa Thiên Huế', 'sad', 31, '6.605E+13', '192078382', '7.605E+25', 'ádasd', 'THS22939', '18', 'ÁD', 'SAD', 'ÁDAS', 'D', 0, '0000-00-00 00:00:00', '$2y$10$uCZe4ldg5Sb5hkIJX36Td.teNovRRmoBICnA9qSjk9pmXxWHNrZGq', '', 'JzAecOQ4d2lN0IK4gvG5GGFLZy8Tmhf2uuRlVHwe', '2023-02-01 16:18:25', '2023-04-08 09:39:04'),
(16, 'Ms', 'Tân Duy', 'leduytan4567892@gmail.com', 2, '1/30/2023', 'Huế', 'Huế', '22', 44, '1.82845E+13', '123456789', '1.82845E+25', 'adssd', 'T1E22939', '20', 'sadasd', 'sdaádsd', 'ssda', 'ads', 0, '0000-00-00 00:00:00', '$2y$10$xQh8nciPKRJ9ytoVaO8zGuuNjM0tO1roBR04aocsmyQUBJ9bOjm1e', '', NULL, '0000-00-00 00:00:00', '2023-02-11 10:40:18'),
(17, 'Dr', 'Tân Duy', 'leduytan17720033@gmail.com', 2, '2022-12-23', 'sdasd', 'sdasd', '123123', 1, '18283446626121', '123456789', '18283446626121123456789232', 'ád', 'SQE22939', '18', 'sad', 'sad', 'sad', 'sad', 0, NULL, '$2y$10$CY2NipesBta0GkMqsN1HsOJMhnWXzXD259nhHSYgih5AFU9Oneok6', '', NULL, '2023-02-02 22:37:15', '2023-02-11 10:40:19'),
(18, 'Dr', 'Duy Lê', 'leduytan17723003@gmail.com', 2, '2000-07-17', 'sad', 'sad', 'ads', 5, '18284546626121', '123456789', '18282346626121123456789232', 'sdasd', 'SJGE2812', '18', 'ádsd', 'sadsdasd', 'adsads', 'ádsd', 1, NULL, '$2y$10$y5tbGbu7UVTGtoeJPzAspOMAR.Ry6GNw/X8qVbm.v5MHubLXa.p.q', '', NULL, '2023-02-03 06:14:54', '2023-02-11 10:40:21'),
(19, 'Mrs', 'Tân Lê', 'leduytan177202203@gmail.com', 2, '2000-12-07', 'sdsa', 'sdsa', 'adsasd', 9, '18282346626121', '123456789', '18283246626121123456789232', 'sdasd', 'TJGI2992', '20', 'dá', 'sadasd', 'sadsad', 'sdasad', 1, NULL, '$2y$10$ak2Nub1QwC9YO85O3qXzlOWCCtPKqVmDNHUspjz406gf6C.HFubQK', '', NULL, '2023-02-03 06:19:28', '2023-02-11 10:40:22'),
(20, 'Mrs', 'Duy Tân Lê', 'leduytan17723232003@gmail.com', 2, '2023-02-16', 'ads', 'ads', 'sad', 441, '18284346626121', '123456789', '18282446626121123456789232', 'sadasd', 'EDIS1817', '17', 'dsds', 'ád', 'dsaads', 'sadads', 1, NULL, '$2y$10$19mF6Q.AgBDUVByhg5y/b.CLGpwFQiW3T/7yubLB2IkqiI0kelm0m', '', NULL, '2023-02-03 06:20:56', '2023-02-11 10:40:24'),
(21, 'Mr', 'tân tân', 'leduytan177223232003@gmail.com', 2, '2023-02-16', 'ads', 'ads', 'sad', 441, '18284346626121', '123456789', '18282446626121123456789232', 'sadasd', 'EDAS1991', '15', 'dsds', 'ád', 'dsaads', 'sadads', 1, NULL, '$2y$10$YwkV5DqYC7ZFrIEbOVE7Zu5WUa521NUM1M4h3PyY/DuhzYKyPl5bS', '', NULL, '2023-02-03 06:24:12', '2023-02-11 10:40:26'),
(22, 'Dr', 'Hy Lê', 'leduytan1772023203@gmail.com', 2, '2020-12-23', 'sada', 'sada', 'sadasd', 441, '18282346626121', '123456789', '18281246626121123456789232', 'sadads', 'EDIS2741', '19', 'adsds', 'adsadsa', 'dsdsa', 'dsa', 1, NULL, '$2y$10$RlTizsQxHgB7Tz95PRxdXOo0i4KFMR2Zc6rz3BurFU9xcWq0aoeru', '', NULL, '2023-02-03 06:28:54', '2023-02-11 10:40:27'),
(23, 'Mrs', 'Duy Tran', 'dsa@gmail.com', 2, '2005-02-02', 'sda', 'sda', 'sdasd', 13, '18282346626121', '123456789', '18282346626121123456789232', 'sadasd', 'DSQE9983', '30', 'dassd', 'dsaads', 'adsds', 'adssd', 1, NULL, '$2y$10$JOMYsyIOF3iZJGjPAZwGmeNWVuzTv6ANIH/kLpKt76VjzSb21I8ai', '', NULL, '2023-02-03 07:52:52', '2023-02-11 10:40:31'),
(24, 'Mrs', 'Duy Tân Tran', 'leduytan177232003@gmail.com', 2, '2000-02-20', 'sadsa', 'sadsa', 'sadsad', 5, '18282346626121', '123456789', '18283246626121123456789232', 'sdasdsa', 'DQRT-8824', '21', 'sad', 'sadsd', 'sadsad', '1', 1, NULL, '$2y$10$2frxuYOdlURHiJELy3QPT.URjmdGjy5RTyuWcXzNo0IbSTgOcB7nu', '', NULL, '2023-02-03 07:56:15', '2023-02-11 07:43:08'),
(27, 'Mrs', 'Duy Tân Lê', 'leduytan1772222003@gmail.com', 2, '2000-02-06', 'ádasd', 'ádasd', 'sda', 1, '44412091900634', '817097348', 'FR398165181167AKU44W54TD092', 'ádsa', '9svOGcU5', '18', 'sadasd', 'ád', 'ád', 'ád', 1, NULL, '$2y$10$xL.79nXMt6s9I2jI0.j7ye4z9HIZnswbAVwBrAtV1bK7caTZfkV0C', NULL, NULL, '2023-02-11 02:25:57', '2023-02-11 02:25:57'),
(28, 'Mrs', 'Duy Tân Lê', 'leduytan1772232003@gmail.com', 2, '2000-02-22', 'adsasd', 'adsasd', 'dsaasd', 1, '44412091900634', '817097348', 'FR398165181167AKU44W54TD092', 'sad', '4IG26943', '18', 'sad', 'sad', 'ads', 'ads', 1, NULL, '$2y$10$n7OuRTkqvIRF6r6T/jdMuOWwkbfiKp7Wv9s1wYCUKVmieCe9xw.ZW', NULL, NULL, '2023-02-11 03:37:42', '2023-02-11 03:37:42'),
(29, 'Mrs', 'Duy Tân Lê', 'leduytan17722232003@gmail.com', 2, '2000-02-22', 'adsasd', 'adsasd', 'dsaasd', 15, '44412091900634', '817097348', 'FR398165181167AKU44W54TD092', 'sad', 'JDQE4724', '18', 'sad', 'sad', 'ads', 'ads', 1, NULL, '$2y$10$9toaGtqm31VBM7kz6K3EF.K4uMqtUCjuRFBiu.FcwoEgWR7.DyGtq', NULL, NULL, '2023-02-11 03:46:08', '2023-02-11 13:48:35'),
(30, 'Mrs', 'Duy Tân Trần', 'leduytan17720023@gmail.com', 2, '0200-03-31', 'sadsad', 'sadsad', 'sada', 1, '68377667800354', '776704819', 'FR5669318847767686E72378R07', 'ádasd', 'JDQ24724', '18', 'ádsd', 'ádasd', 'ádasd', 'adsads', 1, NULL, '$2y$10$O/YNbkE6z92c3hT2HhfQy.iSNzm6ceojg1tVswG.hJHhhWei7eoTu', NULL, NULL, '2023-02-11 06:59:07', '2023-02-11 16:02:12'),
(32, 'Me', 'Duy Tân', 'leduytan177200233@gmail.com', 2, '0200-03-31', 'sadsad', 'sadsad', 'sada', 1, '68377667800354', '776704819', 'FR5669318847767686E72378R07', 'ádasd', 'JDQ14724', '18', 'ádsd', 'ádasd', 'ádasd', 'adsads', 1, NULL, '$2y$10$GdkJkKvATFBdpXNeRu4P3u5/0z5DPSmarN9vfquaPDhnwV2hdla/C', NULL, NULL, '2023-02-11 07:01:49', '2023-02-11 16:02:14'),
(33, 'Me', 'Duy Tân Trần', 'leduytan1772002233@gmail.com', 2, '0200-03-31', 'sadsad', 'sadsad', 'sada', 1, '68377667800354', '776704819', 'FR5669318847767686E72378R07', 'ádasd', 'JDQA4724', '18', 'ádsd', 'ádasd', 'ádasd', 'adsads', 1, NULL, '$2y$10$JJ.buS9s7zMtMxvg6pz1BuAhUX.TwzbybN5f69hseiupO0Yc0vzMW', NULL, NULL, '2023-02-11 07:03:45', '2023-02-11 16:02:27'),
(37, 'Mrs', 'Duy Tân Lê', 'leduytan17720222203@gmail.com', 2, '2000-02-22', 'sadsd', 'sadsd', 'áds', 1, '77976467900071', '951674480', 'FR236294787161HVM7OF0K1PS58', 'sad', 'JDQA4724', '18', 'sad', 'sad', 'sad', 'sad', 1, NULL, '$2y$10$NAu5KT.8oQ31Ab8qOgvUNesfeGjf1nEwuh6Q4Li3mh/WF4b9iA4Qy', NULL, NULL, '2023-02-11 07:29:23', '2023-02-11 07:29:23'),
(38, 'Mrs', 'sdaas asdads', 'leduytan1772003@gmaill.com', 2, '2000-03-17', 'sadasd', 'sadasd', 'adsasd', 1, '93114867007558', '696407584', 'FR0767395612291518QTX342725', 'asd', 'JDQA4724', '18', 'asdasd', 'asdads', 'adssad', 'ads', 1, NULL, '$2y$10$8chJFF6ak5U5gtxoKikieutRJQpshIi7so1T.5CKjcbhq4wK61oNa', NULL, NULL, '2023-03-15 00:26:53', '2023-03-15 00:26:53'),
(39, 'Mrs', 'Duy Le', 'tanld.21it@vku.udn.vn', 2, '2000-03-17', 'Hue', 'Hue', 'asasd', 17, '26859794502699', '868960675', 'FR980778673467373D8GE5W3G69', 'sadasd', 'DSER294S', '18', 'adsasd', 'dfaasdf', 'sadfsdf', 'sfdsdf', 1, NULL, '$2y$10$RM65qJtQvYZe8IP947GGvuW.WItKglOf75Qvw8yD5T/KsGnyAwv0i', NULL, 'aTcVJnoBRxJi0RkqSiAjwcg6ZON1jbDc0zPtCZSG', '2023-04-09 08:03:44', '2023-04-09 08:03:44'),
(47, 'Dr', 'Tân lê', 'tanld.21it8@vku.udn.vn', 2, '2000-07-17', 'Huế', 'Huế', 'sdaas', 1, '26859794502699', '868960675', 'FR980778673467373D8GE5W3G69', 'sadas', 'DJSR4921', '18', 'ádsasd', 'ádasd', 'ádasdas', 'đâsd', 1, NULL, '$2y$10$e54RC8V1YMCKMzXm11ue0emqoeJogxZPhDOoo62TRLl/2F.aoX46e', NULL, 'f8JW4hngJcDldSpv8ZbLDTQRJETP5wNh1bjwIvpF', '2023-04-10 19:21:56', '2023-04-10 19:21:56'),
(48, 'Mrs', 'Duy Le', 'tanld.21it7@vku.udn.vn', 2, '2000-03-17', 'Hue', 'Hue', 'asasd', 17, '26859794502699', '868960675', 'FR980778673467373D8GE5W3G69', 'sadasd', 'VTVX2049', '18', 'adsasd', 'dfaasdf', 'sadfsdf', 'sfdsdf', 1, NULL, '$2y$10$8bbBRpjGCYO.fsm.ZNjfWOLQZXOCm1PLzCAar2yYN/T3eDLYN4XsS', NULL, NULL, '2023-04-10 19:24:10', '2023-04-10 19:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `profile_upload_file`
--
ALTER TABLE `profile_upload_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profile` (`profile_id`);

--
-- Indexes for table `sponsor_code`
--
ALTER TABLE `sponsor_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `api_token` (`api_token`),
  ADD KEY `fk_city` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_upload_file`
--
ALTER TABLE `profile_upload_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sponsor_code`
--
ALTER TABLE `sponsor_code`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile_upload_file`
--
ALTER TABLE `profile_upload_file`
  ADD CONSTRAINT `fk_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
