DROP TABLE Persons;
CREATE TABLE Persons (
    CustomerID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255),
    Age int,
    PRIMARY KEY (CustomerID)
);

DROP TABLE Orders;
CREATE TABLE Orders (
    OrderID int,
    OrderNumber int,
    CustomerID int
    FOREIGN KEY (CustomerID) REFERENCES Persons(CustomerID)
);


INSERT INTO Persons
(CustomerID, LastName, FirstName, Address, City, Age)
VALUES (1296010, 'Egbers', 'Landon', '4321myhouseln', 'Clifton', '24');

INSERT INTO Persons
(CustomerID, LastName, FirstName, Address, City, Age)
VALUES (1234567, 'Smith', 'Joseph', '1234myhouseln', 'Clifton', '23');

INSERT INTO Orders
(OrderID, OrderNumber, CustomerID)
VALUES (1, 4430, 1296010);

INSERT INTO Orders
(OrderID, OrderNumber, CustomerID)
VALUES (2, 4431, 1234567);