-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 05:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Badria Al-Bishr', 'A Saudi Arabian writer and novelist, Badria Al-Bishr continues to write novels focusing on strong female themes despite the pushback from the Saudi state at times. Some of her most notable novels include Hind and the Soldiers, The Seesaw, and Love Stories on Al-Asha Street.', '5f0478d9c3f6f.jpg', '2020-06-06 01:27:38', '2020-07-07 11:30:01'),
(2, 'Hawra Al-Nadawi', 'An Iraqi author born to both Arab and Kurdish parents who were prisoners under Saddam Hussein’s dictatorship, Hawra Al-Nadawi herself remembers staying in Saddam’s jails with her mother. Her writing is gaining more and more popularity with its powerfully emotional prose, with her debut novel Under the Copenhagen Sky quickly gaining international recognition.', '5f04788d3eb32.jpg', '2020-06-06 01:27:38', '2020-07-07 11:28:45'),
(3, 'Samar Yazbek', 'Born in Syria, she was thrust into the limelight when she openly denounced the Syrian president Bashar al-Assad in 2011 during the Syrian uprising, although she is a part of his family. Her activism and writing has won her acclaim throughout the Middle East and the world, with some of her most famous works including The Crossing: My Journey to the Shattered Heart of Syria and A Woman in the Crossfire: Diaries of the Syrian Revolution.', '5f0478630b1b8.jpg', '2020-06-06 01:27:38', '2020-07-07 11:28:03'),
(4, 'Etel Adnan', 'Born in 1925 in Beirut and still loved today as much as she was almost a century ago, Etel Adnan is one of the Middle East’s most favorite poets. Writing novels and poetry in English, French, and Arabic, some of her most well-noted works in English include the novel Sitt Marie Rose and her collection of poetry titled Sea and Fog.', '5f04781de9140.jpg', '2020-06-06 01:27:38', '2020-07-07 11:26:53'),
(5, 'Elif Shafak', 'Turkey’s most popular female author, but also one of the Middle East’s most favorite novelists, Elif Shafak’s novels center around Sufi mysticism, love, and magical realism. Her two most famous books that have gained widespread love across the world are The Bastard of Istanbul and The Forty Rules of Love: A Novel of Rumi.', '5f0477dc0fcde.jpg', '2020-06-06 01:27:38', '2020-07-07 11:25:48'),
(6, 'Orhan Pamuk', 'Another author from Turkey, Orhan Pamuk is the country’s best-selling author and has sold over 13 million books; in part thanks to his winning of the 2006 Nobel Prize in Literature. Known for incorporating themes of art into many of his novels, some of his most popular titles include The White Castle, Istanbul: Memories and the City, and The Museum of Innocence.', '5f047781e7f6a.png', '2020-06-06 01:27:38', '2020-07-07 11:24:17'),
(7, 'Susan Abulhawa', 'One of the most famous modern Palestinian writers and human rights activist, Susan Abulhawa became a household name after the publication of her bestselling novel, Mornings in Jenin. She is also the founder of a non-governmental organization called “Playgrounds for Palestine”, and her second book, The Blue Between Sky and Water, has already been sold in 19 different languages.', '5f04772d1824c.jpg', '2020-06-06 01:27:38', '2020-07-07 11:22:53'),
(8, 'Khaled Hosseini', 'Born in Afghanistan, Khaled Hosseini’s most famous novel is probably The Kite Runner, which won huge acclaim across the world. Originally a physician, he retired and became a full-time writer and has since written other hugely popular books, including A Thousand Splendid Suns and And the Mountains Echoed.', '5f0476f2e0c02.jpg', '2020-06-06 01:27:38', '2020-07-07 11:21:54'),
(27, 'Ahlam Mosteghanemi', 'Born in Tunisia but originally from Algeria and often called the “world’s best Arabic novelist”, Ahlam Mosteghanemi continues to inspire young readers across the Middle East. Usually writing in Arabic, most of her works have been translated into English because of their popularity, with favorites including Memory in the Flesh, Chaos of the Senses, and The Art of Forgetting.', '5f047603b76ba.jpg', '2020-07-07 11:17:55', '2020-07-07 11:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `desc`, `img`, `price`, `author_id`, `created_at`, `updated_at`) VALUES
(9, 'Novel fines Al-Asha Street', 'A novel Street Love Pines pdf written by Badria Al-Bishr .. A novel by the Saudi writer Badria Al-Bishr, which is the novel that entered the long list of the Booker Prize. The novel tells of the seventies generation, the generation that experienced the real transformation in the life of the Saudi family, starting with color TVs, telephones and home air conditioners.\r\n\r\nThe protagonist is \"Aziza\", who is fond of old Egyptian films, and she measures any new event in her life with scenes of Souad Hosni in her films. Aziza writes to us about the stories of chaste, innocent love, the story of emotions that crept into the surface every night in order to meet her beloved Saad, the story of Muzna and the Palestinian young man who captured her heart and decided to flee with him, the story of Aziza and the Hadrami youth \"Omar\" who captured her with his smile, and her story with the shoes of Souad Hosni Golden.', '5f047be9f0d4a.jpg', 500.00, 1, '2020-07-07 11:43:05', '2020-07-07 11:43:05'),
(10, 'Black befitting your', 'The novel revolves around a Lebanese millionaire who is almost fifty years old, and a seven-year-old singer, Hala El-Wafi, was admired by an Algerian singer. After that, Mr. Talal Hashem watched it on a television program, and decided to be him. Talal, who has struggled to enrich his cultural crop in music, art and poetry, begins to draw up a plan after plan to catch this belle who wears lions in mourning for the death of her father and brother during the turmoil in Algeria at the beginning of this century', '5f047c9ca2baa.jpg', 1000.00, 27, '2020-07-07 11:46:04', '2020-07-07 11:46:04'),
(11, 'A Thousand Splendid Suns', 'The title of the book comes from a line in the Josephine Davis translation of the poem \"Kabul\",[10] by the 17th-century Iranian poet Saib Tabrizi:\r\n\r\n    \"Every street of Kabul is enthralling to the eye\r\n    Through the bazaars, caravans of Egypt pass\r\n    One could not count the moons that shimmer on her roofs\r\n    And the thousand splendid suns that hide behind her walls\"\r\n\r\nIn an interview, Khaled Hosseini explains, \"I was searching for English translations of poems about Kabul, for use in a scene where a character bemoans leaving his beloved city, when I found this particular verse. I realized that I had found not only the right line for the scene, but also an evocative title in the phrase \'a thousand splendid suns,\' which appears in the next-to-last stanza.\"[1]', '5f047d4d546dd.jpg', 1600.00, 8, '2020-07-07 11:49:01', '2020-07-07 11:49:01'),
(12, 'Mornings in Jenin', 'Mornings in Jenin was originally published in the United States in 2006 as The Scar of David.[2][3] The novel was translated into French and published as Les Matins de Jenin. It was then translated into 27 languages. Bloomsbury Publishing reissued the novel in the United States as Mornings in Jenin (February, 2010) after slight editing.[3][4][5]\r\n\r\nMornings in Jenin is the first mainstream novel in English to explore life in post-1948 Palestine. The novel was partially inspired by the Ghassan Kanafani novel Returning to Haifa.', '5f047dc7ca3b3.jpg', 1050.00, 7, '2020-07-07 11:51:03', '2020-07-07 11:51:03'),
(13, 'The Black Book Paperback', 'Billy Harney was born to be a cop. As the son of Chicago\'s chief of detectives with a twin sister on the force, Billy plays it by the book. Teaming up with his adrenaline-junkie partner, Detective Kate Fenton, there\'s nothing he wouldn\'t sacrifice for his job. Enter Amy Lentini, a hard-charging assistant attorney hell-bent on making a name for herself who suspects Billy isn\'t the cop he claims to be. They\'re about to be linked by more than their careers.', '5f047e79494fe.jpg', 800.00, 6, '2020-07-07 11:54:01', '2020-07-07 11:54:01'),
(14, 'The Forty Rules of Love', 'In this lyrical, exuberant follow-up to her 2007 novel, The Bastard of Istanbul, acclaimed Turkish author Elif Shafak unfolds two tantalizing parallel narratives—one contemporary and the other set in the thirteenth century, when Rumi encountered his spiritual mentor, the whirling dervish known as Shams of Tabriz—that together incarnate the poet\'s timeless message of love.', '5f047f01e3287.jpg', 945.00, 5, '2020-07-07 11:56:17', '2020-07-07 11:56:17'),
(15, 'Life Is Weaving', 'My life is but a weaving Between my God and me. I cannot choose the colors He weaveth steadily. Oft’ times He weaveth sorrow; And I in foolish pride\r\nForget He sees the upper And I the underside.\r\n\r\nNot ’til the loom is silent\r\nAnd the shuttles cease to fly Will God unroll the canvas And reveal the reason why. The dark threads are as needful In the weaver’s skillful hand As the threads of gold and silver In the pattern He has planned He knows, He loves, He cares;Nothing this truth can dim.He gives the very best to those Who leave the choice to Him.\r\nCorrie ten Boom', '5f04800fa6775.jpg', 8787.00, 4, '2020-07-07 12:00:47', '2020-07-07 12:00:47'),
(16, 'Under the Copenhagen Sky', 'Under the Copenhagen Sky tells the love story of Huda, a teenage girl born in Copenhagen to Iraqi parents, and Rafid, an older man forced to emigrate to Denmark by the political situation in Iraq. It begins when Rafid receives a letter from Huda, who he has never met before, asking him to translate her novel from Danish into Arabic. As their relationship grows, Huda begins to reveal that she knows more about him than he first thought. This novel weaves together chapters from Huda’s manuscript with Rafid’s own account of the romance that is developing between them through their email exchanges.', '5f0480b31f4f5.jpg', 450.00, 2, '2020-07-07 12:03:31', '2020-07-07 12:03:31'),
(17, 'A Woman in the Crossfire: Diaries of the Syrian Revolution', 'A well-known novelist and journalist from the coastal city of Jableh, Samar Yazbek witnessed the beginning four months of the uprising first-hand and actively participated in a variety of public actions and budding social movements. Throughout this period she kept a diary of personal reflections on, and observations of, this historic time. Because of the outspoken views she published in print and online, Yazbek quickly attracted the attention and fury of the regime, vicious rumours started to spread about her disloyalty to the homeland and the Alawite community to which she belongs. The lyrical narrative describes her struggle to protect herself and her young daughter, even as her activism propels her into a horrifying labyrinth of insecurity after she is forced into living on the run and detained multiple times, excluded from the Alawite community and renounced by her family, her hometown and even her childhood friends. With rare empathy and journalistic prowess Samar Yazbek compiled oral testimonies from ordinary Syrians all over the country. Filled with snapshots of exhilarating hope and horrifying atrocities, she offers us a wholly unique perspective on the Syrian uprising. Hers is a modest yet powerful testament to the strength and commitment of countless unnamed Syrians who have united to fight for their freedom. These diaries will inspire all those who read them, and challenge the world to look anew at the trials and tribulations of the Syrian uprising.', '5f04810b487dd.jpg', 12000.00, 3, '2020-07-07 12:04:59', '2020-07-07 12:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'nono', 'the boy is very angry', '2020-07-03 10:08:27', '2020-07-03 10:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_06_005731_create_authors_table', 1),
(3, '2020_07_01_002114_create_books_table', 2),
(4, '2020_07_02_112306_create_users_table', 3),
(5, '2020_07_03_113007_create_messages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `api_token` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'yaser mohamed', 'yaser.mohamed132@yahoo.com', '$2y$10$z1peaF10TTAOWL80cghU5e9hUl1ZssRnI215nSftYlQjoBUaVyyTS', 'user', 'IZC6DixuX4jPL5TtZU35o4Dg9xCG6zjcp6wHALVmewCIcPYmjbj6BVj6dEHd3KrM', '2020-07-07 10:30:53', '2020-07-07 10:30:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
