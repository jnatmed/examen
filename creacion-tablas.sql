CREATE DATABASE contacto;

USE contactoDB;

CREATE TABLE contacto (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL
)