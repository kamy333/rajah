-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: mysql.ikamy.ch
-- Generation Time: Jul 09, 2016 at 10:29 PM
-- Server version: 5.5.37-log
-- PHP Version: 5.5.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ikamych2`
--
# CREATE DATABASE IF NOT EXISTS `ikamych2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
# USE `ikamych2`;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist_ip`
--

DROP TABLE IF EXISTS `blacklist_ip`;
CREATE TABLE IF NOT EXISTS `blacklist_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `login_failed` int(11) NOT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `blacklist_ip`
--

INSERT INTO `blacklist_ip` (`id`, `ip`, `login_failed`, `input_date`) VALUES
(4, '83.78.95.42', 1, '2016-02-07 09:02:11'),
(5, '212.126.103.3', 1, '2016-03-15 20:33:48'),
(6, '160.176.142.249', 2, '2016-03-27 15:17:04'),
(7, '62.203.13.182', 4, '2016-04-02 19:29:13'),
(8, '5.254.65.109', 1, '2016-05-04 12:10:32'),
(9, '136.243.186.70', 1, '2016-05-11 11:21:14'),
(10, '90.3.91.103', 2, '2016-05-26 19:03:10'),
(11, '5.254.65.183', 1, '2016-06-06 20:29:14'),
(12, '41.200.52.107', 1, '2016-06-09 17:02:58'),
(13, '131.0.253.207', 1, '2016-06-10 03:16:12'),
(14, '41.105.152.146', 1, '2016-06-10 23:14:27'),
(15, '164.39.204.6', 1, '2016-06-14 12:56:44'),
(16, '212.243.228.247', 1, '2016-06-17 12:03:24'),
(17, '105.191.103.230', 1, '2016-06-20 04:01:05'),
(18, '105.66.10.254', 1, '2016-06-24 06:11:29'),
(19, '41.142.219.115', 1, '2016-07-08 09:17:42'),
(20, '80.12.35.16', 1, '2016-07-09 16:43:46'),
(21, '83.79.96.187', 5, '2016-07-09 19:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(90) NOT NULL,
  `category_1_id` int(11) NOT NULL,
  `category_1` varchar(40) DEFAULT NULL,
  `category_2_id` int(11) NOT NULL,
  `category_2` varchar(40) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT '0.00',
  `company_unit_price` decimal(10,2) DEFAULT '0.00',
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`),
  KEY `category_1_id` (`category_1_id`),
  KEY `category_2_id` (`category_2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `category_1_id`, `category_1`, `category_2_id`, `category_2`, `unit_price`, `company_unit_price`, `comment`) VALUES
(4, 'Production../.. Dancer', 4, 'Production', 4, 'Dancer', '45.00', '0.00', ''),
(5, 'Post-production../.. Premises', 6, 'Post-production', 9, 'Premises', '1500.00', '0.00', ''),
(6, 'Pre-production../.. Insurance', 5, 'Pre-production', 12, 'Insurance', '720.00', '0.00', ''),
(7, 'Pre-production../.. Crew', 5, 'Pre-production', 7, 'Crew', '450.00', '300.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_1`
--

DROP TABLE IF EXISTS `category_1`;
CREATE TABLE IF NOT EXISTS `category_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_1` varchar(40) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_1` (`category_1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category_1`
--

INSERT INTO `category_1` (`id`, `category_1`, `comment`) VALUES
(4, 'Production', ''),
(5, 'Pre-production', ''),
(6, 'Post-production', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_2`
--

DROP TABLE IF EXISTS `category_2`;
CREATE TABLE IF NOT EXISTS `category_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_2` varchar(40) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_2` (`category_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category_2`
--

INSERT INTO `category_2` (`id`, `category_2`, `comment`) VALUES
(4, 'Dancer', ''),
(6, 'Renting', ''),
(7, 'Crew', ''),
(8, 'Rental material', ''),
(9, 'Premises', ''),
(10, 'Hotel', ''),
(11, 'car rental', ''),
(12, 'Insurance', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `to_user_id` varchar(255) DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `message` varchar(255) DEFAULT NULL,
  `input_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `chat_ibfk_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `to_user_id`, `read`, `message`, `input_date`) VALUES
(2, 1, '2', 0, 'new test the feature', '2016-04-23 17:53:19'),
(3, 2, '2', 2, 'i''m testing my new mesaages from people i want to know', '2016-04-23 17:53:19'),
(4, 2, '2', 0, 'hi from gva', '2016-04-23 17:53:19'),
(5, 3, '2', 0, 'oupppsss', '2016-04-26 23:29:27'),
(6, 4, '2', 2, 'oh lalaaaaaaa!', '2016-04-28 00:01:32'),
(7, 1, '2', 0, 'hi from gva', '0000-00-00 00:00:00'),
(8, 2, '4', 0, '<p>vvvvvvv</p>', '2016-06-24 22:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `chat_friend`
--

DROP TABLE IF EXISTS `chat_friend`;
CREATE TABLE IF NOT EXISTS `chat_friend` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(259) DEFAULT NULL,
  `read1` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=195 ;

--
-- Dumping data for table `chat_friend`
--

INSERT INTO `chat_friend` (`id`, `user_id`, `username`, `message`, `date`, `img`, `read1`) VALUES
(51, '2', 'kamy', 'bonjour Bralia', '2016-06-27 08:22:06', NULL, 0),
(55, '28', 'Captainbraliaji', 'Cool Kami ! \r\nQue signifie admin ?', '2016-06-27 23:29:16', NULL, 0),
(56, '28', 'Captainbraliaji', 'Que vient faire le small chat d''autres personnes ?', '2016-06-27 23:31:59', NULL, 0),
(57, '28', 'Captainbraliaji', 'Et ce n''est pas tout , il y a un icône en bas à droite avec  un 5 ?', '2016-06-27 23:33:18', NULL, 0),
(58, '28', 'Captainbraliaji', 'Et puis  pourquoi tu mets mon mon avant mon prénom !!!!!!', '2016-06-27 23:35:49', NULL, 0),
(59, '28', 'Captainbraliaji', 'Et pourquoi on voit pas l''arc en ciel sur le jet d''eau ?', '2016-06-27 23:36:54', NULL, 0),
(60, '28', 'Captainbraliaji', 'Kami je te félicite . Moi j''ai préparé mon torchi oignon et mis sous bocal les herbes aromatiques que j''avais fait séchées . Je vais me coucher en t''embrassant très fort ', '2016-06-28 00:18:10', NULL, 0),
(61, '2', 'kamy', 'je viens de voir ton message sorry', '2016-06-28 01:28:35', NULL, 0),
(62, '2', 'kamy', 'le small chat ne marche pas mais il peut être éventuellement utilisé sur toutes les pages. c''est juste un example pour l''instant', '2016-06-28 01:33:05', NULL, 0),
(63, '2', 'kamy', 'pour ton nom c''est toi qui a remplie le formulaire je vais le changer pour toi. et l''admin c''est moi l''administrateur donc t''inquiète pas. Ce sont les 3 pseudo ayant accès. Mais c''est pas mal non?  Sinon toi tout va bien? je t''embrasse fort aussi.', '2016-06-28 01:40:45', NULL, 0),
(65, '28', 'Captainbraliaji', 'Bonjour Kami . Bien dormi ? :)\r\nJe suis en trâin de prendre mon pt dej en te lisant . C''est super', '2016-06-28 07:51:44', NULL, 0),
(66, '2', 'kamy', 'bonjour mon amie', '2016-06-28 09:05:05', NULL, 0),
(67, '28', 'Captainbraliaji', 'Kami , est ce  que ce que je vois retranscrit sur l''écran est l''intégralité du message  que tu as reçu ou seulement le début ?\r\nParce que je t''ai écrit plus que 2 lignes ce matin ', '2016-06-28 10:59:10', NULL, 0),
(68, '2', 'kamy', 'ce matin j''ai qu''un commentaire de toi et celui là.', '2016-06-28 11:25:15', NULL, 0),
(69, '2', 'kamy', 'je vais au boulot bisou', '2016-06-28 11:27:51', NULL, 0),
(70, '28', 'Captainbraliaji', 'Kami tu me charies, tu n''as que les 2 ères lignes du précédent message qui s''affichent . La preuve est que dans mon dernier message , je t''avais également dit que je t''embrassais encore et ça n''apparait plus .\r\nDans mon 1 er message de ce matin , je t''ai parlé d''une robe de chambre , de la fourberie du voisin du haut et des small chat et des musiques on est bien d''accord ? \r\nA défaut il y a un problème à résoudre ....', '2016-06-28 19:52:44', NULL, 0),
(71, '28', 'Captainbraliaji', 'Ou alors tu reçois l''intégralité de mes messages mais tu fais la sourde oreille quand ça t''arrange ;)', '2016-06-28 19:55:53', NULL, 0),
(72, '2', 'kamy', 'non je vois  ce que tu vois :)   je sais pas encore remédier à ce problème. Quand tu as mis les messages les as-tu vu apparaître? les as-tu effacer avec icône qui apparaît rouge sur ton message. non je te charie pas :) bisou', '2016-06-28 21:29:55', NULL, 0),
(73, '28', 'Captainbraliaji', 'Je vais me coucher . Je suis naaz . Bisou .De ton côté Essaie d''augmenter un peu ton temps de sommeil ', '2016-06-28 21:31:03', NULL, 0),
(74, '2', 'kamy', 'bonne nuit', '2016-06-28 21:56:48', NULL, 0),
(75, '2', 'kamy', 'bonne journée mon amie', '2016-06-29 09:21:05', NULL, 0),
(76, '28', 'Captainbraliaji', 'Kami tu es là ? Ça fait combien de temps que tu n''es pas venu àParis ?', '2016-06-29 21:54:59', NULL, 0),
(77, '28', 'Captainbraliaji', 'Ça va ?', '2016-06-29 21:59:52', NULL, 0),
(78, '28', 'Captainbraliaji', 'As tu écouté Serge Reggiani en fermant les yeux?', '2016-06-29 22:01:34', NULL, 0),
(79, '28', 'Captainbraliaji', 'Je vais essayer de dormir .je t''embrasse', '2016-06-29 22:17:44', NULL, 0),
(80, '28', 'Captainbraliaji', 'Je suis là très près de toi . \r\nTu n.es pas obligé de m''écrire ,,,,,,,,,,,,,', '2016-06-30 02:09:37', NULL, 0),
(81, '28', 'Captainbraliaji', 'Je me demande si a Geneve le ciel n''est pas aussi un peu rouge . Le soleil ne va pas tarder', '2016-06-30 02:14:57', NULL, 0),
(82, '28', 'Captainbraliaji', 'J''avais vu sur le plan que tu n''habitais pas très loin du jardin où les gens jouent aux échecs géants :)', '2016-06-30 02:17:43', NULL, 0),
(83, '28', 'Captainbraliaji', 'Je suis dans le salon . Dans la chambre à coucher je peux profiter de la wifi des voisins que pendant la journée ( ils la déconnectent pendant la nuit) \r\nJe parle des voisins du 5 e étage car le voisin du 4 e (juste au dessus de nous ) n''est pas assez cool pour lui demander son code wifi et en profiter :)', '2016-06-30 02:24:21', NULL, 0),
(84, '28', 'Captainbraliaji', 'Je vais retourner au lit mais je continue à penser fort a toi . \r\nJe t''embrasse .......je ne sais pas comment dire exactement mais en retenant ma respiration pour m''imprégner encore plus de ta présence qui me rend heureuse', '2016-06-30 02:31:18', NULL, 0),
(85, '28', 'Captainbraliaji', 'Et cette fois j''ai bien verifié que le message est envoyé dans son intégralité et j''ai pris garde de ne pas appuyer sur les icônes à côté de mon prénom \r\nMine de rien j''apprends petit à petit :) ,,,,,,,,,,,,,,', '2016-06-30 02:35:00', NULL, 0),
(86, '2', 'kamy', 'bonjour Bralia je voulais te répondre mais je me suis endormi épuisé et je viens de me réveiller. Caroline a la sclérose en plaque déclaré depuis quelques années. bon je le dis, c''est pas un secret non plus mais elle veut pas que tt le monde soit au courant non plus.. c''est difficile pour ma mère d''avoir les 2 enfants ''malades'' et comme elle est pas très positive c''est encore plus difficile.', '2016-06-30 03:19:06', NULL, 0),
(87, '2', 'kamy', 'tu n''as pas la wifi chez toi?', '2016-06-30 03:20:13', NULL, 0),
(88, '2', 'kamy', 'je sais pas si ça t’intéresse il y a des cours sur le judaïsme ou l''histoire par des profs                 http://www.uneej.com/dashboard  j''ai commencé  sur la grèce qui va de après Cyrus domination perse puis Grec puis à Rome. l''histoire c''est passionnant sauf que j''oublie tout', '2016-06-30 03:37:13', NULL, 0),
(89, '2', 'kamy', 'je pense bien à toi aussi  bonne nuit', '2016-06-30 03:38:10', NULL, 0),
(90, '28', 'Captainbraliaji', 'Mon si cher Kamran , j''espère que tu as bien dormî ........le peu que tu as dormis ( je suppose :) )\r\nJ''ai les idées trop embrouillées pour tenir une conversation . La seule chose qui est claire est que je suis heureuse de t''avoir retrouvé . Gros bisous avec l''esprit largement confus \r\nTon amie Bralia', '2016-06-30 08:29:34', NULL, 0),
(91, '28', 'Captainbraliaji', 'Je m''excuse mais pourrais tu mettre sur ton logo une photo de toi dans un angle où le repose tête n''apparaît pas comme quelque chose posée sur ta tempe . <3', '2016-06-30 08:43:33', NULL, 0),
(92, '28', 'Captainbraliaji', 'C''est jour de marché aujourd''hui , j''ai vu Véro , moktar , Karim , Hassan , Sylvie , Greg mais je n''ai pas vu Asher ....:)). Mais au moins mon cerveau recommence a fonctionner et c''est tant mieux Parce que j''avais prévu de consacrer mon après midi à diverses réclamations .\r\nTravaille bien  de ton côté . Bisou', '2016-06-30 10:49:48', NULL, 0),
(93, '2', 'kamy', 'le repose-tête fait partie de moi :)  il faut t''y habituer. passe une très bonne journée', '2016-06-30 12:42:14', NULL, 0),
(94, '28', 'Captainbraliaji', 'Pas de problème . Très bien répondu .', '2016-06-30 16:01:22', NULL, 0),
(95, '28', 'Captainbraliaji', 'Je n''ai jamais suivi de cours en ligne mais ceux de l''uneej ont l''air passionnants . Je serais assez tentée par le cours "découvrir la philosophie avec Emmanuel Levinas "\r\nOn a la wifi à la maison grâce à la live box mais on ne la capte pas bien dans notre chambre à coucher et dans celle de laetitia . C''est pourquoi dans ces 2 pièces on se branche souvent sur celle des voisins même si le débit est un peu lent . Capiché ? :)', '2016-06-30 19:40:47', NULL, 0),
(96, '2', 'kamy', 'comment vas-tu mon amie? je suis sortie il faisait si beau et agréable. il y aussi le site http://www.akadem.org/ qui traite aussi de l''actualité.', '2016-06-30 23:36:28', NULL, 0),
(97, '2', 'kamy', 'tu parles et lis l''anglais?', '2016-06-30 23:37:27', NULL, 0),
(98, '28', 'Captainbraliaji', 'Tu sais , j''ai un peu de mal avec l''actualité ...j''ai l''impression de ne pas bien comprendre . J''ai tendance même à m''en éloigner par moment même si je sais que j''ai tort ;)', '2016-07-01 00:14:45', NULL, 0),
(99, '28', 'Captainbraliaji', 'Même si je ne maîtrise pas complètement l''anglais , je me débrouille pas mal en anglais  et J''adore la langue anglaise.  j''ai préparé un brevet de traduction juridique anglo américain en parallèle à mes études de droit . Je trouve que c''est une langue dont la sonorité est très fidèle à ce qu''elle exprime en sens :) \r\nPar contre je déteste l''espagnol que j''avais choisi en 2 e langue\r\nToi , Je suppose que tu parles tres bien en anglais   Mais parles tu également  l''allemand ? ( ça peut être utile en Suisse ) ...:)', '2016-07-01 00:25:18', NULL, 0),
(100, '28', 'Captainbraliaji', 'Kami, je vais me coucher .j''ai bien travaillé . Je mérite un bon dodo .', '2016-07-01 00:32:38', NULL, 0),
(101, '28', 'Captainbraliaji', 'J''espère que je ne t''ai pas trop perturbé aujourd''hui heu ...plutôt hier .  Si c''est le cas , je m''excuse \r\nBisou !', '2016-07-01 00:36:16', NULL, 0),
(102, '2', 'kamy', 'non je ne parle pas l''allemand, heureusement je peux m''en sortir sans :) je vais mettre making a murder sur le procès (netfix) sur site si j''y arrive. c''est en Anglais', '2016-07-01 01:51:57', NULL, 0),
(103, '2', 'kamy', 'il y a de l''histoire aussi sur Akadem et tu as peut être bien raison de ne pas suivre l''actualité car c''est déprimant mais pour ma part j''ai besoin de savoir.  je t''embrasse fort et te souhaite une bonne nuit.', '2016-07-01 02:00:14', NULL, 0),
(105, '28', 'Captainbraliaji', 'Bonjour . Je suis encore un peu sonnée ce matin mais arrive à aligner quelques phrases dans la tête . :)\r\nJ''ai vu "making a murderer "et en ai profité pour obtenir un essai d''un mois gratuit sur Netflix....pour Laetitia qui adore les séries . Je ne te cache pas que je ne suis pas trop fan....je préfère un bon "Colombo "\r\nPeut être Parce que dans le droit français l''avocat n''a pas le même rôle d''investigation que dans le système britannique . Je me suis faite à l''idée que ce rôle appartient au juge d''instruction, à la police et au ministère public et pas a l''avocat . \r\nQue l''avocat demande au tribunal d''ordonner des expertises ou des examens oui , mais avoir le rôle de détective non.Il y a la police pour ça et cela  doit rester un service public accessible à tous et ne pas dépendre des moyens financier de chacun . \r\nAlors comme je suis très généreuse , je laisse à toi tout seul toutes les saisons de making a murderer , et avec un petit bisou sur ton front pour te bénir :))', '2016-07-01 07:21:32', NULL, 0),
(106, '28', 'Captainbraliaji', 'Par contre Akadem, ça me plait assez car ce n''est pas que de l''info pur', '2016-07-01 07:46:29', NULL, 0),
(107, '2', 'kamy', 'Oh dommage que tu n''es pas intéressé car l''histoire qui est vrai, c''est une série que tu en ressors avec un peu ébranlé et tu te poses des questions sur la justice américaine et son fonctionnement. Et même sur toi même. Les séquences du film sont surement orienté et influence le spectateur.', '2016-07-01 10:11:33', NULL, 0),
(108, '2', 'kamy', 'passe une bonne journée joonam', '2016-07-01 10:12:27', NULL, 0),
(109, '28', 'Captainbraliaji', 'Toi cheytoun ? Non je n''ai pas ce souvenir . Espiègle ,oui :) \r\nJ''apprends beaucoup de choses sur toi . Je ne savais pas que tu avais tant bougé et que tu avais même vécu à nouveau à Paris et que vous aviez été en pensionnat en région parisienne toi et Caro .\r\nOui j''ai connu Farzaneh elle avait l''air sympa et j''adorais par dessus tout le crayon de maquillage qu''elle mettait sous ses yeux ;))\r\nJe suis ultra heureuse que tu aies gardé les sensations même aux endroits que tu n''arrive pas à bouger comme tu veux ', '2016-07-01 19:43:34', NULL, 0),
(110, '28', 'Captainbraliaji', 'Kami , encore une fois la suite de mon message a été coupé', '2016-07-01 19:45:58', NULL, 0),
(111, '28', 'Captainbraliaji', 'Bon tant que je me souviens de la suite je te le réécris .attends, je me demande si ce ne sont pas les symboles style smiley qui sont responsables  . Je fais un test ', '2016-07-01 19:51:14', NULL, 0),
(112, '28', 'Captainbraliaji', 'C''est ça, tout ce qui a été écrit apres le trèfle à 4 feuilles a disparu ! C''est bon à savoir :)', '2016-07-01 19:53:26', NULL, 0),
(113, '28', 'Captainbraliaji', 'En fait vers la cinquantaine , tu sembles déjà avoir vécu plusieurs vie en une . Tu es courageux, sensible,malin et pétillant ....\r\nMoi je n''ai pas autant bougé que toi mais j''ai également eu mes moments de doute , de solitude, de révolte, je pense même avoir frisé la folie ....et alors? Maintenant au moins les fous ne me font plus peur :))\r\nLa maladie neuro dégénérative de mon père a été très éprouvante mais m''a fait rencontrer des personnes formidables .Cela m''a donné le sentiment que rien n''est plus riche que l''humain et m''a fait découvrir des choses sur lesquelles on ne s''arrête pas à l''accoutumé .\r\nJ''ai pris conscience combien nos limites peuvent être repoussées et comment nos faiblesses peuvent devenir nos alliés si on sait les explorer. C''est ce paradoxe de la vie que j''aime .BISOUUU', '2016-07-01 20:12:20', NULL, 0),
(114, '28', 'Captainbraliaji', 'Minuit sonne .shabbat chalom .Ravie d''avance de te retrouver demain :) :)', '2016-07-01 22:02:31', NULL, 0),
(117, '2', 'kamy', 'il va falloir que tu me racontes ta folie.. la folie est relative. j''aime bcp ce que tu dis.', '2016-07-02 09:02:13', NULL, 0),
(119, '2', 'kamy', 'bonne nuit mon amie. Fais de beaux rêves...', '2016-07-02 22:08:24', NULL, 0),
(120, '28', 'Captainbraliaji', 'Ne me dis pas que tu dors déjà ! Kami, je n''arrive pas à me connecter sur ton site avec mon iPhone ...', '2016-07-02 22:53:26', NULL, 0),
(121, '28', 'Captainbraliaji', 'Mais oui , tu sembles dormir ! Dans ce cas je t''embrasse dans ton sommeil et vais également me coucher :)', '2016-07-02 23:01:00', NULL, 0),
(122, '2', 'kamy', 'hello mon amie, j''espère que tu passes une bonne journée', '2016-07-03 16:59:15', NULL, 0),
(124, '28', 'Captainbraliaji', 'Hello .tu as vu comme ils sont sympa et fair play les islandais !!', '2016-07-03 21:43:10', NULL, 0),
(125, '2', 'kamy', 'oui ils sont sympa. :)', '2016-07-03 23:18:21', NULL, 0),
(126, '28', 'Captainbraliaji', 'Kamran, Quelle est la différence entre le "chat " et le "chat test"?', '2016-07-03 23:55:29', NULL, 0),
(127, '2', 'kamy', 'j''ai testé une nouvelle fonctionnalité, la page se rafraîchit tout les secondes automatiquement sans que nous ayons besoin de le faire pour voir les nouveaux commentaires bisou', '2016-07-04 00:23:51', NULL, 0),
(128, '2', 'kamy', 'check', '2016-07-04 00:27:16', NULL, 0),
(129, '28', 'Captainbraliaji', 'J''ai vu de nouvelles photos ( Désirée et son mari en voyage de noce peut être ? ) et je trouve que les photos défilent mieux :)', '2016-07-04 00:27:22', NULL, 0),
(131, '2', 'kamy', 'yeahh mon truc marche', '2016-07-04 00:28:36', NULL, 0),
(132, '28', 'Captainbraliaji', 'Oui sur celle de la famille :)', '2016-07-04 00:28:39', NULL, 0),
(133, '2', 'kamy', 'j''ai pas vu des photos du voyage de noce', '2016-07-04 00:29:31', NULL, 0),
(134, '28', 'Captainbraliaji', 'Elles sont superbes tes photos de bar-mitsva . Je ne savais pas que tu l''avais fait en Iran ...', '2016-07-04 00:30:10', NULL, 0),
(135, '2', 'kamy', 'oui', '2016-07-04 00:30:40', NULL, 0),
(136, '2', 'kamy', 'merci', '2016-07-04 00:31:07', NULL, 0),
(137, '28', 'Captainbraliaji', 'Le voyage de noce , était une supposition de mon imagination débordante :))', '2016-07-04 00:31:44', NULL, 0),
(138, '2', 'kamy', 'oui je vois ça :)', '2016-07-04 00:32:46', NULL, 0),
(139, '28', 'Captainbraliaji', 'Bravo en tout cas d''avoir réussi à améliorer le chat en temps réel monsieur l''admin :)', '2016-07-04 00:34:40', NULL, 0),
(140, '2', 'kamy', 'pas mal hein? je suis fier de moi', '2016-07-04 00:35:39', NULL, 0),
(141, '28', 'Captainbraliaji', 'As tu vu le problème que posent les icônes ?', '2016-07-04 00:35:51', NULL, 0),
(142, '2', 'kamy', ':)', '2016-07-04 00:35:56', NULL, 0),
(143, '2', 'kamy', 'ou?', '2016-07-04 00:36:14', NULL, 0),
(144, '28', 'Captainbraliaji', 'J''ai remarqué que si j''utilise des icônes styles smiley , ca coupe le reste du message', '2016-07-04 00:37:24', NULL, 0),
(145, '2', 'kamy', 'Ah je ne savais pas.. utilises-tu une image ou des touches claviers?', '2016-07-04 00:39:20', NULL, 0),
(146, '28', 'Captainbraliaji', 'Je t''écris avec l''iPad', '2016-07-04 00:40:04', NULL, 0),
(147, '28', 'Captainbraliaji', 'Et justement je voulais te dire que je n''ai pas le moyen de faire un chat Avec toi sir l''iPhone ....', '2016-07-04 00:41:17', NULL, 0),
(148, '2', 'kamy', 'faut utiliser que des touches clavier normal..   iphone non? il faut que je teste mais avec mon handicap ça va être dur.', '2016-07-04 00:43:21', NULL, 0),
(149, '28', 'Captainbraliaji', 'Bon ce n''est pas grave ....dis moi si tu reçois l''image que je t''envoie :', '2016-07-04 00:45:39', NULL, 0),
(150, '28', 'Captainbraliaji', 'Je vois que non . Eh bien c''était toi avec une auréole sur la tête pour ton coup de génie pour le nouveau chat  . \r\n:)', '2016-07-04 00:47:53', NULL, 0),
(151, '2', 'kamy', 'je vais essayer de rajouter cette function.. bon challenge', '2016-07-04 00:49:49', NULL, 0),
(152, '2', 'kamy', 'yes it''s me your angel', '2016-07-04 00:50:29', NULL, 0),
(153, '28', 'Captainbraliaji', 'Bon je vais me coucher Parce que je dois aller a Noisy le Grand demain matin et je vais essayer de pas conduire en étant somnolente :)\nTu m''as mise de bonne humeur . Je crois que je vais faire de beaux rêves :))', '2016-07-04 00:51:43', NULL, 0),
(154, '2', 'kamy', 'bonne nuit :) bisou', '2016-07-04 00:52:34', NULL, 0),
(155, '28', 'Captainbraliaji', 'good night :)', '2016-07-04 00:54:41', NULL, 0),
(157, '28', 'Captainbraliaji', '', '2016-07-04 17:55:31', NULL, 0),
(158, '28', 'Captainbraliaji', 'Bonjour :) j''espère que tu as passé une bonne journée :)\nMr Melamed est décédé ce week end . Tu te rappelles de lui et de ses enfants ?', '2016-07-04 17:58:10', NULL, 0),
(159, '28', 'Captainbraliaji', 'C''est bien que tu aies classé tes liens en sous groupe . Si non qu''elle est la différence entre la rubrique "register "et le "file input " est pour enregistrer tes données ou pour t''en envoyer . Comment ça marche ? \nComment fait on pour changer de mot de passe sans passer par "mot de passe oublié"?', '2016-07-04 18:21:32', NULL, 0),
(160, '2', 'kamy', 'oui je me rappelle de lui, triste nouvelle. Nathalie je connais. tu les connais bien?', '2016-07-04 20:49:36', NULL, 0),
(161, '2', 'kamy', 'il faut que je rajoute cette fonctionnalité afin de laisser la possibilité de changer le mot de passe qui est pour ton info crypté donc impossible pour moi de le deviner.   parles-tu file input dans le formulaire register? si oui c''est pouvoir uploader une photo..', '2016-07-04 20:55:57', NULL, 0),
(162, '2', 'kamy', 'mais file input dans chat2 c''est pouvoir rajouter des photos dans le Chat mais ça ne marche pas encore', '2016-07-04 20:58:14', NULL, 0),
(165, '28', 'Captainbraliaji', 'Merci Kamran pour les info . Je vois que tu as encore quelques nuits blanches à passer sur ton site :))\r\nJe vois les Melamed tres rarement ,encore moins souvent que les Hebron . Ça fait une éternité que je n''ai pas vu Isabelle qui est aux USA ....moi aussi je préfère Nathalie .Parmi les Hebron , c''est uniquement avec Solange qu''il m''arrive de donner des rancards pour fabriquer un truc ensemble.', '2016-07-05 08:08:52', NULL, 0),
(166, '28', 'Captainbraliaji', 'J''ai un petit peu le cœur gros ce matin mais ton amitié me protège comme une seconde peau et j''ai a plein de trucs à faire aujourd''hui . \r\nPasse une bonne journée Kami :) \r\nAu fait , est ce que Caroline a réussi à obtenir de nouvelles perspectives, info ou solutions ?\r\nJe t''embrasse tendrement', '2016-07-05 08:17:24', NULL, 0),
(167, '2', 'kamy', 'Pourquoi as-le coeur gros? dis-moi tout  je t''embrasse xoxo', '2016-07-05 10:17:50', NULL, 0),
(172, '28', 'Captainbraliaji', 'C''est gentil de ta part . Heureusement le spleen est passé . \r\nEt toi , content de ta journée ? \r\nAs tu des nouvelles de Caroline ?', '2016-07-05 20:39:27', '', 0),
(173, '2', 'kamy', 'je viens de me poser, longue et sympa journée. Diner au relais de l''entrecôte.j''adore .je suis un carnivore. \r\nje n''ai pas parlé à caro directement mais elle se dit moins stressée et ne peut pas dire si elle va mieux. elle revient Samedi.\r\nJe suis bien content que ton blues s''est dissipé. je t''embrasse mon amie.', '2016-07-06 01:07:11', NULL, 0),
(176, '28', 'Captainbraliaji', 'Tu as raison de savourer les moments simplement bons . A ta façon de le raconter  j''en ai aussi  profité :) \r\nTu ne le dis pas mais tu as l''air de travailler dur sur ton site ....je note des transformations en cours  .\r\nje t''embrasse et te souris heureuse', '2016-07-06 07:08:57', NULL, 0),
(177, '2', 'kamy', 'content de te voir de bonne humeur ça fait plaisir', '2016-07-06 09:52:57', NULL, 0),
(178, '2', 'kamy', 'je travaille mais surtout j''apprends en même temps. j''ai appris à faire le chat. l''apprentissage est sans fin..', '2016-07-06 09:55:03', NULL, 0),
(179, '2', 'kamy', 'test2', '2016-07-06 10:01:09', 'images-17.jpg', 0),
(180, '28', 'Captainbraliaji', 'Juste une question de ton cobaye :)    "Est ce que c''est normal que je ne puisse pas agrandir l''image ?"', '2016-07-06 11:47:48', '', 0),
(181, '2', 'kamy', 'hello je suis justement entrain de bosser sur ça. j''ai décidé de ne pas aller travailler :)', '2016-07-06 11:49:40', '', 0),
(182, '2', 'kamy', 'voilà pour agrandir l''image, tu click sur l''image et pour revenir tu click de nouveau sur l''image. C''est pas génial car l''image est trop grande. ça marche mieux sur test.', '2016-07-06 12:27:30', '', 0),
(183, '2', 'kamy', 'Je viens de lire ton message et je suis très touché déjà par la confiance que tu me témoignes et de ce que tu racontes car je sais au combien ce sont des sujets sensibles. Est-ce venu d’un coup ou progressivement ? Quel était devenu tes relations avec tes filles et Pascal ? As-tu pu consulter un psychiatre, il me semble comme une situation légère du toc, comme des angoisses, une souffrance morale. Qu’entends-tu culturellement ? que ressentais-tu ? Excuses-moi si je te poses bcp de question et j’espère ne pas être trop envahissant. Maintenant à ce niveau tu vas mieux ?', '2016-07-06 12:51:56', '', 0),
(184, '28', 'Captainbraliaji', 'Ça marche ! Serais tu fan de voitures ? :)\r\nPour le reste je te répondrai quand tout le monde dormira . Bisou', '2016-07-06 17:49:32', '', 0),
(185, '2', 'kamy', 'Nan pas fan du tout mais j''avais pris un cours et il y avait une collection de voiture alors c''est super pour tester, bisou', '2016-07-06 21:25:39', '', 0),
(186, '28', 'Captainbraliaji', 'Bonjour . Je suis heureuse de pouvoîr me connecter à nouveau et de constater que TU N''AS PAS FINI PAR TOUT FAIRE SAUTER avec toutes les transformations et nouvelles configurations . ...\r\nJ''espère que ton absence au bureau hier était motivée par un RTT et que tu es en pleine forme .\r\nDjât khâli hier soir j''ai préparé un magret de canard bien rouge à cœur , tu aurais aimé si tu es un vrai carnivore :)\r\nCe n''est pas grave , j''en ai profité pour prendre double ration ;)\r\nBonne journée Kamiiiiiiiiiiii', '2016-07-07 07:50:15', NULL, 0),
(187, '2', 'kamy', 'Bonjour mon cobaye préféré. Oui je me fais parfois des frayeurs d’un coup rien ne marche et je sais pas sur le moment comment y remédier. \r\nJ’ai pris hier sur mes vacances aujourd’hui aussi car je ne prends jamais de vacances  .\r\nSympa d’avoir pensé à moi avec ton je suis sur délicieux magret de canard. J’espère que comme hier tu es en pleine forme.\r\nBisou', '2016-07-07 10:46:24', NULL, 0),
(188, '28', 'Captainbraliaji', 'Bonsoir mon admin préfèré', '2016-07-07 23:38:44', '', 0),
(189, '28', 'Captainbraliaji', 'Les français sont fous de joie et klaxonnent encore a cette heure ci pour fêter leur victoire .\r\nC''est ce genre d''ambiance que tu aimes ?', '2016-07-07 23:41:01', '', 0),
(190, '28', 'Captainbraliaji', 'Je suis en pleine forme mais avec les yeux qui picotent \r\nJe vais dormir contente de me coucher enfin mais triste de te quitter pour quelques heures \r\nJe t''adore :)', '2016-07-07 23:45:33', '', 0),
(191, '28', 'Captainbraliaji', 'Bonjour ,c''est la  1 ère matinée où je me sens en été. Le soleil est radieux et je reconnais les bruits de vacances . Il y a dans l''immeuble d''à côté des enfants qui s''amusent à glisser sur ???? ( je ne vois pas quoi ) et les parents qui les rappellent à l''ordre par principe :)\r\nToi , par contre je te trouve très silencieux .....\r\nBise', '2016-07-08 07:03:29', '', 0),
(192, '2', 'kamy', 'bonjour je me prépare à sortir plus tôt. je déjeune avec Michael et mon ami qui l''a engagé pour le stage d''été. asse une bonne journée...ps oui je suis content que la France a gagné..xxx', '2016-07-08 09:42:47', NULL, 0),
(193, '28', 'Captainbraliaji', 'Alors ton copain est content de Mickaël ? J''espère que la conversation a eu lieu en français ... ( je me demande comment parle en français le fils de Caroline ) . Moi j''ai fait l''achat du siècle , un mini ventilateur d''environ 15 cm  . Ca me sauve  :)', '2016-07-08 19:59:34', '', 0),
(194, '2', 'kamy', 'oui il a l''air content en plus il est cool. Il est anglais mais oui plus on a parlé franglais :). Michael parle pas mal français . il fait des progrès. C''est vrai qu''il fait chaud. je te souhaite un shabath shalom. Vous êtes vous tous réunis?.', '2016-07-08 22:04:57', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `restricted_list` tinyint(1) NOT NULL DEFAULT '0',
  `company_name` varchar(50) DEFAULT '',
  `web_view` varchar(50) DEFAULT '',
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT '',
  `website` text,
  `address` varchar(50) DEFAULT '',
  `cp` varchar(50) DEFAULT '',
  `city` varchar(50) DEFAULT '',
  `country` varchar(50) DEFAULT '',
  `phone` varchar(50) DEFAULT '',
  `mobile` varchar(50) DEFAULT '',
  `comment` text,
  `liste_rank` int(11) DEFAULT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  KEY `pseudo_2` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `pseudo`, `restricted_list`, `company_name`, `web_view`, `last_name`, `first_name`, `email`, `website`, `address`, `cp`, `city`, `country`, `phone`, `mobile`, `comment`, `liste_rank`, `input_date`) VALUES
(1, 'COLLINE', 1, '', 'COLLINE', 'COLLINE', '', NULL, NULL, NULL, NULL, 'Gen', 'Suisse', NULL, NULL, NULL, 1, '2015-09-25 07:49:22'),
(2, 'AUTRES', 1, '', 'AUTRES', 'AUTRES', '', NULL, NULL, NULL, NULL, 'Gen', 'Suisse', NULL, NULL, NULL, 1, '2015-09-25 07:49:22'),
(3, 'Tour_Patient', 1, '', 'Tour Patient', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 2, '2015-09-25 07:49:22'),
(4, 'Tour_Sang', 0, '', 'Tour Sang', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 3, '2015-09-25 07:49:22'),
(5, 'Carouge_Sang', 0, '', 'Carouge Sang', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 4, '2015-09-25 07:49:22'),
(6, 'BENOIST_FILLE', 0, '', 'BENOIST St', 'BENOIST', 'St', NULL, NULL, 'C', '1231', 'Conches', 'Suisse', NULL, NULL, NULL, 200, '2015-09-25 07:49:22'),
(7, 'BERNASCONI', 0, '', 'BERNASCONI Alexandre', 'BERNASCONI', 'Alexandre', NULL, NULL, 'Chemin des Cr', '1218', 'le Grand-Saconnex', 'Suisse', NULL, NULL, NULL, 200, '2015-09-25 07:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `body` text,
  `input_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `photo_id` (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `currency` varchar(3) DEFAULT NULL,
  `currency_country` varchar(50) DEFAULT NULL,
  `rate` decimal(10,5) DEFAULT NULL,
  `date` date NOT NULL,
  `rank` int(11) unsigned DEFAULT '1',
  `comment` text,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `currency`, `currency_country`, `rate`, `date`, `rank`, `comment`, `input_date`) VALUES
(1, 'CHF', 'CH', '1.00000', '2016-04-03', 1, '<p><strong>enjoy This contry is great</strong></p>', '2016-04-02 21:38:56'),
(2, 'USD', 'US', '0.98000', '2016-04-19', 2, '', '2016-04-19 19:23:14'),
(3, 'EUR', 'EU', '1.18000', '2016-04-30', 3, NULL, '2016-04-30 21:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--

DROP TABLE IF EXISTS `failed_logins`;
CREATE TABLE IF NOT EXISTS `failed_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_attempt` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `host` varchar(80) DEFAULT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `username`, `login_attempt`, `last_time`, `ip`, `host`, `input_date`) VALUES
(1, 'kamy', 0, 1468094328, '83.79.96.187', '', '2015-10-13 05:28:31'),
(2, 'EMAIL', 1, 1454839331, '83.78.95.42', '', '2016-02-07 09:02:11'),
(3, '''''=''''or''', 1, 1458077628, '212.126.103.3', '', '2016-03-15 20:33:48'),
(4, 'ADMIN'' OR 1=1#', 1, 1459099024, '160.176.142.249', '', '2016-03-27 15:17:04'),
(5, '''or''''=''', 2, 1467334541, '105.155.153.189', '', '2016-03-27 15:17:56'),
(6, 'gmail', 0, 1468094383, '83.79.96.187', '', '2016-04-02 19:30:14'),
(7, 'admin', 0, 1467334552, '105.155.153.189', '', '2016-04-02 19:31:02'),
(8, 'test', 5, 1468093435, '83.79.96.187', '', '2016-04-10 13:20:54'),
(12, '''=''''or''', 3, 1467969462, '41.142.219.115', '', '2016-05-04 12:10:32'),
(13, '''or 1=1 limit 1-- -+', 1, 1462965674, '136.243.186.70', '', '2016-05-11 11:21:14'),
(14, 'bralia', 0, 1464555291, '62.203.13.182', '', '2016-05-26 19:03:10'),
(15, 'captainbraliaji', 0, 1468082646, '80.12.35.16', '', '2016-05-26 19:06:28'),
(16, 'captainbralia', 1, 1464427879, '90.3.91.103', '', '2016-05-28 09:31:19'),
(17, 'moshe', 0, 1464487559, '62.203.13.182', '', '2016-05-29 02:05:59'),
(18, '''='' ''OR''', 4, 1466395265, '105.191.103.230', '', '2016-06-09 17:02:58'),
(19, ''' OR ''X''=''X', 1, 1465909004, '164.39.204.6', '', '2016-06-14 12:56:44'),
(20, '''or'' ''=''', 1, 1466748689, '105.66.10.254', '', '2016-06-24 06:11:29'),
(21, 'massoud', 0, 1467417907, '83.79.96.187', '', '2016-07-01 23:56:30'),
(22, 'k', 1, 1468093459, '83.79.96.187', '', '2016-07-09 19:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_actual`
--

DROP TABLE IF EXISTS `invoice_actual`;
CREATE TABLE IF NOT EXISTS `invoice_actual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `company_unit_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `category_id` int(11) NOT NULL,
  `category` varchar(40) DEFAULT NULL,
  `ref_upload` varchar(70) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `invoiced` tinyint(1) DEFAULT '0',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `invoice_actual`
--

INSERT INTO `invoice_actual` (`id`, `project_id`, `project_code`, `start_date`, `end_date`, `quantity`, `unit_price`, `company_unit_price`, `category_id`, `category`, `ref_upload`, `invoice_id`, `invoiced`, `comment`) VALUES
(4, 4, 'RAJAH', '2015-10-07', '2015-10-13', 1, '62.00', '99.00', 5, 'Post-production../.. Premises', '', 0, 0, ''),
(7, 5, 'KAMY', '2015-01-01', '2015-10-30', 6, '0.00', '0.00', 6, 'Pre-production../.. Insurance', '', 0, 0, ''),
(8, 5, 'KAMY', '2015-10-19', '2015-10-19', 1, '0.00', '0.00', 7, 'Pre-production../.. Crew', '', 0, 0, ''),
(9, 5, 'KAMY', '2015-10-19', '2015-10-19', 8, '450.00', '888.00', 7, 'Pre-production../.. Crew', '', 0, 0, ''),
(10, 5, 'KAMY', '2015-11-11', '2015-11-11', 1, '300.00', '200.00', 5, 'Post-production../.. Premises', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_estimate`
--

DROP TABLE IF EXISTS `invoice_estimate`;
CREATE TABLE IF NOT EXISTS `invoice_estimate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estimate_no` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category` varchar(40) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoiced` tinyint(1) DEFAULT '0',
  `ref_upload` varchar(70) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_send`
--

DROP TABLE IF EXISTS `invoice_send`;
CREATE TABLE IF NOT EXISTS `invoice_send` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `invoice_date` date NOT NULL,
  `gross_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `vat` decimal(10,2) NOT NULL DEFAULT '0.00',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `canceled` enum('Yes','No') NOT NULL DEFAULT 'No',
  `status` enum('prepared','send','paid','partially_paid') DEFAULT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

--
-- Dumping data for table `invoice_send`
--

INSERT INTO `invoice_send` (`id`, `project_id`, `project_code`, `invoice_date`, `gross_amount`, `vat`, `amount`, `canceled`, `status`, `payment_date`) VALUES
(1001, 5, 'KAMY', '2016-04-04', '1.00', '8.00', '999.00', 'No', 'prepared', '2016-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `web_address` text,
  `description` text,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `category` varchar(50) NOT NULL DEFAULT 'Others',
  `sub_category_1` varchar(50) DEFAULT NULL,
  `sub_category_2` varchar(50) DEFAULT NULL,
  `privacy` tinyint(1) DEFAULT '0',
  `rank` int(11) DEFAULT '0',
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `web_address`, `description`, `category_id`, `category`, `sub_category_1`, `sub_category_2`, `privacy`, `rank`, `username`) VALUES
(4, 'Facebook', 'https://www.facebook.com/', '', 1, 'Others', '', '', 0, 127, 'kamy'),
(5, 'Lotto Suisse', 'https://jeux.loro.ch/FR/1/homepage?cid=ppc/fr/google/Loro/Adwords//tous/juin2012#action=play', '', 1, 'Others', '', '', 0, 127, 'kamy'),
(6, 'Linkedin', 'https://www.linkedin.com/nhome/', '', 1, 'Others', '', '', 0, 127, 'kamy'),
(7, 'Introducing-PHP', 'http://www.lynda.com/PHP-tutorials/Introducing-PHP/123485-2.html', '', 2, 'PHP', '', '', 0, 1, 'kamy'),
(8, 'PHP-MySQL-Essential-Training Kevin Skoglund', 'http://www.lynda.com/MySQL-tutorials/PHP-MySQL-Essential-Training/119003-2.html', '', 2, 'PHP', '', '', 0, 2, 'kamy'),
(9, 'php-with-OOP-beyond-the-basics Kevin Skoglund', 'http://www.lynda.com/PHP-tutorials/php-with-OOP-beyond-the-basics/653-2.html', '', 2, 'PHP', '', '', 0, 3, 'kamy'),
(10, 'PHP Date Time', 'http://www.lynda.com/PHP-tutorials/Setting-date-time-independently/188214/375112-4.html', '', 2, 'PHP', '', '', 0, 5, 'kamy'),
(11, 'Exporting Data to Files with PHP', 'http://www.lynda.com/PHP-tutorials/Exporting-Data-Files-PHP/158375-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 2, 'PHP', '', '', 0, 5, 'kamy'),
(12, 'Uploading Files Securely with PHP', 'http://www.lynda.com/PHP-tutorials/Uploading-Files-Securely-PHP/158374-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 2, 'PHP', '', '', 0, 127, 'kamy'),
(13, 'Up and Running with PHP SimpleXML David Powers', 'http://www.lynda.com/PHP-tutorials/Up-Running-PHP-SimpleXML/370013-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3aPHP%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 2, 'PHP', '', '', 0, 7, 'kamy'),
(14, 'Creating Secure PHP Websites Kevin Skoglund', 'http://www.lynda.com/PHP-tutorials/Creating-Secure-PHP-Websites/133321-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3aPHP%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2', '', 2, 'PHP', '', '', 0, 6, 'kamy'),
(15, 'Up and Running - Standard PHP Library David Powers', 'http://www.lynda.com/PHP-tutorials/Up-Running-Standard-PHP-Library/175038-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3aPHP%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2', '', 2, 'PHP', '', '', 0, 10, 'kamy'),
(16, 'Accessing Databases with Object-Oriented PHP', 'http://www.lynda.com/PHP-tutorials/Accessing-Databases-Object-Oriented-PHP/169106-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3aPHP%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2', '', 2, 'PHP', '', '', 0, 4, 'kamy'),
(17, 'Object-Oriented Programming with PHP', 'http://www.lynda.com/PHP-tutorials/Object-Oriented-Programming-PHP/107953-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3aPHP%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2', 'John Peck  \nShows how to integrate the principles of object-oriented programming into the build of a PHP-driven web page or application.', 2, 'PHP', '', '', 0, 4, 'kamy'),
(18, 'Up-Running-MySQL-Development', 'http://www.lynda.com/MySQL-tutorials/Up-Running-MySQL-Development/158373-2.html', '', 3, 'SQL', '', '', 0, 1, 'kamy'),
(19, 'MySQL-Essential-Training', 'http://www.lynda.com/MySQL-tutorials/MySQL-Essential-Training/139986-2.html', '', 3, 'SQL', '', '', 0, 1, 'kamy'),
(20, 'Lynda Search PHP', 'http://www.lynda.com/search?q=php', 'John Peck  \nShows how to integrate the principles of object-oriented programming into the build of a PHP-driven web page or application.', 2, 'PHP', '', '', 0, 127, 'kamy'),
(21, 'Up-Running-phpMyAdmin', 'http://www.lynda.com/MySQL-tutorials/Up-Running-phpMyAdmin/418255-2.html', '', 2, 'PHP', '', '', 0, 127, ''),
(22, 'JQuery-Essential', 'http://www.lynda.com/jQuery-tutorials/jQuery-Essential-Training/183382-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'Javascript', '', '', 0, 1, ''),
(23, 'Jquery Mobile Esstl', 'http://www.lynda.com/jQuery-Mobile-tutorials/jQuery-Mobile-Essential-Training/167067-2.html', '', 4, 'JQuery', '', '', 0, 2, 'kamy'),
(24, 'Lynda search jquery', 'http://www.lynda.com/search?q=jquery', '', 4, 'JQuery', '', '', 0, 3, 'kamy'),
(25, 'Lynda search jquery mobile', 'http://www.lynda.com/search?q=jquery+mobile', '', 4, 'JQuery', '', '', 0, 4, 'kamy'),
(26, 'Ajax Lynda', 'http://www.lynda.com/Ajax-tutorials/Updating-information-without-reloading-page-using-AJAX/150163/155367-4.html', '', 4, 'JQuery', '', '', 0, 4, 'kamy'),
(27, 'HTML-Essential-Training', 'http://www.lynda.com/HTML-tutorials/HTML-Essential-Training-2012/99326-2.html', '', 5, 'HTML', '', '', 0, 1, 'kamy'),
(28, 'Creating a Responsive Web Design', 'http://www.lynda.com/CSS-tutorials/Accessing-code-HTML-CSS-Dreamweaver/110716/114021-4.html?autoplay=true', '', 5, 'HTML', '', '', 0, 2, 'kamy'),
(29, 'Responsive-Design-Fundamentals', 'Responsive-Design-Fundamentals', '', 5, 'HTML', '', '', 0, 3, 'kamy'),
(30, 'Bootstrap Site', 'http://getbootstrap.com/', '', 6, 'Bootstrap', '', '', 0, 1, 'kamy'),
(31, 'bootstrap search Lynda', 'http://www.lynda.com/search?q=bootstrap', '', 6, 'Bootstrap', '', '', 0, 2, 'kamy'),
(32, 'Bootstrap-Lynda Basic', 'http://www.lynda.com/Bootstrap-tutorials/Using-exercise-files/133339/151271-4.html?autoplay=true', '', 6, 'Bootstrap', '', '', 0, 3, 'kamy'),
(33, 'Bootstrap Lynda interactive', 'http://www.lynda.com/Bootstrap-tutorials/Planning-thumbnail-gallery/161098/176516-4.html', '', 6, 'Bootstrap', '', '', 0, 3, 'kamy'),
(34, 'Google map geolocalisation', 'http://www.sitepoint.com/find-a-route-using-the-geolocation-and-the-google-maps-api/', '', 6, 'Bootstrap', '', '', 0, 4, 'kamy'),
(35, 'Bootstrap Layouts: Responsive Single-Page Design', 'http://www.lynda.com/Bootstrap-tutorials/Bootstrap-Layouts-Responsive-Single-Page-Design/186538-2.html', '', 6, 'Bootstrap', '', '', 0, 5, 'kamy'),
(36, 'lynda.search Bootstrap', 'http://www.lynda.com/search?q=Bootstrap', '', 6, 'Bootstrap', '', '', 0, 6, 'kamy'),
(38, 'Bootstrap Site', 'http://getbootstrap.com/', '', 6, 'Bootstrap', '', '', 0, 1, ''),
(39, 'Advanced Topics in MySQL and MariaDB', 'http://www.lynda.com/MariaDB-tutorials/Advanced-Topics-MySQL-MariaDB/175635-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:mysql%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'Learn how to perform a variety of advanced administration tasks in both MariaDB and MySQL, two powerful database solutions that work in slightly different ways.', 3, 'SQL', '', '', 0, 3, 'kamy'),
(40, 'Search Lynda mysql', 'http://www.lynda.com/search?q=mysql', '', 3, 'SQL', '', '', 0, 4, 'kamy'),
(41, 'Jquery UI', 'http://www.lynda.com/jQuery-tutorials/Up-Running-jQuery-UI/186963-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'JQuery', '', '', 0, 6, 'kamy'),
(42, 'Jquery AJAX', 'http://www.lynda.com/jQuery-tutorials/jQuery-Data-AJAX/150163-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'JQuery', '', '', 0, 7, 'kamy'),
(43, 'Jquery web designers', 'http://www.lynda.com/jQuery-tutorials/jQuery-Web-Designers/144204-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'JQuery', '', '', 0, 7, 'kamy'),
(44, 'jQuery: Creating Plugins', 'http://www.lynda.com/jQuery-tutorials/jQuery-Creating-Plugins/364350-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'JQuery', '', '', 0, 7, 'kamy'),
(45, 'Managing PHP Persistent Sessions David Powers', 'http://www.lynda.com/PHP-tutorials/Managing-PHP-Persistent-Sessions/382572-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'Learn how to store persistent PHP session data in a SQL server and create an auto-login system that recognizes returning users.', 2, 'PHP', '', '', 0, 10, 'kamy'),
(46, 'Debugging PHP: Advanced Techniques with Jon Peck', 'http://www.lynda.com/PHP-tutorials/Debugging-PHP-Advanced-Techniques/112414-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'Demonstrates how to leverage PHP''s built-in tools, as well as the Xdebug and Firebug extensions and FirePHP library to improve the quality of your code and reduce troubleshooting overhead.', 2, 'PHP', '', '', 0, 10, 'kamy'),
(47, 'Create an Interactive Map with jQuery with Chris C', 'http://www.lynda.com/jQuery-1-5-tutorials/Create-an-Interactive-Map-with-jQuery/87636-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:jquery%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'JQuery', '', '', 0, 10, 'kamy'),
(49, 'How to handle handicap', 'https://www.facebook.com/spinal.cord.injuries/videos/1169089156449992/?fref=nf', 'An interesting take on how to act around people with disabilities.', 9, 'Handicap', '', '', 0, 1, 'kamy'),
(50, 'Up and Running with Ember.js with Kai Gittens', 'http://www.lynda.com/Emberjs-tutorials/Review-routes-Ember-Inspector/178116/191826-4.html?autoplay=true', 'Ember.js is a JavaScript framework for creating robust, complex web apps while writing very little code. Ember''s attraction lies in its built-in template library and rich feature set, which seems to grow almost every day. Understanding the core concepts behind Ember will help you use it now—no matter what enhancements are added in the future. So join Kai Gittens as he introduces Ember''s routers, templates, and models, and shows how to use templates to create simple pages and dynamically load content using components and Ember Data. Let our training light the spark of learning, and get up and running with Ember today.\r\nTopics include:\r\nInstalling Ember Inspector\r\nReviewing routes with Ember Inspector\r\nLoading templates with routes\r\nCreating links with the link-to helper\r\nAdding component templates\r\nLoading model data\r\nCustomizing components\r\nBuilding nested routes and route objects\r\nLoading data with object and array controllers\r\nCreating interfaces', 4, 'Javascript', '', '', 0, 100, ''),
(51, 'Texte savoureux, vu sur la page du groupe Yiddish ', 'Texte savoureux, vu sur la page du groupe Yiddish pour les Nuls! :', 'Texte savoureux, vu sur la page du groupe Yiddish pour les Nuls! :\n\n"Israel c''est le seul pays" d''Ephraim Kishon :\n\nC''est le seul pays où les chômeurs font la grève\n\n\nC''est le seul pays qui a deux ministres du trésor et pas un rond.\n\nC''est le seul pays au monde où le gouvernement finance l''éducation sectaire et ou l''éducation gratuite est financée par les parents d''élèves.\n\nC''est le seul pays où chaque mère a le numéro du portable du sergent de son fils à l''armée.\n\nC''est le seul pays qui importe de l''eau par bateaux citernes au moment où le pays est inondé par les pluies.\n\nC''est le seul pays où la chanson la plus populaire dans les clubs de musique transe s''intitule : « fleurs dans les fusils et filles dans les chars ».\n\nC''est le seul pays qui a envoyé un satellite de communications dans l''espace, où on ne vous laisse jamais terminer une phrase.\n\nC''est le seul pays où sont déjà tombées des fusées d''Irak, des katyouchas du Liban, des Qassam de Gaza et où un appartement de trois pièces coûte plus cher qu''à Paris.\n\nC''est le seul pays où on demande une star porno : qu''en pense ta mère ?\n\nC''est le seul pays où on va dîner chez ses parents le vendredi et on occupe le même siège qu''à l''âge de 5 ans.\n\nC''est le seul pays où un repas Israélien est composé d''une salade arabe, d''une pita irakienne, d''un kebab roumain et d''une crème bavaroise.\n\nC''est le seul pays où le gars avec la chemise pleine de taches est le ministre et le gars au complet gris, son chauffeur.\n\nC''est le seul pays où des musulmans vendent des articles religieux aux chrétiens en échange de billets portant l''effigie du Rambam.\n\nC''est le seul pays où les jeunes quittent la maison à l''âge de 18 ans pour revenir y habiter à l''âge de 24.\n\nC''est le seul pays où aucune femme n''est en bons termes avec sa mère mais où elles se parlent néanmoins trois fois par jour.\n\nC''est le seul pays où on vous montre des photos des enfants alors qu''ils sont présents.\n\nC''est le seul pays où on peut connaître la situation sécuritaire selon les chansons à la radio.\n\nC''est le seul pays où les riches sont à gauche, les pauvres sont à droite et la classe moyenne paie tout.\n\nC''est le seul pays où on peut obtenir en dix minutes un logiciel pour lancer des vaisseaux spatiaux et où il faut attendre une semaine pour réparer la machine à laver.\n\nC''est le seul pays où la première fois qu''on sort avec une fille, on lui demande dans quelle unité elle a servi a l''armée, et on découvre qu''elle était parachutiste alors que vous n''aviez été que caporal à la cantine militaire.\n\nC''est le seul pays où le décalage entre le jour le plus heureux et le jour le plus triste n''est souvent que soixante secondes.\n\nC''est le seul pays où lorsque vous détestez les hommes politiques, les fonctionnaires, les taxes, la qualité du service et la situation en général, vous prouvez que vous aimez le pays et qu''en fin de compte c''est le seul pays dans lequel vous pouvez vivre."', 7, 'Israel', '', '', 0, 2, 'kamy'),
(52, 'Design Patterns in PHP with Keith Casey', 'http://www.lynda.com/PHP-tutorials/What-you-should-know-before-watching-course/186870/370504-4.html', 'Write better PHP code by following these popular (and time-tested) design patterns. Developer Keith Casey introduces 11 design patterns that will help you solve common coding challenges and make your intentions clear to future architects of your application. Keith explores use cases for:\n\nAccessing data with the active record and table data gateway patterns\nCreating objects with the factory, singleton, and mock objects patterns\nExtending code with decorator and adapter patterns\nStructuring applications with MVC and Action-Domain-Responder patterns\n\n\nEach chapter features a design pattern in a real-world coding scenario, and closes with a practice challenge to test your new skills.', 2, 'PHP', '', '', 0, 7, 'kamy'),
(53, 'Test-Driven Development with Simon Allardice', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/What-kind-testing/124398/137958-4.html', 'Prove your code is working every step of the way using a formalized test-driven development (TDD) process. TDD can be done in every modern programming environment, and for desktop, mobile, or web apps. In this course, Simon Allardice teaches you exactly how to get started with TDD: what makes a good test, why we''re more interested in failure than success, and how to measure and repeatedly run tests. \n\nThe course explores the jargon of TDD—test suites, test harness, mock and stub objects, and more—and covers how TDD is used in the most common programming languages and environments. Plus learn to create, run, and manage the tests and move to a test-first mindset.\nTopics include:\nWhat is test-driven development?\nUsing unit testing frameworks\nCreating tests\nUsing assertions\nCreating multiple test methods\nNaming unit tests and test methods\nTesting return values\nSetting up and tearing down\nIntroducing mock objects\nMeasuring code coverage', 11, 'Programming', 'Foundations of Programming', '', 0, 2, 'kamy'),
(54, 'Unit Testing with PHPUnit with Kristian Secor', 'http://www.lynda.com/PHPUnit-tutorials/Unit-Testing-PHPUnit/175019-2.html', 'Unit testing is a way to confirm proper execution of a computer program. PHPUnit provides a testing framework for PHP developers to do it right. This brief course covers everything you''ll need to get up and running with PHPUnit: where to download it, how to install it, and how to use it to unit test your code. Kristian Secor provides a high-level overview of this invaluable framework, helping you guide test-driven development at your organization.\nTopics include:\nWorking with assertions, annotations, and template methods of testing\nUsing mock and stub objects\nTesting private and protected methods\nLooking for weak spots in your testing, with code coverage\nTesting inherited projects', 2, 'PHP', '', '', 0, 100, 'kamy'),
(55, 'Fundamentals with Simon Allardice', 'http://www.lynda.com/JavaScript-tutorials/Foundations-of-Programming-Fundamentals/83603-2.html', 'This course provides the core knowledge to begin programming in any language. Simon Allardice uses JavaScript to explore the core syntax of a programming language, and shows how to write and execute your first application and understand what''s going on under the hood. The course covers creating small programs to explore conditions, loops, variables, and expressions; working with different kinds of data and seeing how they affect memory; writing modular code; and how to debug, all using different approaches to constructing software applications.\n\nFinally, the course compares how code is written in several different languages, the libraries and frameworks that have grown around them, and the reasons to choose each one.\nTopics include:\nWriting source code\nUnderstanding compiled and interpreted languages\nRequesting input\nWorking with numbers, characters, strings, and operators\nWriting conditional code\nMaking the code modular\nWriting loops\nFinding patterns in strings\nWorking with arrays and collections\nAdopting a programming style\nReading and writing to various locations\nDebugging\nManaging memory usage\nLearning about other languages', 11, 'Programming', 'Foundations of Programming', '', 0, 1, 'kamy'),
(56, 'Object-Oriented Design with Simon Allardice', 'http://www.lynda.com/Programming-tutorials/Foundations-Programming-Object-Oriented-Design/96949-2.html', 'Most modern programming languages, such as Java, C#, Ruby, and Python, are object-oriented languages, which help group individual bits of code into a complex and coherent application. However, object-orientation itself is not a language; it''s simply a set of ideas and concepts.\n\nLet Simon Allardice introduce you to the terms—words like abstraction, inheritance, polymorphism, subclass—and guide you through defining your requirements and identifying use cases for your program. The course also covers creating conceptual models of your program with design patterns, class and sequence diagrams, and unified modeling language (UML) tools, and then shows how to convert the diagrams into code.\nTopics include:\nWhy use object-oriented design (OOD)?\nPinpointing use cases, actors, and scenarios\nIdentifying class responsibilities and relationships\nCreating class diagrams\nUsing abstract classes\nWorking with inheritance\nCreating advanced UML diagrams\nUnderstanding object-oriented design principles', 11, 'Programming', 'Foundations of Programming', '', 0, 3, 'kamy'),
(57, 'Databases with Simon Allardice', 'http://www.lynda.com/Programming-tutorials/Foundations-Programming-Databases/112585-2.html', 'Discover how a database can benefit both you and your architecture, whatever the programming language, operating system, or application type you use. In this course, explore options that range from personal desktop databases to large-scale geographically distributed database servers and classic relational databases to modern document-oriented systems and data warehouses—and learn how to choose the best solution for you. Author Simon Allardice covers key terminology and concepts, such as normalization, "deadly embraces" and "dirty reads," ACID and CRUD, referential integrity, deadlocks, and rollbacks. The course also explores data modeling step by step through hands-on examples to design the best system for our data. Plus, learn to juggle the competing demands of storage, access, performance, and security—management tasks that are critical to your database''s success.\nTopics include:\nWhat is a database?\nWhy do you need a database?\nChoosing primary keys\nIdentifying columns and selecting data types\nDefining relationships: one-to-one, one-to-many, and many-to-many\nUnderstanding normalization\nCreating queries to create, insert, update, and delete data\nUnderstanding indexing and stored procedures\nExploring your database options', 11, 'Programming', 'Foundations of Programming', '', 0, 4, 'kamy'),
(58, 'Design Patterns with Elisabeth Robson and Eric Fre', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Foundations-Programming-Design-Patterns/135365-2.html', 'Design patterns are reusable solutions that solve the challenges software developers face over and over again. Rather than reinventing the wheel, learn how to make use of these proven and tested patterns that will make your software more reliable and flexible to change. This course will introduce you to design patterns and take you through seven of the most used object-oriented patterns that will make your development faster and easier. Elisabeth Robson and Eric Freeman, coauthors of Head First Design Patterns, join forces to provide an overview of each pattern and examples of the pattern in action. Featured design patterns include the strategy, observer, decorator, singleton, collection, state, and factory method patterns.\nTopics include:\nWhat are design patterns?\nEncapsulating code that varies with the strategy pattern\nSetting behavior dynamically\nImplementing the observer pattern\nCreating chaos with inheritance\nExtending behavior with composition\nDealing with multithreading and the singleton pattern\nRevising the design for a state machine\nEncapsulating iteration with the collection pattern\nEncapsulating object creation with the factory method pattern', 11, 'Programming', 'Foundations of Programming', '', 0, 5, 'kamy'),
(59, 'Data Structures with Simon Allardice', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Foundations-Programming-Data-Structures/149042-2.html', 'Once you get past simplistic computer programs with one or two variables, you''ll use a data structure to store the values—and groups of values— in your applications. While they are sometimes taken for granted in modern programming environments, a deeper understanding of data structures is vital for any programmer who wants to know what''s going on "under the hood" and understand how to defend the choices they''ve made for performance and efficiency. Simon Allardice offers that understanding to you in this Foundations of Programming course.\n\nStarting with simple ways of grouping data like arrays and structs, together you''ll explore gradually more complex data structures, like dictionaries, sets, hash tables, queues and stacks, links and linked lists, and trees and graphs. Simon keeps the lessons grounded in the real world and answers the "why" behind many data-structuring decisions: Why use a hash table? Why is a set useful? Why avoid arrays? When you''re finished with the course, you''ll have a clear understanding of data structures and understand how to use them in whatever language you''re programming in, today or 5 years from now.\nTopics include:\nWhat is a data structure?\nUsing C-style structs and arrays\nSorting and searching arrays\nWorking with singly and doubly linked lists\nUsing stacks for last-in, first-out (LIFO) structures\nUsing queues for first-in, first-out (FIFO) structures\nWorking with hash tables\nUnderstanding binary search trees (BSTs)\nLearning about graphs', 11, 'Programming', 'Foundations of Programming', '', 0, 7, 'kamy'),
(60, 'Fundamentals of Software Version Control with Mich', 'http://www.lynda.com/Version-Control-tutorials/Fundamentals-Software-Version-Control/106788-2.html', 'This course is a gateway to learning software version control (SVC), process management, and collaboration techniques. Author Michael Lehman reviews the history of version control and demonstrates the fundamental concepts: check-in/checkout, forking, merging, commits, and distribution. The choice of an SVC system is critical to effectively managing and versioning the assets in a software development project (from source code, images, and compiled binaries to installation packages), so the course also surveys the solutions available. Michael examines Git, Perforce, Subversion, Mercurial, and Microsoft Team Foundation Server (TFS) in particular, describing the appropriate use, features, benefits, and optimal group size for each one.\nTopics include:\nComparing centralized vs. distributed systems\nSaving changes and tracking history\nUsing revert or rollback\nWorking with the GUI tools\nUsing IDE and shell integration\nInstalling different systems\nCreating a repository\nTagging code\nBranching and merging code\nSelecting a software version control system that''s right for you', 11, 'Programming', 'Foundations of Programming', '', 0, 8, 'kamy'),
(61, 'Code Efficiency with Simon Allardice', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Foundations-Programming-Code-Efficiency/122461-2.html', 'Code efficiency. There are other words we can use (optimization, performance, speed), but it''s all about making existing code run faster. Whether for desktop, mobile, or web apps, in this course you''ll see how to identify pain points and measure them accurately, as well as view multiple approaches to improve the performance. Author Simon Allardice covers everything from "quick fixes" to more complex (but more accurate) algorithms.\n\nLearn to choose the right data types, understand the pitfalls of using high-level languages, and decide where to spend your time. Plus, see how the underlying memory management model may have more of an impact than you realize, and what performance issues you can expect working with databases and web services.\nTopics include:\nIdentifying problems in the code\nEmbracing constraints\nUsing code analysis tools to measure performance\nManaging memory\nManaging disk-based and network resources', 11, 'Programming', 'Foundations of Programming', '', 0, 9, 'kamy'),
(62, 'Software Quality Assurance with Aaron Dolberg', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Foundations-Programming-Software-Quality-Assurance/126119-2.html', 'tart incorporating quality into your software development process today. Author Aaron Dolberg demonstrates the different kinds of software testing (from black box to white box) and how to fit each one into your development cycle. Learn how to make sure your team is on the same page when it comes to quality by developing criteria for ranking the priority and severity of issues. Then find out how to test and report issues, and how to use a tracking system to manage the process and the results. Lastly, Aaron explains how automating some of the testing can make the QA process more efficient and objective. In the end, you''ll be able to better understand the overall health of your product, and ensure your team is meeting quality goals with every release.\nTopics include:\nHow to think about quality\nIncorporating black box, white box, and grey box testing into your process\nUnderstanding your quality goals\nRanking issues by priority and severity\nTesting core functionality\nTesting the backend\nUsing a test case management system\nInterpreting bug models\nRecording defects automatically', 11, 'Programming', 'Foundations of Programming', '', 0, 10, 'kamy'),
(63, 'Refactoring Code with Simon Allardice', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Foundations-Programming-Refactoring-Code/122457-2.html', 'ctoring is the process of taking existing code and improving it. While it makes code more readable and understandable, it also becomes much easier to add new features, build larger applications, and spot and fix bugs. In this course, staff author Simon Allardice introduces the formalized, disciplined approach to refactoring that tells you exactly what to look for in your code, and how to fix it, through a series of "code smells"—clues that let you look at a block of code and realize when there''s something wrong with it.\nTopics include:\nWhat is refactoring?\nRecognizing common code smells\nSimplifying method calls\nMaking conditions easier to read', 11, 'Programming', 'Foundations of Programming', '', 0, 11, 'kamy'),
(64, 'Insights on Software Quality Engineering with Aaro', 'http://www.lynda.com/Developer-Programming-Foundations-tutorials/Insights-Software-Quality-Engineering/142444-2.html', 'Software quality engineering plays a vital role in the development cycle, saving companies time and money and ensuring that customers have exactly the experience they expect. It''s also a lucrative and underappreciated career path. Here, software quality engineer Aaron Dolberg draws on his years of experience in quality assurance (QA) to share his personal insights and cautionary tales. Aaron discusses how to get started in QA, how it fits in at companies small and large, and how it has changed since the rise of agile workflows.', 11, 'Programming', 'Foundations of Programming', '', 0, 12, 'kamy'),
(65, 'Multidevice Prototyping with Ratchet with Chris Gr', 'http://www.lynda.com/Ratchet-tutorials/Using-exercise-files/170056/359870-4.html', 'Ratchet is a fantastic framework for prototyping mobile apps. Ratchet prototypes look and act just like native iOS and Android apps, but they''re programmed with languages familiar to almost all web designers and developers: HTML, CSS, and JavaScript. Join Chris Griffith in this course, as he shows how to configure your development environment to work with Ratchet, and build your first app prototype, from creating the initial screen and adding transitions between pages, with Push.js, to using Ratchet''s iOS and Android built-in themes, which make your app immediately look at home on either platform.\nTopics include:\nInstalling Ratchet\nSetting up a web server\nCreating your first screen\nConfiguring meta tags\nAdding content\nConnecting pages with Push.js\nAdding icons, buttons, form elements, and lists\nDefining your app theme with Ratchet', 6, 'Bootstrap', '', '', 0, 36, 'kamy'),
(66, 'CakePHP-MVC Up and Running with  with Jon Peck', 'http://www.lynda.com/CakePHP-tutorials/Introducing-MVC-development-pattern/126123/150319-4.html', 'http://www.lynda.com/CakePHP-tutorials/Introducing-MVC-development-pattern/126123/150319-4.html', 12, 'MVC Framework', '', '', 0, 100, 'kamy'),
(67, 'MVC PHP CodeIgniter  Up and Running with PHP CodeI', 'http://www.lynda.com/CodeIgniter-tutorials/Introducing-MVC-development-pattern/126122/141743-4.html', 'Speed up your development with CodeIgniter, a fast and powerful PHP web application framework. Author Jon Peck shows how to build a magazine cataloging system while describing how to use a MVC (Model-View-Controller) framework like CodeIgniter.\n\nStarting with the what and why of CodeIgniter, Jon introduces key concepts such as the MVC pattern and libraries by demonstrating how to create static pages, then storing and displaying magazine info in a database. Advanced topics like classes and helpers are explored to validate user input, upload files, and much more. By creating a complete system, you''ll have the foundation to build your own applications with CodeIgniter.\nTopics include:\nWhat is CodeIgniter?\nCreating a static page controller\nGenerating output with a view\nWhat is a model?\nSaving data with Active Records\nCreating forms\nValidating user input\nListing records in tables\nUploading images\nViewing and deleting records', 12, 'MVC Framework', '', '', 0, 37, 'kamy'),
(68, 'MVC Frameworks for Building PHP Web Applications', 'http://www.lynda.com/CakePHP-tutorials/MVC-Frameworks-Building-PHP-Web-Applications/315196-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:MVC%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'PHP developers have a choice: they can design their own architecture, essentially re-inventing the wheel, or they can use a framework. Frameworks speed up development, enhance collaboration, and help keep code organized. So why start from scratch? In this course, Drew Falkman introduces the six most popular PHP frameworks: Zend, Symfony, CodeIgniter, CakePHP, Yii, and Laravel. He''ll describe each framework''s advantages, show how to get and install the software, and then demonstrate how to get the default pages for each framework up and running, so viewers can see how the code is structured. In the final chapter, Drew compares all the frameworks and provides resources to move forward with each one. Your framework choice is one of the biggest factors affecting the success of your project; start here to get the information you need to make the right decision.\nTopics include:\nWhy use a framework?\nIntroducing MVC-framework concepts\nExamining each framework''s components\nSetting up the software\nWalking through sample apps built in each framework\nComparing frameworks', 12, 'MVC Framework', 'MVC', '', 0, 4, 'kamy'),
(69, 'Laravel MVC framework Essential', 'http://www.lynda.com/Laravel-tutorials/Up-Running-Laravel/166513-2.html', 'Join Joseph Lowery as he introduces Laravel, a standout PHP framework that helps developers build standout applications. After installing Laravel, Joseph shows how to handle routing requests, filter routes, and apply controllers. Then he covers outputting code and working with Laravel''s advanced templating engine, Blade. Next, you''ll find out how to integrate a functional database with Schema Builder, query data with Eloquent ORM, and keep your schema up to date with migrations. All of these tutorials culminate in the final chapters, where you''ll learn how to build your first app and deploy it on the web. Joe issues hands-on practice challenges along the way to help you test your knowledge.\n\nNeed a quick dive into Laravel? Check out this short primer, Up and Running with Laravel.\nTopics include:\nInstalling Laravel and Composer\nRouting requests\nFiltering routes\nIncorporating advanced controllers\nCreating a basic Blade template\nDeveloping a layout with child pages and forms\nIntegrating a database\nCreating tables via migrations\nOutputting data\nBuilding a Laravel app\nAuthenticating users\nDeploying Laravel code', 12, 'MVC Framework', 'MVC', '', 0, 30, 'kamy'),
(70, 'Ruby on Rails 4 Essential Training with Kevin Skog', 'http://www.lynda.com/Ruby-Rails-tutorials/Ruby-Rails-4-Essential-Training/139989-2.html', 'Join Kevin Skoglund as he shows how to create full-featured, object-oriented web applications with the latest version of the popular, open-source Ruby on Rails framework. This course explores each part of the framework, best practices, and real-world development techniques. Plus, get hands-on experience by building a complete content management system with dynamic, database-driven content. Kevin teaches how to design an application; route browser requests to return dynamic page content; structure and interact with databases using object-oriented programming; create, update, and delete records; and implement user authentication. Previous experience with Ruby is recommended, but not required.\r\nTopics include:\r\nWhy use Ruby on Rails?\r\nInstalling Ruby on Rails on Mac and Windows\r\nRendering templates and redirecting requests\r\nGenerating and running database migrations\r\nCreating, updating, and deleting records\r\nUnderstanding association types\r\nUsing layouts, partials, and view helpers\r\nIncorporating assets using asset pipeline\r\nValidating form data\r\nAuthenticating users and managing user access\r\nArchitecting RESTful applications\r\nDebugging and error handing', 13, 'Other Programing', '', '', 0, 1, ''),
(71, 'RSpec Testing Framework with Ruby with Kevin Skogl', 'http://www.lynda.com/Ruby-tutorials/RSpec-Testing-Framework-Ruby/183884-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:ruby%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'Learn how to use RSpec, the Ruby testing framework that can help developers be more productive, write better code, and reduce bugs during development. Kevin Skoglund explains the basic syntax of RSpec and then dives straight into writing and running test examples. He shows how to use a variety of matchers to test for expected conditions, provides techniques for testing efficiently, and demonstrates how test doubles can stand in for objects and methods. He also explains the additional RSpec features available for Ruby on Rails, and walks through a step-by-step example of test-driven development.\r\nTopics include:\r\nInstalling and configuring RSpec\r\nWriting and running examples\r\nDefining expectations using matchers\r\nUsing helper methods, before/after hooks, and shared examples\r\nCreating test doubles using mocks and stubs\r\nTesting Ruby on Rails with RSpec\r\nPutting test-driven development into practice', 13, 'Other Programing', '', '', 0, 2, ''),
(72, 'CSS with LESS and Sass with Joe Marini', 'http://www.lynda.com/CSS-tutorials/CSS-LESS-SASS/107921-2.html', 'Ever find yourself wishing that CSS had features like variables, functions, or reusable classes? Look no further. LESS and Sass are CSS style sheet tools called preprocessors that add these features and more, simplifying the creation of complex CSS styles. In this course, author Joe Marini introduces the LESS and Sass tools in a two-part manner.\n\nThe first section focuses on LESS (Leaner CSS) and how it can be used on both the client and the server. The lessons show how to work with variables, mixins, nested rules, and other features to easily create maintainable CSS. \n\nThe second section introduces Sass (Syntactically awesome stylesheets), which contains many of the same features as LESS, along with a few new ones. Joe also compares and contrasts the two tools, and explains how your platform and needs may influence which tool you choose.\nTopics include:\nWhat are LESS and Sass?\nUsing variables in your CSS\nWorking with reusable and parameterized mixins\nImplementing nested rules\nCombining CSS rules with operations\nUsing the built-in functions in LESS and Sass\nControlling the CSS output formatting\nImporting external files\nSubject:\nWeb', 6, 'Bootstrap', '', '', 0, 6, 'kamy'),
(73, 'Customizing Bootstrap 3 with LESS with Jen Kramer', 'http://www.lynda.com/Bootstrap-tutorials/Customizing-Bootstrap-3-LESS/161086-2.html', 'Do more with LESS in Bootstrap. In this course, Jen Kramer shows you how to customize the look and feel of your Bootstrap site with LESS CSS, as well as LESS mixins and Bootstap''s own customization screens. You''ll learn how to configure Prepros, a LESS compiler; work within the LESS file structure; and start modifying fonts, color, spacing, and more with the variables.less file. Then LESS''s mixins will allow you to make advanced customizations like custom buttons and tab styles. Just press Play to start learning.\nTopics include:\nSetting up your working environment for Bootstrap and LESS\nUnderstanding the LESS file structure\nCreating and manipulating LESS variables\nWorking with LESS mixins\nCreating custom styles using mixins and variables', 6, 'Bootstrap', '', '', 0, 7, 'kamy'),
(74, 'Bootstrap 3: Advanced Web Development with Ray Vil', 'http://www.lynda.com/Bootstrap-tutorials/Bootstrap-3-Advanced-Web-Development/124079-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:bootstrap%2Badvanced%2Bweb%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', 'Generate your own interactive website from scratch with Bootstrap, the mobile-friendly framework from Twitter, in this start-to-finish course with developer and author Ray Villalobos. First, you''ll plan and prototype the interface with MindMaps and Balsamiq Mockups. Next, download Bootstrap and dive into organizing your site structure with its scaffolding feature—adding PHP includes to break your code into reusable modules and building in the core navigation. Ray then shows you how to build interactive carousels, modal features, and forms, and control these features with JavaScript. Finally, learn to style it all with LESS and prepare to publish the results online.\nTopics include:\nPrototyping the site\nWorking with a local web server\nCreating a baseline template with Git\nScaffolding the main columns\nMaking the site modular with PHP includes\nAdding basic navigation\nAdding a carousel\nWorking with buttons\nCreating and activating tabs\nAdding page and structure LESS styles', 6, 'Bootstrap', '', '', 0, 3, 'kamy'),
(75, 'Laravel 4 Essential Training with Joseph Lowery', 'http://www.lynda.com/Laravel-tutorials/Laravel-4-Essential-Training/181242-2.html', 'oin Joseph Lowery as he introduces Laravel, a standout PHP framework that helps developers build standout applications. After installing Laravel, Joseph shows how to handle routing requests, filter routes, and apply controllers. Then he covers outputting code and working with Laravel''s advanced templating engine, Blade. Next, you''ll find out how to integrate a functional database with Schema Builder, query data with Eloquent ORM, and keep your schema up to date with migrations. All of these tutorials culminate in the final chapters, where you''ll learn how to build your first app and deploy it on the web. Joe issues hands-on practice challenges along the way to help you test your knowledge.\n\nNeed a quick dive into Laravel? Check out this short primer, Up and Running with Laravel.\nTopics include:\nInstalling Laravel and Composer\nRouting requests\nFiltering routes\nIncorporating advanced controllers\nCreating a basic Blade template\nDeveloping a layout with child pages and forms\nIntegrating a database\nCreating tables via migrations\nOutputting data\nBuilding a Laravel app\nAuthenticating users\nDeploying Laravel code', 12, 'MVC Framework', '', '', 0, 5, 'kamy'),
(76, 'Foundations of Programming: Web Security with Kevi', 'http://www.lynda.com/Developer-Web-Development-tutorials/Foundations-Programming-Web-Security/133330-2.html', 'Learn about the most important security concerns when developing websites, and what you can do to keep your servers, software, and data safe from harm. Instructor Kevin Skoglund explains what motivates hackers and their most common methods of attacks, and then details the techniques and mindset needed to craft solutions for these web security challenges. Learn the eight fundamental principles that underlie all security efforts, the importance of filtering input and controlling output, and smart strategies for encryption and user authentication. Kevin also covers special considerations when it comes to credit cards, regular expressions, source code managers, and databases.\n\nThis course is great for developers who want to secure their client''s websites, and for anyone else who wants to learn more about web security.\nTopics include:\nWhy security matters\nWhat is a hacker?\nHow to write a security policy\nCross-site scripting (XSS)\nCross-site request forgery (CSRF)\nSQL injection\nSession hijacking and fixation\nPasswords and encryption\nSecure credit card payments', 11, 'Programming', '', '', 0, 1, 'kamy'),
(77, 'Kevin-Skoglund Lynda', 'http://www.lynda.com/Kevin-Skoglund/104-1.html', 'Kevin Skoglund is the founder of Nova Fabrica, a web development agency specialized in delivering custom, scalable solutions using Ruby on Rails, PHP, SQL, and related technologies. Nova Fabrica clients include An Event Apart, Atlas Carpet Mills, Consulate Film, Gregorius|Pineo, Maharam, Oakley, and The Bold Italic. Kevin is a lynda.com author with over 15 years of teaching and web development experience.', 1, 'Others', '', '', 0, 5, 'kamy'),
(78, 'Git Essential Training with Kevin Skoglund', 'http://www.lynda.com/Git-tutorials/Understanding-version-control/100222/111248-4.html', '', 13, 'Other Programing', '', '', 0, 1, ''),
(79, 'Amazing story of how Bulgaria''s Jews were saved in', 'http://edition.cnn.com/videos/world/2015/07/24/intv-amanpour-bulgaria-king-a.cnn/video/playlists/amanpour/', '', 8, 'Antisémitisme', '', '', 0, 5, 'kamy'),
(80, 'Practical Apache Web Server Administration with Jo', 'http://www.lynda.com/Apache-tutorials/Practical-Apache-Web-Server-Administration/164983-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:apache%2Bserver%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 13, 'Other Programing', '', '', 0, 1, ''),
(81, '7 Things to Consider Before Choosing Sides in the', 'http://www.huffingtonpost.com/ali-a-rizvi/picking-a-side-in-israel-palestine_b_5602701.html', '', 7, 'Israel', 'Gaza', '', 0, 1, ''),
(82, 'Database Fundamentals: Creating and Manipulating D', 'http://www.lynda.com/SQL-Server-tutorials/Database-Fundamentals-Creating-Manipulating-Data/385697-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(83, 'Migrating Access Databases to SQL Server with Adam', 'http://www.lynda.com/Access-tutorials/Migrating-Access-Databases-SQL-Server/397389-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(84, 'Installing and Administering Microsoft SQL Server ', 'http://www.lynda.com/SQL-Server-tutorials/Installing-Administering-Microsoft-SQL-Server-2014/383046-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(85, 'Database Fundamentals: Core Concepts with Adam Wil', 'http://www.lynda.com/SQL-Server-tutorials/Database-Fundamentals-Core-Concepts/385693-2.html', '', 14, 'SQLServer', '', '', 0, 0, ''),
(86, 'SQL Server 2014 Essential Training with Martin Gui', 'http://www.lynda.com/SQL-Server-tutorials/SQL-Server-2014-Essential-Training/363873-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(87, 'Implementing a Data Warehouse with Microsoft SQL S', 'http://www.lynda.com/SQL-Server-tutorials/Implementing-Data-Warehouse-Microsoft-SQL-Server-2012/156150-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(88, 'Amazon.fr', 'http://www.amazon.fr/', '', 1, 'Others', '', '', 0, 9, ''),
(89, 'lotto', 'https://jeux.loro.ch/FR/1/homepage?cid=sis/fr/Brand/Nav///tous/juin2015#action=homepage', '', 1, 'Others', '', '', 0, 9, ''),
(90, 'icorner', 'https://www.login.icorner.ch/public/Login1.html', '', 1, 'Others', '', '', 0, 9, ''),
(91, 'Mufti', 'https://vimeo.com/14203664', '', 8, 'Antisémitisme', '', '', 0, 1, ''),
(92, 'origines du judaïsme - C''est pas sorcier', 'http://education.francetv.fr/antiquite/sixieme/video/les-origines-du-judaisme-c-est-pas-sorcier', '', 7, 'Israel', '', '', 0, 1, ''),
(93, 'Malek Boutih, le Ps et le conflit Israël / Gaza', 'https://www.dailymotion.com/video/x822pf_malek-boutih-le-ps-et-le-conflit-is_news', '', 7, 'Israel', '', '', 0, 1, ''),
(94, 'ASP.NET Essential Training with David Gassner', 'http://www.lynda.com/ASP-NET-tutorials/ASP-NET-Essential-Training/784-2.html', '', 14, 'SQLServer', '', '', 0, 1, ''),
(95, 'www.asp.net/', 'http://www.asp.net/', '', 14, 'SQLServer', '', '', 0, 7, ''),
(96, 'Up and Running with ASP.NET 5 with Jess Chadwick', 'http://www.lynda.com/ASP-NET-tutorials/Up-Running-ASP-NET-5/368051-2.html', 'ASP.NET 5, Microsoft''s latest web development framework, includes an optimized developer experience, better performing runtime, and cross-platform support for Windows, Mac, and Linux. With all this change, many developers find they could use a refresher. In this course, Jess Chadwick introduces the basics to get you up and running with ASP.NET 5, and creating and deploying your own professional quality applications. He explores setup and installation, working with the ASP.NET MVC 6 framework, and the techniques you need to manage data, reuse code, construct web APIs, and secure your new applications. After you''ve built your application, Jess will show you how to deploy it to both IIS server and Microsoft Azure.\r\nTopics include:\r\nUnderstanding ASP.NET 5''s new request processing pipeline\r\nDownloading client-side libraries using Grunt and Bower in Visual Studio\r\nAdding ASP.NET MVC 6 to your application\r\nHandling web requests with controllers\r\nRendering dynamic views with Razor markup\r\nUsing Entity Framework to write and read data to a database\r\nUsing TagHelpers to create simple dynamic HTML forms\r\nRegistering and authenticating users with Identity services\r\nDynamically update portions on the server using partial rendering\r\nUsing dynamic routing logic to customize URLs\r\nExposing data with web APIs\r\nLeveraging custom configuration and logging\r\nIncreasing application maintainability with dependency injection\r\nSubject:\r\nDeveloper\r\nSoftware:\r\nASP.NET\r\nAuthor:\r\nJess Chadwick', 14, 'SQLServer', '', '', 0, 9, '');
INSERT INTO `links` (`id`, `name`, `web_address`, `description`, `category_id`, `category`, `sub_category_1`, `sub_category_2`, `privacy`, `rank`, `username`) VALUES
(97, 'From: ASP.NET MVC 5 Essential Training with Michae', 'http://www.lynda.com/ASP-NET-tutorials/What-you-should-know-before-watching-course/170334/191097-4.html', 'ASP.NET MVC gives you a potent, patterns-based way to build dynamic websites. MVC 5 includes features that enable rapid, test-driven development—and it''s a version every .NET developer needs to know to meet the latest web standards. Join Michael Sullivan for an in-depth look at the MVC 5 framework. He demonstrates how a typical MVC application is structured, and shows how to work with views, models, and data, including developing database objects with the Entity Framework. Michael also explores how to secure applications with the ASP.NET Identity system, create and conduct unit tests, use JavaScript libraries to communicate with controllers and pass data to client-side scripts, and deploy to cloud-based platforms like Azure and AppHarbor. Two hands-on practice challenges allow you to test what you''ve learned along the way.\r\nTopics include:\r\nExploring ASP.NET routing\r\nApplying action selectors\r\nWorking with layouts\r\nEmploying HTML helpers\r\nDisplaying and validating model properties\r\nGenerating database objects with Entity Framework\r\nAdding transactions\r\nAuthenticating users\r\nUnit testing\r\nPerforming partial page updates with Ajax and jQuery\r\nDeploying ASP.NET MVC applications', 14, 'SQLServer', '', '', 0, 10, ''),
(98, 'C#', 'http://www.lynda.com/C-tutorials/Up-Running-C/164452-2.html', '# is the language at the heart of many Windows applications, including Windows Phone and Windows Store apps. And if you have a programming background, you can get up and running with C# in as little as three hours using this course. Author Gerry O''Brien introduces C# and the Visual Studio IDE; the core language elements such as data types, variables, constants, functions, and loops; and object-oriented programming with classes and namespaces. Plus, learn how to handle exceptions with the try-catch-finally mechanism and manage memory resources. Then get a brief tour of two fully functional Windows Phone and Windows Store apps to see what the final results look like. There are also five challenge videos that allow you to test your C# prowess, and five matching videos where Gerry explains the correct solutions.\r\nTopics include:\r\nInstalling C#\r\nWorking with loops\r\nControlling program flow\r\nUsing variables\r\nBuilding functions\r\nCreating and instantiating classes\r\nCatching errors\r\nManaging resources with the garbage collector\r\nBuilding collections\r\nSubject:\r\nDeveloper\r\nSoftware:\r\nC#\r\nAuthor:\r\nGerry O''Brien', 14, 'SQLServer', '', '', 0, 1, ''),
(99, 'Visual Basic Essential Training with David Gassner', 'http://www.lynda.com/Visual-Basic-tutorials/Visual-Basic-Essential-Training/114902-2.html', '', 14, 'SQLServer', '', '', 0, 11, ''),
(100, 'Etgar Keret : "J’aimerais un Premier ministre', 'http://www.atlantico.fr/decryptage/etgar-keret-j-aimerais-premier-ministre-qui-defaut-avoir-idees-favorables-paix-en-ait-au-moins-folles-pourquoi-ne-pas-essayer-2406117.html/page/0/1', '', 7, 'Israel', '', '', 0, 1, ''),
(101, 'Visual Studio 2015 01: Exploring the Visual Studio', 'http://www.lynda.com/Visual-Studio-tutorials/Visual-Studio-2015-Essentials-01-Exploring-Visual-Studio-Ecosystem/408411-2.html', '', 15, 'Visual Studio', '', '', 0, 1, ''),
(102, 'Visual Studio 2015 02: Getting Comfortable with th', 'http://www.lynda.com/Visual-Studio-tutorials/Visual-Studio-2015-Essentials-02-Getting-Comfortable-IDE/415312-2.html', '', 15, 'Visual Studio', '', '', 0, 1, ''),
(103, 'Visual Studio 2015 03: Exploring Projects and Solu', 'http://www.lynda.com/Visual-Studio-tutorials/Visual-Studio-2015-Essentials-03-Exploring-Projects-Solutions/415313-2.html', '', 15, 'Visual Studio', '', '', 0, 1, ''),
(104, 'Visual Studio 2015  04: Surveying the Programming ', 'http://www.lynda.com/Visual-Studio-tutorials/Visual-Studio-2015--04-Surveying-programming-languages/415314-2.html', '', 15, 'Visual Studio', '', '', 0, 4, ''),
(105, 'C# Essential Training with David Gassner', 'http://www.lynda.com/C-tutorials/C-Essential-Training/188207-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:C%23%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 15, 'Visual Studio', '', '', 0, 8, ''),
(106, 'LES REFUGIES DU SILENCE ( mise à jour 2015 )', 'https://www.youtube.com/watch?v=_B6qkypTDa0&feature=youtu.be', '', 7, 'Israel', '', '', 0, 1, ''),
(107, 'From: Visual Studio 2010 Essential Training with W', 'http://www.lynda.com/ASP-NET-tutorials/Understanding-Visual-Studio-versions/67159/76568-4.html', '', 15, 'Visual Studio', '', '', 0, 5, ''),
(108, 'Up and Running Angular JS', 'http://www.lynda.com/AngularJS-tutorials/Installing-running-basic-application/154414/167519-4.html', '', 4, 'JQuery', '', '', 0, 1, ''),
(109, 'Angular forms Validation', 'http://www.lynda.com/AngularJS-tutorials/Adding-Angular-JS-our-form/438886/445592-4.html', '', 4, 'JQuery', '', '', 0, 1, ''),
(110, 'javascript functions', 'http://www.lynda.com/JavaScript-tutorials/JavaScript-Functions/148137-2.html', '', 4, 'Javascript', '', '', 0, 1, ''),
(111, 'Comment les jeunes', 'http://www.danilette.com/2015/11/comment-les-jeunes-de-mon-quartier-dans-le-93-ont-ils-vecu-les-carnages-de-la-nuit-alexandra-laignel-lavastine.html?utm_source=_ob_share&utm_medium=_ob_facebook&utm_campaign=_ob_sharebar', '', 8, 'Antisémitisme', '', '', 0, 1, ''),
(112, 'Introducing OOP Excel VBA', 'http://www.lynda.com/Excel-tutorials/Introducing-object-oriented-programming/62906/68825-4.html', '', 13, 'Other Programing', '', '', 0, 1, ''),
(113, 'Setting up and configuring your local server with ', 'http://www.lynda.com/Moodle-tutorials/Setting-up-configuring-your-local-server-XAMPP-LAMP/372439/416662-4.html', '', 1, 'Others', '', '', 0, 1, ''),
(114, 'Up and Running with Node.js with Alexander Zanfir', 'http://www.lynda.com/Node-js-tutorials/What-you-should-know/370605/408260-4.html?autoplay=true', '', 4, 'JQuery', '', '', 0, 1, ''),
(115, 'Amazon.ch', 'http://www.amazon.de/', '', 1, 'Others', '', '', 0, 1, ''),
(116, 'Modern Javascript playlist', 'http://www.lynda.com/SharedPlaylist/0a5348d96ae04fb48690a5137ccadced', '', 1, 'Others', 'Playlist', '', 0, 0, ''),
(117, 'Dieudonné propagandiste "national-socialiste" selo', 'http://www.memorial98.org/2015/11/dieudonne-propagandiste-national-socialiste-selon-la-justice.html', '', 8, 'Antisémitisme', '', '', 0, 1, ''),
(118, 'electronic-star.ch', 'http://www.electronic-star.ch/', '', 1, 'Others', '', '', 0, 1, ''),
(119, 'telekurs', 'https://www.tkflink.com/fda?X=b64-U2VzYW1lLVzu9IOdS9P6pamZ4fKC1lCuqFz3NDEO0Lruj0gJIpsH9Ivl19G6unHE9qCqfqjh9oDni$qDjYIJZ32Cx8Dn68Tcl6yPwvcs72QUt$f2fevHyPMlHklLtkcK88iXOIywJ4JdpTXPvQTB1-HiVdD9SZo69NdIxDn3OA', 'Antonio:CH543; U55209\r\nPassword: 131158\r\n\r\nStefano:CH543: U55003\r\nPassword: Lugano', 1, 'Others', '', '', 0, 1, ''),
(120, 'Design the Web: CSS-Controlled SVG with PHP with C', 'http://www.lynda.com/CSS-tutorials/Design-Web-CSS-Controlled-SVG-PHP/424048-2.html', '', 2, 'PHP', '', '', 0, 1, ''),
(121, 'AngularJS: Building a Data-Driven App with Ray Vil', 'http://www.lynda.com/AngularJS-tutorials/AngularJS-Building-Data-Driven-App/421230-2.html', '', 4, 'Javascript', '', '', 0, 1, ''),
(122, 'AngularJS: Adding Registration to Your Application', 'http://www.lynda.com/AngularJS-tutorials/AngularJS-Adding-Registration-Your-Application/438887-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:angularjs%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'Javascript', '', '', 0, 1, ''),
(123, 'Developing Android Apps Essential Training with Da', 'http://www.lynda.com/Android-tutorials/Developing-Android-Apps-Essential-Training-Revision-Q2-2015/369905-2.html', '', 17, 'Java Android', '', '', 0, 2, ''),
(124, 'Java Essential Training with David Gassner', 'http://www.lynda.com/Java-tutorials/Java-Essential-Training/377484-2.html', '', 17, 'Java Android', '', '', 0, 1, ''),
(125, 'lynda Android', 'http://www.lynda.com/search?q=android', '', 17, 'Java Android', '', '', 0, 1, ''),
(126, 'Les Réfugiés Oubliés - documentaire complet', 'https://www.youtube.com/watch?v=5JwW1kefTvU', '', 7, 'Israel', '', '', 0, 1, ''),
(127, 'Microsoft course', 'https://channel9.msdn.com/Series/Choose-to-Code?sort=viewed&page=2', '', 15, 'Visual Studio', '', '', 0, 1, ''),
(128, 'udemy Mobile App Design In Sketch 3: UX and UI Des', 'https://www.udemy.com/the-complete-design-course/learn/#/', '', 1, 'Others', '', '', 0, 1, ''),
(129, 'Javasxript 6', 'https://github.com/lukehoban/es6features', 'Next generation javascript', 4, 'Javascript', '', '', 0, 1, ''),
(130, 'typescriptlang', 'http://www.typescriptlang.org/', 'https://www.udemy.com/learn-angularjs/learn/?couponCode=YOUTUBE119#/lecture/1992064', 4, 'Javascript', '', '', 0, 1, ''),
(131, 'JavaScript Essential Training with Simon Allardice', 'http://www.lynda.com/JavaScript-tutorials/JavaScript-Essential-Training/81266-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:javascript%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2', '', 4, 'Javascript', '', '', 0, 1, ''),
(132, 'Super learning material', 'http://www.ikamy.ch/public/SuperLearning/CourseSyllabusSuperLearner2.html', '', 19, 'SuperLearning', '', '', 0, 1, ''),
(133, 'Course Syllabus Super Learning', 'http://www.ikamy.ch/public/SuperLearning/CourseSyllabusSuperLearnerV2.0Udemy.pdf', '', 19, 'SuperLearning', '', '', 0, 1, ''),
(134, 'Super learning Udemy', 'https://www.udemy.com/become-a-superlearner-2-speed-reading-memory-accelerated-learning/learn/#/', '', 19, 'SuperLearning', 'Udemy', '', 0, 1, ''),
(135, 'Udemy Learn Java Script Server Technologies From S', 'https://www.udemy.com/learn-java-script-server-technologies-from-scratch/learn/#/', '', 4, 'Javascript', 'Udemy', '', 0, 1, ''),
(136, 'Udemy Projects In JavaScript & JQuery', 'https://www.udemy.com/projects-in-javascript-jquery/learn/#/', '', 4, 'Javascript', 'Udemy', '', 0, 1, ''),
(137, 'Udemy Comprehensive TypeScript', 'https://www.udemy.com/typescript101/learn/', '', 4, 'Javascript', 'Udemy', '', 0, 1, ''),
(138, 'udemy Build Web Apps with React JS and Flux', 'https://www.udemy.com/learn-and-understand-reactjs/learn/', '', 4, 'Javascript', 'Udemy', '', 0, 1, ''),
(139, 'udemy Python Network Programming', 'https://www.udemy.com/python-programming-for-real-life-networking-use/learn/', '', 1, 'Others', 'Udemy', '', 0, 1, ''),
(140, 'udemy Mobile App Design In Sketch 3: UX and UI Des', 'https://www.udemy.com/the-complete-design-course/learn/', '<p>Need a mac Mobile App Design In Sketch 3: UX and UI Design From Scratch</p>', 1, 'Others', 'Udemy', '', 0, 1, ''),
(141, 'udemy  Learning JavaScript Programming Tutorial. A', 'https://www.udemy.com/programming-javascript/learn/', '', 4, 'Javascript', 'Udemy', '', 0, 1, ''),
(142, 'CSS3', 'https://www.udemy.com/learning-css3/learn/', '', 5, 'HTML', 'Udemy', '', 0, 1, ''),
(143, 'microspot', 'http://www.microspot.ch/msp/index.jsf', '', 1, 'Others', '', '', 0, 1, ''),
(144, 'GIMP Essential Training', 'http://www.lynda.com/GIMP-tutorials/Welcome/112673/117897-4.html', '', 11, 'Programming', '', '', 0, 2, ''),
(145, 'Lumonisity brain exercise', 'https://www.lumosity.com/app/v4/dashboard', '', 1, 'Others', '', '', 0, 1, ''),
(146, 'Schindler List Violon', 'https://www.facebook.com/soutien.a.israel/videos/840988722690870/?fref=nf', '', 7, 'Israel', 'Music', 'Shoah', 0, 1, ''),
(147, 'Laure Adler Robert Badinter antisémitisme', 'http://www.franceinter.fr/player/reecouter?play=1252509', '', 8, 'Antisémitisme', 'Antisémitisme', 'Antisémitisme', 0, 1, ''),
(148, 'Groupe Mutuel', 'https://access.groupemutuel.ch/authent/auth/login?execution=e2s1&APPLICATION=ext-extranet-assure', '', 1, 'Others', '', 'Me', 0, 1, ''),
(149, 'Tailor Made sur mesure', 'https://www.tailorstore.ch/fr', '', 1, 'Others', 'Me', 'Me', 0, 1, ''),
(150, 'Yvan Attal On est pas couché', 'http://defense-medias-israel.com/yvan-attal-on-nest-couche-28-mai-2016', '', 8, 'Antisémitisme', 'Amtisémitisme', '', 0, 1, ''),
(151, 'Iran réseau sociaux', 'http://fr.timesofisrael.com/reseaux-sociaux-liran-exige-le-transfert-des-donnees-sur-ses-citoyens/', '', 1, 'Others', 'Iran', 'Iran', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `links_category`
--

DROP TABLE IF EXISTS `links_category`;
CREATE TABLE IF NOT EXISTS `links_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `rank` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `links_category`
--

INSERT INTO `links_category` (`id`, `category`, `rank`) VALUES
(1, 'Others', 0),
(2, 'PHP', 1),
(3, 'SQL', 4),
(4, 'Javascript', 5),
(5, 'HTML', 7),
(6, 'Bootstrap', 6),
(7, 'Israel', 15),
(8, 'Antisémitisme', 16),
(9, 'Handicap', 17),
(11, 'Programming', 8),
(12, 'MVC Framework', 14),
(13, 'Other Programing', 9),
(14, 'SQLServer', 2),
(15, 'Visual Studio', 3),
(16, 'JQuery', 5),
(17, 'Java Android', 3),
(18, 'Udemy', 10),
(19, 'SuperLearning', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mycigarette`
--

DROP TABLE IF EXISTS `mycigarette`;
CREATE TABLE IF NOT EXISTS `mycigarette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_cig` int(11) NOT NULL DEFAULT '1',
  `cig_date` date NOT NULL,
  `cig_date_time` datetime NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=212 ;

--
-- Dumping data for table `mycigarette`
--

INSERT INTO `mycigarette` (`id`, `number_cig`, `cig_date`, `cig_date_time`, `comment`) VALUES
(1, 5, '2015-12-29', '2015-12-29 13:37:39', ''),
(2, 1, '2015-12-29', '2015-12-29 16:04:20', 'Added automatically!'),
(3, 1, '2015-12-29', '2015-12-29 16:04:22', 'Added automatically!'),
(4, 1, '2015-12-29', '2015-12-29 16:06:56', 'Added automatically!'),
(5, 1, '2015-12-29', '2015-12-29 16:07:36', 'Added automatically!'),
(6, 1, '2015-12-29', '2015-12-29 16:08:43', 'Added automatically!'),
(7, 1, '2015-12-29', '2015-12-29 16:08:46', 'Added automatically!'),
(8, 1, '2015-12-29', '2015-12-29 16:08:49', 'Added automatically!'),
(9, 1, '2015-12-29', '2015-12-29 16:09:25', 'Added automatically!'),
(10, 1, '2015-12-29', '2015-12-29 16:11:31', 'Added automatically!'),
(11, 1, '2015-12-29', '2015-12-29 16:19:48', 'Added automatically!'),
(12, 1, '2015-12-29', '2015-12-29 17:50:12', 'Added automatically!'),
(13, 1, '2015-12-29', '2015-12-29 18:48:28', 'Added automatically!'),
(14, 1, '2015-12-29', '2015-12-29 19:30:36', 'Added automatically!'),
(15, 1, '2015-12-29', '2015-12-29 20:20:25', 'Added automatically!'),
(16, 1, '2015-12-29', '2015-12-29 22:39:51', 'Added automatically!'),
(17, 1, '2015-12-29', '2015-12-29 23:05:10', 'Added automatically!'),
(18, 1, '2015-12-30', '2015-12-30 00:46:53', 'Added automatically!'),
(19, 1, '2015-12-30', '2015-12-30 01:01:43', 'Added automatically!'),
(20, 1, '2015-12-30', '2015-12-30 12:53:08', 'Added automatically!'),
(21, 1, '2015-12-30', '2015-12-30 13:19:36', 'Added automatically!'),
(22, 1, '2015-12-30', '2015-12-30 13:51:07', 'Added automatically!'),
(23, 1, '2015-12-30', '2015-12-30 14:45:50', 'Added automatically!'),
(24, 1, '2015-12-30', '2015-12-30 15:03:30', 'Added automatically!'),
(25, 1, '2015-12-30', '2015-12-30 16:29:28', 'Added automatically!'),
(26, 1, '2015-12-30', '2015-12-30 16:57:49', 'Added automatically!'),
(27, 5, '2015-12-30', '2015-12-30 20:12:00', ''),
(28, 1, '2015-12-30', '2015-12-30 20:21:40', 'Added automatically!'),
(29, 1, '2015-12-30', '2015-12-30 21:24:11', 'Added automatically!'),
(30, 1, '2015-12-30', '2015-12-30 22:25:15', 'Added automatically!'),
(31, 1, '2015-12-30', '2015-12-30 22:33:59', 'Added automatically!'),
(32, 1, '2015-12-30', '2015-12-30 23:23:17', 'Added automatically!'),
(33, 1, '2015-12-30', '2015-12-30 23:23:20', 'Added automatically!'),
(35, 1, '2015-12-31', '2015-12-31 00:12:34', 'Added automatically!'),
(36, 1, '2015-12-31', '2015-12-31 10:52:54', 'Added automatically!'),
(37, 1, '2015-12-31', '2015-12-31 10:52:56', 'Added automatically!'),
(38, 1, '2015-12-31', '2015-12-31 11:15:14', 'Added automatically!'),
(39, 1, '2015-12-31', '2015-12-31 12:07:29', 'Added automatically!'),
(40, 1, '2015-12-31', '2015-12-31 12:24:14', 'Added automatically!'),
(41, 1, '2015-12-31', '2015-12-31 13:51:54', 'Added automatically!'),
(42, 1, '2015-12-31', '2015-12-31 17:01:29', 'Added automatically!'),
(43, 4, '2015-12-31', '2015-12-31 17:02:08', ''),
(44, 1, '2015-12-31', '2015-12-31 17:43:01', 'Added automatically!'),
(45, 1, '2015-12-31', '2015-12-31 19:47:17', 'Added automatically!'),
(46, 1, '2015-12-31', '2015-12-31 21:07:44', 'Added automatically!'),
(47, 1, '2015-12-31', '2015-12-31 21:37:35', 'Added automatically!'),
(48, 1, '2015-12-31', '2015-12-31 23:25:16', 'Added automatically!'),
(49, 1, '2015-12-31', '2015-12-31 23:54:53', 'Added automatically!'),
(50, 1, '2016-01-01', '2016-01-01 00:06:29', 'Added automatically!'),
(51, 1, '2016-01-01', '2016-01-01 00:50:26', 'Added automatically!'),
(52, 1, '2016-01-01', '2016-01-01 01:34:54', 'Added automatically!'),
(53, 1, '2016-01-01', '2016-01-01 12:36:29', 'Added automatically!'),
(54, 1, '2016-01-01', '2016-01-01 13:02:32', 'Added automatically!'),
(55, 1, '2016-01-01', '2016-01-01 13:06:51', 'Added automatically!'),
(56, 1, '2016-01-01', '2016-01-01 13:49:08', 'Added automatically!'),
(57, 1, '2016-01-01', '2016-01-01 14:10:15', 'Added automatically!'),
(58, 1, '2016-01-01', '2016-01-01 14:25:21', 'Added automatically!'),
(59, 1, '2016-01-01', '2016-01-01 15:17:29', 'Added automatically!'),
(60, 1, '2016-01-01', '2016-01-01 15:36:02', 'Added automatically!'),
(61, 1, '2016-01-01', '2016-01-01 16:16:48', 'Added automatically!'),
(62, 1, '2016-01-01', '2016-01-01 16:27:50', 'Added automatically!'),
(63, 1, '2016-01-01', '2016-01-01 18:12:08', 'Added automatically!'),
(64, 1, '2016-01-01', '2016-01-01 19:10:54', 'Added automatically!'),
(65, 1, '2016-01-01', '2016-01-01 19:32:49', 'Added automatically!'),
(66, 1, '2016-01-01', '2016-01-01 20:37:11', 'Added automatically!'),
(67, 1, '2016-01-01', '2016-01-01 21:24:38', 'Added automatically!'),
(68, 1, '2016-01-01', '2016-01-01 21:30:25', 'Added automatically!'),
(69, 1, '2016-01-01', '2016-01-01 23:06:15', 'Added automatically!'),
(70, 1, '2016-01-01', '2016-01-01 23:54:41', 'Added automatically!'),
(71, 1, '2016-01-02', '2016-01-02 11:48:41', 'Added automatically!'),
(73, 1, '2016-01-02', '2016-01-02 12:26:09', 'Added automatically!'),
(74, 1, '2016-01-02', '2016-01-02 12:44:16', 'Added automatically!'),
(75, 1, '2016-01-02', '2016-01-02 13:07:23', 'Added automatically!'),
(76, 1, '2016-01-02', '2016-01-02 13:24:15', 'Added automatically!'),
(77, 1, '2016-01-02', '2016-01-02 13:57:27', 'Added automatically!'),
(78, 1, '2016-01-02', '2016-01-02 15:25:53', 'Added automatically!'),
(79, 1, '2016-01-02', '2016-01-02 16:07:33', 'Added automatically!'),
(80, 1, '2016-01-02', '2016-01-02 17:09:06', 'Added automatically!'),
(81, 1, '2016-01-02', '2016-01-02 17:30:37', 'Added automatically!'),
(82, 1, '2016-01-02', '2016-01-02 17:50:34', 'Added automatically!'),
(83, 1, '2016-01-02', '2016-01-02 18:07:09', 'Added automatically!'),
(84, 1, '2016-01-02', '2016-01-02 18:40:41', 'Added automatically!'),
(85, 1, '2016-01-02', '2016-01-02 18:59:03', 'Added automatically!'),
(86, 1, '2016-01-02', '2016-01-02 19:20:09', 'Added automatically!'),
(87, 1, '2016-01-02', '2016-01-02 19:25:05', 'Added automatically!'),
(88, 1, '2016-01-02', '2016-01-02 20:13:36', 'Added automatically!'),
(89, 1, '2016-01-02', '2016-01-02 21:04:35', 'Added automatically!'),
(90, 1, '2016-01-02', '2016-01-02 22:30:23', 'Added automatically!'),
(91, 1, '2016-01-02', '2016-01-02 23:43:41', 'Added automatically!'),
(92, 1, '2016-01-03', '2016-01-03 00:53:06', 'Added automatically!'),
(93, 1, '2016-01-03', '2016-01-03 11:44:36', 'Added automatically!'),
(94, 1, '2016-01-03', '2016-01-03 11:44:39', 'Added automatically!'),
(95, 1, '2016-01-03', '2016-01-03 17:56:32', 'Added automatically!'),
(96, 1, '2016-01-03', '2016-01-03 17:56:34', 'Added automatically!'),
(97, 1, '2016-01-03', '2016-01-03 17:56:35', 'Added automatically!'),
(98, 1, '2016-01-03', '2016-01-03 17:56:36', 'Added automatically!'),
(99, 1, '2016-01-03', '2016-01-03 18:16:24', 'Added automatically!'),
(100, 1, '2016-01-03', '2016-01-03 18:56:11', 'Added automatically!'),
(101, 1, '2016-01-03', '2016-01-03 20:43:46', 'Added automatically!'),
(102, 1, '2016-01-03', '2016-01-03 21:11:10', 'Added automatically!'),
(103, 1, '2016-01-03', '2016-01-03 21:38:44', 'Added automatically!'),
(104, 1, '2016-01-03', '2016-01-03 22:20:06', 'Added automatically!'),
(105, 1, '2016-01-03', '2016-01-03 22:41:37', 'Added automatically!'),
(106, 1, '2016-01-03', '2016-01-03 23:14:21', 'Added automatically!'),
(107, 1, '2016-01-03', '2016-01-03 23:52:57', 'Added automatically!'),
(108, 1, '2016-01-04', '2016-01-04 00:05:18', 'Added automatically!'),
(109, 1, '2016-01-04', '2016-01-04 10:49:46', 'Added automatically!'),
(110, 1, '2016-01-04', '2016-01-04 10:49:50', 'Added automatically!'),
(111, 1, '2016-01-04', '2016-01-04 11:13:17', 'Added automatically!'),
(112, 1, '2016-01-04', '2016-01-04 11:33:56', 'Added automatically!'),
(113, 7, '2016-01-04', '2016-01-04 19:01:23', ''),
(114, 1, '2016-01-04', '2016-01-04 19:01:49', 'Added automatically!'),
(115, 1, '2016-01-04', '2016-01-04 19:11:24', 'Added automatically!'),
(116, 1, '2016-01-04', '2016-01-04 20:41:06', 'Added automatically!'),
(117, 1, '2016-01-04', '2016-01-04 20:41:09', 'Added automatically!'),
(118, 1, '2016-01-04', '2016-01-04 20:43:01', 'Added automatically!'),
(119, 1, '2016-01-04', '2016-01-04 20:50:22', 'Added automatically!'),
(120, 1, '2016-01-04', '2016-01-04 22:38:54', 'Added automatically!'),
(121, 1, '2016-01-04', '2016-01-04 23:17:55', 'Added automatically!'),
(122, 1, '2016-01-04', '2016-01-04 23:57:43', 'Added automatically!'),
(123, 1, '2016-01-05', '2016-01-05 10:41:35', 'Added automatically!'),
(124, 1, '2016-01-05', '2016-01-05 10:41:37', 'Added automatically!'),
(125, 1, '2016-01-05', '2016-01-05 11:04:23', 'Added automatically!'),
(126, 1, '2016-01-05', '2016-01-05 11:11:26', 'Added automatically!'),
(127, 1, '2016-01-05', '2016-01-05 12:19:34', 'Added automatically!'),
(128, 1, '2016-01-05', '2016-01-05 12:47:33', 'Added automatically!'),
(129, 1, '2016-01-05', '2016-01-05 13:54:41', 'Added automatically!'),
(130, 1, '2016-01-05', '2016-01-05 13:54:44', 'Added automatically!'),
(131, 4, '2016-01-05', '2016-01-05 19:18:43', ''),
(132, 1, '2016-01-05', '2016-01-05 21:29:18', 'Added automatically!'),
(133, 1, '2016-01-05', '2016-01-05 21:49:06', 'Added automatically!'),
(134, 1, '2016-01-05', '2016-01-05 22:29:21', 'Added automatically!'),
(135, 1, '2016-01-05', '2016-01-05 23:03:01', 'Added automatically!'),
(136, 1, '2016-01-05', '2016-01-05 23:27:19', 'Added automatically!'),
(137, 1, '2016-01-06', '2016-01-06 11:20:59', 'Added automatically!'),
(138, 1, '2016-01-06', '2016-01-06 11:27:51', 'Added automatically!'),
(139, 1, '2016-01-06', '2016-01-06 12:43:03', 'Added automatically!'),
(140, 1, '2016-01-06', '2016-01-06 12:43:06', 'Added automatically!'),
(141, 9, '2016-01-06', '2016-01-06 19:17:07', ''),
(142, 1, '2016-01-07', '2016-01-07 00:05:32', 'Added automatically!'),
(150, 6, '2016-01-06', '2016-01-07 00:06:36', ''),
(151, 1, '2016-01-07', '2016-01-07 00:24:34', 'Added automatically!'),
(152, 1, '2016-01-07', '2016-01-07 00:24:36', 'Added automatically!'),
(153, 1, '2016-01-07', '2016-01-07 01:34:58', 'Added automatically!'),
(154, 1, '2016-01-07', '2016-01-07 01:50:17', 'Added automatically!'),
(155, 1, '2016-01-07', '2016-01-07 11:28:20', 'Added automatically!'),
(156, 1, '2016-01-07', '2016-01-07 11:41:00', 'Added automatically!'),
(157, 1, '2016-01-07', '2016-01-07 12:47:06', 'Added automatically!'),
(158, 1, '2016-01-07', '2016-01-07 12:47:09', 'Added automatically!'),
(159, 1, '2016-01-07', '2016-01-07 12:48:12', 'Added automatically!'),
(160, 1, '2016-01-07', '2016-01-07 18:43:18', 'Added automatically!'),
(161, 1, '2016-01-07', '2016-01-07 18:43:20', 'Added automatically!'),
(162, 1, '2016-01-07', '2016-01-07 18:43:21', 'Added automatically!'),
(163, 1, '2016-01-07', '2016-01-07 18:43:23', 'Added automatically!'),
(164, 1, '2016-01-07', '2016-01-07 18:43:24', 'Added automatically!'),
(165, 1, '2016-01-07', '2016-01-07 18:43:24', 'Added automatically!'),
(166, 1, '2016-01-07', '2016-01-07 19:12:36', 'Added automatically!'),
(167, 1, '2016-01-07', '2016-01-07 19:12:49', 'Added automatically!'),
(168, 1, '2016-01-07', '2016-01-07 23:59:13', 'Added automatically!'),
(169, 1, '2016-01-07', '2016-01-07 23:59:15', 'Added automatically!'),
(170, 1, '2016-01-07', '2016-01-07 23:59:16', 'Added automatically!'),
(171, 1, '2016-01-07', '2016-01-07 23:59:17', 'Added automatically!'),
(172, 1, '2016-01-08', '2016-01-08 00:00:33', 'Added automatically!'),
(173, 1, '2016-01-08', '2016-01-08 00:24:00', 'Added automatically!'),
(174, 1, '2016-01-08', '2016-01-08 08:10:18', 'Added automatically!'),
(175, 1, '2016-01-08', '2016-01-08 15:52:47', 'Added automatically!'),
(176, 1, '2016-01-08', '2016-01-08 15:52:49', 'Added automatically!'),
(177, 1, '2016-01-08', '2016-01-08 16:31:57', 'Added automatically!'),
(178, 1, '2016-01-08', '2016-01-08 17:45:01', 'Added automatically!'),
(179, 1, '2016-01-08', '2016-01-08 17:45:02', 'Added automatically!'),
(180, 1, '2016-01-08', '2016-01-08 20:54:31', 'Added automatically!'),
(181, 1, '2016-01-08', '2016-01-08 21:08:49', 'Added automatically!'),
(182, 1, '2016-01-08', '2016-01-08 21:22:04', 'Added automatically!'),
(183, 1, '2016-01-09', '2016-01-09 00:00:40', 'Added automatically!'),
(184, 1, '2016-01-09', '2016-01-09 00:00:58', 'Added automatically!'),
(185, 1, '2016-01-09', '2016-01-09 10:43:10', 'Added automatically!'),
(186, 1, '2016-01-09', '2016-01-09 11:16:55', 'Added automatically!'),
(187, 1, '2016-01-09', '2016-01-09 11:55:01', 'Added automatically!'),
(188, 1, '2016-01-09', '2016-01-09 23:18:32', 'Added automatically!'),
(189, 1, '2016-01-09', '2016-01-09 23:18:34', 'Added automatically!'),
(190, 1, '2016-01-09', '2016-01-09 23:18:35', 'Added automatically!'),
(191, 1, '2016-01-09', '2016-01-09 23:18:35', 'Added automatically!'),
(192, 1, '2016-01-09', '2016-01-09 23:18:36', 'Added automatically!'),
(193, 1, '2016-01-09', '2016-01-09 23:18:37', 'Added automatically!'),
(194, 1, '2016-01-09', '2016-01-09 23:18:37', 'Added automatically!'),
(195, 1, '2016-01-09', '2016-01-09 23:46:45', 'Added automatically!'),
(196, 1, '2016-01-10', '2016-01-10 00:15:16', 'Added automatically!'),
(197, 1, '2016-01-10', '2016-01-10 11:26:08', 'Added automatically!'),
(198, 1, '2016-01-10', '2016-01-10 11:26:13', 'Added automatically!'),
(199, 1, '2016-02-06', '2016-02-06 01:48:33', 'Added automatically!'),
(200, 1, '2016-02-11', '2016-02-11 23:02:09', 'Added automatically!'),
(201, 1, '2016-03-15', '2016-03-15 12:03:25', 'Added automatically!'),
(202, 1, '2016-03-25', '2016-03-25 01:10:45', 'Added automatically!'),
(203, 1, '2016-03-25', '2016-03-25 01:52:45', 'Added automatically!'),
(204, 1, '2016-03-25', '2016-03-25 10:59:48', 'Added automatically!'),
(205, 1, '2016-04-01', '2016-04-01 19:09:02', 'Added automatically!'),
(206, 1, '2016-04-15', '2016-04-15 11:18:35', 'Added automatically!'),
(207, 1, '2016-04-15', '2016-04-15 11:19:53', 'Added automatically!'),
(208, 1, '2016-04-15', '2016-04-15 11:20:42', 'Added automatically!'),
(209, 1, '2016-06-21', '2016-06-21 01:31:31', 'Added automatically!'),
(210, 1, '2016-06-24', '2016-06-24 00:25:17', ''),
(211, 2016, '0000-00-00', '2016-07-01 02:58:06', 'Added automatically!');

-- --------------------------------------------------------

--
-- Table structure for table `myexpense`
--

DROP TABLE IF EXISTS `myexpense`;
CREATE TABLE IF NOT EXISTS `myexpense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ccy_id` int(11) unsigned NOT NULL,
  `rate` decimal(10,5) NOT NULL DEFAULT '1.00000',
  `person_id` int(11) unsigned NOT NULL,
  `expense_type_id` int(11) unsigned NOT NULL,
  `expense_date` date NOT NULL,
  `comment` text,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ccy_id` (`ccy_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `myexpense`
--

INSERT INTO `myexpense` (`id`, `amount`, `ccy_id`, `rate`, `person_id`, `expense_type_id`, `expense_date`, `comment`, `modification_time`) VALUES
(2, '20000.00', 1, '1.00000', 1, 1, '2014-04-14', '<p>Pret difficult&eacute; financi&egrave;re</p>', '2016-05-01 21:20:00'),
(3, '1700.00', 1, '1.00000', 1, 1, '2016-03-31', '<p>pres</p>', '2016-05-01 19:26:31'),
(4, '-8000.00', 1, '1.00000', 1, 3, '2016-04-14', '<p>Rbt du pr&ecirc;tr</p>', '2016-05-06 21:25:53'),
(5, '600.00', 1, '1.00000', 4, 1, '2016-04-14', '<p>pr&ecirc;t t&eacute;l&eacute;</p>', '2016-05-01 19:28:27'),
(6, '2900.00', 3, '1.09994', 4, 1, '2016-04-26', '<p>pour ses dents</p>', '2016-05-01 19:28:55'),
(7, '1700.00', 1, '1.00000', 1, 1, '2016-04-30', '<p>pres</p>', '2016-05-01 20:11:52'),
(8, '10000.00', 1, '1.00000', 2, 1, '2016-03-07', '<p>Emprunt</p>', '2016-05-01 19:29:46'),
(9, '4000.00', 1, '1.00000', 2, 1, '2016-04-11', '<p>pour aller &agrave; Paris</p>', '2016-05-01 19:30:00'),
(10, '78.00', 1, '1.00000', 2, 1, '2016-03-19', '<p>Billet Jocelyn</p>', '2016-05-01 19:30:20'),
(11, '1752.00', 1, '1.00000', 2, 1, '2016-04-30', '<p>Maman billet LA</p>', '2016-05-01 19:30:42'),
(12, '3000.00', 2, '0.98000', 2, 1, '2016-04-12', '<p>Rbt du pr&ecirc;t de Papa</p>', '2016-05-01 19:31:02'),
(13, '5200.00', 1, '1.00000', 6, 1, '2016-04-30', '<p>3000 avant son d&eacute;part , 1000 au br&eacute;sil + 1200 pour son billet</p>', '2016-05-01 20:10:40'),
(14, '4500.00', 2, '0.98000', 7, 4, '2016-04-12', '<p>rbt de Caroline Ahmeh Farideh</p>', '2016-05-06 21:28:27'),
(17, '3000.00', 2, '0.98000', 5, 4, '2016-05-01', '<p>Present wedding</p>', '2016-05-06 21:28:47'),
(18, '-200.00', 1, '1.00000', 4, 3, '2016-05-11', '<p>rbt au resto chinois</p>', '2016-05-10 22:52:46'),
(19, '-2000.00', 1, '1.00000', 1, 3, '2016-05-16', '', '2016-05-15 22:40:09'),
(20, '1500.00', 1, '1.00000', 1, 1, '2016-05-18', '<p>djamila change</p>', '2016-05-19 09:42:30'),
(21, '-2000.00', 1, '1.00000', 6, 3, '2016-05-02', '', '2016-05-30 09:50:16'),
(22, '200.00', 1, '1.00000', 6, 1, '2016-05-27', '', '2016-05-30 09:51:44'),
(23, '-4900.00', 1, '1.00000', 1, 3, '2016-06-02', '<p>Rbt&nbsp;</p>', '2016-06-02 07:31:33'),
(24, '1000.00', 1, '1.00000', 4, 1, '2016-06-09', '<p>chf 1000 eur 120&nbsp; donn&eacute; en plus euro 10</p>', '2016-06-09 12:04:54'),
(25, '-1000.00', 1, '1.00000', 6, 3, '2016-06-09', '', '2016-06-09 12:15:37'),
(26, '-1000.00', 1, '1.00000', 4, 3, '2016-06-14', '<p>rbt du change euro chf&nbsp;</p>', '2016-06-14 18:16:53'),
(27, '-150.00', 1, '1.00000', 4, 3, '2016-06-14', '<p>rbt 158 sur les emprunts</p>', '2016-06-14 18:18:47'),
(28, '800.00', 3, '1.10000', 2, 1, '2016-06-20', '<p>paye hotel france Caroline</p>', '2016-06-20 20:57:11'),
(29, '250.00', 2, '0.99999', 2, 1, '2016-06-20', '<p>Setareh sam expenditure</p>', '2016-06-20 20:58:48'),
(31, '0.00', 1, '1.00000', 1, 1, '2016-06-24', '', '2016-06-24 09:53:00'),
(32, '-1000.00', 1, '1.00000', 4, 3, '2016-07-02', '<p>Rbt de l''avance du change eur/chf du mois de juin</p>', '2016-07-02 13:27:59'),
(33, '400.00', 1, '1.00000', 6, 4, '2016-07-02', '<p>Donner chf 300 pour ses lunettes + chf 100 anniversaire</p>', '2016-07-02 13:31:22'),
(34, '370.41', 3, '1.10000', 4, 4, '2016-04-11', '<p>Pay&eacute; machine &agrave; lav&eacute; Amazon</p>', '2016-07-02 13:34:12'),
(35, '-1000.00', 1, '1.00000', 6, 3, '2016-07-02', '<p>Rbt chf 1000 sur emprunt du Br&eacute;sil</p>', '2016-07-02 13:43:15'),
(36, '-1000.00', 1, '1.00000', 1, 3, '2016-07-01', '<p>pas v&eacute;rifi&eacute; mais selon ses dires 1000.- vers fin de mois de juin</p>', '2016-07-09 01:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `myexpense_person`
--

DROP TABLE IF EXISTS `myexpense_person`;
CREATE TABLE IF NOT EXISTS `myexpense_person` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) DEFAULT NULL,
  `rank` int(11) unsigned DEFAULT '1',
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `myexpense_person`
--

INSERT INTO `myexpense_person` (`id`, `person_name`, `rank`, `comment`) VALUES
(1, 'Pablo', 1, ''),
(2, 'Maman', 2, ''),
(3, 'Papa', 3, ''),
(4, 'Djamila', 2, ''),
(5, 'Desiree', 10, ''),
(6, 'Castro', 6, ''),
(7, 'Caroline', 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `myexpense_type`
--

DROP TABLE IF EXISTS `myexpense_type`;
CREATE TABLE IF NOT EXISTS `myexpense_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `expense_type` varchar(50) DEFAULT NULL,
  `side` int(1) NOT NULL DEFAULT '1',
  `rank` int(11) unsigned DEFAULT '1',
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `myexpense_type`
--

INSERT INTO `myexpense_type` (`id`, `expense_type`, `side`, `rank`, `comment`) VALUES
(1, 'Pret', 1, 1, ''),
(3, 'Rbt', -1, 2, ''),
(4, 'Give', 1, 3, ''),
(5, 'Received', -1, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `my_house_expense`
--

DROP TABLE IF EXISTS `my_house_expense`;
CREATE TABLE IF NOT EXISTS `my_house_expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ccy_id` int(11) unsigned NOT NULL,
  `rate` decimal(10,5) NOT NULL DEFAULT '1.00000',
  `person_id` int(11) unsigned NOT NULL,
  `expense_type_id` int(11) unsigned NOT NULL,
  `expense_date` date NOT NULL,
  `comment` text,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ccy_id` (`ccy_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `my_house_expense`
--

INSERT INTO `my_house_expense` (`id`, `amount`, `ccy_id`, `rate`, `person_id`, `expense_type_id`, `expense_date`, `comment`, `modification_time`) VALUES
(1, '80.00', 1, '1.00000', 6, 1, '2016-05-05', '', '2016-05-05 12:14:12'),
(2, '27.90', 1, '1.00000', 6, 3, '2016-05-06', '<p>Fromage, coca-cola etccc 27.9</p>', '2016-05-07 11:39:23'),
(3, '65.90', 1, '1.00000', 6, 3, '2016-05-07', '<p>Food crevette&nbsp;</p>', '2016-05-07 12:20:05'),
(4, '7.90', 1, '1.00000', 6, 3, '2016-05-11', '<p>tooth pick coke</p>', '2016-05-11 03:36:45'),
(5, '200.00', 1, '1.00000', 6, 3, '2016-05-17', '', '2016-05-19 09:14:04'),
(6, '8.00', 1, '1.00000', 6, 1, '2016-05-14', '', '2016-05-19 09:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `my_house_expense_type`
--

DROP TABLE IF EXISTS `my_house_expense_type`;
CREATE TABLE IF NOT EXISTS `my_house_expense_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `expense_type` varchar(50) DEFAULT NULL,
  `side` int(1) NOT NULL DEFAULT '1',
  `rank` int(11) unsigned DEFAULT '1',
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `my_house_expense_type`
--

INSERT INTO `my_house_expense_type` (`id`, `expense_type`, `side`, `rank`, `comment`) VALUES
(1, 'Cigarette', 1, 1, ''),
(3, 'Food', 1, 2, ''),
(4, 'Appliance', 1, 3, ''),
(5, 'Big Stuff', 1, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `notifications_ibfk_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `link`, `read`, `date`) VALUES
(1, 1, 'System break Down', 'mailbox.php', 0, '2016-05-06 23:54:18'),
(2, 1, 'another alert', 'alert.php', 0, '2016-05-07 00:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(10) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `closed` tinyint(1) DEFAULT '0',
  `currency_iso` varchar(3) DEFAULT 'CHF',
  `vat` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `comment` text,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_code` (`project_code`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_code`, `project_name`, `client_id`, `pseudo`, `start_date`, `end_date`, `closed`, `currency_iso`, `vat`, `comment`, `input_date`) VALUES
(4, 'RAJAH', 'India inc', 6, 'Tour_Patient', '2015-10-02', '2015-10-15', 0, 'CHF', 'Yes', '', '2015-10-12 23:14:30'),
(5, 'KAMY', 'kamy', 4, 'COLLINE', '2015-10-20', '0000-00-00', 0, 'INR', 'Yes', '', '2015-10-15 12:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

DROP TABLE IF EXISTS `to_do_list`;
CREATE TABLE IF NOT EXISTS `to_do_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `todo` varchar(255) DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  `comment` text,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `to_do_list`
--

INSERT INTO `to_do_list` (`id`, `user_id`, `todo`, `rank`, `comment`, `modification_time`, `due_date`) VALUES
(1, 2, 'Simplon email1', 1, '<p>credit card</p>', '2016-07-02 00:43:14', '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `transport_chauffeurs`
--

DROP TABLE IF EXISTS `transport_chauffeurs`;
CREATE TABLE IF NOT EXISTS `transport_chauffeurs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chauffeur_name` varchar(70) DEFAULT NULL,
  `initial` varchar(3) DEFAULT NULL,
  `company` varchar(70) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chauffeur_name` (`chauffeur_name`),
  UNIQUE KEY `initial` (`initial`),
  KEY `chauffeur_name_2` (`chauffeur_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transport_chauffeurs`
--

INSERT INTO `transport_chauffeurs` (`id`, `chauffeur_name`, `initial`, `company`, `user_id`, `input_date`, `modification_time`, `username`) VALUES
(1, 'Pablo ARZA', 'PAB', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(2, 'Luan HAZIRI', 'LUA', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(3, 'Djamila AMRANI', 'DJA', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(4, 'Pierre-Alain BONFILS', 'PIA', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(5, 'Vincent DUBOULOZ', 'VCT', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(6, 'Autres', 'AUT', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL),
(7, 'Kamran NAFISSPOUR', 'KNA', 'Transmed', NULL, NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_clients`
--

DROP TABLE IF EXISTS `transport_clients`;
CREATE TABLE IF NOT EXISTS `transport_clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `liste_restrictive` tinyint(1) NOT NULL DEFAULT '0',
  `web_view` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `default_price` decimal(10,2) DEFAULT '0.00',
  `default_depart` varchar(70) DEFAULT NULL,
  `default_arrivee` varchar(70) DEFAULT NULL,
  `liste_rank` int(11) DEFAULT NULL,
  `remarque` text,
  `input_date` date DEFAULT NULL,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  KEY `pseudo_2` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=244 ;

--
-- Dumping data for table `transport_clients`
--

INSERT INTO `transport_clients` (`id`, `pseudo`, `liste_restrictive`, `web_view`, `last_name`, `first_name`, `address`, `cp`, `city`, `country`, `default_price`, `default_depart`, `default_arrivee`, `liste_rank`, `remarque`, `input_date`, `modification_time`, `username`) VALUES
(4, 'COLLINE', 1, 'COLLINE', 'COLLINE', '', NULL, NULL, 'Genève', 'Suisse', NULL, NULL, NULL, 1, NULL, NULL, '0000-00-00 00:00:00', NULL),
(5, 'AUTRES', 1, 'AUTRES', 'AUTRES', '', NULL, NULL, 'Genève', 'Suisse', NULL, NULL, NULL, 1, NULL, NULL, '0000-00-00 00:00:00', NULL),
(6, 'Tour_Patient', 1, 'Tour Patient', 'comptabilité', 'Service', 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 2, NULL, NULL, '0000-00-00 00:00:00', NULL),
(7, 'Tour_Sang', 0, 'Tour Sang', 'comptabilité', 'Service', 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 3, NULL, NULL, '0000-00-00 00:00:00', NULL),
(8, 'Carouge_Sang', 0, 'Carouge Sang', 'comptabilité', 'Service', 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 4, NULL, NULL, '0000-00-00 00:00:00', NULL),
(9, 'AURELIE', 0, 'Aurélie AI', 'ASSEO', 'Aurélie', 'Route de Pressinge, 20', '1214', 'Puplinge', 'Suisse', '60.00', NULL, NULL, 50, NULL, NULL, '0000-00-00 00:00:00', NULL),
(10, 'AURELIE_Med', 0, 'Aurélie Medecin', 'ASSEO', 'Aurélie', 'Route de Pressinge, 20', '1214', 'Puplinge', 'Suisse', '60.00', NULL, NULL, 50, NULL, NULL, '0000-00-00 00:00:00', NULL),
(11, 'ELZIZOUNE', 1, 'ELZIZOUNE Bouchaib', 'ELZIZOUNE', 'Bouchaib', 'Rue de Berne 60', '1202', 'Genève', 'Suisse', '45.00', 'Domicile', 'HUG Dialyse', 50, NULL, NULL, '0000-00-00 00:00:00', NULL),
(12, 'NAF_Kamy', 0, 'NAFISSPOUR Privee', 'NAFISSPOUR', 'Kamran', 'Rue des Vollandes 68', '1207', 'Genève', 'Suisse', NULL, NULL, NULL, 50, NULL, NULL, '0000-00-00 00:00:00', NULL),
(13, 'NAFISSPOUR', 1, 'NAFISSPOUR Travail', 'NAFISSPOUR', 'Kamran', 'Rue des Vollandes 68', '1207', 'Genève', 'Suisse', '40.00', 'Travail', 'Domicile', 50, NULL, NULL, '0000-00-00 00:00:00', NULL),
(14, 'AUDE', 0, ' Aude', '', 'Aude', 'Route de Saint-Julien 297', '1258', 'Perly', 'Suisse', NULL, NULL, NULL, 100, NULL, NULL, '0000-00-00 00:00:00', NULL),
(15, 'TAG', 0, ' Isaac', '', 'Isaac', 'Case postale 575', '1211', 'Genève 13', 'Suisse', NULL, NULL, NULL, 100, NULL, NULL, '0000-00-00 00:00:00', NULL),
(16, 'ALOHA', 0, 'ALOHA', 'HUBER', 'Rolf', 'Rue de la Fontaine 13', '1204', 'Genève', 'Suisse', NULL, NULL, NULL, 100, NULL, NULL, '0000-00-00 00:00:00', NULL),
(17, 'PARTNERS', 0, 'BOUDINA James', 'BOUDINA', 'James', 'Route de Saint-Georges 83', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 100, NULL, NULL, '0000-00-00 00:00:00', NULL),
(18, 'Mines_ICBL', 0, 'BRASSIER Audrey', 'BRASSIER', 'Audrey', 'Rue de Cornavin 9', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 100, NULL, NULL, '0000-00-00 00:00:00', NULL),
(19, 'ALBER', 0, 'ALBER Clotilde', 'ALBER', 'Clotilde', 'Avenue de Champel 64', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(20, 'AMEZ_DROZ', 0, 'AMEZ-DROZ Edouard', 'AMEZ-DROZ', 'Edouard', 'Chemin de la Vieille-Ferme 8', '1255', 'Veyrier', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(21, 'AMREIN', 0, 'AMREIN Suzanne', 'AMREIN', 'Suzanne', 'Cité Vieussieux 8', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(22, 'ANDEREGG', 0, 'ANDEREGG Paul', 'ANDEREGG', 'Paul', 'Rue du Vieux Moulin 9', '1213', 'OnexLE', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(23, 'ANDREY', 0, 'ANDREY Christophe', 'ANDREY', 'Christophe', 'Rue Gardiol 5', '1218', 'Le Grand-Saconnex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(24, 'ANKER_M', 0, 'ANKER Marc', 'ANKER', 'Marc', 'Promenade de l''Europe 59', '1203', 'Genève', 'Suisse', '40.00', 'Domicile', 'Physio, 26 rue Guiseppe Motta', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(25, 'ANKER', 0, 'ANKER Yvonne', 'ANKER', 'Yvonne', 'Promenade de l''Europe 59', '1203', 'Genève', 'Suisse', '40.00', 'Domicile', 'Physio, 26 rue Guiseppe Motta', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(26, 'ARIAS', 0, 'ARIAS José-Miguel', 'ARIAS', 'José-Miguel', 'Chemin Bournoud 13-15', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(27, 'ARMAND', 0, 'ARMAND Henry', 'ARMAND', 'Henry', 'Chemin de la Caroline 24', '1213', 'Petit - Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(28, 'AUBERT', 0, 'AUBERT Roselyne', 'AUBERT', 'Roselyne', 'Rue de Bourgogne 2', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(29, 'AVONDO', 0, 'AVONDO Marie', 'AVONDO', 'Marie', 'Avenue de la Pruley 44', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(30, 'BALBWIN', 0, 'BALDWIN Théo', 'BALDWIN', 'Théo', 'Grand-Montfleury 50', '1290', 'Versoix', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(31, 'BAZZACCHI', 0, 'BAZZACCHI Lucienne', 'BAZZACCHI', 'Lucienne', 'Grand-Pré 37', '1202', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(32, 'BEGER', 0, 'BEGER Iris', 'BEGER', 'Iris', 'Chemin Perrault-de-Jotemps 9\r\n', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(33, 'BENOIST_FILLE', 0, 'BENOIST Stéphanie', 'BENOIST', 'Stéphanie', 'C§hemin du Velours 20', '1231', 'Conches', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(34, 'BERNASCONI', 0, 'BERNASCONI Alexandre', 'BERNASCONI', 'Alexandre', 'Chemin des Crêts-de-Pregny 7A', '1218', 'le Grand-Saconnex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(35, 'BIBES', 0, 'BIBES Jeanne', 'BIBES', 'Jeanne', 'Rue de la Poterie 20', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(36, 'BLANDIN', 0, 'BLANDIN Jean-François', 'BLANDIN', 'Jean-François', 'Chemin Crétoillet 30', '1256', 'Troinex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(37, 'BLOEDHORN', 0, 'BLOEDHORN Alexandre', 'BLOEDHORN', 'Alexandre', 'Rue de la Tambourine 38', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(38, 'BOLOMEY', 0, 'BOLOMEY Ignace', 'BOLOMEY', 'Ignace', 'Chemin de la Citadelle 71', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(39, 'BONZON', 0, 'BONZON Edith', 'BONZON', 'Edith', 'Rue Soubeyran 8', '1203', 'Genève', 'Suisse', '40.00', 'Domicile', 'Physio, 10 rue Galatin', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(40, 'BONZON_Mich', 0, 'BONZON Michèle', 'BONZON', 'Michèle', 'Chemin de Blonay 4', '1234', 'Vessy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(41, 'BORNOZ', 0, 'BORNOZ Marcel', 'BORNOZ', 'Marcel', 'Avenue des Morgines 37', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(42, 'BOSSENS', 0, 'BOSSENS Hélène', 'BOSSENS', 'Hélène', 'Chemin Briquet 26', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(43, 'BOSTEELS', 0, 'BOSTEELS Michel', 'BOSTEELS', 'Michel', 'Chemin de Gaillard 276', ' 01160', 'Challex', 'France', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(44, 'BOUCHET', 0, 'BOUCHET Raymond', 'BOUCHET', 'Raymond', 'Rue Fort-Barreau 19', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(45, 'BROILLET', 0, 'BROILLET Bernard', 'BROILLET', 'Bernard', 'Avenue du Pont-Butin 70', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(46, 'BUDEYRI', 0, 'BUDEYRI Wijdan', 'BUDEYRI', 'Wijdan', 'Rue du Nant 34', '1207', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(47, 'BURGENER', 0, 'BURGENER André', 'BURGENER', 'André', 'Rue de Moillebeau 57', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(48, 'BURNAT', 0, 'BURNAT Janine', 'BURNAT', 'Janine', 'Place Sigsimond 2', '1227', 'Carouge', 'Suisse', '35.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(49, 'CARNAL_Mme', 0, 'CARNAL Liliane', 'CARNAL', 'Liliane', 'Rue de la Calle 19', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(50, 'CARNAL_R', 0, 'CARNAL Raymond', 'CARNAL', 'Raymond', 'Rue de la Calle 19', '1213', 'Onex', 'Suisse', '45.00', 'Domicile', 'HUG Dialyse', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(51, 'CARUANA', 0, 'CARUANA Paul', 'CARUANA', 'Paul', 'Maison familiale du Genevois', '74160', 'Collonge s/Salève', 'France', '60.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(52, 'CERROTI', 0, 'CERROTI Georges', 'CERROTI', 'Georges', 'Avenue du Lignon 21', '1219', 'Le Lignon', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(53, 'CHARLET', 0, 'CHARLET Sylvette', 'CHARLET', 'Sylvette', 'Avenue de Crozet 4', '1219', 'Châtelaine', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(54, 'CHERVAZ', 0, 'CHERVAZ Gérard', 'CHERVAZ', 'Gérard', 'Chemin De-La-Montagne 106', '1224', 'Chêne-Bougeries', 'Suisse', '50.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(55, 'CHERVET', 0, 'CHERVET Alfred', 'CHERVET', 'Alfred', 'Rue des Bossons 19', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(56, 'CHEVALLIER', 0, 'CHEVALLIER Françoise', 'CHEVALLIER', 'Françoise', 'Rue des Délices 1', '1204', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(57, 'CHTIOUI', 0, 'CHTIOUI Sanaa', 'CHTIOUI', 'Sanaa', 'Quai du Seujet 32', '1201', 'Genève', 'Suisse', '40.00', 'Domicile', 'Service Industriel de Genève', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(58, 'CLERC', 0, 'CLERC', 'CLERC', 'Jean-daniel', 'Rue des Bossons 15', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(59, 'COLOMB', 0, 'COLOMB Gilles', 'COLOMB', 'Gilles', 'Chemin du Villaret 1', '1224', 'Chêne-Bougeries', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(60, 'COSTA', 0, 'COSTA Tania', 'COSTA', 'Tania', 'Avenue de Feuillasse 1', '1217', 'Meyrin', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(61, 'COURT', 0, 'COURT Elisa', 'COURT', 'Elisa', 'Quai du Seulet 34', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(62, 'DAUDIN', 0, 'DAUDIN Jean', 'DAUDIN', 'Jean', 'Rue de Lyon 65bis', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(63, 'DE_MONFALCON', 0, 'DE MONFALCON Juliette', 'DE MONFALCON', 'Juliette', 'Rue des Vollandes 1', '1207', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(64, 'DE_MORAWITZ', 0, 'DE MORAWITZ Karl', 'DE MORAWITZ', 'Karl', 'Place du Marché 15', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(65, 'DE_REMY', 0, 'DE REMY Jean', 'DE REMY', 'Jean', 'Plateau de Champel 18', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(66, 'DECONYNK', 0, 'DECONYNK Yvon', 'DECONYNK', 'Yvon', 'Chemin de la Prulay 72', '1217', 'Meyrin', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(67, 'DERBIGNY', 0, 'DERBIGNY Jeanne', 'DERBIGNY', 'Jeanne', 'Route d''Aire-la-Ville 226', '1242', 'Satigny', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(68, 'DESAUTEZ', 0, 'DESAUTEZ Pauline', 'DESAUTEZ', 'Pauline', 'Rue de Livron 29', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(69, 'DESCOMBES', 0, 'DESCOMBES Michel', 'DESCOMBES', 'Michel', 'Rue des Bossons 24', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(70, 'DI_BENEDETTO_Cal', 0, 'DI BENEDETTO Calogero', 'DI BENEDETTO', 'Calogero', 'Chemin Longe-l''Aire 18', '1212', 'Grand-Lancy', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(71, 'DI_BENEDETTO', 0, 'DI BENEDETTO Margueritte', 'DI BENEDETTO', 'Margueritte', 'Chemin Longe-l''Aire 18', '1212', 'Grand-Lancy', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(72, 'DOCTOR', 0, 'DOCTOR Narad', 'DOCTOR', 'Narad', 'Chemin de Pont-Céard 42', '1290', 'Versoix', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(73, 'DORSAZ', 0, 'DORSAZ Agnès', 'DORSAZ', 'Agnès', 'Avenue Bois-de-la-Chapelle 9', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(74, 'DUBOIS', 0, 'DUBOIS Marie-Jeanne', 'DUBOIS', 'Marie-Jeanne', 'Chemin Moïse-Duboule 17', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(75, 'DUFRENE', 0, 'DUFRÊNE Chantal', 'DUFRÊNE', 'Chantal', 'Rue Curé-Descloud 17', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(76, 'DUMONT', 0, 'DUMONT Benoît', 'DUMONT', 'Benoît', 'Avenue Eugène-Pittard 11', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(77, 'DUPERREX', 0, 'DUPERREX Aloys', 'DUPERREX', 'Aloys', 'Rue de Monbrillant 61', '1202', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(78, 'EHRAT', 0, 'EHRAT Danièle', 'EHRAT', 'Danièle', 'Avenue Peschier 16', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(79, 'ELOUARET', 0, 'ELOUARET Soraya', 'ELOUARET', 'Soraya', 'Rue de Bandol 12', '1213', 'Onex', 'Suisse', '30.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(80, 'FARTACH_Mme', 0, 'FARTACH  Bernadette', 'FARTACH', ' Bernadette', 'Chemin de la Tourelle 16', '1209', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(81, 'FARTACH_Suz', 0, 'FARTACH Suzanne', 'FARTACH', 'Suzanne', 'Ecole de Médecine 16', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(82, 'FAUQUEX', 0, 'FAUQUEX Jean-Paul  ', 'FAUQUEX', 'Jean-Paul  ', 'Rue des Minoteries 7', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(83, 'FAVRE_Puplinge', 0, 'FAVRE Christianne', 'FAVRE', 'Christianne', 'Chemin de Pré-Marquis 7b', '1241', 'Puplinge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(84, 'FAVRE_Onex', 0, 'FAVRE Ruth', 'FAVRE', 'Ruth', 'Chemin de la Calle 38', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(85, 'FAVRE_ANNE', 0, 'FAVRE-LUISIER  Anne Marie', 'FAVRE-LUISIER ', 'Anne Marie', 'Route de la Capite 157', '1222', 'Vésenaz', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(86, 'FELL', 0, 'FELL Christine', 'FELL', 'Christine', 'Chemin Colladon 22', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(87, 'FIRME', 0, 'FIRME José Manuel', 'FIRME', 'José Manuel', 'rue des peupliers 6', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(88, 'FLAHAULT', 0, 'FLAHAULT Françoise', 'FLAHAULT', 'Françoise', 'Rue de Genève 94', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(89, 'FORAY_Herve', 0, 'FORAY Hervé', 'FORAY', 'Hervé', 'Avenue de Mategnin 59', '1217', 'Meyrin', 'Suisse', '35.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(90, 'FORAY_Mme', 0, 'FORAY Roberte', 'FORAY', 'Roberte', 'Avenue de Mategnin 49', '1217', 'Meyrin', 'Suisse', '35.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(91, 'FOURNIER', 0, 'FOURNIER Charles', 'FOURNIER', 'Charles', 'Rue Charles-Bonnet 10', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(92, 'FRACHET', 0, 'FRACHET Margueritte', 'FRACHET', 'Margueritte', 'Avenue de Joli-Mont 3', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(93, 'GARBANI', 0, 'GARBANI Roger', 'GARBANI', 'Roger', 'Rue des Allobroges 13', '1227', 'Les Acacias', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(94, 'GAY_BALMAT', 0, 'GAY-BALMAT Jeannine', 'GAY-BALMAT', 'Jeannine', 'Boulevard du Pont-d''Arve 44', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(95, 'GIANOLI', 0, 'GIANOLI Carlo', 'GIANOLI', 'Carlo', 'Avenue du Lignon 20', '1219', 'Le Lignon', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(96, 'GIAUQUE', 0, 'GIAUQUE Rémy', 'GIAUQUE', 'Rémy', 'Rue des Bossons 17', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(97, 'GIGON', 0, 'GIGON Jean-Pierre', 'GIGON', 'Jean-Pierre', 'Rue Pestalozzi 1', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(98, 'GIGON_Mme', 0, 'GIGON Radmila', 'GIGON', 'Radmila', 'Rue Pestalozzi 1', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(99, 'VM_Gilabert', 0, 'GILABERT ', 'GILABERT', '', 'Ch. Etienne-Chennaz 14', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(100, 'GIRAUD', 0, 'GIRAUD Christian', 'GIRAUD', 'Christian', 'Chemin de Maisonneuve 12c', '1219', 'Châtelaine', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(101, 'GONZALEZ', 0, 'GONZALEZ Antonio', 'GONZALEZ', 'Antonio', 'Route de Meyrin 17', '1202', 'Genève', 'Suisse', '40.00', 'Domicile', 'Cressy Santé, Physio', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(102, 'GORGE', 0, 'GORGE Pierre', 'GORGE', 'Pierre', 'Chemin de l´Ancien-Péage 2', '1290', 'Versoix', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(103, 'GRANFAR', 0, 'GRANFAR Ebrahim', 'GRANFAR', 'Ebrahim', 'Plateau de Frontenex 9C', '1223', 'Cologny', 'Suisse', '45.00', 'Domicile', 'Relais Dumas, Grand-Saconnex', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(104, 'GRANFAR_Mme', 0, 'GRANFAR Vida', 'GRANFAR', 'Vida', 'Plateau de Frontenex 9C', '1223', 'Cologny', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(105, 'GRIN', 0, 'GRIN Denis', 'GRIN', 'Denis', 'Avenue Wendt 38', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(106, 'GROSSE', 0, 'GROSSE Christel', 'GROSSE', 'Christel', 'Rue du Loup 3', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(107, 'GUILLERMIN', 0, 'GUILLERMIN Jean', 'GUILLERMIN', 'Jean', 'Route de Bernex 392', '1233', 'Bernex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(108, 'CHRISTINE', 0, 'GUTKNECHT Christine', 'GUTKNECHT', 'Christine', 'Nant de Crève-Cœur 8', '1290', 'Versoix', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(109, 'GUTKNECHT', 0, 'GUTKNECHT Christine', 'GUTKNECHT', 'Christine', 'Nant de Crève-Cœur 8', '1290', 'Versoix', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(110, 'HAAS', 0, 'HAAS Karoline', 'HAAS', 'Karoline', 'Chemin de Saule 94', '1233', 'Bernex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(111, 'HALPERIN', 0, 'HALPÉRIN Noemi', 'HALPÉRIN', 'Noemi', 'Avenue Alfred-Bertrand 13', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(112, 'HAUSSER', 0, 'HAUSSER Josianne', 'HAUSSER', 'Josianne', 'Chemin des Rayes 33', '1222', 'Vésenaz', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(113, 'HERZI', 0, 'HERZI Taoufik', 'HERZI', 'Taoufik', 'Route d''Hermance 296', '1229', 'Anières', 'Suisse', '45.00', 'Domicile', 'Hôpital de Beau-Séjour', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(114, 'HEURTEUX', 0, 'HEURTEUX Philippe', 'HEURTEUX', 'Philippe', 'Route d''Hermance 401', '1229', 'Anières', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(115, 'HORVATH', 0, 'HORVATH Giovanna', 'HORVATH', 'Giovanna', 'Rue de Bourgogne 2', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(116, 'HUISSOUD', 0, 'HUISSOUD Maurice', 'HUISSOUD', 'Maurice', 'Chemin Etienne-Chennaz 10', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(117, 'ILG', 0, 'ILG Colette', 'ILG', 'Colette', 'Chemin des Tulipiers 23', '1208', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(118, 'CHO_IMERETINSKY', 0, 'IMERETINSKY Nadeja', 'IMERETINSKY', 'Nadeja', 'Route des Jurets 12', '1244', 'Choulex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(119, 'IMHOF', 0, 'IMHOF Edouard', 'IMHOF', 'Edouard', 'Rue Vautier 26', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(120, 'INEICHEN', 0, 'INEICHEN Marie-Elisabeth', 'INEICHEN', 'Marie-Elisabeth', 'Avenue Calas 20', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(121, 'ROBERTA', 0, 'ISABELLA-VALENZI Roberta', 'ISABELLA-VALENZI', 'Roberta', 'Rue de la Croix-du-Levant 7', '1220', 'Les Avanchets', 'Suisse', '50.00', 'Domicile', 'Centre de jour Solaris, Collonge-Bellerive', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(122, 'JANNER', 0, 'JANNER Claude', 'JANNER', 'Claude', 'Avenue Wendt 23', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(123, 'JEANNET', 0, 'JEANNET Madeleine Pierrette', 'JEANNET', 'Madeleine Pierrette', 'Chemin des Coquelicots 29', '1214', 'Vernier', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(124, 'KHAN_Mme', 0, 'KHAN Shamim', 'KHAN', 'Shamim', 'Chemin des Bugnons 10', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(125, 'KOCHER', 0, 'KOCHER ZELLER Gaby', 'KOCHER ZELLER', 'Gaby', 'Chemin Rieu 10', '1208', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(126, 'KRASNOPOLSKY', 0, 'KRASNOPOLSKY Lucie', 'KRASNOPOLSKY', 'Lucie', 'Route de Frontenex 51', '1207', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(127, 'KREBS', 0, 'KREBS André', 'KREBS', 'André', 'Avenue d''Aïre 89', '1203', 'Genève', 'Suisse', '35.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(128, 'LALIVE', 0, 'LALIVE D''EPINAY Pierre', 'LALIVE D''EPINAY', 'Pierre', 'Rue des Sources 13', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(129, 'LEHR', 0, 'LEHR-BYRDE Paule', 'LEHR-BYRDE', 'Paule', 'Chemin de Grange-Falquet 51', '1224', 'Chêne-Bougeries', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(130, 'LEQUINT', 0, 'LEQUINT Claudine', 'LEQUINT', 'Claudine', 'Chemin de Chapelly 22', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(131, 'LEVY', 0, 'LEVY Melita', 'LEVY', 'Melita', 'Rue Robert-De-Traz 2', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(132, 'LIARDON', 0, 'LIARDON Lydie', 'LIARDON', 'Lydie', 'Quai Charles-Page 45', '1205', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(133, 'LIFTON', 0, 'LIFTON Danielle', 'LIFTON', 'Danielle', 'Lotissement Trélatoun 77', '01170', 'Cessy', 'France', '60.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(134, 'LINDER', 0, 'LINDER Willi', 'LINDER', 'Willi', 'Rue Carteret 38', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(135, 'LUCINI', 0, 'LUCINI Lily', 'LUCINI', 'Lily', 'Route des Jurets 12', '1244', 'Choulex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(136, 'LUGASSY', 0, 'LUGASSY Raphaël', 'LUGASSY', 'Raphaël', 'Route de Chêne 70', '1208', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(137, 'MAGNIN', 0, 'MAGNIN Mario', 'MAGNIN', 'Mario', 'Chemin Briquet 18', '1218', 'Le Grand-Saconnex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(138, 'MAIO', 0, 'MAIO Sabatino', 'MAIO', 'Sabatino', 'Avenue de Thônex 8', '1225', 'Chêne-Bourg', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(139, 'MALEH', 0, 'MALEH Suha', 'MALEH', 'Suha', 'Route de Florissant 70', '1206', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(140, 'MANSON', 0, 'MANSON-CAEN Joëlle', 'MANSON-CAEN', 'Joëlle', 'Avenue d''Aïre 73B', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(141, 'MARCHAND', 0, 'MARCHAND Chantal', 'MARCHAND', 'Chantal', 'Rue François Besson 14', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(142, 'MARES', 0, 'MARES Eketharrina', 'MARES', 'Eketharrina', 'Avenue Ernest-Pictet 16', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(143, 'MARESCA', 0, 'MARESCA Gisela', 'MARESCA', 'Gisela', 'Rue de la Dôle 2', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(144, 'MARTIN_MA', 0, 'MARTIN Marie-Augusta', 'MARTIN', 'Marie-Augusta', 'Cours Saint-Pierre 1', '1204', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(145, 'MATHIEU', 0, 'MATHIEU ', 'MATHIEU', '', 'Chemin du Pré-du-Couvent 1', '1224', 'Chêne-Bougeries', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(146, 'MATHYS', 0, 'MATHYS Jean', 'MATHYS', 'Jean', 'Chemin Briquet 20', '1209', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(147, 'MATHYS_Simone', 0, 'MATHYS Simone', 'MATHYS', 'Simone', 'Chemin Briquet 20', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(148, 'MAURON', 0, 'MAURON Francine', 'MAURON', 'Francine', 'Rue du Grand Pré 30', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(149, 'MECCA', 0, 'MECCA Vincenzo', 'MECCA', 'Vincenzo', 'Rue Caroline 53', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(150, 'MESIN', 0, 'MESIN Mehmet', 'MESIN', 'Mehmet', 'Chemin du Fief-de-Chapitre 9', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(151, 'MESOT', 0, 'MESOT André', 'MESOT', 'André', 'Chemin de la Mère Voie 78', '1228', 'Plan-les-Ouates', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(152, 'MEYLAN', 0, 'MEYLAN xxx', 'MEYLAN', 'xxx', 'Chemin de Saule 10', '1233', 'Bernex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(153, 'MONNAY_Mariette', 0, 'MONNAY Mariette', 'MONNAY', 'Mariette', 'Route d''Aïre 141', '1219', 'Aïre', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(154, 'MOTTET_Pat', 0, 'MOTTET Patricia', 'MOTTET', 'Patricia', 'Route de Frontenex 37', '1207', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(155, 'MULLER', 0, 'MULLER Elisabeth', 'MULLER', 'Elisabeth', 'Rue Henri-Mussard 14', '1208', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(156, 'MUNSPERGER', 0, 'MUNSPERGER Johann', 'MUNSPERGER', 'Johann', 'Avenue François-Besson 20', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(157, 'MURATOVIC', 0, 'MURATOVIC Enver', 'MURATOVIC', 'Enver', 'Avenue Louis-Casaï 39', '1220', 'Les Avanchets', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(158, 'MURISIER', 0, 'MURISIER Etienne', 'MURISIER', 'Etienne', 'Chemin du Stade 7A', '1252', 'Meinier', 'Suisse', '45.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(159, 'MUSINA', 0, 'MUSINA Jean', 'MUSINA', 'Jean', 'Rue Adhémar-Fabri 4', '1201', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(160, 'MUTZENBERG', 0, 'MUTZENBERG Andrée', 'MUTZENBERG', 'Andrée', 'Avenue du Mail 24', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(161, 'MUXUDIIN', 0, 'MUXUDIIN KHAALI Abuukar', 'MUXUDIIN KHAALI', 'Abuukar', 'Rue des Lilas 11', '1202', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(162, 'Neuenschwander', 0, 'NEUENSCHWANDER Irène', 'NEUENSCHWANDER', 'Irène', 'Route de Chancy 154', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(163, 'NICOLA', 0, 'NICOLA Jacques-Bernard', 'NICOLA', 'Jacques-Bernard', 'Chemin Fief-de-Chapitre 10', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(164, 'NIEMINEN', 0, 'NIEMINEN Leena', 'NIEMINEN', 'Leena', 'Rue Marius Cadoz 204', '01170', 'Gex', 'France', '60.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(165, 'NORTE', 0, 'NORTE Diane', 'NORTE', 'Diane', 'Communes Réunies 72', '1212', 'Gand-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(166, 'ODEMS_', 0, 'ODEMS  Mary-Ann', 'ODEMS ', 'Mary-Ann', 'Rue de la Servette 71', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(167, 'OHANA', 0, 'OHANA Olivier Paul', 'OHANA', 'Olivier Paul', 'Chemin des Crêts 10', '01610', 'Saint Genis ', 'France', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(168, 'MOMO', 0, 'OMAIS Mohamed', 'OMAIS', 'Mohamed', 'Rue Daniel Gervil, 17', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(169, 'ORTEGA', 0, 'ORTEGA Carmen', 'ORTEGA', 'Carmen', 'Avenue du Gros-Chêne 37', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(170, 'PACHON', 0, 'PACHON Roger', 'PACHON', 'Roger', 'Chemin des Vidolets 25', '1214', 'Vernier', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(171, 'PANT', 0, 'PANT Sudhir', 'PANT', 'Sudhir', 'Rue Cherbuliez 7', '1207', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(172, 'PAUX', 0, 'PAUX Marcelle', 'PAUX', 'Marcelle', 'Rue Vermont 31', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(173, 'PERRNOUD', 0, 'PERRNOUD Jean-Pierre', 'PERRNOUD', 'Jean-Pierre', 'Chemin de Saule 98', '1233', 'Bernex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(174, 'PFAUTI', 0, 'PFAUTI Marc', 'PFAUTI', 'Marc', 'Chemin des Mouilles 3', '1213', 'Petit-Lancy', 'Suisse', '35.00', 'Domicile', 'Dialyse GMO, Onex', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(175, 'PFAUTI1', 0, 'PFAUTI Marc', 'PFAUTI', 'Marc', 'Chemin des Mouilles 3', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(176, 'PIGUET_Adèle', 0, 'PIGUET Adda Marcel', 'PIGUET', 'Adda Marcel', 'Avenue Vibert 17', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(177, 'PIGUET', 0, 'PIGUET Martiale', 'PIGUET', 'Martiale', 'Chemin De-Vincy 3', '1202', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(178, 'PILLET_France', 0, 'PILLET Annamma', 'PILLET', 'Annamma', 'Rue du Château 10', '01170', 'Cessy', 'France', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(179, 'PILLOUD', 0, 'PILLOUD Nicolas', 'PILLOUD', 'Nicolas', 'ManqueManque', NULL, 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(180, 'PISONI', 0, 'PISONI Vladimir', 'PISONI', 'Vladimir', 'Boid-dde-la-Chapelle 67', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(181, 'PLOJOUX', 0, 'PLOJOUX Marie-Noëlle', 'PLOJOUX', 'Marie-Noëlle', 'Route d''Aire-la-Ville 219', '1242', 'Satigny', 'Suisse', '60.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(182, 'POSS', 0, 'POSS Marie-Louise', 'POSS', 'Marie-Louise', 'Route de Bernex 359', '1233', 'Bernex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(183, 'PROBST_Mme', 0, 'PROBST Liliane', 'PROBST', 'Liliane', 'Rue du Comte-Géraud 19', '1213', 'Onex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(184, 'PROBST_Walter', 0, 'PROBST Walter', 'PROBST', 'Walter', 'Rue du Comte-Géraud 19', '1213', 'Onex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(185, 'PROUZET', 0, 'PROUZET René', 'PROUZET', 'René', 'Avenue Wendt 1', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(186, 'PYTHON', 0, 'PYTHON Georges', 'PYTHON', 'Georges', 'Chemin Taverney 12', '1218', 'Le Grand-Saconnex', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(187, 'VM_RAEMY', 0, 'RAEMY Margit', 'RAEMY', 'Margit', 'Ch. Etienne-Chennaz 14', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(188, 'RANIERI', 0, 'RANIERI Sabine', 'RANIERI', 'Sabine', 'Rue de la Fontenette 28', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(189, 'RANIERIE', 0, 'RANIERIE Sabine', 'RANIERIE', 'Sabine', 'Rue de la Fontenette 28', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(190, 'RAY', 0, 'RAY Clelia', 'RAY', 'Clelia', 'Quai du Seujet 32', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(191, 'RAYMONDON', 0, 'RAYMONDON Jacques', 'RAYMONDON', 'Jacques', 'Route d''Avully 107', '1237', 'Avully', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(192, 'REBMANN', 0, 'REBMANN Véréna', 'REBMANN', 'Véréna', 'Rue de Vermont 16', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(193, 'RENCHET', 0, 'RENCHET Georges', 'RENCHET', 'Georges', 'Chemin de la Bâtie 7', '1213', 'Petit-Lancy', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(194, 'RENFER', 0, 'RENFER Marcel', 'RENFER', 'Marcel', 'Rue de la Dôle 18', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(195, 'RICCARDELLI', 0, 'RICCARDELLI Maria', 'RICCARDELLI', 'Maria', 'Avenue du Ligon 50-53', '1219', 'Le Lignon', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(196, 'RITSCHARD', 0, 'RITSCHARD ', 'RITSCHARD', '', 'Rue Cavour 3', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(197, 'RITSCHARD_Rudolf', 0, 'RITSCHARD Jure Rudolf', 'RITSCHARD', 'Jure Rudolf', 'Route de Chancy 98', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(198, 'RKIZA', 0, 'RKIZA Silvia', 'RKIZA', 'Silvia', 'Avenue d''Aire 91A', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(199, 'ROCHANAKORN', 0, 'ROCHANAKORN Kasidis', 'ROCHANAKORN', 'Kasidis', 'Chemin Sansonnets 4', '1291', 'Commugny', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(200, 'ROCHAT', 0, 'ROCHAT Philippe', 'ROCHAT', 'Philippe', 'Rue Emile-Nicolet 13', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(201, 'RODAK', 0, 'RODAK Irène', 'RODAK', 'Irène', 'Chemin de la Charrue 11', '1218', 'Le Grand-Saconnex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(202, 'ROLLIER', 0, 'ROLLIER Jean-Pierre', 'ROLLIER', 'Jean-Pierre', 'Avenue du Lignon 53', '1219', 'Le Lignon', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(203, 'CHO_Rosset', 0, 'ROSSET Jacqueline', 'ROSSET', 'Jacqueline', 'Route des Jurets 12', '1244', 'Choulex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(204, 'ROSSET', 0, 'ROSSET René', 'ROSSET', 'René', 'Rue Dancet 3', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(205, 'RUSCITO', 0, 'RUSCITO Bruno', 'RUSCITO', 'Bruno', 'Route des Vainges 282', '74380', 'Nangy', 'France', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(206, 'SALLIN', 0, 'SALLIN Marc', 'SALLIN', 'Marc', 'Parc Dinu-Lipatti 5', '1225', 'Chêne-Bourg', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(207, 'SALZ', 0, 'SALZMANN Angèle', 'SALZMANN', 'Angèle', 'Route de Malagnou 16', '1208', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(208, 'SALZMANN', 0, 'SALZMANN Johana', 'SALZMANN', 'Johana', 'Avenue des Cavaliers Avenue des Cavaliers 5', '1224', 'Chêne-Bougeries', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(209, 'SANT', 0, 'SANT Mira', 'SANT', 'Mira', 'Croix-du-Levant 14', '1220', 'Les Avanchets', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(210, 'SANTINES', 0, 'SANTINES Joseph', 'SANTINES', 'Joseph', 'Grand-Monfleury 2', '1290', 'Versoix', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(211, 'SAUVAIN_CHARLY', 0, 'SAUVAIN Charly', 'SAUVAIN', 'Charly', 'Rue du Village 3', '1214', 'Vernier', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(212, 'SAUVAIN_Mme', 0, 'SAUVAIN Christiane', 'SAUVAIN', 'Christiane', 'Rue du Village 3', '1214', 'Vernier', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(213, 'SAUVET', 0, 'SAUVET Olivier', 'SAUVET', 'Olivier', 'Rue de l''Aubépine 13', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(214, 'SCHALTEGGER', 0, 'SCHALTEGGER Marguerite', 'SCHALTEGGER', 'Marguerite', 'Chemin de Saule  71', '1233', 'Bernex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(215, 'SCHNEiDER', 0, 'SCHNEiDER André', 'SCHNEiDER', 'André', 'Chemin du Champs-d''Anier 8', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(216, 'SCHROETER', 0, 'SCHROETER Sonia', 'SCHROETER', 'Sonia', 'Avenue du Mail 20', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(217, 'SCHURMANN', 0, 'SCHURMANN Agnès', 'SCHURMANN', 'Agnès', 'Promenade de Champs-Fréchets 14', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(218, 'SCHWERI', 0, 'SCHWERI Ernest', 'SCHWERI', 'Ernest', 'Avenue de France 31', '1202', 'Genève', 'Suisse', '35.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(219, 'SCHWERZMANN', 0, 'SCHWERZMANN Simone', 'SCHWERZMANN', 'Simone', 'Rue des evaux 7', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(220, 'SEN', 0, 'SEN Omer', 'SEN', 'Omer', 'Avenue Frédéric-Soret 24', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(221, 'SHAHADAT', 0, 'SHAHADAT Naseerha', 'SHAHADAT', 'Naseerha', 'Cité Vieusseux  7', '1203', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(222, 'SICOVIER', 0, 'SICOVIER Ivan', 'SICOVIER', 'Ivan', 'Rue Chabrey 9', '1202', 'Genève', 'Suisse', '40.00', 'Domicile', 'Hôpital de La Tour, Hemodialyse', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(223, 'SICURANZA', 0, 'SICURANZA Norma', 'SICURANZA', 'Norma', 'Route de Colovray 4', '1218', 'Le Grand-Saconnex', 'Suisse', '40.00', 'Domicile', 'Dr Ilic, 4 rue Gourgas', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(224, 'SIEBERT', 0, 'SIEBERT Margit', 'SIEBERT', 'Margit', 'Avenue Soret 4', '1203', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(225, 'SOMMERHALDER', 0, 'SOMMERHALDER Anita', 'SOMMERHALDER', 'Anita', 'Avenue de Vaudagne 35', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(226, 'SORDAT', 0, 'SORDAT Olivier', 'SORDAT', 'Olivier', 'Chemin de la Traille 30', '1213', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(227, 'STOPFER', 0, 'STOPFER Hans', 'STOPFER', 'Hans', 'Rue louis-Favre 37', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(228, 'TALLEUX', 0, 'TALLEUX Denise', 'TALLEUX', 'Denise', 'Chemin De-La-Montagne 112', '1224', 'Chêne-Bougeries', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(229, 'THEVOZ', 0, 'THEVOZ Geneviève', 'THEVOZ', 'Geneviève', 'Rue Jean-Robert-Chouet 17', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(230, 'VM_Torello', 0, 'TORELLO Jacqueline', 'TORELLO', 'Jacqueline', 'Ch. Etienne-Chennaz 14', '1226', 'Thônex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(231, 'TOSCANO', 0, 'TOSCANO Sandro', 'TOSCANO', 'Sandro', 'Rue Moïse Duboule 31', '1209', 'Genève', 'Suisse', '40.00', NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(232, 'TRENTAZ', 0, 'TRENTAZ Georgette', 'TRENTAZ', 'Georgette', 'Rue du Grand-Pré 55', '1202', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(233, 'TZORTIS', 0, 'TZORTIS-WIEDMER Christiane Aline', 'TZORTIS-WIEDMER', 'Christiane Aline', 'Route de Chancy 42', '1213', 'Petit-Lancy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(234, 'VALLAT', 0, 'VALLAT Brigitte', 'VALLAT', 'Brigitte', 'Boulevard des Promenades 20', '1227', 'Carouge', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(235, 'VALLEPIN', 0, 'VALLEPIN Daniel', 'VALLEPIN', 'Daniel', 'Rue des Mésanges 6', '74160', 'Saint-Julien', 'France', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(236, 'VALLET', 0, 'VALLET Patricia', 'VALLET', 'Patricia', 'Avenue du Lignon 67', '1219', 'Le Lignon', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(237, 'VINCI', 0, 'VINCI Maria', 'VINCI', 'Maria', 'Chemin de Vi-Longe13', '1213', 'Onex', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(238, 'VUSICKI', 0, 'VUSICKI Nevenka', 'VUSICKI', 'Nevenka', 'Rroute Antoine-Martin 31A', '1234', 'Vessy', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(239, 'WASMER', 0, 'WASMER Rose-Marie', 'WASMER', 'Rose-Marie', 'Rue Le-Corbusier 21a', '1208', 'Genève', 'Suisse', '40.00', 'Domicile', 'Physio, 25 rue Jacques-Grosselin', 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(240, 'WEBER_F', 0, 'WEBER Francine', 'WEBER', 'Francine', 'Rue de Moillebeau 3A', '1209', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(241, 'WOOD', 0, 'WOOD Jonathan', 'WOOD', 'Jonathan', 'Quai Wilson 41', '1201', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(242, 'YERSIN', 0, 'YERSIN Pierre', 'YERSIN', 'Pierre', 'Chemin de Tré-la-Villa 40', '1236', 'Cartigny', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL),
(243, 'ZAKAR', 0, 'ZAKAR Thérèse', 'ZAKAR', 'Thérèse', 'Rue Du Bois-Melly 2', '1205', 'Genève', 'Suisse', NULL, NULL, NULL, 200, NULL, NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_programming`
--

DROP TABLE IF EXISTS `transport_programming`;
CREATE TABLE IF NOT EXISTS `transport_programming` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `validated_chauffeur` tinyint(1) NOT NULL DEFAULT '0',
  `validated_mgr` tinyint(1) NOT NULL DEFAULT '0',
  `validated_final` tinyint(1) NOT NULL DEFAULT '0',
  `course_date` date DEFAULT NULL,
  `model_id` int(11) unsigned DEFAULT NULL,
  `client_id` int(11) unsigned DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `pseudo_autres` varchar(50) DEFAULT NULL,
  `heure` varchar(5) NOT NULL,
  `aller_retour` varchar(20) NOT NULL DEFAULT 'AllerSimple',
  `chauffeur_id` int(11) unsigned DEFAULT NULL,
  `depart` varchar(70) DEFAULT NULL,
  `arrivee` varchar(70) DEFAULT NULL,
  `type_transport_id` int(11) unsigned NOT NULL,
  `nom_patient` varchar(60) DEFAULT NULL,
  `bon_no` varchar(60) DEFAULT NULL,
  `prix_course` decimal(10,2) DEFAULT '0.00',
  `remarque` text,
  `input_date` date DEFAULT NULL,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`,`chauffeur_id`,`type_transport_id`),
  KEY `transport_programming_ibfk_1` (`chauffeur_id`),
  KEY `transport_programming_ibfk_3` (`type_transport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transport_programming_model`
--

DROP TABLE IF EXISTS `transport_programming_model`;
CREATE TABLE IF NOT EXISTS `transport_programming_model` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `week_day_rank_id` tinyint(1) NOT NULL,
  `client_habituel` tinyint(1) DEFAULT '1',
  `client_id` int(11) unsigned DEFAULT NULL,
  `heure` varchar(5) NOT NULL,
  `inverse_address` tinyint(1) NOT NULL DEFAULT '0',
  `depart` varchar(70) DEFAULT NULL,
  `arrivee` varchar(70) DEFAULT NULL,
  `prix_course` decimal(10,2) DEFAULT '0.00',
  `chauffeur_id` int(11) unsigned NOT NULL,
  `type_transport_id` int(11) unsigned NOT NULL,
  `remarque` text,
  `input_date` date DEFAULT NULL,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`,`chauffeur_id`,`type_transport_id`),
  KEY `transport_programming_model_ibfk_1` (`chauffeur_id`),
  KEY `transport_programming_model_ibfk_3` (`type_transport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transport_type`
--

DROP TABLE IF EXISTS `transport_type`;
CREATE TABLE IF NOT EXISTS `transport_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_transport` varchar(50) NOT NULL,
  `input_date` date DEFAULT NULL,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_transport` (`type_transport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_type` varchar(60) DEFAULT NULL,
  `user_type_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL,
  `reset_token` varchar(70) DEFAULT NULL,
  `block_user` tinyint(1) NOT NULL DEFAULT '0',
  `unread_message` tinyint(11) NOT NULL DEFAULT '0',
  `unread_notification` tinyint(11) NOT NULL DEFAULT '0',
  `address` varchar(100) DEFAULT NULL,
  `cp` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_type_id` (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`, `nom`, `email`, `user_type`, `user_type_id`, `first_name`, `last_name`, `user_image`, `reset_token`, `block_user`, `unread_message`, `unread_notification`, `address`, `cp`, `city`, `country`, `phone`, `mobile`, `input_date`) VALUES
(1, 'admin', '$2y$10$YzYyN2U3MjBkNGQ4MTliOOYg0RfXSbg5pFOVsO1vOeEFamBhPdnYS', 'admin', 'webmaster@ikamy.ch', 'admin', 1, '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '2015-09-17 21:10:25'),
(2, 'kamy', '$2y$10$ZDJlYTI1OWU3NjA1ODYxZ.CcW4.WWIlMWs6qVo9KvgjjpaonJR0AC', 'Kamran Nafisspour', 'nafisspour@bluewin.ch', 'admin', 1, 'Kamran', 'Nafisspour', 'kamy01.JPG', 'dbd8cfa6a2f784bb4cfd4918270b315a', 0, 0, 0, '68 rue des Vollandes', '1207', 'Geneva', 'Switzerland', '+41 (22) 735 01 20', '+41 (22) 350 21 32', '2016-04-02 19:32:55'),
(3, 'pablo', '$2y$10$OGEwYmRkMjc5NTNhMTVhNeS9iamczbZH3ag9qt2EXM8EliS2UwUTO', 'Pablo Arza', 'transmed@bluewin.ch', 'employee', 4, NULL, NULL, '', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 21:10:25'),
(4, 'kamy333', '$2y$10$OTAyYzczMGNmMzI2Y2ZjN.faDoYq2/ZSaAK42684GEbpTJ2/Q2Lyq', 'Kamy Manager', 'kamy333@hotmail.com', 'manager', 2, NULL, NULL, '', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 21:10:25'),
(5, 'gmail', '$2y$10$MWU4N2E5MDcwNDRjYjM1Mu2URCsGI9fUp9JCdmPZCX1cYOlmzeu5O', 'Kamy employee', 'kamran.nafisspour@gmail.com', 'visitor', 5, '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '2015-09-17 21:10:25'),
(6, 'test', '$2y$10$MTI5OWUyNzdiYWEzMjJjO.aOmJYfHzX0QikejYi8qxnA6NrEIGp3q', 'test test', 'test@me.com', 'visitor', 5, 'test', 'test', '', '', 0, 0, 0, '', '', '', '', '', '', '2016-04-13 07:37:41'),
(28, 'Captainbraliaji', '$2y$10$N2VkNDA0MTFmMzNlMzRhO.hmpjFsd5KAdXd9MNKP80BX5l1Y0yzj2', 'Bralia Bral', 'bralia@wanadoo.fr', 'visitor', 5, 'Bralia', 'Bral', 'bralia.PNG', '', 0, 0, 0, '', '', '', '', '', '', '2016-05-26 19:05:47'),
(42, 'massoud', '$2y$10$YmJjZWEzNTkwMWY0MDgxOOPPR/zI3lY3FiVaL9NUK4baWVTY8kvQm', 'Massoud Refoa', 'massoudr206@gmail.com', 'visitor', 5, 'Massoud', 'Refoa', '', '', 0, 0, 0, '', '', '', '', '', '', '2016-07-01 23:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) NOT NULL,
  `comment` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_type` (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`, `comment`) VALUES
(1, 'admin', NULL),
(2, 'manager', NULL),
(3, 'secretary', NULL),
(4, 'employee', NULL),
(5, 'visitor', NULL),
(6, 'chauffeur', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`category_1_id`) REFERENCES `category_1` (`id`),
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`category_2_id`) REFERENCES `category_2` (`id`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_actual`
--
ALTER TABLE `invoice_actual`
  ADD CONSTRAINT `invoice_actual_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `invoice_actual_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `invoice_estimate`
--
ALTER TABLE `invoice_estimate`
  ADD CONSTRAINT `invoice_estimate_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `invoice_estimate_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `invoice_send`
--
ALTER TABLE `invoice_send`
  ADD CONSTRAINT `invoice_send_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `links_category` (`id`);

--
-- Constraints for table `myexpense`
--
ALTER TABLE `myexpense`
  ADD CONSTRAINT `ifbk1_myexpense` FOREIGN KEY (`ccy_id`) REFERENCES `currency` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `transport_programming`
--
ALTER TABLE `transport_programming`
  ADD CONSTRAINT `transport_programming_ibfk_3` FOREIGN KEY (`type_transport_id`) REFERENCES `transport_type` (`id`),
  ADD CONSTRAINT `transport_programming_ibfk_1` FOREIGN KEY (`chauffeur_id`) REFERENCES `transport_chauffeurs` (`id`),
  ADD CONSTRAINT `transport_programming_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `transport_clients` (`id`);

--
-- Constraints for table `transport_programming_model`
--
ALTER TABLE `transport_programming_model`
  ADD CONSTRAINT `transport_programming_model_ibfk_3` FOREIGN KEY (`type_transport_id`) REFERENCES `transport_type` (`id`),
  ADD CONSTRAINT `transport_programming_model_ibfk_1` FOREIGN KEY (`chauffeur_id`) REFERENCES `transport_chauffeurs` (`id`),
  ADD CONSTRAINT `transport_programming_model_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `transport_clients` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
