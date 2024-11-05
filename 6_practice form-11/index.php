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
    <label>Введите дату рождения, чтобы узнать гороскоп</label>
    <select name="day" id="day">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
    <select name="month" id="month">
        <option value="1">Январь</option>
        <option value="2">Февраль</option>
        <option value="3">Март</option>
        <option value="4">Апрель</option>
        <option value="5">Май</option>
        <option value="6">Июнь</option>
        <option value="7">Июль</option>
        <option value="8">Август</option>
        <option value="9">Сентябрь</option>
        <option value="10">Октябрь</option>
        <option value="11">Ноябрь</option>
        <option value="12">Декабрь</option>
    </select>
    <select name="year" id="year">
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
    </select>
    <button>send</button>

    <?php

    $horoscopeArr = [
        "Козерог" => 'Сегодня вы, возможно, будете поставлены перед необходимостью иначе взглянуть на вещи. Скорее всего, это вам не понравится.',
        "Водолей" => 'Сегодня вам не стоит предъявлять какие-либо претензии к кому бы то ни было. Вам с удовольствием объяснят их необоснованность, придется извиняться.',
        "Рыбы" => 'Сегодняшний день лучше посвятить делам маловажным, касающимся только вас лично. Поменьше болтайте, нынче вокруг вас будет слишком много заинтересованных ушей.',
        "Овен" => 'Сегодня вы можете столкнуться с такой проблемой, как жуткий цейтнот. Постарайтесь пожестче распланировать день и как можно четче этого плана придерживаться. Лирические отступления сегодня не приветствуются.',
        "Телец" => 'Самой тяжкой задачей на сегодняшний день, возможно окажется подъем с постели. Тщетные попытки подавить отчаянную зевоту будут раздражать вас и веселить окружающих до вечера. Других проблем не предвидится.',
        "Близнецы" => 'Сегодня роль первой скрипки, сколь бы огорчительно это для вас ни звучало, вам принадлежать не будет. Не стоит за нее бороться, вы только испортите себе репутацию.',
        "Рак" => 'Сегодня вас могут либо недооценить, либо переоценить. И то и другое - достаточно обидно. Постарайтесь как можно четче обрисовать сферу своих возможностей.',
        "Лев" => 'Сегодня в вас будет обострено чувство прекрасного. По этому поводу лучше поменьше смотреть на людей и побольше - на облака.',
        "Девы" => 'Сегодня с утра вы, возможно, не сможете найти свои розовые очки, и мир предстанет пред вами в сероватых тонах. Ну не все же радоваться жизни, надо и передохнуть иногда.',
        "Весы" => 'Если вы срочно не начнете самым активным образом заниматься изо всех сил откладываемым вопросом, вы рискуете накликать на себя довольно мрачный период жизни. И, что особенно неприятно, довольно продолжительный.',
        "Скорпион" => 'Возможно, перемены вам ни к чему, однако они все равно будут происходить. Сегодня можно ожидать одной из них.',
        "Стрелец" => 'Сегодня вас будет снедать нетерпение. Либо вы позволите ему доесть себя до основания, либо с помощью небольшого усилия воли преобразуете его в более полезный вид энергии. Выбирайте.',
    ];

    function getZodiac($month, $day)
    {
        $month = (int) $month;
        $day = (int) $day;

        $zodiacName = array(
            "Козерог",
            "Водолей",
            "Рыбы",
            "Овен",
            "Телец",
            "Близнецы",
            "Рак",
            "Лев",
            "Девы",
            "Весы",
            "Скорпион",
            "Стрелец"
        );
        $zodiacDate = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
        if ($day < $zodiacDate[$month + 1]){
            $result = $zodiacName[$month - 1];
        }else{
            $result = $zodiacName[$month % 12];
        }
        return $result;
    }

    if(!empty($_POST)){

        if(isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])){

            foreach ($horoscopeArr as $index => $item) {
                if($index === getZodiac($_POST['month'], $_POST['day'])){
                    echo "<br>" . getZodiac($_POST['month'], $_POST['day']) . "<br>" . $item;
                    return;
                }
            }

            echo getZodiac($_POST['month'], $_POST['day']);

        }
    }

    ?>

</form>
</body>
</html>
