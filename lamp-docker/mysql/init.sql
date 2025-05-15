CREATE DATABASE demo;
USE demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
);

INSERT INTO users (name, email)
VALUES ('Harsh Chavan', 'harsh@example.com');

