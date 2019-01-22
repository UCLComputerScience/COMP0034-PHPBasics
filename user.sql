SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `phpbasics` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpbasics`;

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
                      `userID` int(11) NOT NULL,
                      `firstName` varchar(100) NOT NULL,
                      `familyName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Users` (`userID`, `firstName`, `familyName`) VALUES
(1, 'Fred', 'Bloggs'),
(2, 'John', 'Doe'),
(3, 'Jane', 'Doe'),
(4, 'Janet', 'Bloggs');


ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);


ALTER TABLE `Users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


CREATE USER 'phpuser'@'localhost' IDENTIFIED BY 'basics';
GRANT ALL PRIVILEGES ON phpbasics.* TO 'phpuser'@'localhost';

