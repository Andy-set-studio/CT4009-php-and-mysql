CREATE TABLE `comments` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `deleted` INT DEFAULT 0
);
