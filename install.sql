CREATE TABLE Bookdetails
(
  Title VARCHAR(50) NOT NULL,
  Author VARCHAR(50) NOT NULL,
  ISBN VARCHAR(50) NOT NULL,
  Barcode VARCHAR(50) NOT NULL,
  Shelf VARCHAR(50) NOT NULL,
  PRIMARY KEY (Barcode)
);

CREATE TABLE Author
(
  Author VARCHAR(50) NOT NULL,
  Title VARCHAR(50) NOT NULL,
  Details VARCHAR(50) NOT NULL,
  FOREIGN KEY (Barcode) REFERENCES Bookdetails(Barcode),
);

CREATE TABLE Genre
(
  Fiction VARCHAR(50) NOT NULL,
  Non-fiction VARCHAR(50) NOT NULL,
);


insert into Bookdetails values("Oliver Twist", "Charles Dickens","978-8-41-740605-9","978-8-41-740605-9-21561","DA-21561")
insert into Author values("Aristotle","Organon","Click here")
insert into Genre values("Action and adventure","Art")
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
