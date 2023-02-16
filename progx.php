<html>
<body>
<form method="POST" action="progx.php">
Enter Number :<input type="text" name="v1">
<br>
<input type="submit" value="submit">
</form>

<?php
$v1 = $_POST['v1'];
$fact = 1;
for($i = 1 ; $i <= $v1 ; $i++)
$fact *= $i;
echo $fact;
?>
</body>
</html>