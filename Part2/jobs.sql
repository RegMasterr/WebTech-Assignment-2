-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 03:13 AM
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
('Customer Service Representative (CS006)', 'Provide excellent customer service by addressing inquiries, resolving issues, and ensuring customer satisfaction.', '$AUD40,000 - $AUD55,000 per year', 'Customer Service Manager', '<li> Respond to customer inquiries via phone, email, or chat.</li>\n<li> Resolve complaints in a timely and professional manner.</li>\n<li> Maintain accurate customer records.</li>\n<li> Collaborate with other departments.</li>', '<li><strong>Essential:</strong> High school diploma or equivalent.</li>\n                            <li><strong>Essential:</strong> 1 year of experience in customer service.</li>\n                            <li><strong>Essential:</strong> Strong communication and interpersonal skills.</li>\n                            <li><strong>Preferable:</strong> Experience with CRM software.</li>\n                            <li><strong>Preferable:</strong> Multilingual abilities.</li>'),
('Cybersecurity Specialist (CS004)', 'Protect the company\'s information systems from cyber threats and ensure data security.', '$AUD75,000 - $AUD95,000 per year', 'Chief Information Security Officer', '<li>Monitor security systems and respond to incidents.</li>\n                            <li>Conduct vulnerability assessments and penetration testing.</li>\n                            <li>Develop and implement security policies and procedures.</li>\n                            <li>Educate employees on cybersecurity best practices.</li>', '<li><strong>Essential:</strong> Bachelor\'s degree in Cybersecurity or related field.</li>\n                            <li><strong>Essential:</strong> 3 years of experience in cybersecurity.</li>\n                            <li><strong>Essential:</strong> Knowledge of security frameworks and compliance standards.</li>\n                            <li><strong>Preferable:</strong> CISSP or equivalent certification.</li>\n                            <li><strong>Preferable:</strong> Experience with SIEM tools.</li>'),
('Data Analyst (DA003)', 'Analyze and interpret complex data sets to provide actionable insights for decision-making.', '$AUD65,000 - $AUD85,000 per year', 'Data Science Manager', '<li>Collect and clean data from various sources.</li>\n                            <li>Perform statistical analysis and data visualization.</li>\n                            <li>Develop reports and dashboards to communicate findings.</li>\n                            <li>Collaborate with stakeholders to understand data needs.</li>', '<li><strong>Essential:</strong> Bachelor\'s degree in Statistics, Mathematics, or related field.</li>\n                            <li><strong>Essential:</strong> 2 years of experience in data analysis.</li>\n                            <li><strong>Essential:</strong> Proficiency in SQL and data visualization tools (e.g., Tableau).</li>\n                            <li><strong>Preferable:</strong> Experience with Python or R for data analysis.</li>\n                            <li><strong>Preferable:</strong> Strong communication skills.</li>'),
('IT Support Technician (IT005)', 'Provide technical support to employees and resolve IT-related issues.', '$AUD45,000 - $AUD60,000 per year', 'IT Support Manager', '<li>Respond to help desk tickets and provide timely resolutions.</li>\n                            <li>Install and configure hardware and software.</li>\n                            <li>Troubleshoot network and system issues.</li>\n                            <li>Maintain documentation of IT procedures and solutions.</li>', '<li><strong>Essential:</strong> Bachelor\'s degree in Information Technology or related field.</li>\n                            <li><strong>Essential:</strong> 1 year of experience in IT support.</li>\n                            <li><strong>Essential:</strong> Strong problem-solving skills.</li>\n                            <li><strong>Preferable:</strong> CompTIA A+ certification.</li>\n                            <li><strong>Preferable:</strong> Experience with Windows and macOS operating systems.</li>'),
('Network Administrator (NA001)', 'Responsible for managing and maintaining the company\'s network infrastructure to ensure optimal performance and security.', '$AUD60,000 - $AUD80,000 per year', 'IT Manager', '<li>Monitor and maintain network performance.</li>\n                            <li>Configure and manage network devices such as routers and switches.</li>\n                            <li>Troubleshoot network issues and outages.</li>\n                            <li>Implement network security measures.</li>', ' <li><strong>Essential:</strong> Bachelor\'s degree in Computer Science or related field.</li>\n                            <li><strong>Essential:</strong> 3 years of experience in network administration.</li>\n                            <li><strong>Essential:</strong> Proficiency in TCP/IP, VLANs, and network protocols.</li>\n                            <li><strong>Preferable:</strong> CCNA or equivalent certification.</li>\n                            <li><strong>Preferable:</strong> Experience with firewall management.</li>'),
('Software Developer (SD002)', 'Design, develop, and maintain software applications to meet business needs.', '$AUD70,000 - $AUD90,000 per year', 'Development Team Lead', '<li>Write clean, efficient, and well-documented code.</li>\n                            <li>Collaborate with team members to design software solutions.</li>\n                            <li>Test and debug applications to ensure functionality.</li>\n                            <li>Participate in code reviews and provide feedback.</li>', '<li><strong>Essential:</strong> Bachelor\'s degree in Computer Science or related field.</li>\n                            <li><strong>Essential:</strong> 2 years of experience in software development.</li>\n                            <li><strong>Essential:</strong> Proficiency in programming languages such as Java, Python, or C#.</li>\n                            <li><strong>Preferable:</strong> Experience with agile development methodologies.</li>\n                            <li><strong>Preferable:</strong> Knowledge of database management systems.</li>');

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
