DROP DATABASE IF EXISTS novels_db;
CREATE DATABASE novels_db;

DROP user IF EXISTS 'takara'@'localhost';
CREATE user 'takara'@'localhost' identified by 'takara0512';
GRANT ALL ON novels_db. * TO 'takara'@'localhost';


USE novels_db;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    user CHAR(140),
    password VARCHAR(140),
    primary key(id)
);

INSERT INTO users (user, password) VALUES 
    ('admin',
    'takara0512'
    );

SELECT * from users;

DROP TABLE IF EXISTS novels;
CREATE TABLE novels (
    id INT NOT NULL AUTO_INCREMENT,
    title CHAR(140),
    story TEXT,
    posted DATETIME,
    primary key(id)
);

INSERT INTO novels (title, story, posted) VALUES 
        ('テスト',
        'テキストが入りますテキストが入りますテキストが入りますテキストが入ります',
        NOW()
        );

DROP TABLE IF EXISTS blogs;
CREATE TABLE blogs (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(140),
    body TEXT,
    posted DATETIME,
    primary key(id)
);
