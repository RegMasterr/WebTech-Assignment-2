-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 04:09 PM
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
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_title` varchar(150) NOT NULL,
  `job_description` text NOT NULL,
  `salary_range` text NOT NULL,
  `reports_to` text NOT NULL,
  `responsibilities` text NOT NULL,
  `qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_title`, `job_description`, `salary_range`, `reports_to`, `responsibilities`, `qualifications`) VALUES
('Customer Service Representative (CS006)', 'Provide excellent customer service by addressing inquiries, resolving issues, and ensuring customer satisfaction.', '$AUD40,000 - $AUD55,000 per year', 'Customer Service Manager', '1. Respond to customer inquiries via phone, email, or chat.\n2. Resolve complaints in a timely and professional manner.\n3. Maintain accurate customer records.\n4. Collaborate with other departments.', 'Essential: High school diploma or equivalent; 1 year of customer service experience; Strong communication skills.\nPreferable: CRM software experience; Multilingual abilities.'),
('Cybersecurity Specialist (CS004)', 'Protect the company\'s information systems from cyber threats and ensure data security.', '$AUD75,000 - $AUD95,000 per year', 'Chief Information Security Officer', '1. Monitor security systems and respond to incidents.\n2. Conduct vulnerability assessments and penetration testing.\n3. Develop and implement security policies.\n4. Educate employees on cybersecurity.', 'Essential: Bachelor\'s degree in Cybersecurity or related field; 3 years of experience in cybersecurity; Knowledge of security frameworks.\nPreferable: CISSP certification; Experience with SIEM tools.'),
('Data Analyst (DA003)', 'Analyze and interpret complex data sets to provide actionable insights for decision-making.', '$AUD65,000 - $AUD85,000 per year', 'Data Science Manager', '1. Collect and clean data from various sources.\n2. Perform statistical analysis and data visualization.\n3. Develop reports and dashboards to communicate findings.\n4. Collaborate with stakeholders to understand data needs.', 'Essential: Bachelor\'s degree in Statistics, Mathematics, or related field; 2 years of experience in data analysis; Proficiency in SQL and visualization tools.\nPreferable: Experience with Python or R; Strong communication skills.'),
('IT Support Technician (IT005)', 'Provide technical support to employees and resolve IT-related issues.', '$AUD45,000 - $AUD60,000 per year', 'IT Support Manager', '1. Respond to help desk tickets and resolve issues.\n2. Install and configure hardware/software.\n3. Troubleshoot network and system problems.\n4. Maintain IT documentation.', 'Essential: Bachelor\'s degree in IT or related field; 1 year of IT support experience; Strong problem-solving skills.\nPreferable: CompTIA A+ certification; Experience with Windows/macOS.'),
('Network Administrator (NA001)', 'Responsible for managing and maintaining the company\'s network infrastructure to ensure optimal performance and security.', '$AUD60,000 - $AUD80,000 per year', 'IT Manager', '1. Monitor and maintain network performance.\n2. Configure and manage network devices such as routers and switches.\n3. Troubleshoot network issues and outages.\n4. Implement network security measures.', 'Essential: Bachelor\'s degree in Computer Science or related field; 3 years of experience in network administration; Proficiency in TCP/IP, VLANs, and network protocols.\nPreferable: CCNA or equivalent certification; Experience with firewall management.'),
('Software Developer (SD002)', 'Design, develop, and maintain software applications to meet business needs.', '$AUD70,000 - $AUD90,000 per year', 'Development Team Lead', '1. Write clean, efficient, and well-documented code.\n2. Collaborate with team members to design software solutions.\n3. Test and debug applications to ensure functionality.\n4. Participate in code reviews and provide feedback.', 'Essential: Bachelor\'s degree in Computer Science or related field; 2 years of experience in software development; Proficiency in Java, Python, or C#.\nPreferable: Experience with agile development; Knowledge of database management systems.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
