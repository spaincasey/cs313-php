CREATE TABLE public.note ( id SERIAL NOT NULL PRIMARY KEY, user_id INT NOT NULL REFERENCES public.user(id), speaker_id INT NOT NULL REFERENCES public.speaker(id), conference_id INT NOT NULL REFERENCES public.conference(id), note_text TEXT NOT NULL);
CREATE TABLE public.user_app (id SERIAL NOT NULL PRIMARY KEY,username VARCHAR(100) NOT NULL UNIQUE,password VARCHAR(100) NOT NULL, displayname VARCHAR(100) NOT NULL);
CREATE TABLE public.speaker (id SERIAL NOT NULL PRIMARY KEY,name VARCHAR(100) NOT NULL);
CREATE TABLE public.conference (id SERIAL NOT NULL PRIMARY KEY,year SMALLINT NOT NULL,is_spring BOOLEAN NOT NULL);
INSERT INTO conference (year, is_spring) VALUES(2019, false);
INSERT INTO speaker (name) VALUES('Nelson');
INSERT INTO user (username, password, displayname) VALUES('cspain', 'password', 'Casey Spain');
INSERT INTO note (user_id, speaker_id, conference_id, note_text) 
VALUES(SELECT user_id FROM user_app,1,1, 'This was a great talk');


DROP TABLE IF EXISTS NOTE;
DROP TABLE IF EXISTS USER_APP; 
DROP TABLE IF EXISTS SPEAKER;  
DROP TABLE IF EXISTS CONFERENCE; 
