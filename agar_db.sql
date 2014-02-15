-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2014 at 01:38 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'SCURT ISTORIC', '2007 - este infiintata compania;\r\n2008 - compania incepe activitatea prin investitii auto si imobiliare din surse proprii ajungand la sfarsitul anului la un patrimoniu de 35 de automobile si 2 apartamente in zona ultracentrala a Timisoarei cu care demareaza serviciile de inchiriere ce continua pana in prezent; tot in acest an compania incepe investitia in terenuri agricole, demarand mai multe proiecte si Planuri Urbanistice Zonale (PUZ);\r\n2011- compania incepe activitatea in domeniul constructiilor executand diverse lucrari de amenajare, modernizare si reabilitare si isi reinnoieste parcul auto in vederea dezvoltarii serviciului de inchiriere;\r\n2012 - se continua activitatea in constructii prin inceperea lucrarilor de mansardare la imobilul de Timisoara de pe str. Timis nr. 20, in urma acestor lucrari rezultand 12 apartamente a cate doua camere, confort 1, decomandate a cate 60mp fiecare;\r\n2013 - compania finalizeaza lucrarile de mansardare de pe str. Timis, cele 12 apartamente fiind adaugate la patrimoniul imobiliar al companiei si intrand in circuitul de inchiriere.'),
(2, 'ECHIPA', 'Alin Fales - asociat si administrator al companiei incepand cu anul 2007 pana in prezent, licentiat in drept, cu expertiza in investitii imobiliare, bursa si sectorul auto;\r\nAlfredo Campolmi - asociat incepand cu anul 2007, fost director ENEL Italia, cu experienta in imobiliare si bursa;\r\nRadu Puica - asociat incepand cu anul 2011, arhitect, cu expertiza in investitii imobiliare si proiectare.'),
(3, 'ARII DE EXPERTIZA', 'Agar Company este o companie cu capital romano-italian avand ca domenii de activitate imobiliare, constructii si servicii.\r\nCompania este certificata ISO 9001, ISO 14001 si ISO 18001.\r\nAgar Company ofera deasemenea consultanta in Managementul Calitatii si de Devoltare si Audit de Mediu'),
(4, 'CONSTRUCTII', 'AGAR COMPANY este specializata in constructia de case si vile noi in stil traditional, modern, renovare de case vechi si apartamente precum si in lucrari de amenajari interioare, instalatiir electrice si sanitare.\r\nSuntem o firma de constructii cu experienta si dinamica, formata dintr-o echipa de profesionisti.\r\nOferim competenta si echipamentele pentru toate tipurile de constructii, indiferent de dimensiune si complexitate, timp si buget, facand ca proiectul si visele dvs sa devina realitate.\r\nPana la finalizarea proiectului exista o "supraveghere stricta" in toate etapele de constructive, oferim regulat rapoarte de lucru, atasat cu fotografii, pentru fiecare faza de constructie.\r\nPentru fiecare din proiectele si lucrarile nostre vom folosi materiale de inalta calitate si vom acorda garantie atat pentru material cat si pentru serviciile prestate. \r\nPrin acest mod de lucru am reusit sa construim case sigure si functionale.'),
(5, 'RENOV&#x102RI', 'Renovarile de cladiri si apartamente istroice este una din ramurile in care echipa AGAR COMPANY a dobandit expertienta in decursul anilor.\n\n			Pentru fiecare din lucrari sunt folosite materiale de inalta calitate se acorda garantie atat pentru material cat si pentru serviciile prestate.</br>\n			Specialistii echipei din departamentul de constructii, va vor oferi solutiile optime, astfel incat lucrarea de renovare sa fie conform standardelor estetice si functionale dorite.\n		'),
(6, 'PROIECTARE', 'Echipa de arhitecti ai companiei examineaza cu atentie caietului de sarcini si va vor propune o gama larga de proiecte de arhitectura in functie de necesitatile dumneavoastra.\n\n			Indiferent de natura constructiei, echipa AGAR COMPANY va ofera prin serviciul de proiecatre solutii pentru o gama larga de constructii: constructii civile (case la rosu si case la cheie) si industriale (hale/structuri) ori parti ale acestora lucrari de invelitori, sarpante, terase la constructii.\n		');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `articles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `layout`, `articles`) VALUES
(1, 'ACAS&#258', '3 columns', 'left-1,center-2,right-3'),
(2, 'SERVICII', '2', '0'),
(3, 'CONTACT', '2', '0'),
(4, 'CONSTRUC&#538II', '2', '0'),
(5, 'RENT A CAR', '2', '0'),
(6, 'PARC AUTO', '2', '0'),
(7, 'APARTHOTEL', '2', '0'),
(8, 'IMOBILIARE', '2', '0'),
(9, 'PLAY & WIN', '2', '0'),
(10, 'CONSULTAN&#538&#x102', '3 columns', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'admin', '03053c8c3fafda9f1a580deb7530ef30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
