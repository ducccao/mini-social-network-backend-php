<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get or Post</title>
</head>

<body>
    <form action="/onboarding/GetOrPost/GetOrPost.php" method="POST">
        <input type="text" name="txtMa">
        <a href="/onboarding/GetOrPost/GetOrPost.php?txtMa=N72">Xem chi tiet</a>
        <input type="submit" value="submit">
    </form>

    <?php

    include "./../../utils/console-log.util.php";

    $txtMa = '';
    $txtMa = $_POST['txtMa'];

    console_log($txtMa);


    echo "Ma la : " . $txtMa;
    ?>

</body>

</html>