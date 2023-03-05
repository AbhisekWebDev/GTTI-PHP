<?php
$conn = mysqli_connect("localhost", "root", "", "abhi");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, "INSERT INTO table1 (ID, NAME)
VALUES (1, 'Abhi')"))
{
echo "New record created successfully";
} 
else 
{
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>