<?php
$conn = mysqli_connect("localhost", "root", "", "abhi");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE table1 (ID INT(6)PRIMARY KEY,
NAME VARCHAR(30) NOT NULL)";

if (mysqli_query($conn, $sql)) 
{
echo "Table1 created successfully";
} 
else 
{
echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>