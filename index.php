<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bangkok Bookstore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
table, th, td {
  border: 2px solid black;
  border-spacing: 1px;
  }
  th, td {
  padding: 5px;
}
th {
  text-align: left;
}
table{
  width: 80%;    
  background-color: white ;
  
}
table {
  border-spacing: 2px;
}
</style>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bangkok Bookstore</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="active"><a href="#"><b>Home</b></a></li>
      <li class="active"><a href="#"><b>About</b></a></li>
      <li class="active"><a href="#"><b>Book</b></a></li>
      <li class="active"><a href="#"><b>Author</b></a></li>
      <li class="active"><a href="#"><b>Genre</b></a></li>
      <li class="active"><a href="#"><b>Contact Us</b></a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h1><center><b>Book Details</b></center></h1>

</div>
<?php

require('connect.php');

$result = $conn->query("select * from mytable");


$sql = "SELECT * from bookdetails;  ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 
{
echo '<div class="tab-content">';
echo '<div id="book" class="tab-pane fade in active">';
echo '<table table-hover class="centerTable">';
echo '<tr bgcolor=#00FFFF style="color:#00006a">
<h2 style="color:Black"; align="center" class="w3-myfont">Recipe</h2>
<br/>
<th>Title</th>
<th>Author</th>
<th>ISBN</th>
<th>Barcode</th>
<th>Shelf</th>
</tr>';


// output data of each row

    while($row = $result->fetch_assoc())
 {

echo "<tr>
<td>" . $row["Title"]. "</td>
<td>" . $row["Author"]. "</td>
<td>" . $row["ISBN"]. "</td>
<td>" . $row["Barcode"]. "</td>
<td>" . $row["Shelf"]. "</td>
</tr>";

    }
 echo "</table>";
} else {
    echo "0 results";
}  
$conn->close();
?>
</body>
</html>

</body>
</html>
