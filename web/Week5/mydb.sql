DROP TABLE IF EXISTS Users CASCADE;
CREATE TABLE Users (
    UserID serial NOT NULL PRIMARY KEY,
    LastName  varchar(255) NOT NULL,
    FirstName  varchar(255) NOT NULL,
    Addresss varchar(255),
    City varchar(255),
    Age int
);

DROP TABLE IF EXISTS Orders CASCADE;
CREATE TABLE Orders (
    OrderID serial NOT NULL PRIMARY KEY,
    UserID int NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

DROP TABLE IF EXISTS Products CASCADE;
CREATE TABLE Products (
    ProductID serial NOT NULL PRIMARY KEY,
    ProductName varchar(255) NOT NULL,
    ProductPrice varchar(255) NOT NULL,
    ProductDescription varchar(255) NOT NULL
);

DROP TABLE IF EXISTS Link CASCADE;
CREATE TABLE Link (
    LinkID serial NOT NULL PRIMARY KEY,
    OrderID int NOT NULL REFERENCES Orders(OrderID),
    ProductID int NOT NULL REFERENCES Products(ProductID)
);


INSERT INTO Users
(LastName, FirstName, Addresss, City, Age)
VALUES ('Egbers', 'Landon', '4321myhouseln', 'Clifton', '24');

INSERT INTO Users
(LastName, FirstName, Addresss, City, Age)
VALUES ('Smith', 'Joseph', '1234myhouseln', 'Clifton', '23');