
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
adsid
title 
company/salonname
phonenumber
emailaddress
descrp 
price 
province 
city 
salonaddress 
);

CREATE TABLE adsimages (
imagesid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
caption VARCHAR(45) NOT NULL,
images LONGBLOB NOT NULL,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)

adsimages(
adimgid 
images 
adsid 
)

booking_table(
booking_id
title 
emailaddress
phonenumber
bmessage
)

payment(
paymentid
amount
category
durationd
paymentdate
)

comment_table
(
    commentid
    comment 
    comentdate
)
ads_status(
ads_statusid
adsstatus 
membership_status
comment reviews
)






