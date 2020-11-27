DROP TABLE IF EXISTS Person CASCADE;
CREATE TABLE Person (
    PersonID serial NOT NULL PRIMARY KEY,
    FirstName  varchar(255) NOT NULL,
    LastName  varchar(255) NOT NULL,
    DateOfBirth varchar(255) NOT NULL
);

INSERT INTO Person
(FirstName, LastName, DateOfBirth)
VALUES ('John', 'Smith', '10-01-1989');

INSERT INTO Person
(FirstName, LastName, DateOfBirth)
VALUES ('Landon', 'Egbers', '08-27-1996');

INSERT INTO Person
(FirstName, LastName, DateOfBirth)
VALUES ('Russel', 'Nelson', '04-3-1928');