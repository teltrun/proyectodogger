-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-09-2019 a las 09:06:10
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dogger_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `post_id` int(255) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_users` (`user_id`),
  KEY `fk_comments_posts` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(24, 10, 22, 'Que lindo!', '2019-09-03 01:11:28', '2019-09-03 01:11:28'),
(25, 10, 23, 'Que linda Valen!', '2019-09-03 01:21:46', '2019-09-03 01:21:46'),
(26, 10, 24, 'Que hermosa Dolce!', '2019-09-03 09:02:41', '2019-09-03 09:02:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `post_id` int(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_likes_users` (`user_id`),
  KEY `fk_likes_posts` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `image_path`, `description`, `created_at`, `updated_at`) VALUES
(21, 10, '1567472382canicross-tierra.png', 'Salimos a correr', '2019-09-03 00:59:42', '2019-09-03 00:59:42'),
(22, 10, '1567472450descarga (1).jpg', 'Durmiendo la siesta', '2019-09-03 01:00:50', '2019-09-03 01:00:50'),
(23, 11, '156747366854f47e57-8f92-4ac9-81c6-cdc0fa59320c.jpg', 'Valentina con Dolce', '2019-09-03 01:21:08', '2019-09-03 01:21:08'),
(24, 12, '15674779780e261678-0a73-4a9c-8d3a-b9d7e2070b0e.jpg', 'Dolceee', '2019-09-03 02:32:58', '2019-09-03 02:32:58'),
(25, 10, '1567501484IMG-20150429-WA0013.jpg', 'Lo importante es verse bien!', '2019-09-03 09:04:44', '2019-09-03 09:04:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `nick` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `genre` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `pais` varchar(50) NOT NULL,
  `provincia` varchar(60) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `nick`, `email`, `password`, `image`, `description`, `genre`, `phone`, `pais`, `provincia`, `created_at`, `updated_at`, `remember_token`) VALUES
(10, 'German', 'Ojeda', 'teltrun', 'germanojeda83@gmail.com', '$2y$10$J7hqEtQhqmg9bDWa4wzZPeO1SnLZSpqGSujIwlsEHne.rEn8oGuvO', 'perfil_20160401-4-1752-Foto-de-perfil-para-redes-sociales-y-curriculum-Madrid-.jpg', 'Amante de los perros', 'masculino', 1169473348, '', '', '2019-09-03 00:22:53', '2019-09-03 00:27:16', NULL),
(11, 'Yanina', 'Villalba', 'villalbaya', 'villalbaya@gmail.com', '$2y$10$xG30O7JHagMDHS4Ch.6kh.yP9nBnxQ3928TF4QDLOO378MHhfI/5G', 'perfil_descarga.jpg', NULL, NULL, 1169473348, '', '', '2019-09-03 01:18:26', '2019-09-03 01:23:30', NULL),
(12, 'Eduardo Luis', 'Ojeda', 'eduardoluis', 'luisojeda@gmail.com', '$2y$10$/mlUhtkKU4qKpeaIOMgnJuKuuB7/xWwrFaMO5iM7nUB4hsEUfZ2r.', 'perfil_20160401-4-1752-Foto-de-perfil-para-redes-sociales-y-curriculum-Madrid-.jpg', NULL, NULL, 321321321, 'Argentina', 'Buenos Aires', '2019-09-03 02:30:01', '2019-09-03 02:33:48', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_likes_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_likes_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
