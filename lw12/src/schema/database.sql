DROP DATABASE lw11;
CREATE DATABASE lw11;
USE lw11;

CREATE TABLE user (
    user_id INTEGER(5) UNSIGNED AUTO_INCREMENT,
    user_name VARCHAR(20),
    user_email VARCHAR(20),
    user_subject VARCHAR(255),
    user_message VARCHAR(255),
    PRIMARY KEY (user_id)
);