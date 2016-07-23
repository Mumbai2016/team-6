create table volunteer
(
vid int  PRIMARY KEY auto_increment,
v_name varchar(20) NOT NULL,
v_address varchar(200) NOT NULL,
v_email varchar(50) NOT NULL,
v_interest varchar(50) NOT NULL,
v_uid int REFERENCES user(uid) ON DELETE cascade ON UPDATE cascade,
v_pno int REFERENCES project(pno) ON DELETE cascade ON UPDATE cascade
);

create table p_vol
(
p_vol_id int PRIMARY KEY auto_increment,
hours int,
p_status varchar(20),
p_uid int REFERENCES user(uid) ON DELETE cascade ON UPDATE cascade
);

create table user
(
uid int PRIMARY KEY auto_increment,
uname varchar(20),
u_pwd varchar(50) NOT NULL,
u_type varchar(50)
);