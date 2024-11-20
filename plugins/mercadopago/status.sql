SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `status` (
  `id` smallint(8) NOT NULL,
  `status` text CHARACTER SET latin1 NOT NULL,
  `account` text CHARACTER SET latin1 NOT NULL,
  `points` text CHARACTER SET latin1 NOT NULL,
  `codigo` text CHARACTER SET latin1 NOT NULL,
  `chave` text CHARACTER SET latin1 NOT NULL,
  `processed` int(10) NOT NULL DEFAULT 0
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `status`
  MODIFY `id` smallint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;