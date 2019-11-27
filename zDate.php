<style>
    .grid, .grid1 {
        display: grid;
        grid-column-gap: 2px;
        grid-row-gap: 2px;
        font-family: monospace;
    }
    .grid {
        grid-template-columns: 30em 38em 20em;
    }
    .grid1 {
        grid-template-columns: 68em 20em;
    }
    .grid:nth-child(odd), .grid1:nth-child(odd) {
        background: #FFC;
        padding: 5px;
    }
    .grid:nth-child(even), .grid1:nth-child(even) {
        background: #FED;
        padding: 5px;
    }
    .code {
    }
</style>
<h2>date(), time(), mktime()</h2>
<?php
    function gridline($comment = "", $code = "", $result = "") {
        echo "<div class='grid'><div>$comment</div><div class='code'>$code</div><div>$result</div></div>";
    }
    function gridline1($code = "", $result = "") {
        echo "<div class='grid1'><div class='code'>$code</div><div>$result</div></div>";
    }
?>
<?php
    gridline(
        "31.01.2019 12:43:59",
        "mktime(12, 43, 59, 1, 31, 2019)",
        date("Y.m.d H:i:s", mktime(12, 43, 59, 1, 31, 2019))
    );
    gridline(
        "Текущее время",
        "time()",
        date("Y.m.d H:i:s", time())
    );
    gridline(
        "31 января текущего года, 12:43:59",
        "mktime(12, 43, 59, 1, 31)",
        date("Y.m.d H:i:s", mktime(12, 43, 59, 1, 31))
    );
    gridline(
        "Текущий день января текущего года, 12:43:59",
        "mktime(12, 43, 59, 1)",
        date("Y.m.d H:i:s", mktime(12, 43, 59, 1))
    );
    gridline(
        "Сегодня, 12:43:59",
        "mktime(12, 43, 59)", date("Y.m.d H:i:s",
        mktime(12, 43, 59))
    );

    // time() вернет текущий момент времени в формате timestamp, а mktime - за заданную дату
    gridline(
        "Количество секунд, прошедших с полудня 01.02.2000",
        "time() - mktime(12, 0, 0, 2, 1, 2000)",
        number_format(time() - mktime(12, 0, 0, 2, 1, 2000), 0, ",", " ")
    );
    gridline(
        "Количество секунд, прошедших с 6:00 07.07.1955",
        "date('U', mktime(6, 0, 0, 7, 7, 1955))",
        number_format(time() - mktime(6, 0, 0, 7, 7, 1955), 0, ",", " ")
    );

    gridline(
        "Год, 4 цифры",
        "date('Y', mktime(7, 5, 8, 2, 1, 2000))",
        date('Y', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Год, две цифры",
        "date('y', mktime(7, 5, 8, 2, 1, 2000))",
        date('y', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Номер месяца с нулем спереди",
        "date('m', mktime(7, 5, 8, 2, 1, 2000))",
        date('m', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Номер месяца без нуля впереди",
        "date('n', mktime(7, 5, 8, 2, 1, 2000))",
        date('n', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Номер дня в месяце с нулем спереди",
        "date('d', mktime(7, 5, 8, 2, 1, 2000))",
        date('d', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Номер дня в месяце без нуля спереди",
        "date('j', mktime(7, 5, 8, 2, 1, 2000))",
        date('j', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "День недели (0 - воскресенье)",
        "date('w', mktime(7, 5, 8, 2, 1, 2000))",
        date('w', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Часы в 12-часовом формате",
        "date('h', mktime(7, 5, 8, 2, 1, 2000))",
        date('h', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Часы в 24-часовом формате",
        "date('H', mktime(7, 5, 8, 2, 1, 2000))",
        date('H', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Минуты",
        "date('i', mktime(7, 5, 8, 2, 1, 2000))",
        date('i', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Секунды",
        "date('s', mktime(7, 5, 8, 2, 1, 2000))",
        date('s', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "1, если високосный год, 0, если не високосный",
        "date('L', mktime(7, 5, 8, 2, 1, 2000))",
        date('L', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Порядковый номер недели года",
        "date('W', mktime(7, 5, 8, 2, 1, 2000))",
        date('W', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Количество дней в указанном месяце",
        "date('t', mktime(7, 5, 8, 2, 1, 2000))",
        date('t', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Номер дня от начала года",
        "date('z', mktime(7, 5, 8, 2, 1, 2000))",
        date('z', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Количество секунд, прошедших с 01.01.1970",
        "date('U')",
        number_format(date('U'), 0, ",", " ")
    );
    gridline(
        "Вывод даты в формате d-m-Y",
        "date('d-m-Y', mktime(7, 5, 8, 2, 1, 2000))",
        date('d-m-Y', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Вывод даты в формате d.m.Y",
        "date('d.m.Y', mktime(7, 5, 8, 2, 1, 2000))",
        date('d.m.Y', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Вывод даты в формате H:i:s d.m.Y",
        "date('H:i:s d.m.Y', mktime(7, 5, 8, 2, 1, 2000))",
        date('H:i:s d.m.Y', mktime(7, 5, 8, 2, 1, 2000))
    );
    gridline(
        "Какой день недели был 07.07.1955",
        "date('w', mktime(12, 0, 0, 7, 7, 1955))",
        date('w', mktime(12, 0, 0, 7, 7, 1955))
    );
    gridline(
        "Какой день недели был 25.02.2006",
        "date('w', mktime(21, 0, 0, 2, 25, 2006))",
        date('w', mktime(21, 0, 0, 2, 25, 2006))
    );
?>
<h2>strtotime()</h2>
<?php
    gridline(
        "Сейчас",
        "date('Y.m.d H:i:s', strtotime('now'))",
        date('Y.m.d H:i:s', strtotime('now'))
    ); 
    gridline(
        "Конкретная дата", 
        "date('Y.m.d H:i:s', strtotime('10 September 2000'))", 
        date('Y.m.d H:i:s', strtotime('10 September 2000'))
    ); 
    gridline(
        "Ровно через сутки", 
        "date('Y.m.d H:i:s', strtotime('+1 day'))", 
        date('Y.m.d H:i:s', strtotime('+1 day'))
    ); 
    gridline(
        "Ровно через неделю", 
        "date('Y.m.d H:i:s', strtotime('+1 week'))", 
        date('Y.m.d H:i:s', strtotime('+1 week'))
    ); 
    gridline(
        "Через определенное время", 
        "date('Y.m.d H:i:s', strtotime('+1 week 2 days 4 hours 2 seconds'))", 
        date('Y.m.d H:i:s', strtotime('+1 week 2 days 4 hours 2 seconds'))
    ); 
    gridline(
        "Следующий четверг", 
        "date('Y.m.d H:i:s', strtotime('next Thursday'))", 
        date('Y.m.d H:i:s', strtotime('next Thursday'))
    ); 
    gridline(
        "Прошедший понедельник", 
        "date('Y.m.d H:i:s', strtotime('last Monday'))", 
        date('Y.m.d H:i:s', strtotime('last Monday'))
    ); 
?>

<h2>Добавление и вычитание даты</h2>
<?php
    $d = date_create("2025-12-31");
    date_modify($d, "1 day");
    gridline1(
        '$d = date_create("2025-12-31"); date_modify($d, "1 day"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2025-12-31');
    date_modify($d, "3 days");
    gridline1(
        '$d = date_create("2025-12-31"); date_modify($d, "3 days"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2025-12-31');
    date_modify($d, "3 days 1 month");
    gridline1(
        '$d = date_create("2025-12-31"); date_modify($d, "3 days 1 month"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2025-01-01');
    date_modify($d, "-1 day");
    gridline1(
        '$d = date_create("2025-01-01"); date_modify($d, "-1 day"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    gridline1( '&nbsp', '');

    $d = date_create("2005-07-15");
    date_modify($d, "1 day");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "1 day"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "3 days");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "3 days"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "3 days 1 month");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "3 days 1 month"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "-1 day");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "-1 day"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "-2 week");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "-2 week"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "-3 month -11 day");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "-3 month -11 day"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "-5 year");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "-5 year"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );

    $d = date_create('2005-07-15');
    date_modify($d, "-97 year -7 month 2 week");
    gridline1(
        '$d = date_create("2005-07-15"); date_modify($d, "-97 year -7 month 2 week"); date_format($d, "d.m.Y");',
        date_format($d, 'd.m.Y')
    );
?>