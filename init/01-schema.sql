CREATE TABLE IF NOT EXISTS pages (
       id   INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       content  TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS properties (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       description TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(255) NOT NULL,
       password_hash TEXT NOT NULL,
       email VARCHAR(255) NOT NULL
);
