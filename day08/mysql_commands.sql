--  database is collection of structured data 
to create a databse 
CREATE DATABSE db_name_

to drop a databse
DROP DATABASE db_name_

to show database
SHOW DATABASES

to create a table 
id,name,course,batch,city,year 

CREATE TABLE students(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(30),
    course varchar(30),
    batch varchar(30),
    city varchar(30),
    year varchar(30),
    PRIMARY KEY (id)
)

to insert data in table
INSERT INTO students (name,course,batch,city,year) VALUES ("Kush","B.E.","2024","Agra","4rth")

to get and search in table
SELECT * FROM students WHERE city="Agra" 

to get full data
SELECT * FROM students 

to update a data in the table 
UPDATE students SET name = "Neelam Kushwaha" WHERE students.id = 3

to delete a data row from a table 
DELETE FROM students WHERE name = "Shivbhan"