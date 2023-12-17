create database BreakTime;
use  BreakTime;
CREATE TABLE providers (
    id INT PRIMARY KEY  AUTO_INCREMENT,
    name VARCHAR(255) ,
    location VARCHAR(255),
    image VARCHAR(255)
);

CREATE TABLE meals (
    id INT PRIMARY KEY  AUTO_INCREMENT,
    name VARCHAR(255),
    description TEXT,
    type VARCHAR(255),
    price DECIMAL(10, 2),
    provider_id INT,
    FOREIGN KEY (provider_id) REFERENCES providers(id)
);

