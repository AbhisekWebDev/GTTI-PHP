<?php
$conn = mysqli_connect("localhost", "root", "", "banksbi");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, "INSERT INTO masterone (ACCNO, NAME, ADDRESS, PHONE)
VALUES (12, 'Doe', 'A/1', 99)")) 
{
echo "New record created successfully";
} 
else 
{
echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>