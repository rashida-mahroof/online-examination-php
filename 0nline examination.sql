/*
SQLyog Community Edition- MySQL GUI v8.03 
MySQL - 5.6.17 : Database - online_examination
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_examination` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `online_examination`;

/*Table structure for table `answer` */

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `ansid` int(10) NOT NULL AUTO_INCREMENT,
  `onlineexamid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `mark` int(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

/*Data for the table `answer` */

insert  into `answer`(`ansid`,`onlineexamid`,`qid`,`answer`,`mark`) values (1,1,1,'',0),(2,1,2,'b',0),(3,1,3,'b',3),(4,1,4,'d',0),(5,1,6,'',0),(6,2,1,'b',0),(7,2,2,'a',5),(8,2,3,'b',3),(9,2,5,'a',0),(10,2,6,'d',0),(11,4,1,'b',0),(12,4,2,'a',5),(13,4,3,'c',0),(14,4,5,'a',0),(15,4,6,'b',0),(16,5,2,'d',0),(17,5,4,'b',0),(18,5,5,'a',0),(19,5,6,'a',0),(20,6,8,'a',0),(21,6,9,'c',0),(22,6,10,'b',0),(23,6,12,'d',0),(24,7,8,'a',0),(25,7,9,'c',0),(26,7,10,'b',0),(27,7,11,'c',0),(28,8,1,'b',0),(29,8,2,'a',5),(30,8,3,'d',0),(31,8,4,'c',4),(32,8,5,'d',9),(33,8,6,'c',3),(34,9,13,'c',5),(35,9,14,'d',0),(36,9,15,'c',8),(37,9,16,'a',0),(38,9,18,'b',0),(39,10,1,'b',0),(40,10,2,'a',5),(41,10,3,'d',0),(42,10,4,'a',0),(43,10,5,'c',0),(44,10,6,'b',0),(45,11,1,'a',0),(46,11,2,'b',0),(47,11,3,'c',0),(48,11,4,'b',0),(49,11,6,'d',0),(50,12,1,'b',0),(51,12,2,'a',5),(52,12,3,'c',0),(53,12,4,'d',0),(54,12,6,'a',0),(55,13,1,'b',0),(56,13,2,'a',5),(57,13,3,'d',0),(58,13,4,'c',4),(59,13,6,'d',0),(60,14,1,'b',0),(61,14,2,'a',5),(62,14,3,'b',3),(63,14,4,'c',4),(64,14,5,'d',9),(65,14,6,'b',0),(66,15,1,'b',0),(67,15,2,'a',5),(68,15,3,'d',0),(69,15,4,'d',0),(70,15,5,'d',9),(71,16,1,'b',0),(72,16,2,'b',0),(73,16,3,'b',3),(74,16,4,'b',0),(75,16,5,'b',0),(76,16,6,'d',0),(77,17,1,'b',0),(78,17,2,'b',0),(79,17,3,'b',3),(80,17,5,'b',0),(81,17,6,'b',0),(82,18,1,'b',0),(83,18,2,'b',0),(84,18,3,'b',3),(85,18,4,'b',0),(86,18,5,'b',0),(87,18,6,'b',0),(88,19,19,'b',8),(89,19,20,'b',0),(90,19,21,'b',10),(91,19,22,'b',0),(92,20,12,'d',5),(93,20,13,'d',0),(94,20,14,'a',0),(95,20,15,'a',0),(96,20,16,'d',0),(97,20,17,'b',2),(98,20,41,'c',0),(99,20,43,'b',2),(100,20,44,'a',2),(101,20,47,'a',0),(102,20,48,'b',0),(103,20,49,'b',0),(104,20,50,'d',0),(105,20,51,'b',0),(106,20,52,'b',0),(107,20,56,'d',0),(108,20,57,'c',0),(109,21,16,'d',0),(110,21,17,'b',2),(111,21,41,'b',2),(112,21,42,'b',0),(113,21,43,'b',2),(114,21,44,'a',2),(115,21,47,'b',0),(116,21,48,'b',0),(117,21,49,'b',0),(118,21,50,'d',0),(119,21,51,'d',8),(120,21,52,'d',0),(121,21,56,'d',0),(122,21,57,'d',0),(123,22,12,'d',5),(124,22,13,'a',2),(125,22,14,'b',2),(126,22,15,'b',3),(127,22,16,'a',0),(128,22,17,'b',2),(129,22,41,'b',2),(130,22,42,'d',2),(131,22,43,'b',2),(132,22,44,'a',2),(133,22,47,'b',0),(134,22,50,'b',0),(135,22,51,'d',8),(136,22,52,'d',0),(137,22,56,'d',0),(138,22,57,'d',0),(139,23,12,'d',5),(140,23,13,'d',0),(141,23,14,'c',0),(142,23,47,'d',5),(143,23,48,'b',0),(144,23,49,'c',10),(145,23,50,'d',0),(146,23,51,'c',0),(147,23,52,'b',0),(148,23,53,'d',0);

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `colid` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `logid` int(10) NOT NULL,
  PRIMARY KEY (`colid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `colleges` */

insert  into `colleges`(`colid`,`college_name`,`place`,`city`,`post`,`pin`,`phone`,`email_id`,`logid`) values (1,'ssm','tirur','tirur','thekkummuri',123456,'1234567890','ssm@gmail.com',2),(2,'tmg','tanur','tanur','tanur',123456,'0987654321','tmg@gmail.com',5),(3,'gptc college of engineering ','trissur','trissur','trissur',123456,'46357845798','gptc@gmai.com',7),(12,'mes college marampally','aluva','ernamkulam','aluva',123445,'87878787877','jumijumana44@gmail.com',25),(13,'bykvhss','valavannur','valavannur','kalpakancheri',456678,'9090909090990','byk@gmail.com',28),(14,'malabar','io','yu','jkl',787878,'9999999999','kil@gmail.com',32),(15,'MES engineering college','Thangalpadi','Kuttippuram','Kuttippuram',423145,'90898767213','mes123@gmail.com',37);

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `pin` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no1` varchar(20) NOT NULL,
  `contact_no2` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `logid` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`cid`,`company_name`,`place`,`city`,`post`,`pin`,`email_id`,`contact_no1`,`contact_no2`,`website`,`logid`) values (1,'bluegen','calicut','caliur','mavoor',123456,'bluegen@gmail.com','1234567890','1234567890','wrdfdgedede',3),(5,'riss','clt','clt','clt',123456,'rashidamahroofp@gmail.com','19000000000000','10000000000001','fr',21),(9,'techmosis','thazhepalam','thazhepalam','tirur',222333,'tech@gmail.com','777777777777','22222222222','ju',29),(10,'technopark','kochi','kochi','kochi',123456,'techno@gmail.com','1234567890','1234567890','nj',33),(11,'Regency Group of Corporate Management','Dubai','Alkoos','Alkoos',123765,'regency@gmail.com','785612349087','456789876541','www.regency.com',38);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  `c_logid` int(10) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`d_id`,`d_name`,`c_logid`) values (1,'computer',2),(2,'computer',5),(3,'civil',7),(4,'mechanical',7),(5,'physics',14),(6,'Architecture',16),(7,'Webdesigning',16),(8,'Hote management',16),(9,'english',25),(10,'violin',28),(11,'guitar',28),(12,'music',28),(13,'classical',28),(14,'computer',32),(15,'civil',32),(16,'Chemistry',32),(17,'Civil',28),(18,'Computer',37),(19,'Mechanical',37);

/*Table structure for table `exam` */

DROP TABLE IF EXISTS `exam`;

CREATE TABLE `exam` (
  `examid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `clid` int(10) DEFAULT NULL,
  PRIMARY KEY (`examid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `exam` */

insert  into `exam`(`examid`,`vid`,`date`,`clid`) values (1,1,'2018-03-20',2),(2,1,'2018-03-20',5),(3,1,'2018-03-20',7),(4,2,'2018-03-21',16),(5,4,'2018-03-21',28),(6,4,'2018-03-22',28),(7,5,'2018-03-23',32),(8,2,'2018-03-26',2),(9,6,'2018-03-26',2),(10,7,'2018-03-26',2),(11,9,'2018-03-26',28),(12,11,'2018-04-05',37),(13,11,'2018-04-05',37),(14,13,'2018-04-06',37);

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `logid` int(10) NOT NULL,
  `feedback` varchar(40) NOT NULL,
  `date` varchar(10) NOT NULL,
  `company_lid` int(10) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fid`,`logid`,`feedback`,`date`,`company_lid`) values (1,6,'good','2018-03-20',3),(2,6,'kolp','2018-03-20',3),(3,10,'bad.........','2018-03-22',29),(4,10,'awesome,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,','2018-03-22',29),(5,4,'good...','2018-03-24',33),(6,4,'Exam was good','2018-03-24',26);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`logid`,`user_name`,`password`,`u_type`) values (1,'admin','123','admin'),(2,'col1','123','college'),(3,'com1','123','company'),(4,'amal@g.c','123','student'),(5,'tmg@gmail.com','123','college'),(6,'rashimahruu@gmail.com','123','student'),(7,'gptc@gmai.com','123','college'),(8,'kmct@gmail.com','123','college'),(9,'john@gmail.com','123','student'),(10,'stud','123','student'),(11,'jm@gmail.com','006847','college'),(12,'rashidamahroofplp@gmail.com','698818','college'),(13,'bh','117339','college'),(14,'s','123','company'),(15,'col2','123','college'),(16,'col4','123','college'),(17,'col3','123','college'),(18,'kuriyodathasnath@gmail.com','963855','college'),(19,'suhaibathpullattil@gmail.com','123','company'),(20,'rashimahru@gmail.com','123','company'),(21,'jju','498335','company'),(22,'jaseemmahroos786@gmail.com','360226','company'),(23,'stud','123','student'),(24,'mubashiralitpo@gmail.com','505222','company'),(25,'jumijumana44@gmail.com','647996','college'),(26,'rashi@gmail.com','553938','company'),(27,'abb@gmail.com','903329','student'),(28,'college','123','college'),(29,'company','123','company'),(30,'student','123','student'),(31,'student1','123','student'),(32,'jasi','123','college'),(33,'jasii','123','company'),(34,'jas','123','student'),(35,'jum','123','student'),(36,'su','123','student'),(37,'mes123@gmail.com','123','college'),(38,'regency@gmail.com','123','company'),(39,'rashidamahroofpp@gmail.com','123','student'),(40,'mahroofmahru786@gmail.com','123','student'),(41,'suhaibathpul@gmail.com','550386','student');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `n_date` varchar(20) NOT NULL,
  `last_date` varchar(20) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`nid`,`content`,`n_date`,`last_date`) values (4,'New Company Wipro is added ','2018-04-05','2018-04-30'),(5,'The exam for System Administrator of Regency group of companies will be conducted on 10-05-2018..','2018-04-06','2018-04-21');

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `c_logid` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `op_a` varchar(100) NOT NULL,
  `op_b` varchar(100) NOT NULL,
  `op_c` varchar(100) NOT NULL,
  `op_d` varchar(100) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `mark` int(10) NOT NULL,
  `time_duration` int(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`qid`,`c_logid`,`category`,`questions`,`op_a`,`op_b`,`op_c`,`op_d`,`answer`,`mark`,`time_duration`) values (1,29,'Computer','what is raid','redundant array of independend disc','redundant array of indirect disc','reduced array of indirect disc','None of these','a',5,30),(2,29,'Computer','which of the following is more suitable for structured program','pascal','basic','fortran','pl/1','a',10,25),(3,29,'Computer','The brain of any computer system','ALU','memory','CPU','control unit','c',6,15),(4,29,'Computer','data devision is the third devision of a ________program','COBOL','BASIC','FORTH','PASCAL','a',9,20),(5,29,'Computer','Which of the following is not an object oriented language','JAVA','CPP','C','PHP','c',8,10),(6,29,'Computer','What could causes a fixed disc error','no CD installed','bad ram','show processor','incorrect cmos settings\r\n','d',7,30),(7,29,'Computer','Which is the client side programming language ','php','css','html','javascript','d',6,15),(8,29,'GK','if the radius of a circle is diminished by 10%, then its area is diminished by _____','10%','19%','20%','36%','b',10,40),(9,29,'GK','The two colors seen at the extreme end of php chart\r\n','red and blue','red and green','green and blue','orange and grenn','a',3,15),(10,29,'GK','Which one among the following has the largest shipyard in india','kolkata','Kochi','Mumbai','VishakaPattanam','b',2,20),(11,29,'GK','x% of y is y% of ?','x/y','2y','x','can\'t be determined','d',5,30),(12,38,'GK','Gopal Krishna Ghokle','Started as a maths teacher and rose to the position of the principalof Ferguson College','Founded the servents of India society','Served as president of the Indian National Congress in 1905','All of he above','d',5,50),(13,38,'GK','The element common to all acidsis _____','hydrogen','carbon','sulpher','oxygon','a',2,20),(14,38,'GK','What is the normal duration of Hockey game','40 Minutes','70 Minutes','75 Minutes','60 Minutes\r\n','b',2,15),(15,38,'GK','Which of the following is not a correct statement?\r\n','One liter of cold air will be heavier than one liter of hot air \r\n','Bats are blind but can fly in the dark because of echolocation \r\n','In human body, Liver stores glucose as glycogen \r\n','Foot and mouth disease of cattle is a viral disease\r\n','b',3,40),(16,38,'GK','Which of the following is a correct set of two official languages of the United Nations?\r\n','Hindi and Chinese \r\n','Arabic and Chinese \r\n','Japanese and Chinese \r\n','Hindi and French\r\n','b',5,20),(17,38,'Computer','Which of the following languages is more suited to a structured program?','cobol','fortran','pascal','c','b',2,20),(41,38,'Computer','A computer assisted method for the recording and analyzing of existing or hypothetical systems is','Data transmission','Data flow','Data processing','None of the above','b',2,20),(42,38,'Computer','	\r\nWhich of the following is not a logical data-base structure?','tree','Relational','network','Chain','d',2,20),(43,38,'Computer','	\r\nIn SQL, which command is used to select data in rows and column from one or more tables?','CHOOSE','SELECT','LIST','BROWSE','b',2,15),(44,38,'Computer','	\r\nThe use of the break statement in a switch statement is','optional','compulsory','not allowed. It gives an error message','to check an error','a',2,15),(45,38,'English','Pick out the most effective word(s) from the given words to fill in the blank to make the sentence meaningfully complete.\r\n\r\n	\r\nFate smiles ...... those who untiringly grapple with stark realities of life.','with','over','on','round','c',2,15),(46,38,'English','Find the correct spelt word.','Adulterate','Adeldurate\r\n','Adulterat','Adultarate','a',3,15),(47,38,'Maths','	\r\nA train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?','120 metres','180 metres','324 metres','150 metres','d',5,30),(48,38,'Maths','	\r\nTwo ships are sailing in the sea on the two sides of a lighthouse. The angle of elevation of the top of the lighthouse is observed from the ships are 30° and 45° respectively. If the lighthouse is 100 m high, the distance between the two ships is:','173 m','200 m','273 m','300 m','c',8,30),(49,38,'Maths','	\r\nTwo students appeared at an examination. One of them secured 9 marks more than the other and his marks was 56% of the sum of their marks. The marks obtained by them are:','39, 30','41, 32','	42, 33','43, 34','c',10,50),(50,38,'Maths','	\r\nIn the first 10 overs of a cricket game, the run rate was only 3.2. What should be the run rate in the remaining 40 overs to reach the target of 282 runs?','6.25','6.5','6.75','7','a',9,30),(51,38,'Maths','	\r\nThe average of 20 numbers is zero. Of them, at the most, how many may be greater than zero?','0','1','10','19','d',8,40),(52,38,'Maths','	\r\nThe difference between simple and compound interests compounded annually on a certain sum of money for 2 years at 4% per annum is Re. 1. The sum (in Rs.) is:','625','630','640','650','a',10,60),(53,38,'Maths','	\r\nIn a certain store, the profit is 320% of the cost. If the cost increases by 25% but the selling price remains constant, approximately what percentage of the selling price is the profit?','30%','70%','100%','250%','b',9,50),(54,38,'Maths','	\r\nIt is being given that (232 + 1) is completely divisible by a whole number. Which of the following numbers is completely divisible by this number?','(216 + 1)','(216 - 1)','(7 x 223)','(296 + 1)','d',10,70),(55,38,'Maths','	\r\nIt was Sunday on Jan 1, 2006. What was the day of the week Jan 1, 2010?','Sunday\r\n','Saturday','Friday','Wednesday','c',8,50),(56,38,'Other','	\r\nWhen these numbers are multiplied, (6 × 103) (5 × 105), the result is','3 × 108','30 × 108','300 × 109','3,000 × 107','b',6,40),(57,38,'Other','	\r\nResistance is measured in','henries','ohms','hertz','watts','b',2,10);

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `rqid` int(11) NOT NULL AUTO_INCREMENT,
  `colid` int(10) NOT NULL,
  `c_logid` int(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `date` date NOT NULL,
  PRIMARY KEY (`rqid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `requests` */

insert  into `requests`(`rqid`,`colid`,`c_logid`,`status`,`date`) values (1,2,3,'Accepted','2018-03-20'),(2,5,3,'Accepted','2018-03-20'),(3,7,3,'Accepted','2018-03-20'),(4,5,14,'Accepted','2018-03-20'),(5,2,14,'Accepted','2018-03-20'),(6,2,19,'Accepted','2018-03-20'),(7,2,20,'Accepted','2018-03-20'),(8,14,3,'Pending','2018-03-20'),(10,14,19,'Pending','2018-03-20'),(11,14,20,'Pending','2018-03-20'),(12,16,3,'Accepted','2018-03-20'),(13,16,14,'Pending','2018-03-20'),(14,16,19,'Pending','2018-03-20'),(15,16,20,'Pending','2018-03-20'),(16,4,20,'Pending','2018-03-21'),(17,4,19,'Pending','2018-03-21'),(18,4,14,'Pending','2018-03-21'),(19,4,3,'Pending','2018-03-21'),(20,25,26,'Accepted','2018-03-21'),(21,28,29,'Accepted','2018-03-21'),(22,28,26,'Pending','2018-03-21'),(23,28,22,'Pending','2018-03-22'),(24,32,33,'Accepted','2018-03-23'),(25,28,3,'Rejected','2018-03-24'),(26,28,14,'Accepted','2018-03-24'),(27,28,19,'Pending','2018-03-24'),(28,28,3,'Pending','2018-03-26'),(29,28,21,'Pending','2018-04-05'),(30,28,33,'Pending','2018-04-05'),(31,37,38,'Accepted','2018-04-05'),(32,37,3,'Pending','2018-04-05');

/*Table structure for table `results` */

DROP TABLE IF EXISTS `results`;

CREATE TABLE `results` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(10) NOT NULL,
  `percentage` int(10) NOT NULL,
  `vid` int(10) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `results` */

/*Table structure for table `selected_students` */

DROP TABLE IF EXISTS `selected_students`;

CREATE TABLE `selected_students` (
  `studid` int(10) NOT NULL AUTO_INCREMENT,
  `examid` int(10) NOT NULL,
  `s_logid` int(10) NOT NULL,
  `temp_pass` varchar(50) NOT NULL DEFAULT 'No data',
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `selected_students` */

insert  into `selected_students`(`studid`,`examid`,`s_logid`,`temp_pass`) values (5,1,4,'0427408'),(6,1,23,'0842977'),(7,1,4,'0427408'),(8,1,23,'0842977'),(9,1,4,'0427408'),(10,1,23,'0842977'),(11,1,4,'0427408'),(12,1,23,'0842977'),(13,1,4,'0427408'),(14,1,23,'0842977'),(15,1,4,'0427408'),(16,1,23,'0842977'),(18,8,4,'123'),(19,8,23,'No data'),(20,9,23,'123'),(21,9,4,'exam'),(24,9,31,'exam'),(26,14,40,'exam'),(27,14,41,'No data');

/*Table structure for table `student_list` */

DROP TABLE IF EXISTS `student_list`;

CREATE TABLE `student_list` (
  `onlineexamid` int(11) NOT NULL AUTO_INCREMENT,
  `examid` int(10) NOT NULL,
  `studid` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `percentage` float NOT NULL,
  PRIMARY KEY (`onlineexamid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `student_list` */

insert  into `student_list`(`onlineexamid`,`examid`,`studid`,`status`,`percentage`) values (1,1,4,'Finished',9),(2,2,6,'Finished',25),(3,3,9,'Start',0),(4,3,9,'Finished',16),(5,1,4,'Finished',0),(6,5,30,'Finished',0),(7,5,31,'Finished',0),(8,1,23,'Finished',66),(9,7,34,'Finished',34),(10,1,4,'Finished',16),(11,8,4,'Start',0),(12,8,4,'Start',0),(13,8,4,'Start',0),(14,9,23,'Start',0),(15,9,4,'Start',0),(16,10,23,'Finished',9),(17,10,35,'Finished',9),(18,9,31,'Start',0),(19,11,36,'Finished',55),(21,12,39,'Start',19),(22,12,40,'Start',35),(23,14,39,'Finished',28);

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(20) NOT NULL,
  `c_logid` int(10) NOT NULL,
  `d_id` int(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `logid` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`sid`,`first_name`,`last_name`,`email`,`place`,`city`,`post`,`pin`,`gender`,`mobile`,`c_logid`,`d_id`,`semester`,`Photo`,`logid`,`address`) values (1,'amal','vox','amal@g.c','tirur','turur','tirur',676543,'male',1234567890,2,1,'6','slide_4.jpg',4,'hjklmnop'),(2,'rashi','mahru','rashimahru@gmail.com','kottakkal','kottakkal','kottakkal',0,'female',1234567890,5,2,'6','author2.jpg',6,'km'),(3,'john','mubas','john@gmail.com','tanur','tanur','tanur',123456,'male',1234567890,7,3,'6','course-3.jpg',9,'hu'),(4,'lo','jo','ji@gmail.com','mo','jo','hnu',909090,'male',1234567890,2,1,'6','DSC_0393.JPG',23,'ji'),(5,'vidhya','vox','abb@gmail.com','iA','KLA','la',123444,'female',1234567891,25,9,'6','',27,'sdfghjk'),(6,'mahroof','p','mahroof@gmail.com','mammalipadi','edarikode','edarikode',123456,'male',2147483647,28,12,'6','FB_IMG_1492689390982.jpg',30,'poozhithara'),(7,'ui','gh','g@gmail.com','k','j','j',989898,'male',2147483647,28,12,'6','FB_IMG_1493571348826[1].jpg',31,'j'),(8,'hj','fg','@gmail.com','h','v','t',909090,'male',2147483647,32,14,'6','windows-10-HD-Wallpaper-1-768x432.jpg',34,'k'),(9,'jumana','jumi','kilopp@gmail.com','kilo','pogy','hui',98765,'male',1234567890,28,13,'6','Capture001.png',35,'ku'),(10,'kilo','hy','tg@gmail.com','gt','vy','vtt',123456,'male',1234567890,28,12,'6','',36,'hy'),(11,'mahroof','mahru','rashidamahroofp@gmail.com','Calicut','Calicut','Mavoor',234567,'male',2147483647,37,18,'6','img4.jpg',39,'kalamoothatt'),(12,'Amal','Vox','mahroofmahru786@gmail.com','Edarikode','Kottakkal','Edarikode',676501,'female',2147483647,37,18,'6','img1.jpg',40,'poozhithara'),(13,'ki','ji','suhaibathpul@gmail.com','ug','hu','7guh',123456,'male',1234567809,37,18,'6','img2.jpg',41,'hu');

/*Table structure for table `vacancies` */

DROP TABLE IF EXISTS `vacancies`;

CREATE TABLE `vacancies` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(50) NOT NULL,
  `no_vacancies` int(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `clogid` int(10) NOT NULL,
  `vdate` varchar(20) NOT NULL,
  `basic_pay` varchar(30) NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `vacancies` */

insert  into `vacancies`(`vid`,`post`,`no_vacancies`,`qualification`,`clogid`,`vdate`,`basic_pay`,`file`) values (1,'system admin',27,'diploma',3,'2018-03-31','120000','template_3317.zip'),(2,'Software engineeer',2,'diploma sslc degree',3,'2018-03-31','12000','er.docx'),(3,'ddddddddddddddddd',3,'gg',26,'2018-03-24','33','readme and license.txt'),(5,'developer',3,'diploma',33,'2018-03-26','100000','er.docx'),(6,'developer',6,'diploma',3,'2018-03-30','56666','28 (1).sql'),(7,'Manager',2,'diploma',3,'2018-03-28','20000','28 (2).sql'),(8,'web designer',2,'diploma',29,'2018-04-29','60000','28 (2).sql'),(9,'admin',5,'diploma sslc',29,'2018-03-31','9000','Capture001.png'),(10,'java developer',10,'btech/diploma',29,'2018-03-31','25000','1-50.pdf'),(11,'System Administrator',3,'Diploma+ 2 year experience',38,'2018-05-31','50000','add college.pdf'),(12,'IT Manager',1,'MTech+5 year experience',38,'2018-06-30','100000','RESULT HISTORY.pdf'),(13,'Programmer',4,'diploma',38,'2018-04-09','50000','second.pdf');

/*Table structure for table `vacancy_questions` */

DROP TABLE IF EXISTS `vacancy_questions`;

CREATE TABLE `vacancy_questions` (
  `qsid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  PRIMARY KEY (`qsid`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

/*Data for the table `vacancy_questions` */

insert  into `vacancy_questions`(`qsid`,`vid`,`qid`) values (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(7,3,7),(8,3,7),(9,4,8),(10,4,9),(11,4,10),(12,4,11),(13,4,12),(14,5,13),(15,5,14),(16,5,15),(17,5,16),(18,5,17),(19,5,18),(20,2,1),(21,2,2),(22,2,3),(23,2,4),(24,2,5),(25,2,6),(26,2,1),(27,2,2),(28,2,3),(29,2,4),(30,2,5),(31,2,6),(32,6,1),(33,6,2),(34,6,3),(35,6,4),(36,6,5),(37,6,6),(38,6,1),(39,6,2),(40,6,3),(41,6,4),(42,6,5),(43,6,6),(44,7,1),(45,7,2),(46,7,3),(47,7,4),(48,7,5),(49,7,6),(50,8,8),(51,8,9),(52,8,10),(53,8,11),(54,8,12),(55,9,19),(56,9,20),(57,9,21),(58,9,22),(59,11,47),(60,11,48),(61,11,49),(62,11,50),(63,11,51),(64,11,52),(65,11,17),(66,11,41),(67,11,42),(68,11,43),(69,11,44),(70,11,12),(71,11,13),(72,11,14),(73,11,15),(74,11,16),(75,11,56),(76,11,57),(77,13,47),(78,13,48),(79,13,49),(80,13,50),(81,13,51),(82,13,52),(83,13,53),(84,13,12),(85,13,13),(86,13,14),(87,13,15);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
