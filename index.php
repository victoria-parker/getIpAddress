<?php
    require 'getIpAddress.php';
    $ip=getIpAdress();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your IP Address</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div>
            <p>Your ip is:</p>
            <span><?=$ip?></span>
        </div>
</body>
</html>
