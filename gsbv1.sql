-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2021 at 03:22 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsbv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
CREATE TABLE IF NOT EXISTS `praticien` (
  `PRA_NUM` tinyint(4) DEFAULT NULL,
  `PRA_NOM` varchar(16) DEFAULT NULL,
  `PRA_PRENOM` varchar(15) DEFAULT NULL,
  `PRA_ADRESSE` varchar(29) DEFAULT NULL,
  `PRA_CP` mediumint(9) DEFAULT NULL,
  `PRA_VILLE` varchar(19) DEFAULT NULL,
  `PRA_COEFNOTORIETE` decimal(5,2) DEFAULT NULL,
  `TYP_CODE` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `praticien`
--

INSERT INTO `praticien` (`PRA_NUM`, `PRA_NOM`, `PRA_PRENOM`, `PRA_ADRESSE`, `PRA_CP`, `PRA_VILLE`, `PRA_COEFNOTORIETE`, `TYP_CODE`) VALUES
(1, 'Notini', 'Alain', '114 r Authie', 85000, 'LA ROCHE SUR YON', '290.03', 'MH'),
(2, 'Gosselin', 'Albert', '13 r Devon', 41000, 'BLOIS', '307.49', 'MV'),
(3, 'Delahaye', 'André', '36 av 6 Juin', 25000, 'BESANCON', '185.79', 'PS'),
(4, 'Leroux', 'André', '47 av Robert Schuman', 60000, 'BEAUVAIS', '172.04', 'PH'),
(5, 'Desmoulins', 'Anne', '31 r St Jean', 30000, 'NIMES', '94.75', 'PO'),
(6, 'Mouel', 'Anne', '27 r Auvergne', 80000, 'AMIENS', '45.20', 'MH'),
(7, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', 29000, 'MORLAIX', '20.07', 'MV'),
(8, 'Marcouiller', 'Arnaud', '31 r St Jean', 68000, 'MULHOUSE', '396.52', 'PS'),
(9, 'Dupuy', 'Benoit', '9 r Demolombe', 34000, 'MONTPELLIER', '395.66', 'PH'),
(10, 'Lerat', 'Bernard', '31 r St Jean', 59000, 'LILLE', '257.79', 'PO'),
(11, 'Marçais-Lefebvre', 'Bertrand', '86Bis r Basse', 67000, 'STRASBOURG', '450.96', 'MH'),
(12, 'Boscher', 'Bruno', '94 r Falaise', 10000, 'TROYES', '356.14', 'MV'),
(13, 'Morel', 'Catherine', '21 r Chateaubriand', 75000, 'PARIS', '379.57', 'PS'),
(14, 'Guivarch', 'Chantal', '4 av Gén Laperrine', 45000, 'ORLEANS', '114.56', 'PH'),
(15, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', 6000, 'NICE', '222.06', 'PO'),
(16, 'Rossa', 'Claire', '14 av Thiès', 6000, 'NICE', '529.78', 'MH'),
(17, 'Cauchy', 'Denis', '5 av Ste Thérèse', 11000, 'NARBONNE', '458.82', 'MV'),
(18, 'Gaffé', 'Dominique', '9 av 1ère Armée Française', 35000, 'RENNES', '213.40', 'PS'),
(19, 'Guenon', 'Dominique', '98 bd Mar Lyautey', 44000, 'NANTES', '175.89', 'PH'),
(20, 'Prévot', 'Dominique', '29 r Lucien Nelle', 87000, 'LIMOGES', '151.36', 'PO'),
(21, 'Houchard', 'Eliane', '9 r Demolombe', 49100, 'ANGERS', '436.96', 'MH'),
(22, 'Desmons', 'Elisabeth', '51 r Bernières', 29000, 'QUIMPER', '281.17', 'MV'),
(23, 'Flament', 'Elisabeth', '11 r Pasteur', 35000, 'RENNES', '315.60', 'PS'),
(24, 'Goussard', 'Emmanuel', '9 r Demolombe', 41000, 'BLOIS', '40.72', 'PH'),
(25, 'Desprez', 'Eric', '9 r Vaucelles', 33000, 'BORDEAUX', '406.85', 'PO'),
(26, 'Coste', 'Evelyne', '29 r Lucien Nelle', 19000, 'TULLE', '441.87', 'MH'),
(27, 'Lefebvre', 'Frédéric', '2 pl Wurzburg', 55000, 'VERDUN', '573.63', 'MV'),
(28, 'Lemée', 'Frédéric', '29 av 6 Juin', 56000, 'VANNES', '326.40', 'PS'),
(29, 'Martin', 'Frédéric', 'Bât A 90 r Bayeux', 70000, 'VESOUL', '506.06', 'PH'),
(30, 'Marie', 'Frédérique', '172 r Caponière', 70000, 'VESOUL', '313.31', 'PO'),
(31, 'Rosenstech', 'Geneviève', '27 r Auvergne', 75000, 'PARIS', '366.82', 'MH'),
(32, 'Pontavice', 'Ghislaine', '8 r Gaillon', 86000, 'POITIERS', '265.58', 'MV'),
(33, 'Leveneur-Mosquet', 'Guillaume', '47 av Robert Schuman', 64000, 'PAU', '184.97', 'PS'),
(34, 'Blanchais', 'Guy', '30 r Authie', 8000, 'SEDAN', '502.48', 'PH'),
(35, 'Leveneur', 'Hugues', '7 pl St Gilles', 62000, 'ARRAS', '7.39', 'PO'),
(36, 'Mosquet', 'Isabelle', '22 r Jules Verne', 76000, 'ROUEN', '77.10', 'MH'),
(37, 'Giraudon', 'Jean-Christophe', '1 r Albert de Mun', 38100, 'VIENNE', '92.62', 'MV'),
(38, 'Marie', 'Jean-Claude', '26 r Hérouville', 69000, 'LYON', '120.10', 'PS'),
(39, 'Maury', 'Jean-François', '5 r Pierre Girard', 71000, 'CHALON SUR SAONE', '13.73', 'PH'),
(40, 'Dennel', 'Jean-Louis', '7 pl St Gilles', 28000, 'CHARTRES', '550.69', 'PO'),
(41, 'Ain', 'Jean-Pierre', '4 résid Olympia', 2000, 'LAON', '5.59', 'MH'),
(42, 'Chemery', 'Jean-Pierre', '51 pl Ancienne Boucherie', 14000, 'CAEN', '396.58', 'MV'),
(43, 'Comoz', 'Jean-Pierre', '35 r Auguste Lechesne', 18000, 'BOURGES', '340.35', 'PS'),
(44, 'Desfaudais', 'Jean-Pierre', '7 pl St Gilles', 29000, 'BREST', '71.76', 'PH'),
(45, 'Phan', 'JérÃ´me', '9 r Clos Caillet', 79000, 'NIORT', '451.61', 'PO'),
(46, 'Riou', 'Line', '43 bd Gén Vanier', 77000, 'MARNE LA VALLEE', '193.25', 'MH'),
(47, 'Chubilleau', 'Louis', '46 r Eglise', 17000, 'SAINTES', '202.07', 'MV'),
(48, 'Lebrun', 'Lucette', '178 r Auge', 54000, 'NANCY', '410.41', 'PS'),
(49, 'Goessens', 'Marc', '6 av 6 Juin', 39000, 'DOLE', '548.57', 'PH'),
(50, 'Laforge', 'Marc', '5 résid Prairie', 50000, 'SAINT LO', '265.05', 'PO'),
(51, 'Millereau', 'Marc', '36 av 6 Juin', 72000, 'LA FERTE BERNARD', '430.42', 'MH'),
(52, 'Dauverne', 'Marie-Christine', '69 av Charlemagne', 21000, 'DIJON', '281.05', 'MV'),
(53, 'Vittorio', 'Myriam', '3 pl Champlain', 94000, 'BOISSY SAINT LEGER', '356.23', 'PS'),
(54, 'Lapasset', 'Nhieu', '31 av 6 Juin', 52000, 'CHAUMONT', '107.00', 'PH'),
(55, 'Plantet-Besnier', 'Nicole', '10 av 1ère Armée Française', 86000, 'CHATELLEREAULT', '369.94', 'PO'),
(56, 'Chubilleau', 'Pascal', '3 r Hastings', 15000, 'AURRILLAC', '290.75', 'MH'),
(57, 'Robert', 'Pascal', '31 r St Jean', 93000, 'BOBIGNY', '162.41', 'MV'),
(58, 'Jean', 'Pascale', '114 r Authie', 49100, 'SAUMUR', '375.52', 'PS'),
(59, 'Chanteloube', 'Patrice', '14 av Thiès', 13000, 'MARSEILLE', '478.01', 'PH'),
(60, 'Lecuirot', 'Patrice', 'résid St Pères 55 r Pigacière', 54000, 'NANCY', '239.66', 'PO'),
(61, 'Gandon', 'Patrick', '47 av Robert Schuman', 37000, 'TOURS', '599.06', 'MH'),
(62, 'Mirouf', 'Patrick', '22 r Puits Picard', 74000, 'ANNECY', '458.42', 'MV'),
(63, 'Boireaux', 'Philippe', '14 av Thiès', 10000, 'CHALON EN CHAMPAGNE', '454.48', 'PS'),
(64, 'Cendrier', 'Philippe', '7 pl St Gilles', 12000, 'RODEZ', '164.16', 'PH'),
(65, 'Duhamel', 'Philippe', '114 r Authie', 34000, 'MONTPELLIER', '98.62', 'PO'),
(66, 'Grigy', 'Philippe', '15 r Mélingue', 44000, 'CLISSON', '285.10', 'MH'),
(67, 'Linard', 'Philippe', '1 r Albert de Mun', 81000, 'ALBI', '486.30', 'MV'),
(68, 'Lozier', 'Philippe', '8 r Gaillon', 31000, 'TOULOUSE', '48.40', 'PS'),
(69, 'Dechâtre', 'Pierre', '63 av Thiès', 23000, 'MONTLUCON', '253.75', 'PH'),
(70, 'Goessens', 'Pierre', '22 r Jean Romain', 40000, 'MONT DE MARSAN', '426.19', 'PO'),
(71, 'Leménager', 'Pierre', '39 av 6 Juin', 57000, 'METZ', '118.70', 'MH'),
(72, 'Née', 'Pierre', '39 av 6 Juin', 82000, 'MONTAUBAN', '72.54', 'MV'),
(73, 'Guyot', 'Pierre-Laurent', '43 bd Gén Vanier', 48000, 'MENDE', '352.31', 'PS'),
(74, 'Chauchard', 'Roger', '9 r Vaucelles', 13000, 'MARSEILLE', '552.19', 'PH'),
(75, 'Mabire', 'Roland', '11 r Boutiques', 67000, 'STRASBOURG', '422.39', 'PO'),
(76, 'Leroy', 'Soazig', '45 r Boutiques', 61000, 'ALENCON', '570.67', 'MH'),
(77, 'Guyot', 'Stéphane', '26 r Hérouville', 46000, 'FIGEAC', '28.85', 'MV'),
(78, 'Delposen', 'Sylvain', '39 av 6 Juin', 27000, 'DREUX', '292.01', 'PS'),
(79, 'Rault', 'Sylvie', '15 bd Richemond', 2000, 'SOISSON', '526.60', 'PH'),
(80, 'Renouf', 'Sylvie', '98 bd Mar Lyautey', 88000, 'EPINAL', '425.24', 'PO'),
(81, 'Alliet-Grach', 'Thierry', '14 av Thiès', 7000, 'PRIVAS', '451.31', 'MH'),
(82, 'Bayard', 'Thierry', '92 r Falaise', 42000, 'SAINT ETIENNE', '271.71', 'MV'),
(83, 'Gauchet', 'Thierry', '7 r Desmoueux', 38100, 'GRENOBLE', '406.10', 'PS'),
(84, 'Bobichon', 'Tristan', '219 r Caponière', 9000, 'FOIX', '218.36', 'PH'),
(85, 'Duchemin-Laniel', 'Véronique', '130 r St Jean', 33000, 'LIBOURNE', '265.61', 'PO'),
(86, 'Laurent', 'Younès', '34 r Demolombe', 53000, 'MAYENNE', '496.10', 'MH');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `MED_DEPOTLEGAL` varchar(9) DEFAULT NULL,
  `MED_NOMCOMMERCIAL` varchar(19) DEFAULT NULL,
  `FAM_CODE` varchar(3) DEFAULT NULL,
  `MED_COMPOSITION` varchar(80) DEFAULT NULL,
  `MED_EFFETS` varchar(194) DEFAULT NULL,
  `MED_CONTREINDIC` varchar(236) DEFAULT NULL,
  `MED_PRIXECHANTILLON` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`MED_DEPOTLEGAL`, `MED_NOMCOMMERCIAL`, `FAM_CODE`, `MED_COMPOSITION`, `MED_EFFETS`, `MED_CONTREINDIC`, `MED_PRIXECHANTILLON`) VALUES
('3MYC7', 'TRIMYCINE', 'CRT', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', ''),
('ADIMOL9', 'ADIMOL', 'ABP', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', ''),
('AMOPIL7', 'AMOPIL', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', ''),
('AMOX45', 'AMOXAR', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', ''),
('AMOXIG12', 'AMOXI Gé', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', ''),
('APATOUX22', 'APATOUX Vitamine C', 'ALO', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.', ''),
('BACTIG10', 'BACTIGEL', 'ABC', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', ''),
('BACTIV13', 'BACTIVIL', 'AFM', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', ''),
('BITALV', 'BIVALIC', 'AAA', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.', ''),
('CARTION6', 'CARTION', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.', ''),
('CLAZER6', 'CLAZER', 'AFM', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', ''),
('DEPRIL9', 'DEPRAMIL', 'AIM', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', ''),
('DIMIRTAM6', 'DIMIRTAM', 'AAC', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.', ''),
('DOLRIL7', 'DOLORIL', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', ''),
('DORNOM8', 'NORMADOR', 'HYP', 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', ''),
('EQUILARX6', 'EQUILAR', 'AAH', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', ''),
('EVILR7', 'EVEILLOR', 'PSA', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', ''),
('INSXT5', 'INSECTIL', 'AH', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.', ''),
('JOVAI8', 'JOVENIL', 'AFM', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', ''),
('LIDOXY23', 'LIDOXYTRACINE', 'AFC', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.', ''),
('LITHOR12', 'LITHORINE', 'AP', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.', ''),
('PARMOL16', 'PARMOCODEINE', 'AA', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.', ''),
('PHYSOI8', 'PHYSICOR', 'PSA', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', ''),
('PIRIZ8', 'PIRIZAN', 'ABA', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.', ''),
('POMDI20', 'POMADINE', 'AO', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.', ''),
('TROXT21', 'TROXADET', 'AIN', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d\'allergie au produit.', ''),
('TXISOL22', 'TOUXISOL Vitamine C', 'ALO', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.', ''),
('URIEG6', 'URIREGUL', 'AUM', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.', '');

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rapport` int(11) NOT NULL AUTO_INCREMENT,
  `rep_name` varchar(1000) NOT NULL,
  `rep_prenom` varchar(1000) NOT NULL,
  `date_visite` date NOT NULL,
  `prat` varchar(1000) NOT NULL,
  `coef` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `produit` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_rapport`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`id_rapport`, `rep_name`, `rep_prenom`, `date_visite`, `prat`, `coef`, `comment`, `produit`) VALUES
(1, 'Doe', 'John', '2021-12-22', 'Alain Notini', 2, 'dfcvxwdfxw', 'TRIMYCINE'),
(2, 'Doe', 'John', '2021-12-15', 'Bruno Boscher', 1, 'visite de routine', 'INSECTIL'),
(3, 'Doe', 'John', '2021-12-16', 'Dominique Prévot', 2, 'changement de numéro', 'INSECTIL'),
(4, 'Smith', 'Vanessa', '2021-11-18', 'Bernard Lerat', 3, 'renseignement sur les produits', 'NORMADOR'),
(5, 'Doe', 'John', '2021-11-25', 'Bertrand Marçais-Lefebvre', 2, 'changement de telephone', 'JOVENIL'),
(6, 'Doe', 'John', '2021-11-24', 'Alain Notini', 1, 'visite de routine', 'AMOXAR'),
(7, 'Doe', 'John', '2021-12-10', 'Sylvie Renouf', 2, 'visite de routine', 'TRIMYCINE'),
(8, 'Doe', 'John', '2021-10-21', 'Bernard Lerat', 3, 'visite de routine', 'BIVALIC'),
(9, 'Doe', 'John', '2021-12-01', 'Dominique Guenon', 1, 'visite de routine', 'TROXADET'),
(10, 'Doe', 'John', '2021-12-25', 'Alain Notini', 3, 'mise à jour du catalogue', 'EQUILAR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(1000) NOT NULL,
  `mdp` varchar(1000) NOT NULL,
  `nom` varchar(1000) NOT NULL,
  `prenom` varchar(1000) NOT NULL,
  `admin_statue` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `mail`, `mdp`, `nom`, `prenom`, `admin_statue`) VALUES
(1, 'user1@gsb.fr', '$2y$10$9vJXD/bfZ7UWNxHjpJg0Fubcfnz1/4tufrTMl6zOBb1KuR9a5enRu', 'Doe', 'John', 0),
(2, 'user2@gsb.fr', '$2y$10$i/uB7qLr2juAEq/vel.V0./40VbLatyq5f/FGWEhK1hSwAKHR8xvy', 'Smith', 'Vanessa', 0),
(5, 'admin@gsb.fr', '$2y$10$KwQJrsdyhVrCo64xBxvtHeOV7AFdviDKg6tssguuTrY/lOGSvUaLm', 'Rooteur', 'Mike', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
