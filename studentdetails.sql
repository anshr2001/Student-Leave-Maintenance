CREATE TABLE `student`.studentdetails(
studentroll VARCHAR(40) NOT NULL,
studentid VARCHAR(40) NOT NULL,
studentpassword VARCHAR(40),
studentname VARCHAR(40),
gender VARCHAR(10),
age INT,
phone_no BIGINT,
pemail VARCHAR(40),
secanswer1 VARCHAR(200),
secanswer2 VARCHAR(200),

PRIMARY KEY(studentroll,studentid) 
);
INSERT INTO `student`.studentdetails VALUES ('cse18206','Harsha2001','anshr2001','Sreeharsha','Male',20,8885488509,'anshr2001@gmail.com','Jersey','Bajaj');
INSERT INTO `student`.studentdetails VALUES ('cse18012','Sanju2000','sanju@2000','Sanjay','Male',22,6303879214,'sanju_reddy@gmail.com','Bahubali','Honda Shine');

INSERT INTO `student`.studentdetails VALUES ('cse18132','Sankeerth1829','krishna_1829','Krishna Sankeerth','Male',21,6303849361,'kkrishna1829@gmail.com','Bigil','Ducati');
INSERT INTO `student`.studentdetails VALUES ('cse18435','Kushagra2001','kushkumar2001','Kushagra Kumar','Male',20,8467425451,'kushagraA@gmail.com','Arjun Reddy','Yamaha');

INSERT INTO `student`.studentdetails VALUES ('cse18346','Roshnic12','roshni','roshni','Female',23,9864512316,'roshnic12se@gmail.com','Drishyam2','Suzuki');
INSERT INTO `student`.studentdetails VALUES ('cse18049','Sairam_2000','jeyakumar_sairam','Sai Ram','Male',19,9494957676,'sairam2000@gmail.com','Family Man','Yamaha');

INSERT INTO `student`.studentdetails VALUES ('cse18436','Adityasai36','aditya_201836','Aditya Sai','Male',20,7330797757,'adityasai@gmail.com','World Famous Lover','Triumph');
INSERT INTO `student`.studentdetails VALUES ('cse18070','Shashank_070','krishna@shashank','Krishna Shashank','Male',20,9381435242,'shashi_2000@gmail.com','Maharshi','Duke');

INSERT INTO `student`.studentdetails VALUES ('cse18063','Revanth_2000','revu@2000','Revanth','Male',20,7330797757,'revanth2000@gmail.com','Radhe Shyam','KTM');
INSERT INTO `student`.studentdetails VALUES ('cse18144','Sai_sudhamsh','sudhamsh@2001','Sai Sudhamsh','Male',18,7331107883,'saisudhamsh999@gmail.com','Janatha Garage','Activa');

INSERT INTO `student`.studentdetails VALUES ('cse18458','Harrsha_405','sree_harrsha','Harrsha','Male',20,9381218454,'sreeharrsha@gmail.com','Ala Vaikunthapuram lo','Kawasaki');
INSERT INTO `student`.studentdetails VALUES ('cse18201','Abhinav@201','Abhinav@777','Abhinav Auduru','Male',21,7893563777,'abhinav2000@gmail.com','Billa','Bimota');

INSERT INTO `student`.studentdetails VALUES ('cse18265','Akash_265','akash@1999','Venkata Akash','Male',20,6302775438,'akashvenkata@gmail.com','Sarkar','Victory');
INSERT INTO `student`.studentdetails VALUES ('cse18244','Mohan2000','mohan_mahesh','Mohan Reddy','Male',21,6303891306,'mohanreddy@gmail.com','Srimanthudu','Norton');

INSERT INTO `student`.studentdetails VALUES ('cse18203','Abhishek@2000','abhishek_2000','Abhishek','Male',20,8760613883,'abhishek_203@gmail.com','Master','Benelli');
INSERT INTO `student`.studentdetails VALUES ('cse18211','Ashwin007','ashwin_nair_007','Ashwin Nair','Male',21,9818166661,'ashwinnair20000@gmail.com','Darbar','Royal Enfield');

INSERT INTO `student`.studentdetails VALUES ('cse18232','Krishna@232','Krishna_1232','Kavuri Krishna','Male',20,7358229441,'krishnakavuri1829@gmail.com','Thadam','Moto Guzzi');
INSERT INTO `student`.studentdetails VALUES ('cse18248','Vijay_1720','vijay@1720','Vijay Kumar','Male',22,9940069695,'vijaykumar2000@gmail.com','Chennai Express','Suzuki');

INSERT INTO `student`.studentdetails VALUES ('cse18239','Nani@1984','Nani@2008','Naveen Babu','Male',24,6380154017,'nani_1984@gmail.com','Gentleman','BMW');
INSERT INTO `student`.studentdetails VALUES ('cse18003','Sudhamshu003','sudhamshu_2000','Sudhamshu Akula','Male',21,9494996474,'sudhamshu1999@gmail.com','Soorarai Pottru','Ducati');

SELECT * FROM `student`.studentdetails;