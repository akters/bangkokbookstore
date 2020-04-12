<?php

$Sug_Title = $_POST['Sug_Title'];
$Sug_Author = $_POST['Sug_Author'];
$Sug_ISBN = $_POST['Sug_ISBN'];
$Sug_Type_num = $_POST['Sug_Type_num'];
$Sug_Req_num = $_POST['Sug_Req_num'];

require('connect.php');
$result = $conn->query("select * from Book_Suggestion");

$sql = "insert into Book_Suggestion values('$Sug_Title', '$Sug_Author', '$Sug_ISBN', '$Sug_Type_num', '$Sug_Req_num');";
$result = $conn->query($sql);

?>
