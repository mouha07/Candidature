-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Octobre 2021 à 08:24
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ussein_candidature`
--

-- --------------------------------------------------------

--
-- Structure de la table `ec_admin`
--

CREATE TABLE `ec_admin` (
  `mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ec_candidat`
--

CREATE TABLE `ec_candidat` (
  `mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ec_commentmeta`
--

CREATE TABLE `ec_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_comments`
--

CREATE TABLE `ec_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_comments`
--

INSERT INTO `ec_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href="https://gravatar.com">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_connexion`
--

CREATE TABLE `ec_connexion` (
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `date_de_naissance` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_connexion`
--

INSERT INTO `ec_connexion` (`prenom`, `nom`, `mail`, `mot_de_passe`, `telephone`, `date_de_naissance`, `status`, `genre`, `adresse`, `image`) VALUES
('Mouhamadou', 'DIALLO', 'mouhamadou.diallo@etu.ussein.edu.sn', '1234', '', '', 0, '', '', 'image_candidat.jpg'),
('al housseynou', 'niang', 'alouzz123@gmail.com', '1234', '', '', 5, '', '', ''),
('Mouhamadou', 'DIALLO', 'diallomouha007@gmail.com', '1234', '', '', 0, '', '', ''),
('Mamadou Yaya', 'Mane', 'manemamadouyaya@gmail.com', 'root', '770000123', '1999-09-19', 0, 'Masculin', 'Cite comico 4 de Yeumbeul villa d123', 'image_candidat.png'),
('Al', 'Niang', 'alouzz@gmail.com', '123', '+221771', '2021-08-30', 1, 'neant', 'neant', ''),
('DR DIOP', 'diop', 'dio@Mmail.com', '123', '77', '01-01-2000', 2, 'h', 'neant', 'neant'),
('Moussa', 'Ndiaye', 'moussa@gmail.com', '1234', '777777777', '2021-10-13', 2, 'neant', '3;4;', '');

-- --------------------------------------------------------

--
-- Structure de la table `ec_dossier`
--

CREATE TABLE `ec_dossier` (
  `nom_fichier` text NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `lien` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_dossier`
--

INSERT INTO `ec_dossier` (`nom_fichier`, `auteur`, `lien`) VALUES
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('autre_fichier.pdf', 'manemamadouyaya@gmail.com', ''),
('cv.pdf', 'manemamadouyaya@gmail.com', ''),
('licence.pdf', 'manemamadouyaya@gmail.com', ''),
('article_hors_domaine.pdf', 'manemamadouyaya@gmail.com', ''),
('master.pdf', 'mouhamadou.diallo@etu.ussein.edu.sn', '');

-- --------------------------------------------------------

--
-- Structure de la table `ec_links`
--

CREATE TABLE `ec_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_aid`
--

CREATE TABLE `ec_note_aid` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_aid`
--

INSERT INTO `ec_note_aid` (`nom`, `note`, `defaut`) VALUES
('aid_a1', 1.5, 5),
('aid_a2', 4, 4),
('aid_a3', 3, 3),
('aid_aa', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_aihd`
--

CREATE TABLE `ec_note_aihd` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_aihd`
--

INSERT INTO `ec_note_aihd` (`nom`, `note`, `defaut`) VALUES
('aihd_a1', 1.5, 2),
('aihd_a2', 1.5, 1.5),
('aihd_a3', 1, 1),
('aihd_aa', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_autre_experience`
--

CREATE TABLE `ec_note_autre_experience` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_autre_experience`
--

INSERT INTO `ec_note_autre_experience` (`nom`, `note`, `defaut`) VALUES
('gestion', 0.5, 0.5),
('investigateur_projet_oui', 2, 2),
('investigateur_projet_non', 0, 0),
('coordonateur_reseau_oui', 1, 1),
('coordonateur_reseau_non', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_brevet`
--

CREATE TABLE `ec_note_brevet` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_brevet`
--

INSERT INTO `ec_note_brevet` (`nom`, `note`, `defaut`) VALUES
('brevet_oui', 10, 10),
('brevet_non', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_communication_conference`
--

CREATE TABLE `ec_note_communication_conference` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_communication_conference`
--

INSERT INTO `ec_note_communication_conference` (`nom`, `note`, `defaut`) VALUES
('communication_orale_internationale', 1, 1),
('poster_discussion_internationale', 0.75, 0.75),
('communication_orale_nationale', 0.5, 0.5),
('communication_nationale_affichee', 0.25, 0.25),
('conferencier_invite_international', 2, 2),
('conferencier_national', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_diplome`
--

CREATE TABLE `ec_note_diplome` (
  `nom` varchar(25) NOT NULL,
  `note` int(11) NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_diplome`
--

INSERT INTO `ec_note_diplome` (`nom`, `note`, `defaut`) VALUES
('diplome1', 35, 35),
('diplome3', 25, 25),
('diplome4', 20, 20),
('diplome5', 15, 15),
('diplome6', 5, 5),
('diplome7', 0, 0),
('diplome2', 30, 30);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_distinction`
--

CREATE TABLE `ec_note_distinction` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_distinction`
--

INSERT INTO `ec_note_distinction` (`nom`, `note`, `defaut`) VALUES
('prix_concours', 2, 2),
('decoration', 1, 1),
('prix_concours', 2, 2),
('decoration', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_doctorat`
--

CREATE TABLE `ec_note_doctorat` (
  `nom` varchar(100) NOT NULL,
  `note` int(11) NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_doctorat`
--

INSERT INTO `ec_note_doctorat` (`nom`, `note`, `defaut`) VALUES
('these_troisieme_cycle1', 4, 4),
('these_troisieme_cycle2', 2, 2),
('these_troisieme_cycle3', 0, 0),
('these_unique_phD1', 4, 4),
('these_unique_phD2', 2, 2),
('these_unique_phD3', 0, 0),
('these_etat1', 4, 4),
('these_etat2', 2, 2),
('these_etat3', 0, 0),
('these_exercice1', 1, 1),
('these_exercice2', 0, 0),
('these_troisieme_cycle1', 4, 4),
('these_troisieme_cycle2', 2, 2),
('these_troisieme_cycle3', 0, 0),
('these_unique_phD1', 4, 4),
('these_unique_phD2', 2, 2),
('these_unique_phD3', 0, 0),
('these_etat1', 4, 4),
('these_etat2', 2, 2),
('these_etat3', 0, 0),
('these_exercice1', 1, 1),
('these_exercice2', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_experience_pedagogique`
--

CREATE TABLE `ec_note_experience_pedagogique` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_experience_pedagogique`
--

INSERT INTO `ec_note_experience_pedagogique` (`nom`, `note`, `defaut`) VALUES
('secondaire', 0.5, 0.5),
('superieur', 1, 1),
('secondaire', 0.5, 0.5),
('superieur', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_experience_recherche`
--

CREATE TABLE `ec_note_experience_recherche` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_experience_recherche`
--

INSERT INTO `ec_note_experience_recherche` (`nom`, `note`, `defaut`) VALUES
('er1', 1, 1),
('er2', 0.75, 0.75),
('er3', 0.5, 0.5),
('er4', 0.5, 0.5);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_grade`
--

CREATE TABLE `ec_note_grade` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_grade`
--

INSERT INTO `ec_note_grade` (`nom`, `note`, `defaut`) VALUES
('prof_enseignement_secondaire', 0, 0),
('assistant', 5, 5),
('maitre_assistant', 10, 10),
('maitre_de_conference', 20, 20),
('prof_titulaire', 35, 35);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_ldd`
--

CREATE TABLE `ec_note_ldd` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_ldd`
--

INSERT INTO `ec_note_ldd` (`nom`, `note`, `defaut`) VALUES
('ldd_a1', 5, 5),
('ldd_a2', 4, 4),
('ldd_a3', 3, 3),
('ldd_aa', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_licence_master`
--

CREATE TABLE `ec_note_licence_master` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_licence_master`
--

INSERT INTO `ec_note_licence_master` (`nom`, `note`, `defaut`) VALUES
('licence3ans_oui', 3, 3),
('licence3ans_non', 0, 0),
('master2ans_oui', 3, 3),
('master2ans_non', 0, 0),
('autre_oui', 0, 0),
('autre_non', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_lv`
--

CREATE TABLE `ec_note_lv` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_lv`
--

INSERT INTO `ec_note_lv` (`nom`, `note`, `defaut`) VALUES
('lv_a1', 2, 2),
('lv_a2', 1.5, 1.5),
('lv_a3', 1, 1),
('lv_aa', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_note_proccedings`
--

CREATE TABLE `ec_note_proccedings` (
  `nom` varchar(100) NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_note_proccedings`
--

INSERT INTO `ec_note_proccedings` (`nom`, `note`, `defaut`) VALUES
('proccedings_oui', 1, 1),
('proccedings_non', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_offre`
--

CREATE TABLE `ec_offre` (
  `id` int(11) NOT NULL,
  `nom_ufr` varchar(200) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `nom_fichier` varchar(200) NOT NULL,
  `dateLimite` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_offre`
--

INSERT INTO `ec_offre` (`id`, `nom_ufr`, `titre`, `description`, `nom_fichier`, `dateLimite`) VALUES
(1, 'UFR SFI', 'Appel a candidatures pour le recrutement d\'un attache temporaire d\'enseignement et de recherche (ATER) en informatique a l\'UFR science fondamentale de l\'ingénierie', 'néant', 'https://www.ussein.sn/wp-content/uploads/2021/09/0002-scaled.jpg', ''),
(3, 'UFR SAEPAN', 'Appel a candidatures pour le recrutement d\'un attache temporaire d\'enseignement et de recherche (ATER) en informatique a l\'UFR science fondamentale de l\'ingénierie', '', 'https://www.ussein.sn/wp-content/uploads/2021/05/0001-2-scaled.jpg', ''),
(4, 'sfi', 'Mon Offre', 'Voici un Offre', 'USSEIN-LOGO.png', '2021-09-06');

-- --------------------------------------------------------

--
-- Structure de la table `ec_options`
--

CREATE TABLE `ec_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_options`
--

INSERT INTO `ec_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/candidature', 'yes'),
(2, 'home', 'http://localhost/candidature', 'yes'),
(3, 'blogname', 'USSEIN CANDIDATURE', 'yes'),
(4, 'blogdescription', 'Un site utilisant WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'candidature@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G\\hi', 'yes'),
(25, 'links_updated_date_format', 'd F Y G\\hi', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:95:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:17:"^wp-sitemap\\.xml$";s:23:"index.php?sitemap=index";s:17:"^wp-sitemap\\.xsl$";s:36:"index.php?sitemap-stylesheet=sitemap";s:23:"^wp-sitemap-index\\.xsl$";s:34:"index.php?sitemap-stylesheet=index";s:48:"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$";s:75:"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]";s:34:"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$";s:47:"index.php?sitemap=$matches[1]&paged=$matches[2]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:39:"index.php?&page_id=53&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:62:"C:\\wamp64\\www\\candidature/wp-content/themes/emphires/style.css";i:1;s:0:"";}', 'no'),
(40, 'template', 'emphires', 'yes'),
(41, 'stylesheet', 'emphires', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'page', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', 'Europe/Paris', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '53', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1647088617', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '49752', 'yes'),
(100, 'ec_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'fr_FR', 'yes'),
(103, 'widget_block', 'a:6:{i:2;a:1:{s:7:"content";s:19:"<!-- wp:search /-->";}i:3;a:1:{s:7:"content";s:159:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Articles récents</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->";}i:4;a:1:{s:7:"content";s:233:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Commentaires récents</h2><!-- /wp:heading --><!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /--></div><!-- /wp:group -->";}i:5;a:1:{s:7:"content";s:146:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->";}i:6;a:1:{s:7:"content";s:151:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Catégories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->";}s:12:"_multiwidget";i:1;}', 'yes'),
(104, 'sidebars_widgets', 'a:9:{s:19:"wp_inactive_widgets";a:0:{}s:17:"cspt-sidebar-post";a:3:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";}s:17:"cspt-sidebar-page";a:2:{i:0;s:7:"block-5";i:1;s:7:"block-6";}s:19:"cspt-sidebar-search";a:0:{}s:13:"cspt-footer-1";a:0:{}s:13:"cspt-footer-2";a:0:{}s:13:"cspt-footer-3";a:0:{}s:13:"cspt-footer-4";a:0:{}s:13:"array_version";i:3;}', 'yes'),
(105, 'cron', 'a:6:{i:1633052218;a:1:{s:34:"wp_privacy_delete_old_export_files";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"hourly";s:4:"args";a:0:{}s:8:"interval";i:3600;}}}i:1633091818;a:5:{s:32:"recovery_mode_clean_expired_keys";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:18:"wp_https_detection";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1633093897;a:2:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1633093900;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1633437418;a:1:{s:30:"wp_site_health_scheduled_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"weekly";s:4:"args";a:0:{}s:8:"interval";i:604800;}}}s:7:"version";i:2;}', 'yes'),
(106, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(107, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(108, 'widget_archives', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(109, 'widget_media_audio', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(110, 'widget_media_image', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(111, 'widget_media_gallery', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(112, 'widget_media_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(113, 'widget_meta', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(114, 'widget_search', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(115, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(116, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(117, 'widget_custom_html', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(119, 'recovery_keys', 'a:0:{}', 'yes'),
(121, 'https_detection_errors', 'a:1:{s:20:"https_request_failed";a:1:{i:0;s:28:"La demande HTTPS a échoué.";}}', 'yes'),
(120, 'theme_mods_twentytwentyone', 'a:2:{s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1631625136;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:3:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";}s:9:"sidebar-2";a:2:{i:0;s:7:"block-5";i:1;s:7:"block-6";}}}}', 'yes'),
(412, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:65:"https://downloads.wordpress.org/release/fr_FR/wordpress-5.8.1.zip";s:6:"locale";s:5:"fr_FR";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/fr_FR/wordpress-5.8.1.zip";s:10:"no_content";s:0:"";s:11:"new_bundled";s:0:"";s:7:"partial";s:0:"";s:8:"rollback";s:0:"";}s:7:"current";s:5:"5.8.1";s:7:"version";s:5:"5.8.1";s:11:"php_version";s:6:"5.6.20";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.6";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1633049705;s:15:"version_checked";s:5:"5.8.1";s:12:"translations";a:1:{i:0;a:7:{s:4:"type";s:4:"core";s:4:"slug";s:7:"default";s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"5.8.1";s:7:"updated";s:19:"2021-09-29 08:55:34";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/5.8.1/fr_FR.zip";s:10:"autoupdate";b:1;}}}', 'no'),
(413, '_site_transient_update_themes', 'O:8:"stdClass":5:{s:12:"last_checked";i:1633049705;s:7:"checked";a:4:{s:8:"emphires";s:3:"2.1";s:14:"twentynineteen";s:3:"2.1";s:12:"twentytwenty";s:3:"1.8";s:15:"twentytwentyone";s:3:"1.4";}s:8:"response";a:0:{}s:9:"no_update";a:3:{s:14:"twentynineteen";a:6:{s:5:"theme";s:14:"twentynineteen";s:11:"new_version";s:3:"2.1";s:3:"url";s:44:"https://wordpress.org/themes/twentynineteen/";s:7:"package";s:60:"https://downloads.wordpress.org/theme/twentynineteen.2.1.zip";s:8:"requires";s:5:"4.9.6";s:12:"requires_php";s:5:"5.2.4";}s:12:"twentytwenty";a:6:{s:5:"theme";s:12:"twentytwenty";s:11:"new_version";s:3:"1.8";s:3:"url";s:42:"https://wordpress.org/themes/twentytwenty/";s:7:"package";s:58:"https://downloads.wordpress.org/theme/twentytwenty.1.8.zip";s:8:"requires";s:3:"4.7";s:12:"requires_php";s:5:"5.2.4";}s:15:"twentytwentyone";a:6:{s:5:"theme";s:15:"twentytwentyone";s:11:"new_version";s:3:"1.4";s:3:"url";s:45:"https://wordpress.org/themes/twentytwentyone/";s:7:"package";s:61:"https://downloads.wordpress.org/theme/twentytwentyone.1.4.zip";s:8:"requires";s:3:"5.3";s:12:"requires_php";s:3:"5.6";}}s:12:"translations";a:0:{}}', 'no'),
(134, 'auto_core_update_notified', 'a:4:{s:4:"type";s:7:"success";s:5:"email";s:21:"candidature@gmail.com";s:7:"version";s:5:"5.8.1";s:9:"timestamp";i:1631536646;}', 'no'),
(142, '_transient_health-check-site-status-result', '{"good":12,"recommended":7,"critical":0}', 'yes'),
(160, 'finished_updating_comment_type', '1', 'yes'),
(148, 'can_compress_scripts', '1', 'no'),
(149, 'cspt-ratingsbox-show-date', '1632229917', 'yes'),
(150, 'widget_recent-posts', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(151, 'widget_recent-comments', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(152, 'theme_mods_emphires', 'a:2:{s:18:"custom_css_post_id";i:47;s:18:"nav_menu_locations";a:1:{s:19:"creativesplanet-top";i:2;}}', 'yes'),
(155, 'current_theme', 'Emphires', 'yes'),
(156, 'theme_switched', '', 'yes'),
(157, '_transient_emphires_merlin_redirect', '1', 'yes'),
(214, 'merlin_emphires_completed', '1631815897', 'yes'),
(215, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
(331, '_site_transient_timeout_php_check_29c4ab16681005c43553ba661d9b2212', '1633088855', 'no'),
(332, '_site_transient_php_check_29c4ab16681005c43553ba661d9b2212', 'a:5:{s:19:"recommended_version";s:3:"7.4";s:15:"minimum_version";s:6:"5.6.20";s:12:"is_supported";b:0;s:9:"is_secure";b:0;s:13:"is_acceptable";b:0;}', 'no'),
(414, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1633049705;s:8:"response";a:1:{s:19:"akismet/akismet.php";O:8:"stdClass":12:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:6:"4.1.12";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:57:"https://downloads.wordpress.org/plugin/akismet.4.1.12.zip";s:5:"icons";a:2:{s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";}s:7:"banners";a:1:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}s:8:"requires";s:3:"4.6";s:6:"tested";s:5:"5.8.1";s:12:"requires_php";b:0;}}s:12:"translations";a:0:{}s:9:"no_update";a:1:{s:9:"hello.php";O:8:"stdClass":10:{s:2:"id";s:25:"w.org/plugins/hello-dolly";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:5:"1.7.2";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:60:"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip";s:5:"icons";a:2:{s:2:"2x";s:64:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855";s:2:"1x";s:64:"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855";}s:7:"banners";a:1:{s:2:"1x";s:66:"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855";}s:11:"banners_rtl";a:0:{}s:8:"requires";s:3:"4.6";}}s:7:"checked";a:2:{s:19:"akismet/akismet.php";s:6:"4.1.10";s:9:"hello.php";s:5:"1.7.2";}}', 'no'),
(343, '_site_transient_timeout_browser_1b45e80140dc46ace1901a7433351983', '1633091145', 'no'),
(344, '_site_transient_browser_1b45e80140dc46ace1901a7433351983', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:12:"93.0.4577.82";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
(447, '_site_transient_timeout_theme_roots', '1633051505', 'no'),
(448, '_site_transient_theme_roots', 'a:4:{s:8:"emphires";s:7:"/themes";s:14:"twentynineteen";s:7:"/themes";s:12:"twentytwenty";s:7:"/themes";s:15:"twentytwentyone";s:7:"/themes";}', 'no'),
(406, '_site_transient_php_check_7ddb89c02f1abf791c6717dc46cef1eb', 'a:5:{s:19:"recommended_version";s:3:"7.4";s:15:"minimum_version";s:6:"5.6.20";s:12:"is_supported";b:0;s:9:"is_secure";b:1;s:13:"is_acceptable";b:1;}', 'no'),
(405, '_site_transient_timeout_php_check_7ddb89c02f1abf791c6717dc46cef1eb', '1633509539', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `ec_postmeta`
--

CREATE TABLE `ec_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_postmeta`
--

INSERT INTO `ec_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'insertion_candidature.php'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1631625331:1'),
(4, 5, '_wp_page_template', 'sc_connexion.php'),
(5, 7, '_edit_lock', '1631625480:1'),
(6, 7, '_wp_page_template', 'sc_inscription.php'),
(7, 9, '_edit_lock', '1631625692:1'),
(8, 9, '_wp_page_template', 'sc_changer_mot_de_pass.php'),
(9, 11, '_edit_lock', '1631625596:1'),
(10, 11, '_wp_page_template', 'sc_mot_de_pass_oublier.php'),
(11, 13, '_wp_attached_file', '2021/09/USSEIN-LOGO.png'),
(12, 13, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:2561;s:6:"height";i:2207;s:4:"file";s:23:"2021/09/USSEIN-LOGO.png";s:5:"sizes";a:16:{s:6:"medium";a:4:{s:4:"file";s:23:"USSEIN-LOGO-300x259.png";s:5:"width";i:300;s:6:"height";i:259;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:24:"USSEIN-LOGO-1024x882.png";s:5:"width";i:1024;s:6:"height";i:882;s:9:"mime-type";s:9:"image/png";}s:9:"thumbnail";a:4:{s:4:"file";s:23:"USSEIN-LOGO-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:23:"USSEIN-LOGO-768x662.png";s:5:"width";i:768;s:6:"height";i:662;s:9:"mime-type";s:9:"image/png";}s:9:"1536x1536";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1536x1324.png";s:5:"width";i:1536;s:6:"height";i:1324;s:9:"mime-type";s:9:"image/png";}s:9:"2048x2048";a:4:{s:4:"file";s:25:"USSEIN-LOGO-2048x1765.png";s:5:"width";i:2048;s:6:"height";i:1765;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:23:"USSEIN-LOGO-600x780.png";s:5:"width";i:600;s:6:"height";i:780;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:23:"USSEIN-LOGO-600x800.png";s:5:"width";i:600;s:6:"height";i:800;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:23:"USSEIN-LOGO-770x350.png";s:5:"width";i:770;s:6:"height";i:350;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:23:"USSEIN-LOGO-770x635.png";s:5:"width";i:770;s:6:"height";i:635;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:23:"USSEIN-LOGO-770x500.png";s:5:"width";i:770;s:6:"height";i:500;s:9:"mime-type";s:9:"image/png";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:23:"USSEIN-LOGO-770x664.png";s:5:"width";i:770;s:6:"height";i:664;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:23:"USSEIN-LOGO-770x770.png";s:5:"width";i:770;s:6:"height";i:770;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:23:"USSEIN-LOGO-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:23:"USSEIN-LOGO-500x560.png";s:5:"width";i:500;s:6:"height";i:560;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:23:"USSEIN-LOGO-800x256.png";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(14, 15, '_edit_lock', '1631628271:1'),
(15, 15, '_wp_page_template', 'sc_reinitialisation_par_mail.php'),
(17, 18, '_edit_lock', '1632299519:1'),
(18, 18, '_wp_page_template', 'sc_accueil.php'),
(19, 22, '_menu_item_type', 'post_type'),
(20, 22, '_menu_item_menu_item_parent', '0'),
(21, 22, '_menu_item_object_id', '18'),
(22, 22, '_menu_item_object', 'page'),
(23, 22, '_menu_item_target', ''),
(24, 22, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(25, 22, '_menu_item_xfn', ''),
(26, 22, '_menu_item_url', ''),
(28, 23, '_wp_attached_file', '2021/09/ufr-saepan.png'),
(29, 23, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:2200;s:6:"height";i:550;s:4:"file";s:22:"2021/09/ufr-saepan.png";s:5:"sizes";a:16:{s:6:"medium";a:4:{s:4:"file";s:21:"ufr-saepan-300x75.png";s:5:"width";i:300;s:6:"height";i:75;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:23:"ufr-saepan-1024x256.png";s:5:"width";i:1024;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}s:9:"thumbnail";a:4:{s:4:"file";s:22:"ufr-saepan-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:22:"ufr-saepan-768x192.png";s:5:"width";i:768;s:6:"height";i:192;s:9:"mime-type";s:9:"image/png";}s:9:"1536x1536";a:4:{s:4:"file";s:23:"ufr-saepan-1536x384.png";s:5:"width";i:1536;s:6:"height";i:384;s:9:"mime-type";s:9:"image/png";}s:9:"2048x2048";a:4:{s:4:"file";s:23:"ufr-saepan-2048x512.png";s:5:"width";i:2048;s:6:"height";i:512;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:22:"ufr-saepan-600x550.png";s:5:"width";i:600;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:22:"ufr-saepan-600x550.png";s:5:"width";i:600;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:22:"ufr-saepan-770x350.png";s:5:"width";i:770;s:6:"height";i:350;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:22:"ufr-saepan-770x550.png";s:5:"width";i:770;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:22:"ufr-saepan-770x500.png";s:5:"width";i:770;s:6:"height";i:500;s:9:"mime-type";s:9:"image/png";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:22:"ufr-saepan-770x193.png";s:5:"width";i:770;s:6:"height";i:193;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:22:"ufr-saepan-770x550.png";s:5:"width";i:770;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:22:"ufr-saepan-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:22:"ufr-saepan-500x550.png";s:5:"width";i:500;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:22:"ufr-saepan-800x256.png";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(30, 24, '_wp_attached_file', '2021/09/ufr-sfi.png'),
(31, 24, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:2200;s:6:"height";i:550;s:4:"file";s:19:"2021/09/ufr-sfi.png";s:5:"sizes";a:16:{s:6:"medium";a:4:{s:4:"file";s:18:"ufr-sfi-300x75.png";s:5:"width";i:300;s:6:"height";i:75;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:20:"ufr-sfi-1024x256.png";s:5:"width";i:1024;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}s:9:"thumbnail";a:4:{s:4:"file";s:19:"ufr-sfi-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:19:"ufr-sfi-768x192.png";s:5:"width";i:768;s:6:"height";i:192;s:9:"mime-type";s:9:"image/png";}s:9:"1536x1536";a:4:{s:4:"file";s:20:"ufr-sfi-1536x384.png";s:5:"width";i:1536;s:6:"height";i:384;s:9:"mime-type";s:9:"image/png";}s:9:"2048x2048";a:4:{s:4:"file";s:20:"ufr-sfi-2048x512.png";s:5:"width";i:2048;s:6:"height";i:512;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:19:"ufr-sfi-600x550.png";s:5:"width";i:600;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:19:"ufr-sfi-600x550.png";s:5:"width";i:600;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:19:"ufr-sfi-770x350.png";s:5:"width";i:770;s:6:"height";i:350;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:19:"ufr-sfi-770x550.png";s:5:"width";i:770;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:19:"ufr-sfi-770x500.png";s:5:"width";i:770;s:6:"height";i:500;s:9:"mime-type";s:9:"image/png";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:19:"ufr-sfi-770x193.png";s:5:"width";i:770;s:6:"height";i:193;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:19:"ufr-sfi-770x550.png";s:5:"width";i:770;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:19:"ufr-sfi-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:19:"ufr-sfi-500x550.png";s:5:"width";i:500;s:6:"height";i:550;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:19:"ufr-sfi-800x256.png";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(32, 25, '_edit_lock', '1631817557:1'),
(33, 26, '_edit_lock', '1631817744:1'),
(34, 26, '_wp_page_template', 'sc_offre.php'),
(35, 26, '_wp_trash_meta_status', 'publish'),
(36, 26, '_wp_trash_meta_time', '1631817806'),
(37, 26, '_wp_desired_post_slug', 'plus-dinformation'),
(38, 29, '_edit_lock', '1632310767:1'),
(39, 29, '_wp_page_template', 'sc_offre.php'),
(40, 2, '_edit_lock', '1632302852:1'),
(41, 35, '_edit_lock', '1632931087:1'),
(42, 35, '_wp_page_template', 'sc_fiche_a_postuler.php'),
(43, 37, '_menu_item_type', 'post_type'),
(44, 37, '_menu_item_menu_item_parent', '0'),
(45, 37, '_menu_item_object_id', '18'),
(46, 37, '_menu_item_object', 'page'),
(47, 37, '_menu_item_target', ''),
(48, 37, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(49, 37, '_menu_item_xfn', ''),
(50, 37, '_menu_item_url', ''),
(51, 37, '_menu_item_orphaned', '1632310982'),
(52, 38, '_edit_lock', '1632311066:1'),
(53, 38, '_wp_page_template', 'sc_compte_candidat.php'),
(54, 41, '_edit_lock', '1632932836:1'),
(55, 41, '_wp_page_template', 'sc_recapitulatif.php'),
(56, 44, '_menu_item_type', 'post_type'),
(57, 44, '_menu_item_menu_item_parent', '0'),
(58, 44, '_menu_item_object_id', '41'),
(59, 44, '_menu_item_object', 'page'),
(60, 44, '_menu_item_target', ''),
(61, 44, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(62, 44, '_menu_item_xfn', ''),
(63, 44, '_menu_item_url', ''),
(76, 46, '_wp_trash_meta_status', 'publish'),
(65, 45, '_menu_item_type', 'post_type'),
(66, 45, '_menu_item_menu_item_parent', '0'),
(67, 45, '_menu_item_object_id', '38'),
(68, 45, '_menu_item_object', 'page'),
(69, 45, '_menu_item_target', ''),
(70, 45, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(71, 45, '_menu_item_xfn', ''),
(72, 45, '_menu_item_url', ''),
(75, 46, '_edit_lock', '1632315326:1'),
(74, 22, '_wp_old_date', '2021-09-16'),
(77, 46, '_wp_trash_meta_time', '1632315328'),
(78, 49, '_edit_lock', '1632315567:1'),
(79, 49, '_wp_trash_meta_status', 'publish'),
(80, 49, '_wp_trash_meta_time', '1632315615'),
(97, 65, '_wp_attached_file', '2021/09/banner_cand.png'),
(98, 65, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1042;s:6:"height";i:264;s:4:"file";s:23:"2021/09/banner_cand.png";s:5:"sizes";a:14:{s:6:"medium";a:4:{s:4:"file";s:22:"banner_cand-300x76.png";s:5:"width";i:300;s:6:"height";i:76;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:24:"banner_cand-1024x259.png";s:5:"width";i:1024;s:6:"height";i:259;s:9:"mime-type";s:9:"image/png";}s:9:"thumbnail";a:4:{s:4:"file";s:23:"banner_cand-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:23:"banner_cand-768x195.png";s:5:"width";i:768;s:6:"height";i:195;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:23:"banner_cand-600x264.png";s:5:"width";i:600;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:23:"banner_cand-600x264.png";s:5:"width";i:600;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:23:"banner_cand-770x264.png";s:5:"width";i:770;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:23:"banner_cand-770x264.png";s:5:"width";i:770;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:23:"banner_cand-770x264.png";s:5:"width";i:770;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:23:"banner_cand-770x195.png";s:5:"width";i:770;s:6:"height";i:195;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:23:"banner_cand-770x264.png";s:5:"width";i:770;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:23:"banner_cand-300x264.png";s:5:"width";i:300;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:23:"banner_cand-500x264.png";s:5:"width";i:500;s:6:"height";i:264;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:23:"banner_cand-800x256.png";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(83, 52, '_wp_attached_file', '2021/09/USSEIN-LOGO-1.png'),
(84, 52, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:2337;s:6:"height";i:1634;s:4:"file";s:25:"2021/09/USSEIN-LOGO-1.png";s:5:"sizes";a:16:{s:6:"medium";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-300x210.png";s:5:"width";i:300;s:6:"height";i:210;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:26:"USSEIN-LOGO-1-1024x716.png";s:5:"width";i:1024;s:6:"height";i:716;s:9:"mime-type";s:9:"image/png";}s:9:"thumbnail";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-768x537.png";s:5:"width";i:768;s:6:"height";i:537;s:9:"mime-type";s:9:"image/png";}s:9:"1536x1536";a:4:{s:4:"file";s:27:"USSEIN-LOGO-1-1536x1074.png";s:5:"width";i:1536;s:6:"height";i:1074;s:9:"mime-type";s:9:"image/png";}s:9:"2048x2048";a:4:{s:4:"file";s:27:"USSEIN-LOGO-1-2048x1432.png";s:5:"width";i:2048;s:6:"height";i:1432;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-600x780.png";s:5:"width";i:600;s:6:"height";i:780;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-600x800.png";s:5:"width";i:600;s:6:"height";i:800;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-770x350.png";s:5:"width";i:770;s:6:"height";i:350;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-770x635.png";s:5:"width";i:770;s:6:"height";i:635;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-770x500.png";s:5:"width";i:770;s:6:"height";i:500;s:9:"mime-type";s:9:"image/png";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-770x538.png";s:5:"width";i:770;s:6:"height";i:538;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-770x770.png";s:5:"width";i:770;s:6:"height";i:770;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-500x560.png";s:5:"width";i:500;s:6:"height";i:560;s:9:"mime-type";s:9:"image/png";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:25:"USSEIN-LOGO-1-800x256.png";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(85, 53, '_edit_lock', '1632317110:1'),
(86, 53, '_wp_page_template', 'sc_presentation.php'),
(87, 55, '_edit_lock', '1632502612:1'),
(88, 55, '_wp_page_template', 'sc_ajout_offre.php'),
(89, 58, '_edit_lock', '1632486573:1'),
(90, 58, '_wp_page_template', 'sc_visualisation.php'),
(91, 60, '_edit_lock', '1632486688:1'),
(92, 60, '_wp_page_template', 'sc_visualisation_candidat_postuler_par_offre.php'),
(93, 62, '_edit_lock', '1632756053:1'),
(94, 62, '_wp_page_template', 'sc_calcul_note_candidat.php'),
(95, 64, '_wp_attached_file', '2021/09/background-scaled.jpg'),
(96, 64, '_wp_attachment_metadata', 'a:6:{s:5:"width";i:2560;s:6:"height";i:1707;s:4:"file";s:29:"2021/09/background-scaled.jpg";s:5:"sizes";a:16:{s:6:"medium";a:4:{s:4:"file";s:22:"background-300x200.jpg";s:5:"width";i:300;s:6:"height";i:200;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:23:"background-1024x683.jpg";s:5:"width";i:1024;s:6:"height";i:683;s:9:"mime-type";s:10:"image/jpeg";}s:9:"thumbnail";a:4:{s:4:"file";s:22:"background-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:22:"background-768x512.jpg";s:5:"width";i:768;s:6:"height";i:512;s:9:"mime-type";s:10:"image/jpeg";}s:9:"1536x1536";a:4:{s:4:"file";s:24:"background-1536x1024.jpg";s:5:"width";i:1536;s:6:"height";i:1024;s:9:"mime-type";s:10:"image/jpeg";}s:9:"2048x2048";a:4:{s:4:"file";s:24:"background-2048x1365.jpg";s:5:"width";i:2048;s:6:"height";i:1365;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-600x780";a:4:{s:4:"file";s:22:"background-600x780.jpg";s:5:"width";i:600;s:6:"height";i:780;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-600x800";a:4:{s:4:"file";s:22:"background-600x800.jpg";s:5:"width";i:600;s:6:"height";i:800;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-770x350";a:4:{s:4:"file";s:22:"background-770x350.jpg";s:5:"width";i:770;s:6:"height";i:350;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-770x635";a:4:{s:4:"file";s:22:"background-770x635.jpg";s:5:"width";i:770;s:6:"height";i:635;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-770x500";a:4:{s:4:"file";s:22:"background-770x500.jpg";s:5:"width";i:770;s:6:"height";i:500;s:9:"mime-type";s:10:"image/jpeg";}s:17:"cspt-img-770x9999";a:4:{s:4:"file";s:22:"background-770x513.jpg";s:5:"width";i:770;s:6:"height";i:513;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-770x770";a:4:{s:4:"file";s:22:"background-770x770.jpg";s:5:"width";i:770;s:6:"height";i:770;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-300x300";a:4:{s:4:"file";s:22:"background-300x300.jpg";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-500x560";a:4:{s:4:"file";s:22:"background-500x560.jpg";s:5:"width";i:500;s:6:"height";i:560;s:9:"mime-type";s:10:"image/jpeg";}s:16:"cspt-img-800x256";a:4:{s:4:"file";s:22:"background-800x256.jpg";s:5:"width";i:800;s:6:"height";i:256;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:46:"green background with floral leaves decoration";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:46:"green background with floral leaves decoration";s:11:"orientation";s:1:"1";s:8:"keywords";a:29:{i:0;s:5:"green";i:1;s:4:"leaf";i:2;s:6:"leaves";i:3;s:10:"background";i:4;s:6:"banner";i:5;s:6:"nature";i:6;s:3:"eco";i:7;s:8:"friendly";i:8;s:5:"plant";i:9;s:9:"botanical";i:10;s:7:"natural";i:11;s:4:"tree";i:12;s:8:"seasonal";i:13;s:7:"organic";i:14;s:5:"herbs";i:15;s:6:"vector";i:16;s:6:"design";i:17;s:7:"graphic";i:18;s:5:"fresh";i:19;s:6:"botany";i:20;s:7:"ecology";i:21;s:5:"flora";i:22;s:5:"petal";i:23;s:5:"vegan";i:24;s:3:"bio";i:25;s:10:"ecological";i:26;s:6:"garden";i:27;s:11:"sustainable";i:28;s:6:"poster";}}s:14:"original_image";s:14:"background.jpg";}'),
(99, 66, '_edit_lock', '1632503486:1'),
(100, 66, '_wp_page_template', 'sc_creation_compte_admin.php'),
(101, 68, '_edit_lock', '1632510301:1'),
(102, 68, '_wp_page_template', 'formulaire_candidature_pour_admin.php'),
(103, 72, '_edit_lock', '1632935291:1'),
(104, 73, '_edit_lock', '1632951659:1'),
(105, 73, '_wp_page_template', 'sc_point_modulable.php');

-- --------------------------------------------------------

--
-- Structure de la table `ec_posts`
--

CREATE TABLE `ec_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_posts`
--

INSERT INTO `ec_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:paragraph -->\n<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis commencez à écrire !</p>\n<!-- /wp:paragraph -->', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', '', 0, 'http://localhost/candidature/?p=1', 0, 'post', '', 1),
(2, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page «&nbsp;À propos&nbsp;» qui les présente aux personnes visitant du site. Cela pourrait ressembler à quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>Bonjour&nbsp;! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…ou quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules supers pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href="http://localhost/candidature/wp-admin/">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien&nbsp;!</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'publish', 'closed', 'open', '', 'page-d-exemple', '', '', '2021-09-22 11:26:45', '2021-09-22 09:26:45', '', 0, 'http://localhost/candidature/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-09-13 14:36:57', '2021-09-13 12:36:57', '<!-- wp:heading --><h2>Qui sommes-nous ?</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>L’adresse de notre site est : http://localhost/candidature.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Commentaires</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Quand vous laissez un commentaire sur notre site, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Une chaîne anonymisée créée à partir de votre adresse e-mail (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Médias</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Si vous téléversez des images sur le site, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les personnes visitant votre site peuvent télécharger et extraire des données de localisation depuis ces images.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse e-mail et site dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Contenu embarqué depuis d’autres sites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Utilisation et transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Si vous demandez une réinitialisation de votre mot de passe, votre adresse IP sera incluse dans l’e-mail de réinitialisation.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Durées de stockage de vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Pour les comptes qui s’inscrivent sur notre site (le cas échéant), nous stockons également les données personnelles indiquées dans leur profil. Tous les comptes peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur identifiant). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Les droits que vous avez sur vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texte suggéré : </strong>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p><!-- /wp:paragraph -->', 'Politique de confidentialité', '', 'draft', 'closed', 'open', '', 'politique-de-confidentialite', '', '', '2021-09-13 14:36:57', '2021-09-13 12:36:57', '', 0, 'http://localhost/candidature/?page_id=3', 0, 'page', '', 0),
(71, 1, '2021-09-29 17:55:32', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-09-29 17:55:32', '0000-00-00 00:00:00', '', 0, 'http://localhost/candidature/?p=71', 0, 'post', '', 0),
(5, 1, '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 'Connexion', '', 'publish', 'closed', 'closed', '', 'connexion', '', '', '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 0, 'http://localhost/candidature/?page_id=5', 0, 'page', '', 0),
(6, 1, '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 'Connexion', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2021-09-14 15:17:49', '2021-09-14 13:17:49', '', 5, 'http://localhost/candidature/?p=6', 0, 'revision', '', 0),
(7, 1, '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 'inscription', '', 'publish', 'closed', 'closed', '', 'inscription', '', '', '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 0, 'http://localhost/candidature/?page_id=7', 0, 'page', '', 0),
(8, 1, '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 'inscription', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2021-09-14 15:19:41', '2021-09-14 13:19:41', '', 7, 'http://localhost/candidature/?p=8', 0, 'revision', '', 0),
(9, 1, '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 'changer mot de passe', '', 'publish', 'closed', 'closed', '', 'changer-mot-de-passe', '', '', '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 0, 'http://localhost/candidature/?page_id=9', 0, 'page', '', 0),
(10, 1, '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 'changer mot de passe', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2021-09-14 15:21:20', '2021-09-14 13:21:20', '', 9, 'http://localhost/candidature/?p=10', 0, 'revision', '', 0),
(11, 1, '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 'Mot de passe oublie', '', 'publish', 'closed', 'closed', '', 'mot-de-passe-oublie', '', '', '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 0, 'http://localhost/candidature/?page_id=11', 0, 'page', '', 0),
(12, 1, '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 'Mot de passe oublie', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2021-09-14 15:22:06', '2021-09-14 13:22:06', '', 11, 'http://localhost/candidature/?p=12', 0, 'revision', '', 0),
(13, 1, '2021-09-14 15:25:02', '2021-09-14 13:25:02', '', 'USSEIN-LOGO', '', 'inherit', 'open', 'closed', '', 'ussein-logo', '', '', '2021-09-14 15:25:02', '2021-09-14 13:25:02', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO.png', 0, 'attachment', 'image/png', 0),
(52, 1, '2021-09-22 15:22:44', '2021-09-22 13:22:44', '', 'USSEIN-LOGO', '', 'inherit', 'open', 'closed', '', 'ussein-logo-2', '', '', '2021-09-22 15:22:44', '2021-09-22 13:22:44', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO-1.png', 0, 'attachment', 'image/png', 0),
(15, 1, '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 'Réinitialisation mot de passe', '', 'publish', 'closed', 'closed', '', 'reinitialisation-mot-de-passe', '', '', '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 0, 'http://localhost/candidature/?page_id=15', 0, 'page', '', 0),
(16, 1, '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 'Réinitialisation mot de passe', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2021-09-14 15:46:08', '2021-09-14 13:46:08', '', 15, 'http://localhost/candidature/?p=16', 0, 'revision', '', 0),
(65, 1, '2021-09-24 15:45:34', '2021-09-24 13:45:34', '', 'banner_cand', '', 'inherit', 'open', 'closed', '', 'banner_cand', '', '', '2021-09-24 15:45:34', '2021-09-24 13:45:34', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/banner_cand.png', 0, 'attachment', 'image/png', 0),
(18, 1, '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 'Accueil offre', '', 'publish', 'closed', 'closed', '', 'accueil-offre', '', '', '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 0, 'http://localhost/candidature/?page_id=18', 0, 'page', '', 0),
(19, 1, '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 'accueil', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-16 20:05:20', '2021-09-16 18:05:20', '', 18, 'http://localhost/candidature/?p=19', 0, 'revision', '', 0),
(21, 1, '2021-09-16 20:08:35', '2021-09-16 18:08:35', '', 'Accueil', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-16 20:08:35', '2021-09-16 18:08:35', '', 18, 'http://localhost/candidature/?p=21', 0, 'revision', '', 0),
(22, 1, '2021-09-22 13:57:58', '2021-09-16 18:23:10', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=22', 1, 'nav_menu_item', '', 0),
(23, 1, '2021-09-16 20:24:51', '2021-09-16 18:24:51', '', 'ufr saepan', '', 'inherit', 'open', 'closed', '', 'ufr-saepan', '', '', '2021-09-16 20:24:51', '2021-09-16 18:24:51', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/ufr-saepan.png', 0, 'attachment', 'image/png', 0),
(24, 1, '2021-09-16 20:25:01', '2021-09-16 18:25:01', '', 'ufr sfi', '', 'inherit', 'open', 'closed', '', 'ufr-sfi', '', '', '2021-09-16 20:25:01', '2021-09-16 18:25:01', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/ufr-sfi.png', 0, 'attachment', 'image/png', 0),
(25, 1, '2021-09-16 20:39:17', '0000-00-00 00:00:00', '', 'Offres', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-09-16 20:39:17', '2021-09-16 18:39:17', '', 0, 'http://localhost/candidature/?page_id=25', 0, 'page', '', 0),
(26, 1, '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 'Plus d\'information', '', 'trash', 'closed', 'closed', '', 'plus-dinformation__trashed', '', '', '2021-09-16 20:43:26', '2021-09-16 18:43:26', '', 0, 'http://localhost/candidature/?page_id=26', 0, 'page', '', 0),
(27, 1, '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 'Plus d\'information', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2021-09-16 20:42:39', '2021-09-16 18:42:39', '', 26, 'http://localhost/candidature/?p=27', 0, 'revision', '', 0),
(28, 1, '2021-09-16 20:42:45', '2021-09-16 18:42:45', '', 'Plus d\'informations', '', 'inherit', 'closed', 'closed', '', '26-autosave-v1', '', '', '2021-09-16 20:42:45', '2021-09-16 18:42:45', '', 26, 'http://localhost/candidature/?p=28', 0, 'revision', '', 0),
(29, 1, '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 'Plus d\'informations', '', 'publish', 'closed', 'closed', '', 'plus-dinformations', '', '', '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 0, 'http://localhost/candidature/?page_id=29', 0, 'page', '', 0),
(30, 1, '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 'Plus d\'informations', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2021-09-16 20:44:16', '2021-09-16 18:44:16', '', 29, 'http://localhost/candidature/?p=30', 0, 'revision', '', 0),
(32, 1, '2021-09-21 23:43:30', '2021-09-21 21:43:30', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page «&nbsp;À propos&nbsp;» qui les présente aux personnes visitant du site. Cela pourrait ressembler à quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>Bonjour&nbsp;! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…ou quelque chose comme cela&nbsp;:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules supers pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href="http://localhost/candidature/wp-admin/">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien&nbsp;!</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2021-09-21 23:43:30', '2021-09-21 21:43:30', '', 2, 'http://localhost/candidature/?p=32', 0, 'revision', '', 0),
(37, 1, '2021-09-22 13:43:02', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-09-22 13:43:02', '0000-00-00 00:00:00', '', 0, 'http://localhost/candidature/?p=37', 1, 'nav_menu_item', '', 0),
(38, 1, '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 'Mon compte', '', 'publish', 'closed', 'closed', '', 'mon-compte', '', '', '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 0, 'http://localhost/candidature/?page_id=38', 0, 'page', '', 0),
(39, 1, '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 'Mon compte', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2021-09-22 13:46:22', '2021-09-22 11:46:22', '', 38, 'http://localhost/candidature/?p=39', 0, 'revision', '', 0),
(40, 1, '2021-09-22 13:46:31', '2021-09-22 11:46:31', '', 'Mon compte', '', 'inherit', 'closed', 'closed', '', '38-autosave-v1', '', '', '2021-09-22 13:46:31', '2021-09-22 11:46:31', '', 38, 'http://localhost/candidature/?p=40', 0, 'revision', '', 0),
(41, 1, '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 'Mon dossier', '', 'publish', 'closed', 'closed', '', 'mon-dossier', '', '', '2021-09-29 18:02:34', '2021-09-29 16:02:34', '', 0, 'http://localhost/candidature/?page_id=41', 0, 'page', '', 0),
(42, 1, '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 'Mon dossier', '', 'inherit', 'closed', 'closed', '', '41-revision-v1', '', '', '2021-09-22 13:50:00', '2021-09-22 11:50:00', '', 41, 'http://localhost/candidature/?p=42', 0, 'revision', '', 0),
(43, 1, '2021-09-22 13:50:07', '2021-09-22 11:50:07', '', 'Mon dossier', '', 'inherit', 'closed', 'closed', '', '41-autosave-v1', '', '', '2021-09-22 13:50:07', '2021-09-22 11:50:07', '', 41, 'http://localhost/candidature/?p=43', 0, 'revision', '', 0),
(44, 1, '2021-09-22 13:57:58', '2021-09-22 11:57:58', ' ', '', '', 'publish', 'closed', 'closed', '', '44', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=44', 2, 'nav_menu_item', '', 0),
(45, 1, '2021-09-22 13:57:58', '2021-09-22 11:57:58', ' ', '', '', 'publish', 'closed', 'closed', '', '45', '', '', '2021-09-22 13:57:58', '2021-09-22 11:57:58', '', 0, 'http://localhost/candidature/?p=45', 3, 'nav_menu_item', '', 0),
(46, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', '{\n    "custom_css[emphires]": {\n        "value": "div.cspt-title-bar-wrapper.cspt-bg-color-customt:before{\\n\\tbackground-color:white;\\n\\tdisplay:none;\\n}",\n        "type": "custom_css",\n        "user_id": 1,\n        "date_modified_gmt": "2021-09-22 12:55:23"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '4108ea06-6acc-4b55-b7b1-a1f67f5a633e', '', '', '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 0, 'http://localhost/candidature/?p=46', 0, 'customize_changeset', '', 0),
(35, 1, '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 'Fiche a postuler', '', 'publish', 'closed', 'closed', '', 'fiche-a-postuler', '', '', '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 0, 'http://localhost/candidature/?page_id=35', 0, 'page', '', 0),
(34, 1, '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 'Accueil offre', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-09-22 10:23:00', '2021-09-22 08:23:00', '', 18, 'http://localhost/candidature/?p=34', 0, 'revision', '', 0),
(36, 1, '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 'Fiche a postuler', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2021-09-22 10:35:58', '2021-09-22 08:35:58', '', 35, 'http://localhost/candidature/?p=36', 0, 'revision', '', 0),
(47, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 'emphires', '', 'publish', 'closed', 'closed', '', 'emphires', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 0, 'http://localhost/candidature/2021/09/22/emphires/', 0, 'custom_css', '', 0),
(50, 1, '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 'emphires', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 47, 'http://localhost/candidature/?p=50', 0, 'revision', '', 0),
(48, 1, '2021-09-22 14:55:28', '2021-09-22 12:55:28', 'div.cspt-title-bar-wrapper.cspt-bg-color-customt:before{\n	background-color:white;\n	display:none;\n}', 'emphires', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2021-09-22 14:55:28', '2021-09-22 12:55:28', '', 47, 'http://localhost/candidature/?p=48', 0, 'revision', '', 0),
(49, 1, '2021-09-22 15:00:15', '2021-09-22 13:00:15', '{\n    "custom_css[emphires]": {\n        "value": "",\n        "type": "custom_css",\n        "user_id": 1,\n        "date_modified_gmt": "2021-09-22 13:00:15"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '911e9f49-8539-4180-baf8-56e524643602', '', '', '2021-09-22 15:00:15', '2021-09-22 13:00:15', '', 0, 'http://localhost/candidature/?p=49', 0, 'customize_changeset', '', 0),
(53, 1, '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 'accueil', '', 'publish', 'closed', 'closed', '', 'accueil', '', '', '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 0, 'http://localhost/candidature/?page_id=53', 0, 'page', '', 0),
(54, 1, '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 'accueil', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2021-09-22 15:27:07', '2021-09-22 13:27:07', '', 53, 'http://localhost/candidature/?p=54', 0, 'revision', '', 0),
(55, 1, '2021-09-24 13:49:38', '2021-09-24 11:49:38', '', 'Ajout offre', '', 'publish', 'closed', 'closed', '', 'ajout-offre', '', '', '2021-09-24 13:50:12', '2021-09-24 11:50:12', '', 0, 'http://localhost/candidature/?page_id=55', 0, 'page', '', 0),
(56, 1, '2021-09-24 13:49:38', '2021-09-24 11:49:38', '', 'Ajout offre', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2021-09-24 13:49:38', '2021-09-24 11:49:38', '', 55, 'http://localhost/candidature/?p=56', 0, 'revision', '', 0),
(57, 1, '2021-09-24 13:50:31', '2021-09-24 11:50:31', '', 'Ajout offre', '', 'inherit', 'closed', 'closed', '', '55-autosave-v1', '', '', '2021-09-24 13:50:31', '2021-09-24 11:50:31', '', 55, 'http://localhost/candidature/?p=57', 0, 'revision', '', 0),
(58, 1, '2021-09-24 14:28:09', '2021-09-24 12:28:09', '', 'visualisation', '', 'publish', 'closed', 'closed', '', 'visualisation', '', '', '2021-09-24 14:28:09', '2021-09-24 12:28:09', '', 0, 'http://localhost/candidature/?page_id=58', 0, 'page', '', 0),
(59, 1, '2021-09-24 14:28:09', '2021-09-24 12:28:09', '', 'visualisation', '', 'inherit', 'closed', 'closed', '', '58-revision-v1', '', '', '2021-09-24 14:28:09', '2021-09-24 12:28:09', '', 58, 'http://localhost/candidature/?p=59', 0, 'revision', '', 0),
(60, 1, '2021-09-24 14:31:06', '2021-09-24 12:31:06', '', 'visualisation candidats par offre', '', 'publish', 'closed', 'closed', '', 'visualisation-candidats-par-offre', '', '', '2021-09-24 14:31:06', '2021-09-24 12:31:06', '', 0, 'http://localhost/candidature/?page_id=60', 0, 'page', '', 0),
(61, 1, '2021-09-24 14:31:06', '2021-09-24 12:31:06', '', 'visualisation candidats par offre', '', 'inherit', 'closed', 'closed', '', '60-revision-v1', '', '', '2021-09-24 14:31:06', '2021-09-24 12:31:06', '', 60, 'http://localhost/candidature/?p=61', 0, 'revision', '', 0),
(62, 1, '2021-09-24 14:33:41', '2021-09-24 12:33:41', '', 'calcul note candidat par offre', '', 'publish', 'closed', 'closed', '', 'calcul-note-candidat-par-offre', '', '', '2021-09-24 14:33:41', '2021-09-24 12:33:41', '', 0, 'http://localhost/candidature/?page_id=62', 0, 'page', '', 0),
(63, 1, '2021-09-24 14:33:41', '2021-09-24 12:33:41', '', 'calcul note candidat par offre', '', 'inherit', 'closed', 'closed', '', '62-revision-v1', '', '', '2021-09-24 14:33:41', '2021-09-24 12:33:41', '', 62, 'http://localhost/candidature/?p=63', 0, 'revision', '', 0),
(64, 1, '2021-09-24 14:47:22', '2021-09-24 12:47:22', '', 'green background with floral leaves decoration', 'green background with floral leaves decoration', 'inherit', 'open', 'closed', '', 'green-background-with-floral-leaves-decoration', '', '', '2021-09-24 14:47:22', '2021-09-24 12:47:22', '', 0, 'http://localhost/candidature/wp-content/uploads/2021/09/background.jpg', 0, 'attachment', 'image/jpeg', 0),
(66, 1, '2021-09-24 18:58:18', '2021-09-24 16:58:18', '', 'creation compte admin', '', 'publish', 'closed', 'closed', '', 'creation-compte-admin', '', '', '2021-09-24 18:58:18', '2021-09-24 16:58:18', '', 0, 'http://localhost/candidature/?page_id=66', 0, 'page', '', 0),
(67, 1, '2021-09-24 18:58:18', '2021-09-24 16:58:18', '', 'creation compte admin', '', 'inherit', 'closed', 'closed', '', '66-revision-v1', '', '', '2021-09-24 18:58:18', '2021-09-24 16:58:18', '', 66, 'http://localhost/candidature/?p=67', 0, 'revision', '', 0),
(68, 1, '2021-09-24 21:05:36', '2021-09-24 19:05:36', '', 'formulaire deja postuler', '', 'publish', 'closed', 'closed', '', 'formulaire-deja-postuler', '', '', '2021-09-24 21:05:36', '2021-09-24 19:05:36', '', 0, 'http://localhost/candidature/?page_id=68', 0, 'page', '', 0),
(69, 1, '2021-09-24 21:05:36', '2021-09-24 19:05:36', '', 'formulaire deja postuler', '', 'inherit', 'closed', 'closed', '', '68-revision-v1', '', '', '2021-09-24 21:05:36', '2021-09-24 19:05:36', '', 68, 'http://localhost/candidature/?p=69', 0, 'revision', '', 0),
(72, 1, '2021-09-29 19:08:10', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-09-29 19:08:10', '0000-00-00 00:00:00', '', 0, 'http://localhost/candidature/?p=72', 0, 'post', '', 0),
(73, 1, '2021-09-29 23:42:56', '2021-09-29 21:42:56', '', 'Point-modulable', '', 'publish', 'closed', 'closed', '', 'point-modulable', '', '', '2021-09-29 23:42:56', '2021-09-29 21:42:56', '', 0, 'http://localhost/candidature/?page_id=73', 0, 'page', '', 0),
(74, 1, '2021-09-29 23:42:56', '2021-09-29 21:42:56', '', 'Point-modulable', '', 'inherit', 'closed', 'closed', '', '73-revision-v1', '', '', '2021-09-29 23:42:56', '2021-09-29 21:42:56', '', 73, 'http://localhost/candidature/?p=74', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_postuler`
--

CREATE TABLE `ec_postuler` (
  `id_offre` int(11) NOT NULL,
  `id_candidat` varchar(250) NOT NULL,
  `note` float NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ec_postuler`
--

INSERT INTO `ec_postuler` (`id_offre`, `id_candidat`, `note`, `date`) VALUES
(3, 'mouhamadou.diallo@etu.ussein.edu.sn', 24, ''),
(3, 'mouhamadou.diallo@etu.ussein.edu.sn', 24, ''),
(1, 'manemamadouyaya@gmail.com', 0, ''),
(1, 'manemamadouyaya@gmail.com', 0, ''),
(1, 'manemamadouyaya@gmail.com', 0, ''),
(1, 'manemamadouyaya@gmail.com', 0, ''),
(1, 'manemamadouyaya@gmail.com', 0, ''),
(3, 'manemamadouyaya@gmail.com', 0, '27 - 09 - 2021');

-- --------------------------------------------------------

--
-- Structure de la table `ec_termmeta`
--

CREATE TABLE `ec_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ec_terms`
--

CREATE TABLE `ec_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_terms`
--

INSERT INTO `ec_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'Menu Général', 'menu-general', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_term_relationships`
--

CREATE TABLE `ec_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_term_relationships`
--

INSERT INTO `ec_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(22, 2, 0),
(44, 2, 0),
(45, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ec_term_taxonomy`
--

CREATE TABLE `ec_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_term_taxonomy`
--

INSERT INTO `ec_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ec_usermeta`
--

CREATE TABLE `ec_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_usermeta`
--

INSERT INTO `ec_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'stagedisi'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'ec_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(13, 1, 'ec_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:3:{s:64:"b30af25f145c41c74802334f60131ef525f3bcf18e4f083bc2446ec3065eca0c";a:4:{s:10:"expiration";i:1633439114;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";s:5:"login";i:1632229514;}s:64:"ecc4a09b3b9bc8ee895bbe0c392424a2e58efa20160da53c693f9b63b0380f80";a:4:{s:10:"expiration";i:1633103730;s:2:"ip";s:3:"::1";s:2:"ua";s:130:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36 Edg/93.0.961.52";s:5:"login";i:1632930930;}s:64:"9beffd3f95a42bd91a11f38973d5eeba373a16e2cf8edfa85e8854b1da894777";a:4:{s:10:"expiration";i:1633163840;s:2:"ip";s:3:"::1";s:2:"ua";s:130:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36 Edg/93.0.961.52";s:5:"login";i:1632991040;}}'),
(17, 1, 'ec_dashboard_quick_press_last_post_id', '71'),
(18, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(19, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:"add-post_tag";i:1;s:15:"add-post_format";}'),
(20, 1, 'nav_menu_recently_edited', '2'),
(21, 1, 'ec_user-settings', 'libraryContent=browse'),
(22, 1, 'ec_user-settings-time', '1632755544');

-- --------------------------------------------------------

--
-- Structure de la table `ec_users`
--

CREATE TABLE `ec_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `ec_users`
--

INSERT INTO `ec_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'stagedisi', '$P$BxTDexcWCTrT05FePxb5cdDfZEScPW1', 'stagedisi', 'candidature@gmail.com', 'http://localhost/candidature', '2021-09-13 12:36:57', '', 0, 'stagedisi');

-- --------------------------------------------------------

--
-- Structure de la table `note_age`
--

CREATE TABLE `note_age` (
  `nom` text NOT NULL,
  `note` float NOT NULL,
  `defaut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `note_age`
--

INSERT INTO `note_age` (`nom`, `note`, `defaut`) VALUES
('master1', 10, 10),
('master2', 8, 8),
('master3', 6, 6),
('master4', 4, 4),
('master5', 2, 2),
('master6', 0, 0),
('doctorat1', 10, 10),
('doctorat2', 10, 10),
('doctorat3', 8, 8),
('doctorat4', 6, 6),
('doctorat5', 4, 4),
('doctorat6', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ec_commentmeta`
--
ALTER TABLE `ec_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `ec_comments`
--
ALTER TABLE `ec_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Index pour la table `ec_links`
--
ALTER TABLE `ec_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Index pour la table `ec_offre`
--
ALTER TABLE `ec_offre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ec_options`
--
ALTER TABLE `ec_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Index pour la table `ec_postmeta`
--
ALTER TABLE `ec_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `ec_posts`
--
ALTER TABLE `ec_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Index pour la table `ec_termmeta`
--
ALTER TABLE `ec_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `ec_terms`
--
ALTER TABLE `ec_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Index pour la table `ec_term_relationships`
--
ALTER TABLE `ec_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Index pour la table `ec_term_taxonomy`
--
ALTER TABLE `ec_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Index pour la table `ec_usermeta`
--
ALTER TABLE `ec_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `ec_users`
--
ALTER TABLE `ec_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ec_commentmeta`
--
ALTER TABLE `ec_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ec_comments`
--
ALTER TABLE `ec_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `ec_links`
--
ALTER TABLE `ec_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ec_offre`
--
ALTER TABLE `ec_offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ec_options`
--
ALTER TABLE `ec_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;
--
-- AUTO_INCREMENT pour la table `ec_postmeta`
--
ALTER TABLE `ec_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT pour la table `ec_posts`
--
ALTER TABLE `ec_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT pour la table `ec_termmeta`
--
ALTER TABLE `ec_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ec_terms`
--
ALTER TABLE `ec_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ec_term_taxonomy`
--
ALTER TABLE `ec_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ec_usermeta`
--
ALTER TABLE `ec_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `ec_users`
--
ALTER TABLE `ec_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
