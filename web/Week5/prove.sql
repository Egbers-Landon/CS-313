DROP TABLE Scriptures;
CREATE TABLE Scriptures (
    ID int,
    Book varchar(255),
    Chapter int,
    Verse int,
    Content varchar(255),
);

INSERT INTO Scriptures
(ID, Book, Chapter, Verse, Content)
VALUES (123, 'John', 1, 5, 'And the light shineth in darkness and the darkness comprehended it not.');

INSERT INTO Scriptures
(ID, Book, Chapter, Verse, Content)
Values (321, 'D&C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

INSERT INTO Scriptures
(ID, Book, Chapter, Verse, Content)
Values (231, 'D&C', 93, 28, 'He that keepeth his commandments recieveth truth and light until he is glorified in truth and knoweth all things.');

INSERT INTO Scriptures
(ID, Book, Chapter, Verse, Content)
Values (213, 'Mosiah', 16, 9, 'He is the light and life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there csn be no more death');
