CREATE TABLE customers(
customerid int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passcode VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admin_Table(
adminid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passcode VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE advertisers_Table(
advertisersid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar (50) NOT NULL UNIQUE,
pascode varchar (50) NOT NULL,
firstname varchar (50),
lastname varchar(50),
phonenumber varchar (50) UNIQUE,
emailaddress varchar(50) UNIQUE,
salonaddress varchar(50) UNIQUE,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP   
);

CREATE TABLE advertisers_ads(
adsid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
company varchar(50) NOT NULL UNIQUE,
emailAddress varchar(50) NOT NULL UNIQUE,
phoneNumber varchar (50) NOT NULL UNIQUE,
descrp varchar(80) NOT NULL,
location varchar(50) NOT NULL UNIQUE,
tradingDays varchar(50) NOT NULL,
openHrs varchar(50) NOT NULL,
closingHrs varchar(50) NOT NULL,
address varchar(50)  NOT NULL UNIQUE,
city  varchar(50) NOT NULL,
province varchar(50) NOT NULL,
business_im varchar(50)  NOT NULL UNIQUE,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE adsimages (
imagesid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
caption VARCHAR(45) NOT NULL,
images LONGBLOB NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
adsid int NOT NULL,
FOREIGN KEY (adsid) REFERENCES advertisers_ads(adsid)
);

CREATE TABLE booking_table(
booking_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
title varchar(50) NOT NULL,
emailaddress varchar(50) NOT NULL UNIQUE,
phonenumber varchar (50) NOT NULL UNIQUE,
bmessage varchar (80) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
customerid int NOT NULL,
FOREIGN KEY (customerid) REFERENCES customer_Table(customerid)
);

CREATE TABLE payment(
paymentid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
amount int(10) NOT NULL,
category varchar(50) NOT NULL,
duration varchar(50) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
advertisersid int NOT NULL,
FOREIGN KEY (advertisersid) REFERENCES advertisers_Table(advertisersid)
);

CREATE TABLE comment_table(
commentid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
comment varchar(80),
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
customerid INT NOT NULL,
FOREIGN KEY (advertisersid) REFERENCES advertisers_Table(advertisersid)
);

CREATE TABLE ads_status(
ads_statusid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
adsstatus varchar(50) NOT NULL,
membership_status varchar(80) NOT NULL,
comment reviews varchar(80) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
adminid INT NOT NULL,
FOREIGN KEY (adminid) REFERENCES admin_Table(adminid)
);






