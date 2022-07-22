create table facility(
	fac_id int NOT NULL AUTO_INCREMENT,
    fac_name varchar(250) NOT NULL UNIQUE,
    fac_isActive bool default true,
    fac_order int NOT NULL,
    PRIMARY KEY (fac_id)
);

create table location(
	loc_id int NOT NULL AUTO_INCREMENT,
    loc_name varchar(250) NOT NULL UNIQUE,
    loc_code varchar(2) NOT NULL UNIQUE,
    loc_address varchar(1000),
    loc_lat float,
    loc_lon float,
    loc_isActive bool default true,
    loc_order int NOT NULL,
    PRIMARY KEY (loc_id)
);

create table event_audience(
	aud_id int NOT NULL AUTO_INCREMENT,
    aud_code varchar(5),
    aud_name varchar(100),
    aud_isActive bool default true,
    PRIMARY KEY (aud_id)
);

create table event_type(
	evttyp_id int NOT NULL AUTO_INCREMENT,
    aud_id int NOT NULL,
    evttyp_name varchar(100),
    evttyp_isActive bool default true,
    PRIMARY KEY (evttyp_id),
    FOREIGN KEY (aud_id) REFERENCES event_audience(aud_id)
);

create table event_status(
	evtstat_id int NOT NULL AUTO_INCREMENT,
    evtstat_code varchar(4),
    evtstat_description varchar(100),
    evtstat_isActive bool default true,
    PRIMARY KEY (evtstat_id)
);

create table person(
prs_id int NOT NULL auto_increment,
prs_firstName varchar(200),
prs_surname varchar(200),
prs_mobno varchar(15),
prs_position varchar(200),
prs_isActive bool,
PRIMARY KEY(prs_id)
);

create table `user`(
usr_id int NOT NULL auto_increment,
usr_email varchar(250) NOT NULL UNIQUE,
/*prs_id not null,*/ 
usr_isActive bool,
PRIMARY KEY (usr_id)
/*foreign key (prs_id) references person(prs_id)*/
);

create table department(
	dep_id int NOT NULL auto_increment,
    dep_code varchar(5),
    dep_name varchar(100),
    dep_owner int NOT NULL,
    PRIMARY KEY (dep_id),
    FOREIGN KEY (dep_owner) REFERENCES `user`(usr_id)
);

ALTER TABLE `user`
ADD COLUMN dep_id int NOT NULL;

ALTER TABLE `user`
ADD FOREIGN KEY (dep_id) REFERENCES department(dep_id);

CREATE TABLE paymentmethod(
	paymet_id INT NOT NULL auto_increment,
    paymet_name varchar(20) NOT NULL,
    paymet_isActive bool NOT NULL,
    PRIMARY KEY (paymet_id)
);

CREATE TABLE `event`(
	evt_id int NOT NULL AUTO_INCREMENT,
    aud_id int NOT NULL,
    loc_id int NOT NULL,
    dep_id int NOT NULL,
    secdep_id int,
    tertdep_id int,
    evt_owner int NOT NULL, /*Staff person handling event*/
    evt_name varchar(500),
    evt_description TEXT,
    evt_startDate datetime NOT NULL,
    evt_endDate datetime NOT NULL,
    evt_anticipatedParticipant int,
    evt_fee float,
    evt_paymentAmount float,
    paymet_id int,
    evt_invoiceno varchar(30),
    evt_payconf bool,
    
    evt_actpartic_total int,
    evt_actpartic_memb int,
    evt_income float,
    evt_sales bool,
    evt_membs_ads int,
    evt_membs_chl int,
    evt_feedback TEXT,
    
    evt_compName varchar(100),
    evt_compContactPersonName varchar(100),
    evt_compContactPersonEmail varchar(250),
    evt_compContactPersonTel varchar(20),
    evt_compVATNo varchar(30),
    
    evt_createdBy int NOT NULL,
    evt_createdDate datetime NOT NULL,
    evt_lastUpdatedBy int NOT NUll,
    evt_lastUpdatedDate datetime NOT NULL,
    
    PRIMARY KEY(evt_id),
    
    FOREIGN KEY (aud_id) REFERENCES event_audience(aud_id),
    FOREIGN KEY (loc_id) REFERENCES location(loc_id),
    FOREIGN KEY (dep_id) REFERENCES department(dep_id),
    FOREIGN KEY (secdep_id) REFERENCES department(dep_id),
    FOREIGN KEY (tertdep_id) REFERENCES department(dep_id),
    FOREIGN KEY (evt_createdBy) REFERENCES `user`(usr_id),
    FOREIGN KEY (evt_lastUpdatedBy) REFERENCES `user`(usr_id),
    FOREIGN KEY (paymet_id) REFERENCES paymentmethod(paymet_id),
    FOREIGN KEY (evt_owner) REFERENCES `user`(usr_id)
);

CREATE TABLE event_facilities(
	evtfac_id INT NOT NULL AUTO_INCREMENT,
    evt_id INT NOT NULL,
    fac_id INT NOT NULL,
    evtfac_qty INT,
    PRIMARY KEY (evtfac_id),
    FOREIGN KEY (evt_id) REFERENCES `event`(evt_id),
    FOREIGN KEY (fac_id) REFERENCES facility(fac_id)
);



-- My Code:
create table school_name(
	schnm_id int not null auto_increment,
    schnm_name varchar(50) not null,
    schnm_isActive bool default true,
    schnm_order int not null,
    
    primary key (schnm_id)
);

create table school_grade(
	schgr_id int not null auto_increment,
    schgr_name varchar(50) not null,
    schgr_isActive bool default true,
    schgr_order int not null,
    
    primary key (schgr_id)
);

create table school_form(
	sch_id int not null auto_increment,
    sch_startDate datetime not null,
    sch_endDate datetime not null,
    loc_id int not null,
    sch_handler int not null,
    schnm_id int not null,
    schgr_id int not null,
    sch_noOfStudent nvarchar(10) not null,
    sch_teacherName varchar(20) not null,
    sch_teacherNo varchar(10) not null,
    sch_teacherEmail varchar(50) not null,
    sch_donation numeric(6,2) not null,
    sch_sales bool not null,
    sch_isActive bool default true,
    sch_order int not null,
    
    primary key (sch_id),
   
    foreign key (loc_id) references location(loc_id),
	foreign key (sch_handler) references `user`(usr_id),
    foreign key (schnm_id) references school_name(schnm_id),
    foreign key (schgr_id) references school_grade(schgr_id)
);

create table visitor_statistic(
	stat_id int not null auto_increment,
    stat_date datetime not null,
    loc_id int not null,
    stat_totVisitors int not null,
    
    stat_localVist int,
    stat_foreignVist int,
    
    stat_firstVist int,
    stat_repeatVist int,
    
    stat_members int,
    stat_nonMemebers int,
    
    stat_hideBooked int,
    stat_photoHideBooked int,
    stat_tours int,
    stat_sales numeric(6,2) not null,
    
	stat_isActive bool default true,
    stat_order int not null,
    
    primary key (stat_id),
    foreign key (loc_id) references location(loc_id)
);

create table `leave`(
	lev_id int not null auto_increment,
    usr_id int not null,
    lev_startDate datetime not null,
    lev_endDate datetime not null,
    
    primary key (lev_id),
    foreign key (usr_id) references `user`(usr_id)    
);

create table `role`(
	rol_id int not null auto_increment,
    rol_name varchar(20) not null,
    rol_code varchar(5) not null,
	rol_isActive bool default true,
    rol_order int not null,
    
    primary key (rol_id)
);

create table user_role(
	usr_rol_id int not null auto_increment,
    usr_id int not null,
    rol_id int not null,
    usr_rol_isActive bool default true,
    usr_rol_order int not null,    
    
    primary key (usr_rol_id),
    foreign key (usr_id) references `user`(usr_id),
    foreign key (rol_id) references `role`(rol_id) 
);

create table user_department(
	usr_dep_id int not null auto_increment,
    usr_id int not null,
    dep_id int not null,
    
    primary key (usr_dep_id),
    foreign key (usr_id) references `user`(usr_id),
    foreign key (dep_id) references department(dep_id)
);

create table location_owner(
	loc_own_id int not null auto_increment,
    usr_id int not null,
    loc_id int not null,
    
    primary key (loc_own_id),
    foreign key (usr_id) references `user`(usr_id),
    foreign key (loc_id) references location(loc_id)
);

-- Drop my tables:
drop table location_owner;
drop table user_department;
drop table user_role;
drop table `role`;
drop table `leave`;
drop table visitor_statistic;
drop table school_form;
drop table school_grade;
drop table school_name;

-- testing:
-- create table employee(
-- 	emp_id int not null auto_increment,
--     emp_name varchar(20) not null,
--     emp_surname varchar(20) not null,
--     emp_email varchar(50) not null,
--     updated_at time,
--     created_at time,
--     
--     primary key (emp_id)
-- );
-- drop table employee;
-- select *
-- from employee;


-- Jonathan's Code:
CREATE TABLE participant_type(
	prttyp_id INT NOT NULL AUTO_INCREMENT,
    prttyp_code varchar(5),
    prttyp_name varchar(50),
    prttyp_order INT NOT NULL,
    PRIMARY KEY (prttyp_id)
);

CREATE TABLE event_participant_types(
	evtprttyp_id INT NOT NULL AUTO_INCREMENT,
    evt_id INT NOT NULL,
    prttyp_id INT NOT NULL,
    PRIMARY KEY (evtprttyp_id),
    FOREIGN KEY (evt_id) REFERENCES `event`(evt_id),
    FOREIGN KEY (prttyp_id) REFERENCES participant_type(prttyp_id)
);

CREATE TABLE event_users_to_be_notified(
	evtusr_id INT NOT NULL AUTO_INCREMENT,
    evtnot_id INT NOT NULL,
    usrnot_id INT NOT NULL,
    evtusr INT NOT NULL,
    evtusr_isActive BOOL DEFAULT TRUE,
    PRIMARY KEY (evtusr_id),
    FOREIGN KEY (evtnot_id) REFERENCES `event`(evt_id),
    FOREIGN KEY (usrnot_id) REFERENCES `user` (usr_id)
);

CREATE TABLE location_users_to_be_notified(
	locusr_id INT NOT NULL AUTO_INCREMENT,
    usrnot_id INT NOT NULL,
    locnot_id INT NOT NULL,
    locusr_isActive BOOL DEFAULT TRUE,
    PRIMARY KEY (locusr_id),
    FOREIGN KEY (usrnot_id) REFERENCES `user`(usr_id),
    FOREIGN KEY (locnot_id) REFERENCES `location`(loc_id)
);