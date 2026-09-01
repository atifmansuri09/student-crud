-- CREATING A DATABASE
CREATE DATABASE student-crud;

-- USING DATABASE
USE student-crud;

-- CREATING TABLE
CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    course VARCHAR(50),
    classyear VARCHAR(50),
    phonenumber VARCHAR(50),
    photo VARCHAR(255)
    );