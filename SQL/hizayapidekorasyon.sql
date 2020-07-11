-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Oca 2019, 19:05:22
-- Sunucu sürümü: 5.1.73-community
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `hizayapidekorasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_groups`
--

CREATE TABLE IF NOT EXISTS `admin_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`) VALUES
(1, 'Yönetici'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_perms`
--

CREATE TABLE IF NOT EXISTS `admin_perms` (
  `groupId` int(10) unsigned NOT NULL,
  `module` varchar(255) NOT NULL,
  `perm` varchar(255) NOT NULL,
  KEY `fk_admin_perms_groupId` (`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin_perms`
--

INSERT INTO `admin_perms` (`groupId`, `module`, `perm`) VALUES
(1, 'home', 'options'),
(1, 'home', 'password'),
(1, 'home', 'user-list'),
(1, 'home', 'user-insert'),
(1, 'home', 'user-update'),
(1, 'home', 'user-delete'),
(1, 'home', 'group-list'),
(1, 'home', 'group-insert'),
(1, 'home', 'group-update'),
(1, 'home', 'group-delete'),
(1, 'banner', 'list'),
(1, 'banner', 'insert'),
(1, 'banner', 'update'),
(1, 'banner', 'delete'),
(1, 'social', 'list'),
(1, 'social', 'insert'),
(1, 'social', 'update'),
(1, 'social', 'delete'),
(1, 'callyou', 'list'),
(1, 'callyou', 'delete'),
(1, 'menu', 'list'),
(1, 'menu', 'insert'),
(1, 'menu', 'update'),
(1, 'menu', 'delete'),
(1, 'project', 'list'),
(1, 'project', 'insert'),
(1, 'project', 'update'),
(1, 'project', 'delete'),
(1, 'project', 'image-list'),
(1, 'project', 'image-insert'),
(1, 'project', 'image-update'),
(1, 'project', 'image-delete'),
(1, 'category', 'list'),
(1, 'category', 'insert'),
(1, 'category', 'update'),
(1, 'category', 'delete'),
(1, 'service', 'list'),
(1, 'service', 'insert'),
(1, 'service', 'update'),
(1, 'service', 'delete'),
(1, 'news', 'list'),
(1, 'news', 'insert'),
(1, 'news', 'update'),
(1, 'news', 'delete'),
(1, 'content', 'list'),
(1, 'content', 'insert'),
(1, 'content', 'update'),
(1, 'content', 'delete'),
(1, 'contact', 'list'),
(1, 'contact', 'view'),
(1, 'contact', 'delete'),
(1, 'module', 'list'),
(1, 'module', 'update'),
(1, 'module', 'delete'),
(1, 'module', 'order'),
(1, 'tapu', 'list'),
(1, 'tapu', 'view'),
(1, 'tapu', 'delete');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `groupId` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_admin_users_groupId` (`groupId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `groupId`) VALUES
(1, 'admin', 'e0f01e57d55b5038758d4d1cdf9c6aa8', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `transition` varchar(255) NOT NULL,
  `delay` int(10) unsigned NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `link`, `text`, `transition`, `delay`, `order`, `language`) VALUES
(12, 'sss', '8a3065f77cb15e3ade79fb1191d9129c.jpg', '', 'Hiza Yapı Dekorasyon Uzmanı', 'transition2d: 14', 4000, 0, 'tr'),
(13, 'slider2', '873f07379f878c537e13f57ade01e612.jpg', '', '', 'transition2d: 1', 4000, 0, 'tr'),
(14, 'modern', 'a9d72286a01b73221cc3f2b56622cae7.jpg', '', 'modern', 'transition2d: 1', 4000, 0, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `callyou`
--

CREATE TABLE IF NOT EXISTS `callyou` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `callyou`
--

INSERT INTO `callyou` (`id`, `fullname`, `phone`, `date`, `ip`) VALUES
(2, 'Durdane', '0(530) 377 92 94', '2018-09-03 14:04:15', '46.196.198.81'),
(3, 'Durdane', '0(530) 377 92 94', '2018-09-03 14:05:03', '46.196.198.81'),
(4, 'Muhammet ali dondu', '0(905) 544 42 11', '2018-09-25 01:31:42', '176.220.23.187'),
(5, 'Vahit ', '0(531) 249 49 82', '2018-09-27 17:02:44', '46.221.157.68'),
(6, 'Yusuf kırıcı ', '0(541) 925 04 01', '2018-11-01 09:58:55', '31.145.127.138'),
(7, 'İzzettin ışık ', '0(534) 453 86 52', '2018-11-14 22:22:38', '46.106.103.64'),
(8, 'Ramazan', '0(543) 930 01 22', '2018-11-19 19:48:02', '37.155.49.141'),
(9, 'Mesut arabzadeh', '0(553) 378 15 72', '2018-11-21 18:10:58', '78.170.87.136'),
(10, 'Mesut arabzadeh', '0(553) 378 15 72', '2018-11-21 18:11:33', '78.170.87.136'),
(11, 'Dursun Mehmet Polat ', '0(538) 024 67 37', '2018-11-24 01:45:43', '176.55.127.149');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `item`, `summary`, `image`, `order`, `language`) VALUES
(3, 'Tamamlanan Projeler', 'tamamlanan-projeler', 'doneProject', 'Güven sağlamak için inşa edilmiş, kapıdan içeriği ilk girilen anda itibaren insanı ''gerçekten evinde'' hissettiren projelerimizi buradan inceleyebilirsiniz.', '0302e8ce7799154b0e44a07c2326a65a.jpg', 3, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  `viewed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text,
  `detail` longtext,
  `image` varchar(255) DEFAULT NULL,
  `reserved` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contents_parentId` (`parentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`id`, `parentId`, `title`, `slug`, `summary`, `detail`, `image`, `reserved`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`) VALUES
(1, NULL, 'KURUMSAL', 'kurumsal', '2010 yılından beri bugünün iç mimari ve konsept algısını yansıtan, gelişen teknolojiye ve buna bağlı olarak değişen müşteri beklentilerine tatmin edici çözümler sunan, müşterilerine inşaat sonrası yapılan dekorasyonun kullanımı esnasında her türlü konforu sağlayan, yaşamı olabildiğince kolaylaştıran mekanlar sunmaktadır.', '<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet="">2010 yılından beri bug&uuml;n&uuml;n i&ccedil; mimari ve konsept algısını yansıtan, gelişen teknolojiye ve buna bağlı olarak değişen m&uuml;şteri beklentilerine tatmin edici &ccedil;&ouml;z&uuml;mler sunan, m&uuml;şterilerine inşaat sonrası yapılan dekorasyonun kullanımı esnasında her t&uuml;rl&uuml; konforu sağlayan, <strong>yaşamı olabildiğince kolaylaştıran mekanlar sunmaktadır</strong>.<br />\nMekanları insanlarla b&uuml;t&uuml;nleştirebilen tasarımlara imza atmış olan &ccedil;alışma ekibimiz yaşam alanı kavramında beklenti ve hedeflerin &ccedil;ıtasını y&uuml;kseltecek,&ouml;rnek alınacak &ccedil;alışmalara imza atmıştır.İşinde uzman ekiplerimizin &ccedil;alışmaları konut, işyeri, restoran ve mağaza gibi mekanlarda farkedilirliği,esnek kullanım alanını ve yarının &ccedil;izgilerini &ouml;n plana &ccedil;ıkaran tasarımlardır.<br />\nM&uuml;şterilerimizin kendilerini &ouml;zel hissedebileceği, kendilerine &ouml;zel butik mekanları tasarlayan ekibimiz b&uuml;t&uuml;nleşik yapısıyla sanatlarını icra ederlerken, m&uuml;şterilerimizin zevklerine &ouml;zg&uuml; ve onların yaşam tarzlarını yansıtan,ihtiya&ccedil;larına cevap verebilen uygulamalar hazırlarlar.Zaman,kalite ve cazip fiyat esaslarını temel alarak iş planını ve organizasyonel yapısını şekillendiren firmamızın tercih sebebi olmasının asıl nedeni b&uuml;t&uuml;n &ccedil;alışmalarına &uuml;&ccedil; prensibi yansıtabilmesidir. Proje ve uygulamaları her zaman kullanıcı beklentilerine uygun, yaratıcı ve kaliteli &ccedil;&ouml;z&uuml;mler ile &uuml;retebilen kadromuz &ouml;zg&uuml;n yaklaşımını her &ccedil;alışmasında yansıtmayı başarmıştır.</p>\n\n<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet=""><strong>Hiza Yapı.. Zamandan, kaliteden ve g&ouml;rsellikten &ouml;d&uuml;n vermeden i&ccedil; mimari ve dekorasyonda en uygun &ccedil;&ouml;z&uuml;mlere ulaşmanın adresi..</strong></p>\n\n<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet=""><strong>vizyonumuz; kaliteli ve hızlı &ccedil;&ouml;z&uuml;mlerle m&uuml;şteri memnuniyetini en &uuml;st seviyeye &ccedil;ıkarmaktır</strong></p>\n', '18ea168970d3dec4d52a52e7e2844abb.jpg', NULL, 'KURUMSAL', '', '', 1, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `hint` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `htmlID` varchar(255) DEFAULT NULL,
  `htmlClass` varchar(255) DEFAULT NULL,
  `target` varchar(20) DEFAULT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menus_parentId` (`parentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Tablo döküm verisi `menus`
--

INSERT INTO `menus` (`id`, `parentId`, `name`, `title`, `hint`, `link`, `htmlID`, `htmlClass`, `target`, `order`, `language`) VALUES
(1, NULL, 'main', 'Ana Menü', NULL, NULL, NULL, NULL, NULL, 0, 'tr'),
(2, NULL, 'footer', 'Footer Menü', NULL, NULL, NULL, NULL, NULL, 0, 'tr'),
(3, 1, NULL, 'Ana Sayfa', 'Anasayfa', '@home', '', '', '_self', 1, 'tr'),
(4, 1, NULL, 'Referanslarımız', 'Referanslarımız', '@project', '', '', '_self', 3, 'tr'),
(5, 1, NULL, 'Hizmetler', 'Hizmetler', '@service', '', '', '_self', 4, 'tr'),
(6, 1, NULL, 'Haberler', 'Haberler', '@news', '', '', '_self', 5, 'tr'),
(7, 1, NULL, 'İletişim', 'İletişim', '@contact', '', '', '_self', 6, 'tr'),
(11, 1, NULL, 'Kurumsal', 'Kurumsal', '@content/hakkimizda/1', '', '', '_self', 2, 'tr'),
(18, 2, NULL, 'ANA SAYFA', 'Anasayfa', '@home', '', '', '_self', 1, 'tr'),
(19, 2, NULL, 'PROJELER', 'Projeler', '@project', '', '', '_self', 3, 'tr'),
(20, 2, NULL, 'HİZMETLER', 'Hizmetler', '@service', '', '', '_self', 4, 'tr'),
(21, 2, NULL, 'HABERLER', 'Haberler', '@news', '', '', '_self', 5, 'tr'),
(22, 2, NULL, 'HAKKIMIZDA', 'HAKKIMIZDA', '@content/hakkimizda/1', NULL, NULL, NULL, 2, 'tr'),
(23, 2, NULL, 'İLETİŞİM', 'İletişim', '@contact', '', '', '_self', 6, 'tr'),
(27, 4, NULL, 'Tamamlanan İşler', 'Tamamlanan İşler', '@category/tamamlanan-projeler/3', '', '', '_self', 4, 'tr'),
(29, 11, NULL, 'Hakkımızda', 'HAKKIMIZDA', '@content/kurumsal/1', '', '', '_self', 1, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `table` varchar(255) NOT NULL,
  `modified` int(10) unsigned NOT NULL,
  `permissions` text NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `menuPattern` text,
  `controller` varchar(255) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `modules`
--

INSERT INTO `modules` (`id`, `name`, `title`, `table`, `modified`, `permissions`, `type`, `icon`, `menuPattern`, `controller`, `order`) VALUES
(1, 'home', 'Home', 'admin_users', 1428906670, 'options,password,user-list,user-insert,user-update,user-delete,group-list,group-insert,group-update,group-delete', NULL, NULL, NULL, 'HomeAdminController', 0),
(2, 'banner', 'Bannerlar', 'banners', 1454410760, 'list,insert,update,delete', NULL, NULL, NULL, 'BannerAdminController', 2),
(3, 'social', 'Sosyal Ağlar', 'socials', 1454412279, 'list,insert,update,delete', NULL, NULL, NULL, 'SocialAdminController', 11),
(4, 'callyou', 'Biz Sizi Arayalım', 'callyou', 1429795754, 'list,delete', NULL, NULL, NULL, 'CallyouAdminController', 9),
(5, 'menu', 'Menü Yönetimi', 'menus', 1430400472, 'list,insert,update,delete', NULL, NULL, NULL, 'MenuAdminController', 1),
(6, 'project', 'Projeler', 'projects', 1454665233, 'list,insert,update,delete,image-list,image-insert,image-update,image-delete', 'public', NULL, 'a:5:{s:5:"title";s:5:"title";s:4:"hint";s:5:"title";s:4:"link";a:2:{i:0;s:4:"slug";i:1;s:2:"id";}s:10:"moduleLink";b:1;s:8:"language";b:1;}', 'ProjectAdminController', 5),
(7, 'category', 'Proje Kategorileri', 'categories', 1454414035, 'list,insert,update,delete', 'public', NULL, 'a:4:{s:5:"title";s:5:"title";s:4:"hint";s:5:"title";s:4:"link";a:2:{i:0;s:4:"slug";i:1;s:2:"id";}s:8:"language";b:1;}', 'CategoryAdminController', 4),
(8, 'service', 'Hizmetler', 'services', 1454418678, 'list,insert,update,delete', 'public', NULL, 'a:5:{s:5:"title";s:5:"title";s:4:"hint";s:5:"title";s:4:"link";a:2:{i:0;s:4:"slug";i:1;s:2:"id";}s:10:"moduleLink";b:1;s:8:"language";b:1;}', 'ServiceAdminController', 6),
(9, 'news', 'Haberler', 'news', 1454421562, 'list,insert,update,delete', 'public', NULL, 'a:5:{s:5:"title";s:5:"title";s:4:"hint";s:5:"title";s:4:"link";a:2:{i:0;s:4:"slug";i:1;s:2:"id";}s:10:"moduleLink";b:1;s:8:"language";b:1;}', 'NewsAdminController', 7),
(10, 'content', 'İçerikler', 'contents', 1428906670, 'list,insert,update,delete', 'public', NULL, 'a:4:{s:5:"title";s:5:"title";s:4:"hint";s:5:"title";s:4:"link";a:2:{i:0;s:4:"slug";i:1;s:2:"id";}s:8:"language";b:1;}', 'ContentAdminController', 3),
(13, 'contact', 'İletişim', 'contacts', 1428906670, 'list,view,delete', 'public', NULL, 'a:1:{s:10:"moduleLink";b:1;}', 'ContactAdminController', 8),
(15, 'module', 'Modüller', 'modules', 1453801852, 'list,update,delete,order', NULL, NULL, NULL, 'ModuleAdminController', 12),
(16, 'tapu', 'Arsamı Değerlendir', 'tapus', 1454679102, 'list,view,delete', 'public', NULL, 'a:1:{s:10:"moduleLink";b:1;}', 'TapuAdminController', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `module_arguments`
--

CREATE TABLE IF NOT EXISTS `module_arguments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` longtext,
  `type` varchar(255) NOT NULL,
  `arguments` longtext NOT NULL,
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_arguments_module` (`module`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Tablo döküm verisi `module_arguments`
--

INSERT INTO `module_arguments` (`id`, `module`, `name`, `title`, `value`, `type`, `arguments`, `language`) VALUES
(1, 'callyou', 'notification', 'Bildirim Gönderimi', '0', 'dropdown', '{"required":true,"options":["Bildirim G\\u00f6nderme","Bilgirim G\\u00f6nder"]}', 'tr'),
(2, 'callyou', 'notificationMail', 'Bildirim Maili', NULL, 'text', '[]', 'tr'),
(3, 'project', 'title', 'Sayfa Başlığı', 'PROJELER', 'text', '{"required":true}', 'tr'),
(4, 'project', 'metaTitle', 'Meta Başlığı', 'Projeler', 'text', '[]', 'tr'),
(5, 'project', 'metaDescription', 'Meta Tanımı', '', 'textarea', '[]', 'tr'),
(6, 'project', 'metaKeywords', 'Meta Anahtar Kelimeleri', '', 'textarea', '[]', 'tr'),
(7, 'service', 'title', 'Sayfa Başlığı', 'HİZMETLER', 'text', '{"required":true}', 'tr'),
(8, 'service', 'metaTitle', 'Meta Başlığı', 'Hizmetler', 'text', '[]', 'tr'),
(9, 'service', 'metaDescription', 'Meta Tanımı', '', 'textarea', '[]', 'tr'),
(10, 'service', 'metaKeywords', 'Meta Anahtar Kelimeleri', '', 'textarea', '[]', 'tr'),
(11, 'news', 'title', 'Sayfa Başlığı', 'HABERLER', 'text', '{"required":true}', 'tr'),
(12, 'news', 'metaTitle', 'Meta Başlığı', 'Haberler', 'text', '[]', 'tr'),
(13, 'news', 'metaDescription', 'Meta Tanımı', '', 'textarea', '[]', 'tr'),
(14, 'news', 'metaKeywords', 'Meta Anahtar Kelimeleri', '', 'textarea', '[]', 'tr'),
(24, 'contact', 'title', 'Sayfa Başlığı', 'İLETİŞİM', 'text', '{"required":true}', 'tr'),
(25, 'contact', 'metaTitle', 'Meta Başlığı', 'İletişim', 'text', '[]', 'tr'),
(26, 'contact', 'metaDescription', 'Meta Tanımı', '', 'textarea', '[]', 'tr'),
(27, 'contact', 'metaKeywords', 'Meta Anahtar Kelimeleri', '', 'textarea', '[]', 'tr'),
(28, 'contact', 'notification', 'Bildirim Gönderimi', '0', 'dropdown', '{"required":true,"options":["Bildirim G\\u00f6nderme","Bilgirim G\\u00f6nder"]}', 'tr'),
(29, 'contact', 'notificationMail', 'Bildirim Maili', '', 'text', '[]', 'tr'),
(30, 'contact', 'googleMap', 'Google Map Kordinatları', '40.2215936,28.8322795', 'text', '[]', 'tr'),
(31, 'contact', 'googleMapText', 'Google Map Yazısı', 'Hiza Yapı Dekorasyon', 'text', '[]', 'tr'),
(32, 'contact', 'address', 'Adres Bilgileri', 'İhsaniye mahallesi er sokak modern apatrman no 22 c / nilufer bursa', 'textarea', '{"required":true}', 'tr'),
(33, 'contact', 'phone', 'Telefon ve Faks Bilgileri', '0532 694 75 87', 'textarea', '{"required":true}', 'tr'),
(34, 'contact', 'email', 'Mail Bilgileri', 'info@hizayapidekorasyon.com', 'text', '{"required":true}', 'tr'),
(39, 'tapu', 'title', 'Sayfa Başlığı', 'ARSAMI DEĞERLENDİR', 'text', '{"required":true}', 'tr'),
(40, 'tapu', 'metaTitle', 'Meta Başlığı', 'Arsamı Değerlendir', 'text', '[]', 'tr'),
(41, 'tapu', 'metaDescription', 'Meta Tanımı', '', 'textarea', '[]', 'tr'),
(42, 'tapu', 'metaKeywords', 'Meta Anahtar Kelimeleri', '', 'textarea', '[]', 'tr'),
(43, 'tapu', 'notification', 'Bildirim Gönderimi', '1', 'dropdown', '{"required":true,"options":["Bildirim G\\u00f6nderme","Bildirim G\\u00f6nder"]}', 'tr'),
(44, 'tapu', 'notificationMail', 'Bildirim Maili', 'websitesatisi@gmail.com', 'text', '[]', 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `detail` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `summary`, `detail`, `image`, `date`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`) VALUES
(7, 'Çağlayan pidenin projelerini bitirdik. ', 'caglayan-pidenin-projelerini-bitirdik', 'Çağlayan pidenin projelerini bitirdik. Nihat beye teslim ettik.mekan sahiplerine hayırlı kazançlar Şimdiden.', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">&Ccedil;ağlayan pidenin projelerini bitirdik. Nihat beye teslim ettik.mekan sahiplerine hayırlı kazan&ccedil;lar Şimdiden.</span></p>\r\n', '4dfeae23ae04c0a9d689c460d78d4e0f.jpg', '2018-08-27 19:47:01', '', '', '', 1, 'tr'),
(8, 'Sesler elektrik A.Ş yakında Gazcılar yeni mağazada hizmette.', 'sesler-elektrik-as-yakinda-gazcilar-yeni-magazada-hizmette', 'Sesler elektrik A.Ş yakında Gazcılar yeni mağazada hizmette.', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sesler elektrik A.Ş yakında Gazcılar yeni mağazada hizmette.</span></p>\r\n', '57e32697f89579f5a323ab634d453ada.jpg', '2018-08-27 20:33:44', '', '', '', 2, 'tr'),
(9, 'DÜRÜMCÜ RAMAZAN. Projesi tamam sözleşme imzalandı. ', 'durumcu-ramazan-projesi-tamam-sozlesme-imzalandi', '\r\nDÜRÜMCÜ RAMAZAN.\r\nProjesi tamam sözleşme imzalandı. ', '<p><br />\r\nD&Uuml;R&Uuml;MC&Uuml; RAMAZAN.<br />\r\nProjesi tamam s&ouml;zleşme imzalandı.&nbsp;</p>\r\n', 'b366c52be6c4cd139db73f328407880b.jpg', '2018-08-27 20:35:32', '', '', '', 3, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` longtext,
  `type` varchar(255) NOT NULL,
  `arguments` longtext NOT NULL,
  `language` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`id`, `name`, `title`, `value`, `type`, `arguments`, `language`) VALUES
(1, 'metaTitle', 'Site Başlığı', 'Hiza Yapı', 'text', '{"required":true}', 'tr'),
(2, 'metaDescription', 'Site Tanımı', 'Zamandan, kaliteden ve görsellikten ödün vermeden iç mimari ve  yapı dekorasyonda en uygun çözümlere ulaşmanın adresi..', 'textarea', '{"required":true}', 'tr'),
(3, 'metaKeywords', 'Site Anahtar Kelimeleri', 'Hiza Yapı Dekorasyon, Bursa Yapı Dekorasyon, Bursa Mutfak Uygulamaları', 'textarea', '{"required":true}', 'tr'),
(4, 'customMeta', 'Özel Metalar', '', 'textarea', '[]', 'tr'),
(5, 'smtpHost', 'Smtp Sunucusu', '', 'text', '[]', 'tr'),
(6, 'smtpPort', 'Smtp Port', '587', 'text', '[]', 'tr'),
(7, 'smtpUser', 'Smtp Kullanıcı Adı', '', 'text', '[]', 'tr'),
(8, 'smtpPass', 'Smtp Parola', '', 'text', '[]', 'tr'),
(9, 'sitePhone', 'Site Telefon Numarası', '0532 694 75 87', 'text', '[]', 'tr'),
(10, 'siteAddress', 'Site Adres', '', 'text', '[]', 'tr'),
(11, 'aboutText', 'Hakkında Yazısı', 'Zamandan, kaliteden ve görsellikten ödün vermeden iç mimari ve dekorasyonda en uygun çözümlere ulaşmanın adresi..', 'textarea', '[]', 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projectId` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `detail` longtext,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `projectId`, `title`, `slug`, `type`, `location`, `price`, `room`, `image`, `summary`, `detail`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`) VALUES
(1, 3, 'DÜRÜMCÜ RAMAZAN USTAN''nın açılışını yaptık ', 'durumcu-ramazan-ustannin-acilisini-yaptik', '', '', '', '', '2c93be824550779ac5dd8e080ca36682.jpg', 'DÜRÜMCÜ RAMAZAN USTAN''nın açılışını yaptık ', '<p>D&Uuml;R&Uuml;MC&Uuml; RAMAZAN USTAN&#39;nın a&ccedil;ılışını yaptık&nbsp;</p>\r\n', '', '', '', 1, 'tr'),
(2, 3, 'Artık kahve sokağı hizmete başladı', 'artik-kahve-sokagi-hizmete-basladi', '', '', '', '', 'cdb3d27d26bee232a1ff96f89464e561.jpg', 'Artık kahve sokağı hizmete başladı', '<p>Artık kahve sokağı hizmete başladı</p>\r\n', '', '', '', 2, 'tr'),
(3, 3, 'İzmit Halıca Mağazası''nın  yenileme çalışması tamamlandı', 'izmit-halica-magazasinin-yenileme-calismasi-tamamlandi', '', '', '', '', '7780504810b5639e064cb93483cfdcd1.jpg', 'İzmit Halıca Mağazası''nın  yenileme çalışması tamamlandı', '<p>İzmit Halıca Mağazası&#39;nın&nbsp; yenileme &ccedil;alışması tamamlandı</p>\r\n', '', '', '', 3, 'tr'),
(4, 3, 'Karagöz baklava kafede final', 'karagoz-baklava-kafede-final', '', '', '', '', '96892e9c2181444578b5d2695db7fd28.jpg', 'Karagöz baklava kafede final', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Karag&ouml;z baklava kafede final</span></p>\r\n', '', '', '', 4, 'tr'),
(5, 3, 'iznik Serbeyler Konut Planlama tamamlandı', 'iznik-serbeyler-konut-planlama-tamamlandi', '', '', '', '', 'f9c97a1f746f3d31f6d88f6592a958dc.jpg', 'iznik Serbeyler Konut Planlama tamamlandı', '<p>iznik Serbeyler Konut Planlama tamamlandı</p>\r\n', '', '', '', 5, 'tr'),
(6, 3, 'Bursa kimlik mağazasının açacağı yeni mağaza binasının aydınlatma sistemlerini yeniledi', 'bursa-kimlik-magazasinin-acacagi-yeni-magaza-binasinin-aydinlatma-sistemlerini-yeniledi', '', '', '', '', 'bb345e158c5accd868fc10a824555bab.jpg', 'Bursa kimlik mağazasının açacağı yeni mağaza binasının aydınlatma sistemlerini yeniledi', '<p>Bursa kimlik mağazasının a&ccedil;acağı yeni mağaza binasının aydınlatma sistemlerini yeniledi</p>\r\n', '', '', '', 6, 'tr'),
(7, 3, 'Çağlayan pidenin projelerini bitirdik.', 'caglayan-pidenin-projelerini-bitirdik', '', '', '', '', 'da8a759e00fb205406610862e1d84feb.jpg', 'Çağlayan pidenin projelerini bitirdik. Nihat beye teslim ettik.mekan sahiplerine hayırlı kazançlar Şimdiden.', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">&Ccedil;ağlayan pidenin projelerini bitirdik. Nihat beye teslim ettik.mekan sahiplerine hayırlı kazan&ccedil;lar Şimdiden.</span></p>\r\n', '', '', '', 7, 'tr'),
(8, 3, 'Özgül hanımın mutfağını da bayrama yetiştirdik. ', 'ozgul-hanimin-mutfagini-da-bayrama-yetistirdik', '', '', '', '', '42b73cfb3522f5876ba518a2a50dcc8e.jpg', 'Özgül hanımın mutfağını da bayrama yetiştirdik. Tüm ekibin emeğine sağlık', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">&Ouml;zg&uuml;l hanımın mutfağını da bayrama yetiştirdik. T&uuml;m ekibin emeğine sağlık</span></p>\r\n', '', '', '', 8, 'tr'),
(9, 3, 'Kokoreççi Fahri Usta''da hızla finale yaklaşıyoruz. ', 'kokorecci-fahri-ustada-hizla-finale-yaklasiyoruz', '', '', '', '', '1d1647e0ab68c782fd4f56916e5bd2f7.jpg', 'Kokoreççi Fahri Usta''da hızla finale yaklaşıyoruz. Emeği geçen bütün arkadaşlarıma ve ustalarıma teşekkürler.', '<p><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Kokore&ccedil;&ccedil;i Fahri Usta&#39;da hızla finale yaklaşıyoruz. Emeği ge&ccedil;en b&uuml;t&uuml;n arkadaşlarıma ve ustalarıma teşekk&uuml;rler.</span></p>\r\n', '', '', '', 9, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project_images`
--

CREATE TABLE IF NOT EXISTS `project_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `galleryId` int(10) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=280 ;

--
-- Tablo döküm verisi `project_images`
--

INSERT INTO `project_images` (`id`, `galleryId`, `image`, `order`, `language`) VALUES
(169, 13, 'dcb67710c08fc9b7a96d21d12b248622.jpg', 8, 'tr'),
(170, 13, 'ffa2c6a2cc20ef3f986e304d919972b4.jpg', 7, 'tr'),
(171, 13, '976566c50bf04612fb49f901d6338bdf.jpg', 3, 'tr'),
(172, 13, '0ce6e326e2b9e0505e7ba191d10a1042.jpg', 5, 'tr'),
(173, 13, '2172c93efdd11357aec6a70839183979.jpg', 6, 'tr'),
(174, 13, 'eada053889251dc5d1fd630db7bd1ac2.jpg', 4, 'tr'),
(177, 13, '67d694fe95a58698b2cfdd7546711c36.jpg', 2, 'tr'),
(182, 1, '0ed849fb1862e44bd2ccecdb9a9af6e3.png', 1, 'tr'),
(187, 10, 'c71e04b68e4a72941c149dbb7086fe34.jpg', 5, 'tr'),
(188, 10, '432b8ae088bf25ae88c253452f2e5eb4.jpg', 6, 'tr'),
(190, 10, '82e7a3eae9ddadfc968d6598c89a2eae.jpg', 8, 'tr'),
(196, 10, '7b1b9b5668fa964c0dc15de07dfb80fa.jpg', 1, 'tr'),
(197, 10, 'c0b5df783862b31b4ba72f8773340527.jpg', 4, 'tr'),
(198, 10, 'd09d911e47d38eb565577c4b694d9c9f.jpg', 3, 'tr'),
(201, 10, 'ced100318b73597f011cf0667dd0da17.jpg', 2, 'tr'),
(209, 4, '8340f74372a37f4d3ec90041064ca198.jpg', 1, 'tr'),
(211, 4, 'd05cc2c9adedc3b3d4df155928817ba0.jpg', 3, 'tr'),
(213, 4, '3f886409463a24a9a8f06ff36797e9ff.jpg', 5, 'tr'),
(215, 11, 'd0fcdb3e6f12be59b2ee7ef37450b4cd.jpg', 1, 'tr'),
(217, 11, '998142e2fe119cac8c7303cffb2309c5.jpg', 3, 'tr'),
(219, 11, '18833e625ecbb0c3aa789e2377e5541b.jpg', 5, 'tr'),
(220, 8, '9b580b40d5720aa85971530596175afe.jpg', 3, 'tr'),
(221, 8, 'a11eb52facb4985c9839634cd78d6d91.jpg', 4, 'tr'),
(223, 8, '969df6bc52a2ab6c5649b93614f2eb39.jpg', 1, 'tr'),
(224, 8, '45a198fc88d6e498fcfbb74b067b8f72.jpg', 5, 'tr'),
(225, 8, '7c6f5665be6f3d022496d36d57ae6e5b.jpg', 6, 'tr'),
(227, 8, '96f3805fc27ed52e47aa23d08251f943.jpg', 7, 'tr'),
(229, 8, 'e7e9ad25d253b8643096335f21408ce4.jpg', 8, 'tr'),
(231, 8, 'b7f1c7139e718d0533eab10ecb677c25.jpg', 2, 'tr'),
(233, 9, '62f7d1476869a5d190db3597a0c5db36.jpg', 3, 'tr'),
(234, 9, 'ed452b54323dd599701099886c68c331.jpg', 2, 'tr'),
(235, 9, 'f6c7c0ed01d6edcd458a0594054759a6.jpg', 4, 'tr'),
(236, 9, '0d31cfdaf93f13814713e98fa2e61bc7.jpg', 1, 'tr'),
(237, 9, 'd0e0583ff9649e153d4f1292d6b7aee1.jpg', 5, 'tr'),
(238, 9, '9c53141d2f0228034e1a011b9011991b.jpg', 6, 'tr'),
(240, 5, 'f5342b9964e8c86688f8c6dcd277028b.jpg', 4, 'tr'),
(244, 5, '7e8dd22361211a1a9c616fe504316539.jpg', 1, 'tr'),
(245, 5, '6040e68a132ee1a123e5230f300f9ca3.jpg', 2, 'tr'),
(247, 5, '5e4203bf15ef92aa22ca2c8dc0b4eaa7.jpg', 7, 'tr'),
(249, 5, '91201b8ebdfe37f8be00c7ccb61924e7.jpg', 8, 'tr'),
(250, 5, '6f2f013ae54cf1c437298a41434bf046.jpg', 3, 'tr'),
(253, 5, '926e9cc2bbc91b2dd8c7c2c9fac82f83.jpg', 5, 'tr'),
(254, 5, '8b22b755071bb044c1bcc27fff74ba99.jpg', 6, 'tr'),
(256, 6, 'a4290c2bffc1b95e6cf8670a950555f0.jpg', 1, 'tr'),
(257, 6, '00b8eee9b2181d9835b2bd40324623bf.jpg', 2, 'tr'),
(258, 6, 'b45f7592bd7f85f44bb5f0f50e5edfad.jpg', 3, 'tr'),
(259, 7, 'a2943f1c7cdde95af801e8ca43afb518.jpg', 1, 'tr'),
(260, 7, 'f99a314f20ca3f24cb3623d7c61c2f1e.jpg', 2, 'tr'),
(261, 7, 'ff24deab1dba85e8ebc0f3c97bb84d17.jpg', 3, 'tr'),
(263, 12, '049344f55c1b892ce3de5ddbae262713.png', 2, 'tr'),
(265, 12, '38b6400fa5fb938940d2377119a122aa.jpg', 11, 'tr'),
(266, 1, '5de5d8385d6338415096e5dc0f639104.jpg', 2, 'tr'),
(269, 3, 'b01b79588b1521eec5f3e2e6e14645f6.jpg', 1, 'tr'),
(270, 12, '48b4d0755dd538da3047aa30ddd55023.jpg', 5, 'tr'),
(271, 12, '94991299810507baa79d487ca9fcaaff.jpg', 6, 'tr'),
(272, 12, '81fe9583a353511b7abc52dc77812249.jpg', 3, 'tr'),
(273, 12, '347300871ecc7f0dd31521a174dc2d77.jpg', 4, 'tr'),
(274, 12, 'f1cd2d6cbd9e40534cb15bfc7fa9d059.jpg', 7, 'tr'),
(275, 12, 'd212ff09977296aba8b716fabbf9ff4d.jpg', 8, 'tr'),
(276, 12, 'c6562c9703f59fe0a3f99897ce03ca29.jpg', 9, 'tr'),
(278, 12, 'b35594ecee1583e4e7e9727beac322d1.jpg', 10, 'tr'),
(279, 12, 'b16c2ea725a5b2eced1363032c808299.jpg', 1, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `detail` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` text,
  `metaKeywords` text,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `summary`, `detail`, `image`, `icon`, `metaTitle`, `metaDescription`, `metaKeywords`, `order`, `language`) VALUES
(3, 'Mutfak Tadilatı Uzmanı', 'mutfak-tadilati', 'DEKORASYON VE TADİLAT İŞLERİNİZİ BİZE BIRAKIN\r\nEskiden ustalarla tek tek uğraşmak zorunda idiniz. Şimdi bir telefonla işinizin tüm yükünden kurtulabiliyorsunuz. ev dekorasyonu tadilat ve onarım işleri stresli, sorunlu işler olmaktan çıkıyor. Birebir yerinde A dan Z ye tüm işlerinizi bize gönül rahatlığıyla teslim edebilirsiniz. İster evinizin boya badanası olsun ister anahtar teslimi ev dekorasyonu tadilat işleri olsun hepsini yapıyoruz.\r\n\r\nBinanızın evinizin anahtar teslim tadilat onarım işleri, dış cephe sıva, iç cephe sıva , alçı sıva ve her türlü ince inşaat işlerinizi şirket güvencesiyle, kaliteli işçilik, hızlı hizmet, ve en uygun fiyatla yapıyoruz.', '<h4>&nbsp;</h4>\r\n\r\n<h4><img alt="" src="public/upload/editor/images/38768502_1344490849014591_5267087011205873664_n.jpg" style="width: 200px; height: 200px;" />MUTFAK DEKORASYONU VE TADİLAT İŞLERİNİZİ BİZE BIRAKIN</h4>\r\n\r\n<p>Eskiden ustalarla tek tek uğraşmak zorunda idiniz. Şimdi bir telefonla işinizin t&uuml;m y&uuml;k&uuml;nden kurtulabiliyorsunuz. ev dekorasyonu, mutfak&nbsp;tadilat ve onarım işleri stresli, sorunlu işler olmaktan &ccedil;ıkıyor. Birebir yerinde A dan Z ye t&uuml;m işlerinizi bize g&ouml;n&uuml;l rahatlığıyla teslim edebilirsiniz. İster evinizin boya badanası olsun ister anahtar teslimi ev dekorasyonu tadilat işleri olsun hepsini yapıyoruz.</p>\r\n\r\n<p>Binanızın evinizin anahtar teslim tadilat onarım işleri, dış cephe sıva, i&ccedil; cephe sıva , al&ccedil;ı sıva ve her t&uuml;rl&uuml; ince inşaat işlerinizi şirket g&uuml;vencesiyle, kaliteli iş&ccedil;ilik, hızlı hizmet, ve en uygun fiyatla yapıyoruz.</p>\r\n\r\n<p><img alt="" src="public/upload/editor/images/38768502_1344490849014591_5267087011205873664_n.jpg" /></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h4>ZAMANINDA TESLİM, UYGUN FİYAT GARANTİSİ VERİYORUZ.</h4>\r\n\r\n<p>Komple i&ccedil; tadilat işleri, Mağaza tadilatı, Ev tadilatı, Ofis tadilatı, Anahtar teslimi tadilat işleri, dekorasyon, ev dekorasyonu, ofis dekorasyonu, sıva ve boya işleri, mantolama, ses yalıtımı, Mutfak ve Banyo tasarımı, PVC doğrama, &Ccedil;atı Yalıtımı, Kartonpiyer, Asma Tavan, B&ouml;lme duvar, Fayans seramik d&ouml;şeme işleri, Sıhhi tesisat,Elektrik tesisatı, Doğalgaz tesisatı, i&ccedil; cephe mantolama, dış cephe mantolama aklınıza tadilat ve dekorasyon hakkında ne geliyorsa uyguluyoruz..</p>\r\n\r\n<p><img alt="" src="https://images.homify.com/c_fill,f_auto,h_500,q_auto,w_1280/v1486986261/p/photo/image/1823860/IMG_2788.jpg" style="width: 100%; height: " /></p>\r\n\r\n<hr />\r\n<h4>Profesyonel Bakım, Onarım, Tadilat, Tamirat ve Mimarlık Hizmetleri</h4>\r\n\r\n<p>Uzman kadro &ccedil;alışanlarımız, m&uuml;hendislerimizin ve mimarlarımızın sunduğu projelerle profesyonel bir ekibe sahip Hiza Yapı, teknolojiyi ve modayı an ve an takip ederek y&uuml;ksek kalitede de hizmet vermenin gururunu taşıyor. Kurulduğu ilk g&uuml;nden beri iş&ccedil;ilik ve kalitesinden taviz vermeyerek tadilat ve dekorasyon alanında tercih edilen firmaların başında gelir.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ba0bb10c588903553e3af3bbeac77fa3.jpg', 'a06fb288c4ec0b4c4c68afffc332fc21.svg', '', '', '', 3, 'tr'),
(4, 'Mühendislik', 'muhendislik', 'Her türlü arazi, arsa ve binalar için mühendislik hizmetlerini kapsayan süreçler ve hizmetlerdir.', '<p>Her t&uuml;rl&uuml; arazi, arsa ve binalar i&ccedil;in m&uuml;hendislik hizmetlerini kapsayan s&uuml;re&ccedil;ler ve hizmetlerdir.</p>\n', 'b158e4d6c584545badcc4d565e72d5c4.jpg', '0eb6eaf851780eaa56e545906625ffc0.svg', '', '', '', 5, 'tr'),
(5, 'Mimarlık', 'mimarlik', 'Mimarlık veya mimari, binaları ve diğer fiziki yapıları (okul, gökdelen...vb.) tasarlama ve kurma sanatı ve bilimidir. ', '<p><strong>Mimarlık</strong>&nbsp;veya&nbsp;<strong>mimari</strong>, binaları ve diğer fiziki yapıları (okul, g&ouml;kdelen...vb.) tasarlama ve kurma sanatı ve bilimidir. Buna istinadende projelerimizi &ouml;zenle ortaya koymaya devam ediyoruz.</p>\n', '76f4b07d81406c94c31d9d21bbfa6c37.png', '3a96f113db84c92f6893ab1edc603542.svg', '', '', '', 6, 'tr'),
(6, 'Taahhüt ve İnşaat', 'taahhut-ve-insaat', 'İnşaatta ve taahhüt; Her türlü inşaatı yapmak üzere arsa almak , inşaatları tamamlayıp satmak,\r\nkentsel dönüşüm işleri yaapmak, müteahhitlik gibi işleri  kapsar.', '<p style="text-align: justify;">İnşaatta taahh&uuml;t; <strong>&nbsp;İNŞAAT</strong>&nbsp;her t&uuml;rl&uuml; inşaatı yapmak &uuml;zere arsa almak, inşaatları tamamlayıp satmak, arsa sahibi olan ger&ccedil;ek ve t&uuml;zel kişilerle anlaşmalar yapıp inşaatları yapıp teslim etmek yine bu kişiler ile m&uuml;lk(kat) karşılığı inşaatlar yapmak,şirketin &ccedil;alışma konusu i&ccedil;inde kalan ihale ve taahh&uuml;t proje işlerine katılmak,teminatlar yatırıp bu işleri almak ve sonu&ccedil;landırmak, inşaat projeleri,tadilat , tamirat,proje ve ihalelerine katılıp neticelendirmek, şirket amacını ve konusunu ger&ccedil;ekleştirmek i&ccedil;in gayrimenkul satın alarak inşa etmek ve pazarlamaktır.&nbsp;</p>\r\n', 'f9b41154cd43f15e8aa966ccd081889e.png', '164a408d0e282a9e7ae2b18bc6ce81ca.svg', '', '', '', 4, 'tr'),
(7, 'Arsamı Değerlendirmek İstiyorum', 'arsami-degerlendirmek-istiyorum', 'Arsa yatırımı daha uzun vadeli ve biraz daha bilgi ve tecrübe isteyen bir yatırımdır. ', '<p>Arsa yatırımı daha uzun vadeli ve&nbsp;<span style="line-height: 1.42857;">biraz daha bilgi ve tecr&uuml;be isteyen bir yatırımdır.&nbsp;</span><span style="line-height: 1.42857;">Arsa yatırımı yapacak kişi geleceği okuyabilen, şehre, insanlara &nbsp;ve arzın hareket y&ouml;n&uuml;ne bakabilen insanlardır. Bu konuda teklif istemek veya iletişime ge&ccedil;mek i&ccedil;in <a class="btn btn1" href="/arsami-degerlendir">tıklayın.</a></span></p>\r\n', '616838e7844e784682e22a391861bab2.png', 'eab790a2867994485a3fc5fb18b59814.svg', '', '', '', 2, 'tr'),
(8, 'Çözüm Ortaklığı', 'cozum-ortakligi', 'Her türlü arsa, arazi, müstakil ev ve daha bir çok projenize birlikte çözümler bulup, değerlendirmek ve kazanç sağlamak için buradayız.', '<p>Her t&uuml;rl&uuml; arsa, arazi, m&uuml;stakil ev ve daha bir &ccedil;ok projenize birlikte &ccedil;&ouml;z&uuml;mler bulup, değerlendirmek ve kazan&ccedil; sağlamak i&ccedil;in buradayız.</p>\n', '0034edbfb65259302de2162f5e2e0f05.png', '445223b4d1022aebb2bab16ad0a5dc0b.svg', '', '', '', 7, 'tr'),
(9, 'BANYO UYGULAMALARI', 'banyo-uygulamalari', 'Komple Mutfağınızın Dekorasyonu’nu Günümüz Şartlarına Göre En Rahat Ve Kolaylık Sağlayıcı Mobilya Ve Aksesuarlarıyla Sizlere Sunuyoruz.', '<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet="">Komple Baynonuzun Dekorasyonu&rsquo;nu G&uuml;n&uuml;m&uuml;z Şartlarına G&ouml;re&nbsp; Sizlere Sunuyoruz.</p>\r\n\r\n<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet=""><span style="color: rgb(51, 51, 51);">Sizi her g&uuml;n yenileyerek yorgunluğunuzu alan evinizde vazge&ccedil;emeyeceğiniz tek mekan olan banyonuzu yeniliyoruz. Son yenilikleri yakından takip ederek siz değerli m&uuml;şterilerimize daha iyi hizmet vermek i&ccedil;in uğraşıyor. Su tesisatı, elektrik tesisatı, yıkım, seramik iş&ccedil;iliği, vitrifiye ve banyo mobilyası gibi işlerinizi tek bir elde topluyoruz ve size sadece banyonuzun keyfini s&uuml;rmek kalıyor.</span></p>\r\n\r\n<p>*Banyo Dolapları</p>\r\n\r\n<p>*K&uuml;vet Değişimi</p>\r\n\r\n<p>*Lavabo ve Musluk Tadilatı</p>\r\n\r\n<p>*Duşakabin ve Duş Teknesi Değişimi</p>\r\n\r\n<p>*Banyo Dekorasyonu</p>\r\n', '6b41a92c16eb73bf4a7c974d3e5aa7db.jpg', '22e56a56d0f1d711b65a1b92887e2371.svg', '', '', '', 8, 'tr'),
(10, 'Boya Uygulamarı', 'boya-uygulamari', 'Hiza Yapı Dekorasyon Olarak ev boyama hizmeti sunmaktayız  tüm mahallerde ev veya ofis boya badana işlerinizde  deneyimli uzman bir boyacı ekibine ihtiyacınız varsa bizimle iletişime geçiniz', '<h4>İ&Ccedil; VE DIŞ CEPHE BOYA UZMANI&nbsp;</h4>\r\n\r\n<p><span font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet="">Hiza Yapı Dekorasyon Olarak ev boyama hizmeti sunmaktayız &nbsp;t&uuml;m mahallerde ev veya ofis boya badana işlerinizde &nbsp;deneyimli uzman bir boyacı ekibine ihtiyacınız varsa bizimle iletişime ge&ccedil;iniz.</span></p>\r\n\r\n<p>Konutların i&ccedil; mekanları i&ccedil;in boya tercihinin &ouml;nemi kadar bina dış cephe boyase&ccedil;imi de hem estetik, hem de dayanıklılık a&ccedil;ısından &ouml;nemlidir. Dış cephe boyası se&ccedil;iminde &ouml;ncelikle dikkat edilmesi gereken husus uygulama yapılacak binanın i&ccedil;inde bulunduğu iklim koşulları ve uygulama yapılacak y&uuml;zeyin &ouml;zellikleridir. Aşırı yağış alan iklim koşullarında nem ve suya dayanıklı boyalar tercih edilmelidir. Bu t&uuml;r iklimler i&ccedil;in tavsiye edilen boya &ccedil;eşidi silikonlu dış cephe boyalarıdır. Az yağış ve yoğun g&uuml;neş ışığı alan b&ouml;lgelerde nem dayanıklılığından &ouml;nce g&uuml;neş ışınımlarına dayanıklı ve a&ccedil;ık renkli boyalar tercih edilmelidir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>D&uuml;zg&uuml;n ince sıva yapılmamış y&uuml;zeylerde de d&uuml;z boyalar yerine grenli boyaların se&ccedil;ilmesi alt y&uuml;zey hatalarını kapatılmasında &ouml;nemli bir rol oynamaktadır.</p>\r\n\r\n<p>Bina dış cephe boya uygulamalarının performansını, kullanılan malzemenin dayanıklığı kadar iş&ccedil;ilik kaliteside etkilemektedir, hatalı uygulamaların faydasından &ccedil;ok zarar getireceği unutulmamalıdır.</p>\r\n\r\n<p>Bursa&#39;da dış ve i&ccedil;&nbsp;cephe boyama hizmetini siz değerli m&uuml;şterilerimizin zevkine ve estetiğine uygun olarak yapıyoruz.</p>\r\n\r\n<p>Bursa dış cephe boyama hizmetimiz %100 m&uuml;şteri memnuniyeti ile hizmet veriyoruz</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'f6b188e72f6ffeec78414a3e77aa4090.jpg', 'c397f598ace98963b9ad65ae5573b01b.svg', '', '', '', 9, 'tr'),
(11, 'Akıllı ev Sistemleri', 'akilli-ev-sistemleri', 'Hizapro her referansını çekinmeden yayınlar, müşterilerimizle birebir referans görüşmesi yapabilirsiniz.\n\nÇünkü Hizapro %98 müşteri memnuniyeti ile çalışmaktadır.\n\nMüşteri yorumlarını görmek için tıklayınız…\nu kendiniz yapabilirsiniz.', '<p><br />\nSatış Sonrası Servis</p>\n\n<p>Satış sonrası servise ihtiyacım ne sıklıkta olacak?</p>\n\n<p>Hiza pro fabrikasyon &uuml;r&uuml;nler olduğu ve satış &ouml;ncesi defalarca test edildiği i&ccedil;in , bakımları yapıldığı takdirde ekstra servise ihtiya&ccedil; duymaz.</p>\n\n<p>ihtiyacım olduğunda firmanın yaklaşımı nedir?</p>\n\n<p>Nadir olarak ger&ccedil;ekleşen arıza durumlarında firmamız avrupa standartlarında hizmet vermektedir.</p>\n\n<p>T&uuml;m m&uuml;şterilerimiz 2 yıl garanti kapsamındadır. T&uuml;m m&uuml;şterilerimizin &uuml;r&uuml;nlerinin arızalanması halide, &uuml;r&uuml;nler sorgusuz sualsiz doğrudan değişimi yapılmaktadır. değişim yapıldıktan sonra arızanın kaynağı tespit edilir ve m&uuml;şteri kaynaklı ise &uuml;creti talep edilir , değilse &uuml;cret talep edilmez. Amacımız hi&ccedil;bir m&uuml;şterimizin herhangi bir &uuml;r&uuml;n&uuml;n&uuml;n arızalanmasından dolayı bekleyerek mağdur olmamasıdır.</p>\n\n<p>Firma &amp; Marka</p>\n\n<p>Se&ccedil;tiğiniz akıllı ev sistemini kuracak firmanın akıllı ev tecr&uuml;besi nedir?</p>\n\n<p>T&uuml;m &uuml;r&uuml;nler tek marka mı yoksa, farklı &uuml;r&uuml;nler toplanarak mı sistem oluşturuluyor ?</p>\n\n<p>Hiza pro da son kullanıcı ihtiya&ccedil;ları d&uuml;ş&uuml;n&uuml;lerek bir &ccedil;ok &ouml;zellik sisteme entegre edilmiştir. Bu t&uuml;r &uuml;r&uuml;nlerin fabrikada entegre edilmesi sistemlerin diğer bileşenler ile etkileşimli &ccedil;alışmasını sağlayarak kullanıcıya sorunsuz bir sistem ve kullanım kolaylığı sağlar.</p>\n\n<p>Hiza pro i&ccedil;ersinde bulunan sistemler; DİYAFON SİSTEMİ, G&Uuml;VENLİK SİSTEMİ, GİRİŞ KONTROL SİSTEMİ, IP KAMERA, REZİDANS HİZMETLERİ</p>\n\n<p>Albatros Hiza pro olarak 2002 yıından beri sadece akıllı evler konusunda hizmet vermekteyiz.</p>\n\n<p>Firmamız T&uuml;rkiye &lsquo;de ger&ccedil;ek anlamda ilk akıllı ev sistemini kurup teslim eden firmadır. 2003 yılında kurduğumuz sistemler hala sorunsuz &ccedil;alışmaktadır. Referanslarımızdan g&ouml;rebilirsiniz.</p>\n\n<p>&Uuml;R&Uuml;NLERİN &Uuml;RETİM YERİ İSPANYADIR.</p>\n\n<p>Anahtar &amp; priz se&ccedil;eneği</p>\n\n<p>Se&ccedil;tiğiniz akıllı ev sistemi istediğiniz marka anahtar &amp; priz serisi kullanılabiliyor mu ?</p>\n\n<p>Hiza pro akıllı ev sistemi size evinizin dekorasyonuna uygun istediğiniz marka ve model anahtar ve priz kullanma olanağı sağlar.</p>\n\n<p>Altyapı ve Kurulum</p>\n\n<p>Se&ccedil;tiğiniz akıllı ev sistemi kablolama yapılırken &ouml;zel t&uuml;rde bir kablolamaya ihtiyac duyuluyor mu ?</p>\n\n<p>Hiza pro &ouml;zel BUS kablo altyapısına ihtiya&ccedil; duymaz , standart bir elektrik&ccedil;i kablolamasını yapabilir, standart kablolar kullandığı i&ccedil;in altyapı maliyeti d&uuml;ş&uuml;kt&uuml;r.</p>\n\n<p>Hiza pro kısa s&uuml;relerde kurulumu yapılabilen bir &uuml;r&uuml;nd&uuml;r.</p>\n\n<p>Standart yazılım</p>\n\n<p>Se&ccedil;tiğiniz akıllı ev sistemi &uuml;r&uuml;nlerde kullanılan yazılımlar standart mı yoksa kişiye &ouml;zel yazılım mı yazılıyor ?</p>\n\n<p>Bir sistem yada &uuml;r&uuml;n yazılım ve donanım ile beraber bir b&uuml;t&uuml;nd&uuml;r. Ne kadar sağlam bir donanımınız olsada k&ouml;t&uuml; bir yazılım ile hi&ccedil; bir işe yaramaz. Aynı şekilde tam terside doğrudur.</p>\n\n<p>Hiza pro ile ilgili her &uuml;r&uuml;n YAZILIM ve DONANIM beraber fabrikada defalarca test edildikten sonra onaylanır. B&ouml;ylece sanayi bakanlığınca &ouml;ng&ouml;r&uuml;len garanti yılından &ccedil;ok &ccedil;ok daha uzun &ouml;m&uuml;rl&uuml; sistemler ortaya &ccedil;ıkmış olur. 2003 yılında kurduğumuz ve hala sorunsuz &ccedil;alışmakta olan sistemlerimizin olması standart yazılımın ne ne kadar &ouml;nemli olduğunun en g&uuml;zel kanıtıdır.</p>\n\n<p>Standart yazılıma ve kapalı protokole sahip sistemler dışarıdan k&ouml;t&uuml; niyetli m&uuml;dahelelere kapalıdır.</p>\n\n<p>Piyasadaki bazı &uuml;r&uuml;nlerde standart yazılım yoktur, her ev i&ccedil;in &ouml;zel yazılım yapılır, kurulan cihazların başarısı, yerel firmalardaki &ccedil;alışan elemanların bilgi ve tecr&uuml;beleri ile sınırlıdır.</p>\n\n<p>Bu t&uuml;r yazılımlar i&ccedil;in g&uuml;venlik riski bulunmaktadır</p>\n\n<p>Standart kullanma klavuzu ve Kolay kullanım</p>\n\n<p>Standart kullanma klavuzu var mı?</p>\n\n<p>Hiza pro da fabrikadan &ccedil;ıkan her &uuml;r&uuml;n yazılım ve donanım ile beraber test edilerek onaylandığı i&ccedil;in &ldquo;KULLANMA KLAVUZU&rdquo; &uuml;r&uuml;n kutusunun i&ccedil;ine konularak g&ouml;nderilir.</p>\n\n<p>Kullanıcıların sistemdeki t&uuml;m senaryoları, programları ve ayarları kendi başlarına (firmamıza ihtiya&ccedil; duymadan) yapabilmelerine olanak sağlar.</p>\n\n<p>20 yıllık &uuml;retici tecr&uuml;besi ile tasarlamış kullanıcı ekranları 7 den 77 ye herkesin kolaylıkla kullanabileceği şekilde tasarlanmıştır.</p>\n\n<p>Bağımsız calışan mod&uuml;l yapısı</p>\n\n<p>Se&ccedil;tiğiniz akıllı ev sisteminde herhangi bir noktadaki (ekran, lamba, perde vb.) arıza diğer bir noktayı etkiliyor mu?</p>\n\n<p>Hiza pro da her mod&uuml;l bir diğerinden bağımsız &ccedil;alışır.</p>\n\n<p>B&ouml;ylece ana &uuml;nite veya ekranda sorun olsa dahi her bir mod&uuml;l bağımsız olarak &ccedil;alışmaya devam eder. Yani lambalarınız, perdeleriniz &ccedil;alışmaya devam eder.</p>\n\n<p>Kablolu mu Kablosuz mu almalıyım?</p>\n\n<p>Hiza pro hem kablolu hemde kablosuz sistemler kurmaktadır.</p>\n\n<p>Kablolu ve kablosuz akıllı ev sistemleri karşılaştırmasındaki amacımız kablolu ve kablosuz akıllı ev sistemi arasında kararsız kalmış m&uuml;şterilerimizi herhangi bir sisteme y&ouml;nlendirmek değil, kişiyi bilgilendirerek ihtiya&ccedil; ve talepleri doğrultusunda karar veremesine yardımcı olmaktır.</p>\n\n<p>Kablolu &amp; Kablosuz Akıllı Ev Genel bakış</p>\n\n<p>Kablolu Akıllı Ev Sistemleri</p>\n\n<p>Genellikle yapım aşamasındaki ve tadilat ge&ccedil;irecek evlerde tercih edilmektedir.</p>\n\n<p>Kurulum sırasında kablo maliyeti oluşurken, kurulumdan sonra ev i&ccedil;erisinde frekans oluşturmadığı i&ccedil;in daha g&uuml;venilir olmaktadır.</p>\n\n<p>Kablolu sistemler kurulum aşamasında ev alt yapısı ile kurgulandığı i&ccedil;in daha profesyonel &ccedil;alışma gerektirir. İyi bir kablolu sistem on yıl ve daha fazla sıkıntı &ccedil;ıkarmadan &ccedil;alışabilmelidir. Onun i&ccedil;in kullanacağınız sistemi &ccedil;ok iyi araştırmanız gerekir.</p>\n\n<p>Kablosuz Akıllı Ev Sistemleri</p>\n\n<p>Genellikle yapımı tamamlanmış veya mevcut oturulan evlerde tercih edilmektedir.</p>\n\n<p>Kurulum aşamasında kablo maliyeti yoktur, kurulumdan sonra ev i&ccedil;erisinde frekans oluşturarak &ccedil;alışırlar.</p>\n\n<p>Evinize tadilat yapmayacak iseniz &ouml;nerimiz tabiki kablosuz sistemlerdir, kablosuz sistemler altyapı gerektirmediği i&ccedil;in bazı yapı marketlerde bile satılmaktadır , biraz teknik bilgi ve beceriye sahip birisi iseniz kurulum</p>\n', '6054c067ea9a16ca2bb52fbc1d3c1b66.jpg', '1433aa3c2c935a902cb4b4848731793e.svg', '', '', '', 10, 'tr'),
(12, 'Pencere Uygulamaları', 'pencere-uygulamalari', 'Firmamız kurulduğu yıldan bu yana, bünyesine yenilikler katarak ilerlemiş ve içinde bulunduğu sektörde projelerini titizlikle yürütüp, dalında öncü olmuştur.\nFirmamız kaliteli yapıyla uygun fiyatı birleştirerek değerli müşterilerine hayal ettikleri ürünlere sahip olma fırsatı verir.', '<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet="">Firmamız kurulduğu yıldan bu yana, b&uuml;nyesine yenilikler katarak ilerlemiş ve i&ccedil;inde bulunduğu sekt&ouml;rde projelerini titizlikle y&uuml;r&uuml;t&uuml;p, dalında &ouml;nc&uuml; olmuştur.<br />\nFirmamız kaliteli yapıyla uygun fiyatı birleştirerek değerli m&uuml;şterilerine hayal ettikleri &uuml;r&uuml;nlere sahip olma fırsatı verir. Mekanlarda, &ouml;zg&uuml;n değerlerle teknolojiyi harmanlayarak m&uuml;şteri memnuniyetini en &uuml;st seviyeye &ccedil;eker. Deprem y&ouml;netmeliklerine uygun ve dayanıklı &uuml;r&uuml;nlerle hizmet kalitesinden &ouml;d&uuml;n vermeden itibarını arttırmayı hedefler.</p>\n\n<p font-size:="" open="" style="color: rgb(109, 109, 109); font-family: " trebuchet="">&Ouml;zellikle PVC Pencere, Laminat Parke, Amerikan Panel Kapı, &Ccedil;elik Kapı, Duşakabin, Banyo Dolabı ve Mutfak Dolapları alanlarında faaliyet g&ouml;steren firmamız g&uuml;n&uuml;n şartları ne olursa olsun taahh&uuml;t edilen işleri sıfır hatayla yapıp m&uuml;şteri memnuniyetini her zaman &ouml;n planda tutmayı ilke edinmiştir. Tasarımlarımız uzman kadrolarımızla hazırlanıp proje hususunda deneyimli m&uuml;hendislerimizle oluşturularak t&uuml;m vatandaşlarımızın ve m&uuml;şterilerimizin beğenisine sunulur. Firmamızın amacı; en y&uuml;ksek kalitede hizmeti en kısa s&uuml;rede teslim etmektir.&nbsp;<br />\n&nbsp;</p>\n', '1fae9007a962d9a5ded1fd56552c89f8.png', 'b3547900df43a21812a6da3fc72e130c.svg', '', '', '', 11, 'tr'),
(13, 'Elektrik Uygulamaları', 'elektrik-uygulamalari', 'Hiza Yapı Dekorasyon –  Elektrik Otomasyon, konusunda uzman bir kadroya sahip olan firmamız, gelişen teknolojik yeniliklere araştırma ve eğitime önem vererek uyum sağlayarak bilinçli bir sorumluluk anlayışıyla hizmet vermektedir.', '<p><span style="color: rgb(109, 109, 109); font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 14px; text-align: center;">Hiza Yapı Dekorasyon &ndash; &nbsp;Elektrik&nbsp;Otomasyon, konusunda uzman bir kadroya sahip olan firmamız, gelişen teknolojik yeniliklere araştırma ve eğitime &ouml;nem vererek uyum sağlayarak bilin&ccedil;li bir sorumluluk anlayışıyla hizmet vermektedir. Hizmetin birey &uuml;zerinde yoğunlaşmasına &ouml;nem veren firmamız, m&uuml;şteri odaklı hizmet anlayışını hedef almıştır.</span><br style="color: rgb(109, 109, 109); font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 14px; text-align: center;" />\n<span style="color: rgb(109, 109, 109); font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-size: 14px; text-align: center;">Taahh&uuml;t İşleri, Kompanzasyon Pano İşleri, Plan Proje &Ccedil;izim ve Takip İşleri, Elektrik Dekorasyon İşleri, Dekoratif Aydınlatma Sistemleri, G&ouml;r&uuml;nt&uuml;l&uuml; Konuşma İntercom, CCTV Kamera Sistemleri, Data Dağıtım Yapısal Kablolama, Al&ccedil;ak Gerilim Dağıtım Tesisatı gibi inşaat sekt&ouml;r&uuml;n&uuml;n bir&ccedil;ok alanında hizmet vermekteyiz. Emk Elektrik M&uuml;hendislik, m&uuml;şterilerimizin ihtiya&ccedil;larına en uygun &ccedil;&ouml;z&uuml;m&uuml; , en kaliteli iş&ccedil;ilikle ve malzemeyle sağlayarak, işi eksiksiz, tam ve zamanında teslim etmek. Ekip &ccedil;alışmasını organizasyon k&uuml;lt&uuml;r&uuml; olarak benimseyerek, m&uuml;şterilerimize aynı takımda ortak başarıyı hedeflediğimizi hissettirmektir. Karşılıklı g&uuml;ven , iyi niyet ve profesyonellik &ccedil;er&ccedil;evesinde uzun vadeli m&uuml;şteri memnuniyetine odaklanarak her zaman daha iyiye adım atmaktır.</span></p>\n', '0631cababe8651c82f8fc63e468d8c42.jpg', 'b2471f88a90b80b8344b4c447dceace5.svg', '', '', '', 12, 'tr'),
(14, 'Elektrik Ustası', 'elektrik-ustasi', 'Bursa''da elektrik tamiri üzerine olan şirketimiz, evlerde ve iş yerlerinde acil elektrik arızalarının tamiri işini; priz arızaları, kablo bozukluğu ve temassızlığı, elektrik sigortaları sorunlarını, internet kablo arızası, klima elektrik tesisatı ve daha fazlasını 7-24 günün her saatinde gezici elektrik ustası ekibi ile yapmaktadır.', '<p><span style="color: rgb(119, 119, 119); font-size: 20px;">Bursa&#39;da elektrik tamiri &uuml;zerine olan şirketimiz, evlerde ve iş yerlerinde acil elektrik arızalarının tamiri işini; priz arızaları, kablo bozukluğu ve temassızlığı, elektrik sigortaları sorunlarını, internet kablo arızası, klima elektrik tesisatı ve daha fazlasını 7-24 g&uuml;n&uuml;n her saatinde gezici elektrik ustası ekibi ile yapmaktadır.</span></p>\r\n', 'bc3d5a250d85e8e512582bcea60dd6b3.jpg', '69e3ad1a9847afc62c29a0c7c4bed393.svg', '', '', '', 13, 'tr'),
(15, 'Mobilya Ustası', 'mobilya-ustasi', 'Merhabalar,işlerinin ehli ustalarımızın yaptığı kurulumlardan kareler. \r\nBursa Mobilya Montaj Servisi olarak sizlere en iyi hizmeti sunabilmek için 7/24 mobilya montaj hizmetini sunmaya devam ediyoruz.En iyi fiyat garantisi ile müşterilerimize en uygun mobilya montaj hizmetini veriyoruz.', '<p><span style="color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);">Merhabalar,işlerinin ehli ustalarımızın yaptığı kurulumlardan kareler.&nbsp;</span><br style="margin: 0px; padding: 0px; outline: 0px; color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);" />\r\n<span style="color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);">Bursa Mobilya Montaj Servisi olarak sizlere en iyi hizmeti sunabilmek i&ccedil;in 7/24 mobilya montaj hizmetini sunmaya devam ediyoruz.En iyi fiyat garantisi ile m&uuml;şterilerimize en uygun mobilya montaj hizmetini veriyoruz.</span><br style="margin: 0px; padding: 0px; outline: 0px; color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);" />\r\n<br style="margin: 0px; padding: 0px; outline: 0px; color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);" />\r\n<span style="color: rgb(60, 66, 79); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 19.2px; text-align: center; background-color: rgb(245, 250, 253);">Bursa&rsquo;nın en &ccedil;ok tercih edilen Mobilya Montaj Servisi olarak referanslarımız eski m&uuml;şterilerimizdir.Bursa Mobilya Montaj Servisi olarak her t&uuml;rl&uuml; mobilya grubunda montaj ger&ccedil;ekleştirmekteyiz.</span></p>\r\n', '2979d567914f6aa9553b116ad0ff3842.jpg', 'e40d87a032773c0a6149a4d882576c4b.svg', '', '', '', 14, 'tr'),
(16, 'Parke Ustası', 'parke-ustasi', 'Parkeleme işlemi bittikten sonra en az 2 hafta beklemeden sistre ve cila işlemini yaptırmayınız. Bu bekleme süresinde parke yüzeyini korumak için kesinlikle naylon örtü kullanmayınız. Kullanılacak olan parkenin nem oranı 8-12 arasında olmalıdır. ', '<h3 class="service-detail-title" style="font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 700; color: rgb(23, 29, 72); margin: 0px 0px 15px; font-size: 22px;">Parke D&ouml;şeme ve Tadilat&nbsp;Uzmanı</h3>\r\n\r\n<h4 style="font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(58, 58, 58);">&nbsp;</h4>\r\n\r\n<h4 style="font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(58, 58, 58);"><img alt="" src="http://hizayapidekorasyon.com/public/upload/editor/images/38768502_1344490849014591_5267087011205873664_n.jpg" style="width: 200px; height: 200px;" />Parke D&ouml;şeme&nbsp;VE TADİLAT İŞLERİNİZİ BİZE BIRAKIN</h4>\r\n\r\n<p style="color: rgb(146, 146, 146); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">Eskiden ustalarla tek tek uğraşmak zorunda idiniz. Şimdi bir telefonla işinizin t&uuml;m y&uuml;k&uuml;nden kurtulabiliyorsunuz. parke d&ouml;şeme, ev dekorasyonu, mutfak&nbsp;tadilat ve onarım işleri stresli, sorunlu işler olmaktan &ccedil;ıkıyor. Birebir yerinde A dan Z ye t&uuml;m işlerinizi bize g&ouml;n&uuml;l rahatlığıyla teslim edebilirsiniz. İster evinizin boya badanası olsun ister anahtar teslimi ev dekorasyonu tadilat işleri olsun hepsini yapıyoruz.</p>\r\n\r\n<p style="color: rgb(146, 146, 146); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">Binanızın evinizin anahtar teslim tadilat onarım işleri, dış cephe sıva, i&ccedil; cephe sıva , al&ccedil;ı sıva ve her t&uuml;rl&uuml; ince inşaat işlerinizi şirket g&uuml;vencesiyle, kaliteli iş&ccedil;ilik, hızlı hizmet, ve en uygun fiyatla yapıyoruz.</p>\r\n\r\n<p style="color: rgb(146, 146, 146); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;"><img alt="" src="http://hizayapidekorasyon.com/public/upload/editor/images/38768502_1344490849014591_5267087011205873664_n.jpg" /></p>\r\n', '3a58a5e031c8864b9ca94b3c9b210378.jpg', '525552134be1301c100c626d90ed6628.svg', '', '', '', 15, 'tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socials`
--

CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `socials`
--

INSERT INTO `socials` (`id`, `title`, `link`, `image`, `icon`, `order`) VALUES
(1, 'Facebook', 'https://www.facebook.com/Hiza-yap%C4%B1-dekorasyon-106131376183884/', NULL, 'fa fa-facebook', 1),
(3, 'Twitter', 'https://www.facebook.com/Hiza-yap%C4%B1-dekorasyon-106131376183884/', NULL, 'fa fa-twitter', 2),
(4, 'Instagram', 'https://www.facebook.com/Hiza-yap%C4%B1-dekorasyon-106131376183884/', NULL, 'fa fa-instagram', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tapus`
--

CREATE TABLE IF NOT EXISTS `tapus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pafta` varchar(255) NOT NULL,
  `ada` varchar(255) NOT NULL,
  `parsel` varchar(255) NOT NULL,
  `arsa_alani` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  `viewed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `admin_perms`
--
ALTER TABLE `admin_perms`
  ADD CONSTRAINT `admin_perms_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `admin_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `admin_users`
--
ALTER TABLE `admin_users`
  ADD CONSTRAINT `admin_users_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `admin_groups` (`id`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`parentId`) REFERENCES `contents` (`id`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parentId`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `module_arguments`
--
ALTER TABLE `module_arguments`
  ADD CONSTRAINT `module_arguments_ibfk_1` FOREIGN KEY (`module`) REFERENCES `modules` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
