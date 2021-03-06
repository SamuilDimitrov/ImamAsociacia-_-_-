CREATE DATABASE IF NOT EXISTS HackTUES365;
USE hacktues365;

CREATE TABLE accounts
(
	user_id	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(256) NOT NULL,
    user_pass VARCHAR(256) NOT NULL,
    user_email VARCHAR(256) NOT NULL
    
);
CREATE TABLE datas 
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(256) NOT NULL,
    ip INT NOT NULL,
    humidity VARCHAR(128) NOT NULL,
    water_date DATETIME NOT NULL
);
CREATE TABLE devices
(
	id INT AUTO_INCREMENT PRIMARY KEY, 
	user_id INT NOT NULL,
	ip INT NOT NULL
)