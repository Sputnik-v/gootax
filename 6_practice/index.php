<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<form action="/6_practice/index.php" method="POST">
    <label for="input">Введите значение в Цельсии</label>
    <input id="input" type="text" placeholder="значение" name="value" value="<?= $value = '' ?>">
    <button>Перевести</button>

    <?php
    //////////////Forms////////////////
    if(isset($_POST['value'])){
        $value = $_POST['value'];
        $far = $value * 32;
        echo $far;
        }
    ?>

</form>
</body>
</html>


