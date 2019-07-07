-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Tem 2019, 14:33:11
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rsgroup`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(58, '<p>azca abou<strong>t yeni vers</strong>iya</p>\r\n', '<p>rusca about&nbsp;yeni versiya</p>\r\n', '<blockquote>\r\n<h2>&nbsp;</h2>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `upload_date` date NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `certificates_about`
--

CREATE TABLE `certificates_about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `certificates_about`
--

INSERT INTO `certificates_about` (`id`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(1, '<p><strong>ddf<em>dfdffddf<u>dfdfdfdfdf</u></em><u>fdfdfdf</u></strong><u>dfd</u>fdfdfdfdfsdsdsdsdabout az 4</p>\r\n', '<p>about ru 2</p>\r\n', '<p>about en 2</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `desc_az`, `desc_ru`, `desc_en`, `mail`, `phone`) VALUES
(1, '<p>azca contact 24</p>\r\n', '<p><a href=\"/ckfinder/userfiles/files/af75b958a25f5024cb1f52f0f21ca332.jpg\">sdsd</a>rusca contact 2<span style=\"font-size:72px\">ffffffffffd</span></p>\r\n', '<p>engce contact 2</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `upload_date`, `status`, `rank`) VALUES
(9, 'Capture001.png', '2019-07-07', 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `portfolio`
--

INSERT INTO `portfolio` (`id`, `name_az`, `name_ru`, `name_en`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(3, 'asdsad', 'asdsad', 'asdasda', '<p>Portfolio Haqqında məlumat</p>\r\n', '<p>Информация о портфолио</p>\r\n', '<p>Portfolio Information</p>\r\n'),
(4, 'wdsada', 'asdasd', 'asdasdads', '<p>Portfolio Haqqında məlumat</p>\r\n', '<p>Информация о портфолио</p>\r\n', '<p>Portfolio Information</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolio_gallery`
--

CREATE TABLE `portfolio_gallery` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `name_az`, `name_ru`, `name_en`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(9, 'dd', 'ddd', 'dddd', 'Məlumat daxil edilməyib', 'Данные не введены', 'No data entered'),
(10, 'asdasd', 'sadasd', 'asdasdasd', '<p>Məlumat daxil edilməyibasdasd<img alt=\"\" src=\"/ckfinder/userfiles/files/audi_r8_chrome_cw_5_matte_black_black_side_view_97060_3840x2400.jpg\" style=\"float:left; height:100px; width:160px\" />asdddddddddddddddddddddddddddddddddddMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasdMəlumat daxil edilməyibasdasd</p>\r\n', '<p>Данные не введены</p>\r\n', '<p>No data entered</p>\r\n'),
(11, 'azca name 2', 'rusca name 4', 'ingce name 3', 'Məlumat daxil edilməyib', 'Данные не введены', 'No data entered');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `upload_date`) VALUES
(1, 'eiffel_tower_paris_buildings_117712_3840x2400.jpg', '2019-07-07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Cavid', '8f1fe681f11a049f4571bc53746f3398');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `certificates_about`
--
ALTER TABLE `certificates_about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `certificates_about`
--
ALTER TABLE `certificates_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
