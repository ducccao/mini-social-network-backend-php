<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    onBoard connect to db

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }
    echo "Connected successfully";




    ?>



    <br>
    <a href="actor.html">actor</a>
</body>

</html>