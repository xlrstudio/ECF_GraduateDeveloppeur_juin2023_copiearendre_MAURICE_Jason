-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 fév. 2023 à 16:05
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
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Déchargement des données de la table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'Database', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"phpmyadmin\",\"test\",\"{db_jason050223}\",\"{db_jason280123}\",\"{db_jason}\",\"{db_name user}\",\"{db_name}\",\"{db_name}.user\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure de la table @TABLE@\",\"latex_structure_continued_caption\":\"Structure de la table @TABLE@ (suite)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Contenu de la table @TABLE@\",\"latex_data_continued_caption\":\"Contenu de la table @TABLE@ (suite)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"{db_jason280123}\",\"table\":\"user\"},{\"db\":\"{db_jason280123}\",\"table\":\"users\"},{\"db\":\"mysql\",\"table\":\"column_stats\"},{\"db\":\"mysql\",\"table\":\"columns_priv\"},{\"db\":\"phpmyadmin\",\"table\":\"pma__users\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Déchargement des données de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', '{db_jason280123}', 'user', '{\"sorted_col\":\"`user`.`roles` ASC\"}', '2023-02-11 15:14:51');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-02-17 15:04:25', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"fr\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de données : `{db_jason050223}`
--
CREATE DATABASE IF NOT EXISTS `{db_jason050223}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_jason050223}`;

-- --------------------------------------------------------

--
-- Structure de la table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de données : `{db_jason280123}`
--
CREATE DATABASE IF NOT EXISTS `{db_jason280123}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_jason280123}`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `category_order` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `coupons_types_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `discount` int(11) NOT NULL,
  `max_usage` int(11) NOT NULL,
  `validity` datetime NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `coupons_types`
--

CREATE TABLE `coupons_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230126102915', '2023-01-28 11:48:34', 1669),
('DoctrineMigrations\\Version20230126162902', '2023-01-28 11:49:03', 665),
('DoctrineMigrations\\Version20230128115104', '2023-01-28 12:10:24', 405),
('DoctrineMigrations\\Version20230202113641', '2023-02-02 12:38:07', 239);

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `couverts` int(11) NOT NULL,
  `heure` int(11) NOT NULL,
  `allergies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `email`, `date`, `nom`, `prenom`, `couverts`, `heure`, `allergies`) VALUES
(72, 'ferreira.christine@lucas.com', '2023-01-01', 'Capucine', 'Lejeune de la Lebreton', 2, 12, 'Maltodextrines'),
(73, 'olivier04@prevost.fr', '2023-01-02', 'Simone', 'Hardy', 1, 13, 'non'),
(74, 'abaudry@tessier.net', '2023-01-03', 'Anne', 'de la Adam', 4, 13, 'Crustacés'),
(75, 'diane93@caron.net', '2023-01-05', 'Paulette', 'Schneider', 2, 14, 'non'),
(76, 'buisson.augustin@tele2.fr', '2023-01-01', 'Simone', 'Vincent', 5, 12, 'non'),
(77, 'rperrier@launay.fr', '2023-01-01', 'Laurence', 'Lefevre', 8, 20, 'Soja'),
(78, 'claudine69@noos.fr', '2023-01-01', 'Jean', 'Le Goff', 2, 13, 'non'),
(79, 'user2@symrecipe.fr', '2023-01-01', 'Amélie', 'Chauveau', 12, 22, 'Huile et la graisse de soja entièrement raffinées.'),
(80, 'claudine69@noos.fr', '2023-02-01', 'Henriette-Lucy', 'Gomes', 3, 11, 'non'),
(81, 'rperrier@launay.fr', '2023-02-08', 'Sophie', 'Brunel', 1, 12, 'non');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `message`, `titre`, `email`) VALUES
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'renee00@noos.fr'),
(5, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Why do we use it?', 'kmartins@paris.net'),
(6, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Where does it come from?', 'franck.verdier@free.fr'),
(7, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Where can I get some?', 'bhardy@live.com'),
(8, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, yo', 'Lorem Ipsum', 'gcourtois@bouygtel.fr'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas vulputate augue varius facilisis. Nam accumsan nisl aliquam dolor ullamcorper scelerisque. Praesent quis rutrum quam. Quisque aliquam efficitur ligula, vel pulvinar arcu elementum non. D', 'In molestie urna dolo', 'obonnet@lemonnier.org'),
(10, 'In molestie urna dolor. Morbi ac leo aliquet, accumsan diam maximus, pellentesque nulla. Quisque et porta velit. Proin non tortor et quam bibendum condimentum. Donec iaculis ante sit amet nulla egestas, eu interdum mi laoreet. In scelerisque convallis auc', 'Proin ac varius quam', 'gomez.marthe@gauthier.com'),
(11, 'Nulla nibh nulla, condimentum eget euismod a, tristique eget sapien. Nullam viverra, magna et sagittis luctus, risus tortor ornare urna, vitae consequat quam dolor venenatis lacus. Sed faucibus, tellus sit amet commodo sollicitudin, urna lectus viverra ve', 'Nam tempor aliquam lectus', 'ylaporte@club-internet.fr'),
(12, 'Phasellus pharetra tincidunt metus, quis tempus nunc molestie convallis. Morbi euismod nulla maximus ex molestie auctor. Sed ut nisi vitae enim laoreet consectetur. Pellentesque vitae urna sed erat consectetur fermentum. Vivamus fermentum purus leo, eu ma', 'Nam molestie convallis', 'andre.gay@tiscali.fr'),
(13, 'Nam tempor aliquam lectus, in accumsan lectus faucibus a. Phasellus pharetra tincidunt metus, quis tempus nunc molestie convallis. Morbi euismod nulla maximus ex molestie auctor. Sed ut nisi vitae enim laoreet consectetur. Pellentesque vitae urna sed erat', 'Sed at dapibus justo', 'barbe.maggie@delannoy.com'),
(14, 'In lacinia pulvinar nibh in viverra. Nam euismod finibus volutpat. In auctor in lorem id elementum. Integer lorem lacus, malesuada in massa rutrum, vestibulum imperdiet odio. Cras vestibulum mauris risus, sit amet aliquet nibh auctor et. Fusce fringilla v', 'Donec sagittis', 'user1@symrecipe.fr'),
(15, 'Vestibulum sit amet nibh vel enim luctus auctor. Maecenas pharetra viverra eros et pharetra. Mauris in libero tellus. Sed dui tortor, pellentesque posuere interdum id, tempor et neque. Nulla sit amet metus id justo ultrices faucibus. Fusce pretium neque n', 'Nulla dapibus', 'pperrier@noos.fr'),
(16, 'Duis commodo non mi eget volutpat. Pellentesque sollicitudin felis purus, quis scelerisque nisl pulvinar et. Proin ornare felis non erat cursus hendrerit. Aliquam ullamcorper, mi et faucibus efficitur, diam tellus volutpat eros, eget aliquet ante tellus e', 'consectetur ante ut velit tristique congue', 'jourdan.marc@rossi.fr'),
(17, 'Nulla consectetur ante ut velit tristique congue. Donec posuere, magna at pretium molestie, ipsum dolor ultrices purus, id auctor lacus dui sed justo. Nunc vitae est justo. Proin dictum diam at nunc pharetra, non cursus metus sollicitudin. Interdum et mal', 'Duis commodo', 'noemi58@buisson.fr');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `coupons_id` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders_details`
--

CREATE TABLE `orders_details` (
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)',
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `nb_people` int(11) DEFAULT NULL,
  `difficulty` int(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `price` double DEFAULT NULL,
  `is_favorite` tinyint(1) NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipe_ingredient`
--

CREATE TABLE `recipe_ingredient` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `couverts` varchar(255) NOT NULL,
  `confidentialite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `tel`, `allergies`, `couverts`, `confidentialite`) VALUES
(32, 'jason@gmail.com', '[\"ROLE_USER\"]', '$2y$13$dS4HC0SevX6pXhDp6uGR.uhWMrfmA8pjQTTchHVRVo0BrFlfFSQU6', 'Michel', 'Duchene', '0768485968', 'non', '3', ''),
(33, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$rtFnsGiOyUuUIhdM7Uf6ROdVZPXqAxZvYV0aTP1GYXIekBuXmcs8K', '', '', '', '', '', ''),
(124, 'renee00@noos.fr', '[\"ROLE_USER\"]', '$2y$13$mru6u753b8KAoHQtrtP2GuB9y54mJg2.0xQfOVlj6qkNu5WMiFU6K', '', '', '', '', '', ''),
(125, 'kmartins@paris.net', '[\"ROLE_USER\"]', '$2y$13$Tc47AJYVVzKldLLjXcBUHeC4rdms4rKKUS19MNq07TMl/Xj11/N0m', '', '', '', '', '', ''),
(126, 'franck.verdier@free.fr', '[\"ROLE_USER\"]', '$2y$13$22QmWKqFphfL3fSUUcD9T.nuXkf7O67qFien2ISryiZmJNWeL1/hy', '', '', '', '', '', ''),
(127, 'bhardy@live.com', '[\"ROLE_USER\"]', '$2y$13$ZQqnl4LLFKywx7jNgZBlLOx7aw98ucyIZ0TAJpCc.ipc9Ze5E/Hsi', '', '', '', '', '', ''),
(128, 'gcourtois@bouygtel.fr', '[\"ROLE_USER\"]', '$2y$13$EEycshClL/Ry0FgaBgNdK..teOnyExCYVRtJXvvohFcLIRfj43ixC', '', '', '', '', '', ''),
(129, 'obonnet@lemonnier.org', '[\"ROLE_USER\"]', '$2y$13$LU3qcknvdds..f4OF1c4z.c8cRRwt8AIs265RmhoVENQJpfbuY6o.', '', '', '', '', '', ''),
(130, 'gomez.marthe@gauthier.com', '[\"ROLE_USER\"]', '$2y$13$vDrWi8i5BQJwRPpW2rscCOaw.zwkivOHRwom8MuofJKF6WCQosdXy', '', '', '', '', '', ''),
(131, 'ylaporte@club-internet.fr', '[\"ROLE_USER\"]', '$2y$13$U1ap81Y7fIjMyOEpju4Rq..AHbAY13ilDGAk15EJwjYgg78oqiINe', '', '', '', '', '', ''),
(132, 'andre.gay@tiscali.fr', '[\"ROLE_USER\"]', '$2y$13$jam8nQKQJdKCol8tMxjNsO.h9FK0A9Loz3uwIOAPayTrMmapqUzZq', '', '', '', '', '', ''),
(133, 'barbe.maggie@delannoy.com', '[\"ROLE_USER\"]', '$2y$13$iC0K6x9d6lNNYxNyeeCkWuI1I2OVkRVfI.ZUi1lPMj2kfKWYTgBti', '', '', '', '', '', ''),
(134, 'user1@symrecipe.fr', '[\"ROLE_USER\"]', '$2y$13$OD7olTDdR/.AU4JoqThuTOVqlgqFLpTHIkMHOu.Uya0Ra.4FcM74a', '', '', '', '', '', ''),
(135, 'pperrier@noos.fr', '[\"ROLE_USER\"]', '$2y$13$b69BT2p3L.XsiukvNEufqeQv3h0H8KOhoeHWGscvxXpbE0MRayBrW', '', '', '', '', '', ''),
(136, 'jourdan.marc@rossi.fr', '[\"ROLE_USER\"]', '$2y$13$2dsJh0Wv6q17qelJQZgR6uTsy8EXdzP.Hqvi924tZcOHANoDzNDla', '', '', '', '', '', ''),
(137, 'noemi58@buisson.fr', '[\"ROLE_USER\"]', '$2y$13$PsGvIvMNlJDDbxbGp1eXaeSbltZ0aVPmilVoJzOK3x43i3OFT4YEm', '', '', '', '', '', ''),
(138, 'ferreira.christine@lucas.com', '[\"ROLE_USER\"]', '$2y$13$4IpMQOzm2L7XWS/NewAGMecc93SjXVbHFiGflVuaoKdnJBgYp9blC', '', '', '', '', '', ''),
(139, 'olivier04@prevost.fr', '[\"ROLE_USER\"]', '$2y$13$pvmrrh33BoshzEH596cYGO1CNqcXWWky8jEZjX5DIVgYak1HJz2om', '', '', '', '', '', ''),
(140, 'abaudry@tessier.net', '[\"ROLE_USER\"]', '$2y$13$5ZK/bFMUhjr.sK/TErMz9uZB4srgIZowJau4Tl5/McE19WsfgdUTq', '', '', '', '', '', ''),
(141, 'diane93@caron.net', '[\"ROLE_USER\"]', '$2y$13$bPyxz5kljQ69R0UskNGCduLACk999fhnDouW3HRSScGlS.3PTU6WC', '', '', '', '', '', ''),
(142, 'buisson.augustin@tele2.fr', '[\"ROLE_USER\"]', '$2y$13$/GP09CywiCk2vUK0gpHjmuhYirIqeJsiM.Lg3ylAVn6KAHVf5j0H.', '', '', '', '', '', ''),
(143, 'rperrier@launay.fr', '[\"ROLE_USER\"]', '$2y$13$MvaXyHoRuvobnlmrdZ6QteCJm9OcxwFtwkIza3qnUKp7T6E.Ic6OW', '', '', '', '', '', ''),
(144, 'claudine69@noos.fr', '[\"ROLE_USER\"]', '$2y$13$F1NPuucaRWDkhk/w/KXJHOruW7Jedrma4Q9wZx5fvm7xB6Y3NrTaK', '', '', '', '', '', ''),
(146, 'user2@symrecipe.fr', '[\"ROLE_USER\"]', '$2y$13$ULRG4Zk1BvqsMcYNUThJvePk3/ojjraQMI.TTtH/0FHTcIul/EHZu', '', '', '', '', '', ''),
(147, 'simone.dufour@hardy.com', '[\"ROLE_USER\"]', '$2y$13$nMMrgdFylLVlhTwXZNoiye05Vi0Hm3PPB4Yz9K.kDAFu3Q2Dj9AE6', '', '', '', '', '', ''),
(148, 'alain60@fleury.fr', '[\"ROLE_USER\"]', '$2y$13$ET3s/rZ.fE19/pwOmLiaa.S3gwBOYfUxCedye0/GFXx6g0KTqVWke', '', '', '', '', '', ''),
(149, 'pierre62@ollivier.org', '[\"ROLE_USER\"]', '$2y$13$F.SXvvg9sGqKKkOXasGm5u7bWtf8BDh28eG6pDvfPi9wwJ2nlwxg2', '', '', '', '', '', ''),
(150, 'nleger@henry.com', '[\"ROLE_USER\"]', '$2y$13$IMs8yeD.25KJXM03ocwm4uvMJsHijOE2AaQYtvHLvNEFLDYfKXpCa', '', '', '', '', '', ''),
(151, 'remy.marin@live.com', '[\"ROLE_USER\"]', '$2y$13$EZG5IlpZA5/cMjBzP.s29uOFq8ANpi0MKH7eoz/Zuny8VYdw/PTFC', '', '', '', '', '', ''),
(152, 'masson.stephanie@breton.fr', '[\"ROLE_USER\"]', '$2y$13$0XIGemjgatL8wnbtgPP5UubU0UClLvon65yr79N2P/f7gnQvookAy', '', '', '', '', '', ''),
(153, 'simon.claude@gmail.com', '[\"ROLE_USER\"]', '$2y$13$YA2W3kp2Bb9jp5P2TfqtZum0lnMg5bK.Su92M5/OrDGiw0qSluuIi', '', '', '', '', '', ''),
(154, 'claudine.lelievre@hotmail.fr', '[\"ROLE_USER\"]', '$2y$13$.7Jvz3rAMQbQ.//wf0CruuIPkFacHZcRxkdoW/ie57TpxqDuvrB2e', '', '', '', '', '', ''),
(155, 'olivier08@rey.org', '[\"ROLE_USER\"]', '$2y$13$zYD4c5K0HS3xm.wS4ODc7OkawKS.7Ksr/MJ/xNJNrZmB6jucfcKce', '', '', '', '', '', ''),
(156, 'peltier.andree@gautier.com', '[\"ROLE_USER\"]', '$2y$13$eNnVsdfR/DI/oZOJWbzHlecf/EXsy74HxqlEl.nIWoh7OnPJLWZNG', '', '', '', '', '', ''),
(157, 'Serveurs@symrecipe.fr', '[\"ROLE_ADMIN\"]', '$2y$13$A7jPi79s6lqtez34OVcxgum6fNiotv01RJT8/sIbbnM5SnR5/RZeC', '', '', '', '', '', ''),
(158, 'eboulanger@renault.fr', '[\"ROLE_USER\"]', '$2y$13$hIvm9Dtk8RZKJe7xJ6OQjetGfsO8Uhmr7/bpMXNtQ4GKyufe.NWFa', '', '', '', '', '', ''),
(159, 'gregoire12@live.com', '[\"ROLE_USER\"]', '$2y$13$LHx0YlDUWsQkG3AnNHX7lO7kancrlwoIKQeunsJ9it36Y1YFKOczS', '', '', '', '', '', ''),
(160, 'sjoubert@hotmail.fr', '[\"ROLE_USER\"]', '$2y$13$GVQX.6sP8jUjy.oYJzBXx.nlWEz.Bjkwe3AEf35OTm9/XF7fQXjGK', '', '', '', '', '', ''),
(161, 'bertrand65@valette.fr', '[\"ROLE_USER\"]', '$2y$13$.HMi2tW.f8DbEg7rV3jinOFPq2nc6e9PYeSKAjYmJr7Yn3iLGSRMu', '', '', '', '', '', ''),
(162, 'etienne.bousquet@joly.com', '[\"ROLE_USER\"]', '$2y$13$M0N6z8ZkNUvX9TViII0rr.nUVwujnnGdzYG6rqFiNrpRCwva786ki', '', '', '', '', '', ''),
(163, 'rbigot@marie.fr', '[\"ROLE_USER\"]', '$2y$13$UTgQwmr3ZzIke1YvGHk2CeZ/tZHnBYXG2ygPHNHYwIDxg/dp7th5y', '', '', '', '', '', ''),
(164, 'alix.alexandre@lenoir.com', '[\"ROLE_USER\"]', '$2y$13$WiOPzNLobRnJD/IJu1xfzux2ARd4Oe6hQSn.zLE8z.HyJwcA7xfSG', '', '', '', '', '', ''),
(165, 'gerard19@sfr.fr', '[\"ROLE_USER\"]', '$2y$13$92Bc30MSwGFxa8KLocc6FeJ0BGnvGg5jpEy8X1LTrxNv2.LCvm5zi', '', '', '', '', '', ''),
(166, 'nmichel@tele2.fr', '[\"ROLE_USER\"]', '$2y$13$ud7qiXCffiT9JwAIdyoXGuLsddAUcPKgioUGYeQUYd0BHuOoi3R2K', '', '', '', '', '', ''),
(167, 'blondel.honore@dbmail.com', '[\"ROLE_USER\"]', '$2y$13$5b2WSsSajoprHE8k2JbGgemmKVeE3awLk2WjCbac3tHk9L.ZlhNpy', '', '', '', '', '', ''),
(168, 'picard@gmail.com', '[\"ROLE_USER\"]', '$2y$13$SYEzZJ4.Z.D/7SXEl.hsLO6mUvZnz1KFElUvftWaexhGCkHil.GKS', 'Picard', 'Sophie', '0615487993', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(5) NOT NULL,
  `city` varchar(150) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `reset_token` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_880E0D76F85E0677` (`username`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3AF34668727ACA70` (`parent_id`);

--
-- Index pour la table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F564111877153098` (`code`),
  ADD KEY `IDX_F56411183DDD47B7` (`coupons_types_id`);

--
-- Index pour la table `coupons_types`
--
ALTER TABLE `coupons_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E01FBE6A6C8A81A9` (`products_id`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6BAF7870A76ED395` (`user_id`);

--
-- Index pour la table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6674F271A76ED395` (`user_id`),
  ADD KEY `IDX_6674F27159D8A214` (`recipe_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E52FFDEEAEA34913` (`reference`),
  ADD KEY `IDX_E52FFDEE6D72B15C` (`coupons_id`),
  ADD KEY `IDX_E52FFDEE67B3B43D` (`users_id`);

--
-- Index pour la table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`orders_id`,`products_id`),
  ADD KEY `IDX_835379F1CFFE9AD6` (`orders_id`),
  ADD KEY `IDX_835379F16C8A81A9` (`products_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B3BA5A5AA21214B7` (`categories_id`);

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA88B137A76ED395` (`user_id`);

--
-- Index pour la table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD PRIMARY KEY (`recipe_id`,`ingredient_id`),
  ADD KEY `IDX_22D1FE1359D8A214` (`recipe_id`),
  ADD KEY `IDX_22D1FE13933FE08C` (`ingredient_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_1483A5E9D7C8DC19` (`reset_token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coupons_types`
--
ALTER TABLE `coupons_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_3AF34668727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `FK_F56411183DDD47B7` FOREIGN KEY (`coupons_types_id`) REFERENCES `coupons_types` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_E01FBE6A6C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `FK_6BAF7870A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `FK_6674F27159D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `FK_6674F271A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_E52FFDEE67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_E52FFDEE6D72B15C` FOREIGN KEY (`coupons_id`) REFERENCES `coupons` (`id`);

--
-- Contraintes pour la table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `FK_835379F16C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FK_835379F1CFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_B3BA5A5AA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `FK_DA88B137A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD CONSTRAINT `FK_22D1FE1359D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_22D1FE13933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`) ON DELETE CASCADE;
--
-- Base de données : `{db_jason}`
--
CREATE DATABASE IF NOT EXISTS `{db_jason}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_jason}`;
--
-- Base de données : `{db_name user}`
--
CREATE DATABASE IF NOT EXISTS `{db_name user}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_name user}`;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230126095245', '2023-01-26 10:29:29', 1925);

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307FA76ED395` (`user_id`);

--
-- Index pour la table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
--
-- Base de données : `{db_name}`
--
CREATE DATABASE IF NOT EXISTS `{db_name}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_name}`;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230126102915', '2023-01-26 11:21:42', 1813),
('DoctrineMigrations\\Version20230126162902', '2023-01-28 11:28:43', 5501);

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clients` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de données : `{db_name}.user`
--
CREATE DATABASE IF NOT EXISTS `{db_name}.user` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `{db_name}.user`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
