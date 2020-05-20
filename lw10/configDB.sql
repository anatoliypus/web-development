DROP DATABASE University;
CREATE DATABASE University;
USE University;

CREATE TABLE Students (
    student_id INTEGER(5) AUTO_INCREMENT,
    student_name VARCHAR(20),
    student_surname VARCHAR(20),
    student_group_id VARCHAR(20),
    student_age INTEGER(5),
    PRIMARY KEY (student_id)
);

CREATE TABLE Faculties (
    faculty_id INTEGER(5),
    faculty_name VARCHAR(20),
    PRIMARY KEY (faculty_id)
);


CREATE TABLE Student_groups (
    group_id INTEGER(5),
    group_name VARCHAR(20),
    group_faculty_id VARCHAR(20),
    PRIMARY KEY (group_id)
);




