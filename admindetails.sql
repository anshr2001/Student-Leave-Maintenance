CREATE TABLE `student`.admindetails(
adminid VARCHAR(40) NOT NULL,
adminpassword VARCHAR(40),
adminname VARCHAR(40),
adminphone_no BIGINT,
adminemail VARCHAR(40),
secanswer1 VARCHAR(200),
secanswer2 VARCHAR(200),

PRIMARY KEY(adminid) 
);
INSERT INTO `student`.admindetails VALUES ('Arun@c12','Arun_se_c','C Arun Kumar',6302531481,'arunkumar2021@gmail.com','Data Structures','Hyderabad');
INSERT INTO `student`.admindetails VALUES ('Manu@amrita','Manu@2021','Manu Madhavan',7736735850,'manu_amrita@gmail.com','Database Management Systems','Chennai');

INSERT INTO `student`.admindetails VALUES ('Senthil@1990','Senthil_amrita','Senthil Kumar',9303425681,'senthil_cbe@gmail.com','Algorithms','Trichy');
INSERT INTO `student`.admindetails VALUES ('Prashanth@2020','prashanth_1991','Prashanth Nair',9943984483,'prashanth_amrita@gmail.com','Computer Organization','Coimbatore');

INSERT INTO `student`.admindetails VALUES ('Govindarajan@2018','govind@1992','Govindarajan',9047610726,'govindarajan_2018@gmail.com','Compiler Design','Mumbai');
INSERT INTO `student`.admindetails VALUES ('Suchitra@2009','Suchithra_1990','Suchithra',9952597938,'suchithra_2000@gmail.com','Open Lab Python','Chennai');

INSERT INTO `student`.admindetails VALUES ('Sabarishn@cse','sabarish_cse_2000','Sabarish',9486245160,'sabarish_cse@gmail.com','Computer Programming','Coimbatore');

SELECT * FROM `student`.admindetails;