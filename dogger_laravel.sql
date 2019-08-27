-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-08-2019 a las 14:37:10
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 'buena foto', '2019-08-24 11:37:19', '2019-08-24 11:37:19'),
(3, 2, 7, 'buena Hola', '2019-08-24 11:37:19', '2019-08-24 11:37:19'),
(4, 3, 1, 'que lindo', '2019-08-24 11:37:19', '2019-08-24 11:37:19'),
(5, 2, 6, 'bien', '2019-08-24 11:37:19', '2019-08-24 11:37:19');

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

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2019-08-24 11:39:10', '2019-08-24 11:39:10'),
(2, 2, 1, '2019-08-24 11:39:10', '2019-08-24 11:39:10'),
(3, 2, 5, '2019-08-24 11:39:10', '2019-08-24 11:39:10'),
(4, 3, 7, '2019-08-24 11:39:10', '2019-08-24 11:39:10'),
(5, 3, 2, '2019-08-24 11:39:10', '2019-08-24 11:39:10'),
(6, 1, 7, '2019-08-24 11:39:10', '2019-08-24 11:39:10');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `image_path`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'image1.jpg', 'dexcripcion de la imagen', '2019-08-24 11:31:20', '2019-08-24 11:31:20'),
(2, 2, 'image222.jpg', 'dexcripcion de la imagen', '2019-08-24 11:31:20', '2019-08-24 11:31:20'),
(3, 3, 'image333.jpg', 'dexcripcion de la imagen', '2019-08-24 11:31:20', '2019-08-24 11:31:20'),
(5, 1, 'roma.jpg', 'dexcripcion de la imagen', '2019-08-24 11:32:06', '2019-08-24 11:32:06'),
(6, 2, 'paris.jpg', 'dexcripcion de la imagen', '2019-08-24 11:32:06', '2019-08-24 11:32:06'),
(7, 3, 'corrientes.jpg', 'dexcripcion de la imagen', '2019-08-24 11:32:06', '2019-08-24 11:32:06'),
(8, 2, 'venecia.jpg', 'dexcripcion de la imagen', '2019-08-24 11:32:06', '2019-08-24 11:32:06'),
(9, 9, '09.png', 'asdasd', '2019-08-27 14:31:07', '2019-08-27 14:31:07');

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `nick`, `email`, `password`, `image`, `description`, `genre`, `phone`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'German', 'Ojeda', 'teltrun', 'ger@ger.com', 'pass', NULL, NULL, NULL, NULL, '2019-08-24 11:26:26', '2019-08-24 11:26:26', NULL),
(2, 'Yanina', 'Villalba', 'yani', 'yani@ger.com', 'pass', NULL, NULL, NULL, NULL, '2019-08-24 11:28:11', '2019-08-24 11:28:11', NULL),
(3, 'Luis', 'Ojeda', 'luis', 'luis@ger.com', 'pass', NULL, NULL, NULL, NULL, '2019-08-24 11:28:11', '2019-08-24 11:28:11', NULL),
(4, 'German', 'Ojeda', 'dextroyer1', 'germanojeda83@gmail.com', '$2y$10$/NX3EJac2FgKJ/rTQjkH7e6PawC.qU7ond61oPSGBOCdS/7ldClDm', 'perfil_images.jpg', NULL, NULL, NULL, '2019-08-24 18:33:10', '2019-08-25 21:16:16', 'mc0UEokXvSYb96CBKGHH8QgSG3SNqL8SXAyemABT5qoTITJde2fE9ezqShF7'),
(5, 'Eduardo', 'Ojeda', 'eljefe', 'jefe@luis.com', '$2y$10$Vzic7V.2hvCC0yDN0Fkz6epk1oMZYuUtGsTBT6wbGYwtVqJOfaxe2', NULL, NULL, NULL, NULL, '2019-08-25 13:46:43', '2019-08-25 13:46:43', 'oBswsiMfFLbLmyogGlPBWtd2HfSCIPJNWU4aINNV6Dha94zcqoyphCgsMhVa'),
(6, 'German', 'Ojeda', 'asdasd', 'germaasdnojeda83@gmail.com', '$2y$10$Ty6Msk/vzfOt5.oZH4N7OOln/IAkguT2Jk9nI1ADM3UNXFoJCfR5.', NULL, NULL, NULL, NULL, '2019-08-25 13:53:57', '2019-08-25 13:53:57', 'lmZxhNhOeF6DMs39YqQXm3agVTrfsOw7ktEJoBTzr0goXDuTqVo6hcgOxLMe'),
(7, 'German', 'Ojeda', 'aaa', 'germanaaojeda83@gmail.com', '$2y$10$MhRowD3JWwfWKp75AZkABuGXcdlpdHGjhiqV.Lu4XS62nRTByvT3i', NULL, NULL, NULL, NULL, '2019-08-25 13:54:52', '2019-08-25 13:54:52', '5jYJOZ4CguGWAL44DhWN2UXubqdu4AWB7xcuYHv1oeUDHMpmomBf7PBvr0qF'),
(8, 'Yanina', 'Villalba', 'yanina', 'asd@asd.com', '$2y$10$uPbLd2HJF4LK6OJjB6ndleb1AZOOfQZDYxMGr5/zRSjsFAHNoHmfi', 'perfil_logo_1.gif', NULL, NULL, NULL, '2019-08-25 14:46:53', '2019-08-25 15:17:05', NULL),
(9, 'German', 'Ojeda', 'italia', 'gojeda@megatlon.com.ar', '$2y$10$STMW/jCW0dRSgzb6/oKg3u/03s6xi.FH5NND.kJGZwgA2sz/1VAqC', 'perfil_20160401-4-1752-Foto-de-perfil-para-redes-sociales-y-curriculum-Madrid-.jpg', 'Hola', 'masculino', 11223344, '2019-08-25 21:57:03', '2019-08-25 22:54:00', 'dtWE215PokjwkJ09jSBp0nj3zaEHao9VnWwvpQXjdCfHd5lp0Ab9xyTJYspJ');

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
