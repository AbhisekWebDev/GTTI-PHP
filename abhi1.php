<html>
<body>
<form method = "POST" action = "abhi1.php">
Enter 1st no : <input type = "text" name = "v1">
<br>
Enter 2nd no : <input type = "text" name = "v2">
<br>
Enter 3rd no : <input type = "text" name = "v3">
<br>
<input type = "Submit" name = "Submit">
</form>

<?php
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];

if($v1 > $v2 && $v1 > $v3)
echo "largest value is " . $v1;
else if ($v2 > $v1 && $v2 > $v3)
echo "largest value is " . $v2;
else
echo "largest value is " . $v3;
?>
</body>
</html>