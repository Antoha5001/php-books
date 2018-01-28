CREATE DATABASE IF NOT EXISTS phpbook DEFAULT CHARSET UTF8;

SHOW DATABASES ;
USE phpbook;
SHOW TABLES ;

CREATE TABLE authors (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  password TINYTEXT,
  email TINYTEXT,
  url TEXT,
  icq TINYTEXT,
  about TEXT,
  photo TINYTEXT,
  put_date DATETIME DEFAULT NULL ,
  last_visit DATETIME DEFAULT NULL ,
  themes INT(10) DEFAULT NULL ,
  status_user ENUM('user','moderator','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (id)
);
DROP TABLE authors;
DESC authors;

CREATE TABLE forums(
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  forums_rule TEXT,
  logo TINYTEXT,
  pos INT(11) DEFAULT NULL ,
  visible ENUM('hide','show') NOT NULL DEFAULT 'show',
  PRIMARY KEY (id)
);

CREATE TABLE themes(
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  author TINYTEXT,
  id_authors INT(11) DEFAULT NULL ,
  visible ENUM('hide','show') NOT NULL DEFAULT 'show',
  id_forums INT(11) DEFAULT NULL ,
  put_date DATETIME DEFAULT NULL ,
  PRIMARY KEY (id)
);

CREATE TABLE posts(
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TINYTEXT,
  url TEXT,
  file TINYTEXT,
  author TINYTEXT,
  id_authors INT(11) DEFAULT NULL ,
  visible ENUM('hide','show') NOT NULL DEFAULT 'show',
  put_date DATETIME DEFAULT NULL ,
  parent_post INT(11) DEFAULT NULL ,
  theme_id INT(11) DEFAULT NULL ,
  PRIMARY KEY (id)
);

ALTER TABLE forums ADD test INT(11) AFTER name;
DESC  forums;

ALTER TABLE forums CHANGE test new_test TEXT;

ALTER TABLE forums CHANGE new_test new_test INT(5);

ALTER TABLE forums DROP new_test;

CREATE TABLE tbl(
  id INT(11) NOT NULL DEFAULT 5,
  cat_id INT(11) DEFAULT NULL
);

DESC tbl;
INSERT INTO tbl VALUE (10,20);
INSERT INTO tbl (id) VALUE (11);
INSERT INTO tbl (cat_id, id ) VALUE (10,20);
INSERT INTO tbl ( ) VALUE ();

INSERT INTO tbl SET id = 50, cat_id = 100;

SELECT * FROM tbl;

