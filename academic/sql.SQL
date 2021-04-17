CREATE TABLE google_users (
  google_id decimal(21,0) NOT NULL,
  google_name varchar(60) NOT NULL,
  google_email varchar(60) NOT NULL,
  google_link varchar(60) NOT NULL,
  google_picture_link varchar(200) NOT NULL,
  PRIMARY KEY (google_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE admins(
user_name VARCHAR(50) UNIQUE,
passwd VARCHAR(50) NOT NULL,
_status INT
);
INSERT INTO admins( user_name, passwd, _status) VALUES("admin","e10adc3949ba59abbe56e057f20f883e",1);


CREATE TABLE accounts(
id INT UNIQUE AUTO_INCREMENT,
user_name VARCHAR(50) UNIQUE,
email VARCHAR(50) UNIQUE,
passwd VARCHAR(50) NOT NULL,
_status INT,
updated_at DATE,
created_at DATE
);
INSERT INTO accounts(user_name, email, passwd, _status) VALUES("student", "student@gmail.com","e10adc3949ba59abbe56e057f20f883e",1);

CREATE TABLE roles(
accounts_id INT NOT NULL,
role INT NOT NULL,
FOREIGN KEY (accounts_id) REFERENCES accounts(id)
);
INSERT INTO roles(accounts_id, role) VALUES(1, 2);


CREATE TABLE account_users(
id INT UNIQUE AUTO_INCREMENT,
id_account INT NOT NULL,
faculty INT NOT NULL,
faculty_manager INT,
name VARCHAR(50),
gender INT,
birth DATE,
images TEXT,
home_town VARCHAR(100),
phone VARCHAR(20),
updated_at DATE,
created_at DATE,
FOREIGN KEY (id_account) REFERENCES accounts(id)
);
INSERT INTO account_users(id_account,faculty, name, gender, birth, images, home_town, phone) VALUES(1, 1,'Y Dung Kuan', 1, 1997-01-01,'null', 'HCM', '0372788066');

CREATE TABLE courses(
id INT UNIQUE AUTO_INCREMENT,
name VARCHAR(50),
open_time DATE,
close_time DATE,
_status INT,
updated_at DATE,
created_at DATE
);
INSERT INTO courses(name, open_time, close_time, _status) VALUES('Autum', 2020-02-02, 2020-02-02, 1);


CREATE TABLE faculties(
id INT UNIQUE AUTO_INCREMENT,
course_id INT NOT NULL,
name VARCHAR(50),
open_time DATE,
close_time DATE,
_status INT,
updated_at DATE,
created_at DATE,
FOREIGN KEY (course_id) REFERENCES courses(id)
);
INSERT INTO faculties(course_id, name, open_time, close_time, _status) VALUES( 1,'IT', 2020-02-02, 2020-02-02, 1);

CREATE TABLE topics(
id INT UNIQUE AUTO_INCREMENT,
course_id INT NOT NULL,
name VARCHAR(50),
description TEXT,
open_time DATE,
close_time DATE,
_status INT,
updated_at DATE,
created_at DATE,
FOREIGN KEY (course_id) REFERENCES courses(id)
);
INSERT INTO topics(course_id, name, description, open_time, close_time, _status) VALUES( 1,'Dancer', 'Topic autum', 2020-02-02, 2020-02-02, 1);







CREATE TABLE contributions(
id INT UNIQUE AUTO_INCREMENT,
user_id INT NOT NULL,
topic_id INT NOT NULL,
faculty_id INT NOT NULL,
name VARCHAR(50),
create_date DATE,
description TEXT,
updated_at DATE,
created_at DATE,
FOREIGN KEY (topic_id) REFERENCES topics(id),
FOREIGN KEY (user_id) REFERENCES account_users(id)
);

CREATE TABLE files(
id INT UNIQUE AUTO_INCREMENT,
contribution_id INT NOT NULL,
faculty_id INT,
user_id INT,
topic_id INT,
name VARCHAR(500) NOT NULL,
_type VARCHAR(10),
size VARCHAR(50),
path_folder VARCHAR(100) NOT NULL,
updated_at DATE,
created_at DATE,
FOREIGN KEY (contribution_id) REFERENCES contributions(id)
);



CREATE TABLE comments(
id INT UNIQUE AUTO_INCREMENT,
file_id INT NOT NULL,
user_id INT NOT NULL,
title VARCHAR(50) NOT NULL,
conten TEXT,
updated_at DATE,
created_at DATE,
FOREIGN KEY (file_id) REFERENCES files(id)
);

CREATE TABLE CONTACTS(
send_from_user INT NOT NULL,
send_to_user INT NOT NULL,
title VARCHAR(50),
conten TEXT,
status_view INT,
FOREIGN KEY (send_to_user) REFERENCES account_users(id)
);
