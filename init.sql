CREATE DATABASE IF NOT EXISTS prueba;
USE prueba;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

INSERT INTO usuarios (nombre) VALUES ('Samuel'), ('Jesus'), ('María');
