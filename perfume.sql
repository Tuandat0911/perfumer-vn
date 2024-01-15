CREATE DATABASE perfume_shop;

USE perfume_shop;

CREATE TABLE account 
	(
     id INT PRIMARY KEY AUTO_INCREMENT,
     username VARCHAR(255) NOT NULL,
     email VARCHAR(255) NOT NULL UNIQUE,
     password VARCHAR(255) NOT NULL
    );
	
    SELECT * FROM account;
    
    