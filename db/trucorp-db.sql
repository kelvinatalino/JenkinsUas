CREATE DATABASE IF NOT EXISTS Trucorp;

USE Trucorp;

CREATE TABLE users (
  id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nama varchar(255) NOT NULL,
  Kantor varchar(255) NOT NULL
);

INSERT INTO users (Nama, Kantor) VALUES
('Black Widow', 'Cabang'),
('Captain America', 'Pusat'),
('Iron Man', 'Pusat'),
('Thor', 'Cabang'),
('Vision', 'Cabang'),
('Wanda', 'Cabang');
