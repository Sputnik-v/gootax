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
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <button>send</button>

    <?php

    function getResult($text){
        $lineText = mb_strlen($text,'UTF-8');
        $result =  array_count_values(str_split($text));
        foreach ($result as $key => $value) {
            $x = 100 / $lineText * $value;
            echo '"'.$key.'" - "'.round($x, 1) . " %" .'"<br>';
        }
    }

    if(!empty($_POST)){
        if(isset($_POST['text'])){
            getResult($_POST['text']);
        }
    }

    ?>
</form>

</body>
</html>
