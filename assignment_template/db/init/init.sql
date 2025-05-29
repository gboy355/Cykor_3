CREATE TABLE user (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL, 
    password varchar(255) NOT NULL
);

CREATE TABLE post (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title TEXT NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
);