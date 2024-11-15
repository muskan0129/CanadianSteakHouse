CREATE DATABASE example_db;

USE example_db;

CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50) NOT NULL,
  middlename VARCHAR(50),
  lastname VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100),
  age INT,
  gender ENUM('Male', 'Female', 'Other')
);
