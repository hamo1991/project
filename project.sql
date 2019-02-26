-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2019 г., 14:35
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(2, 'Footwear the leading eCommerce', '<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>\r\n\r\n<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>\r\n', '9gtL212uF8Mqsl2KDIoSqFI3-QJ9Mtc5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `slug`, `created_at`) VALUES
(1, 'The Mythbuster’s Saving Money', 'How to Save Money on Energy Bills: Beginner Level\r\n\r\nDon an extra jumper.\r\nInsulate your loft.\r\nHave a shower, not a bath.\r\nOnly boil as much water as you need in your kettle.\r\nPut off turning on your central heating for as long as you can.\r\nTurn the light off when you leave a room.\r\nUnplug all your devices at the wall, because standby mode costs money.\r\nPah! This is beginner level energy-saving. You can push it much further than that – but how far are you prepared to go?', 'r1B2foPIxQTF_PK1h7GlGGf3UaZCyGk8.jpg', 'the-mythbusters-saving-money', '2019-02-05 08:36:30'),
(3, 'Rockstar Finance gave me $100', '<p>This is a post about the Rockstar Finance Community Fund &ndash; but first of all, an update. I&rsquo;ve been quiet of late, I know. I&rsquo;ve been juggling parenthoo...</p>\r\n', 'ZySR_vcJHzXR_EgVpF87ChKlkhIkqIE-.jpg', 'rockstar-finance-gave-me-100', '2019-02-19 13:54:25'),
(4, 'What is Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'RMQjD1f78MXP8IOtQdNzU5etd0dmfhMM.jpg', 'what-is-lorem-ipsum', '2019-02-19 14:26:38'),
(5, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'yav3pjGAp8tyT3KUzkXqLQ0xmMMbItG7.jpg', 'why-do-we-use-it', '2019-02-19 14:31:26');

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `slug`) VALUES
(1, 'Adidas', '', 'VzC74oL0He9R_SqD7C9keUdkhQp2jBv-.jpg', 'adidas'),
(2, 'Nike', '', '2jEMl0G-jPMFjH1MnS31UyGizTKQF18S.jpg', 'nike'),
(3, 'Puma', '', 'RSIVrwu14N46nSXBpgzO8EJEuyknDnJR.jpg', 'puma'),
(4, 'Gucci', '', '7OjJmnTGyfzhnNYbRNXs2oD4ni92_sGz.jpg', 'gucci'),
(5, 'Merrell', '', 'KsBTG-rZhJbQpouhCQ-b8IUMRBAKuN62.jpg', 'merrell');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`, `created_at`) VALUES
(15, 16, 1, 1, '2019-02-24 13:54:14');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `info_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `slug`, `info_image`) VALUES
(1, 'Men\'s', '', 'JDuEY-6YT-fAm_NX9XAnErRnckuAWXcq.jpg', 'mens', '_JQZZY-ZsCtAGNpU-nUW55_KLuNSO4gB.jpg'),
(2, 'Women\'s', '', 'C9wr-stNUNEGRDgcpFbrCH-vix20Mz6W.jpg', 'womens', 'oL1Y8g9ZC0-VJ9QicwgRY0dvHt7mD2bz.jpg'),
(3, 'Kid\'s', '', 'jGZGS70wyXIFXwmuMEXW1k0Zi51By5Oh.jpg', 'kids', '-z6oehO_nNZ6ZR2UKELcCZiBoQYDlmmw.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `blog_id` int(11) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment`, `user_id`, `created_at`) VALUES
(6, 1, 'hello', 1, '2019-02-19 09:59:17'),
(7, 1, 'fsdfsdfsdfsdf', 1, '2019-02-19 10:49:10'),
(9, 1, 'yii', 1, '2019-02-19 12:37:51'),
(10, 3, 'sfsdfsdfsdf', 1, '2019-02-19 13:57:33'),
(11, 5, 'hasjdasjkdasgdjk    adhjkadajdgakgd', 4, '2019-02-19 16:27:08'),
(12, 1, 'hi\r\n', 4, '2019-02-19 16:47:16'),
(13, 4, 'sjkdhsdhfsdhfjksdfhsdf         hefhfjkwehjkfhjwekhjkhwejkh we wehwejkhjwehr0pr-[or=- 58', 4, '2019-02-19 16:57:37'),
(14, 3, 'yii2!!!!!!!!!!!!!!!!!!!!!', 4, '2019-02-19 17:11:52'),
(15, 5, 'fgjnfgjhfghfgh', 1, '2019-02-20 07:24:27'),
(16, 3, '[p34ir9u9304tu03409tyu3t0\r\n', 1, '2019-02-20 07:30:00'),
(17, 4, 'yii 2', 3, '2019-02-20 17:48:27'),
(18, 5, 'hjkgjkjkgkgkjgkgjg', 9, '2019-02-21 09:00:54'),
(19, 3, 'yes it is', 1, '2019-02-23 11:00:31');

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--

CREATE TABLE `email` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email`
--

INSERT INTO `email` (`id`, `email`, `name`, `content`, `date`) VALUES
(1, 'davo501994@mail.ru', 'Davo', 'shdjahdkjahsdh', '2019-02-20 20:18:21'),
(2, 'testadmin@mail.ru', 'Test', 'shopping', '2019-02-20 20:23:32'),
(3, 'sasha.poghosyan04@mail.ru', 'Sasha', 'wehfwehfiuhwe', '2019-02-21 08:36:42'),
(4, 'robfarzadyan@mail.ru', 'Rob', 'sadasdasdasdasdasdasd', '2019-02-22 10:05:48'),
(5, 'hambardzum1991@mail.ru', 'Hamo', 'shop', '2019-02-22 20:21:27'),
(6, 'testadsssssmin@mail.ru', 'testss', 'huihuihuihuh', '2019-02-22 21:34:43'),
(7, 'gor@mail.ru', 'gor', 'opuisihuisgisgsuygi', '2019-02-23 17:53:48'),
(8, 'sadgahsgda@mail.ru', 'Armen', 'sdvsdvsdvsdvsdvsdv', '2019-02-24 10:27:58'),
(9, 'vazgen1991@mail.ru', 'vazgen', 'Shopping', '2019-02-26 11:34:43');

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `type`, `content`) VALUES
(1, 'email', 'hambardzum1991@mail.ru'),
(2, 'phone', '+37498056677'),
(3, 'address', 'V. Sargsyan 1a shenq bn 15'),
(4, 'headline_one', '25% off (Almost) Everything! Use Code: Summer Sale'),
(5, 'headline_two', 'Our biggest sale yet 50% off all summer shoes'),
(8, 'about', 'It started with a simple idea: Create quality, well-designed products that I\r\n                    wanted myself.');

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `url`, `local`, `name`, `default`, `date_update`, `date_create`, `image`) VALUES
(1, 'en', 'en-EN', 'English', 1, 1550933158, 1550933158, 'united-kingdom.png'),
(2, 'ru', 'ru-RU', 'Русский', 0, 1550933158, 1550933158, 'russia.png'),
(3, 'am', 'am-AM', 'Հայերեն', 0, 1550933158, 1550933158, 'armenia.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) UNSIGNED NOT NULL,
  `orders_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orderitems`
--

INSERT INTO `orderitems` (`id`, `orders_id`, `product_id`, `title`, `price`, `qty_item`, `sum_item`) VALUES
(1, 1, 3, 'GORKA', 33000, 1, 33000),
(2, 2, 21, 'ABDEROS KIDS', 13000, 1, 13000),
(3, 3, 5, 'BLIDWORTH KIDS', 18000, 2, 36000),
(4, 4, 5, 'BLIDWORTH KIDS', 18000, 2, 36000),
(5, 5, 3, 'GORKA', 33000, 1, 33000),
(6, 6, 6, 'DEMOCON F', 47000, 1, 47000),
(7, 7, 1, 'Raill', 43000, 2, 86000),
(8, 7, 2, 'Tepetotutla', 48000, 1, 48000),
(9, 8, 1, 'Raill', 43000, 3, 129000),
(10, 8, 4, 'Rail', 45000, 2, 90000),
(11, 9, 14, 'GALATHEA', 48000, 1, 48000),
(12, 10, 5, 'BLIDWORTH KIDS', 18000, 2, 36000),
(13, 10, 18, 'KIRTLINGTON KIDS', 13000, 1, 13000),
(14, 10, 11, 'FISZER', 46000, 1, 46000),
(15, 11, 3, 'GORKA', 33000, 1, 33000),
(16, 11, 4, 'Rail', 45000, 2, 90000),
(17, 16, 1, 'Raill', 43000, 2, 86000),
(18, 17, 1, 'Raill', 43000, 1, 43000),
(19, 17, 2, 'Tepetotutla', 48000, 2, 96000),
(20, 18, 1, 'Raill', 43000, 2, 86000),
(21, 18, 10, 'NERP SUEDE', 8500, 1, 8500),
(22, 18, 12, 'ASHLAG', 50000, 1, 50000),
(23, 19, 1, 'Raill', 43000, 2, 86000),
(24, 19, 3, 'GORKA', 33000, 1, 33000),
(25, 19, 8, 'MONTGO U', 25000, 1, 25000),
(26, 20, 16, 'BOJAXHI', 27000, 2, 54000),
(27, 20, 1, 'Raill', 43000, 3, 129000),
(28, 21, 12, 'ASHLAG', 50000, 2, 100000),
(29, 21, 8, 'MONTGO U', 25000, 1, 25000),
(30, 21, 4, 'Rail', 45000, 2, 90000),
(31, 22, 3, 'GORKA', 33000, 1, 33000),
(32, 22, 2, 'Tepetotutla', 48000, 2, 96000),
(33, 23, 1, 'Raill', 43000, 1, 43000),
(34, 24, 1, 'Raill', 43000, 2, 86000),
(35, 24, 10, 'NERP SUEDE', 8500, 1, 8500),
(36, 24, 12, 'ASHLAG', 50000, 1, 50000),
(37, 25, 9, 'MEKHI KIDS', 20000, 1, 20000),
(38, 26, 20, 'NANDA A KIDS', 12000, 1, 12000),
(39, 26, 1, 'Raill', 43000, 1, 43000),
(40, 27, 1, 'Raill', 43000, 4, 172000);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `qty`, `total`, `status`, `name`, `email`, `phone`, `address`, `user_id`) VALUES
(1, '2019-02-20 16:12:10', '2019-02-22 10:29:20', 1, 33000, '1', 'HAMO', 'hambardzum1991@mail.ru', '798789', 'jhiuihery ', 1),
(3, '2019-02-20 16:40:14', '2019-02-20 16:40:14', 1, 36000, '0', 'HAMO', 'hambardzum1991@mail.ru', '789798798798', 'gyumri', 1),
(4, '2019-02-20 16:40:56', '2019-02-20 16:40:56', 1, 36000, '0', 'HAMO', 'hambardzum1991@mail.ru', '789798798798', 'gyumri', 1),
(5, '2019-02-20 17:13:27', '2019-02-20 17:13:27', 1, 33000, '0', 'DAVO', 'davo501994@mail.ru', '798789', 'gyumri', 3),
(6, '2019-02-20 17:46:50', '2019-02-20 17:46:50', 1, 14100, '0', 'DAVO', 'davo501994@mail.ru', '798789', 'gyumri', 3),
(7, '2019-02-20 17:56:54', '2019-02-20 17:56:54', 2, 134000, '0', 'DAVO', 'davo501994@mail.ru', '789798798798', 'gyumri', 3),
(8, '2019-02-20 18:00:35', '2019-02-20 18:00:35', 2, 348000, '0', 'DAVO', 'davo501994@mail.ru', '46545646564', 'gyumri', 3),
(9, '2019-02-20 19:36:06', '2019-02-20 19:36:06', 1, 48000, '0', 'HAMO', 'hambardzum1991@mail.ru', '798789', 'ewegwrgwgwrg', 1),
(10, '2019-02-21 08:34:52', '2019-02-21 08:34:52', 3, 95000, '0', 'SASHA', 'sasha.poghosyan04@mail.ru', '456465454646', 'gyumri', 9),
(11, '2019-02-21 10:05:45', '2019-02-21 10:05:45', 2, 156000, '0', 'SASHA', 'sasha.poghosyan04@mail.ru', '000', 'gggg', 9),
(16, '2019-02-21 18:11:42', '2019-02-21 18:11:42', 1, 86000, '0', 'HAMO', 'hambardzum1991@mail.ru', '798789', 'asdasdasda', 1),
(17, '2019-02-21 18:13:22', '2019-02-21 18:13:22', 2, 182000, '0', 'HAMIK', 'hamkar2030@gmail.com', '456444654', 'gyumri', 10),
(18, '2019-02-22 08:10:19', '2019-02-22 08:10:19', 3, 144500, '0', 'YURA', 'yuranazaryan0505@mail.ru', '465465444', 'gyumri', 11),
(19, '2019-02-22 08:38:44', '2019-02-22 08:38:44', 3, 144000, '0', 'HAMIK', 'hamkar2030@gmail.com', '4654654646', 'gyumri', 10),
(20, '2019-02-22 08:43:25', '2019-02-22 08:43:25', 2, 262800, '0', 'HAMIK', 'hamkar2030@gmail.com', '46546466', 'gyumri', 10),
(21, '2019-02-22 08:48:38', '2019-02-22 08:48:38', 3, 340000, '0', 'HAMIK', 'hamkar2030@gmail.com', '2465464', 'sfsdfsdfsdf', 10),
(22, '2019-02-22 08:49:46', '2019-02-22 08:49:46', 2, 162000, '0', 'HAMO', 'hambardzum1991@mail.ru', '654544', 'gyumri', 1),
(23, '2019-02-22 09:30:46', '2019-02-22 09:30:46', 1, 43000, '0', 'HAMO', 'hambardzum1991@mail.ru', '86587585', 'gyumri', 1),
(24, '2019-02-22 09:42:26', '2019-02-22 09:42:26', 3, 144500, '0', 'ROB', 'robfarzadyan@mail.ru', '856456456', 'gyumri', 12),
(25, '2019-02-23 16:42:58', '2019-02-23 16:42:58', 1, 15000, '0', 'HAMO', 'hambardzum1991@mail.ru', '789798798798', 'dfgdfgdfgdfg', 1),
(26, '2019-02-24 07:33:19', '2019-02-24 07:33:19', 2, 55000, '0', 'HAMO', 'hambardzum1991@mail.ru', '54456456456', '45646456456', 1),
(27, '2019-02-24 09:48:42', '2019-02-24 09:48:42', 1, 172000, '0', 'HAMO', 'hambardzum1991@mail.ru', '465465454', 'gyumri', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `colors` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `product_id`, `image`, `colors`) VALUES
(16, 4, 'Sw2VNME6I0WwIXhcNKI-RRvI7QaekOOC.jpg', 'White'),
(17, 4, 'PsdVAutX8So0MBnbsghFnF1Uytb32KM0.jpg', 'Black'),
(18, 4, 'mqnEZz_eVenajsvf5bmh2bqw_1VK13CH.jpg', 'Red'),
(19, 1, 'gxfF6kguMUpj94FbgiuWdPsW0hVD9fWQ.jpg', 'Black'),
(20, 1, 'L86qIreEn9llZlJuCYeO1O1irkbTyDvs.jpg', 'Green'),
(21, 1, 'cm4jfA2A3fIPopXI7A53sOya9nCqItCQ.jpg', 'Blue'),
(22, 2, 'kCvAw8NFFmSPXy7cZpRPohvxKWLY-OJT.jpg', 'Black'),
(23, 2, 'hzs1IXnNyaq72_3kW1gQCPxfSeHQkuAd.jpg', 'White'),
(24, 2, 'Pu7r2zVDyir6nKKoKx10R5YnCf7zaxUW.jpg', 'Cream'),
(25, 7, 'SV9R-WRDWDJ_gXjaTP8taCWvJ1lPYhYb.jpg', 'Blue'),
(26, 7, 'uXgHPTPMRL_OGUH1qiZYnw24V9e6ZHUo.jpg', 'Brown'),
(27, 7, 'al3e5G6FIZUJO2aq8ftNuFCks7dJXwvb.jpg', 'Black'),
(28, 10, 'XoTBEx4XGDbl4ViokNX93zAftqWtvQJm.jpg', 'Brown'),
(29, 10, 'WFnlVFZu0n3YKwqZRxrF0AZlLUViwoP2.jpg', 'White'),
(30, 10, 'Ys1hED-Lij2zfBf_NuLV1SY276hQn7Wl.jpg', 'Cream'),
(31, 11, 'es3LPS2pw8XDACIUOEGhAsdFilQYLZ5P.jpg', 'Brown'),
(32, 11, 'loulSDh_Ze4SuCOYNTRcrRAcH9nsFWhU.jpg', 'Black'),
(33, 11, '8BeUToCXL3XLzTAn9GdK2E1zl7Zu_Ke-.jpg', 'Red'),
(34, 12, '76jY5NBgjIsv8IHBJitS-gK23MyDKdqo.jpg', 'Black'),
(35, 12, 'lSKHeVZ2f2JgSDtyOLWCwYkgeWZo-tS6.jpg', 'Blue'),
(36, 12, 'UeaQHKLrCVwBaMuTJdhJbsxnqOP_lIMu.jpg', 'Brown'),
(37, 13, 'rqCvzQJeOUeL_b8BjWBPotjhJixD9yJ7.jpg', 'Brown'),
(38, 13, 'g_ix8yPMuVteAtr8rcFECj9EJh7wDsOc.jpg', 'Grey'),
(39, 13, 'FvywxhqBCxW4uS6YZXjpL3OL8XkKGeVy.jpg', 'White'),
(40, 14, 'ewwg5QOXQaAfUCit-1hacfhnn0cBeNw6.jpg', 'Blue'),
(41, 14, 'YOgIRdwMUO41Z9AL1B7FRJchqb9T65zY.jpg', 'Black'),
(42, 14, 'SmTHxV0en09DJ39HOTDCys0AGEn3vjlB.jpg', 'Brown'),
(43, 3, 'nny3UFO30BlrcNfl0GFS0eQKZoRv_Z5f.jpg', 'Yellow'),
(44, 3, 'zMp_It8eRPYkhLhXxjPPy4D_yyutwLTc.jpg', 'Red'),
(45, 3, 'NdoPkR-kE6hlBtZclkJ206JBCwu_iMPs.jpg', 'Green'),
(46, 8, 'KM-i2fCx39ub0-fprWTpg-NeukIoHxrX.jpg', 'Red'),
(47, 8, 'm2QREHl6f_RAFPUcokq2kq_Zl1cyB8qn.jpg', 'Yellow'),
(48, 8, 'SpxN6rjx9Tg1GuK_B6AMaCeDlCoBvQuZ.jpg', 'Grey'),
(49, 6, 'h67epiE2EmUM0IWueiAmL2mtih8qiouK.jpg', 'Black'),
(50, 6, 'na1NvL0ZoUrLIKNy827ai9jCZJ9Q12oH.jpg', 'Grey'),
(51, 6, 'yZgpMUlSIu-9ayDWzHZMKsldcYXc5gaa.jpg', 'White'),
(52, 15, 'gAUxQ3vnFo_E4gquJTN5rUcUsCoaK6vZ.jpg', 'Black'),
(53, 15, 't8AhLZZBV8qdIC8nN913MlQ9RwG6NGhB.jpg', 'Red'),
(54, 15, 'uSulo1IBQJ7OlM7c6p5Grtaa7jcgJDC2.jpg', 'Yellow'),
(55, 16, 'GVhVvA2lJZzflFeyivjWeQFKDzUWY6n8.jpg', 'Red'),
(56, 16, 'xR76KcX5lIzDwZ9S4gxpeImoHIQ2-yw8.jpg', 'Green'),
(57, 16, 'AalxxyUXpGFu_iAsjbOkttQvRMH1X_vq.jpg', 'Yellow'),
(58, 17, '9f2FQ0Y3HZbPyPVq3PbzvpA3gzyT12A1.jpg', 'Black'),
(59, 17, '2fG1-KJYr9B-5c3tJoFZuGQgHTa3xkn9.jpg', 'Red'),
(60, 17, 'xeNxwwI5PIuDfl-7MJfaeBrno5O-OvfY.jpg', 'White'),
(61, 5, 'OIDEgg0_c1ksp8rX5sniI1TGwoZjvinJ.jpg', 'Grey'),
(62, 5, 'hFnqVBH5Yz-9X6RTxn04DkX8-gvfuitp.jpg', 'Brown'),
(63, 9, 'WOpLw7MS5qIrzlPlYEMoFVab3oWOeeVo.jpg', 'Blue'),
(64, 9, 'YC4ZF_jwRiV4dCvHkze4ZYj219BVrLhO.jpg', 'Black'),
(65, 18, '4zxN15v6bbruoVEZv2sUgadcxvmf8E6Q.jpg', 'Blue'),
(66, 18, '0alXigxawtImwUTexJbHy5DB68LAQy_C.jpg', 'White'),
(67, 19, 'orw_Zw235phWQcrX6QpAwdzz61MMXnZW.jpg', 'Red'),
(68, 19, 'OofkmJGeoZRcR4nM9h97ri2vyjEzw1IE.jpg', 'Pink'),
(69, 19, 'Y0q5FG8lDaBNeEZJvLkLbiHe1r0LYP27.jpg', 'Yellow'),
(70, 20, 'voNlvZKgOCfoYGOg3nQ14RsJwSTmjO_-.jpg', 'Pink'),
(71, 20, 'WYUV0-AruKP4mWC0eE0vJSmgpu4FCAx1.jpg', 'Black'),
(72, 20, 'RgDS11kkWSI4nuTy9H7RSeopfowBZnb0.jpg', 'Red'),
(73, 21, '34QfCwvDuMK9aW6sqEbtzCuqeFMo5J_M.jpg', 'Red'),
(74, 21, 'Ji23z9iSEJaGsGkiLmDxCwA1NDcr1vh7.jpg', 'Pink'),
(75, 21, 'hnAjKHpT4Q8oD6Pg3IV46P9fZKhLXTa7.jpg', 'Green');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `manufacturer` text,
  `content` text,
  `price` float UNSIGNED NOT NULL,
  `sale_price` float UNSIGNED DEFAULT NULL,
  `sizes` varchar(100) NOT NULL,
  `sku` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available_stock` int(11) NOT NULL,
  `is_new` enum('0','1') NOT NULL DEFAULT '0',
  `is_sale` enum('0','1') NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `cat_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(150) NOT NULL,
  `best` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `manufacturer`, `content`, `price`, `sale_price`, `sizes`, `sku`, `quantity`, `available_stock`, `is_new`, `is_sale`, `image`, `cat_id`, `brand_id`, `slug`, `best`) VALUES
(1, 'Raill', '<pre>\r\n<strong>Even the all-powerful Pointing has no control about the blind texts it is an almost\r\n</strong><strong>unorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\n</strong><strong>decided to leave for the far World of Grammar.</strong></pre>\r\n', '<pre>\r\n<strong>Even the all-powerful Pointing has no control about the blind texts it is an almost\r\n</strong><strong>unorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\n</strong><strong>decided to leave for the far World of Grammar.</strong></pre>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</span></p>\r\n', 43000, NULL, '39,40,41,42', '123456', 14, 14, '1', '0', 'vulml1elm-o-xmIDY1lH61QxRCwizsp6.jpg', 1, 5, 'raill', '1'),
(2, 'Tepetotutla', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 48000, NULL, '39,40,41,42	', '494894984', 8, 8, '0', '0', 'i6LBlZYXSJY2baQA6EjqqbKRg--FBBRx.jpg', 1, 2, 'tepetotutla', '1'),
(3, 'GORKA', '<p>Կոշիկի հարմարավետությունը որոշվում է նրա ներքին չափսերով և ձևով, որոնց հիմնական բնութագրերն են համարը և լիքությունը։ Համարակալման համակարգում որպես համար ընդունվում է կաղապարի հետքի երկարությունը՝ արտահայտված շտիխներով (մեկ շտիխը հավասար է 2/3 սմ-ի)։ ԽՍՀՄ-ում ընդունված էր նաև կոշիկի համարակալման համակարգ, որտեղ որպես համար ընդունված է ոտնատակի երկարությունը՝ արտահայտված սմ-ով։ Կոշիկից համարներն իրարից տարբերվում են 0, 5 սմ-ով։</p>\r\n', '<p>&laquo;Հայկական կոշիկը պահանջված է ռուսական շուկայում՝ որակ-գին օպտիմալ համադրության և գեղեցիկ ու հարմարավետ լուծումների շնորհիվ։ Դեռևս խորհրդային շրջանում հայկական կոշիկի հանդեպ ձևավորված դրական կարծիքը դիզայներական նոր լուծումների շնորհիվ ավելի է ամրապնդվում: Դրա վկայությունը ցուցահանդեսների օրերին հայկական տաղավարի շուրջ տիրող ակտիվությունն է։ Բացի այդ՝ հետզհետե նկատում ենք, որ ցուցահանդեսին մասնակցել ցանկացող հայ արտադրողների հետաքրքրությունը նույնպես մեծանում է&raquo;,-նշել է Հայաստանի զարգացման հիմնադրամի գործադիր տնօրեն Կարէն Մկրտիչեանը։</p>\r\n', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 33000, NULL, '39,40,41,42,43', '78978944', 10, 10, '0', '0', 'sUMEprKrel21VnhK2TRkomMMs2oq17eb.jpg', 2, 3, 'gorka', '1'),
(4, 'Rail', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 45000, NULL, '38,39,40,41,42', '798754', 12, 12, '1', '0', 'SPHlilUrjglpLOWdcQ9KAhrCMRRmy1hq.jpg', 1, 2, 'rail', '1'),
(5, 'BLIDWORTH KIDS', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 18000, NULL, '39,40,41,43', '13547', 11, 11, '1', '0', 'Neq1pS4DncGGTV1lMpERthLSz8kx2SdT.jpg', 3, 4, 'blidworth-kids', '1'),
(6, 'DEMOCON F', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 47000, 14100, '39,40,41,42', '89547', 9, 9, '0', '1', 'WrPIPmqagEPg8lZfdmUgO_IBQWHcMSzE.jpg', 2, 1, 'democon-f', '1'),
(7, 'THAULOS U', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 49000, 44000, '39,41,42,43', '98547', 15, 15, '0', '1', 'Ry-CutVEqEkBmui1KCWXz5tDPyXCncin.jpg', 1, 3, 'thaulos-u', '0'),
(8, 'MONTGO U', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 25000, NULL, '39,40,41,42', '7897548979', 10, 10, '0', '0', 'dWPJtLE66EgCsbE2f_YvcMA8E0x_GwtR.jpg', 2, 2, 'montgo-u', '1'),
(9, 'MEKHI KIDS', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 20000, 15000, '39,40,41,42,43', '324897', 14, 14, '0', '1', 'xdc7XMA4ubOqA4gV5uQkynPPHjbTTzDK.jpg', 3, 5, 'mekhi-kids', '1'),
(10, 'NERP SUEDE', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 8500, NULL, '39,40,41,42', '97844481', 12, 12, '1', '0', '-S0-9roJ_IovuPuDqfTlcHTWsGQ1pCGX.jpg', 1, 4, 'nerp-suede', '0'),
(11, 'FISZER', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 46000, NULL, '39,40,41,42', '999999', 18, 18, '1', '0', 'm47S4VRy2hnCKQ-NZL69VM8TNvnfXhZn.jpg', 1, 1, 'fiszer', '0'),
(12, 'ASHLAG', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 50000, NULL, '39,40,41,42,43', '111222', 10, 10, '0', '0', 'U5OSatVcqXNhToQzZ5yg2Vfl6Do8clOJ.jpg', 1, 2, 'ashlag', '0'),
(13, 'BORLA', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 39000, 35000, '39,40,42,43', '321654', 14, 14, '0', '1', 'pjgIYHAIQoEIQIrl_Iyo7u0MazK7r0r4.jpg', 1, 1, 'borla', '0'),
(14, 'GALATHEA', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 48000, NULL, '39,40,41,42', '88899965', 12, 12, '0', '0', 'djzryjTiSU0g4bBaycqXa_XFbSOKA-IQ.jpg', 1, 5, 'galathea', '0'),
(15, 'LETTICE', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 23000, NULL, '34,35,36,37,38,39', '259647', 12, 12, '1', '0', 'Rb8MbWshYruocVO1XJz-BnX-mtUxVqad.jpg', 2, 5, 'lettice', '0'),
(16, 'BOJAXHI', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 27000, 22300, '34,35,36,37,38', '9863210', 12, 12, '0', '1', '7ci-vUKPogJ_jLczuVkgqrllMjpjvqmN.jpg', 2, 4, 'bojaxhi', '0'),
(17, 'IONIAN', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 26000, NULL, '34,35,36,37,38,39', '324895', 13, 13, '1', '0', 'AgpfGtti98yVVKqBVCyhJTBnsekTiA_L.jpg', 2, 1, 'ionian', '0'),
(18, 'KIRTLINGTON KIDS', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 13000, NULL, '26,27,28,29,30,31,32,33,34', '962348', 13, 13, '0', '0', 'VNCZZ6iI0aQGOaXpe23gebuoIzZZ_yTu.jpg', 3, 1, 'kirtlington-kids', '0'),
(19, 'MERENSKYITE KIDS F', '', '', '<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>\r\n', 14000, NULL, '26,27,28,29,30,31,32,33,34', '32200014', 10, 10, '1', '0', 'cgXEryFtqZozNKK-5elxQgXuGPp8CV_G.jpg', 3, 2, 'merenskyite-kids-f', '0'),
(20, 'NANDA A KIDS', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 12000, NULL, '26,27,28,29,30,31,32,33', '9320564', 10, 10, '0', '0', 'J9759LJ9xoiIkpy97CJdW4sGx8QX0DlY.jpg', 3, 3, 'nanda-a-kids', '1'),
(21, 'ABDEROS KIDS', '', '', 'Even the all-powerful Pointing has no control about the blind texts it is an almost\r\nunorthographic life One day however a small line of blind text by the name of Lorem Ipsum\r\ndecided to leave for the far World of Grammar.', 13000, 9500, '27,28,29,30,31,32,33,34', '31346458', 11, 11, '0', '1', '0lSc8TQr0Z83y0qItkizvxKLAlo7un91.jpg', 3, 1, 'abderos-kids', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rules`
--

INSERT INTO `rules` (`id`, `cat_id`, `brand_id`) VALUES
(7, 1, 1),
(8, 1, 2),
(9, 1, 3),
(10, 1, 4),
(12, 1, 5),
(13, 2, 1),
(14, 2, 2),
(15, 2, 3),
(16, 2, 4),
(17, 2, 5),
(18, 3, 1),
(19, 3, 2),
(20, 3, 3),
(22, 3, 5),
(23, 3, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `content`, `image`, `slug`) VALUES
(1, 'Men\'s Shoes', 'Collection', 'New trending shoes', 'zNbTvHVuokHeBg8yChQ9ZqBNBNnuyx27.jpg', 'mens'),
(2, 'Huge Sale', '50% Off', 'Big sale sandals', 'PpR7Ie5vQSiCsBeXKs5DfTdY6H2yw84s.jpg', 'womens'),
(3, 'New Kids Shoes', 'up to 35% of', 'New stylish shoes for men', 'U8IH_sbst_3q1f9orSMvMHcqXpotEC-i.jpg', 'kids');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `is_admin`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hamo', '1', 'e_-dJKkaDcnE4tJhvPnBzw4v0cvSqsya', '$2y$13$ouMVjniDwATHgG.iE9Kqd..w2x8OeGbzBgJHm5sPB3yHnRC24iXg2', NULL, 'hambardzum1991@mail.ru', 10, 1548096038, 1548096038),
(3, 'davo', '0', 'MwVi3frb-YMtQ7-p7GebtSLdwx8LuX_C', '$2y$13$G53azJQQaUSlleeRLDwgG.5nnK2oxfpFy9tIxldq31mMIZq5fM8r.', NULL, 'davo501994@mail.ru', 10, 1549356744, 1549356744),
(4, 'Lena', '0', 'DErlVmyshyqNrKuPHMShCrsiaCvV-U8p', '$2y$13$zhrqmWfAfbyZpPdnCR8eB.zUTrCD15r2WmAX4/HTDUlKvwKP.4rne', NULL, 'lena@mail.ru', 10, 1550317695, 1550317695),
(5, 'arsen', '0', 'vgiDbeAAl8y4dhIFINSfy1AyKXISYTHX', '$2y$13$r9bMEYXu3thp5vEOPgcCdOUPYzjMCQXtKXBt.HFQ474PJIu05qNTK', NULL, 'arsen.petrostyan.2018@mail.ru', 10, 1550418421, 1550418421),
(6, 'Astghik', '0', 'efzN15EDXkp9H2FQ7NrVV5EHBumomykN', '$2y$13$qEb2QeaLvS2ppPa4nHa6LuhIA8npu4ZC4NA8vENeIXSoRlmrJNfam', NULL, 'mirijanyan91@mail.ru', 10, 1550422639, 1550422639),
(7, 'rubo', '0', 'fcc3ZEiqd1abwosr6euO6t3rTRwAjQwG', '$2y$13$Fat7Be7NWphsAI8ivC0SvuTUC4wBcFPEbd5QqRSuQd.I.ucg/1a1e', NULL, 'sport-199368@mail.ru', 10, 1550473839, 1550473839),
(8, 'robert', '0', 'r6RQgRf8j18pf9LzNul4H8vinUSdGsZi', '$2y$13$Ch2iW8rtFQn3USmS4eUzkOLwUweUjnZX6lvKTetU/FcMqROI00aNe', NULL, 'robertAzizbekyan93@gmail.com', 10, 1550656599, 1550656599),
(9, 'sasha', '0', '8dJWG3DOFze2UKLGX8pvvvHW_OPkzsFj', '$2y$13$mU2tl.eVyIrGhK6WDuZKaOY2gtBaiJZOvhcNvuabuO4pyTxKc0vVO', NULL, 'sasha.poghosyan04@mail.ru', 10, 1550738050, 1550738050),
(10, 'hamik', '0', 'tiK5egx-os2JuOd9cyorsdVx4Jyd26N6', '$2y$13$XIUq3hwtIvXRonkH6SVm5uIhGHv6kxfFLOBuvKDCvlxWItY7nIp9.', NULL, 'hamkar2030@gmail.com', 10, 1550772772, 1550772772),
(11, 'Yura', '0', 'OZgSVsonbWb7hhYlhY9Rxc8CYAwpVhUS', '$2y$13$gWeJ5m8oe9/NBTUnpwyTV.AvD55kXitJQ4ai7ABLAZWieMT0xxDA6', NULL, 'yuranazaryan0505@mail.ru', 10, 1550822986, 1550822986),
(12, 'rob', '0', 'XgIloG24VZvMBULdmYkPGf3-NyP0KnZG', '$2y$13$hVYm6G0CyVSNdJZIqdmUFuzzyQ7JBwO6CfNiZXqgBlraYZG6bE5qO', NULL, 'robfarzadyan@mail.ru', 10, 1550828513, 1550828513),
(13, 'albert', '0', 'bE6n53BX50HR8bFI_mWzingTaG5xxRMy', '$2y$13$WDSOwIZmO9T/3IwL/QFDgeiijX48G0djwkW8snNxxA57XNZj..Wny', NULL, 'alber@mail.ru', 10, 1550941660, 1550941660);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`orders_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Индексы таблицы `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catFK` (`cat_id`),
  ADD KEY `brandFK` (`brand_id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `brandFK` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catFK` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
