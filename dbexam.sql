-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 10:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject`, `time`, `filename`) VALUES
(1, 'DBMS', '2022-05-08 10:34:59', 'DBMS1651940544.html'),
(2, 'OOPs', '2022-05-08 10:35:06', 'OOPs1652005929.html');

-- --------------------------------------------------------

--
-- Table structure for table `tbq1word`
--

CREATE TABLE `tbq1word` (
  `wordid` int(11) NOT NULL,
  `wquestion` varchar(200) DEFAULT NULL,
  `uemail` varchar(25) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `module` varchar(100) DEFAULT NULL,
  `priority` int(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbq1word`
--

INSERT INTO `tbq1word` (`wordid`, `wquestion`, `uemail`, `subid`, `module`, `priority`, `level`) VALUES
(25, 'Obtain the volume of the solid obtained by rotating one arch of the curve\r\ny = 2sin3x  about the X- axis. ', 'arya11@gmail.com', 1, '', 0, 'high'),
(26, 'If f(x,y)is a function satisfying euler’ s theorem then?', 'barnitarc8583@gmail.com', 1, '', 0, 'mod'),
(27, 'Which of the following set should be associated with weak entity set for weak entity to be meaningful?', 'arya11@gmail.com', 3, '', 0, 'low'),
(28, 'Which forms have a relation that contains information about a single entity?', 'Soumyajit88@gmail.com', 3, '', 0, 'high'),
(29, 'what is runtime polymorphism?', 'admin@exam.com', 4, '', 0, 'high'),
(30, 'what is the name of the poet who wrote Geetanjali?', 'admin@exam.com', 2, '', 0, 'mod'),
(31, 'what is the name of the poet who wrote Geetanjali?', 'admin@exam.com', 2, '', 0, 'low'),
(32, 'what is dbms?', 'admin@exam.com', 3, '', 0, 'mod'),
(33, 'which language has the command truncate?', 'admin@exam.com', 3, ' ', 0, 'mod'),
(34, 'which language has the command grant?', 'admin@exam.com', 3, ' ', 0, 'high'),
(35, 'which language has the command grant?', 'admin@exam.com', 3, ' ', 0, 'low'),
(36, 'what is encapsulation?', 'admin@exam.com', 4, ' ', 0, 'low'),
(37, 'what is durability?', 'admin@exam.com', 3, ' ', 0, 'high'),
(38, 'how many languages are there under SQL', 'admin@exam.com', 3, 'introduction', 1, 'mod'),
(39, 'When the “ROLLUP” operator for expression or columns within a “GROUP BY” clause is used?', 'Soumyajit88@gmail.com', 3, 'Introduction', 5, 'low'),
(41, 'What is User-defined function? What are its various types?', 'barnitarc8583@gmail.com', 3, NULL, 5, 'high'),
(42, 'What is OLTP?', 'barnitarc8583@gmail.com', 3, NULL, 4, 'high'),
(43, ' What are the differences between OLTP and OLAP?', 'barnitarc8583@gmail.com', 3, NULL, 3, 'mod'),
(44, 'What is Collation? What are the different types of Collation Sensitivity?', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(45, 'What is a Stored Procedure?', 'arya11@gmail.com', 3, NULL, 4, 'mod'),
(46, 'What is a Recursive Stored Procedure?', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(47, 'How to create empty tables with the same structure as another table?', 'barnitarc8583@gmail.com', 3, NULL, 3, 'mod'),
(48, 'What is Pattern Matching in SQL?', 'Soumyajit88@gmail.com', 3, NULL, 3, 'mod'),
(49, 'What is PostgreSQL?', 'barnitarc8583@gmail.com', 3, NULL, 4, 'low'),
(50, 'How do you define Indexes in PostgreSQL?', 'arya11@gmail.com', 3, NULL, 5, 'high'),
(51, 'How will you change the datatype of a column?', 'barnitarc8583@gmail.com', 3, NULL, 4, 'mod'),
(52, 'What is the command used for creating a database in PostgreSQL?', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(53, 'How can we start, restart and stop the PostgreSQL server?', 'barnitarc8583@gmail.com', 3, NULL, 4, 'low'),
(54, 'What are partitioned tables called in PostgreSQL?', 'Soumyajit88@gmail.com', 3, NULL, 5, 'high'),
(55, 'Define tokens in PostgreSQL?', 'barnitarc8583@gmail.com', 3, NULL, 5, 'high'),
(56, 'What is the importance of the TRUNCATE statement?', 'barnitarc8583@gmail.com', 3, NULL, 3, 'mod'),
(57, 'What is the capacity of a table in PostgreSQL?', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(58, 'What is the main disadvantage of deleting data from an existing table using the\r\nDROP TABLE command?', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(59, 'Mention the issues with traditional file-based systems that make DBMS a better\r\nchoice?', 'arya11@gmail.com', 3, NULL, 3, 'mod'),
(60, 'Are NULL values in a database the same as that of blank space or zero?', 'barnitarc8583@gmail.com', 3, NULL, 5, 'high'),
(61, 'What is meant by an entity-relationship (E-R) model? Explain the terms Entity,\r\nEntity Type, and Entity Set in DBMS.', 'barnitarc8583@gmail.com', 3, NULL, 4, 'mod'),
(62, 'Explain the difference between intension and extension in a database.', 'barnitarc8583@gmail.com', 3, NULL, 4, 'high'),
(63, 'What is a lock. Explain the major difference between a shared lock and an\r\nexclusive lock during a transaction in a database.', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(64, 'What is meant by Data Warehousing?', 'Soumyajit88@gmail.com', 3, NULL, 1, 'mod'),
(65, 'What is meant by ACID properties in DBMS?', 'barnitarc8583@gmail.com', 3, NULL, 4, 'mod'),
(66, 'Explain different languages present in DBMS.', 'barnitarc8583@gmail.com', 3, NULL, 2, 'mod'),
(67, 'Explain different levels of data abstraction in a DBMS.', 'barnitarc8583@gmail.com', 3, NULL, 2, 'low'),
(68, 'Explain different types of keys in a database.', 'arya11@gmail.com', 3, NULL, 5, 'high'),
(69, 'Explain the difference between a 2-tier and 3-tier architecture in a DBMS.', 'barnitarc8583@gmail.com', 3, NULL, 1, 'low');

-- --------------------------------------------------------

--
-- Table structure for table `tbqbrief`
--

CREATE TABLE `tbqbrief` (
  `bid` int(10) NOT NULL,
  `bquestion` varchar(200) DEFAULT NULL,
  `uemail` varchar(25) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `module` varchar(100) NOT NULL,
  `priority` int(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbqbrief`
--

INSERT INTO `tbqbrief` (`bid`, `bquestion`, `uemail`, `subid`, `module`, `priority`, `level`) VALUES
(11, 'What is encapsulation in OOP?', 'barnitarc8583@gmail.com', 4, 'Introduction', 0, 'low'),
(12, 'What happens when an object is passed by reference', 'Soumyajit88@gmail.com', 4, '', 0, 'mod'),
(13, 'What does an RDBMS consist of?', 'arya11@gmail.com', 3, 'Introduction', 0, 'low'),
(14, ' Which command is used to remove a relation from a', 'barnitarc8583@gmail.com', 3, '', 0, 'high'),
(15, '. Solve the system of equations by finding the inverse of the coefficient matrix\nx ? y + z = 6, 2x + 3y  ? z  =20 , 2x + y +6z  =15 . ', 'barnitarc8583@gmail.com', 1, '', 0, 'mod'),
(16, 'what is atomicity?', 'admin@exam.com', 3, 'Transaction', 0, 'mod'),
(17, 'what is 7*800', 'admin@exam.com', 1, ' ', 0, 'high'),
(18, 'how many languages are there under SQL', 'admin@exam.com', 3, 'introduction', 1, 'mod'),
(19, 'What is constant for a charged spherical shell according to basic electrical energy?', 'admin@exam.com', 11, 'introduction', 5, 'high'),
(20, 'Which command is used to remove a relation from an SQL?', 'arya11@gmail.com', 3, '', 1, 'low'),
(21, 'Which forms have a relation that contains information about a single entity?', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(22, 'What does a foreign key combined with a primary key create?', 'arya11@gmail.com', 3, '', 3, 'mod'),
(23, ' What happens if a piece of data is stored in two places in the db?', 'arya11@gmail.com', 3, '', 1, 'low'),
(24, 'The logical design, and the snapshot of the data at a given instant in time is known as?', 'Soumyajit88@gmail.com', 3, '', 5, 'high'),
(25, 'What is Database?', 'admin@exam.com', 3, 'introduction', 1, 'low'),
(26, 'What is DBMS?', 'arya11@gmail.com', 3, '', 1, 'low'),
(27, 'What is RDBMS? How is it different from DBMS?', 'Soumyajit88@gmail.com', 3, '', 2, 'low'),
(28, 'What is SQL?\r\n', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(29, 'What is the difference between SQL and MySQL?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(30, 'What are Tables and Fields?', 'barnitarc8583@gmail.com', 3, '', 2, 'low'),
(31, 'What are Constraints in SQL?', 'arya11@gmail.com', 3, '', 2, 'low'),
(32, 'What is a Primary Key?', 'arya11@gmail.com', 3, '', 4, 'high'),
(33, 'What is a UNIQUE constraint?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(34, 'What is a Foreign Key?', 'Soumyajit88@gmail.com', 3, '', 5, 'high'),
(35, 'What is a Join? List its different types', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(36, 'What is a Self-Join?', 'arya11@gmail.com', 3, '', 2, 'low'),
(37, 'What is a Cross-Join?', 'Soumyajit88@gmail.com', 3, '', 2, 'low'),
(38, 'What is an Index? Explain its different types.', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(39, 'What is the difference between Clustered and Non-clustered index?', 'arya11@gmail.com', 3, '', 4, 'high'),
(40, 'What is Data Integrity?', 'arya11@gmail.com', 3, '', 1, 'low'),
(41, 'What is a Query?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(42, 'What is a Subquery? What are its types?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(43, 'What is the SELECT statement?', 'Soumyajit88@gmail.com', 3, '', 2, 'low'),
(44, 'What are some common clauses used with SELECT query in SQL?', 'Soumyajit88@gmail.com', 3, '', 4, 'high'),
(45, 'What are UNION, MINUS and INTERSECT commands?', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(46, 'What is Cursor? How to use a Cursor?', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(47, 'What are Entities and Relationships?\r\n', 'Soumyajit88@gmail.com', 3, '', 1, 'low'),
(48, 'List the different types of relationships in SQL.', 'arya11@gmail.com', 3, '', 3, 'mod'),
(49, 'What is an Alias in SQL?', 'arya11@gmail.com', 3, '', 2, 'low'),
(50, 'What is a View?', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(51, 'What is Normalization?', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(52, 'What is Denormalization?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(53, 'What are the various forms of Normalization?', 'arya11@gmail.com', 3, '', 3, 'mod'),
(54, 'What are the TRUNCATE, DELETE and DROP statements?', 'arya11@gmail.com', 3, '', 1, 'low'),
(55, 'What is the difference between DROP and TRUNCATE statements?', 'barnitarc8583@gmail.com', 3, '', 2, 'low'),
(56, 'What is the difference between DELETE and TRUNCATE statements?', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(57, 'What are Aggregate and Scalar functions?', 'barnitarc8583@gmail.com', 3, '', 5, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `tbqmcq`
--

CREATE TABLE `tbqmcq` (
  `mcqid` int(11) NOT NULL,
  `mcqquestion` varchar(200) DEFAULT NULL,
  `a1` varchar(50) NOT NULL,
  `a2` varchar(50) NOT NULL,
  `a3` varchar(50) NOT NULL,
  `a4` varchar(50) NOT NULL,
  `uemail` varchar(25) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `module` varchar(100) NOT NULL,
  `priority` int(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbqmcq`
--

INSERT INTO `tbqmcq` (`mcqid`, `mcqquestion`, `a1`, `a2`, `a3`, `a4`, `uemail`, `subid`, `module`, `priority`, `level`) VALUES
(10, 'What is the full form of DBMS?', 'Data of Binary Management System', 'Database Management System', 'Database Management Service', 'Data Backup Management System', 'barnitarc8583@gmail.com', 3, 'introduction', 0, 'low'),
(11, 'In which of the following formats data is stored in the database management system?', 'Image', 'Text', 'Table', 'Graph', 'barnitarc8583@gmail.com', 3, '', 0, 'low'),
(12, 'Which was the first purely object oriented programming language developed?\r\n', 'kotlin', 'C', 'Java', 'C++', 'arya11@gmail.com', 4, '', 0, 'mod'),
(13, ' How many types of access specifiers are provided in OOP (C++)?', '4', '3', '2', '1', 'arya11@gmail.com', 4, '', 0, 'high'),
(14, 'He did not eat the cake; she did not eat it ____ ', 'either ', 'neither', 'or', 'not', 'Soumyajit88@gmail.com', 2, '', 0, 'high'),
(15, 'which language has the command drop?', 'DML', 'DDL', 'TCL', 'DCL', 'admin@exam.com', 3, '', 0, 'mod'),
(16, 'what is 1+2?', '12', '1', '2', '3', 'admin@exam.com', 1, '', 0, 'high'),
(17, ' how many outer joins are there?', '1', '2', '3', '4', 'admin@exam.com', 3, '', 0, 'high'),
(19, 'how many languages are there under SQL', '1', '2', '3', '4', 'admin@exam.com', 1, 'introduction', 1, 'low'),
(25, 'An instrument which detects electric current is known as', 'Voltmeter', 'Rheostat', 'Wattmetre', 'Galvanometer', 'admin@exam.com', 11, 'Electric Current', 1, 'high'),
(26, 'Electric pressure is also called', 'Resistance', 'Power', 'Voltage', 'Energy', 'admin@exam.com', 11, 'introduction', 4, 'mod'),
(27, 'Which of the following is a feature of DBMS?', 'Minimum Duplication and Redundancy of Data', 'High Level of Security', 'Single-user Access only', 'Support ACID Property', 'Soumyajit88@gmail.com', 3, 'Introduction', 5, 'high'),
(28, ' Which of the following is not a function of the database?', 'Managing stored data', 'Manipulating data', 'Security for stored data', 'Analysing code', 'arya11@gmail.com', 3, 'Introduction', 5, 'mod'),
(29, 'Which of the following is known as a set of entities of the same type that share same properties, or attributes?', 'Relation set', 'Tuples', 'Entity set', 'Entity Relation model', 'barnitarc8583@gmail.com', 3, 'Introduction', 4, 'low'),
(30, 'Which of the following is a component of the DBMS?', 'Data', 'Data Languages', ' Data Manager', 'All of the above', 'arya11@gmail.com', 3, 'Introduction', 3, 'mod'),
(31, ' What is information about data called?', 'Hyper data', 'Tera data', 'Meta data', 'Relations', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(33, 'The logical design, and the snapshot of the data at a given instant in time is known as?', 'Instance & Relation', 'Relation & Schema', 'Domain & Schema', 'Schema & Instance', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(34, 'What happens if a piece of data is stored in two places in the db?', 'Storage space is wasted & Changing the data in one', 'In can be more easily accessed', 'Changing the data in one spot will cause data inco', 'Storage space is wasted', 'arya11@gmail.com', 3, '', 2, 'low'),
(35, 'A major goal of the db system is to minimize the number of block transfers between the disk and memory. Which of the following helps in achieving this goal?', 'Secondary storage', 'Storage', 'Catalog', 'Buffer', 'arya11@gmail.com', 3, '', 3, 'mod'),
(36, 'Which of the following establishes a top-to-bottom relationship among the items?', 'Relational schema', 'Network schema', 'Hierarchical schema', ' All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(37, 'What would be the outcome after executing the statements?', ' give an error because the SELECT privilege has be', ' remove the SELECT privilege from SCOTT as well as', ' SCOTT would be able to query the OE.ORDERS table', 'SCOTT would not be able to query the OE.ORDERS tab', 'sample@gmail.com', 3, '', 3, 'mod'),
(38, 'The oldest DB model is _________', 'Network', 'Physical', 'Hierarchical', 'Relational', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(39, 'Which of the following represents a query in the tuple relational calculus?', ' { }{P(t) | t }', '{t | P(t)}', 't | P() | t', 'All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(40, ' Which of the following is popular for applications such as storage of log files in a database management system since it offers the best write performance?', 'RAID level 0', 'RAID level 1', 'RAID level 2', 'RAID level 3', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(41, ' For designing a normal RDBMS which of the following normal form is considered adequate?', '3NF', '4NF', '2NF', '1NF', 'barnitarc8583@gmail.com', 3, '', 2, 'low'),
(42, 'Which of the following is known as the process of viewing cross-tab with a fixed value of one attribute?', 'Dicing', 'Pivoting', 'Slicing', 'Both Pivoting and Dicing', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(43, 'Which of the following key is required in to handle the data when the encryption is applied to the data so that the unauthorised user cannot access the data?', 'Primary key', 'Authorised key', 'Encryption key', 'Decryption key', 'arya11@gmail.com', 3, '', 3, 'mod'),
(44, ' __________ command is used in SQL to issue multiple CREATE TABLE, CREATE VIEW and GRANT statements in a single transaction.', 'CREATE CLUSTER', 'CREATE PACKAGE', 'CREATE SCHEMA', 'All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(45, 'Which of the following functions construct histograms and use buckets for ranking?', 'Ntil()', ' Newtil()', 'Rank()', ' All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(46, 'Which of the following is the subset of SQL commands used to manipulate Oracle Structures, including tables?', 'Data Described Language', 'Data Retrieval Language', 'Data Manipulation Language', 'Data Definition Language', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(47, 'Which of the following is the best way to represent the attributes in a large db?', 'Dot representation', ' Concatenation', 'Relational-and', 'All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 2, 'low'),
(48, 'The query specifying the SQL view is said to be updatable if it meets which of the following conditions?', 'select clause contains relation attribute names bu', 'from clause has 1 relation', 'query does not have group by or having clause', 'All of the mentioned', 'arya11@gmail.com', 3, '', 5, 'high'),
(49, '_____ resembles Create view.', 'Create table . . . as', 'Create view as', 'Create table . . .like', 'With data', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(50, 'What is the function of the following command? \"Delete from r where P;\"', 'Clears entries from relation', 'Deletes relation', 'Deletes particular tuple from relation', 'All of the mentioned', 'barnitarc8583@gmail.com', 3, '', 2, 'low'),
(51, 'Which of the following is correct regarding the file produced by a spreadsheet?', 'can be used as it is by the DBMS', 'stored on disk in an ASCII text format', 'all of the mentioned', 'none of the mentioned', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(52, 'Which of the following is not the utility of DBMS? i) Backup ii) Loading iii) Process Organization iv) File organization', ' i, ii, and iv only', ' i, ii and iii only', 'i, iii and iv only', 'All i, ii, iii, and iv', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(53, 'After groups have been established, SQL applies predicates in the ___________ clause, allowing aggregate functions to be used.', 'where', 'having', 'group by', 'with', 'arya11@gmail.com', 3, '', 2, 'low'),
(54, 'The traditional storage of data organized by the customer, stored in separate folders in filing cabinets is an example of ______________ type of ‘database’ management system.', 'Object-oriented database management system', 'Relational database management system', 'Network database management system', 'Hierarchical database management system', 'barnitarc8583@gmail.com', 3, '', 5, 'high'),
(55, 'Why the following statement is erroneous?--SELECT dept_name, ID, avg (salary) FROM instructor GROUP BY dept_name;', 'Dept_id should not be used in group by clause', 'Group by clause is not valid in this query', 'Avg(salary) should not be selected', 'None', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(56, 'The user IDs can be added or removed using which of the following fixed roles?', 'db_sysadmin', 'db_securityadmin', 'db_accessadmin', 'db_setupadmin', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(57, '_______ indicates the maximum number of entities that can be involved in a relationship.', ' Greater Entity Count', 'Minimum cardinality', 'Maximum cardinality', 'ERD', 'arya11@gmail.com', 3, '', 5, 'high'),
(58, 'The top level of the hierarchy consists of ______ each of which can contain _____.', 'Schemas, Catalogs', 'Schemas, Environment', 'Environment, Schemas', 'Catalogs, Schemas', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(59, '_________________ operations do not preserve non-matched tuples.', 'Left outer join', 'Inner join', 'Natural join', 'Right outer join', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(60, 'Procedural language among the following is __________', 'Domain relational calculus', ' Tuple relational calculus', 'Relational algebra', 'Query language', 'barnitarc8583@gmail.com', 3, '', 4, 'high'),
(61, 'Which of the following command is correct to delete the values in the relation teaches?', 'Delete from teaches;', 'Delete from teaches where Id =’Null’;', ' Remove table teaches;', 'Drop table teaches;', 'barnitarc8583@gmail.com', 3, '', 3, 'mod'),
(62, 'Which of the following set should be associated with weak entity set for weak entity to be meaningful?', 'Neighbour set', 'Strong entity set', 'Owner set', 'Identifying set', 'sample@gmail.com', 3, '', 3, 'mod'),
(63, 'The values appearing in given attributes of any tuple in the referencing relation must likewise occur in specified attributes of at least one tuple in the referenced relation, according to ___________', 'Referential', 'Primary', 'Referencing', 'Specific', 'barnitarc8583@gmail.com', 3, '', 1, 'low'),
(64, 'how many object oriented features are there in java?', '1', '2', '3', '4', 'admin@exam.com', 4, 'Introduction', 1, 'low'),
(65, 'kkj', '1', '2', '3', '4', 'barnitarc8583@gmail.com', 8, 'jj', 1, 'low');

-- --------------------------------------------------------

--
-- Table structure for table `tbsub`
--

CREATE TABLE `tbsub` (
  `subid` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `subname` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsub`
--

INSERT INTO `tbsub` (`subid`, `sem`, `dept`, `subname`) VALUES
(1, 1, 'CSE', 'Maths IA-cse'),
(2, 2, 'CSE', 'English'),
(3, 6, 'CSE', 'DBMS'),
(4, 5, 'CSE', 'OOPs'),
(6, 6, 'CSE', 'networking'),
(7, 6, 'CSE', 'economics'),
(8, 1, 'CSE', 'Basic Electrical-CSE'),
(9, 1, 'CSE', 'Physics-CSE'),
(10, 1, 'IT', 'maths-IA-IT'),
(11, 1, 'IT', 'Basic Electrical-IT'),
(12, 1, 'IT', 'Physics-IT'),
(16, 2, 'CSE', 'English-cse'),
(17, 2, 'CSE', 'CHEMISTRY-CSE'),
(18, 2, 'CSE', 'MATHS IIA-CSE'),
(19, 2, 'CSE', 'Programming for problem solving-cse'),
(20, 2, 'IT', 'maths-IIA-IT'),
(21, 2, 'IT', 'Programming for problem solving-IT'),
(22, 2, 'IT', 'Chemistry-IT'),
(23, 3, 'CSE', 'Analog and Digital Electronics-cse'),
(24, 3, 'CSE', 'Economics for Engineers'),
(25, 3, 'CSE', 'maths III'),
(26, 3, 'CSE', 'Data Structure and Algorithm'),
(27, 3, 'CSE', 'Computer Organisation');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `ufname` char(15) DEFAULT NULL,
  `ulname` char(15) DEFAULT NULL,
  `ucontact` varchar(20) DEFAULT NULL,
  `ucollg` varchar(50) DEFAULT NULL,
  `uemail` varchar(50) NOT NULL,
  `upasswd` varchar(25) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `ucountry` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`ufname`, `ulname`, `ucontact`, `ucollg`, `uemail`, `upasswd`, `uaddress`, `ucountry`) VALUES
('admin', 'tt', '556526', 'stcet', 'admin@exam.com', 'admin123', 'kolkata', 'india'),
('Arya', 'B', '9865', 'stcet', 'arya11@gmail.com', '123456', 'kolkata', 'india'),
('Barnita', 'Roy Choudhury', '8583829223', 'stcet', 'barnitarc8583@gmail.com', '123456', 'Kolkata', 'India'),
('admin', 's', '8989888', 'demo', 'demo@gmail.com', 'demo', 'kolkata', 'india'),
('sample', 'sample', '0', 'sample', 'sample@gmail.com', 'sample', 'hhh', 'india'),
('Soumyajit', 'Mondal', '8588', 'stcet', 'Soumyajit88@gmail.com', '123456', 'kolkata', 'india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbq1word`
--
ALTER TABLE `tbq1word`
  ADD PRIMARY KEY (`wordid`),
  ADD KEY `subid` (`subid`),
  ADD KEY `uemail` (`uemail`);

--
-- Indexes for table `tbqbrief`
--
ALTER TABLE `tbqbrief`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `subid` (`subid`),
  ADD KEY `uemail` (`uemail`);

--
-- Indexes for table `tbqmcq`
--
ALTER TABLE `tbqmcq`
  ADD PRIMARY KEY (`mcqid`),
  ADD KEY `subid` (`subid`),
  ADD KEY `uemail` (`uemail`);

--
-- Indexes for table `tbsub`
--
ALTER TABLE `tbsub`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbq1word`
--
ALTER TABLE `tbq1word`
  MODIFY `wordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbqbrief`
--
ALTER TABLE `tbqbrief`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbqmcq`
--
ALTER TABLE `tbqmcq`
  MODIFY `mcqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbsub`
--
ALTER TABLE `tbsub`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbq1word`
--
ALTER TABLE `tbq1word`
  ADD CONSTRAINT `tbq1word_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `tbsub` (`subid`),
  ADD CONSTRAINT `tbq1word_ibfk_2` FOREIGN KEY (`uemail`) REFERENCES `tbuser` (`uemail`);

--
-- Constraints for table `tbqbrief`
--
ALTER TABLE `tbqbrief`
  ADD CONSTRAINT `tbqbrief_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `tbsub` (`subid`),
  ADD CONSTRAINT `tbqbrief_ibfk_2` FOREIGN KEY (`uemail`) REFERENCES `tbuser` (`uemail`);

--
-- Constraints for table `tbqmcq`
--
ALTER TABLE `tbqmcq`
  ADD CONSTRAINT `tbqmcq_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `tbsub` (`subid`),
  ADD CONSTRAINT `tbqmcq_ibfk_2` FOREIGN KEY (`uemail`) REFERENCES `tbuser` (`uemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
