DROP DATABASE IF EXISTS `sprites_test`;

CREATE DATABASE `sprites_test`;

USE `sprites_test`;

CREATE TABLE user_data (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL
);

CREATE TABLE character_data (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    userData INT,
    FOREIGN KEY (userData) REFERENCES user_data(id)
);