CREATE TABLE public.User_app (id SERIAL NOT NULL PRIMARY KEY, email VARCHAR(100) NOT NULL UNIQUE);
CREATE TABLE public.Job (id SERIAL NOT NULL PRIMARY KEY, category INT NOT NULL REFERENCES public.category(id), description TEXT NOT NULL, image VARCHAR(100) NOT NULL);
CREATE TABLE public.Review (id SERIAL NOT NULL PRIMARY KEY,user_id INT NOT NULL REFERENCES public.user(id),job_id INT NOT NULL REFERENCES public.job(id), text TEXT NOT NULL);
CREATE TABLE public.Category (id SERIAL NOT NULL PRIMARY KEY, cat_name VARCHAR(100) NOT NULL);

INSERT INTO category(cat_name)VALUES('drywall');
INSERT INTO category(cat_name)VALUES('roofing');
INSERT INTO category(cat_name)VALUES('demolition');

INSERT INTO Job(category, description, image)VALUES((SELECT id from Category WHERE cat_name='drywall'), 'Drywall project for Rigby family', 'drywall1.jpg');
INSERT INTO Job(category, description, image)VALUES((SELECT id from Category WHERE cat_name='roofing'), 'Roofing done for Rexburg business', 'roofing1.jpg');
INSERT INTO Job(category, description, image)VALUES((SELECT id from Category WHERE cat_name='demolition'), 'Tore out insulation under Rexburg home', 'demolition1.jpg');

SELECT * FROM Job JOIN Category USING(id) WHERE cat_name = 'demolition';

INSERT INTO User_app(email)VALUES();
DELETE FROM User_app WHERE email='[object HTMLInputElement]';