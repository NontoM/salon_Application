
customer_Table(
customerid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passcode VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)

admin_Table(
adminid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passcode VARCHAR(255) NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)

advertisers_Table(
advertisersid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar (50) NOT NULL UNIQUE,
pascode varchar (50) NOT NULL,
firstname varchar (50),
phonenumber varchar (50) UNIQUE,
lastname varchar(50),
emailaddress varchar(50) UNIQUE,
salonaddress varchar(50),
created_at DATETIME DEFAULT CURRENT_TIMESTAMP   
)

advertisers_ads(
adsid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
title varchar(50),
company/salonname varchar(50) UNIQUE,
phonenumber varchar (50) NOT NULL UNIQUE,
emailaddress varchar(50) NOT NULL UNIQUE,
descrp varchar(80) NOT NULL,
price int(50) NOT NULL,
province  varchar(50) NOT NULL,
city varchar(50) NOT NULL,
salonaddress varchar(50)  NOT NULL UNIQUE,
);

adsimages(
adimgid 
images 
adsid 
)

booking_table(
booking_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
title varchar(50) NOT NULL,
emailaddress varchar(50) NOT NULL UNIQUE
phonenumber varchar (50) NOT NULL UNIQUE,
bmessage varchar (80) NOT NULL,
)

payment(
paymentid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
amount int(10) NOT NULL,
category varchar(50) NOT NULL,
duration varchar(50) NOT NULL
paymentdate DATETIME DEFAULT CURRENT_TIMESTAMP 
)

comment_table
(
    commentid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    comment varchar(80),
    comentdate DATETIME DEFAULT CURRENT_TIMESTAMP 
)
ads_status(
ads_statusid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
adsstatus varchar(50) NOT NULL,
membership_status varchar(80) NOT NULL,
comment reviews varchar(80) NOT NULL,
)






