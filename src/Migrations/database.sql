-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table forex_simple_signals.insight: ~0 rows (approximately)
/*!40000 ALTER TABLE `insight` DISABLE KEYS */;
INSERT INTO `insight` (`id`, `image`, `content`) VALUES
	(1, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(2, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(3, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(4, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(5, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(6, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.'),
	(7, 'morgan_stanley.jpg', 'Morgan Stanley announced that they entered long on GBP/JPY at 104.65unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10unced that they entered long on GBP/JPY at 10.');
/*!40000 ALTER TABLE `insight` ENABLE KEYS */;

-- Dumping data for table forex_simple_signals.migration_versions: ~1 rows (approximately)
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
	('20200209204347', '2020-02-10 07:30:28'),
	('20200210123345', '2020-02-10 12:34:03');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;

-- Dumping data for table forex_simple_signals.signal: ~10 rows (approximately)
/*!40000 ALTER TABLE `signal` DISABLE KEYS */;
INSERT INTO `signal` (`signal_id`, `trade_pair`, `trade_action`, `price`, `created`, `take_profit`, `stop_loss`, `profit`, `closed`, `closed_price`, `status`, `trade_pair_image`) VALUES
	(227897807, 'GBP/USD', 'sell', 1.2996, '2020-01-13 09:57:38', 1.29657, 1.30658, 10.9, '2020-01-13 19:18:35', 1.29851, 'closed', 'eur_usd.png'),
	(227947814, 'GBP/NZD', 'buy', 1.96015, '2020-01-13 09:57:38', 1.95504, 1.96438, NULL, NULL, NULL, 'ongoing', 'eur_usd.png'),
	(228155837, 'AUD/JPY', 'sell', 1.9604115, '2020-01-13 09:57:38', 1.547, 1.5958, NULL, NULL, NULL, 'ongoing', 'eur_usd.png'),
	(228493698, 'USD/JPY', 'buy', 1.84984, '2020-01-13 09:57:38', 1.64556, 1.9643, NULL, NULL, NULL, 'ongoing', 'eur_usd.png'),
	(229029666, 'GBP/NZD', 'sell', 1.96015, '2020-01-13 12:55:43', 1.95504, 1.96438, 51.1, '2020-01-13 15:16:51', 1.95504, 'closed', 'eur_usd.png'),
	(229053981, 'EUR/CHF', 'buy', 1.8498, '2020-01-13 12:55:43', 1.879, 1.879, -20.1, '2020-01-13 15:16:51', 51.1, 'closed', 'eur_usd.png'),
	(229054200, 'USD/CHF', 'sell', 1.56468, '2020-01-13 09:57:38', 1.265, 1.6589, NULL, NULL, NULL, 'ongoing', 'eur_usd.png'),
	(229623257, 'GBP/AUD', 'buy', 1.878745, '2020-01-13 12:55:43', 1.132321, 1.64556, -20.1, '2020-01-13 15:16:51', 1.955, 'closed', 'eur_usd.png'),
	(229991134, 'AUD/USD', 'sell', 1.7894, '2020-01-13 12:55:43', 1.955, 1.29657, 51.1, '2020-01-13 15:16:51', 1.265, 'closed', 'eur_usd.png'),
	(230531186, 'EUR/JPY', 'sell', 1.5464, '2020-01-13 09:57:38', 1.6589, 1.9643, NULL, NULL, NULL, 'ongoing', 'eur_usd.png');
/*!40000 ALTER TABLE `signal` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
