CREATE TABLE Book_type
(
  Type_num INT NOT NULL,
  Description VARCHAR(30) NOT NULL,
  Details_Url VARCHAR(30) NOT NULL,
  PRIMARY KEY (Type_num)
);

CREATE TABLE Inventory
(
  Num_Copies INT NOT NULL,
  Num_Ordered INT NOT NULL,
  Num_Sold INT NOT NULL,
  Shelf_num VARCHAR(30) NOT NULL,
  Book_copy_num INT NOT NULL,
  PRIMARY KEY (Shelf_num)
);

CREATE TABLE Book
(
  Author VARCHAR(30) NOT NULL,
  Title VARCHAR(30) NOT NULL,
  Barcode VARCHAR(30) NOT NULL,
  ISBN VARCHAR(30) NOT NULL,
  Book_copy_num INT NOT NULL,
  Type_num INT NOT NULL,
  Shelf_num VARCHAR(30) NOT NULL,
  PRIMARY KEY (Book_copy_num),
  FOREIGN KEY (Type_num) REFERENCES Book_type(Type_num),
  FOREIGN KEY (Shelf_num) REFERENCES Inventory(Shelf_num)
);

insert into Book_type values (16, "Classical Novel", "thegreatestbooks.org/items/107");
insert into Inventory values (12, 100, 3027, "5A", 316);
insert into Book values ("Charlotte Bronte", "Jane Eyre", 218385809551, 2183858, 316, 16, "5A");
