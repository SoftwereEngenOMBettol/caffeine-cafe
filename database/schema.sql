-- Caffeine Cafe — database schema
-- Import this file in phpMyAdmin, or run it from the MySQL console.

CREATE DATABASE IF NOT EXISTS phplogin
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE phplogin;

-- ---------- Customer accounts ----------
CREATE TABLE IF NOT EXISTS csingup (
  UID       INT AUTO_INCREMENT PRIMARY KEY,
  UName     VARCHAR(50)  NOT NULL,
  password  VARCHAR(255) NOT NULL,
  email     VARCHAR(100) NOT NULL,
  security  VARCHAR(100) NOT NULL
);

-- ---------- Cart items / transactions ----------
CREATE TABLE IF NOT EXISTS cocart (
  ID     INT AUTO_INCREMENT PRIMARY KEY,
  Name   VARCHAR(100) NOT NULL,
  Price  VARCHAR(20)  NOT NULL,
  UID    INT,
  FOREIGN KEY (UID) REFERENCES csingup(UID) ON DELETE CASCADE
);

-- ---------- Contact form messages ----------
CREATE TABLE IF NOT EXISTS contact (
  CID      INT AUTO_INCREMENT PRIMARY KEY,
  UID      INT,
  FName    VARCHAR(50),
  LName    VARCHAR(50),
  City     VARCHAR(50),
  Comment  TEXT,
  FOREIGN KEY (UID) REFERENCES csingup(UID) ON DELETE SET NULL
);

-- ---------- Administrator accounts ----------
CREATE TABLE IF NOT EXISTS adminlogin (
  username  VARCHAR(50) PRIMARY KEY,
  password  VARCHAR(255) NOT NULL
);

-- Demo admin accounts (development only - change before any real use)
INSERT IGNORE INTO adminlogin (username, password) VALUES
  ('admin',  'admin'),
  ('admin2', 'admin2'),
  ('admin3', 'admin3'),
  ('admin4', 'admin4');
