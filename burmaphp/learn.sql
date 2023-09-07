CREATE TABLE `students` (
    `id`  INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
     `dob` DATE NOT NULL,
     `age`  TINYINT UNSIGNED,
      `course_id` INT UNSIGNED NOT NULL
     
);

CREATE TABLE `courses` (
    `id`  INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL
     
);

INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`,`course_id`) VALUE
("MgMg","mgmg@gmail.com","male","2000-9-20",23,1),
("Mgzaw","mgzaw@gmail.com","male","1999-8-20",24,1),
("chan","chan@gmail.com","male","2000-9-20",23,2),
("sithu","sithu@gmail.com","male","1999-8-20",24,2),
("root","root@gmail.com","male","2000-9-20",23,3);

UPDATE `students` SET name="Chan" where id=2;

-- DCL data control language 

-- privileges | create drop INSERT select update delete 
if you forget userpassword || set password for 'professor'@'localhost' = password('prof1212') 
-- if you delet user  || drop user 'professor'@'localhost'; 
create user 'professor' @ '%' identified by 'prof1234';
-- grant / revoke 
grant create,select on university.* to 'professor'@'localhost';
grant all privileges on university.* to 'professor' @ 'localhost';
grant all privileges on *.* to 'professor' @ 'localhost' with grant option;  

revoke all privileges on *.* form 'professor'@'localhost';
flush 
revoke all privileges, grant option form 'professor'@'localhost'; 

drop database db_name;
drop table table_name;
one to many relationship


many to many relationship

CREATE table courses(
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200)
    
);


select * from students left join courses on students.course_id = courses.id
union
select * from students right join courses on students.course_id = courses.id;
