-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 06:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dietary_info`
--

CREATE TABLE `dietary_info` (
  `Title` varchar(255) NOT NULL,
  `diet_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietary_info`
--

INSERT INTO `dietary_info` (`Title`, `diet_info`) VALUES
('Digital Marketing Agency for Small Businesses', '1-3 months to establish services and client acquisition'),
('Eco-Friendly Packaging Solutions', '6-12 months to prototype and launch'),
('Mobile App for Local Experiences', '9-18 months for product development and brand launch'),
('Online Learning Marketplace', '6-12 months for platform development and content acquisition'),
('Personalized Meal Kit Delivery', '4-8 months for product development and marketing launch'),
('Remote Team Building Activities', '3-5 months to develop activities and marketing materials'),
('Smart Home Automation Solutions', '9-18 months for product development and marketing'),
('Virtual Fitness Platform', '3-6 months for development and launch');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `Title` varchar(255) NOT NULL,
  `Ingredients` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`Title`, `Ingredients`) VALUES
('Digital Marketing Agency for Small Businesses', 'Marketing expertise across digital platforms (SEO, social media, PPC)\r\nWeb development skills to create and manage client websites\r\nGraphic design capabilities for creating engaging visuals and branding\r\nCustomer relationship management (CRM) tools for tracking leads\r\nA portfolio of case studies to demonstrate success and attract clients'),
('Eco-Friendly Packaging Solutions', 'Access to sustainable materials (biodegradable, compostable),\r\nDesign expertise to create functional and attractive packaging,\r\nManufacturing partnerships to produce the packaging at scale,\r\nKnowledge of regulations and standards for eco-friendly certifications,\r\nA marketing strategy to promote environmental benefits to consumers.'),
('Mobile App for Local Experiences', 'App development skills to create a seamless user experience\r\nPartnerships with local businesses and service providers\r\nMarketing strategy to engage users and encourage community participation\r\nCustomer support for handling inquiries and feedback\r\nAnalytics tools to track user behavior and preferences\r\n'),
('Online Learning Marketplace', 'E-learning platform development expertise to create a user-friendly interface\r\nPartnerships with qualified instructors and institutions for course offerings\r\nContent creation skills to develop high-quality learning materials\r\nMarketing strategy to attract learners and maintain engagement\r\nCustomer support team to assist users with technical and course-related inquiries'),
('Personalized Meal Kit Delivery', 'Culinary expertise to design nutritious and delicious meal plans\r\nSupply chain management skills to source fresh ingredients efficiently\r\nMarketing strategy to reach target demographics effectively\r\nSoftware development for a seamless user interface and experience\r\nCustomer service team to handle inquiries and feedback'),
('Remote Team Building Activities', 'Event planning skills to design engaging and interactive activities\r\nCreativity in developing unique virtual experiences for teams\r\nMarketing strategy to target businesses and HR departments\r\nPlatform for hosting events (e.g., Zoom, Teams, or custom-built)\r\nPartnerships with facilitators or entertainers to enhance activities'),
('Smart Home Automation Solutions', 'IoT technology expertise to develop smart devices and systems,\r\nSoftware development skills for mobile app integration,\r\nElectrical engineering knowledge for product safety and compliance,\r\nPartnerships with retailers and installers for distribution and support,\r\nA marketing strategy to educate consumers about smart home benefits.'),
('Virtual Fitness Platform', 'Experienced fitness trainers with various specialties (yoga. HIIT. etc.),\r\nApp development skills to create an engaging user interface and experience,\r\nA marketing strategy to attract users and build a community,\r\nPartnerships with fitness equipment suppliers for affiliate marketing,\r\nAccess to streaming and recording technology for high-quality classes.');

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `Title` varchar(255) NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`Title`, `instructions`) VALUES
('Digital Marketing Agency for Small Businesses', 'An agency focused on providing affordable digital marketing solutions tailored to small businesses to help them grow online. Services will include website development, social media management, content creation, and search engine optimization. By focusing on personalized strategies and measurable results, the agency aims to help clients build their online presence, attract new customers, and increase sales without breaking the bank.'),
('Eco-Friendly Packaging Solutions', 'This business provides innovative, biodegradable, and recyclable packaging options, focusing on reducing plastic waste and environmental impact across various industries. By leveraging sustainable materials like plant-based plastics and compostable fibers, the company will offer custom solutions that meet product-specific requirements while ensuring structural integrity and visual appeal. The goal is to support businesses in achieving eco-certifications and enhancing their sustainability credentials, ultimately attracting environmentally conscious consumers. Extensive testing will ensure durability and effectiveness, with an emphasis on cost-competitive alternatives to traditional packaging.'),
('Mobile App for Local Experiences', 'A mobile app connecting users with unique local experiences and activities in their area, fostering community engagement. Users can discover and book events such as workshops, tours, and classes, all while supporting local entrepreneurs. The platform will feature user reviews and recommendations to enhance trust and provide personalized suggestions based on interests and past activity.'),
('Online Learning Marketplace', 'An education platform that brings together learners and expert instructors for a wide range of online courses, from academic subjects to personal development and hobbies. This marketplace will enable instructors to monetize their expertise while offering learners interactive and engaging experiences through quizzes, live sessions, and peer discussions. Certifications upon course completion will add professional value for users, while partnerships with institutions can help enhance credibility and course offerings. Advanced analytics tools will be incorporated to provide insights into learner progress, enabling instructors to tailor their teaching methods for improved outcomes.'),
('Personalized Meal Kit Delivery', 'A subscription service providing personalized meal kits based on dietary preferences and health goals. Users can select from various meal plans, including vegan, keto, and family-friendly options, with the flexibility to customize their choices each week. The service emphasizes fresh, locally sourced ingredients, minimizing food waste and promoting healthy eating habits. Nutritional information and cooking instructions will be included to enhance the cooking experience.'),
('Remote Team Building Activities', 'A business that organizes virtual team-building activities to improve employee engagement and collaboration in remote teams. Offering a range of fun and interactive activities, such as virtual escape rooms, trivia competitions, and creative workshops, the platform aims to foster camaraderie and strengthen team dynamics. Customizable packages allow companies to tailor experiences to their specific needs and goals.'),
('Smart Home Automation Solutions', 'This company will specialize in designing and manufacturing smart home devices that streamline everyday tasks, promote energy efficiency, and enhance security. By offering products like smart thermostats, lighting systems, and surveillance devices, all controlled through a central app, it aims to make smart home technology accessible to the average consumer. With an emphasis on easy installation and intuitive controls, the brand will focus on a user-friendly approach that educates consumers on energy savings and the environmental benefits of automation. The product line will meet industry standards for safety and interoperability with popular home assistants.'),
('Virtual Fitness Platform', 'The Virtual Fitness Platform aims to offer a comprehensive range of online fitness services catering to all levels of fitness enthusiasts. Users can access live and on-demand classes led by certified instructors in disciplines such as yoga, high-intensity interval training, pilates, and more. Beyond workout classes, the platform will also offer personalized fitness plans, meal planning options, and progress tracking. A user-friendly app will provide seamless integration with wearable devices, enabling users to track metrics like heart rate, calories burned, and performance improvement over time. By creating a social, community-focused environment, the platform aims to motivate users through challenges, leaderboards, and virtual support groups. Partnerships with fitness brands for affiliate sales and exclusive discounts further enhance the user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `Title` varchar(255) NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`Title`, `rating`) VALUES
('Digital Marketing Agency for Small Businesses', 'priya1212@gmail.com'),
('Eco-Friendly Packaging Solutions', 'afiyamalik160@gmail.com'),
('Mobile App for Local Experiences', 'haadi3008@gmail.com'),
('Online Learning Marketplace', 'priya1212@gmail.com'),
('Personalized Meal Kit Delivery', 'priya1212@gmail.com'),
('Remote Team Building Activities', 'priya1212@gmail.com'),
('Smart Home Automation Solutions', 'afiyamalik150@gmail.com'),
('Virtual Fitness Platform', 'afiyamalik160@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `Title` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Title`, `category`, `user_name`, `img_url`) VALUES
('Digital Marketing Agency for Small Businesses', 'Seeking Co-Founders', 'Priya', 'DigitalMarketing.webp'),
('Eco-Friendly Packaging Solutions', 'Collaborative Project', 'afiya', 'ecofriendlypack.jpg'),
('Mobile App for Local Experiences', 'Public Domain Pitch', 'Haadi', 'localapp.png'),
('Online Learning Marketplace', 'Free Exposure', 'Priya', 'elearning.jpg'),
('Personalized Meal Kit Delivery', 'Seeking Co-Founders', 'Priya', 'Meal_Kits.jpg'),
('Remote Team Building Activities', 'Seeking Co-Founders', 'Priya', 'RemoteTeamBuilding.jpg'),
('Smart Home Automation Solutions', 'Looking for Investors', 'afiya', 'SmartHomeAutomation.jpg'),
('Virtual Fitness Platform', 'Seeking Co-Founders', 'Afiya', 'fitness.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `email`, `password`) VALUES
('Aatheka', 'aathe@gmail.com', 'aathe@1006'),
('Abdul', 'abdul212@gmail.com', 'abdul@2124'),
('Afiya', 'afi@gmail.com', 'afi$15afi'),
('Arshee', 'arsh2005@gmail.com', 'ArS@2005'),
('haadi', 'haadi3008@gmail.com', '34567890'),
('Jalal', 'jalal123@gmail.com', 'jana@jalal'),
('Josh', 'narendranjoshitha@gmail.com', 'joshi6789'),
('Priya', 'priya1221@gmail.com', '23456789'),
('Rifha', 'rif@gmail.com', 'rifha@mochi'),
('Shafeen', 'safneha@gmail.com', 'rayyan@neha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dietary_info`
--
ALTER TABLE `dietary_info`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
