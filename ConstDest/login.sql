create database user;
use user;
CREATE TABLE account (
    ID int PRIMARY KEY,
    email varchar(30),
    password int
);

INSERT INTO account 
  VALUES (1, 'lucho@gmail.com', 123);