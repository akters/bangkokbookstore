<?php

$Title = $_POST['Title'];
$Author = $_POST['Author'];
$ISBN = $_POST['ISBN'];
$Barcode = $_POST['Barcode'];
$Book_Copy_Num = $_POST['Book_Copy_Num'];
$Type_num = $_POST['Type_num'];
$Shelf_num = $_POST['Shelf_num'];

require('connect.php');
$result = $conn->query("select * from Book");

$sql = "insert into Book values('$Title', '$Author', '$ISBN','$Barcode' '$Book_Copy_Num', '$Type_num', '$Shelf_num');";
$result = $conn->query($sql);

?>

