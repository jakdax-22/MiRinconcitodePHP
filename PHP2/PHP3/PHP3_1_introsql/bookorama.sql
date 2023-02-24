drop database  if exists bookorama;


create database bookorama;
use bookorama;
CREATE TABLE customers (
  customerid INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT  ,
  name VARCHAR(50)  NOT NULL  ,
  address VARCHAR(50)  NOT NULL  ,
  city VARCHAR(50)  NOT NULL  ,
PRIMARY KEY(customerid))  
;




CREATE TABLE orders (
  orderid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  customerid INTEGER UNSIGNED NOT NULL  ,
  amount DECIMAL(6,2)  ,
  donat DateTime NOT NULL   ,
PRIMARY KEY(orderid));



CREATE TABLE books(
  isbn VARCHAR(50) NOT NULL   ,
  author VARCHAR(50)  ,
  title VARCHAR(50)    ,
  price DECIMAL(5,2)    ,
PRIMARY KEY(isbn));




CREATE TABLE order_items (
  orderid INTEGER UNSIGNED NOT NULL  ,
  isbn INTEGER UNSIGNED  NOT NULL  ,
  Numero VARCHAR(50) NOT NULL    ,
  quantity Tinyint UNSIGNED	,
PRIMARY KEY(orderid, isbn));




CREATE TABLE books_reviews (
  isbn VARCHAR(50) NOT NULL	,
  review VARCHAR(50)	,
PRIMARY KEY (isbn));
