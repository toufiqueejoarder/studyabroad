-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 12:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `country`, `notes`, `others`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'Because of its unique geographical location, Germany is right in the middle of several European countries, languages, histories, and cultures. The official language in Germany is, well…German, of course! But, in certain areas, you’ll also find English, Dutch, French, Turkish, Romani, Danish, and Polish. \r\n\r\nDid you know that Germany is Europe’s second largest beer consumer? No wonder everyone associates Germany with those big Beer Steins and Oktoberfest!\r\n\r\nAlso, right now, Germany is the world leader in climate and energy policy! What does this mean? Well, at least a third of the country is now powered by renewable energy.\r\n\r\nGermany is a huge country, but if you have a chance to travel, there are several places you must see when you’re there.\r\n\r\nThe Rhine Valley\r\nNeuschwanstein\r\nThe Black Forest\r\nCologne Cathedral\r\nMinatur Wunderland', NULL, NULL, NULL),
(2, 'Canada', 'Fun Facts about Canada\r\n\r\nAfter Russia, Canada is the second largest country in the world in terms of land mass.\r\nCanada has more lakes than the rest of the world’s lakes combined. Plenty of opportunities to go for a swim!\r\nThe Blackberry Smartphone is developed in Waterloo, Ontario.\r\nCanada is home to approximately 55,000 different insect species.\r\nCanada has a prison for polar bears who break into people’s homes.', NULL, NULL, NULL),
(3, 'Netherlands', 'Interesting facts about the Netherlands\r\n\r\nEverybody knows that the Netherlands is the country of tulips and windmills. But did you know that Netherlands is not only big on tulips, but on all flower bulbs? About 80% of the world’s flower bulbs come from the Netherlands.\r\n\r\nOn a more serious note, Netherlands has a very rich cultural history, as it was the home of painters like Hieronymus Bosch, or Jan Steen, but also of the famous sixteen century scholar Erasmus of Rotterdam.\r\n\r\nFor those of you who still call the Netherlands Holland, you’re in for a surprise: Holland is actually a region of the Netherlands. This means that not all Dutch people come from Holland, but all Hollanders come from the Netherlands.\r\n\r\nThe Netherlands is also a monarchy since… forever. Interestingly enough, today’s ruling monarch, King Willem-Alexander, is the first male monarch the country has had in 123 years.\r\n\r\nSome other interesting facts that might also influence your stay in the Netherlands that you should know about are:\r\n\r\nThe Netherlands has the highest English-proficiency in the world, with about 94% of the Dutch people being fluent in English;\r\nThe people to surface ratio here is the highest in Europe. To put it in figures, the density is about 500 people/square kilometre;\r\nThere are more bikes than Dutch people in the Netherlands, so mind the bike traffic!\r\nAnother eco-friendly aspect about the Netherlands is that the Dutch government wants to ban the sales of gas and diesel-powered cars by 2025;\r\nAbout 22% of the people in Netherlands are not Dutch, but foreign residents, so you’re up for a very multicultural society;\r\nThe Dutch are first in Europe when it comes to the most nutritious food offer, so the calories won’t be an issue to worry about;\r\nAmsterdam has over 100 bridges, so you might need a map just to learn how to get around from bridge to bridge (to another bridge).', NULL, NULL, NULL),
(4, 'France', 'These days, universities in France are starting to offer plenty of English-taught degree options for Master’s and Bachelor’s students all over the world. From its long history in science, literature, art, and history, France has plenty of exciting options for international students.\r\n\r\nInteresting facts about France\r\nFrance is the most visited country in the world. In 2012, they welcomed over 83 million tourists.\r\nPeople in France are prohibited from naming their pigs Napoleon.\r\nLouis XIX was king of France for 20 minutes.\r\nThe people who invented the first digital calculator, hot air balloon, parachute, Braille, margarine, and the first public interactive computer were all French.\r\nIn certain cases, you are legally allowed to marry a dead person.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wishL_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programs_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `student_email`, `wishL_id`, `programs_id`, `uni_email`, `uni_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'student1@gmail.com', '13', '1', 'university.helsinki@gmail.com', 'University of Helsinki', 'Accepted', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `program_category`, `created_at`, `updated_at`) VALUES
(1, 'Masters of Science', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Finland', NULL, NULL),
(2, 'Germany', NULL, NULL),
(3, 'Australia', NULL, NULL),
(5, 'Canada', NULL, NULL),
(6, 'Netherlands', NULL, NULL),
(7, 'France', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cunis`
--

CREATE TABLE `cunis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acyr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rnkduni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intstd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `totstd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cunis`
--

INSERT INTO `cunis` (`id`, `country`, `acyr`, `rnkduni`, `intstd`, `totstd`, `population`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'Oct-Sept', '69', '250000', '2500000', '80636124', NULL, NULL),
(2, 'Canada', 'Sep-Jun', '38', '200000', '1015000', '36626083', NULL, NULL),
(3, 'Netherlands', 'Sep-Jul', '13', '82000', '656000', '17032845', NULL, NULL),
(4, 'France', 'Sep-Jun', '65', '260000', '1400000', '64938715', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disciplines` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departments`, `disciplines`, `created_at`, `updated_at`) VALUES
(1, 'Soil Science', 'Agriculture & Forestry', NULL, NULL),
(2, 'Agriculture', 'Agriculture & Forestry', NULL, NULL),
(3, 'Environmental Science', 'Agriculture & Forestry', NULL, NULL),
(4, 'Computer Science & IT', 'Computer Science & IT', NULL, NULL),
(5, 'Applied Physics', 'Applied Sciences & Professions', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disciplines`
--

INSERT INTO `disciplines` (`id`, `discipline`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture & Forestry', NULL, NULL),
(2, 'Applied Sciences & Professions', NULL, NULL),
(3, 'Computer Science & IT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `Faculty`, `discipline`, `created_at`, `updated_at`) VALUES
(1, 'Soil Science', 'Agriculture & Forestry', NULL, NULL),
(2, 'Agriculture', 'Agriculture & Forestry', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `htapplys`
--

CREATE TABLE `htapplys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `englishskill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadlines` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `htapplys`
--

INSERT INTO `htapplys` (`id`, `country`, `notes`, `documents`, `englishskill`, `deadlines`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'If you\'ve decided to study a Master\'s degree at a university in Germany, you will have to gather the right documents to prove that you fit the university requirements. Provide complete personal information, previous qualifications, financial information, and a personal statement.', 'Before you start collecting all the documents needed to apply to a university in Germany, you will have to either have to check if your qualifications match those requested by the university with an HZB (Hochschulzugangsberechtigung) or attend an entrance examination (if you’re from outside the EU/EEA).\r\n\r\nAfter you are cleared of these, you will need to check a certain process, called Numerus Clausus, which is a thorough process of selection.\r\n\r\nThe final step will be to provide these documents:\r\n\r\nCertified copy of your previously completed degree;\r\nAn official translation of the course modules and grades;\r\nA passport photo;\r\nCopy of your passport;\r\nProof of language proficiency – German (and / or English);\r\nA motivation letter;\r\nProof you covered the application fee.', 'If you decide you want to follow a course in German, you will need to provide certification you can study and manage your exams in this language. That’s why you will need to obtain one of these:\r\n\r\nDSH (German language exam for university entrance) – available only in Germany;\r\nTestDaF – available in 90 countries worldwide.\r\nOtherwise, if you want to study one of the numerous programmes in English, offered by German universities, then you should have:\r\n\r\nAn IELTS English proficiency test;\r\nA TOEFL English proficiency test.', 'Like any application process, the sooner you start applying, the better. The two enrolment sessions you have to keep an eye on are:\r\n\r\nWinter enrolment: between the end of May and 15th of July;\r\nSummer enrolment: between the beginning of December and the 15th of January.', NULL, NULL),
(2, 'Canada', 'If you\'ve decided to study a Master\'s degree at a university in Canada, you will have to gather the right documents to prove that you fit the university requirements. Provide complete personal information, previous qualifications, financial information, and a personal statement.', 'Before you get too enthusiastic, let\'s check what documents you will have to prepare to study a Master\'s degree in Canada. So, take a pen and paper and write down:\r\n\r\nA Bachelor\'s degree;\r\nThe completed application form;\r\nCV;\r\nA nicely-worded letter of intent;\r\nProof of English (or French) proficiency;\r\nEvidence that you can support yourself financially during the whole study period;\r\nTwo letters of reference, that say you are ready to study that particular Master/PhD.\r\nThe list might seem long, but rest assured that, if you start early, you can collect them all in no time.', 'Ah, but there\'s a catch. You can either prove your English skills, OR your French skills. Certain regions in Canada are francophone, so, if you go there, the majority, if not all degrees, will be taught in French.\r\n\r\nSo, research if the Master\'s programme you picked is in English, and, if it is, then be sure to take:\r\n\r\nIELTS\r\nC1 Advanced\r\nTOEFL\r\nCAEL (Canadian Academic English Language Assessment);\r\nCanTEST (Canadian Test of English for Scholars and Trainees);\r\nMELAB (Michigan English Language Assessment Battery).', 'Depending on when you plan on starting your studies in Canada, know that there are two application sessions. That\'s why, if you plan on starting in winter, the application deadline is the 1st of September, while the one for summer enrolments is the 1st of March.\r\n\r\nOf course, as you probably expect, these deadlines depend on the university and the programme, so be sure to double-check if these deadlines also apply to you, as well.', NULL, NULL),
(3, 'Netherlands', 'If you\'ve decided to study a Master\'s degree at a university in Netherlands, you will have to gather the right documents to prove that you fit the university requirements. Provide complete personal information, previous qualifications, financial information, and a personal statement.', 'To apply to a university in Netherlands you will likely be asked to provide some of the following documents:\r\n\r\nbirth certificate;\r\nrecent photos;\r\nyour passport or national identity card;\r\none or more reference letters from past employers or teachers;\r\ncopies of past diplomas or certificates, including your graduated Bachelor\'s degree;\r\nacademic transcripts;\r\nletter of intent;\r\nCurriculum Vitae;\r\nSome form of proof that you can support your stay in the country during your studies.\r\nDepending on the subject or specialization of your chosen Master\'s, you might also be asked to provide scores for additional tests like the GRE, GMAT or LSAT. Check if your programme requires any of these, or others.\r\n\r\nThe list of documents depends on the specific requirements of universities in Netherlands so you might be asked to include additional documents. It’s also likely you’ll have to provide official English translations of your documents, or translations in the local language.', 'Because you’ll study an international degree in English, you\'ll have to present a language certificate. Some popular options for international students are IELTS, TOEFL or C1 Advanced language certificates. You’ll have to meet a minimum language score set by the university, and your test scores shouldn’t be older than 1-2 years. If you don’t meet the minimum language requirements, you will have to improve your skills and scores by taking an English preparation course.', 'The deadlines for applying to a Master\'s in Netherlands are usually during summer (June-July), or in winter (January-February). Keep in mind that some universities don’t have application deadlines, which means you can apply whenever you are ready.\r\n\r\nTo avoid delays or missed deadlines send your required documents with plenty of time in advance.', NULL, NULL),
(4, 'France', 'If you\'ve decided to study a Master\'s degree at a university in France, you will have to gather the right documents to prove that you fit the university requirements. Provide complete personal information, previous qualifications, financial information, and a personal statement.', 'The documents and forms you will have to complete and upload are:\r\n\r\nA pre-registration certificate provided by the university;\r\nThe Campus France authorization;\r\nYour Passport or ID card;\r\nSome ID/passport type photos;\r\nCopies of graduation diplomas and their French translation;\r\nA registration fee;\r\nSocial security fees;\r\nA civil liability certificate;\r\nA copy of your European health insurance card (only if you\'re an EU citizen, obviously);\r\nCV;\r\nA motivation letter;\r\nEnglish (or French) language certificate;\r\nYour transcript of records, with a minimum 3.0 cumulative GPA (or equivalent);\r\nCopies of diplomas (if not available, a certificate stating that you graduated);\r\nProof that you can fund your stay in France (with a minimum of 800 EUR/month).', 'People speak French in France. Yes, we know, we just blew your mind! Nonetheless, they do, and, if you want to speak it with them, as well, you should prepare a proficiency certificate, like DELF, DALF, or TCF.\r\n\r\nIf you don\'t really care about the idea of studying in French, then, fortunately, you can pick an English degree. Still, you will have to present an English proficiency diploma. This one can be:\r\n\r\nTOEIC\r\nTOEFL\r\nIELTS', 'In France, you can apply in two batches.\r\n\r\nFirst, if you want to apply for the fall admission, then be sure you mark the 1st of February and the 1st of April in you calendar. And, sometimes, know that this date can be extended if there are still some available spaces.\r\n\r\nIf the cold bothers you, then check out the spring admission session, which ends on the 15th of September. And, of course, if there are still available spaces, it can be prolonged.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livings`
--

CREATE TABLE `livings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutnfees` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lvngcst` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livings`
--

INSERT INTO `livings` (`id`, `country`, `notes`, `tutnfees`, `lvngcst`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'In terms of tuition fees, Germany is a paradise for international students. Almost all public universities are free for international students, regardless of their country of origin. This means you\'ll only have to worry about living expenses and other administrative costs.', 'The tuition fees in Germany all depend on where you decide to study. In October 2014, Germany abolished tuition fees for undergraduate and graduate international students (at public universities). However, the south-west state of Baden-Württemberg introduced tuition fees for non-EU/EEA students in the fall of 2017.\r\n\r\nMaster’s degree students enjoy tuition-free education as long as their degree programme is “consecutive”, or follows immediately after a Bachelor’s degree. However, “non-consecutive” degrees may require a tuition fee of up to 5,000 EUR per year (at public universities), and 30,000 EUR per year (at private universities).', 'Thanks to the people at DAAD, the German Academic Exchange Service, we have a good breakdown of some of the living costs that students ought to expect while studying in Germany. Overall, you should prepare about 700–1,100 EUR/month. \r\n\r\nMonthly expenses:\r\n\r\nRent: 250–390 EUR\r\nUtilities: 100–200 EUR\r\nFood: 170 EUR\r\nClothing: 45 EUR\r\nTravel expenses (public transport): 25–200 EUR\r\nHealth insurance and medical costs: 80 EUR\r\nPhone/internet fees: 35 EUR\r\nCourse materials (books, learning materials): 20 EUR', NULL, NULL),
(2, 'Canada', 'Let\'s take a closer look at the average tuition and living expenses in Canada:', 'In Canada, the fees vary based on your level, university, discipline, and country of origin. Private universities are more expensive than public ones, but overall, tuition fees for international students range between:\r\n\r\n1,000–30,000 CAD/year for Bachelor\'s degrees\r\n1,000–65,000 CAD/year for Master\'s degrees', 'Compared to the rest of the world, Canada can be rather pricey. Especially in major cities, you may find that transportation and food have higher price stickers than most other countries.\r\n\r\nYou should prepare at least 800–1,500 CAD per month for most cities. In Vancouver or Calgary, living costs can reach 2,000 CAD per month.\r\n\r\nHere’s a breakdown of some of the average costs for various things in Canada:\r\n\r\nRent (private apartment): 650–1,200 CAD/month\r\nUtilities: 230–270 CAD/month\r\nPair of jeans: 64 CAD\r\nMonthly transportation card/ticket: 97 CAD\r\nBottle of wine: 15 CAD\r\nLoaf of bread: 2.90 CAD\r\nMilk: 2.50 CAD\r\nTicket to the cinema: 14 CAD', NULL, NULL),
(3, 'Netherlands', 'Let\'s take a closer look at the average tuition and living expenses in the Netherlands:', 'As part of the EU, the Netherlands practices different tuition fees for EU/EEA students and non-EU/EEA students. Tuition fees for EU students are between 700 and 2,100 EUR/year, while for non-EU students they start at 6,000 and can reach 20,000 EUR/year. Private universities are even more expensive.\r\n\r\nStill, you should be mindful that the cost of studies is influenced by the type of degree and by the subject area. For example, Master’s programmes are typically more expensive than Bachelor’s programmes, and can reach even 30,000 EUR/year.', 'Accommodation, housing, food and other expenses\r\nThe Netherlands is not the cheapest country in the EU, but the living costs here are not that high either. On average, you need a budget of 800–1,200 EUR/month. Here are some figures that will give you an overall idea about what you can expect in terms of Dutch living costs:\r\n\r\nMeal at an affordable restaurant: 15 EUR\r\nBeer: 4 EUR\r\nMonthly shopping cart (food and groceries): 150–180 EUR\r\nMonthly transportation pass: 85 EUR\r\nMonthly rent: 300–1,000 EUR (depending on the type of accommodation)\r\nUtilities: 100–230 EUR/month', NULL, NULL),
(4, 'France', 'Let\'s take a closer look at tuition and living expenses in France:', 'In France, they have both public and private universities and different tuition fees for each. Tuition fees also change based on your nationality, what you choose to study and what your education level will be.\r\n\r\nPublic universities\r\nBachelor’s students: 170 EUR/year (Engineering and Medicine degree can cost between 500–700 EUR/year)\r\nMaster’s students: 260 EUR/year\r\nPhD students: 396 EUR/year\r\nKeep in mind that the tuition fees listed above usually only apply to EU/EEA students. Non-EU/EEA citizens can expect to pay higher tuition.\r\n\r\nPrivate universities\r\nGrande écoles: 500–10,000 EUR/year regardless of the degree type\r\n\r\nPrivate universities: 1,500–20,000 EUR/year regardless of the degree type\r\nBusiness schools: 5,000–30,000 EUR/year regardless of the degree type', 'Depending on whether you find yourself in a big city or not, the cost of living in France can be quite different. However, compared to the rest of Europe, France can be quite pricey. In general you should prepare about 700–1,200 EUR/month to cover your student living costs. In more expensive cities, like Paris, you\'ll need around 1,200–1,800 EUR/month.\r\n\r\nHere is a breakdown of the costs to expect in France:\r\n\r\nRent (student residence halls vs private rent): 200–400 vs 400–700 EUR/month\r\nUtilities: 150–200 EUR\r\nThree-course meal for 2 people at a mid-range restaurant: 50 EUR\r\nMilk: 0.98 EUR\r\nLoaf of bread: 1.41 EUR\r\nMonthly transportation pass (metro, bus, train): 56 EUR\r\nCappuccino: 2.82 EUR', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_03_132146_create_universities_table', 1),
(5, '2021_03_04_184525_create_disciplines_table', 1),
(6, '2021_03_04_185704_create_categories_table', 1),
(7, '2021_03_05_145615_create_programs_table', 1),
(8, '2021_03_17_194515_create_studies_table', 1),
(9, '2021_03_17_194559_create_livings_table', 1),
(10, '2021_03_17_194621_create_abouts_table', 1),
(11, '2021_03_17_194702_create_cunis_table', 1),
(12, '2021_03_17_194905_create_stdvisas_table', 1),
(13, '2021_03_17_194935_create_workpermits_table', 1),
(14, '2021_03_17_195009_create_htapplys_table', 1),
(15, '2021_03_17_205240_create_countries_table', 1),
(16, '2021_03_17_205708_create_departments_table', 1),
(17, '2021_03_18_091252_create_ranks_table', 1),
(18, '2021_03_26_153308_create_students_table', 1),
(19, '2021_03_26_215222_create_faculties_table', 1),
(20, '2021_04_02_194104_create_applications_table', 2),
(21, '2021_04_02_194231_create_wlists_table', 2),
(22, '2021_04_10_175539_create_scholarships_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` int(191) DEFAULT NULL,
  `apply_startS1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_endS1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_startS2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_endS2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_structure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funding` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_permit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `email`, `course`, `program`, `discipline`, `faculty`, `delivery`, `duration`, `study_status`, `about`, `fees`, `apply_startS1`, `apply_endS1`, `apply_startS2`, `apply_endS2`, `language`, `Overview`, `credit`, `program_structure`, `academic_requirement`, `english_requirement`, `other_requirement`, `funding`, `visa`, `work_permit`, `course_link`, `created_at`, `updated_at`) VALUES
(1, 'university.helsinki@gmail.com', 'Agricultural Sciences', 'Masters of Science', 'Agriculture & Forestry', 'Soil Science', 'On Campus', '2 Year', 'Full Time', 'Join the Master’s Programme in Agricultural Sciences on the Viikki Campus to find solutions for the challenges of today and tomorrow. The University of Helsinki is the only university in Finland to offer academic education in this field.', 15000, '09-01-2021', '01-31-2022', '09-01-2021', '01-31-2021', 'English, Finnish, Swedish', 'Study at the University of Helsinki and become an expert in plant production science, animal science, agrotechnology or environmental soil science.\r\n\r\nWould you like to be involved in finding solutions to future challenges of food and energy production, such as climate change, population growth and limited energy resources? Are you interested in animal welfare, clean soil, environmental issues or the newest methods in biological and genetic engineering? Would you like to learn about automation and robotics in agriculture?\r\nIn the Master’s Programme in Agricultural Sciences (AGRI) from University of Helsinki, you can pursue studies in plant production sciences, animal science, agrotechnology, or environmental soil science, depending on your interests and previous studies. The University of Helsinki is the only university in Finland to offer academic education in this field.\r\n\r\nCareer\r\nGraduates have found employment in Finland and abroad as experts in the following fields:\r\n\r\nResearch and product development (universities, research institutes, companies, industry)\r\nAdministration and expert positions (ministries, supervisory agencies, EU, FAO)\r\nBusiness and management (companies)\r\nTeaching, training and consultation (universities, universities of applied sciences, organisations, development cooperation projects)\r\nCommunication (universities, media, companies, ministries, organisations)\r\nEntrepreneurship (self-employment)', '120 ECTS', 'The four study tracks are:. Plant Production Sciences – plants as sources of food, feed, energy, beauty and wellbeing.\r\nAnimal Science – animal health and wellbeing. \r\nAgrotechnology – technology with consideration for the environment.\r\nEnvironmental Soil Science – dig below the surface.', 'We are not aware of any academic requirements for this programme.', 'TOEFL 92, IELTS 6.5', 'Eligibility to apply for a master\'s programme requires an applicable bachelor\'s degree or other equivalent qualification.', 'Research assistantship is available', 'Student Visa', 'If you’re from Japan, you will need a work permit if you want to combine studying with working in Finland.', 'https://www.helsinki.fi/en', NULL, NULL),
(2, 'university.helsinki@gmail.com', 'Agricultural, Environmental and Resource Economics ', 'PhD', 'Agriculture & Forestry', 'Environmental Science', 'On Campus', '2 Year', 'Full Time', 'By studying in the Master’s Programme in Agricultural, Environmental and Resource Economics from University of Helsinki, you qualify as an expert with a set of skills needed to address tomorrow’s questions already today. Which question will you solve?', 5000, '09-01-2021', '01-31-2022', '09-01-2021', '01-31-2021', 'English, Finnish, Swedish', 'Study at the University of Helsinki and become an expert in plant production science, animal science, agrotechnology or environmental soil science.\r\n\r\nWould you like to be involved in finding solutions to future challenges of food and energy production, such as climate change, population growth and limited energy resources? Are you interested in animal welfare, clean soil, environmental issues or the newest methods in biological and genetic engineering? Would you like to learn about automation and robotics in agriculture?\r\nIn the Master’s Programme in Agricultural Sciences (AGRI) from University of Helsinki, you can pursue studies in plant production sciences, animal science, agrotechnology, or environmental soil science, depending on your interests and previous studies. The University of Helsinki is the only university in Finland to offer academic education in this field.\r\n\r\nCareer\r\nGraduates have found employment in Finland and abroad as experts in the following fields:\r\n\r\nResearch and product development (universities, research institutes, companies, industry)\r\nAdministration and expert positions (ministries, supervisory agencies, EU, FAO)\r\nBusiness and management (companies)\r\nTeaching, training and consultation (universities, universities of applied sciences, organisations, development cooperation projects)\r\nCommunication (universities, media, companies, ministries, organisations)\r\nEntrepreneurship (self-employment)', '120 ECTS', 'The four study tracks are:. Plant Production Sciences – plants as sources of food, feed, energy, beauty and wellbeing.\r\nAnimal Science – animal health and wellbeing. \r\nAgrotechnology – technology with consideration for the environment.\r\nEnvironmental Soil Science – dig below the surface.', 'We are not aware of any academic requirements for this programme.', 'TOEFL 92, IELTS 6.5', 'Eligibility to apply for a master\'s programme requires an applicable bachelor\'s degree or other equivalent qualification.', 'Research assistantship is available', 'Student Visa', 'If you’re from Japan, you will need a work permit if you want to combine studying with working in Finland.', 'https://www.helsinki.fi/en', NULL, NULL),
(5, 'university.helsinki@gmail.com', 'Agricultural, Environmental and Resource Economics ', 'Masters of Science', 'Agriculture & Forestry', 'Environmental Science', 'On Campus', '2 Year', 'Full Time', 'By studying in the Master’s Programme in Agricultural, Environmental and Resource Economics from University of Helsinki, you qualify as an expert with a set of skills needed to address tomorrow’s questions already today. Which question will you solve?', 6000, '09-01-2021', '01-31-2022', '09-01-2021', '01-31-2021', 'English, Finnish, Swedish', 'Study at the University of Helsinki and become an expert in plant production science, animal science, agrotechnology or environmental soil science.\r\n\r\nWould you like to be involved in finding solutions to future challenges of food and energy production, such as climate change, population growth and limited energy resources? Are you interested in animal welfare, clean soil, environmental issues or the newest methods in biological and genetic engineering? Would you like to learn about automation and robotics in agriculture?\r\nIn the Master’s Programme in Agricultural Sciences (AGRI) from University of Helsinki, you can pursue studies in plant production sciences, animal science, agrotechnology, or environmental soil science, depending on your interests and previous studies. The University of Helsinki is the only university in Finland to offer academic education in this field.\r\n\r\nCareer\r\nGraduates have found employment in Finland and abroad as experts in the following fields:\r\n\r\nResearch and product development (universities, research institutes, companies, industry)\r\nAdministration and expert positions (ministries, supervisory agencies, EU, FAO)\r\nBusiness and management (companies)\r\nTeaching, training and consultation (universities, universities of applied sciences, organisations, development cooperation projects)\r\nCommunication (universities, media, companies, ministries, organisations)\r\nEntrepreneurship (self-employment)', '120 ECTS', 'The four study tracks are:. Plant Production Sciences – plants as sources of food, feed, energy, beauty and wellbeing.\r\nAnimal Science – animal health and wellbeing. \r\nAgrotechnology – technology with consideration for the environment.\r\nEnvironmental Soil Science – dig below the surface.', 'We are not aware of any academic requirements for this programme.', 'TOEFL 92, IELTS 6.5', 'Eligibility to apply for a master\'s programme requires an applicable bachelor\'s degree or other equivalent qualification.', 'Research assistantship is available', 'Student Visa', 'If you’re from Japan, you will need a work permit if you want to combine studying with working in Finland.', 'https://www.helsinki.fi/en', NULL, NULL),
(7, 'university.california@gmail.com', 'Agricultural and Environmental Chemistry', 'Masters of Science', 'Agriculture & Forestry', 'Agriculture', 'On Campus', '1 year', 'Full Time', 'The Agricultural and Environmental Chemistry Program at the University of California, Davis, allows students to explore a diversity of agricultural and environmental topics.', 22000, '06-30-2021', '01-31-2022', '09-01-2021', '06-01-2022', 'English', 'The Agricultural and Environmental Chemistry degree at the University of California, Davis, is designed to help students understand basic and advanced concepts in both the natural and social sciences. Students gain advanced knowledge of analytical, organic, physical, inorganic, or biological chemistry, as well as the qualitative and quantitative skills necessary for professional research and teaching in pesticide and toxicant chemistry, food/meat/dairy chemistry, fiber and polymer chemistry, and enzymatic reactions and fermentation chemistry. The program\'s focus on real-world activities and hands-on training makes it excellent preparation for those interested in entering professional careers that merge the social and natural sciences in agricultural and environmental contexts.', '30 alternative credits', 'Courses include:\r\n\r\nAnalysis of Toxicants.\r\nAnalysis of Toxicants Lab.\r\nSpectroscopy of Organic Compounds.\r\nLaboratory in Spectroscopy of Organic Compounds.\r\nInstrumental Analysis of Must and Wine.', 'GPA 3', 'TOEFL 80, IELTS 6', 'General requirements Transcripts Three letters of recommendation Application Fee A $105 (for US students) or $125 (for international students) fee', 'TA/RA allowed', 'Student Visa for International Students.', 'Allowed 21 hrs a week', 'example link of this course', NULL, NULL),
(8, 'university.helsinki@gmail.com', 'Cyber Security', 'Masters of Science', 'Computer Science & IT', 'Computer Science & IT', 'On Campus', '2 Year', 'Full Time', 'By studying in the Master’s Programme in Agricultural, Environmental and Resource Economics from University of Helsinki, you qualify as an expert with a set of skills needed to address tomorrow’s questions already today. Which question will you solve?', 7000, '09-01-2021', '01-31-2022', '09-01-2021', '01-31-2021', 'English, Finnish, Swedish', 'Study at the University of Helsinki and become an expert in plant production science, animal science, agrotechnology or environmental soil science.\r\n\r\nWould you like to be involved in finding solutions to future challenges of food and energy production, such as climate change, population growth and limited energy resources? Are you interested in animal welfare, clean soil, environmental issues or the newest methods in biological and genetic engineering? Would you like to learn about automation and robotics in agriculture?\r\nIn the Master’s Programme in Agricultural Sciences (AGRI) from University of Helsinki, you can pursue studies in plant production sciences, animal science, agrotechnology, or environmental soil science, depending on your interests and previous studies. The University of Helsinki is the only university in Finland to offer academic education in this field.\r\n\r\nCareer\r\nGraduates have found employment in Finland and abroad as experts in the following fields:\r\n\r\nResearch and product development (universities, research institutes, companies, industry)\r\nAdministration and expert positions (ministries, supervisory agencies, EU, FAO)\r\nBusiness and management (companies)\r\nTeaching, training and consultation (universities, universities of applied sciences, organisations, development cooperation projects)\r\nCommunication (universities, media, companies, ministries, organisations)\r\nEntrepreneurship (self-employment)', '120 ECTS', 'The four study tracks are:. Plant Production Sciences – plants as sources of food, feed, energy, beauty and wellbeing.\r\nAnimal Science – animal health and wellbeing. \r\nAgrotechnology – technology with consideration for the environment.\r\nEnvironmental Soil Science – dig below the surface.', 'We are not aware of any academic requirements for this programme.', 'TOEFL 92, IELTS 6.5', 'Eligibility to apply for a master\'s programme requires an applicable bachelor\'s degree or other equivalent qualification.', 'Research assistantship is available', 'Student Visa', 'If you’re from Japan, you will need a work permit if you want to combine studying with working in Finland.', 'example link of this course', NULL, NULL),
(9, 'university.durham@gmail.com', 'Economics', 'Masters of Science', 'Business & Management', 'Economics', 'On Campus', '2 Year', 'Full Time', 'Join the Master’s Programme in Business & Management on the Viikki Campus to find solutions for the challenges of today and tomorrow. The Durham University is the only university in United Kingdom to offer academic education in this field.', 15000, '09-01-2021', '01-31-2022', '09-01-2021', '01-31-2021', 'English, Finnish, Swedish', 'Study at the Durham University and become an expert in plant production science, animal science, agrotechnology or environmental soil science.\r\n\r\nWould you like to be involved in finding solutions to future challenges of food and energy production, such as climate change, population growth and limited energy resources? Are you interested in animal welfare, clean soil, environmental issues or the newest methods in biological and genetic engineering? Would you like to learn about automation and robotics in agriculture?\r\nIn the Master’s Programme in Agricultural Sciences (AGRI) from University of Helsinki, you can pursue studies in plant production sciences, animal science, agrotechnology, or environmental soil science, depending on your interests and previous studies. The University of Helsinki is the only university in Finland to offer academic education in this field.\r\n\r\nCareer\r\nGraduates have found employment in Finland and abroad as experts in the following fields:\r\n\r\nResearch and product development (universities, research institutes, companies, industry)\r\nAdministration and expert positions (ministries, supervisory agencies, EU, FAO)\r\nBusiness and management (companies)\r\nTeaching, training and consultation (universities, universities of applied sciences, organisations, development cooperation projects)\r\nCommunication (universities, media, companies, ministries, organisations)\r\nEntrepreneurship (self-employment)', '120 ECTS', 'The four study tracks are:. Plant Production Sciences – plants as sources of food, feed, energy, beauty and wellbeing.\r\nAnimal Science – animal health and wellbeing. \r\nAgrotechnology – technology with consideration for the environment.\r\nEnvironmental Soil Science – dig below the surface.', 'We are not aware of any academic requirements for this programme.', 'TOEFL 92, IELTS 6.5', 'Eligibility to apply for a master\'s programme requires an applicable bachelor\'s degree or other equivalent qualification.', 'Research assistantship is available', 'Student Visa', 'If you’re from Japan, you will need a work permit if you want to combine studying with working in Finland.', 'https://www.dur.ac.uk/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timesrnk` int(11) NOT NULL,
  `shanghairank` int(11) NOT NULL,
  `topuni` int(11) NOT NULL,
  `usrank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `university`, `year`, `country`, `timesrnk`, `shanghairank`, `topuni`, `usrank`, `created_at`, `updated_at`) VALUES
(1, 'University of Helsinki', '2021', 'Finland', 99, 74, 104, 86, NULL, NULL),
(3, 'University of Helsinki', '2020', 'Finland', 96, 66, 107, 87, NULL, NULL),
(4, 'University of California, Davis', '2021', 'United States', 64, 91, 112, 66, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applyStart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applyEnd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `email`, `name`, `title`, `amount`, `description`, `eligibility`, `applyStart`, `applyEnd`, `created_at`, `updated_at`) VALUES
(1, 'university.helsinki@gmail.com', 'University of Helsinki', 'Title', 'Amount', 'Description Here', 'Requirements', 'January 2022', 'June 2022', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stdvisas`
--

CREATE TABLE `stdvisas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedures` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stdvisas`
--

INSERT INTO `stdvisas` (`id`, `country`, `notes`, `procedures`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'Student Visa Available for International Students.', NULL, NULL, NULL),
(2, 'Canada', 'Student visa is available for international students. Canadian government offer permanent residents opportunities to students after completing studies and having jobs.', NULL, NULL, NULL),
(3, 'Netherlands', 'Student Visa available for international student.', NULL, NULL, NULL),
(4, 'France', 'Student Visa available for international students.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailingAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Masters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOrganization` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mdepartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MpassYear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCGPA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bachelor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BOrganization` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BDepartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BpassYear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BachelorCGPA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HSC` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HSCOrg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HSCGroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HSCPass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HSCresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSC` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSCOrg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSCGroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSCPass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSCResult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `name`, `p_image`, `phone`, `mailingAddress`, `Masters`, `MOrganization`, `Mdepartment`, `MpassYear`, `MCGPA`, `Bachelor`, `BOrganization`, `BDepartment`, `BpassYear`, `BachelorCGPA`, `HSC`, `HSCOrg`, `HSCGroup`, `HSCPass`, `HSCresult`, `SSC`, `SSCOrg`, `SSCGroup`, `SSCPass`, `SSCResult`, `ielts`, `gre`, `created_at`, `updated_at`) VALUES
(10, 'student1@gmail.com', 'Student 1', 'images/2CKaq.jpg', '01234567890', 'Bashundhara R/A, Dhaka.', 'Masters on Computer Science and Engineering', 'Dhaka University', 'Computer Science', '2020', '3.90', 'Bachelor on Computer Science and Engineering', 'North South University', 'North South University', '2018', '3.80', 'Higher Secondary School Certificate', 'HSC Organization', 'Science', '2014', '5.00', 'Secondary School Certificate', 'School Name', 'Science', '2012', '5.00', 'ielts/student1@gmail.com.oTwVe.pdf', 'gre/student1@gmail.com.SJ3AH.pdf', NULL, NULL),
(11, 'student2@gmail.com', 'Student 2', 'images/3Ale1.jpg', '01234567890', 'Bashundhara R/A, Dhaka.', 'Masters on Computer Science and Engineering', 'Dhaka University', 'Computer Science', '2020', '3.90', 'Bachelor on Computer Science and Engineering', 'North South University', 'North South University', '2018', '3.80', 'Higher Secondary School Certificate', 'HSC Organization', 'Science', '2014', '5.00', 'Secondary School Certificate', 'School Name', 'Science', '2012', '5.00', 'ielts/student1@gmail.com.N3wFa.pdf', 'gre/student1@gmail.com.KRvum.pdf', NULL, NULL),
(13, 'student4@gmail.com', 'Student 4', 'images/ar0y5.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE `studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whystudy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wtliketo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wttostudy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mjcity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wcuniat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pracinfo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waytqlfy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `country`, `notes`, `whystudy`, `wtliketo`, `wttostudy`, `mjcity`, `wcuniat`, `pracinfo`, `waytqlfy`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'We owe a lot to Germany when it comes to the history of education and universities. Germany is the birthplace of what we call ‘research universities’ – big places with ivory towers and libraries where new knowledge is produced every day.\r\n\r\nThis university model has since covered the entire planet, and is basically what most universities are set up for today: to produce knowledge and make new discoveries. Don’t you want to study in Germany, the place where it all began?', '1. German universities are tution-free\r\nYes, you\'ve read that right! Almost all public universities in Germany don\'t charge any tuition fees to international students, regardless of their nationality. This is a huge benefit, one that allows you to only focus on living costs, like accommodation, food, transport, and so on.\r\n\r\n2. Germany is at the forefront of Engineering\r\nEngineering and technology in general are highly valued by Germans. Whether we\'re talking about automobiles, highways, or monumental structures, Germany has it covered.\r\n\r\nEven Tesla, one of the most important manufacturers of electric vehicles, decided to open a factory in Germany.\r\n\r\n3. Top-quality higher education\r\nWe\'ve mentioned that German public universities are free, but don\'t make the mistake of believing that free means low-quality. In Germany, it\'s exactly the opposite; over 60 universities and universities of applied sciences (UAS) are present in the most important international university rankings.\r\n\r\nGerman higher education institutions have excellent standards, high expectations, and empower students to become leaders in their academic (and future professional) fields.\r\n\r\n4. Achieve German language excellency\r\nEven if you study an English-taught degree, don\'t miss the opportunity to either improve or start learning German.\r\n\r\nIt is an important language, thanks to Germany\'s position as one of the world\'s leading economies. Companies in Germany and other European nations are willing to pay high salaries for graduates with advanced German skills on their CV.\r\n\r\nIt\'s true that German isn\'t the easiest language to learn; but if you start with the basics and keep improving slowly, you will soon be surprised by your progress.\r\n\r\n5. Excellent job prospects\r\nGraduates with a diploma from German universities are highly valued on job markets, both in Germany and other countries. This happens because everybody recognises the impressive academic level of German education institutions.\r\n\r\nWhether you want to stay in Germany and become part of their powerful economy or return to your home country or move somewhere else, a German degree will always make you stand out from other job candidates.', 'Students in Germany enjoy a variety of social events, both at their universities, and around the cities. Take a train to Oktoberfest, find an art festival, or spend a day at one of the many historic museums around every part of Germany.\r\n\r\nGermany is also known for offering an exciting multicultural environment; you’ll be in classes with people from all over the world, and you’ll notice that several languages are spoken throughout the city you’re living in.\r\n\r\nIn your classes, you’ll be expected to show attentiveness with the lectures, punctuality, and an interest in participating. This may seem intense but you’ll find yourself growing and learning throughout your degree programme.', 'Germany has Bachelor’s, Master’s and PhD programmes in nearly every subject or field you can imagine, and students all over the world find degree programmes that appeal to them and offer a unique education.\r\n\r\nHere are some subjects you can find when you go attend a Germany university:\r\n\r\nBusiness Administration degrees in Germany\r\nMechanical Engineering degrees in Germany\r\nComputer Sciences degrees in Germany\r\nBiology degrees in Germany\r\nEconomics degrees in Germany\r\nEnvironmental Sciences degrees in Germany', 'Germany is home to some of the biggest cities in the world, and each one has its own story to tell. Cities all over Germany are perfect for students and can offer you a great cultural life to enjoy time outside of your classes.\r\n\r\nCheck out some of these cities and learn more about what it is like to study there:\r\n\r\nStudy in Berlin \r\nStudy in Cologne (Koln)\r\nStudy in Frankfurt am Main \r\nStudy in Hamburg\r\nStudy in Munich', 'You won’t have any trouble finding an excellent university to pursue your education in Germany. The whole country has plenty of options and places for you to search for your desired degree options.\r\n\r\nGermany has different types of universities and institutions, offering classes that can apply to your specific needs. Whether they are those traditional research universities, universities of applied sciences (Fachhochschulen), or specialised art and music institutions, you can find the classes that fit your needs and interests best.\r\n\r\nHochschule Bremen - International Graduate Center\r\nIUBH University of Applied Science\r\nArden, Study Centre Berlin\r\nBerlin School of Business and Innovation\r\nWismar University\r\nUniversity of Applied Sciences Europe - BiTS and BTK', 'So, how to apply to a university in Germany? Here are a few important steps:\r\n\r\nIf you’re hoping to be admitted to a university in Germany, follow these steps and make sure to have the right materials prepared for your application.\r\nHave your graduating certificates (high school or university) ready to show, send, or scan. The application will typically call this an “Abitur.” You’ll want to double check that your degree is recognised by German universities.\r\nYou might have to take a written entrance examination\r\nMake sure to know what the language requirements are, and whether you have to prove skills in German or English before enrolling in a degree programme.\r\nShow how you performed as a student, and be sure to know what your Grade Point Average (GPA) was during your studies.\r\nTo help your chances of going to Germany, be sure to apply to more than one university!', 'Take Preparation Courses\r\nThese kinds of courses enable degree-seeking students to get an extra educational boost just before they start their Master’s degree or other post-graduate degree programmes.\r\n\r\nTry a pre-M.B.A., pre-Law, or pre-Medicine programme, as well as any other foundation or preparation courses that will allow you to study in the degree programme of your choice.\r\n\r\nImprove your English through an English-language prep course\r\nIf you’re attending a degree programme in Germany, you will sometimes need to prove that your language skills are good enough to participate in the classes and understand the lectures; some schools will require German, while others will require strong English skills. These courses will also prepare you for any of the English-language tests that universities require.', NULL, NULL),
(2, 'Canada', 'While you obsessively stare at pictures of Justin Trudeau (don’t deny it!), you may as well see whether Canada is actually a place you can study abroad in. The Great White North and the super friendly upstairs neighbors to the U.S., Canada is known for its maple syrup, the Niagara Falls, and their excellent ice hockey teams.\r\n\r\nStudying in Canada has become an appealing option for international students. Not only is it one of the safest places to go to in the world; Canada (and particularly major cities like Toronto and Vancouver) also has a wealth of cultural diversity that is truly inviting to foreign students from everywhere in the world.', '1. Canada takes education seriously\r\nDid you know that Canada is the world’s most educated country? In fact, over half of its residents have university degrees. It must be pretty interesting to be a student there, eh?\r\n\r\n2. Canadian universities are among the best education institutions\r\nSome of the top international universities and colleges are located in Canada, and students from all over the world have come to join the biggest names in their field.\r\n\r\nExperts in Journalism, Politics, Medicine, and Technology got their start at universities like the University of Toronto and McGill University; and you’ll have the chance to work alongside some of the sharpest minds in the world.\r\n\r\n3. Flexibility through education variety\r\nCanada offers an interesting variety of higher education institutions: universities, colleges, polytechnics, and cégeps (vocational schools). Depending on the goals you have, or what you’re looking for, you may want to select the institutional model that fits your needs.\r\n\r\n4. Highly regarded diplomas\r\nCanadian college and university graduates are highly-valued on the job market, and people who study there have been able to find great jobs in any field they’re interested in.\r\n\r\n5. Canadian culture embraces diversity\r\nNo matter who you are, where you come from, or what you want to study, Canadians are ready to welcome you warmly. The North American country invests a lot of effort to ensure international students are safe, treated fairly, and happy to take part in the Canadian education and lifestyle.', 'Canadian higher education is known for being quite casual, and students at the university level are given quite a level of flexibility with regard to attendance, course requirements, and assignments.\r\n\r\nHowever, students still have to abide by the classroom rules set by their individual instructors, and understand what the expectations are for each course.\r\n\r\nGenerally, degree courses are discussion-based, seminar style classes, where it’s a smaller group of students debating or questioning different topics. You’ll also find the normal lecture-style classes, especially for topics that have a lot of students (Computer Science, Medicine, Business, etc.). The way courses are structured really depends upon the content or the subject being taught.', 'In Canada, you’ll enter a giant buffet of subjects to select from. Universities in every major city in all of the provinces offer degrees in a wide range of Master’s and Bachelor’s degree subjects – from Art History to Neuroscience, to Accounting and Software Engineering. To narrow down this panoply, here are some that you can consider:\r\n\r\nEconomics degrees in Canada\r\nHistory degrees in Canada\r\nFinance degrees in Canada\r\nPharmacy degrees in Canada\r\nEngineering degrees in Canada', 'Although Canada is a huge country, geographically speaking, most of its inhabitants live toward the southernmost region of the country. Some of the biggest cities in the country are also home to major universities and institutions:\r\n\r\nStudy in Montréal \r\nStudy in Québec City \r\nStudy in Toronto \r\nStudy in Vancouver', 'If you were to see all of the top university rankings lists, you’d see a strong presence of Canadian universities in all of the top 100 lists. Below we’ll run through some of our favorite highlights:\r\n\r\nRoyal Roads University\r\nUniversity of Winnipeg\r\nBishop\'s University\r\nWilfrid Laurier University\r\nThompson Rivers University\r\nUniversity of Regina\r\nBrock University', 'Each university in Canada has its own system on their website that allows future students to apply for and enrol in their degree programmes. So, once you select the university of your choice, you can go through their application and submit your materials there.\r\n\r\nHere are some of the basic requirements you’ll need for every application:\r\n\r\nA scan of your diploma (high school or Bachelor’s degree)\r\nA transcript/record of your previous courses\r\nA scan of your passport\r\nYour CV\r\nTesting scores\r\nEvidence of scholarship or funding\r\nLetters of recommendation (between 2-3)\r\nPortfolio and/or writing samples', 'Take Preparation Courses\r\nThese kinds of courses enable degree-seeking students to get an extra educational boost just before they start their Master’s degree or other post-graduate degree programmes. Try a pre-M.B.A., pre-Law, or pre-Medicine programme, as well as any other foundation or preparation courses that will allow you to study in the degree programme of your choice.\r\n\r\nImprove your English through an English-language prep course\r\nIf you’re attending a Bachelor’s, Master’s degree or Ph.D. in Canada, you will need to prove that your language skills are good enough to participate in the classes and understand the lectures. These courses will also prepare you for any of the English-language tests that universities require.', NULL, NULL),
(3, 'Netherlands', 'If Rembrandt, Van Gogh, and speed skating go together in your mind, and you like mobility and open-minded people, then perhaps you were made for studying in the Netherlands.\r\n\r\nExtra treats are the internationalised community, hearing English spoken as frequently as Dutch, great museums, and a colourful nightlife. Sure, the rainy weather might be a bit of a downer, but you won’t mind it when you have great company.\r\n\r\nWhat can we say? There are few other study destinations better than the Netherlands. But it’s never a bad idea to give you more specific details, so you know what you’re getting yourself into.', '1. Affordable tuition fees\r\nDutch public universities have very affordable tuition fees if you\'re an European Union/European Economic Area (EU/EEA) national. You won\'t usually pay more that 2,100 EUR per academic year, with various study programmes often being cheaper than that.\r\n\r\nThe story is a bit different for non-EU/EEA students, who pay anywhere between 6,000 and 20,000 EUR per year. That\'s still much more affordable when compared with tuition fees of over 50,000 EUR per year in the USA.\r\n\r\n2. No language barriers\r\nOver 90% of Dutch citizens speak English. Whether you want to visit a famous tourist attraction on your own, ask for directions, or buy something from a shop, you won\'t have any headache regarding language barriers.\r\n\r\nThe popularity of the English language also makes it very easy to socialise and connect with people, to take part in social and cultural events, or simply make friends and go out.\r\n\r\n3. Work flexibility after graduation\r\nIn this case, work flexibility means two things: one, you can work in any number of fields after graduation and enjoy great salaries and employee benefits; and two, the Netherlands is one of the leading countries where the 4-day work week is a common option in all sectors of the economy.\r\n\r\n4. A heaven for cycling enthusiasts\r\nAccording to governmental statistics, there are over 23 million bikes in the Netherlands, more than the number of actual citizens (around 17 millions). Cycle lanes are literally everywhere, and many students and employees use them to commute on a daily basis.\r\n\r\nIt represents a great way to reduce air pollution and increase personal health and wellbeing.\r\n\r\n5. The Netherlands is safe and enjoyable\r\nThe Netherlands is one of the safest and happiest countries in the world. This is hardly surprising when we look at the high standard of living, the educated citizens, and society as a whole.', 'Students in the Netherlands are encouraged to be very active. Professors are very approachable and avoid too much formalities. Also, the Netherlands has a big international students’ community which is very friendly and open to other newcomers. Dutch students are approachable and can be perfect party buddies.\r\n\r\nOn top of that, you can always use a bike to go to school, the distances are short, and there’s always some cultural activity going on.', 'Numerous English-taught programmes and native English-speaking teachers make studying in the Netherlands very appealing to international students. And there’s no other country that can beat the Netherlands at programmes related to Water Resource Management. By now, you already suspect that some of the most popular study options in this country are related to Engineering and Tech.\r\n\r\nHere are some key subject areas you can study in the Netherlands:\r\n\r\nNatural Sciences degrees in the Netherlands\r\nComputer Science degrees in the Netherlands\r\nEngineering degrees in the Netherlands\r\nSocial Science degrees in the Netherlands\r\nBusiness degrees in the Netherlands', 'The Netherlands has ten major cities that attract both students and tourists, and are great urban hubs. Dutch cities are often lively, environmental-friendly, and maintain a cultural vibe.\r\n\r\nSome of the best student cities that you can choose from are:\r\n\r\nStudy in Amsterdam\r\nStudy in Rotterdam\r\nStudy in Utrecht\r\nStudy in Eindhoven\r\nStudy in Nijmegen\r\nStudy in Tilburg\r\nStudy in Leiden\r\nStudy in Groningen\r\nStudy in The Hague', 'With over 10 universities featured in the top 500 international higher education rankings, Netherlands is an exciting country to study in. Dutch universities attract their students with a casual approach to education and top English-taught degrees.\r\n\r\nIf you don’t know where to start looking for a Dutch university, we have a few international universities we recommend: \r\n\r\nUniversity of Twente\r\nRadboud University\r\nTilburg Unversity\r\nHAN University of Applied Sciences\r\nThe Hague University of Applied Sciences\r\nSaxion University of Applied Sciences', 'The Dutch higher education system is based on the Bologna process. There is an official country website providing information about studying in the Netherlands, and you can visit the educational institutions\' websites for more information. Enrolment applications should be submitted via Studielink.nl.\r\n\r\nGenerally, your starting point should be the website of the educational institution. Here you can find all the information about the content of the programme and also how to enrol. Usually, this will guide you to Studielink for the enrolment application. In Studielink, you should follow the next steps:\r\n\r\nCreate a Studielink account\r\nSubmit an enrolment application in Studielink\r\nChoose your payment method in Studielink to pay the tuition fee\r\nAfter you have submitted an enrolment application, your educational institution will contact you about the required documents which you need to upload before the deadline expires.\r\nEach degree and university have their own application requirements, so pay attention and carefully check the list of documents. For questions about or help with your enrolment, you can contact the student services of your prospective university.\r\n\r\nUsually, the documents required are:\r\n\r\nA copy of passport or ID card\r\nA passport photo\r\nA personal statement in English\r\nCopies of secondary school diplomas, certificates and/or grade lists in English, French, German or Dutch\r\nTranscript of records\r\nProof of English/Dutch language proficiency\r\nSome universities may require extra documents, such as:\r\n\r\nCV or resume (including two referees)\r\nMotivation letter\r\nSample of academic written work', 'Take Preparation Courses\r\nThese kinds of courses enable degree-seeking students to get an extra educational boost just before they start their Master’s degree or other post-graduate degree programmes.\r\n\r\nTry a pre-MBA, pre-Law, or pre-Medicine programme, as well as any other foundation or preparation courses that will allow you to study in the degree programme of your choice.\r\n\r\nImprove your English through an English-language prep course\r\nIf you’re attending a degree programme in the Netherlands, you will need to prove that your language skills are good enough to participate in the classes and understand the lectures; some schools will require Dutch, while others will require strong English skills. These courses will also prepare you for any of the English-language tests that universities require.', NULL, NULL),
(4, 'France', 'onjour, mon ami! Welcome to the rich, cultural landscape of France. Find yourself dazzled by the cuisine, the dancing, the art, and the music – all while you learn the French language. Thousands of people take their holiday in France every year to enjoy the wine and the relaxed lifestyle, if only for a short period of time. But, why not extend that holiday, and learn something while you’re at it?\r\n\r\nThese days, universities and colleges in France are starting to offer plenty of English-taught degree options for Master’s and Bachelor’s students all over the world. From its long history in science, literature, art, and history, France has plenty of exciting options for international students. But French education is also about innovation and you are going to find many English-taught degrees related to Business, Science and Tech as well.', '1. Very affordable tuition fees\r\nIf you come from the European Union (EU) or the European Economic Area (EEA), you won\'t pay more than 800 EUR per academic year; this applies to degrees at all levels (Bachelor\'s, Master\'s, PhD).\r\n\r\nIn some cases, non-EU/EEA students enjoy the same benefits, but in others they do pay higher tuition. Even so, studying in France still remains less expensive than in other countries, such as the USA, the UK, Canada, Australia, etc.\r\n\r\n2. The number of English-taught degrees is growing\r\nTo attract more international students, both public and private universities in France have been increasing the number of English-taught study programmes in their academic offer.\r\n\r\nThere are over 1,500 courses taught in the English language, and the number is growing every year.\r\n\r\n3. Excellent opportunities to learn or improve your French\r\nAlthough English remains the primary international language in many sectors, you shouldn\'t overlook French. It is the third most common business language and the official language in over 30 countries worldwide.\r\n\r\nRemember that people who speak at least two foreign languages have better chances to get higher salaries or apply for positions at large multinational corporations and institutions.\r\n\r\nFrench is also famously known as \"the language of love\" (la langue de l\'amour), and we must admit, there\'s something quite special about the words, the sounds, the accents, and how everything blends together beautifully.\r\n\r\n4. France is a hub for research and innovation\r\nMany French higher education institutions invest a lot of resources in their research facilities and staff. If you see yourself spending long hours in laboratories, conducting experiments, and working on humanity\'s next breakthrough, France is the place to go.\r\n\r\nOver 64 Nobel Laureates and 15 Fields Medals highlight the importance that France places on research and progress.\r\n\r\n5. Visit famous tourist attractions\r\nFrom human-made wonders to natural beauties, there\'s so much to see in the Hexagon (popular nickname for France).\r\n\r\nYou can enjoy the French Riviera, explore the Prehistoric Cave Paintings in Lascaux, take a photo from the top of the Eiffel Tower, and quench your thirst for history at the Louvre Museum — these and many other attractions have transformed France into one of the most popular tourist destinations in the world.', 'French universities and institutions are known for having small classroom sizes. This means that, as a student, you don’t need to feel intimidated to ask questions or participate in a discussion. Plus, your instructors will be able to give you extra, individual assistance if you need it.\r\n\r\nWhile you attend university in France, you’ll also be able to enjoy a thriving social life outside of your classes. With plenty of museums to visit and wonderful restaurants to try, you’ll be able to immerse yourself in plenty of French culture. while also getting your Bachelor’s or Master’s degree.', 'When you study in France, you can find schools, universities, and institutions that are specifically devoted to the subject you’re most interested in. And because France has always been able to produce some of the greatest minds in Business, Economics, Science, and Art, you can be sure that you’ll join the ranks of other experts in your field.\r\n\r\nHere are some subjects you might enjoy studying in France:\r\n\r\nEconomics degrees in France \r\nCommerce degrees in France \r\nFood Sciences degrees in France \r\nFinance degrees in France', 'Everyone knows Paris – the big metropolitan city with the Eiffel Tower. But there are other charming cities all over the country, where international students can have a great time, drink great wine, and meet new people.\r\n\r\nStudy in Toulouse \r\nStudy in Paris \r\nStudy in Nantes \r\nStudy in Lyon \r\nStudy in Bordeaux', 'All over France, there are plenty of well-established and reputable universities to choose from. Depending on what you study, you may be interested in going to one of the grande écoles or universities designed specifically for your subject.\r\n\r\nHere is a list of higher education institutions we recommend:\r\n\r\nESIEE Paris\r\nPSB Paris School of Business\r\nESC Clermont Graduate School of Management\r\nGeorgia Tech Lorraine\r\nIESA - School of Arts and Culture', 'Each university in France has its own system on their website that allows future students to apply for and enrol in their Bachelor’s or Master’s degree programmes. So, once you select the university of your choice, you can go through their application and submit your materials there.\r\n\r\nHere are some documents you might need to include in your university application:\r\n\r\nA scan of your diploma (high school or Bachelor’s degree)\r\nA transcript/record of your previous courses\r\nA scan of your passport and/or birth certificate\r\nYour CV\r\nTesting scores\r\nEvidence of scholarship or funding\r\nLetters of recommendation (between 2-3)\r\nPortfolio and/or writing samples', 'Take Preparation Courses\r\nThese kinds of courses enable degree-seeking students to get an extra educational boost just before they start their Master’s degree or other post-graduate degree programmes. Try a pre-M.B.A., pre-Law, or pre-Medicine programme, as well as any other foundation or preparation courses that will allow you to study in the degree programme of your choice.\r\n\r\nImprove your English through an English-language prep course\r\nIf you’re attending a degree programme in France you will need to prove that your language skills are good enough to participate in the classes and understand the lectures; some schools will require French, while others will require strong English skills. These courses will also prepare you for any of the English-language tests that universities require.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReasonToStdyH` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StService` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HousingService` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LibraryService` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CampusLife` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SportsFacilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StudentClub` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `email`, `organization`, `tagline`, `address`, `address2`, `state`, `provience`, `country`, `website`, `university_logo`, `ReasonToStdyH`, `history`, `education`, `research`, `career`, `StService`, `HousingService`, `LibraryService`, `CampusLife`, `SportsFacilities`, `StudentClub`, `created_at`, `updated_at`) VALUES
(1, 'university.helsinki@gmail.com', 'University of Helsinki', NULL, NULL, NULL, NULL, 'Helsinki', 'Finland', NULL, 'images/f2Cpt.jpg', 'The University of Helsinki is a responsible social force, an advocate of science and scholarship, and a valued partner.\r\nTeaching at the University of Helsinki is based on research. The underlying principle is that every teacher does research and every researcher teaches.\r\nThe University of Helsinki aims to produce research of a high international standard in all fields.', 'Since 1640 we have contributed significantly to Finnish prosperity and national identity. We have built a fair and an equal society that by many indicators is considered one of the best in the world. Today we want to share our knowledge and to have a strong global impact.', 'The University of Helsinki is the only Finnish university to consistently rank in the top 100 of international university rankings. There are approximately 18 000 universities in the world.', 'The Faculty of Educational Sciences at the University of Helsinki conducts research related to human growth, development and learning. Faculty generates new information in order to increase social and cultural capital in changing world.\r\n\r\nThe Faculty of Educational Sciences has outstandingly strong research, with a track record of a substantial number of publications in highly-ranked refereed journals and books as well as multiple discoveries and creative findings.', NULL, 'What are all the actions that you need to take before and upon arrival in Finland? The Uni Arrival Advisor is a simple electronic service that will guide you through the process. Answer the questions on the Uni Arrival Advisor and you will get a checklist of the necessary steps to take before and upon your arrival to Helsinki, Finland.', 'Unihome concept was originally established in 2010 to ease International visitor’s of two universities, University of Helsinki and Aalto University, accommodation. An Easy living concept was created in 5 different locations in Helsinki and Espoo, close to both universities’ campuses.\r\nAs the concept turned out to be a success, we are now offering  the rooms and flats for everybody in need of accommodation for a couple of nights or longer, but not long enough to sign a rental agreement.', 'You can find course and study literature at the University\'s modern campus libraries. The newest library is the award-winning Kaisa Library in the city centre. The materials and literature are available to you in virtual, mobile or traditional book form.', 'The multidisciplinary City Centre Campus in the very heart of Helsinki is the largest campus of the University of Helsinki. \r\nThe Kumpula Campus, dedicated to research and teaching in the exact natural sciences, is perched on a verdant hill only four kilometres from the centre of Helsinki.  This idyllic campus comprises the largest cluster of scientific competence in the Nordic countries. \r\nThe multidisciplinary Viikki Campus is located in the geographical centre of Helsinki, and has served as a campus area since 1946. \r\nThe Academic Medical Center Helsinki (AMCH), one of the best medical campuses in Europe, brings top research, teaching and medical care together every day. ', '\r\nMake sure that life isn’t all about studies but remember to exercise as well. UniSport is an exercise centre for students with several locations where experiences are more important than performance. \r\n\r\nThey offer a wide variety of sports from body combat to pilates and floorball to hot yoga. With the affordable membership card (12/4/1 months) you can attend the group exercise classes and use their gyms and open ball game shifts on all campuses. \r\n\r\nUniSport also offers diverse training courses in various sports, as well as personal training, massage and testing services. If you put together your own team, you can participate in the ball games series organised by UniSport.', 'The core of any university is their students, and the University of Helsinki is no different. All the students are members of the Student Union of the University of Helsinki (HYY), which gives them the possibility to choose between multiple student organisations to find one that suits their vision of ideal student life!\r\n\r\nThe Student Union of the University of Helsinki (HYY) is the largest and oldest student union in Finland and the roof organisation of all student activity at the University of Helsinki. All degree students are members of the Student Union.\r\n\r\nThe main purpose of the Student Union is to promote the interests of its 26 000 members both at the university and in society.', NULL, NULL),
(2, 'university.california@gmail.com', 'University of California, Davis', NULL, NULL, NULL, 'Davis', 'California', 'United States', 'https://www.ucdavis.edu/', 'images/O1K0v.png', NULL, 'We first opened our doors in 1908 as the University Farm, the research and science-based instruction extension of UC Berkeley. As the century evolved, our mission expanded beyond agriculture to match a larger understanding of how we should be serving the public. By 1959, UC Davis had grown into a general campus with its own personality and strengths.', 'Our goal in this 2020 Initiative is to increase financial stability by reducing our reliance on the state for funding. UC Davis is doing this by adding 5,000 new undergraduates — Californian, national and international students — between 2011 and 2020. This initiative has allowed us to provide more international experiences for our campus community. At the same time, we’re creating a more diverse educational climate as we educate future global leaders.', 'Whether UC Davis is predicting the next global virus before it happens or developing more nutritious wheat for a hungry world, our research is making the world a better place to live. Here is where you will improve health, enrich life and help feed the world. Come to one of the top public research universities to make your mark.\r\n\r\nThe Office of Research assists our campus by cultivating relationships with government and industry, helping faculty in developing research and scholarly studies, and in coordinating the patenting and licensing of intellectual property.', 'Together, UC Davis’ two campuses — in Davis and Sacramento — constitute the second-largest individual employer in the Sacramento region, behind only the state of California.', 'Academic Resources\r\n\r\nAcademics at UC Davis\r\nInternship and Career Center\r\nOffice of Graduate Studies\r\nOffice of the University Registrar\r\nOffice of Student Affairs\r\nStudent Academic Success Center\r\nStudent Disability Center\r\nOffice of Student Support and Judicial Affairs', 'Freshmen live in a variety of residence halls that include Tercero 3, our first to earn the top national rating for being sustainable. If you are concerned about liking your potential roommate, did you know you can request a roommate at UC Davis? Learn more about your resources available through Student Housing.', '10 million library assets\r\n\r\nThink of the extensive assets that you can use: 10 million items, including books, journals, databases, music, maps, and photos, among other resources in print and digital formats. Plus, you’ll have access to the whole UC library system – second only to the Library of Congress. You’ll have extensive borrowing privileges just by being a UC Davis student.', 'At UC Davis, you will make your mark. By forging great friendships, joining clubs, playing sports and taking part in campus life, you will make the most of your time as a college student — and find out who you are. This campus is rich with traditions like Picnic Day and Homecoming, but you will also be part of our biggest Aggie tradition — doing things your way while transforming our university and making the world a better place. You’ll pick up life skills along the way, like leadership. And you’ll find UC Davis is one of a kind, like you.', 'Play soccer, football, tennis, volleyball, baseball and more at our athletics facilities. Located all over campus, facilities like the UC Davis Health Stadium, come in many makes and shapes.\r\n\r\nUC Davis intercollegiate athletics are open to everyone — spectators as well as participants. Being a UC Davis member means you can cheer on 25 NCAA varsity teams.\r\n\r\nThe Aggies have won conference championships in men\'s basketball, women\'s basketball and men\'s water polo. UC Davis also holds individual conference titles in gymnastics, swimming and diving, and track and field.', 'Get active in one or more of our 800-plus student clubs. You’ll find several that line up with your interests, whether you are interested in cultural identity, religion, a future profession, artistic expression or community service.\r\n\r\nOr, maybe you want to explore. Volunteering with a club or organization is an opportunity to develop leadership and communication skills.', NULL, NULL),
(4, 'university.durham@gmail.com', 'Durham University', NULL, NULL, NULL, 'Durham', 'England', 'United Kingdom', 'https://www.dur.ac.uk/', 'images/39k6Q.jpg', 'Our students are challenged to work with one another and their teachers to solve problems by thinking logically, critically and laterally.\r\nA high percentage of our staff are Fellows of the Higher Education Academy\r\nOffer a first-rate digital learning environment on a par with the best in the UK;', 'Durham became one of England\'s leading centres of medieval scholarship, along with Oxford and Cambridge. Indeed, three Colleges - now part of Oxford University - were founded from Durham (University College and Balliol College, and in 1286 Durham College was run from Durham to train scholars for Durham for 300 years until it became incorporated into the University of Oxford as Trinity College).', 'Offering over 200 undergraduate and 130 taught postgraduate courses, and many research programmes.', 'The Partnerships and Engagement team within the Research and Innovation Services directorate works with external organisations and our academic colleagues to facilitate the creation of new research and commercial opportunities and to ensure that Durham University’s research is world-changing with global impact and reach.', 'Careers & Enterprise is fully committed to delivering a professional, comprehensive and accessible service to students, graduates, employers and stakeholders. We aim to deliver a high quality, student and graduate-centred service and positively contribute to their experience at Durham University.', 'The Academic Office provides a professional administrative support service to staff, students and potential students of Durham University.\r\n\r\nThe Academic Registrar is the head of the department and is responsible to the Pro-Vice Chancellor (Education) for its management. Further information and contact details for the Academic Registrar\'s Office are available by following the link to the left.', 'All University accommodation is based in one of our colleges and every Durham University student belongs to a college, whether you live in college or elsewhere. Our colleges offer a vibrant, supportive community full of opportunities for you to gain new experiences, develop skills to achieve more in your future life and most importantly, have fun while you\'re at it!', 'Durham University Library provides an excellent range of collections, resources, and flexible study spaces across five library locations and online. The University Library is always busy; approaching 3.5 million e-book accesses, more than 3.4 million e-journal downloads, and over 300,000 loans were made during the 2016-2017 academic year. ', 'Students studying at the International Study Centre will be based at Queen\'s Campus, Stockton. Durham City and Queen\'s Campus, Stockton offer different environments, each distinctive and outstanding in their own way.', 'The University\'s multi-million pound sports facilities are set in spacious grounds on the outskirts of Durham City and boast an impressive range of state-of-the-art facilities, including an indoor rowing tank, a world-class fencing piste, indoor cricket nets, and a performance analysis suite. There are also facilities for use by athletes with disabilities, and an extended sports hall and changing rooms.', 'Durham Students\' Union is the representative body for all students of the University, and offers many different clubs and societies to join.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `organization`, `role`, `provider_id`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Student 1', 'student1@gmail.com', 'University 1', 1, NULL, NULL, NULL, '$2y$10$OkywUPbYAo20USut5Wu7RuVC4v3AlJrXyht3rIWPAodCvDCvtvN8a', NULL, '2021-03-27 07:14:27', '2021-03-27 07:14:27'),
(2, 'University of Helsinki', 'university.helsinki@gmail.com', 'University of Helsinki', 2, NULL, NULL, NULL, '$2y$10$1svUw97oOzbiFu114I7U5.xITFJ3TqXUoradR/uSDy/J6ZXGviokm', NULL, '2021-03-27 07:21:16', '2021-03-27 07:21:16'),
(3, 'Admin', 'admin@gmail.com', 'Admin', 3, NULL, NULL, NULL, '$2y$10$E2PF93t1JZMMwj0Mqz/6uO8/Nreqfm2OZkPPaqQkyFQsxB5Rj13dC', NULL, '2021-03-27 13:17:36', '2021-03-27 13:17:36'),
(5, 'University of California, Davis', 'university.california@gmail.com', 'University of California, Davis', 2, NULL, NULL, NULL, '$2y$10$1svUw97oOzbiFu114I7U5.xITFJ3TqXUoradR/uSDy/J6ZXGviokm', NULL, '2021-03-27 07:21:16', '2021-03-27 07:21:16'),
(6, 'Student 2', 'student2@gmail.com', 'University 2', 1, NULL, NULL, NULL, '$2y$10$OkywUPbYAo20USut5Wu7RuVC4v3AlJrXyht3rIWPAodCvDCvtvN8a', NULL, '2021-03-27 07:14:27', '2021-03-27 07:14:27'),
(7, 'Student 3', 'student3@gmail.com', 'University 3', 1, NULL, NULL, NULL, '$2y$10$OkywUPbYAo20USut5Wu7RuVC4v3AlJrXyht3rIWPAodCvDCvtvN8a', NULL, '2021-03-27 07:14:27', '2021-03-27 07:14:27'),
(9, 'Durham University', 'university.durham@gmail.com', 'Durham University', 2, NULL, NULL, NULL, '$2y$10$pZAx7/Ofl3BF5/abXdM.cuGS3e/fomf9g7NI2224cVSYhCm16qs.G', NULL, '2021-04-23 15:09:19', '2021-04-23 15:09:19'),
(11, 'Student 4', 'student4@gmail.com', 'University 4', 1, NULL, NULL, NULL, '$2y$10$TNv7GdIdISrl0CIj//c1muWrMZDGQoA4YLRim2jd5R3Vzf31eWGS.', NULL, '2021-04-23 15:16:38', '2021-04-23 15:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `wlists`
--

CREATE TABLE `wlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WishListed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wlists`
--

INSERT INTO `wlists` (`id`, `student`, `program_id`, `university_email`, `university_name`, `status`, `created_at`, `updated_at`) VALUES
(12, 'student1@gmail.com', '8', 'university.helsinki@gmail.com', 'University of Helsinki', 'Applied', NULL, NULL),
(13, 'student1@gmail.com', '1', 'university.helsinki@gmail.com', 'University of Helsinki', 'Applied', NULL, NULL),
(14, 'student1@gmail.com', '2', 'university.helsinki@gmail.com', 'University of Helsinki', 'WishListed', NULL, NULL),
(15, 'student1@gmail.com', '7', 'university.california@gmail.com', 'University of California, Davis', 'WishListed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workpermits`
--

CREATE TABLE `workpermits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wrkprmts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workpermits`
--

INSERT INTO `workpermits` (`id`, `country`, `notes`, `wrkprmts`, `created_at`, `updated_at`) VALUES
(1, 'Germany', 'Weekly 20 hours work permit available for International Students with Student Visas.', NULL, NULL, NULL),
(2, 'Canada', 'International students can work at most 28 hours a week with student visas.', NULL, NULL, NULL),
(3, 'Netherlands', 'Part time work permit available.', NULL, NULL, NULL),
(4, 'France', 'Part Time work permit is available for people student visa.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_country_unique` (`country`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_country_unique` (`country`);

--
-- Indexes for table `cunis`
--
ALTER TABLE `cunis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cunis_country_unique` (`country`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_departments_unique` (`departments`);

--
-- Indexes for table `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculties_faculty_unique` (`Faculty`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `htapplys`
--
ALTER TABLE `htapplys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `htapplys_country_unique` (`country`);

--
-- Indexes for table `livings`
--
ALTER TABLE `livings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `livings_country_unique` (`country`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdvisas`
--
ALTER TABLE `stdvisas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stdvisas_country_unique` (`country`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`) USING HASH;

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studies_country_unique` (`country`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `universities_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wlists`
--
ALTER TABLE `wlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workpermits`
--
ALTER TABLE `workpermits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workpermits_country_unique` (`country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cunis`
--
ALTER TABLE `cunis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `htapplys`
--
ALTER TABLE `htapplys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livings`
--
ALTER TABLE `livings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stdvisas`
--
ALTER TABLE `stdvisas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wlists`
--
ALTER TABLE `wlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workpermits`
--
ALTER TABLE `workpermits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
