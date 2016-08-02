/*
Created		25. 05. 2016
Modified		1. 06. 2016
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/




Create table users (
	id_users Int NOT NULL AUTO_INCREMENT,
	first_name Varchar(40),
	last_name Varchar(60),
	email Varchar(50) NOT NULL,
	pass Varchar(100) NOT NULL,
	admin Int NOT NULL DEFAULT 0,
 Primary Key (id_users)) ENGINE = MyISAM;

Create table chillis (
	id_chillis Int NOT NULL AUTO_INCREMENT,
	chili_name Varchar(100) NOT NULL,
	chili_scoville Varchar(50) NOT NULL,
	chili_description Text NOT NULL,
	chili_picture_url Varchar(200) NOT NULL,
	id_users Int NOT NULL,
	id_sorts Int NOT NULL,
 Primary Key (id_chillis)) ENGINE = MyISAM;

Create table sorts (
	id_sorts Int NOT NULL AUTO_INCREMENT,
	sort_name Varchar(70) NOT NULL,
	sort_description Text NOT NULL,
 Primary Key (id_sorts)) ENGINE = MyISAM;

Create table comments (
	id_comments Int NOT NULL AUTO_INCREMENT,
	comment Text,
	date_added Timestamp,
	id_users Int,
	id_chillis Int,
	id_blog Int,
 Primary Key (id_comments)) ENGINE = MyISAM;

Create table blog (
	id_blog Int NOT NULL AUTO_INCREMENT,
	blog_title Varchar(120) NOT NULL,
	blog_content Text NOT NULL,
	date_added Timestamp NOT NULL,
 Primary Key (id_blog)) ENGINE = MyISAM;

Create table blog_users (
	id_blog_users Int NOT NULL AUTO_INCREMENT,
	id_users Int NOT NULL,
	id_blog Int NOT NULL,
 Primary Key (id_blog_users)) ENGINE = MyISAM;









