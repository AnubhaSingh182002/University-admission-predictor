create database cpredictor1;
use cpredictor1;

create table siteuser
(
username varchar(30) primary key,
pwd varchar(50),
dob date,
gender varchar(6),
hintq varchar(255),
hinta varchar(255),
emailadd varchar(50),
smsno varchar(15),

);
insert into siteuser values('harish','harish','1989-12-4','male','Be','php','harish@gmail.com','7415758615');
insert into siteuser values('pankaj','pankaj','1990-12-5','male','Be','php','pankaj@gmail.com','8602768216');


create table college
(
cid int(5) primary key auto_increment,
cname varchar(30),
address varchar(200),
city varchar(30),
zipcode varchar(30),
contact varchar(20),
stream varchar(70)


);


create table cutoff
(
id int(5) primary key auto_increment,
college varchar(30),

stream varchar(30),
year varchar(10),
cutoff varchar(30) 
);

create table info
(
username varchar(40) primary key,

stream varchar(80),
marks varchar(30)
);


create table feedback
(
feedbackid int(5) primary key auto_increment,
name varchar(30),
mobileno varchar(30),
email varchar(30),
date varchar(30),
ymsg varchar(200)
);

insert into feedback values('','pankaj','8602768216','pankaj@gmail.com','12-6-2016','welcome');





