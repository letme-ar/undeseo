-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.27-0ubuntu1 - (Ubuntu)
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla undeseo.avisos
CREATE TABLE IF NOT EXISTS `avisos` (
  `id_aviso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_negocio` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_sub_rubro` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_aviso`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.avisos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `avisos` DISABLE KEYS */;
INSERT INTO `avisos` (`id_aviso`, `id_negocio`, `titulo`, `direccion`, `nro`, `localidad`, `id_sub_rubro`, `descripcion`, `telefono`, `email`, `web`, `facebook`, `twitter`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Titulo 1', 'navier', '2425', 'pablo nogues', 4, 'Descripcion', '02320416037', 'damianladiani@gmail.com', 'www.damianladiani.com.ar', 'dladiani', '@damianDLL', '-34.469534', '-58.714383', '2015-10-31 21:24:32', '2015-10-31 21:24:32'),
	(2, 0, 'Producto 2', 'Navier', '740', 'Pablo nogues', 1, 'Bsjsjsj', '1158140669', '', '', '', '', '-34.483383', '-58.702848', '2015-10-31 21:26:45', '2015-10-31 21:26:45'),
	(4, 0, 'dadas', 'mexico', '12', 'caba', 7, 'dasdadads', '231313132', '', '', '', '', '-34.614693', '-58.367104', '2015-11-01 15:47:04', '2015-11-01 15:47:04'),
	(5, 0, 'dasdsadsa', 'mexico', '12', 'caba', 3, 'dsadsadasdsa', '1558140669', '', '', '', '', '-34.614693', '-58.367104', '2015-12-23 21:03:56', '2015-12-23 21:03:56'),
	(6, 0, 'dsdas', 'mexico', '12', 'caba', 4, 'dasdsadadas', '', '', '', '', '', '-34.614693', '-58.367104', '2015-12-23 21:08:43', '2015-12-23 21:08:43'),
	(7, 0, 'Damian Ladiani Ciclon', 'mexico', '12', 'caba', 3, 'cuervo', '02320416037', 'damianladiani@hotmail.com', 'http://www.damianladiani.com.ar', 'ladianid', '@damiandll', '-34.614693', '-58.367104', '2015-12-26 18:22:31', '2015-12-26 21:40:48');
/*!40000 ALTER TABLE `avisos` ENABLE KEYS */;


-- Volcando estructura para tabla undeseo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2015_09_30_220114_create_table_avisos', 1),
	('2015_09_30_221422_create_table_rubros', 1),
	('2015_09_30_221429_create_table_sub_rubros', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Volcando estructura para tabla undeseo.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Volcando estructura para tabla undeseo.rubros
CREATE TABLE IF NOT EXISTS `rubros` (
  `id_rubro` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_rubro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_rubro`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.rubros: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `rubros` DISABLE KEYS */;
INSERT INTO `rubros` (`id_rubro`, `descripcion_rubro`, `created_at`, `updated_at`) VALUES
	(1, 'Rubro 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Rubro 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Rubro 3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Rubro 4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 'Rubro 5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `rubros` ENABLE KEYS */;


-- Volcando estructura para tabla undeseo.sub_rubros
CREATE TABLE IF NOT EXISTS `sub_rubros` (
  `id_sub_rubro` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_sub_rubro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_rubro` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_sub_rubro`),
  KEY `sub_rubros_id_rubro_foreign` (`id_rubro`),
  CONSTRAINT `sub_rubros_id_rubro_foreign` FOREIGN KEY (`id_rubro`) REFERENCES `rubros` (`id_rubro`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.sub_rubros: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `sub_rubros` DISABLE KEYS */;
INSERT INTO `sub_rubros` (`id_sub_rubro`, `descripcion_sub_rubro`, `id_rubro`, `created_at`, `updated_at`) VALUES
	(1, 'Rubro 1, Sub rubro 1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Rubro 1, Sub rubro 2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Rubro 1, Sub rubro 3', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Rubro 2, Sub rubro 1', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 'Rubro 2, Sub rubro 2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'Rubro 3, Sub rubro 1', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 'Rubro 3, Sub rubro 2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, 'Rubro 3, Sub rubro 3', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(9, 'Rubro 3, Sub rubro 4', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(10, 'Rubro 4, Sub rubro 1', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(11, 'Rubro 3, Sub rubro 2', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `sub_rubros` ENABLE KEYS */;


-- Volcando estructura para tabla undeseo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla undeseo.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
