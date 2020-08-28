
customer_Table(
customerid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar (50),
pascode varchar (50),
regDate DATE 
)

admin_Table(
adminid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar (50),
pascode varchar (50),
regDate DATE   
)

advertisers_Table(
advertisersid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar (50),
pascode varchar (50),
firstname varchar (50)
phonenumber varchar (50)
lastname varchar(50)
emailaddress varchar(50)
salonaddress varchar(50)
regDate DATE   
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






