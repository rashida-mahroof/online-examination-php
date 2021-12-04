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
  `s_logid` int(10) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `answer` */

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `colid` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `logid` int(10) NOT NULL,
  PRIMARY KEY (`colid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `colleges` */

insert  into `colleges`(`colid`,`college_name`,`place`,`city`,`post`,`pin`,`phone`,`email_id`,`logid`) values (1,'ssm','tirur','thk','tirur',98889,1234567890,'htfs@tdft.com',0),(2,'ssm','tirur','thk','tirur',98889,1234567890,'htfs@tdft.com',0),(3,'ssm','tirur','thk','tirur',98889,1234567890,'htfs@tdft.com',4),(4,'kyhss ','athavanad','tirur','asgk',12345,987654339,'bh@fgh',5);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`cid`,`company_name`,`place`,`city`,`post`,`pin`,`email_id`,`contact_no1`,`contact_no2`,`website`,`logid`) values (1,'abc','clt','tgh','dfgh',12334,'as@gm','234456','','asdff',0),(2,'riss','clt','cvbb','asdfg',1234,'riss@f','23456','','123',6),(3,'riss','clt','cvbb','asdfg',1234,'riss@f','23456','12345678','123',7);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  `c_logid` int(10) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`d_id`,`d_name`,`c_logid`) values (1,'civil',0),(2,'omputer',0),(3,'Maths',2),(4,'Chemistry',2);

/*Table structure for table `exam` */

DROP TABLE IF EXISTS `exam`;

CREATE TABLE `exam` (
  `examid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`examid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exam` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `logid` int(10) NOT NULL,
  `feedback` varchar(40) NOT NULL,
  `date` varchar(10) NOT NULL,
  `company_lid` int(10) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fid`,`logid`,`feedback`,`date`,`company_lid`) values (1,10,'good','12-10-2917',6),(2,11,'bad','12-10-1245',7);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`logid`,`user_name`,`password`,`u_type`) values (1,'admin','admin','admin'),(2,'college','college','college'),(3,'c','cc','college'),(4,'jfgdghsjd','qwerty','college'),(5,'bh@fgh','123','college'),(6,'riss','123','company'),(7,'riss@f','12344','company'),(8,'as@gmail.com','123','student'),(10,'as@gmail.com','345','student'),(13,'student','student','student');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `n_date` varchar(20) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`nid`,`content`,`n_date`) values (1,'qeetyyiuoi;hfgf','2017-11-24'),(2,'qrewytiuthf\r\nhjmk,l.;\r\ndfghm,.','2017-11-24'),(3,'exams are temperorily postponed ','2017-11-27');

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `c_logid` int(10) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `op_a` varchar(100) NOT NULL,
  `op_b` varchar(100) NOT NULL,
  `op_c` varchar(100) NOT NULL,
  `op_d` varchar(100) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `mark` int(10) NOT NULL,
  `time_duration` int(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `rqid` int(11) NOT NULL AUTO_INCREMENT,
  `colid` int(10) NOT NULL,
  `c_logid` int(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`rqid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `requests` */

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
  `vid` int(10) NOT NULL,
  `s_logid` int(10) NOT NULL,
  `temp_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `selected_students` */

/*Table structure for table `student_list` */

DROP TABLE IF EXISTS `student_list`;

CREATE TABLE `student_list` (
  `onlineexamid` int(11) NOT NULL AUTO_INCREMENT,
  `examid` int(10) NOT NULL,
  `studid` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `percentage` varchar(10) NOT NULL,
  PRIMARY KEY (`onlineexamid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student_list` */

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
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`sid`,`first_name`,`last_name`,`email`,`place`,`city`,`post`,`pin`,`gender`,`mobile`,`c_logid`,`d_id`,`semester`,`Photo`,`logid`) values (1,'asna','jasi','aj@gmail.com','tirur','thkmry','port',12345,'female',987654321,0,0,'6','',0),(2,'ras','has','as@gmail.com','asdf','tirur','23445',5432,'female',98765432,2,4,'3','',10),(3,'ras','has','as@gmail.com','asdf','tirur','23445',5432,'female',98765432,2,4,'3','',11),(4,'tgd','dfghj','sdjkl','sdfgk',',dfghjk','ghj',234567,'male',23456789,2,3,'5','',12),(5,'ghjk','cvbnm,','fghjkl','hdfrguthj','vfdfyreiugfgbg','jhfr7gytrjgnv',31324,'male',2147483647,2,3,'4','',13);

/*Table structure for table `vacancies` */

DROP TABLE IF EXISTS `vacancies`;

CREATE TABLE `vacancies` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(50) NOT NULL,
  `no_vacancies` int(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `cid` int(10) NOT NULL,
  `vdate` varchar(20) NOT NULL,
  `basic_pay` varchar(30) NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `vacancies` */

insert  into `vacancies`(`vid`,`post`,`no_vacancies`,`qualification`,`cid`,`vdate`,`basic_pay`,`file`) values (1,'tie',3,'hhjj',0,'2017-11-24','55','gjhbhghj'),(2,'eryjui',5,'sdfghjki',0,'','3456','no image'),(3,'fgh',3,'sdfghjk',0,'','65655','no image');

/*Table structure for table `vacancy_questions` */

DROP TABLE IF EXISTS `vacancy_questions`;

CREATE TABLE `vacancy_questions` (
  `qsid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  PRIMARY KEY (`qsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vacancy_questions` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
