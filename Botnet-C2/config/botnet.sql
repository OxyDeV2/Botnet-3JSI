-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 04 jan. 2023 à 14:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `botnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin_C2`
--

CREATE TABLE `Admin_C2` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(25) DEFAULT NULL,
  `hash_password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Admin_C2`
--

INSERT INTO `Admin_C2` (`id_admin`, `login`, `hash_password`) VALUES
(1, 'admin', '$2y$10$e4l8fpA14.KVyaLkSkpNTe1XZFvO.rfRpXKKL1bX9bSzaZ8VX/QmK');

-- --------------------------------------------------------

--
-- Structure de la table `Adresse`
--

CREATE TABLE `Adresse` (
  `id_adresse` int(11) NOT NULL,
  `rue` varchar(25) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `ville` varchar(25) DEFAULT NULL,
  `id_pays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Attaque`
--

CREATE TABLE `Attaque` (
  `id_attaque` int(11) NOT NULL,
  `attaque_possible` varchar(25) DEFAULT NULL,
  `est_attaque_zombie` tinyint(1) NOT NULL,
  `description` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Attaque`
--

INSERT INTO `Attaque` (`id_attaque`, `attaque_possible`, `est_attaque_zombie`, `description`) VALUES
(1, 'Autorun', 1, 'Rendre indisponible.'),
(2, 'Forkbomb', 1, NULL),
(3, 'Song', 1, NULL),
(4, 'Shutdown', 1, NULL),
(5, 'Restart', 1, NULL),
(6, 'Lock', 1, NULL),
(7, 'Logoff', 1, NULL),
(9, 'Encrypt', 1, NULL),
(10, 'DDOS_TCP', 0, NULL),
(11, 'DDOS_UDP', 0, NULL),
(12, 'Hardcollect', 1, NULL),
(13, 'Delprefetch', 1, NULL),
(14, 'Delfile', 1, NULL),
(15, 'File_stealing', 1, NULL),
(17, 'Image', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `attaque_cible`
--

CREATE TABLE `attaque_cible` (
  `id_machine` int(11) NOT NULL,
  `id_historique_attaque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `attaque_cible`
--

INSERT INTO `attaque_cible` (`id_machine`, `id_historique_attaque`) VALUES
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 138),
(2, 122),
(2, 123),
(2, 139),
(3, 233),
(3, 235),
(3, 237),
(3, 239),
(5, 140),
(5, 141),
(5, 142),
(5, 143),
(5, 144),
(5, 145),
(5, 146),
(5, 147),
(5, 148),
(5, 149),
(5, 150),
(5, 151),
(5, 152),
(5, 153),
(5, 154),
(5, 155),
(5, 156),
(5, 157),
(5, 158),
(5, 159),
(5, 160),
(5, 161),
(5, 162),
(5, 163),
(5, 164),
(5, 165),
(5, 166),
(5, 167),
(5, 168),
(5, 169),
(5, 170),
(5, 171),
(5, 172),
(5, 173),
(5, 174),
(5, 175),
(5, 176),
(5, 177),
(5, 178),
(5, 179),
(5, 180),
(5, 181),
(5, 182),
(5, 183),
(5, 184),
(5, 185),
(5, 186),
(5, 187),
(5, 188),
(5, 189),
(5, 190),
(5, 191),
(5, 192),
(5, 193),
(5, 194),
(5, 195),
(5, 196),
(5, 197),
(5, 198),
(5, 199),
(5, 200),
(5, 201),
(5, 202),
(5, 203),
(5, 204),
(5, 205),
(5, 206),
(5, 207),
(5, 208),
(5, 209),
(5, 210),
(5, 214),
(5, 215),
(5, 216),
(5, 217),
(5, 218),
(5, 223),
(5, 224),
(5, 234),
(5, 236),
(5, 238),
(5, 240),
(5, 241),
(5, 242),
(5, 246),
(5, 247),
(5, 248),
(5, 249),
(5, 250),
(5, 251),
(5, 255),
(5, 256),
(5, 258),
(5, 259),
(5, 260),
(5, 261),
(5, 262),
(5, 263),
(5, 264),
(5, 265),
(5, 266),
(5, 267),
(5, 268),
(5, 269),
(5, 270),
(5, 271),
(5, 272),
(5, 273),
(5, 274),
(5, 275),
(5, 276),
(5, 277),
(5, 278),
(5, 279),
(5, 280),
(5, 281),
(5, 282),
(5, 283),
(5, 284),
(5, 285),
(5, 286),
(5, 287),
(5, 288),
(5, 289),
(5, 290),
(5, 291),
(5, 292),
(5, 293),
(5, 294),
(5, 295),
(5, 296),
(5, 297),
(5, 298),
(5, 299),
(5, 300),
(5, 301),
(5, 302),
(5, 303),
(5, 304),
(5, 305),
(5, 306),
(5, 307),
(5, 308),
(5, 309),
(5, 310),
(5, 311),
(5, 312),
(5, 313),
(5, 314),
(5, 315),
(5, 316),
(5, 317),
(5, 318),
(5, 319),
(5, 320),
(5, 321),
(5, 322),
(5, 323),
(5, 324),
(5, 325),
(5, 327),
(5, 329),
(5, 330),
(5, 332),
(5, 334),
(5, 335),
(5, 336),
(5, 338),
(5, 340),
(6, 326),
(6, 328),
(6, 331),
(6, 333),
(6, 337),
(6, 339),
(6, 341);

-- --------------------------------------------------------

--
-- Structure de la table `Fichier`
--

CREATE TABLE `Fichier` (
  `id_fichier` int(11) NOT NULL,
  `nom_fichier` varchar(65) NOT NULL,
  `lien_fichier` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `date_collecte` date DEFAULT NULL,
  `id_machine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Fichier`
--

INSERT INTO `Fichier` (`id_fichier`, `nom_fichier`, `lien_fichier`, `format`, `date_collecte`, `id_machine`) VALUES
(2, 'logo.png', 'images/logo.png', 'png', '2023-01-03', 1),
(3, 'photo_de_profil.png', '/images/photo_de_profil.png', 'png', '2023-01-02', 5),
(4, 'musique_inox.mp4', '/audios/musique_inox.mp4', 'mp4', '2023-01-01', 5),
(5, 'botnet-image.png', '/images/botnet-image.png', 'png', '2023-01-02', 5),
(6, 'ccna1', 'pdf/ccna1.pdf', 'pdf', '2023-01-02', 1),
(7, 'M2BIM-sem1\r\n', '/pdf/M2BIM-sem1.pdf\n', 'pdf', '2022-12-30', 2);

-- --------------------------------------------------------

--
-- Structure de la table `historique_attaque`
--

CREATE TABLE `historique_attaque` (
  `id_historique_attaque` int(11) NOT NULL,
  `date_attaque` date DEFAULT NULL,
  `temps_attaque` time DEFAULT NULL,
  `status_attaque` varchar(10) DEFAULT NULL,
  `cible` tinyint(1) DEFAULT NULL,
  `id_attaque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `historique_attaque`
--

INSERT INTO `historique_attaque` (`id_historique_attaque`, `date_attaque`, `temps_attaque`, `status_attaque`, `cible`, `id_attaque`) VALUES
(109, '2023-01-03', NULL, 'FINIE', 1, 1),
(110, '2023-01-04', NULL, 'FINIE', 1, 1),
(111, '2023-01-04', NULL, 'FINIE', 1, 1),
(112, '2023-01-04', NULL, 'FINIE', 1, 1),
(113, '2023-01-04', NULL, 'FINIE', 1, 1),
(114, '2023-01-04', NULL, 'FINIE', 1, 1),
(115, '2023-01-04', NULL, 'FINIE', 1, 1),
(116, '2023-01-04', NULL, 'FINIE', 1, 1),
(117, '2023-01-04', NULL, 'FINIE', 1, 1),
(118, '2023-01-04', NULL, 'FINIE', 1, 1),
(119, '2023-01-04', NULL, 'FINIE', 1, 1),
(120, '2023-01-04', NULL, 'FINIE', 1, 1),
(121, '2023-01-04', NULL, 'FINIE', 1, 1),
(122, '2023-01-04', NULL, 'FINIE', 1, 1),
(123, '2023-01-04', NULL, 'FINIE', 1, 1),
(124, '2022-12-27', NULL, 'FINIE', 0, 10),
(125, '2022-12-27', NULL, 'FINIE', 0, 10),
(126, '2022-12-27', NULL, 'FINIE', 0, 10),
(127, '2022-12-27', NULL, 'FINIE', 0, 10),
(128, '2022-12-27', NULL, 'FINIE', 0, 10),
(129, '2023-01-01', NULL, 'FINIE', 1, 9),
(130, '2023-01-01', NULL, 'FINIE', 1, 9),
(131, '2023-01-01', NULL, 'FINIE', 1, 9),
(132, '2023-01-01', NULL, 'FINIE', 1, 9),
(133, '2023-02-01', NULL, 'FINIE', 1, 9),
(134, '2022-12-23', NULL, 'FINIE', 1, 4),
(137, '2023-02-01', NULL, 'FINIE', 1, 9),
(138, '2023-01-04', NULL, 'FINIE', 1, 1),
(139, '2023-01-04', NULL, 'FINIE', 1, 1),
(140, '2023-01-04', NULL, 'FINIE', 1, 1),
(141, '2023-01-04', NULL, 'FINIE', 1, 1),
(142, '2023-01-04', NULL, 'FINIE', 1, 1),
(143, '2023-01-04', NULL, 'FINIE', 1, 1),
(144, '2023-01-04', NULL, 'FINIE', 1, 1),
(145, '2023-01-04', NULL, 'FINIE', 1, 1),
(146, '2023-01-04', NULL, 'FINIE', 1, 1),
(147, '2023-01-04', NULL, 'FINIE', 1, 1),
(148, '2023-01-04', NULL, 'FINIE', 1, 1),
(149, '2023-01-04', NULL, 'FINIE', 1, 1),
(150, '2023-01-04', NULL, 'FINIE', 1, 1),
(151, '2023-01-04', NULL, 'FINIE', 1, 1),
(152, '2023-01-04', NULL, 'FINIE', 1, 1),
(153, '2023-01-04', NULL, 'FINIE', 1, 1),
(154, '2023-01-04', NULL, 'FINIE', 1, 1),
(155, '2023-01-04', NULL, 'FINIE', 1, 1),
(156, '2023-01-04', NULL, 'FINIE', 1, 1),
(157, '2023-01-04', NULL, 'FINIE', 1, 1),
(158, '2023-01-04', NULL, 'FINIE', 1, 1),
(159, '2023-01-04', NULL, 'FINIE', 1, 1),
(160, '2023-01-04', NULL, 'FINIE', 1, 17),
(161, '2023-01-04', NULL, 'FINIE', 1, 17),
(162, '2023-01-04', NULL, 'FINIE', 1, 1),
(163, '2023-01-04', NULL, 'FINIE', 1, 6),
(164, '2023-01-04', NULL, 'FINIE', 1, 7),
(165, '2023-01-04', NULL, 'FINIE', 1, 6),
(166, '2023-01-04', NULL, 'FINIE', 1, 3),
(167, '2023-01-04', NULL, 'FINIE', 1, 5),
(168, '2023-01-04', NULL, 'FINIE', 1, 7),
(169, '2023-01-04', NULL, 'FINIE', 1, 5),
(170, '2023-01-04', NULL, 'FINIE', 1, 17),
(171, '2023-01-04', NULL, 'FINIE', 1, 5),
(172, '2023-01-04', NULL, 'FINIE', 1, 17),
(173, '2023-01-04', NULL, 'FINIE', 1, 17),
(174, '2023-01-04', NULL, 'FINIE', 1, 17),
(175, '2023-01-04', NULL, 'FINIE', 1, 17),
(176, '2023-01-04', NULL, 'FINIE', 1, 5),
(177, '2023-01-04', NULL, 'FINIE', 1, 5),
(178, '2023-01-04', NULL, 'FINIE', 1, 17),
(179, '2023-01-04', NULL, 'FINIE', 1, 2),
(180, '2023-01-04', NULL, 'FINIE', 1, 17),
(181, '2023-01-04', NULL, 'FINIE', 1, 17),
(182, '2023-01-04', NULL, 'FINIE', 1, 17),
(183, '2023-01-04', NULL, 'FINIE', 1, 1),
(184, '2023-01-04', NULL, 'FINIE', 1, 17),
(185, '2023-01-04', NULL, 'FINIE', 1, 13),
(186, '2023-01-04', NULL, 'FINIE', 1, 9),
(187, '2023-01-04', NULL, 'FINIE', 1, 9),
(188, '2023-01-04', NULL, 'FINIE', 1, 2),
(189, '2023-01-04', NULL, 'FINIE', 1, 2),
(190, '2023-01-04', NULL, 'FINIE', 1, 3),
(191, '2023-01-04', NULL, 'FINIE', 1, 3),
(192, '2023-01-04', NULL, 'FINIE', 1, 17),
(193, '2023-01-04', NULL, 'FINIE', 1, 13),
(194, '2023-01-04', NULL, 'FINIE', 1, 17),
(195, '2023-01-04', NULL, 'FINIE', 1, 6),
(196, '2023-01-04', NULL, 'FINIE', 1, 3),
(197, '2023-01-04', NULL, 'FINIE', 1, 2),
(198, '2023-01-04', NULL, 'FINIE', 1, 7),
(199, '2023-01-04', NULL, 'FINIE', 1, 5),
(200, '2023-01-04', NULL, 'FINIE', 1, 17),
(201, '2023-01-04', NULL, 'FINIE', 1, 6),
(202, '2023-01-04', NULL, 'FINIE', 1, 7),
(203, '2023-01-04', NULL, 'FINIE', 1, 3),
(204, '2023-01-04', NULL, 'FINIE', 1, 5),
(205, '2023-01-04', NULL, 'FINIE', 1, 5),
(206, '2023-01-04', NULL, 'FINIE', 1, 17),
(207, '2023-01-04', NULL, 'FINIE', 1, 5),
(208, '2023-01-04', NULL, 'FINIE', 1, 5),
(209, '2023-01-04', NULL, 'FINIE', 1, 5),
(210, '2023-01-04', NULL, 'FINIE', 1, 6),
(211, '2023-01-04', NULL, 'FINIE', 1, 10),
(212, '2023-01-04', NULL, 'FINIE', 1, 10),
(213, '2023-01-04', NULL, 'FINIE', 1, 11),
(214, '2023-01-04', '07:36:23', 'FINIE', 1, 17),
(215, '2023-01-04', '07:36:40', 'FINIE', 1, 6),
(216, '2023-01-04', '07:37:02', 'FINIE', 1, 5),
(217, '2023-01-04', '08:03:55', 'FINIE', 1, 17),
(218, '2023-01-04', '08:04:20', 'FINIE', 1, 17),
(219, '2023-01-04', '08:07:37', 'FINIE', 0, 10),
(220, '2023-01-04', '08:09:32', 'FINIE', 0, 10),
(221, '2023-01-04', '08:10:15', 'FINIE', 0, 10),
(222, '2023-01-04', '08:10:20', 'FINIE', 0, 10),
(223, '2023-01-04', '08:10:37', 'FINIE', 1, 17),
(224, '2023-01-04', '08:10:47', 'FINIE', 1, 6),
(225, '2023-01-04', '08:15:41', 'FINIE', 0, 1),
(226, '2023-01-04', '08:15:48', 'FINIE', 0, 1),
(227, '2023-01-04', '08:19:14', 'FINIE', 0, 1),
(228, '2023-01-04', '08:20:20', 'FINIE', 0, 1),
(229, '2023-01-04', '08:21:25', 'FINIE', 0, 1),
(230, '2023-01-04', '08:21:42', 'FINIE', 0, 1),
(231, '2023-01-04', '08:22:31', 'FINIE', 0, 1),
(232, '2023-01-04', '08:23:36', 'FINIE', 0, 1),
(233, '2023-01-04', '09:00:36', 'FINIE', 0, 1),
(234, '2023-01-04', '09:00:36', 'FINIE', 0, 1),
(235, '2023-01-04', '09:00:44', 'FINIE', 0, 1),
(236, '2023-01-04', '09:00:44', 'FINIE', 0, 1),
(237, '2023-01-04', '09:00:53', 'FINIE', 0, 1),
(238, '2023-01-04', '09:00:53', 'FINIE', 0, 1),
(239, '2023-01-04', '09:01:02', 'FINIE', 0, 1),
(240, '2023-01-04', '09:01:02', 'FINIE', 0, 1),
(241, '2023-01-04', '09:04:51', 'FINIE', 0, 14),
(242, '2023-01-04', '09:05:03', 'FINIE', 0, 13),
(243, '2023-01-04', '09:05:11', 'FINIE', 0, 9),
(244, '2023-01-04', '09:05:19', 'FINIE', 0, 9),
(245, '2023-01-04', '09:05:59', 'FINIE', 0, 17),
(246, '2023-01-04', '09:10:01', 'FINIE', 0, 1),
(247, '2023-01-04', '09:10:12', 'FINIE', 0, 14),
(248, '2023-01-04', '09:10:19', 'FINIE', 0, 13),
(249, '2023-01-04', '09:10:32', 'FINIE', 1, 9),
(250, '2023-01-04', '09:29:14', 'FINIE', 0, 10),
(251, '2023-01-04', '09:30:03', 'FINIE', 0, 10),
(252, '2023-01-04', '09:30:03', 'FINIE', 0, 10),
(253, '2023-01-04', '09:31:33', 'FINIE', 0, 10),
(254, '2023-01-04', '09:31:59', 'FINIE', 0, 10),
(255, '2023-01-04', '10:05:38', 'FINIE', 1, 13),
(256, '2023-01-04', '10:07:50', 'FINIE', 1, 1),
(257, '2023-01-04', '10:10:01', 'FINIE', 1, 2),
(258, '2023-01-04', '10:11:13', 'FINIE', 1, 17),
(259, '2023-01-04', '10:11:32', 'FINIE', 1, 17),
(260, '2023-01-04', '10:12:36', 'FINIE', 1, 17),
(261, '2023-01-04', '10:12:47', 'FINIE', 1, 6),
(262, '2023-01-04', '10:13:52', 'FINIE', 1, 5),
(263, '2023-01-04', '10:14:52', 'FINIE', 1, 17),
(264, '2023-01-04', '10:15:12', 'FINIE', 1, 17),
(265, '2023-01-04', '10:15:36', 'FINIE', 1, 17),
(266, '2023-01-04', '10:15:48', 'FINIE', 1, 6),
(267, '2023-01-04', '10:16:18', 'FINIE', 0, 1),
(268, '2023-01-04', '10:16:29', 'FINIE', 0, 17),
(269, '2023-01-04', '10:16:44', 'FINIE', 0, 10),
(270, '2023-01-04', '10:20:24', 'FINIE', 1, 5),
(271, '2023-01-04', '10:22:28', 'FINIE', 1, 3),
(272, '2023-01-04', '10:49:41', 'FINIE', 1, 17),
(273, '2023-01-04', '10:50:03', 'FINIE', 1, 6),
(274, '2023-01-04', '10:51:03', 'FINIE', 1, 17),
(275, '2023-01-04', '10:51:19', 'FINIE', 1, 3),
(276, '2023-01-04', '10:55:00', 'FINIE', 1, 17),
(277, '2023-01-04', '10:55:17', 'FINIE', 1, 5),
(278, '2023-01-04', '10:56:29', 'FINIE', 1, 6),
(279, '2023-01-04', '10:56:46', 'FINIE', 1, 1),
(280, '2023-01-04', '11:01:34', 'FINIE', 0, 10),
(281, '2023-01-04', '11:02:57', 'FINIE', 1, 17),
(282, '2023-01-04', '11:07:39', 'FINIE', 1, 6),
(283, '2023-01-04', '11:07:48', 'FINIE', 1, 17),
(284, '2023-01-04', '11:08:58', 'FINIE', 0, 3),
(285, '2023-01-04', '11:10:10', 'FINIE', 1, 17),
(286, '2023-01-04', '11:10:21', 'FINIE', 0, 11),
(287, '2023-01-04', '11:12:37', 'FINIE', 0, 11),
(288, '2023-01-04', '11:14:37', 'FINIE', 0, 10),
(289, '2023-01-04', '11:14:44', 'FINIE', 0, 17),
(290, '2023-01-04', '11:14:58', 'FINIE', 0, 17),
(291, '2023-01-04', '11:16:00', 'FINIE', 0, 10),
(292, '2023-01-04', '11:16:19', 'FINIE', 0, 10),
(293, '2023-01-04', '11:16:30', 'FINIE', 0, 17),
(294, '2023-01-04', '11:16:39', 'FINIE', 1, 17),
(295, '2023-01-04', '11:16:53', 'FINIE', 1, 17),
(296, '2023-01-04', '11:18:53', 'FINIE', 1, 17),
(297, '2023-01-04', '11:21:04', 'FINIE', 1, 17),
(298, '2023-01-04', '11:21:21', 'FINIE', 0, 11),
(299, '2023-01-04', '11:22:08', 'FINIE', 0, 11),
(300, '2023-01-04', '11:22:29', 'FINIE', 1, 6),
(301, '2023-01-04', '11:26:02', 'FINIE', 1, 7),
(302, '2023-01-04', '11:26:19', 'FINIE', 1, 6),
(303, '2023-01-04', '11:27:22', 'FINIE', 1, 6),
(304, '2023-01-04', '11:33:06', 'FINIE', 1, 17),
(305, '2023-01-04', '11:33:24', 'FINIE', 1, 7),
(306, '2023-01-04', '11:33:33', 'FINIE', 1, 17),
(307, '2023-01-04', '11:35:29', 'FINIE', 1, 17),
(308, '2023-01-04', '11:35:39', 'FINIE', 1, 17),
(309, '2023-01-04', '11:36:19', 'FINIE', 1, 17),
(310, '2023-01-04', '11:36:32', 'FINIE', 1, 6),
(311, '2023-01-04', '11:36:39', 'FINIE', 1, 17),
(312, '2023-01-04', '11:36:58', 'FINIE', 0, 3),
(313, '2023-01-04', '11:37:19', 'EN COURS', 0, 11),
(314, '2023-01-04', '11:37:52', 'EN COURS', 0, 11),
(315, '2023-01-04', '11:40:11', 'FINIE', 1, 17),
(316, '2023-01-04', '11:44:09', 'FINIE', 1, 5),
(317, '2023-01-04', '11:44:43', 'FINIE', 1, 17),
(318, '2023-01-04', '11:45:20', 'FINIE', 1, 17),
(319, '2023-01-04', '11:46:02', 'FINIE', 1, 17),
(320, '2023-01-04', '11:46:42', 'FINIE', 1, 17),
(321, '2023-01-04', '11:46:50', 'FINIE', 1, 17),
(322, '2023-01-04', '11:51:35', 'FINIE', 1, 17),
(323, '2023-01-04', '11:52:12', 'FINIE', 1, 17),
(324, '2023-01-04', '11:52:39', 'FINIE', 1, 17),
(325, '2023-01-04', '11:54:20', 'FINIE', 0, 17),
(326, '2023-01-04', '11:54:22', 'FINIE', 0, 17),
(327, '2023-01-04', '11:54:22', 'FINIE', 0, 17),
(328, '2023-01-04', '11:54:22', 'FINIE', 0, 17),
(329, '2023-01-04', '11:54:52', 'FINIE', 1, 17),
(330, '2023-01-04', '11:55:08', 'FINIE', 0, 17),
(331, '2023-01-04', '11:55:08', 'FINIE', 0, 17),
(332, '2023-01-04', '11:56:30', 'FINIE', 0, 17),
(333, '2023-01-04', '11:56:31', 'FINIE', 0, 17),
(334, '2023-01-04', '12:24:17', 'FINIE', 1, 17),
(335, '2023-01-04', '12:24:45', 'FINIE', 1, 6),
(336, '2023-01-04', '12:25:06', 'FINIE', 0, 3),
(337, '2023-01-04', '12:25:08', 'FINIE', 0, 3),
(338, '2023-01-04', '12:25:08', 'FINIE', 0, 3),
(339, '2023-01-04', '12:25:08', 'FINIE', 0, 3),
(340, '2023-01-04', '12:25:24', 'EN COURS', 0, 11),
(341, '2023-01-04', '12:25:24', 'EN COURS', 0, 11);

-- --------------------------------------------------------

--
-- Structure de la table `Machine`
--

CREATE TABLE `Machine` (
  `id_machine` int(11) NOT NULL,
  `hostname` varchar(25) DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `mac` varchar(25) DEFAULT NULL,
  `login_` varchar(45) DEFAULT NULL,
  `passwd` varchar(80) DEFAULT NULL,
  `hash_password` varchar(100) DEFAULT NULL,
  `est_on` tinyint(1) DEFAULT NULL,
  `id_OS` int(11) NOT NULL,
  `id_malware_botnet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Machine`
--

INSERT INTO `Machine` (`id_machine`, `hostname`, `ip`, `mac`, `login_`, `passwd`, `hash_password`, `est_on`, `id_OS`, `id_malware_botnet`) VALUES
(1, 'PC-1', '192.168.1.51', '00:1B:44:11:3A:B8	', 'PC-1', 'PC-1', NULL, 0, 1, 1),
(2, 'PC-2', '192.168.1.52', '00:1B:44:11:3A:B8', 'PC-2', 'PC-2', NULL, 0, 1, 1),
(3, 'PC-3', '192.168.1.40', 'D4-FB-6A-7C-31-B4', 'PC-3', 'PC-3', NULL, 0, 1, 1),
(4, 'PC-4', '192.168.1.41', 'D4-FB-6B-7C-31-B4', 'PC-4', 'PC-4', NULL, NULL, 1, 1),
(5, 'Demo', '10.33.5.62', '2C-89-6A-4A-41-E0', 'Demo', 'Demo', NULL, 1, 1, 1),
(6, 'Demo2', '10.33.3.216', NULL, 'Demo2', 'Demo2', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Malware_Botnet`
--

CREATE TABLE `Malware_Botnet` (
  `id_malware_botnet` int(11) NOT NULL,
  `version_malware` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Malware_Botnet`
--

INSERT INTO `Malware_Botnet` (`id_malware_botnet`, `version_malware`) VALUES
(1, '1.0');

-- --------------------------------------------------------

--
-- Structure de la table `OS`
--

CREATE TABLE `OS` (
  `id_OS` int(11) NOT NULL,
  `OS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `OS`
--

INSERT INTO `OS` (`id_OS`, `OS`) VALUES
(2, 'Linux'),
(3, 'MacOS'),
(1, 'Windows');

-- --------------------------------------------------------

--
-- Structure de la table `Pays`
--

CREATE TABLE `Pays` (
  `id_pays` int(11) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `alpha2` varchar(3) DEFAULT NULL,
  `alpha3` varchar(4) DEFAULT NULL,
  `nom_fr_fr` varchar(30) DEFAULT NULL,
  `nom_en_gb` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Admin_C2`
--
ALTER TABLE `Admin_C2`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `login` (`login`,`hash_password`);

--
-- Index pour la table `Adresse`
--
ALTER TABLE `Adresse`
  ADD PRIMARY KEY (`id_adresse`),
  ADD KEY `FK_Adresse_id_pays` (`id_pays`);

--
-- Index pour la table `Attaque`
--
ALTER TABLE `Attaque`
  ADD PRIMARY KEY (`id_attaque`),
  ADD UNIQUE KEY `attaque_possible` (`attaque_possible`,`description`);

--
-- Index pour la table `attaque_cible`
--
ALTER TABLE `attaque_cible`
  ADD PRIMARY KEY (`id_machine`,`id_historique_attaque`),
  ADD KEY `FK_attaque_cible_id_historique_attaque` (`id_historique_attaque`);

--
-- Index pour la table `Fichier`
--
ALTER TABLE `Fichier`
  ADD PRIMARY KEY (`id_fichier`),
  ADD UNIQUE KEY `url` (`lien_fichier`),
  ADD KEY `FK_Fichier_id_machine` (`id_machine`);

--
-- Index pour la table `historique_attaque`
--
ALTER TABLE `historique_attaque`
  ADD PRIMARY KEY (`id_historique_attaque`),
  ADD KEY `FK_historique_attaque_id_attaque` (`id_attaque`);

--
-- Index pour la table `Machine`
--
ALTER TABLE `Machine`
  ADD PRIMARY KEY (`id_machine`),
  ADD KEY `FK_Machine_id_OS` (`id_OS`),
  ADD KEY `FK_Machine_id_malware_botnet` (`id_malware_botnet`);

--
-- Index pour la table `Malware_Botnet`
--
ALTER TABLE `Malware_Botnet`
  ADD PRIMARY KEY (`id_malware_botnet`);

--
-- Index pour la table `OS`
--
ALTER TABLE `OS`
  ADD PRIMARY KEY (`id_OS`),
  ADD UNIQUE KEY `OS` (`OS`);

--
-- Index pour la table `Pays`
--
ALTER TABLE `Pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Admin_C2`
--
ALTER TABLE `Admin_C2`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Adresse`
--
ALTER TABLE `Adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Attaque`
--
ALTER TABLE `Attaque`
  MODIFY `id_attaque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `Fichier`
--
ALTER TABLE `Fichier`
  MODIFY `id_fichier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `historique_attaque`
--
ALTER TABLE `historique_attaque`
  MODIFY `id_historique_attaque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT pour la table `Machine`
--
ALTER TABLE `Machine`
  MODIFY `id_machine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Malware_Botnet`
--
ALTER TABLE `Malware_Botnet`
  MODIFY `id_malware_botnet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `OS`
--
ALTER TABLE `OS`
  MODIFY `id_OS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Pays`
--
ALTER TABLE `Pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Adresse`
--
ALTER TABLE `Adresse`
  ADD CONSTRAINT `FK_Adresse_id_pays` FOREIGN KEY (`id_pays`) REFERENCES `Pays` (`id_pays`);

--
-- Contraintes pour la table `attaque_cible`
--
ALTER TABLE `attaque_cible`
  ADD CONSTRAINT `FK_attaque_cible_id_historique_attaque` FOREIGN KEY (`id_historique_attaque`) REFERENCES `historique_attaque` (`id_historique_attaque`),
  ADD CONSTRAINT `FK_attaque_cible_id_machine` FOREIGN KEY (`id_machine`) REFERENCES `Machine` (`id_machine`);

--
-- Contraintes pour la table `Fichier`
--
ALTER TABLE `Fichier`
  ADD CONSTRAINT `FK_Fichier_id_machine` FOREIGN KEY (`id_machine`) REFERENCES `Machine` (`id_machine`);

--
-- Contraintes pour la table `historique_attaque`
--
ALTER TABLE `historique_attaque`
  ADD CONSTRAINT `FK_historique_attaque_id_attaque` FOREIGN KEY (`id_attaque`) REFERENCES `Attaque` (`id_attaque`);

--
-- Contraintes pour la table `Machine`
--
ALTER TABLE `Machine`
  ADD CONSTRAINT `FK_Machine_id_OS` FOREIGN KEY (`id_OS`) REFERENCES `OS` (`id_OS`),
  ADD CONSTRAINT `FK_Machine_id_malware_botnet` FOREIGN KEY (`id_malware_botnet`) REFERENCES `Malware_Botnet` (`id_malware_botnet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
