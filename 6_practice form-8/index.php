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

    function getWordsAndSymbols($text){
        $words = explode(" ", $text);
        $wordLength = count($words);
        $symbols = iconv_strlen($text);

        return "В тексте {$wordLength} слова и {$symbols} символов";
    }

    if(!empty($_POST)){

        $str = $_POST['text'];
        echo getWordsAndSymbols($str);
    }

    ?>
</form>

</body>
</html>


