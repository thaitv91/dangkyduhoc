-- MySQL dump 10.13  Distrib 5.6.36, for osx10.10 (x86_64)
--
-- Host: localhost    Database: dangkyduhoc
-- ------------------------------------------------------
-- Server version	5.6.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `career`
--

DROP TABLE IF EXISTS `career`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_hours` int(11) NOT NULL,
  `fixed_pay` int(11) NOT NULL,
  `variable_pay` int(11) NOT NULL,
  `desk_bound` int(11) NOT NULL,
  `smart_casual` int(11) NOT NULL,
  `on_the_move` int(11) NOT NULL,
  `formal_wear` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career`
--

LOCK TABLES `career` WRITE;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
/*!40000 ALTER TABLE `career` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'United Kingdom','UK',NULL,NULL),(2,'Australia','AU',NULL,NULL),(3,'United States','US',NULL,NULL),(4,'Canada','CA',NULL,NULL),(5,'Switzerland','CH',NULL,NULL),(6,'Ireland','IL',NULL,NULL);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_costs`
--

DROP TABLE IF EXISTS `course_costs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_costs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `year_tuition_fees` int(11) NOT NULL,
  `day_drink_fees` int(11) NOT NULL,
  `day_food_fees` int(11) NOT NULL,
  `day_accommodation_fees` int(11) NOT NULL,
  `day_coffe_fees` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_costs`
--

LOCK TABLES `course_costs` WRITE;
/*!40000 ALTER TABLE `course_costs` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_costs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_entry_requirements`
--

DROP TABLE IF EXISTS `course_entry_requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_entry_requirements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `diploma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `international_baccalaureate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_entry_requirements`
--

LOCK TABLES `course_entry_requirements` WRITE;
/*!40000 ALTER TABLE `course_entry_requirements` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_entry_requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_information`
--

DROP TABLE IF EXISTS `course_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upcoming_intakes` datetime NOT NULL,
  `course_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathway_programers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `will_learn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_information`
--

LOCK TABLES `course_information` WRITE;
/*!40000 ALTER TABLE `course_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_reviews`
--

DROP TABLE IF EXISTS `customer_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_reviews`
--

LOCK TABLES `customer_reviews` WRITE;
/*!40000 ALTER TABLE `customer_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guide_questions`
--

DROP TABLE IF EXISTS `guide_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guide_questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `question_en` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `answer_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `topic_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guide_questions`
--

LOCK TABLES `guide_questions` WRITE;
/*!40000 ALTER TABLE `guide_questions` DISABLE KEYS */;
INSERT INTO `guide_questions` VALUES (1,'What is theRightU?','What is theRightU?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What is theRightU?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>TheRightU is a university admissions consultancy headquartered in Singapore. We partner top universities and colleges from Australia, UK, US, Ireland, Switzerland New Zealand and Europe, and provide comprehensive university admissions diagnostics and personalised education counselling to students through the innovative use of technology.</p>\r\n<h3>The Right Approach</h3>\r\n<p>Education is a serious investment of time and money. And it isn&rsquo;t one-size-fits-all.&nbsp;</p>\r\n<p>Our experienced team is here to ensure your application process is hassle-free and you have the best chances of success for admission, maximum credit exemptions, and financial aid (if applicable).&nbsp;</p>\r\n<p>Over 100 universities and colleges have recognised the quality of our consultancy and appointed us as their official representative, so we can directly liaise with them regarding your application.&nbsp;</p>\r\n<h3>The Right Process</h3>\r\n<p>We start by ensuring our team is equipped and stays updated on our knowledge of the education system, visas and life in Australia, UK, Ireland, Canada, USA and Switzerland.&nbsp;</p>\r\n<p>Step by step, we work closely with you.</p>\r\n<ol>\r\n<li>We start by understanding your needs and goals;</li>\r\n<li>We guide you to explore options efficiently: we use our proprietary tools to conduct research and suggest the best programs to help you reach your goals;</li>\r\n<li>We assist you to collect all the documents you will need for your application; and &nbsp;</li>\r\n<li>We guide you through the application process (and visa process once you have been accepted by an institution).</li>\r\n</ol>\r\n<p>Our goal is to ensure every student has the best chances of success to access higher education, flourish, and achieve his/her dreams.</p>\r\n<h3>The Right Tools</h3>\r\n<p>Universities and program options, admission requirements, costs, application deadlines....&nbsp;Too much information and can be overwhelming, even demotivating, and lead to procrastination. &nbsp;</p>\r\n<p>So, we&nbsp;developed a proprietary platform that allows you to curate content efficiently, apply online and track your applications in real time.</p>\r\n<ul>\r\n<li>Whenever, 24/7, get immediate access to extensive university and course information.</li>\r\n<li>Use our handy tools to search and compare courses, and get unbiased advice and a selection of suitable courses that are customised according to your profile and search requirements.</li>\r\n<li>Apply online and use our automated tracking tools to keep yourself and your family updated on the application status.</li>\r\n<li>Get ready for university by setting up automatic alerts and updates to stay abreast on university activities.</li>\r\n</ul>\r\n<p>Our platform also enables our counsellors to provide prompt and accurate information and ready online consultation for students.</p>\r\n<h3>The Right Outcome</h3>\r\n<p>Our success so far:</p>\r\n<ul>\r\n<li>100% of our Foundation students have successfully progressed to their choice of University in 2017</li>\r\n<li>98% of our students have successfully received offers (Mar 2012 - Mar&nbsp;2017)</li>\r\n<li>1 in 2 of our students go on to secure a scholarship</li>\r\n<li><a href=\"http://www.facebook.com/therightu/reviews\">Read testimonials</a>&nbsp;from our students whom we have assisted - many of whom have now graduated and embarked on their dream job!</li>\r\n</ul>\r\n<h3>The Right Charges</h3>\r\n<p>One more thing: our services are free and do not affect the amount of tuition you pay the school. Because we represent over 100 universities, we can offer a choice of schools that suits your needs, so that you are picking the best one.&nbsp;</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What is theRightU?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>TheRightU is a university admissions consultancy headquartered in Singapore. We partner top universities and colleges from Australia, UK, US, Ireland, Switzerland New Zealand and Europe, and provide comprehensive university admissions diagnostics and personalised education counselling to students through the innovative use of technology.</p>\r\n<h3>The Right Approach</h3>\r\n<p>Education is a serious investment of time and money. And it isn&rsquo;t one-size-fits-all.&nbsp;</p>\r\n<p>Our experienced team is here to ensure your application process is hassle-free and you have the best chances of success for admission, maximum credit exemptions, and financial aid (if applicable).&nbsp;</p>\r\n<p>Over 100 universities and colleges have recognised the quality of our consultancy and appointed us as their official representative, so we can directly liaise with them regarding your application.&nbsp;</p>\r\n<h3>The Right Process</h3>\r\n<p>We start by ensuring our team is equipped and stays updated on our knowledge of the education system, visas and life in Australia, UK, Ireland, Canada, USA and Switzerland.&nbsp;</p>\r\n<p>Step by step, we work closely with you.</p>\r\n<ol>\r\n<li>We start by understanding your needs and goals;</li>\r\n<li>We guide you to explore options efficiently: we use our proprietary tools to conduct research and suggest the best programs to help you reach your goals;</li>\r\n<li>We assist you to collect all the documents you will need for your application; and &nbsp;</li>\r\n<li>We guide you through the application process (and visa process once you have been accepted by an institution).</li>\r\n</ol>\r\n<p>Our goal is to ensure every student has the best chances of success to access higher education, flourish, and achieve his/her dreams.</p>\r\n<h3>The Right Tools</h3>\r\n<p>Universities and program options, admission requirements, costs, application deadlines....&nbsp;Too much information and can be overwhelming, even demotivating, and lead to procrastination. &nbsp;</p>\r\n<p>So, we&nbsp;developed a proprietary platform that allows you to curate content efficiently, apply online and track your applications in real time.</p>\r\n<ul>\r\n<li>Whenever, 24/7, get immediate access to extensive university and course information.</li>\r\n<li>Use our handy tools to search and compare courses, and get unbiased advice and a selection of suitable courses that are customised according to your profile and search requirements.</li>\r\n<li>Apply online and use our automated tracking tools to keep yourself and your family updated on the application status.</li>\r\n<li>Get ready for university by setting up automatic alerts and updates to stay abreast on university activities.</li>\r\n</ul>\r\n<p>Our platform also enables our counsellors to provide prompt and accurate information and ready online consultation for students.</p>\r\n<h3>The Right Outcome</h3>\r\n<p>Our success so far:</p>\r\n<ul>\r\n<li>100% of our Foundation students have successfully progressed to their choice of University in 2017</li>\r\n<li>98% of our students have successfully received offers (Mar 2012 - Mar&nbsp;2017)</li>\r\n<li>1 in 2 of our students go on to secure a scholarship</li>\r\n<li><a href=\"http://www.facebook.com/therightu/reviews\">Read testimonials</a>&nbsp;from our students whom we have assisted - many of whom have now graduated and embarked on their dream job!</li>\r\n</ul>\r\n<h3>The Right Charges</h3>\r\n<p>One more thing: our services are free and do not affect the amount of tuition you pay the school. Because we represent over 100 universities, we can offer a choice of schools that suits your needs, so that you are picking the best one.&nbsp;</p>\r\n</div>\r\n</div>','what-is-therightu',1,'2017-09-14 22:04:51','2017-09-14 22:04:51'),(2,'What services do theRightU provide?','What services do theRightU provide?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What services do theRightU provide?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p><img src=\"https://therightustorage.blob.core.windows.net/assets/guide/university-guide-therightu.png\" alt=\"\" /></p>\r\n<p>Using our one-stop online platform, you can:</p>\r\n<ul>\r\n<li>Search and&nbsp;compare&nbsp;more than 30,000 courses around the world</li>\r\n<li><a href=\"https://www.therightu.com/apply\">Apply</a>&nbsp;to multiple universities online&nbsp;24/7</li>\r\n<li>Track your applications with our notifications</li>\r\n<li>Obtain &nbsp;industry insights and tips to increase your chances of receiving an offer</li>\r\n<li>Receive free advice from our consultants on education options, from&nbsp;Foundation and Pre-Masters pathways, all the way to PhD!</li>\r\n</ul>\r\n<p>Our services do not stop at helping you find the best degree&nbsp;choices. After receiving&nbsp;an offer from a university, you will enjoy full guidance on:</p>\r\n<ul>\r\n<li>Offer acceptance</li>\r\n<li>Scholarships</li>\r\n<li>Accommodation &amp; Flight</li>\r\n<li>Student visa application</li>\r\n<li>Pre-departure briefing</li>\r\n</ul>\r\n<p>You can reach&nbsp;our consultants any time via our&nbsp;online chat - so you will never be limited by distance or appointment hours! All our services are completely free of charge as we are supported by our partner universities and colleges to guide you to discover the Right University.</p>\r\n</div>\r\n<div id=\"author\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-2 col-md-12 col-sm-12 col-xs-12 col-no-pad-right-lg text-center-xs\">&nbsp;</div>\r\n<div class=\"col-lg-10 col-md-12 col-sm-12 col-xs-12\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What services do theRightU provide?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p><img src=\"https://therightustorage.blob.core.windows.net/assets/guide/university-guide-therightu.png\" alt=\"\" /></p>\r\n<p>Using our one-stop online platform, you can:</p>\r\n<ul>\r\n<li>Search and&nbsp;compare&nbsp;more than 30,000 courses around the world</li>\r\n<li><a href=\"https://www.therightu.com/apply\">Apply</a>&nbsp;to multiple universities online&nbsp;24/7</li>\r\n<li>Track your applications with our notifications</li>\r\n<li>Obtain &nbsp;industry insights and tips to increase your chances of receiving an offer</li>\r\n<li>Receive free advice from our consultants on education options, from&nbsp;Foundation and Pre-Masters pathways, all the way to PhD!</li>\r\n</ul>\r\n<p>Our services do not stop at helping you find the best degree&nbsp;choices. After receiving&nbsp;an offer from a university, you will enjoy full guidance on:</p>\r\n<ul>\r\n<li>Offer acceptance</li>\r\n<li>Scholarships</li>\r\n<li>Accommodation &amp; Flight</li>\r\n<li>Student visa application</li>\r\n<li>Pre-departure briefing</li>\r\n</ul>\r\n<p>You can reach&nbsp;our consultants any time via our&nbsp;online chat - so you will never be limited by distance or appointment hours! All our services are completely free of charge as we are supported by our partner universities and colleges to guide you to discover the Right University.</p>\r\n</div>\r\n<div id=\"author\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-2 col-md-12 col-sm-12 col-xs-12 col-no-pad-right-lg text-center-xs\">&nbsp;</div>\r\n<div class=\"col-lg-10 col-md-12 col-sm-12 col-xs-12\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>','what-services-do-therightu-provide',1,'2017-09-14 22:07:03','2017-09-14 22:07:03'),(3,'How do I Search and Compare courses?','How do I Search and Compare courses?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I Search and Compare courses?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>We have compiled more than 30,000 degree courses offered by our&nbsp;partner universities and colleges so that you can easily&nbsp;search, review and apply to them through our one-stop portal.</p>\r\n<h3>Search for courses</h3>\r\n<p>You can search for courses using the search bar that can be&nbsp;found on every page of&nbsp;our website. &nbsp;Alternatively, you can&nbsp;explore the full range of subjects, universities, or courses related to particular careers using the&nbsp;menu bar.&nbsp;</p>\r\n<h3>Compare courses</h3>\r\n<p>Once you arrive at the course listing pages, you can click on&nbsp;\"Compare\" to place courses into the&nbsp;comparison cart. You can then view the cart and do a full comparison. There is no limit to the number of courses that can be included for comparison!</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I Search and Compare courses?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>We have compiled more than 30,000 degree courses offered by our&nbsp;partner universities and colleges so that you can easily&nbsp;search, review and apply to them through our one-stop portal.</p>\r\n<h3>Search for courses</h3>\r\n<p>You can search for courses using the search bar that can be&nbsp;found on every page of&nbsp;our website. &nbsp;Alternatively, you can&nbsp;explore the full range of subjects, universities, or courses related to particular careers using the&nbsp;menu bar.&nbsp;</p>\r\n<h3>Compare courses</h3>\r\n<p>Once you arrive at the course listing pages, you can click on&nbsp;\"Compare\" to place courses into the&nbsp;comparison cart. You can then view the cart and do a full comparison. There is no limit to the number of courses that can be included for comparison!</p>\r\n</div>\r\n</div>','how-do-i-search-and-compare-courses',1,'2017-09-14 22:07:39','2017-09-14 22:07:39'),(4,'What is MULTI-APPLY?','What is MULTI-APPLY?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What is MULTI-APPLY?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>MULTI-APPLY allows you to apply to multiple universities using one online form. The form is customised based on your university selection, and you can easily upload your documents directly into the form.</p>\r\n<p>When your application reaches us, we will process the information and documents provided, and&nbsp;submit them to the universities. We will liaise closely with the universities\'&nbsp;Admissions Offices on your application, and you will&nbsp;be able to&nbsp;<a href=\"https://www.therightu.com/apply\">track the progress of&nbsp;your application&nbsp;online</a>. No more hassle of filling up multiple paper applications the old school way!</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">What is MULTI-APPLY?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>MULTI-APPLY allows you to apply to multiple universities using one online form. The form is customised based on your university selection, and you can easily upload your documents directly into the form.</p>\r\n<p>When your application reaches us, we will process the information and documents provided, and&nbsp;submit them to the universities. We will liaise closely with the universities\'&nbsp;Admissions Offices on your application, and you will&nbsp;be able to&nbsp;<a href=\"https://www.therightu.com/apply\">track the progress of&nbsp;your application&nbsp;online</a>. No more hassle of filling up multiple paper applications the old school way!</p>\r\n</div>\r\n</div>','what-is-multi-apply',1,'2017-09-14 22:08:07','2017-09-14 22:08:07'),(5,'How do I track my applications?','How do I track my applications?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I track my applications?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Tracking your application is simple.</p>\r\n<p>If you have started on an application but have not completed or submitted the application, we will regularly remind you to complete it via email. You can return to the application form at any time to complete your application.</p>\r\n<p>If you have already submitted an application, you can track the progress of your application via the&nbsp;<a href=\"https://www.therightu.com/apply\">Track page</a>. You will also be notified via email when there are any updates to your application.</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I track my applications?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Tracking your application is simple.</p>\r\n<p>If you have started on an application but have not completed or submitted the application, we will regularly remind you to complete it via email. You can return to the application form at any time to complete your application.</p>\r\n<p>If you have already submitted an application, you can track the progress of your application via the&nbsp;<a href=\"https://www.therightu.com/apply\">Track page</a>. You will also be notified via email when there are any updates to your application.</p>\r\n</div>\r\n</div>','how-do-i-track-my-applications',1,'2017-09-14 22:08:46','2017-09-14 22:08:46'),(6,'Is my account secure?','Is my account secure?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">Is my account secure?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Absolutely. Our website uses SSL encryption to ensure all information exchanged through the website to our database is secure. Your password is also encrypted in our database so you can be certain that your personal information is secure.</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">Is my account secure?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Absolutely. Our website uses SSL encryption to ensure all information exchanged through the website to our database is secure. Your password is also encrypted in our database so you can be certain that your personal information is secure.</p>\r\n</div>\r\n</div>','is-my-account-secure',2,'2017-09-14 22:09:10','2017-09-14 22:09:10'),(7,'Why do you need my email?','Why do you need my email?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">Why do you need my email?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Nothing spammy, we promise! We require your email to provide you with:</p>\r\n<ol>\r\n<li>Key information regarding your application to universities</li>\r\n<li>Notifications to&nbsp;help&nbsp;you keep track of your application</li>\r\n<li>Information on accommodation, visa and flight for&nbsp;your pre-departure preparations</li>\r\n<li>Information on Important events related to your education pursuit</li>\r\n</ol>\r\n<p>We will not disclose your email to any third-parties other than the universities that you are applying to.</p>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">Why do you need my email?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>Nothing spammy, we promise! We require your email to provide you with:</p>\r\n<ol>\r\n<li>Key information regarding your application to universities</li>\r\n<li>Notifications to&nbsp;help&nbsp;you keep track of your application</li>\r\n<li>Information on accommodation, visa and flight for&nbsp;your pre-departure preparations</li>\r\n<li>Information on Important events related to your education pursuit</li>\r\n</ol>\r\n<p>We will not disclose your email to any third-parties other than the universities that you are applying to.</p>\r\n</div>\r\n</div>','why-do-you-need-my-email',2,'2017-09-14 22:09:34','2017-09-14 22:09:34'),(8,'How do I close my account?','How do I close my account?','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I close my account?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>If you like to close your account, please send us an email at hello@therightu.com, and we will delete your account.</p>\r\n<div class=\"faq-impt special-text\">Once your account is deleted, you will no longer be able to access the courses in your comparison list&nbsp;or track the applications you have submitted. Applications pending submission will also be deleted.</div>\r\n</div>\r\n</div>','<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 rowheader marbot10px\">\r\n<h1 class=\"header\">How do I close my account?</h1>\r\n</div>\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n<div class=\"faq_answer\">\r\n<p>If you like to close your account, please send us an email at hello@therightu.com, and we will delete your account.</p>\r\n<div class=\"faq-impt special-text\">Once your account is deleted, you will no longer be able to access the courses in your comparison list&nbsp;or track the applications you have submitted. Applications pending submission will also be deleted.</div>\r\n</div>\r\n</div>','how-do-i-close-my-account',2,'2017-09-14 22:10:24','2017-09-14 22:10:24');
/*!40000 ALTER TABLE `guide_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guide_topics`
--

DROP TABLE IF EXISTS `guide_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guide_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guide_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guide_topics`
--

LOCK TABLES `guide_topics` WRITE;
/*!40000 ALTER TABLE `guide_topics` DISABLE KEYS */;
INSERT INTO `guide_topics` VALUES (1,'GENERAL','GENERAL','general',1,'2017-09-14 19:52:26','2017-09-14 19:52:26'),(2,'ACCOUNT','ACCOUNT','account',1,'2017-09-14 19:55:35','2017-09-14 19:55:35'),(3,'SUPPORT','SUPPORT','support',1,'2017-09-14 19:55:47','2017-09-14 19:55:47'),(4,'STORIES FROM OUR STUDENTS','STORIES FROM OUR STUDENTS','stories-from-our-students',1,'2017-09-14 19:56:31','2017-09-14 19:56:31'),(5,'UNIVERSITY DECISIONS','UNIVERSITY DECISIONS','university-decisions',2,'2017-09-14 19:56:51','2017-09-14 19:56:51'),(6,'PATHWAYS TO UNIVERSITY','PATHWAYS TO UNIVERSITY','pathways-to-university',2,'2017-09-14 19:57:01','2017-09-14 19:57:01'),(7,'ACCREDITATIONS AND RANKINGS','ACCREDITATIONS AND RANKINGS','accreditations-and-rankings',2,'2017-09-14 19:57:11','2017-09-14 19:57:11'),(8,'PREPARING YOUR APPLICATION','PREPARING YOUR APPLICATION','preparing-your-application',3,'2017-09-14 19:57:29','2017-09-14 19:57:29'),(9,'APPLYING TO UK UNIVERSITIES','APPLYING TO UK UNIVERSITIES','applying-to-uk-universities',3,'2017-09-14 19:57:53','2017-09-14 19:57:53'),(10,'APPLYING TO AUSTRALIAN UNIVERSITIES','APPLYING TO AUSTRALIAN UNIVERSITIES','applying-to-australian-universities',3,'2017-09-14 19:58:06','2017-09-14 19:58:06'),(11,'APPLYING TO US UNIVERSITIES','APPLYING TO US UNIVERSITIES','applying-to-us-universities',3,'2017-09-14 19:58:18','2017-09-14 19:58:18'),(12,'APPLYING TO CANADIAN UNIVERSITIES','APPLYING TO CANADIAN UNIVERSITIES','applying-to-canadian-universities',3,'2017-09-14 19:58:28','2017-09-14 19:58:28'),(13,'CRIMINAL CONVICTION','CRIMINAL CONVICTION','criminal-conviction',3,'2017-09-14 19:58:37','2017-09-14 19:58:37'),(14,'UNDERSTANDING YOUR OFFER','UNDERSTANDING YOUR OFFER','understanding-your-offer',4,'2017-09-14 19:58:51','2017-09-14 19:58:51'),(15,'CONDITIONS IN AN OFFER','CONDITIONS IN AN OFFER','conditions-in-an-offer',4,'2017-09-14 19:59:01','2017-09-14 19:59:01'),(16,'COSTS','COSTS','costs',5,'2017-09-14 19:59:21','2017-09-14 19:59:21'),(17,'SCHOLARSHIPS','SCHOLARSHIPS','scholarships',5,'2017-09-14 19:59:33','2017-09-14 19:59:33'),(18,'EDUCATION LOANS','EDUCATION LOANS','education-loans',5,'2017-09-14 19:59:49','2017-09-14 19:59:49'),(19,'WORKING AS A STUDEN','WORKING AS A STUDEN','working-as-a-studen',5,'2017-09-14 20:00:00','2017-09-14 20:00:00'),(20,'UNIVERSITY PAYMENTS','UNIVERSITY PAYMENTS','university-payments',5,'2017-09-14 20:00:11','2017-09-14 20:00:11'),(21,'MONEY MANAGEMENT','MONEY MANAGEMENT','money-management',5,'2017-09-14 20:00:20','2017-09-14 20:00:20'),(22,'ACCOMMODATION TYPES','ACCOMMODATION TYPES','accommodation-types',6,'2017-09-14 20:00:34','2017-09-14 20:00:34'),(23,'APPLYING FOR ACCOMMODATION','APPLYING FOR ACCOMMODATION','applying-for-accommodation',6,'2017-09-14 20:00:44','2017-09-14 20:00:44'),(24,'FLIGHT','FLIGHT','flight',6,'2017-09-14 20:00:56','2017-09-14 20:00:56'),(25,'UNITED KINGDOM','UNITED KINGDOM','united-kingdom',7,'2017-09-14 20:01:08','2017-09-14 20:01:08'),(26,'AUSTRALIA','AUSTRALIA','australia',7,'2017-09-14 20:01:26','2017-09-14 20:01:26'),(27,'UNITED STATES','UNITED STATES','united-states',7,'2017-09-14 20:01:37','2017-09-14 20:01:37'),(28,'IRELAND','IRELAND','ireland',7,'2017-09-14 20:01:46','2017-09-14 20:01:46');
/*!40000 ALTER TABLE `guide_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guides`
--

DROP TABLE IF EXISTS `guides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guides`
--

LOCK TABLES `guides` WRITE;
/*!40000 ALTER TABLE `guides` DISABLE KEYS */;
INSERT INTO `guides` VALUES (1,'About Therightu','about-therightu','2017-09-14 03:07:42','2017-09-14 03:07:42'),(2,'Choosing University','choosing-university','2017-09-14 03:08:21','2017-09-14 03:08:21'),(3,'Apply to university','apply-to-university','2017-09-14 03:08:40','2017-09-14 03:08:40'),(4,'Accept offer','accept-offer','2017-09-14 03:08:55','2017-09-14 03:08:55'),(5,'Finances  Scholarships','finances-scholarships','2017-09-14 03:09:10','2017-09-14 03:09:10'),(6,'Flight Accomodation','flight-accomodation','2017-09-14 03:09:21','2017-09-14 03:09:21'),(7,'Student Visa','student-visa','2017-09-14 03:09:34','2017-09-14 03:12:02'),(8,'Online consultation','online-consultation','2017-09-14 03:10:09','2017-09-14 03:10:09');
/*!40000 ALTER TABLE `guides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_08_18_080255_create_country_table',1),(4,'2017_08_18_080309_create_university_table',1),(5,'2017_08_18_080354_create_university_ranking_table',1),(6,'2017_08_18_080400_create_university_metas_table',1),(7,'2017_08_18_081359_create_university_statistic_table',1),(8,'2017_08_18_081417_create_scholarship_table',1),(9,'2017_08_18_081430_create_subject_table',1),(10,'2017_08_18_081446_create_subject_career_table',1),(11,'2017_08_18_081457_create_course_table',1),(12,'2017_08_18_081512_ccreate_course_ranking_table',1),(13,'2017_08_18_081539_create_course_costs_table',1),(14,'2017_08_18_081603_create_course_entry_requirements',1),(15,'2017_08_18_081627_create_course_entry_information_table',1),(16,'2017_08_18_081643_create_career_table',1),(17,'2017_08_21_042314_create_user_metas_table',1),(18,'2017_08_21_100803_alter_university_ranking_table',1),(19,'2017_08_22_032857_alter_university_table_logo',1),(20,'2017_08_23_042919_alter_university_country_slug',1),(21,'2017_08_23_084500_alter_user_table_isactive',1),(22,'2017_08_28_085150_add_career_table',1),(23,'2017_09_06_063036_create_pages_table',2),(27,'2017_09_06_063303_create_page_fields_table',3),(29,'2017_09_11_022846_create_ratings_table',4),(30,'2017_09_14_084709_create_guides_table',5),(31,'2017_09_14_092205_create_guide_topics_table',5),(32,'2017_09_14_092236_create_guide_questions_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_fields`
--

DROP TABLE IF EXISTS `page_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_fields`
--

LOCK TABLES `page_fields` WRITE;
/*!40000 ALTER TABLE `page_fields` DISABLE KEYS */;
INSERT INTO `page_fields` VALUES (1,'Header Slogan1','header-slogan1','text',5,'Hãy để chúng tôi đơn giản hóa việc học của bạn','Let us simplify your university application','2017-09-07 20:24:15','2017-09-12 01:43:40'),(2,'Header Slogan2','header-slogan2','text',5,'Kế hoạch học tập ở nước ngoài? Chúng tôi có thể giúp! Bắt đầu bằng cách hoàn thành đánh giá giáo dục miễn phí của bạn hoặc cuộn để tìm hiểu thêm.','Planning to study abroad? We can help! Get started by completing your free education assessment or scroll to find out more.','2017-09-07 20:25:07','2017-09-12 01:43:40'),(3,'Content Discover','content-discover','textarea',5,'<h4>Kh&aacute;m ph&aacute;</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute;.</p>','<h4>Discover</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>','2017-09-07 20:35:15','2017-09-12 01:43:40'),(4,'Content  Compare','content-compare','textarea',5,'<h4>So s&aacute;nh</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>','<h4>Compare</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>','2017-09-07 20:36:53','2017-09-12 01:43:40'),(5,'Content Apply','content-apply','textarea',5,'<h4>Ứng dụng</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>','<h4>Apply</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>','2017-09-07 20:40:58','2017-09-12 01:43:40'),(6,'Content Consult','content-consult','textarea',5,'<h4>Tư vấn</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>','<h4>Consult</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>','2017-09-07 20:42:44','2017-09-12 01:43:40'),(7,'Content Chill','content-chill','textarea',5,'<h4>Đợi th&ocirc;ng tin</h4>\r\n<p>H&atilde;y ngồi lại trong khi ch&uacute;ng t&ocirc;i xem x&eacute;t đơn xin học đại học của bạn, th&ocirc;ng tin c&aacute; nh&acirc;n, chuyến bay v&agrave; chỗ ở.</p>','<h4>Chill</h4>\r\n<p>Sit back while we take care of your university application, personal statement, flights and accommodation.</p>','2017-09-07 20:51:49','2017-09-12 01:43:40'),(8,'Blog percent','blog-percent','text',5,'98%','98%','2017-09-07 20:58:43','2017-09-12 01:43:40'),(9,'Blog percent  off','blog-percent-off','text',5,'đạt tiêu chuẩn','obtained offrs','2017-09-07 21:00:16','2017-09-12 01:43:40'),(10,'Blog percent  content','blog-percent-content','text',5,'Với sự hỗ trợ của phần mềm sáng tạo được thiết kế để cung cấp cho các nhà tư vấn giáo dục của chúng tôi một lợi thế về công nghệ thông qua các cơ quan truyền thống, sinh viên của chúng tôi đã được hưởng dịch vụ chất lượng tốt hơn và đạt được mức giá chào giá cao hơn. Hay nhất của tất cả, dịch vụ của chúng tôi là miễn phí!','With the aid of innovative software designed to give our education consultants a technological edge over traditional agencies, our students have enjoyed better quality of service and obtained higher offer rates. Best of all, our services are free of charge!','2017-09-07 21:09:44','2017-09-12 01:43:40'),(11,'Blog scholarships','blog-scholarships','text',5,'1 trong 2','1 in 2','2017-09-07 21:11:24','2017-09-12 01:43:40'),(12,'Blog scholarships title','blog-scholarships-title','text',5,'trao học bổng','offered scholarhips','2017-09-07 21:12:26','2017-09-12 01:43:40'),(13,'Blog scholarships content','blog-scholarships-content','text',5,'Chương trình Học bổng của chúng tôi Để biết các học bổng có sẵn cho bạn dựa trên nền tảng học vấn và lựa chọn của bạn về trường đại học. Số tiền có thể dao động từ $ 1000 đến $ 250,000 để bù đắp cho chi phí giáo dục và sinh hoạt của bạn. Trò chuyện với chúng tôi bây giờ để được đánh giá học bổng miễn phí.','Our Get to know the scholarships available to you based on your academic background and choice of university. Amounts can range between $1000 to $250,000 to help offset your education and living expenses. Chat with us now for a free scholarship assessment.','2017-09-07 21:13:31','2017-09-12 01:43:40'),(14,'Blog satisfaction','blog-satisfaction','text',5,'99%','99%','2017-09-07 21:18:02','2017-09-12 01:43:40'),(15,'Blog satisfaction title','blog-satisfaction-title','text',5,'sự hài lòng của sinh viên','student satisfaction','2017-09-07 21:19:22','2017-09-12 01:43:40'),(16,'Blog satisfaction content','blog-satisfaction-content','text',5,'Với sự hỗ trợ của phần mềm sáng tạo được thiết kế để cung cấp cho các nhà tư vấn giáo dục của chúng tôi một lợi thế về công nghệ thông qua các cơ quan truyền thống, sinh viên của chúng tôi đã được hưởng dịch vụ chất lượng tốt hơn và đạt được mức giá chào giá cao hơn. Hay nhất của tất cả, dịch vụ của chúng tôi là miễn phí!','With the aid of innovative software designed to give our education consultants a technological edge over traditional agencies, our students have enjoyed better quality of service and obtained higher offer rates. Best of all, our services are free of charge!','2017-09-07 21:19:59','2017-09-12 01:43:40'),(17,'Let started title','let-started-title','text',5,'Các thiết bị được hỗ trợ','The Right Tools','2017-09-07 21:25:52','2017-09-12 01:43:40'),(18,'Let started content','let-started-content','text',5,'Trang web thân thiện với thiết bị di động của chúng tôi cho phép bạn tìm kiếm, so sánh và áp dụng cho hơn 15.000 khóa học một cách thuận tiện. Truy cập vào các công cụ trực tuyến và cơ sở dữ liệu tri thức của chúng tôi miễn phí','Our mobile-friendly website allows you to instantly search, compare and apply to over 15,000 courses at your convenience. Access to our online tools and knowledge database are free of charge','2017-09-07 21:26:26','2017-09-12 01:43:40'),(21,'Header Banner','header-banner','file',5,'public/img/home/banner.jpg','public/img/home/banner.jpg','2017-09-11 21:30:06','2017-09-12 01:04:47'),(22,'Image Right Tools','image-right-tools','file',5,'public/img/home/tools.jpg','public/img/home/tools.jpg','2017-09-12 00:46:19','2017-09-12 00:51:25'),(23,'Guide Title','guide-title','text',10,'<p>Hướng dẫn</p>','<p>Guide</p>','2017-09-14 01:12:19','2017-09-14 01:12:19'),(24,'About Therightu','about-therightu','text',10,'<p>GIỚI THIỆU THERIGHTU</p>','<p>ABOUT THERIGHTU</p>','2017-09-14 01:13:46','2017-09-14 01:13:46'),(25,'Choosing University','choosing-university','text',10,'<p>CHỌN TRƯỜNG ĐẠI HỌC</p>','<p>CHOOSING A UNIVERSITY</p>','2017-09-14 01:14:46','2017-09-14 01:14:46'),(26,'Apply to university','apply-to-university','text',10,'<p>&Aacute;P DỤNG CHO TRƯỜNG ĐẠI HỌC</p>','<p>APPLYING TO UNIVERSITY</p>','2017-09-14 01:15:58','2017-09-14 01:15:58'),(27,'Accept offer','accept-offer','text',10,'<p>CHẤP NHẬN Y&Ecirc;U CẦU CỦA BẠN</p>','<p>ACCEPTING YOUR OFFER</p>','2017-09-14 01:18:08','2017-09-14 01:18:08'),(28,'Finances  Scholarships','finances-scholarships','text',10,'<p>HỌC PH&Iacute; &amp; HỌC BỔNG</p>','<p>FINANCES &nbsp;&amp; &nbsp;SCHOLARSHIPS</p>','2017-09-14 01:20:10','2017-09-14 01:20:10'),(29,'Flight Accomodation','flight-accomodation','text',10,'<p>CHUYẾN BAY &amp; CHỖ Ở</p>','<p>FLIGHT &amp; ACCOMODATION</p>','2017-09-14 01:21:28','2017-09-14 01:21:28'),(30,'Student visa','student-visa','text',10,'<p>Visa của học sinh</p>','<p>Student visa</p>','2017-09-14 01:22:09','2017-09-14 01:22:09'),(31,'Online consultation','online-consultation','text',10,'<p>Tư vẫn trực tuyến</p>','<p>Online consultation</p>','2017-09-14 01:22:35','2017-09-14 01:22:35');
/*!40000 ALTER TABLE `page_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (5,'Home Page','home-page','2017-09-06 01:12:55','2017-09-06 01:12:55'),(10,'Guide Page','guide-page','2017-09-14 01:00:45','2017-09-14 01:00:45');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (4,'Maya','public/img/rating/avatar.png',4,'<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','2017-09-10 21:14:40','2017-09-10 21:37:17'),(5,'Talia','public/img/rating/ireneb.jpg',3,'<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','2017-09-10 21:37:57','2017-09-10 21:51:03'),(6,'Jonh','public/img/rating/user2-160x160.jpg',5,'<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','2017-09-10 21:39:19','2017-09-10 21:39:19'),(8,'jame','public/img/rating/avatar.png',4,'<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','<p>Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!</p>','2017-09-11 03:07:53','2017-09-11 03:07:53');
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_career`
--

DROP TABLE IF EXISTS `subject_career`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_career` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_career`
--

LOCK TABLES `subject_career` WRITE;
/*!40000 ALTER TABLE `subject_career` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject_career` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university`
--

LOCK TABLES `university` WRITE;
/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` VALUES (1,'Aston University','aston-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(2,'Bangor University','bangor-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(3,'Bath Spa University','bath-spa-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(4,'Birmingham City University','birmingham-city-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(5,'Brunel University London','brunel-university-london',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(6,'Coventry University','coventry-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(7,'Durham University','durham-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(8,'Falmouth University','falmouth-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(9,'Glasgow Caledonian University','glasgow-caledonian-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(10,'Goldsmiths, University of London','goldsmiths-university-of-london',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(11,'Heriot-Watt University','heriot-watt-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(12,'Istituto Marangoni','istituto-marangoni',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(13,'Kingston University','kingston-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(14,'Lancaster University','lancaster-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(15,'Loughborough University','loughborough-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(16,'Middlesex University','middlesex-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(17,'Northumbria University','northumbria-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(18,'Northumbria University','northumbria-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(19,'Norwich University of the Arts','norwich-university-of-the-arts',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(20,'Nottingham Trent University','nottingham-trent-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(21,'Plymouth University','plymouth-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(22,'Queen Margaret University','queen-margaret-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(23,'Queen\'s University Belfast','queens-university-belfast',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(24,'Robert Gordon University','robert-gordon-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(25,'Staffordshire University','staffordshire-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(26,'Swansea University','swansea-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(27,'The University of Liverpool','the-university-of-liverpool',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(28,'The University of Sheffield','the-university-of-sheffield',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(29,'University College Birmingham','university-college-birmingham',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(30,'University of Central Lancashire','university-of-central-lancashire﻿',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(31,'University of Derby','university-of-derby',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(32,'University of Dundee','university-of-dundee',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(33,'University of East Anglia','university-of-east-anglia',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(34,'University of Essex','university-of-essex',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(35,'University of Exeter','university-of-exeter',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(36,'University of Greenwich','university-of-greenwich',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(37,'University of Kent','university-of-kent',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(38,'University of Lincoln','university-of-lincoln',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(39,'University of Strathclyde','university-of-strathclyde',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(40,'University of Sunderland','university-of-sunderland',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(41,'University of Surrey','university-of-surrey',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(42,'University of Sussex','university-of-sussex',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(43,'University of Winchester','university-of-winchester',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(44,'Griffith University','griffith-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(45,'La Trobe University','La Trobe University',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(46,'Le Cordon Bleu','le-cordon-bleu',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(47,'Monash University','monash-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(48,'Queensland University of Technology','queensland-university-of-technology',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(49,'Southern Cross University','southern-cross-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(50,'University of Tasmania','university-of-tasmania',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(51,'Adelphi University','adelphi-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(52,'American University','american-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(53,'Auburn University','auburn-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(54,'City College of New York','city-college-of-new-york',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(55,'Florida International University','florida-international-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(56,'James Madison University','james-madison-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(57,'Long Island University','long-island-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(58,'Louisiana State University','louisiana-state-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(59,'Roosevelt University','roosevelt-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(60,'St George\'s University','st-georges-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(61,'St George\'s University','st-georges-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(62,'Texas A&M University - Corpus Christi','exas-am-university-corpus-christi',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(63,'University of Central Florida','university-of-central-florida',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(64,'University of Illinois - Chicago','university-of-illinois-chicago',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(65,'University of Kansas','university-of-kansas',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(66,'University of the Pacific','university-of-the-pacific',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(67,'University of Vermont','university-of-vermont',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(68,'Widener University','widener-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','US'),(69,'Royal Roads University','royal-roads-university',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CA'),(70,'University of Manitoba','university-of-manitoba',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CA'),(71,'University of New Brunswick','university-of-new-brunswick',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CA'),(72,'Cesar Ritz','cesar-ritz',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(73,'Cesar Ritz','cesar-ritz',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(74,'Hotel Institute Montreux','hotel-institute-montreux',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(75,'IHTTI School of Hotel Management','ihtti-school-of-hotel-management',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(76,'Swiss Hotel Management School','swiss-hotel-management-school',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(77,'University College Dublin','university-college-dublin',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','CH'),(78,'Bellerbys College','bellerbys-college',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(79,'CATS College','cats-college',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(80,'Coventry University ISC','coventry-university-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(81,'Coventry University - Oncampus','coventry-university-oncampus',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(82,'Durham University ISC','durham-university-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(83,'Griffith College','griffith-college',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(84,'Istituto Marangoni ISC','istituto-marangoni-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(85,'Kings Education UK','kings-education-uk',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(86,'Kingston University ISC','kingston-university-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(87,'La Trobe Melbourne','la-trobe-melbourne',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(88,'Lancaster University ISC','lancaster-university-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(89,'Lancaster University ISC','lancaster-university-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(90,'Monash College','monash-college',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(91,'QUT International College','qut-international-college',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(92,'The University of Sheffield ISC','the-university-of-sheffield-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(93,'University of Lincoln ISC','university-of-lincoln-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(94,'University of Strathclyde ISC','university-of-strathclyde-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(95,'University of Sunderland - Oncampus','university-of-sunderland-oncampus',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(96,'University of Surrey ISC','university-of-surrey-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(97,'University of Sussex ISC','university-of-sussex-international-study-centre',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','UK'),(98,'UTAS Foundation','utas-foundation',0,'2017-09-05 21:25:01','2017-09-05 21:25:01','','AU'),(99,'Aston University','aston-university',0,'2017-09-05 21:30:51','2017-09-05 21:30:51','','UK'),(100,'Bangor University','bangor-university',0,'2017-09-05 21:30:51','2017-09-05 21:30:51','','UK'),(101,'Bath Spa University','bath-spa-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(102,'Birmingham City University','birmingham-city-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(103,'Brunel University London','brunel-university-london',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(104,'Coventry University','coventry-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(105,'Durham University','durham-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(106,'Falmouth University','falmouth-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(107,'Glasgow Caledonian University','glasgow-caledonian-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(108,'Goldsmiths, University of London','goldsmiths-university-of-london',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(109,'Heriot-Watt University','heriot-watt-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(110,'Istituto Marangoni','istituto-marangoni',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(111,'Kingston University','kingston-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(112,'Lancaster University','lancaster-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(113,'Loughborough University','loughborough-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(114,'Middlesex University','middlesex-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(115,'Northumbria University','northumbria-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(116,'Northumbria University','northumbria-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(117,'Norwich University of the Arts','norwich-university-of-the-arts',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(118,'Nottingham Trent University','nottingham-trent-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(119,'Plymouth University','plymouth-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(120,'Queen Margaret University','queen-margaret-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(121,'Queen\'s University Belfast','queens-university-belfast',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(122,'Robert Gordon University','robert-gordon-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(123,'Staffordshire University','staffordshire-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(124,'Swansea University','swansea-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(125,'The University of Liverpool','the-university-of-liverpool',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(126,'The University of Sheffield','the-university-of-sheffield',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(127,'University College Birmingham','university-college-birmingham',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(128,'University of Central Lancashire','university-of-central-lancashire﻿',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(129,'University of Derby','university-of-derby',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(130,'University of Dundee','university-of-dundee',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(131,'University of East Anglia','university-of-east-anglia',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(132,'University of Essex','university-of-essex',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(133,'University of Exeter','university-of-exeter',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(134,'University of Greenwich','university-of-greenwich',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(135,'University of Kent','university-of-kent',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(136,'University of Lincoln','university-of-lincoln',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(137,'University of Strathclyde','university-of-strathclyde',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(138,'University of Sunderland','university-of-sunderland',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(139,'University of Surrey','university-of-surrey',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(140,'University of Sussex','university-of-sussex',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(141,'University of Winchester','university-of-winchester',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(142,'Griffith University','griffith-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(143,'La Trobe University','La Trobe University',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(144,'Le Cordon Bleu','le-cordon-bleu',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(145,'Monash University','monash-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(146,'Queensland University of Technology','queensland-university-of-technology',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(147,'Southern Cross University','southern-cross-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(148,'University of Tasmania','university-of-tasmania',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(149,'Adelphi University','adelphi-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(150,'American University','american-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(151,'Auburn University','auburn-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(152,'City College of New York','city-college-of-new-york',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(153,'Florida International University','florida-international-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(154,'James Madison University','james-madison-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(155,'Long Island University','long-island-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(156,'Louisiana State University','louisiana-state-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(157,'Roosevelt University','roosevelt-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(158,'St George\'s University','st-georges-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(159,'St George\'s University','st-georges-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(160,'Texas A&M University - Corpus Christi','exas-am-university-corpus-christi',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(161,'University of Central Florida','university-of-central-florida',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(162,'University of Illinois - Chicago','university-of-illinois-chicago',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(163,'University of Kansas','university-of-kansas',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(164,'University of the Pacific','university-of-the-pacific',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(165,'University of Vermont','university-of-vermont',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(166,'Widener University','widener-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','US'),(167,'Royal Roads University','royal-roads-university',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CA'),(168,'University of Manitoba','university-of-manitoba',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CA'),(169,'University of New Brunswick','university-of-new-brunswick',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CA'),(170,'Cesar Ritz','cesar-ritz',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(171,'Cesar Ritz','cesar-ritz',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(172,'Hotel Institute Montreux','hotel-institute-montreux',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(173,'IHTTI School of Hotel Management','ihtti-school-of-hotel-management',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(174,'Swiss Hotel Management School','swiss-hotel-management-school',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(175,'University College Dublin','university-college-dublin',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','CH'),(176,'Bellerbys College','bellerbys-college',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(177,'CATS College','cats-college',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(178,'Coventry University ISC','coventry-university-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(179,'Coventry University - Oncampus','coventry-university-oncampus',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(180,'Durham University ISC','durham-university-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(181,'Griffith College','griffith-college',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(182,'Istituto Marangoni ISC','istituto-marangoni-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(183,'Kings Education UK','kings-education-uk',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(184,'Kingston University ISC','kingston-university-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(185,'La Trobe Melbourne','la-trobe-melbourne',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(186,'Lancaster University ISC','lancaster-university-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(187,'Lancaster University ISC','lancaster-university-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(188,'Monash College','monash-college',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(189,'QUT International College','qut-international-college',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU'),(190,'The University of Sheffield ISC','the-university-of-sheffield-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(191,'University of Lincoln ISC','university-of-lincoln-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(192,'University of Strathclyde ISC','university-of-strathclyde-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(193,'University of Sunderland - Oncampus','university-of-sunderland-oncampus',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(194,'University of Surrey ISC','university-of-surrey-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(195,'University of Sussex ISC','university-of-sussex-international-study-centre',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','UK'),(196,'UTAS Foundation','utas-foundation',0,'2017-09-05 21:30:52','2017-09-05 21:30:52','','AU');
/*!40000 ALTER TABLE `university` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university_metas`
--

DROP TABLE IF EXISTS `university_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university_metas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `university_id` int(11) NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university_metas`
--

LOCK TABLES `university_metas` WRITE;
/*!40000 ALTER TABLE `university_metas` DISABLE KEYS */;
/*!40000 ALTER TABLE `university_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university_ranking`
--

DROP TABLE IF EXISTS `university_ranking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university_ranking` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `university_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ranking_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking_point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university_ranking`
--

LOCK TABLES `university_ranking` WRITE;
/*!40000 ALTER TABLE `university_ranking` DISABLE KEYS */;
/*!40000 ALTER TABLE `university_ranking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university_statistic`
--

DROP TABLE IF EXISTS `university_statistic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university_statistic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `university_id` int(11) NOT NULL,
  `year_founded` int(11) NOT NULL,
  `student_population` int(11) NOT NULL,
  `staff_population` int(11) NOT NULL,
  `male_number` int(11) NOT NULL,
  `female_number` int(11) NOT NULL,
  `international_students` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university_statistic`
--

LOCK TABLES `university_statistic` WRITE;
/*!40000 ALTER TABLE `university_statistic` DISABLE KEYS */;
/*!40000 ALTER TABLE `university_statistic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_metas`
--

DROP TABLE IF EXISTS `user_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_metas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_metas`
--

LOCK TABLES `user_metas` WRITE;
/*!40000 ALTER TABLE `user_metas` DISABLE KEYS */;
INSERT INTO `user_metas` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-05 22:03:37','2017-09-05 22:03:37');
/*!40000 ALTER TABLE `user_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isactive` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Nguyễn Tuấn Việt','vietnt.hn@gmail.com','$2y$10$0eJJtdi.QqbELHgPz/AOhu068Rh8d68B.EFwM.1A89m4xMeGzZLdS',1,NULL,'2017-09-05 21:15:41','2017-09-05 21:15:41',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-15 16:55:55
