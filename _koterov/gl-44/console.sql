CREATE DATABASE IF NOT EXISTS phpbook
  DEFAULT CHARSET UTF8;

SHOW DATABASES;
USE phpbook;
SHOW TABLES;

CREATE TABLE glava44 (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TEXT NOT NULL ,
  PRIMARY KEY (id)
);

INSERT INTO glava44 VALUES
  (NULL ,'C++'),
  (NULL ,'Pascal'),
  (NULL ,'Perl'),
  (NULL ,'PHP'),
  (NULL ,'C#'),
  (NULL ,'Visual Basic'),
  (NULL ,'BASH'),
  (NULL ,'Python'),
  (NULL ,'Rybu'),
  (NULL ,'SQL'),
  (NULL ,'Fortran'),
  (NULL ,'JavaScript'),
  (NULL ,'Lua'),
  (NULL ,'UML'),
  (NULL ,'Java');

SELECT * FROM glava44;
