-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 14 Haz 2019, 02:00:53
-- Sunucu sürümü: 5.7.26-0ubuntu0.18.04.1
-- PHP Sürümü: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `PanTu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `PublicContentLogs`
--

CREATE TABLE `PublicContentLogs` (
  `ID` int(11) NOT NULL,
  `TITLE` text NOT NULL,
  `PROVIDER` text NOT NULL,
  `CONTENT_ID` text NOT NULL,
  `CONTENTPATH` text NOT NULL,
  `CONTENTHASH` varchar(50) NOT NULL,
  `CONTENTEXT` text NOT NULL,
  `CONTENTTYPE` varchar(100) NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `PublicContentLogs`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Settings`
--

CREATE TABLE `Settings` (
  `ID` int(11) NOT NULL,
  `YOUTUBEDLPATH` text NOT NULL,
  `FFMPEGPATH` text NOT NULL,
  `DOWNLOADPATH` text NOT NULL,
  `CACHEPATH` text NOT NULL,
  `CHARSET` text NOT NULL,
  `PLAYLISTLIMIT` int(11) NOT NULL,
  `INSTAGRAMADRESS` text NOT NULL,
  `TWITTERADRESS` text NOT NULL,
  `FACEBOOKADRESS` text NOT NULL,
  `MAILADRESS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `Settings`
--

INSERT INTO `Settings` (`ID`, `YOUTUBEDLPATH`, `FFMPEGPATH`, `DOWNLOADPATH`, `CACHEPATH`, `CHARSET`, `PLAYLISTLIMIT`, `INSTAGRAMADRESS`, `TWITTERADRESS`, `FACEBOOKADRESS`, `MAILADRESS`) VALUES
(1, '/usr/local/bin/', '/usr/bin/', '/var/www/html/downloads/', '/var/www/html/downloads/caches/', 'en_US.UTF-8', 5, 'bariskanberkay', 'bariskanberkay', 'bariskanberkay', 'bb@bb.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `USERNAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `Users`
--

INSERT INTO `Users` (`ID`, `EMAIL`, `PASSWORD`, `USERNAME`) VALUES
(1, 'demo@pantuweb.com', '123', 'Pantu Web');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `PublicContentLogs`
--
ALTER TABLE `PublicContentLogs`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `PublicContentLogs`
--
ALTER TABLE `PublicContentLogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- Tablo için AUTO_INCREMENT değeri `Settings`
--
ALTER TABLE `Settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
