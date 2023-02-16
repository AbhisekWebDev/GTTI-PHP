<html>
<body>
<form method = "POST" action = "factorial.php">
Enter a no : <input type = "text" name = "v1">
<br>
<input type = "Submit" value = "Submit">
</form>
<?php
$v1 = $_POST['v1'];
$factorial = 1;
for($i=1 ; $i<=$v1 ; $i++)
$factorial *= $i;
echo "The Factorial Value Is " . $factorial . "<br>";
?>
</body>
</html>