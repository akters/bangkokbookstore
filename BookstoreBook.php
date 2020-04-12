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
      <li class="active"><a href="#">Book</a></li>
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
  <h2>Book Details</h2>
</div>
</table>
<div class="container">
<h4>Here are all the available books in the BookStore: </h4>



<?php
require('connect.php');
$result = $conn->query("select * from Book");
?>

<table border="2" align="center">
<tr>
  <td><strong><font color=navy><u>Title</strong></u></font></td>
  <td><strong><font color=navy><u>Author</strong></u></font></td>
  <td><strong><font color=navy><u>ISBN</strong></u></font></td>
  <td><strong><font color=navy><u>Barcode</strong></u></font></td>
  <td><strong><font color=navy><u>Book_Copy_Num</strong></u></font></td>
  <td><strong><font color=navy><u>Type_Num</strong></u></font></td>
  <td><strong><font color=navy><u>Shelf_Num</strong></u></font></td>
</tr>

<?php
var_dump($_POST);
   ?> 

<?php
$sql = "SELECT * from Book";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Title']}</td>
    <td>{$row['Author']}</td>
    <td>{$row['ISBN']}</td>
    <td>{$row['Barcode']}</td>
    <td>{$row['Book_Copy_Num']}</td>
    <td>{$row['Type_Num']}</td>
    <td>{$row['Shelf_Num']}</td>
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</http>
