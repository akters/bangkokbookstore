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
  Title VARCHAR(30) NOT NULL,
  Author VARCHAR(30) NOT NULL,
  ISBN VARCHAR(30) NOT NULL,
  Barcode VARCHAR(30) NOT NULL,
  Book_copy_num INT NOT NULL,
  Type_num INT NOT NULL,
  Shelf_num VARCHAR(30) NOT NULL,
  PRIMARY KEY (ISBN),
  FOREIGN KEY (Type_num) REFERENCES Book_type(Type_num),
  FOREIGN KEY (Shelf_num) REFERENCES Inventory(Shelf_num)
);

insert into Book_type values (16, "Classical Novel", "thegreatestbooks.org/items/107"), (23, "Thriller", "thegreatestbooks.org/items/54");
insert into Inventory values (12, 100, 3027, "5A", 316),(20, 350, 782, "3B", 524);
insert into Book values ("Jane Eyre", "Charlotte Bronte", 218385809551, 2183858, 316, 16, "5A"),("Frankenstein", "Mary Shelly",685664223509, 6856642, 524, 23, "3B");
