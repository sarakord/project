-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 08:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brief` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `description`, `Brief`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Interlinks Manager', 'لینک‌های داخلی یکی از مهم‌ترین استراتژی‌های SEO است که در صورتی کارآمد و موثر خواهد بود که  این لینک‌ها از ساختار صحیحی پیروی کنند. واضح است که تولید لینک‌های داخلی برای یک وب سایت با ۳۰۰ تا ۴۰۰ مقاله کار آسانی نیست اما افزونه مدیریت لینک‌های داخلی به شما کمک می‌کند تا به صورت خودکار این لینک‌ها را برای وب سایت وردپرسی خود تولید کنید.', 'لینک ساز خودکار برای سئوی محتوایی', '15836711955dcabd2eeaec3701a2776418.jpg', '2020-03-06 13:49:43', '2020-03-08 12:55:27'),
(2, 'Domain Authority', 'از لحاظ تاریخی، وبسایت Moz بیشتر بر قدرت دامنه آموزشی تکیه کرده است تا یک مجموعه(set) غیرکاربردی و گسترده از نتایج جستجو. در واقع، این یک روش استاندارد در صنعت سئو بوده است. اما Moz راهی برای بهبود آن پیدا کرده است، که باعث قابل اعتماد تر شدن Domain Authority می شود. قدرت دامنه جدید در درک سایت هایی که برای هیچ کلمه کلیدی ای رنک نمی شوند، در مقایسه با گذشته بهتر عمل خواهد کرد.', 'قدرت دامنه یا دامین اتوریتی (Domain Authority)', '1583671922moz-domain-authority-update.png', '2020-03-08 09:20:06', '2020-03-08 09:22:02'),
(4, 'seo tools', '1. Wordstream\r\nیک ابزار رایگان سئو برای کلمات کلیدی است که از پایگاه داده جستجوهای خود، بهترین ایده کلمات کلیدی را موثر در  سئو داخلی را نشان می دهد.\r\n\r\n2. Keyword Eye Basic\r\nیک ابزار بهینه سازی سایت برای پیشنهاد کلمات کلیدی تصویری است .\r\n\r\n3. Youtube Keyword Tool\r\nجولیا جویسی اخیرا به جزیی توضیح داده است که این ابزار بهینه سازی سایت برای بررسی کلمات کلیدی در تمامی نوع محتوا مفید و کاربردی می باشد.\r\n\r\n4. Ubersuggest\r\nاین ابزار سئو، داده های پیشنهادی در گوگل و دیگر موتورهای جستجو را نشان می دهد. یک ابزار عالی برای توسعه سایت در دراز مدت می باشد.', 'ابزارهای بهینه سازی سایت', '1583689706web-site-optimization-tools.jpg', '2020-03-08 14:18:26', '2020-03-08 14:18:26'),
(5, 'pagerank', 'پیج رنک انقلابی در جستجو بود\r\nبه زبان ساده تر PageRank لینک ها را به معادلات رتبه بندی اضافه کرد. این اصطلاح در دنیای آکادمیک با نام Citation شناخته می شود. مقاله ای که توسط بسیاری از افراد لینک داده شود و در یک مقاله به آن ها ارجاع داده شود یعنی معتبرتر است. مثلا مقاله ی فوتوالکتریک انیشتین در حال حاضر جزو مقالات مهمی است که تعداد سایتیشن آن در میان مقالات بسیار بیشتر است.\r\n\r\nگوگل این امکان را به دنیای وب هم آورد. مقالات یا بلاگ پست ها و یا صفحاتی که توسط سایر سایت ها لینک می گیرند اعتبار بیشتری در گوگل کسب می کنند و رتبه ی بهتری هم دارند. این کار باعث شد تا رتبه ها سالم تر شود و کاربران با جستجو در گوگل به مقالات و صفحات معتبرتری هدایت شوند. این یک انقلاب بود.', 'PageRank در سئو 2020 به زبان ساده', '1583690304google-pagerank.jpg', '2020-03-08 14:28:24', '2020-03-08 14:28:24'),
(6, 'sponsored و ugc', 'در سپتامبر سال ۲۰۱۹ جان مولر، مدیر تحلیل وبمسترهای گوگل برای شناسایی بهتر لینک های nofollow اقدام به معرفی دو ویژگی جدید برای لینک های خارجی نمود. این دو ویژگی بسیار مهم باعث می‌شود تا گوگل درک بهتری از لینک های nofollow داشته باشد.', 'شناسایی بهتر لینک های nofollow', '1583692835difference-rel-nofollow-and-rel-sponsored-and-ugc.jpg', '2020-03-08 15:10:35', '2020-03-08 15:10:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
