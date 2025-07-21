-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 07:24 AM
-- Server version: 9.1.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compass`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `DrId` int NOT NULL,
  `PatientId` int NOT NULL,
  `DateTime` datetime NOT NULL,
  `Note` longtext NOT NULL,
  `Decision` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`Id`, `DrId`, `PatientId`, `DateTime`, `Note`, `Decision`) VALUES
(1, 15, 1, '2025-02-20 20:55:00', 'I need wheel chair', 1),
(3, 1, 1, '0000-00-00 00:00:00', '', 3),
(4, 1, 1, '0000-00-00 00:00:00', '', 3),
(5, 1, 1, '0000-00-00 00:00:00', '', 3),
(6, 1, 1, '2025-02-25 22:57:00', '', 3),
(7, 0, 1, '2025-02-26 22:59:00', '', 3),
(8, 1, 21, '2025-02-27 23:59:00', 'I would like to meet dr sunil', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `qualification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `specialty` varchar(999) NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `decision` int NOT NULL DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'doc',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Id`, `full_name`, `qualification`, `specialty`, `is_deleted`, `decision`, `img`) VALUES
(39, 'Dr. Hiruni Senanayake', 'MBBS, MD', 'Rheumatology', 0, 0, 'img_1.jpg'),
(38, 'Dr. Lasantha Abeykoon', 'MBBS, MD', 'Nephrology', 0, 0, 'default.jpg'),
(37, 'Dr. Nilmini Ekanayake', 'MBBS, MD', 'Gastroenterology', 0, 0, 'default.jpg'),
(36, 'Dr. Devinda Liyanage', 'MBBS, MD', 'Endocrinology', 0, 0, 'img_2.jpg'),
(35, 'Dr. Kavinda Gamage', 'MBBS, MD', 'Psychiatry', 0, 0, 'default.jpg'),
(34, 'Dr. Anura Jayasinghe', 'MBBS, MD', 'Dermatology', 0, 0, 'img_3.jpg'),
(33, 'Dr. Ishani Wickramasinghe', 'MBBS, MD', 'Gynecology', 0, 0, 'default.jpg'),
(32, 'Dr. Mahesh Ratnayake', 'MBBS, MD', 'Orthopedics', 0, 0, 'default.jpg'),
(31, 'Dr. Ruwani Dissanayake', 'MBBS, MD', 'Neurology', 0, 0, 'img_1.jpg'),
(30, 'Dr. Tharindu Silva', 'MBBS, MD', 'Cardiology', 0, 0, 'default.jpg'),
(29, 'Dr. Chamini Jayawardena', 'MBBS, MD', 'Pediatrics', 0, 0, 'img_3.jpg'),
(28, 'Dr. Sunil Fernando', 'MBBS, MS', 'Surgery', 0, 0, 'img_1.jpg'),
(27, 'Dr. Nimal Perera', 'MBBS, MD', 'General Medicine', 0, 0, 'img_2.jpg'),
(40, 'Dr. Manjula Weerasinghe', 'MBBS, MD', 'Pulmonology', 0, 0, 'default.jpg'),
(41, 'Dr. Dilan Peris', 'MBBS, MD', 'Ophthalmology', 0, 0, 'default.jpg'),
(42, 'Dr. Janaka Bandara', 'MBBS, MD', 'ENT Surgery', 0, 0, 'default.jpg'),
(43, 'Dr. Vindya Karunaratne', 'MBBS, MD', 'Radiology', 0, 0, 'img_3.jpg'),
(44, 'Dr. Sasindu Rajapaksa', 'MBBS, MD', 'Urology', 0, 0, 'default.jpg'),
(45, 'Dr. Ashan Samarasinghe', 'MBBS, MD', 'Oncology', 0, 0, 'default.jpg'),
(46, 'Dr. Dinesh Wijesooriya', 'MBBS, MD', 'Anesthesiology', 0, 0, 'img_2.jpg'),
(47, 'Naveen Jayawardana', 'mbbs', 'neurolo', 1, 0, '../uploads/Picture1.png');

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

DROP TABLE IF EXISTS `labtests`;
CREATE TABLE IF NOT EXISTS `labtests` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `note` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `patient` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labtests`
--

INSERT INTO `labtests` (`Id`, `note`, `patient`, `file`) VALUES
(8, 'Lab Test for urine', '21', '67bcba23be56c.pdf'),
(9, 'Lab Test for Kidney', '21', '67bcba364b460.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `medicalreports`
--

DROP TABLE IF EXISTS `medicalreports`;
CREATE TABLE IF NOT EXISTS `medicalreports` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `note` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `patient` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalreports`
--

INSERT INTO `medicalreports` (`Id`, `note`, `patient`, `file`) VALUES
(10, 'Medical Records for Mr Gayan Perera', '21', '67bcb83fbc7ce.pdf'),
(11, 'Not Good', '21', '67bcb88c476fb.pdf'),
(12, 'Reduce Instant Foods', '21', '67bcb8b02bfea.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `price` int NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Id`, `title`, `description`, `is_deleted`, `price`, `Image`) VALUES
(1, 'General Channeling', 'Consultation with a general physician', 0, 2500, 'images/general_channeling.jpg'),
(2, 'Pediatric Care', 'Specialized care for children', 0, 3000, 'images/pediatric_care.jpg'),
(3, 'Cardiology', 'Heart-related consultations', 0, 4500, 'images/cardiology.jpg'),
(4, 'Dermatology', 'Skin care treatments', 0, 3500, 'images/dermatology.jpg'),
(5, 'Dental Care', 'Teeth cleaning, fillings, etc.', 0, 2800, 'images/dental_care.jpg'),
(6, 'Laboratory Services', 'Blood tests, X-rays, scans', 0, 1000, 'images/laboratory_services.jpg'),
(7, 'Emergency Services', '24/7 emergency treatment & ambulance', 0, 5000, 'images/emergency_services.jpg'),
(8, 'Maternity Care', 'Pregnancy care and delivery services', 0, 10000, 'images/maternity_care.jpg'),
(9, 'Surgical Services', 'Minor and major surgeries', 0, 15000, 'images/surgical_services.jpg'),
(10, 'Physiotherapy', 'Rehabilitation and physical therapy', 0, 3500, 'images/physiotherapy.jpg'),
(11, 'Oncology Services', 'Cancer screening and treatment', 0, 12000, 'images/oncology_services.jpg'),
(12, 'Orthopedic Care', 'Treatment of bone and joint issues', 0, 4000, 'images/orthopedic_care.jpg'),
(13, 'Ophthalmology', 'Eye care and vision treatment', 0, 5000, 'images/ophthalmology.jpg'),
(14, 'ENT Services', 'Ear, nose, and throat treatments', 0, 3500, 'images/ent_services.jpg'),
(15, 'Neurology', 'Brain and nervous system treatments', 0, 8000, 'images/neurology.jpg'),
(16, 'Psychiatry', 'Mental health services and counseling', 0, 4500, 'images/psychiatry.jpg'),
(17, 'Gastroenterology', 'Digestive system treatments', 0, 5000, 'images/gastroenterology.jpg'),
(18, 'Urology', 'Treatment for urinary and male reproductive issues', 0, 6000, 'images/urology.jpg'),
(19, 'Endocrinology', 'Hormonal and metabolic disorder treatment', 0, 7000, 'images/endocrinology.jpg'),
(20, 'Vascular Services', 'Vein and artery treatment', 0, 4000, 'images/vascular_services.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `role` int NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `username`, `password`, `role`, `is_deleted`) VALUES
(8, 'root', '', 1, 1),
(5, 'staff', '123456', 1, 0),
(4, 'admin', '123456', 0, 0),
(9, 'Anugi', '123456', 1, 1),
(10, 'GayanPerera', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `note` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `decision` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`Id`, `full_name`, `telephone`, `headline`, `note`, `decision`) VALUES
(59, 'Indiira Ranjith', '0775678901', 'Caring Staff That Feels Like Home!', 'When I was admitted to Care Compass Hospitals, I was feeling anxious and unsure about my treatment. However, the staff made me feel so comfortable and at ease from the very beginning. The nurses were always there to listen to my concerns and provide reassurance. The doctors not only explained the medical aspects but also made sure I felt mentally and emotionally supported throughout my stay. I’ve never experienced care like this before. It truly felt like being at home, surrounded by people who genuinely cared about my well-being.', 1),
(58, 'Tharindu Kumara', '0774567890', 'Advanced Technology with Sri Lankan Care!', 'What impressed me the most about Care Compass Hospitals is how they combine the latest technology with the compassionate care that Sri Lanka is known for. The hospital is equipped with the best medical equipment, and the doctors are highly skilled in using these tools to provide accurate diagnoses and treatments. During my treatment, I felt like I was receiving the most advanced care available, while also being treated with the warmth and respect that is characteristic of Sri Lankan healthcare. It was truly a holistic and exceptional experience.', 1),
(57, 'Nadeesha Wijesinghe', '0773456789', 'Like Family!', 'Care Compass Hospitals has been our family’s trusted healthcare provider for years. Whether it’s a routine check-up, a major surgery, or an emergency, the doctors and staff treat us like family. They are always so patient and understanding, taking the time to explain things in detail and ensure we are fully informed. The nurses are incredibly kind and attentive, and they make sure we’re comfortable every time we visit. The hospital’s atmosphere is calm and welcoming, which really helps in stressful times. I know I can always rely on them for the best care.', 1),
(56, 'Kasun Silva', '0772345678', 'A Life-Saving Experience!', 'I was in an accident and rushed to Care Compass Hospitals in critical condition. The emergency team acted quickly and with great professionalism, performing life-saving procedures right away. They didn’t waste a single moment, and I truly felt that I was in the best hands possible. The doctors kept my family informed throughout the process, and their compassionate nature reassured me during such a terrifying time. Thanks to the exceptional team, I am alive and well today. I can never thank them enough for saving my life.', 1),
(55, 'Saman Perera', '0771234567', 'Exceptional Service with a Touch of Sri Lankan Hospitality!', 'From the moment I arrived at Care Compass Hospitals, I knew I was in the right place. The reception staff welcomed me with genuine warmth, and they made the entire process smooth and effortless. The doctors took time to listen to my concerns and explained every step of the treatment plan, making sure I felt comfortable and informed. The nurses were incredibly attentive, checking on me regularly and making sure I was comfortable. This hospital truly embodies the Sri Lankan hospitality and compassion you expect when it comes to healthcare. I highly recommend Care Compass to anyone looking for outstanding medical care in Sri Lanka.', 1),
(60, 'Chathura Fernando', '0776789012', 'Expert Care from Trusted Professionals!', 'I had to undergo surgery, and while I was initially very nervous, the team at Care Compass Hospitals made me feel confident about the procedure. The surgeon took the time to thoroughly explain the process and answer all my questions. The post-surgery care was just as exceptional, with the nurses closely monitoring my recovery and providing everything I needed. Their professionalism and expertise were evident throughout, and I’m now recovering well. I’m thankful to have been in such capable hands.', 1),
(61, 'Shanika Jayasinghe', '0777890123', 'Affordable and Excellent Treatment!', 'As a young professional, I was concerned about the cost of healthcare, but Care Compass Hospitals made sure I received excellent treatment without breaking the bank. The medical fees were reasonable, and the hospital worked with me to ensure that I understood my insurance coverage. Despite the affordable rates, the care I received was top-notch. The doctors were knowledgeable, and the hospital facilities were modern and clean. I couldn’t have asked for better treatment for the price I paid.', 1),
(62, 'Nadeesha Karunaratne', '0778901234', 'The Best Maternity Care!', 'My maternity experience at Care Compass Hospitals was truly unforgettable. From my first visit to post-delivery care, the doctors and staff were incredibly supportive. They made sure I was comfortable throughout my pregnancy and answered all of my questions, no matter how small. When it came time for delivery, I felt completely at ease because I knew I was in good hands. The nurses were kind and encouraging, making the entire process as smooth as possible. I’m so grateful for their care and for giving me such a positive experience.', 1),
(63, 'Pradeep Gunawardena', '0779012345', 'Emergency Services You Can Rely On!', 'After a serious accident, I was rushed to Care Compass Hospitals’ emergency department. The team was on top of things from the moment I arrived, taking immediate action to stabilize me. The doctors were calm and focused, explaining each step of the treatment and making sure my family was kept updated. The level of professionalism and efficiency they displayed was incredible, and I felt safe knowing I was in such capable hands. Thanks to their quick response and expert care, I was able to recover fully.', 1),
(64, 'Chandima Weerasinghe', '0770123456', 'My Trusted Healthcare Provider!', 'Care Compass Hospitals has been my go-to healthcare provider for many years. Whether it’s a routine check-up or an emergency, I always feel confident that I’m getting the best care possible. The doctors are highly skilled, and the staff is always friendly and attentive. I trust their expertise and appreciate how they always take the time to explain everything in detail. I wouldn’t trust my health with anyone else, and I’m proud to recommend them to others.', 1),
(65, 'Naveen Jayawardana', '072 2222 586', 'Good Service', 'Good Service Good Service Good Service Good Service Good Service', 1),
(66, 'Naveen Jayawardana', '0722282586', '1212', '1 21212 12 ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `is_deleted` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `full_name`, `email`, `telephone`, `password`, `is_deleted`) VALUES
(1, 'Naveen Jayawardana', 'premodya668@gmail.com', '072 2222 586', '123456', 0),
(3, 'Dhammi Alwis', 'dhammi@gmail.com', '072 5583731', '12345678', 0),
(4, 'Sujeeva Jayawardana', 'sujeeva@gmail.com', '0722222586', '2000abc25', 0),
(5, 'Thisara Sadamini', 'thisara@gmail.com', '072 1212 121', '2000abc25', 0),
(6, 'Umesh Induranga', 'umesh@gmail.com', '071 2323 121', '2000abc25', 0),
(7, 'Gayan Perera', 'gayan@gmail.com', '0722282586', '123456', 0),
(8, 'Gayan Perera', 'pera@gmail.com', '54646545', '123456', 0),
(9, 'Anugi Fernando', 'anugi@gmail.com', '071 2323 232', '123456', 0),
(21, 'Gayan Perera', 'internet.explorer.is.best667@gmail.com', '071 2323 23 23', '123456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
