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
    <input name="num1" type="number">
    <input name="num2" type="number">
    <input name="num3" type="number">
    <button type="submit">send</button>

    <?php

    error_reporting(-1);
    if (!empty($_POST)){
        $a = (int) $_POST['num1'];
        $b = (int) $_POST['num2'];
        $c = (int) $_POST['num3'];

        $result = eq_roots($a, $b, $c);
        foreach ($result as $res){
            echo $res . "\n";
        }

    }
    function eq_roots($a, $b, $c) {
        if ($a==0) return false;

        if ($b==0) {
            if ($c<0) {
                $x1 = sqrt(abs($c/$a));
                $x2 = sqrt(abs($c/$a));
            } elseif ($c==0) {
                $x1 = $x2 = 0;
            } else {
                $x1 = sqrt($c/$a).'i';
                $x2 = -sqrt($c/$a).'i';
            }
        } else {
            $d = $b*$b-4*$a*$c;
            if ($d>0) {
                $x1 = (-$b+sqrt($d))/2*$a;
                $x2 = (-$b-sqrt($d))/2*$a;
            } elseif ($d==0) {
                $x1 = $x2 = (-$b)/2*$a;
            } else {
                $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
                $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
            }
        }
        return array($x1, $x2);
    }

    ?>
</form>
</body>
</html>