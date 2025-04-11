CREATE DATABASE `tp2`;

CREATE TABLE tp2.user (
  idUser INT NOT NULL AUTO_INCREMENT,
  nameUser VARCHAR(25) NOT NULL,
  usernameUser VARCHAR(45) NOT NULL,
  passwordUser VARCHAR(100) NOT NULL,
  birthdayUser DATE NOT NULL,
  PRIMARY KEY (idUser));

CREATE TABLE tp2.forum (
  idForum INT NOT NULL AUTO_INCREMENT,
  titreForum VARCHAR(100) NOT NULL,
  article LONGTEXT NOT NULL,
  dateForum DATE NOT NULL,
  auteurArticle INT NOT NULL,
  PRIMARY KEY (idForum, auteurArticle),
  CONSTRAINT fk_Forum_User
    FOREIGN KEY (auteurArticle)
    REFERENCES tp2.user (idUser)
    );

drop table forum;
drop table user;
select * from user;
SELECT * from forum;

INSERT INTO user (nameUser, usernameUser, passwordUser, birthdayUser) VALUES ('Peter Griffin', 'peeeeta@hotmail.com', 'FamilyGuy', '1990-06-04');
insert into user (nameUser, usernameUser, passwordUser, birthdayUser) VALUES ('Bob Belcher', 'bobby@hotmail.com', 'BobBurger', '1971-07-07');

INSERT INTO forum (titreForum, article, dateForum, auteurArticle) 
VALUES (
    'Have you heard?', 
    'A-well-a everybodys heard about the bird!
Bird bird bird, b-birds the word
A-well-a bird bird bird, bird is the word
A-well-a bird bird bird, well-a bird is the word
A-well-a bird bird bird, b-birds the word
A-well-a bird bird bird, well-a bird is the word
A-well-a bird, bird, b-birds the word
A-well-a bird bird bird, b-birds the word
A-well-a bird bird bird, well-a bird is the word
A-well-a bird, bird, b-birds the word
A-well-a dont you know, about the bird?
Well, everybody knows that the bird is the word!
A-well-a bird, bird, b-birds the bird',
    '2024-04-07', 
    1
);