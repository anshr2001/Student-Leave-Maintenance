CREATE TABLE `student`.leavedetails
(
leavestartdate DATE NOT NULL,
numdays INT,

leavetype VARCHAR(40),
studentroll VARCHAR(40) NOT NULL,
status_leave VARCHAR(40),

PRIMARY KEY(leavestartdate,studentroll),
FOREIGN KEY (studentroll) REFERENCES studentdetails(studentroll)
);

INSERT INTO `student`.leavedetails VALUES ('2021-04-01',3,'Medical Leave','cse18206','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-07',2,'Emergency Leave','cse18435','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-04-10',4,'Family Leave','cse18206','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-15',2,'On-Duty Leave','cse18435','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-05-01',3,'Family Leave','cse18206','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-03',2,'Emergency Leave','cse18012','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-04-11',3,'Family Leave','cse18132','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-06',2,'Medical Leave','cse18206','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-04-16',2,'On-Duty Leave','cse18132','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-19',2,'Family Leave','cse18201','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-04-13',2,'Medical Leave','cse18132','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-21',1,'On-Duty Leave','cse18201','Accepted');


INSERT INTO `student`.leavedetails VALUES ('2021-04-14',2,'Medical Leave','cse18201','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-05-10',4,'Family Leave','cse18435','Accepted');

INSERT INTO `student`.leavedetails VALUES ('2021-05-10',1,'On-Duty Leave','cse18012','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-04-08',6,'Family Leave','cse18132','Rejected');

INSERT INTO `student`.leavedetails VALUES ('2021-04-21',3,'Family Leave','cse18206','Accepted');
INSERT INTO `student`.leavedetails VALUES ('2021-06-16',2,'Family Leave','cse18012','Pending');

INSERT INTO `student`.leavedetails VALUES ('2021-06-05',2,'On-Duty Leave','cse18201','Pending');
INSERT INTO `student`.leavedetails VALUES ('2021-06-06',1,'Medical Leave','cse18265','Pending');

INSERT INTO `student`.leavedetails VALUES ('2021-06-21',4,'Family Leave','cse18244','Pending');
INSERT INTO `student`.leavedetails VALUES ('2021-06-16',2,'On-Duty Leave','cse18206','Pending');

INSERT INTO `student`.leavedetails VALUES ('2021-06-21',3,'Medical Leave','cse18203','Pending');
INSERT INTO `student`.leavedetails VALUES ('2021-06-15',1,'On-Duty Leave','cse18132','Pending');

INSERT INTO `student`.leavedetails VALUES ('2021-07-01',3,'Family Leave','cse18206','Pending');
INSERT INTO `student`.leavedetails VALUES ('2021-06-21',2,'On-Duty Leave','cse18201','Pending');

INSERT INTO `student`.leavedetails VALUES ('2021-06-18',2,'On-Duty Leave','cse18132','Pending');
INSERT INTO `student`.leavedetails VALUES ('2021-06-05',3,'Emergency Leave','cse18063','Pending');

SELECT * FROM `student`.leavedetails;

