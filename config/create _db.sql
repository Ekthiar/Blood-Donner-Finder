CREATE DATABASE blood;

USE blood;

CREATE TABLE users(
name VARCHAR(50) NOT NULL,
b_group VARCHAR(3) NOT NULL,
gender VARCHAR(10),
phone VARCHAR(11) NOT NULL,
date_of_birth DATE NOT NULL,
address VARCHAR(100),
p_station VARCHAR(30) NOT NULL,
district VARCHAR(30) NOT NULL
);