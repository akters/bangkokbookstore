<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BookStore</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="BookstoreHome.php">Home</a></li>
      <li><a href="BookstoreAbout.php">About</a></li>
      <li><a href="BookstoreBook.php">Book</a></li>
      <li><a href="BookstoreAuthor.php">Author</a></li>
      <li><a href="BookstoreGenre.php">Genre</a></li>
      <li><a href="https://drive.google.com/file/d/1DQXZCknmbRYo3j5hrfzwQdBJMe5H9781/view?usp=sharing"></i>HELP</a></li>
       <li><a href="#">Contact Us</a></li>
     
      <form name ="form1" action="" method="post">
      <input type ="submit" name ="Add_Book.php" value ="Add Book">
      </form>
      
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
      </form>
      
    </ul>
  </div>
</nav>
  <style>
.center {
  text-align: center;
  border: 3px solid black;
}
</style>
     <div class="center">
  <h2>Add Book</h2>
</div>
</table>
<div class="container">
<h4> Add a book you would like to see in the bookstore: </h4>
<div class="container">
  <form action="Letting_User_Insert_Value.php" method= "POST">
    <div class="row">
      <div class="col-25">
        <label for="Title">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="Title" name="Title" placeholder="Book Title..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Author">Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="Author" name="Author" placeholder="Author's name..">
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="ISBN">ISBN</label>
      </div>
      <div class="col-75">
        <input type="Number" id="ISBN" name="ISBN" placeholder="ISBN number..">
      </div>
    </div>  
  
     <div class="row">
      <div class="col-25">
        <label for="Barcode">Barcode</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Barcode" name="Barcode" placeholder="Barcode number..">
      </div>
    </div>
    
      <div class="row">
      <div class="col-25">
        <label for="Book_Copy_Num">Book Copies</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Book_Copy_Num" name="Book_Copy_Num" placeholder="How many copies?..">
      </div>
    </div> 
    
<select name="Type_num">
<option>- Select a genre .. -</option>
<option value="11">Gothic Fiction</option>
<option value="16">Historical Fiction</option>
<option value="20">Science Fiction</option>
<option value="32">Biography</option>
<option value="47">Novel</option>
</select>


    <div class="row">
      <div class="col-25">
        <label for="Shelf_num">Shelf Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="Shelf_num" name="Shelf_num" placeholder="Shelf number..">
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" value="Add">
    </div>
  </form>
</div>
</body>
</html>


