DROP DATABASE University;
CREATE DATABASE University;
USE University;

CREATE TABLE faculty (
    faculty_id INTEGER(5) UNSIGNED,
    faculty_name VARCHAR(20),
    PRIMARY KEY (faculty_id)
);

CREATE TABLE student_group (
    group_id INTEGER(5) UNSIGNED,
    group_name VARCHAR(20),
    group_faculty_id INTEGER(5) UNSIGNED,
    PRIMARY KEY (group_id),
    FOREIGN KEY (group_faculty_id) REFERENCES faculty (faculty_id) ON DELETE CASCADE
);

CREATE TABLE student (
    student_id INTEGER(5) UNSIGNED AUTO_INCREMENT,
    student_name VARCHAR(20),
    student_surname VARCHAR(20),
    student_group_id INTEGER(5) UNSIGNED,
    student_age INTEGER(5),
    PRIMARY KEY (student_id),
    FOREIGN KEY (student_group_id) REFERENCES student_group (group_id) ON DELETE CASCADE
);




