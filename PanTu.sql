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

INSERT INTO `PublicContentLogs` (`ID`, `TITLE`, `PROVIDER`, `CONTENT_ID`, `CONTENTPATH`, `CONTENTHASH`, `CONTENTEXT`, `CONTENTTYPE`, `TIMESTAMP`) VALUES
(52, '풍경 by V of BTS', 'soundcloud', '567093579', '/var/www/html/downloads/567093579', '886cd84faca74626888670b60a379c864578d2db', 'mp3', 'Music', '2019-05-16 23:29:10'),
(53, '풍경 by V of BTS', 'soundcloud', '567093579', '/var/www/html/downloads/567093579', 'b4bbdabcf3d554f86be65dddeb65a7fc9934e9d0', 'mp4', 'Video', '2019-06-09 00:33:24'),
(54, 'Night Lovell - Still Cold / M4 Performance (Prod. Dylan Brady)', 'youtube', 'kQcB8QpjfSo', '/var/www/html/downloads/kQcB8QpjfSo', '0797c3c448759d7814f5ed59f34833ea301bbf69', 'mp3', 'Music', '2019-06-11 00:34:22'),
(55, 'Cem Adrian - Mutlu Yıllar', 'youtube', 'MTUsIRYeKIQ', '/var/www/html/downloads/MTUsIRYeKIQ', 'bc9560a946cb94a3b0b249fafe76c8343777862d', 'mp3', 'Music', '2019-06-11 21:34:23'),
(56, 'Cem Adrian - Mutlu Yıllar', 'youtube', 'MTUsIRYeKIQ', '/var/www/html/downloads/MTUsIRYeKIQ', 'fbc094173cf142e559f26465d7f3b72af07c5553', 'mp3', 'Music', '2019-06-11 21:57:03'),
(57, 'Cem Adrian - Mutlu Yıllar', 'youtube', 'MTUsIRYeKIQ', '/var/www/html/downloads/MTUsIRYeKIQ', 'fdfd765be641fc1b3e93cba384f2aa560ea3f5f7', 'mp4', 'Video', '2019-06-11 22:12:51'),
(58, 'Kaan TANGÖZE - Bekle Dedi Gitti - Çizik (Lyric)', 'youtube', '9uR_1hTI6g4', '/var/www/html/downloads/9uR_1hTI6g4', '93c13e8d3c66eeff4f337dae50119a1b4ad81537', 'mp3', 'Music', '2019-06-11 22:13:41'),
(59, 'Kaan TANGÖZE - Bekle Dedi Gitti - Çizik (Lyric)', 'youtube', '9uR_1hTI6g4', '/var/www/html/downloads/9uR_1hTI6g4', 'de92dbcd91c6987050acab76fa40a0bc690c4fce', 'mp4', 'Video', '2019-06-11 22:13:51'),
(60, 'Fikret Kızılok - Gönül', 'youtube', '71aifzL89hQ', '/var/www/html/downloads/71aifzL89hQ', 'b17dbdf44c92cd70147cb2fccfe93b35dc3a58b4', 'opus', 'Music', '2019-06-11 22:34:33'),
(61, 'Fikret Kızılok - Gönül', 'youtube', '71aifzL89hQ', '/var/www/html/downloads/71aifzL89hQ', '363e6dd02d7fd7e7a1236a356176406787be862e', 'mp4', 'Video', '2019-06-11 22:34:47'),
(62, 'Sese bak Orhan Ölmez bana birak Derya Ürkmez', 'youtube', 'jah4VG9kbSs', '/var/www/html/downloads/jah4VG9kbSs', '3c56412cc9913925567f56f82642eb7c7f361009', 'mp3', 'Music', '2019-06-11 22:43:49'),
(63, 'Sese bak Orhan Ölmez bana birak Derya Ürkmez', 'youtube', 'jah4VG9kbSs', '/var/www/html/downloads/jah4VG9kbSs', '9863e7e2940f1fc1edcd0adc49deb918439302b3', 'mp4', 'Video', '2019-06-11 22:44:11'),
(64, 'Kazım Koyuncu - Ayrılık Şarkısı', 'youtube', 'c6_5OFD1r54', '/var/www/html/downloads/c6_5OFD1r54', 'a8e72108d4a92892097c21293eab864722481024', 'mp4', 'Video', '2019-06-12 21:33:42'),
(65, 'Kazım Koyuncu - Ayrılık Şarkısı', 'youtube', 'c6_5OFD1r54', '/var/www/html/downloads/c6_5OFD1r54', 'e90aedac7422fb022e734d0eaf27d7115009f8fd', 'flac', 'Music', '2019-06-12 21:34:43'),
(66, 'Gökşin Derin - Bu Akşam da Aklımdasın (Keşfedilmesi Gereken Şarkılar)', 'youtube', 'ZHaguvkwkZ4', '/var/www/html/downloads/ZHaguvkwkZ4', '1668eb6997c4392b0673abe147339a631faa2a2f', 'mp3', 'Music', '2019-06-12 21:38:35'),
(67, 'Onur Can Özcan - Kibrit', 'youtube', '26bxhUc7S2c', '/var/www/html/downloads/26bxhUc7S2c', 'f7496c66198649e5c55623d7b566e671e4807f59', 'mp3', 'Music', '2019-06-13 09:09:06');

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
(1, 'b@b.com', '123', 'Berkay B.');

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
