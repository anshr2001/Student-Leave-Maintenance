CREATE TABLE `student`.upload
(
studentroll VARCHAR(40) NOT NULL,
leavestartdate DATE NOT NULL,

doc VARCHAR(40),

PRIMARY KEY(studentroll,leavestartdate),
FOREIGN KEY (studentroll) REFERENCES studentdetails(studentroll)
);