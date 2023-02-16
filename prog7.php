<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prog7.php" method="post">
        Enter a Value : <input type="text" name="v1"><br>
        <input type="submit" Value="submit">
    </form>
    <?php
        $v1=$_POST['v1'];
        if($v1 % 2 == 0)
        echo $v1 . "is even";
        else
        echo $v1 . "is odd";
    ?>
</body>
</html>