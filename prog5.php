<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prog5.php" method="post">
        Enter Name : <input type="text" name="v1"/>
        Enter Addess: <input type="text" name="v2"/>
        <input type="submit" value="click">
    </form>
    <?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    echo "Name :" . $v1 . "<br>";
    echo "Address :" . $v2 . "<br>";
    ?>
</body>
</html>

