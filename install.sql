CREATE TABLE Book_type
(
  Type_num INT NOT NULL,
  PRIMARY KEY (Type_num)
);

CREATE TABLE Inventory
(
  Num_Copies INT NOT NULL,
  Num_Ordered INT NOT NULL,
  Num_Sold INT NOT NULL,
  Shelf_num VARCHAR(30) NOT NULL,
  PRIMARY KEY (Shelf_num)
);

CREATE TABLE Book
(
  Title VARCHAR(30) NOT NULL,
  Author VARCHAR(30) NOT NULL,
  ISBN VARCHAR(30) NOT NULL,
  Barcode VARCHAR(30) NOT NULL,
  Book_Copy_Num INT NOT NULL,
  Type_num INT NOT NULL,
  Shelf_num VARCHAR(30) NOT NULL,
  PRIMARY KEY (Book_Copy_Num),
  FOREIGN KEY (Type_num) REFERENCES Book_type(Type_num),
  FOREIGN KEY (Shelf_num) REFERENCES Inventory(Shelf_num)
);

CREATE TABLE Book_type_Description
(
  Description VARCHAR(30) NOT NULL,
  Details_URL VARCHAR(100) NOT NULL,
  Type_num INT NOT NULL,
  PRIMARY KEY (Description, Type_num),
  FOREIGN KEY (Type_num) REFERENCES Book_type(Type_num)
);

CREATE TABLE Book_Suggestion
(
  Sug_Title VARCHAR(30) NOT NULL,
  Sug_Author VARCHAR(30) NOT NULL,
  Sug_ISBN VARCHAR(30) NOT NULL,
  Sug_Type_num INT NOT NULL,
  Sug_Req_num INT NOT NULL,
  PRIMARY KEY (Sug_Req_num)
 );
 

insert into Book_type values (16);
insert into Inventory values (15, 32, 62, "5A");
insert into Book values ("Jane Eyre","Charlotte Bronte","1792739478", "1792739478218",32, 16, "5A");
insert into Book_type_Description values ("life story of an orphan","thegreatestbooks.org/items/107",16);
insert into Book_Suggestion values ("Harry Potter","JK Rowling","9066710972", 32, 150);
