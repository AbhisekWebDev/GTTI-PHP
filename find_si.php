<html>
<body>
<form method = "POST" action = "find_si.php">
Enter Principal : <input type = "text" name = "principal">
<br>
Enter Rate : <input type = "text" name = "rate">
<br>
Enter Time : <input type = "text" name = "time">
<br>
<input type = "Submit" value = "Submit">
</form>
<?php
$v1 = $_POST['principal'];
$v2 = $_POST['rate'];
$v3 = $_POST['time'];
$si = 1;
$si = $v1 * $v2 *$v3 / 100;

echo "The Simple interest is " . $si;

?>
</body>
</html>