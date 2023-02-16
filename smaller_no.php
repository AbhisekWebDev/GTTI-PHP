<html>
<body>
<form method = "POST" action = "smaller_no.php">
Enter 1st no : <input type = "text" name = "v1">
<br>
Enter 2nd no : <input type = "text" name = "v2">
<br>
<input type = "Submit" value = "Submit">
</form>
<?php
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
if($v1 < $v2)
echo "smaller no is " . $v1;
else
echo "smaller no is " . $v2;
?>
</body>
</html>