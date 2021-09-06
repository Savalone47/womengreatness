-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 sep. 2021 à 17:49
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE `actuality` (
  `actuality_id` int(11) NOT NULL,
  `actuality_title` varchar(255) NOT NULL,
  `actuality_content` text NOT NULL,
  `actuality_picture` text NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `bo_id` int(11) NOT NULL,
  `bo_cat_id` int(11) DEFAULT NULL,
  `bo_title` varchar(100) DEFAULT NULL,
  `bo_description` text DEFAULT NULL,
  `bo_author` varchar(255) DEFAULT NULL,
  `bo_pub_house` varchar(255) DEFAULT NULL,
  `bo_pub_date` date DEFAULT NULL,
  `bo_picture` varchar(50) DEFAULT NULL,
  `bo_price` decimal(12,2) DEFAULT NULL,
  `bo_status` int(11) DEFAULT 1,
  `bo_created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`bo_id`, `bo_cat_id`, `bo_title`, `bo_description`, `bo_author`, `bo_pub_house`, `bo_pub_date`, `bo_picture`, `bo_price`, `bo_status`, `bo_created_at`) VALUES
(1, 2, 'Reading Life', ' Ceici est un test pur et simple', 'Philippe Le Noir', 'SAFINA (SALAMA)', '2021-08-16', 'nopicture.png', '3.00', 1, '2021-08-16'),
(2, 2, 'ETude du marché', ' Ceci est un test avec la photo', 'Philippe Le Noir', 'SAFINA', '2021-08-10', '160821034036.jpg', '4.70', 1, '2021-08-16');

-- --------------------------------------------------------

--
-- Structure de la table `book_category`
--

CREATE TABLE `book_category` (
  `bo_cat_id` int(11) NOT NULL,
  `bo_cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book_category`
--

INSERT INTO `book_category` (`bo_cat_id`, `bo_cat_name`) VALUES
(1, 'Programming'),
(2, 'Electricy');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_user`
--

CREATE TABLE `categorie_user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category_actuality`
--

CREATE TABLE `category_actuality` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_descriptionn` text DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category_blog`
--

CREATE TABLE `category_blog` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_blog`
--

INSERT INTO `category_blog` (`category_id`, `category_name`, `category_description`, `created_at`) VALUES
(1, 'journal', 'Newyortime', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` longtext NOT NULL,
  `comment_name_user` varchar(255) NOT NULL,
  `comment_item_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `comment_name_user`, `comment_item_id`, `created_at`) VALUES
(1, 'salut le monde', 'elvis', 1, '2021-08-21'),
(2, 'juste un test pour te faire chier', 'elvis', 8, '2021-08-21'),
(3, 'Elvis tu es un malade mental', 'savalone', 6, '2021-08-21');

-- --------------------------------------------------------

--
-- Structure de la table `commission_groupe`
--

CREATE TABLE `commission_groupe` (
  `id` int(11) NOT NULL,
  `id_commission` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commission_tech`
--

CREATE TABLE `commission_tech` (
  `id` int(11) NOT NULL,
  `nom_commission` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `ev_id` int(11) NOT NULL,
  `ev_cat_id` int(11) NOT NULL,
  `ev_title` varchar(100) DEFAULT NULL,
  `ev_description` text DEFAULT NULL,
  `ev_picture` varchar(100) DEFAULT NULL,
  `ev_date` date DEFAULT NULL,
  `ev_start_time` varchar(20) DEFAULT NULL,
  `ev_end_time` varchar(20) DEFAULT NULL,
  `ev_price` decimal(12,2) DEFAULT NULL,
  `ev_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `ev_status` int(11) DEFAULT NULL,
  `ev_country` varchar(200) NOT NULL,
  `ev_city` varchar(200) NOT NULL,
  `ev_place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`ev_id`, `ev_cat_id`, `ev_title`, `ev_description`, `ev_picture`, `ev_date`, `ev_start_time`, `ev_end_time`, `ev_price`, `ev_created_at`, `ev_status`, `ev_country`, `ev_city`, `ev_place`) VALUES
(1, 3, 'United Kingdom and Great Britain', 'Welcome to AFAR Answers, a deep dive into all your unanswered travel questions. Next up: What’s the difference between the United Kingdom and Great Britain?\r\n\r\nFollowing on from our explainer about the difference between Holland and the Netherlands—and as AFAR’s resident Brit—I’ve been asked to untangle the nomenclature of my home country (and its neighbors). It’s all a bit complicated, so buckle up . . .\r\n\r\nSo what is the difference between the United Kingdom, Great Britain, and the rest?\r\nThis might be best with some bullets. \r\n\r\nThe British Isles refers to a group of islands in the North Atlantic off the coast of continental Europe. These include Great Britain and Ireland, as well as numerous others (the Isles of Scilly off the Cornish coast; the Isle of Man in the Irish Sea; the Shetland Islands, the Hebrides, and the Orkney Islands off Scotland). And there’s the Channel Islands, which are closer to France and are not part of the U.K. or the EU but possessions of the British crown and whose residents are British citizens.\r\nGreat Britain is the squashed triangle-shaped island that includes England, Wales, and Scotland.\r\nThe United Kingdom of Great Britain and Northern Ireland (or U.K.) consists, as its full name suggests, of England, Wales, Scotland, and Northern Ireland. Their capitals are London, Cardiff, Edinburgh, and Belfast, respectively.\r\nA Brit is a British person or Briton (a native of Great Britain) (also crustaceans, apparently).\r\nBritish means you’re a native of GB or the U.K.\r\nEssentially, Great Britain means the island. The United Kingdom refers to the sovereign country.\r\n\r\nGreek scholar and geographer Ptolemy used the term “Great Britain” to distinguish the island from Ireland (which he called “Little Britain”) for his circa 150 C.E. map of the region—and “Great Britain” was also used later to differentiate the region from Brittany, in France, which was known as Britannia minor, or lesser Britain. (Little Britain nowadays just means a 2003 sketch comedy lampooning the British, while “Little Englander” is a pejorative term for a diehard nationalist.)', '110821031601.jpg', '2021-08-16', '12:00:00', '15:00:00', '20.00', '2021-08-09 13:42:34', 1, '', '', ''),
(2, 1, '(This also has been edited) Ceci est un test 2', 'Ceci est un test 2', 'nopicture.png', '2021-08-16', '12:00:00', '15:00:00', '20.00', '2021-08-09 13:43:25', 1, '', '', ''),
(3, 1, '(It has been edited) Procedure du Mariage en Europe', ' C est bien beau', 'nopicture.png', '2021-08-12', '14:57', '16:57', '22.00', '2021-08-10 13:57:42', NULL, '', '', ''),
(5, 1, 'RED PANDA', ' Bientôt sur le marché, RED PANDA', 'nopicture.png', '2021-08-30', '19:00', '13:00', '11.00', '2021-08-11 13:57:22', NULL, '', '', ''),
(6, 2, 'NEWYORK-TIME', ' Bientôt sur le marché, MS', 'nopicture.png', '2021-08-30', '19:00', '13:00', '20.00', '2021-08-11 13:58:56', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `event_category`
--

CREATE TABLE `event_category` (
  `ev_cat_id` int(11) NOT NULL,
  `ev_cat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event_category`
--

INSERT INTO `event_category` (`ev_cat_id`, `ev_cat_name`) VALUES
(1, 'Technology'),
(2, 'Medical'),
(3, 'Geography');

-- --------------------------------------------------------

--
-- Structure de la table `facilitator`
--

CREATE TABLE `facilitator` (
  `faci_id` int(11) NOT NULL,
  `faci_name` varchar(200) NOT NULL,
  `faci_email` varchar(200) NOT NULL,
  `faci_phone` varchar(200) NOT NULL,
  `faci_country` varchar(200) NOT NULL,
  `faci_organisation` varchar(200) NOT NULL,
  `faci_position` varchar(200) NOT NULL,
  `faci_status` int(11) NOT NULL,
  `faci_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facilitator`
--

INSERT INTO `facilitator` (`faci_id`, `faci_name`, `faci_email`, `faci_phone`, `faci_country`, `faci_organisation`, `faci_position`, `faci_status`, `faci_picture`) VALUES
(1, 'Jesse Mccarty', 'zyhumale@mailinator.com', '+1 (388) 566-2346', 'DZ', 'Forbes Head Co', 'Est totam magni sint', 0, 'nopicture.png'),
(2, 'savalone47', 'scottavalone@gmail.com', '0978169013', 'AO', 'NgomaDigitech', 'Developer Web', 0, 'nopicture.png');

-- --------------------------------------------------------

--
-- Structure de la table `goupe`
--

CREATE TABLE `goupe` (
  `id` int(11) NOT NULL,
  `nom_groupe` varchar(50) NOT NULL,
  `numero_enregistrement` varchar(255) NOT NULL,
  `logo_groupe` text DEFAULT NULL,
  `id_organisation` int(11) NOT NULL,
  `groupe_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `goupe`
--

INSERT INTO `goupe` (`id`, `nom_groupe`, `numero_enregistrement`, `logo_groupe`, `id_organisation`, `groupe_user_id`) VALUES
(1, 'test', 'ertyuiprywequio', '', 1, 1),
(2, 'test2', 'groupe61224c89c9d726.24768297', NULL, 2, 1),
(3, 'htag', 'groupe61224db71591b8.76647646', NULL, 1, 1),
(4, 'com', 'groupe6122575b14ca10.15668558', NULL, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_user`
--

CREATE TABLE `groupe_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe_user`
--

INSERT INTO `groupe_user` (`id`, `id_user`, `id_group`) VALUES
(1, 1, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `impact`
--

CREATE TABLE `impact` (
  `impact_id` int(11) NOT NULL,
  `impact_titlte` varchar(255) NOT NULL,
  `impact_picture` text NOT NULL,
  `impact_content` longtext NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `impact`
--

INSERT INTO `impact` (`impact_id`, `impact_titlte`, `impact_picture`, `impact_content`, `create_at`) VALUES
(1, 'ertkfvewdqs', '/uploads/impact/blog612798258f0b1.jpg', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', '2021-08-26');

-- --------------------------------------------------------

--
-- Structure de la table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `issue_title` text NOT NULL,
  `issue_picture` text NOT NULL,
  `issue_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `item_blog`
--

CREATE TABLE `item_blog` (
  `item_id` int(11) NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_content` longtext NOT NULL,
  `item_picture` text NOT NULL,
  `item_category_id` int(11) NOT NULL,
  `item_user_id` int(11) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `item_blog`
--

INSERT INTO `item_blog` (`item_id`, `item_title`, `item_content`, `item_picture`, `item_category_id`, `item_user_id`, `create_at`) VALUES
(1, 'kaka', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/driver6120d452210882.86675584210821122418.jpg', 0, 1, '2020-02-01'),
(2, 'kaka', 'sertyuiofjkgjklyuiotyuiotyui', '/uploads/driver6120e035c61466.10611417210821011501.jpg', 1, 1, '2020-02-01'),
(3, 'kaka', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/driver6120e174730659.19855773210821012020.jpg', 1, 1, '2020-02-01'),
(4, 'kaka', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/blog6120e2ad6082d7.02316198.jpg', 1, 1, '2020-02-01'),
(5, 'kaka', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/blog6120e34d9c62e9.80999817.jpg', 1, 1, '2020-02-01'),
(6, 'kaka', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/blog6120e45f6e21f6.58929708.jpg', 1, 1, '2020-02-01'),
(7, 'ktyuika', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/blog6120e53f5f7c7.jpg', 1, 1, '2020-02-01'),
(8, 'Blog ', 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigasterSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster', '/uploads/blog6120f107635ea.jpg', 1, 1, '2020-02-01');

-- --------------------------------------------------------

--
-- Structure de la table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nom_organisation` varchar(50) NOT NULL,
  `numero_enregistrement` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `site_internet` varchar(255) NOT NULL,
  `secteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `organisation`
--

INSERT INTO `organisation` (`id`, `user_id`, `nom_organisation`, `numero_enregistrement`, `pays`, `ville`, `province`, `site_internet`, `secteur`) VALUES
(1, 1, 'inboutics', 'ertyuio3678', 'France', 'kampemba', 'haut-katanga', 'http://localhost/phpmyadmin/tbl_structure.php', 2),
(2, NULL, 'like', 'ertyuio3678', 'France', 'Lubumbashi', 'haut-katanga', 'http://localhost/phpmyadmin/tbl_structure.php', 1),
(3, 3, 'inboutics', 'ertyuio3678', 'France', 'Lubumbashi ', 'haut-katanga', 'http://localhost/phpmyadmin/tbl_structure.php', 1),
(4, 3, 'communication', 'enregistration6122573bed5213.73575034', 'France', 'Lubumbashi ($1,5)', 'haut-katanga', 'http://localhost/phpmyadmin/tbl_structure.php', 2);

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

CREATE TABLE `permission` (
  `id` int(122) UNSIGNED NOT NULL,
  `user_type` varchar(250) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `permission`
--

INSERT INTO `permission` (`id`, `user_type`, `data`) VALUES
(1, 'Member', '{\"users\":{\"own_create\":\"1\",\"own_read\":\"1\",\"own_update\":\"1\",\"own_delete\":\"1\"}}'),
(2, 'admin', '{\"users\":{\"own_create\":\"1\",\"own_read\":\"1\",\"own_update\":\"1\",\"own_delete\":\"1\",\"all_create\":\"1\",\"all_read\":\"1\",\"all_update\":\"1\",\"all_delete\":\"1\"}}');

-- --------------------------------------------------------

--
-- Structure de la table `podcasts`
--

CREATE TABLE `podcasts` (
  `podcast_id` int(11) NOT NULL,
  `podcast_title` varchar(100) NOT NULL,
  `podcast_info` varchar(500) NOT NULL,
  `file` varchar(200) NOT NULL,
  `podcast_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `podcasts`
--

INSERT INTO `podcasts` (`podcast_id`, `podcast_title`, `podcast_info`, `file`, `podcast_category`) VALUES
(30, 'test podcast cat', 'tydfquisopdiuwe9qi', '/uploads/podcast/podcast612d0bca43998.mp4', '4');

-- --------------------------------------------------------

--
-- Structure de la table `pod_categorie`
--

CREATE TABLE `pod_categorie` (
  `pod_cate_id` int(11) NOT NULL,
  `pod_cate_nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pod_categorie`
--

INSERT INTO `pod_categorie` (`pod_cate_id`, `pod_cate_nom`) VALUES
(1, 'story'),
(2, 'heart'),
(3, 'eat'),
(4, 'easy tv');

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `ressource_id` int(11) NOT NULL,
  `ressource_title` text NOT NULL,
  `ressource_resume` text NOT NULL,
  `ressource_source` text NOT NULL,
  `ressource_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`ressource_id`, `ressource_title`, `ressource_resume`, `ressource_source`, `ressource_link`) VALUES
(2, 'tes of update ressource', 'salut jibril', 'google', 'https://stackoverflow.com/questions/39059978/django-allauth-why-does-facebook-signup-ask-for-password-from-an-already-logged');

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

CREATE TABLE `schedule` (
  `sche_id` int(11) NOT NULL,
  `ev_id` int(11) NOT NULL,
  `sche_date` date DEFAULT NULL,
  `sche_start_time` time DEFAULT NULL,
  `sche_end_time` time DEFAULT NULL,
  `sche_header` varchar(255) DEFAULT NULL,
  `sche_title` varchar(255) DEFAULT NULL,
  `faci_id` int(11) DEFAULT NULL,
  `sche_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `schedule`
--

INSERT INTO `schedule` (`sche_id`, `ev_id`, `sche_date`, `sche_start_time`, `sche_end_time`, `sche_header`, `sche_title`, `faci_id`, `sche_status`) VALUES
(1, 4, '2021-08-16', '16:38:00', '20:38:00', 'TEst', 'Test', 1, 1),
(2, 4, '2021-08-20', '17:21:00', '19:21:00', 'ttt', 'toto', 1, 1),
(3, 3, '2021-08-25', '18:57:00', '20:57:00', 'Test', 'toto', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE `secteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`id`, `nom`) VALUES
(1, 'informatique'),
(2, 'politique');

-- --------------------------------------------------------

--
-- Structure de la table `setting`
--

CREATE TABLE `setting` (
  `id` int(122) UNSIGNED NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `setting`
--

INSERT INTO `setting` (`id`, `keys`, `value`) VALUES
(1, 'website', 'User Login and Management'),
(2, 'logo', 'logo_1627911500.png'),
(3, 'favicon', 'favicon.ico'),
(4, 'SMTP_EMAIL', ''),
(5, 'HOST', ''),
(6, 'PORT', ''),
(7, 'SMTP_SECURE', ''),
(8, 'SMTP_PASSWORD', ''),
(9, 'mail_setting', 'simple_mail'),
(10, 'company_name', 'Company Name'),
(11, 'crud_list', 'users,User'),
(12, 'EMAIL', ''),
(13, 'UserModules', 'yes'),
(14, 'register_allowed', '1'),
(15, 'email_invitation', '1'),
(16, 'admin_approval', '0'),
(17, 'user_type', '[\"Member\"]');

-- --------------------------------------------------------

--
-- Structure de la table `storie`
--

CREATE TABLE `storie` (
  `storie_id` int(11) NOT NULL,
  `storie_title` varchar(255) NOT NULL,
  `storie_picture` text NOT NULL,
  `storie_content` longtext NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `storie`
--

INSERT INTO `storie` (`storie_id`, `storie_title`, `storie_picture`, `storie_content`, `create_at`) VALUES
(1, 'storie test', '/uploads/storie/storie6127922265a41.jpg', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\r\n\r\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', '2021-08-26');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `pays` int(11) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `nom_societe` varchar(255) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `secteur` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `categorie_user` int(11) NOT NULL,
  `num_tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(121) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `var_key` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `user_id`, `var_key`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`) VALUES
(1, '1', NULL, 'active', '0', 'admin', '12345', 'admin@gmail.com', '1629109709493_1630154838.jpg', '1'),
(2, '1', NULL, 'active', '0', 'savalone', '$2y$10$3t0hIDNstudZIBQxQl86VednxGhlIimR.Mi1VCBfI87sVX7tRBkVG', 'scottavalone@gmail.com', 'user.png', '2'),
(4, NULL, NULL, 'active', '0', 'elviskankola', 'elviskankola', 'elviskankola1@gmail.com', NULL, '2'),
(5, NULL, NULL, 'active', '0', 'kalenga', 'codecode', 'elviskankola1@gmail.com', NULL, '2');

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `user_role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `user_role_name`) VALUES
(1, 'admin'),
(2, 'ordinaire');

-- --------------------------------------------------------

--
-- Structure de la table `view_blog`
--

CREATE TABLE `view_blog` (
  `view_id` int(11) NOT NULL,
  `view_item_id` int(11) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD PRIMARY KEY (`actuality_id`);

--
-- Index pour la table `categorie_user`
--
ALTER TABLE `categorie_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_actuality`
--
ALTER TABLE `category_actuality`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `category_blog`
--
ALTER TABLE `category_blog`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commission_groupe`
--
ALTER TABLE `commission_groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commission_tech`
--
ALTER TABLE `commission_tech`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facilitator`
--
ALTER TABLE `facilitator`
  ADD PRIMARY KEY (`faci_id`);

--
-- Index pour la table `goupe`
--
ALTER TABLE `goupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe_user`
--
ALTER TABLE `groupe_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `impact`
--
ALTER TABLE `impact`
  ADD PRIMARY KEY (`impact_id`);

--
-- Index pour la table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Index pour la table `item_blog`
--
ALTER TABLE `item_blog`
  ADD PRIMARY KEY (`item_id`);

--
-- Index pour la table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`podcast_id`);

--
-- Index pour la table `pod_categorie`
--
ALTER TABLE `pod_categorie`
  ADD PRIMARY KEY (`pod_cate_id`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`ressource_id`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `storie`
--
ALTER TABLE `storie`
  ADD PRIMARY KEY (`storie_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Index pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Index pour la table `view_blog`
--
ALTER TABLE `view_blog`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actuality`
--
ALTER TABLE `actuality`
  MODIFY `actuality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie_user`
--
ALTER TABLE `categorie_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category_actuality`
--
ALTER TABLE `category_actuality`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category_blog`
--
ALTER TABLE `category_blog`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commission_groupe`
--
ALTER TABLE `commission_groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commission_tech`
--
ALTER TABLE `commission_tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facilitator`
--
ALTER TABLE `facilitator`
  MODIFY `faci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `goupe`
--
ALTER TABLE `goupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `groupe_user`
--
ALTER TABLE `groupe_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `impact`
--
ALTER TABLE `impact`
  MODIFY `impact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `item_blog`
--
ALTER TABLE `item_blog`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `podcast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `pod_categorie`
--
ALTER TABLE `pod_categorie`
  MODIFY `pod_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `ressource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `storie`
--
ALTER TABLE `storie`
  MODIFY `storie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `view_blog`
--
ALTER TABLE `view_blog`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
