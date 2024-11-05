<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" name="form" method="POST">
    <input name="day" type="text" placeholder="format 22.12.2025">
    <button>send</button>

    <?php

        function getDays($day){

            $bd = explode('.', $day);
            $bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
            $days_until = ceil(($bd - time()) / 86400);

            echo $days_until;
        }

        if(!empty($_POST)){
            $birthday = $_POST['day'];
            getDays($birthday);
        }

    ?>

</form>
</body>
</html>

<?php
