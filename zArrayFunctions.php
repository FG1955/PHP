<style>
    h1 {
        border-top: medium double black;
        padding: 4px 6px 6px;
        background: #FED;
    }
    h2 {
        border-top: thin solid black;
        padding: 4px 6px 6px;
        background: #FEE;
    }
    div {
        padding-top: 4px;
        padding-bottom: 3px;
    }
    strong {
        font-weight: bold;
        color: red;
    }
    em {
        font-weight: bold;
        color: blue;
    }
</style>
<pre>
<?php
    $arr1 = range(4, 20, 4);
    echo "<h2><em>arr1</em> = <strong>range</strong>(4, 20, 4)</h2>";
    print_r($arr1);

    echo "<div><strong>count</strong>(<em>arr1</em>) = " . count($arr1) . "</div>";

    $needle = 5;
    echo "<div><strong>in_array</strong>($needle, <em>arr1</em>) = " . (in_array($needle, $arr1) ? "true" : "false") . "</div>";
    $needle = 16;
    echo "<div><strong>in_array</strong>($needle, <em>arr1</em>) = " . (in_array($needle, $arr1) ? "true" : "false") . "</div>";

    echo "<div><strong>array_sum</strong>(<em>arr1</em>) = "     . number_format(array_sum($arr1)    , 0, ",", " ") . "</div>";
    echo "<div><strong>array_product</strong>(<em>arr1</em>) = " . number_format(array_product($arr1), 0, ",", " ") . "</div>";

    echo "<h2><em>arr2</em></h2>";
    $arr2 = [
        "Раз",
        "Два",
        "Три",
        ];
    print_r($arr2);

    $arr3 = array_merge($arr1, $arr2);
    echo "<h2><em>arr3</em> = <strong>array_merge</strong>(<em>arr1</em>, <em>arr2</em>)</h2>";
    print_r($arr3);

    echo "<div><strong>array_sum</strong>(<em>arr3</em>) = "     . number_format(array_sum($arr3)    , 0, ",", " ") . "</div>";
    echo "<div><strong>array_product</strong>(<em>arr3</em>) = " . number_format(array_product($arr3), 0, ",", " ") . "</div>";

    echo "<h2><strong>array_slice</strong>(<em>arr3</em>, 3, 4)</h2>";
    print_r(array_slice($arr3, 3, 4));

    echo "<h2><em>arr4</em></h2>";
    $arr4 = [
        1000,
        "четыре",
        125
    ];
    print_r($arr4);
    echo "<h2>Result of <strong>array_splice(<em>arr3</em>, 3, 2, <em>arr4</em>)</strong></h2>";
    print_r(array_splice($arr3, 3, 2, $arr4));
    echo "<h2><em>arr3</em> after <strong>array_splice(<em>arr3</em>, 3, 2, <em>arr4</em>)</strong></h2>";
    print_r($arr3);

    echo "<h2><em>arr5</em></h2>";
    $arr5 = [
        "first" => 1,
        2 => "value 2",
        "third" => 3,
        4 => "value 4"
    ];
    print_r($arr5);
    echo "<h2><strong>array_keys</strong>(<em>arr5</em>)</h2>";
    print_r(array_keys($arr5));
    echo "<h2><strong>array_values</strong>(<em>arr5</em>)</h2>";
    print_r(array_values($arr5));

    echo "<h2><em>arr6keys</em></h2>";
    $arr6keys = [
        "key1",
        "key2",
        "key3"
    ];
    print_r($arr6keys);
    echo "<h2><em>arr6values</em></h2>";
    $arr6values = [
        "value 1",
        "value 2",
        "value 3"
    ];
    print_r($arr6values);
    echo "<h2><em>arr6</em> = <strong>array_combine</strong> (<em>arr6keys</em>, <em>arr6values</em>)</h2>";
    $arr6 = array_combine($arr6keys, $arr6values);
    print_r($arr6);

    echo "<h2><strong>array_flip</strong>(<em>arr6</em>)</h2>";
    print_r(array_flip($arr6));

    echo "<h2><strong>array_reverse</strong>(<em>arr6</em>)</h2>";
    print_r(array_reverse($arr6));

    echo "<h2><strong>array_reverse</strong>(<em>arr6</em>, true)</h2>";
    echo "<div>Второй параметр функции <strong>array_reverse</strong> работает только с числовыми ключами.</div>";
    print_r(array_reverse($arr6, true));

    echo "<h2><strong>array_reverse</strong>(<em>arr1</em>)</h2>";
    print_r(array_reverse($arr1));

    echo "<h2><strong>array_reverse</strong>(<em>arr1</em>, true)</h2>";
    echo "<div>Второй параметр функции <strong>array_reverse</strong> с числовыми ключами работает.</div>";
    print_r(array_reverse($arr1, true));

    $needle = 5;
    echo "<h2><strong>array_search</strong>($needle, <em>arr1</em>)</h2>";
    echo "<div><strong>array_search</strong>($needle, <em>arr1</em>) = '" . array_search($needle, $arr1) . "'</div>";

    $needle = 16;
    echo "<h2><strong>array_search</strong>($needle, <em>arr1</em>)</h2>";
    echo "<div><strong>array_search</strong>($needle, <em>arr1</em>) = '" . array_search($needle, $arr1) . "'</div>";

    $needle = '16';
    echo "<h2><strong>array_search</strong>('$needle', <em>arr1</em>)</h2>";
    echo "<div><strong>array_search</strong>('$needle', <em>arr1</em>) = '" . array_search($needle, $arr1) . "'</div>";

    $needle = '16';
    echo "<h2><strong>array_search</strong>('$needle', <em>arr1</em>, true)</h2>";
    echo "<div><strong>array_search</strong>('$needle', <em>arr1</em>, true) = '" . array_search($needle, $arr1, true) . "'</div>";

    $arr7a = [
        'key1' => 'value 1 from array A',
        'key2' => 'value 2 from array A',
        'key3' => 'value 3 from array A',
        'key4' => 'value 4 from array A'
    ];
    echo "<h2><em>arr7a</em></h2>";
    print_r($arr7a);
    $arr7b = [
        'key1' => 'value 1 from array B',
        'key3' => 'value 3 from array B',
        'key5' => 'value 5 from array B',
        'key6' => 'value 6 from array B'
    ];
    echo "<h2><em>arr7b</em></h2>";
    print_r($arr7b);
    echo "<h2><strong>array_replace</strong>(<em>arr7a</em>, <em>arr7b</em>)</h2>";
    print_r(array_replace($arr7a, $arr7b));

    $arr8 = [
        'value 1',
        'value 2',
        'value 3',
        'value 4',
        'value 1',
        'value 2',
        'value 1',
        'value 3',
        'value 1',
        'value 2'
    ];
    echo "<h2><em>arr8</em></h2>";
    print_r($arr8);
    echo "<h2><strong>array_count_values</strong>(<em>arr8</em>)</h2>";
    print_r(array_count_values($arr8));

    $arr9 = [
        'value 1',
        'value 2',
        'value 3',
        'value 4',
        'value 5',
        'value 6',
        'value 7'
    ];
    echo "<h2><em>arr9</em></h2>";
    print_r($arr9);

    echo "<h2><strong>array_rand</strong>(<em>arr9</em>)</h2>";
    $key = array_rand($arr9);
    echo "<div><strong>array_rand</strong>(<em>arr9</em>) = " . $key . "<div>";
    echo "<div><em>arr9</em>[<strong>array_rand</strong>(<em>arr9</em>)] = " . $arr9[$key]. "<div>";

    echo "<h2><strong>array_rand</strong>(<em>arr9</em>, 4)</h2>";
    $keys = array_rand($arr9, 4);
    print_r($keys);

    $arr10 = [
        'value 1',
        'value 2',
        'value 3',
        'value 4',
        'value 5'
    ];
    echo "<h2><em>arr10</em></h2>";
    print_r($arr10);
    echo "<h2><strong>shuffle(<em>arr10</em>)</strong></h2>";
    shuffle($arr10);
    print_r($arr10);

    echo "<h2><em>arr8</em></h2>";
    print_r($arr8);
    echo "<h2><strong>array_unique</strong>(<em>arr8</em>)</h2>";
    print_r(array_unique($arr8));

    echo "<h2><em>arr9</em></h2>";
    print_r($arr9);

    echo "<h2><strong>array_shift</strong></h2>";
    echo "<div><strong>array_shift</strong>(<em>arr9</em>) = " . array_shift($arr9) . "</div>";

    echo "<h2><strong>array_pop</strong></h2>";
    echo "<div><strong>array_pop</strong>(<em>arr9</em>) = " . array_pop($arr9) . "</div>";

    echo "<h2><strong>array_unshift</strong>(<em>arr9</em>, 'added 1', 'added 2')</h2>";
    array_unshift($arr9, 'added 1', 'added 2');
    print_r($arr9);

    echo "<h2><strong>array_push</strong>(<em>arr9</em>, 'added 8', 'added 9')</h2>";
    array_push($arr9, 'added 8', 'added 9');
    print_r($arr9);

    $arr10 = [1, 2, 3, 4, 5];
    echo "<h2><em>arr10</em></h2>";
    print_r($arr10);
    echo "<h2><strong>array_pad(<em>arr10</em>, 8, 6)</strong>(</h2>";
    print_r(array_pad($arr10, 8, 6));

    $arr10 = [1, 2, 3, 4, 5];
    echo "<h2><em>arr10</em></h2>";
    print_r($arr10);
    echo "<h2><strong>array_pad(<em>arr10</em>, -8, 6)</strong>(</h2>";
    print_r(array_pad($arr10, -8, 6));

    echo "<h2><em>arr11</em> = <strong>array_fill</strong>(2, 4, 'The same value')</h2>";
    $arr11 = array_fill(2, 4, 'The same value');
    print_r($arr11);

    echo "<h2><em>arr12</em> = <strong>array_fill_keys</strong>(['k1', 'k2', 'k3'], 'The same value')</h2>";
    $arr12 = array_fill_keys(['k1', 'k2', 'k3'], 'The same value');
    print_r($arr12);

    echo "<h2><strong>array_chunk</strong>(<strong>range</strong>(1, 9), 3)</h2>";
    $arr13 = array_chunk(range(1, 9, 1), 3);
    print_r($arr13);

    $arr10 = [1, 2, 3, 4, 5];
    echo "<h2><em>arr10</em></h2>";
    print_r($arr10);

    function addText($element) {
        return "Text " . $element;
    }

    echo "<h2><strong>array_map</strong>('addText', <em>arr10</em>)</h2>";
    print_r(array_map('addText', $arr10));

    $arr15a = [1, 2, 3, 4];
    echo "<h2><em>arr15a</em></h2>";
    print_r($arr15a);

    $arr15b = [1, 2, 5, 6];
    echo "<h2><em>arr15b</em></h2>";
    print_r($arr15b);

    $arr15c = [1, 2, 7, 8];
    echo "<h2><em>arr15c</em></h2>";
    print_r($arr15c);

    echo "<h2><strong>array_intersect</strong>(<em>arr15a</em>, <em>arr15b</em>, <em>arr15c</em>)</h2>";
    print_r(array_intersect($arr15a, $arr15b, $arr15c));


    $arr16a = [1, 2, 3, 4];
    echo "<h2><em>arr16a</em></h2>";
    print_r($arr16a);

    $arr16b = [1, 2, 5, 6];
    echo "<h2><em>arr16b</em></h2>";
    print_r($arr16b);

    $arr16c = [1, 2, 7, 8];
    echo "<h2><em>arr16c</em></h2>";
    print_r($arr16c);

    echo "<h2><strong>array_diff</strong>(<em>arr16a</em>, <em>arr16b</em>, <em>arr16c</em>)</h2>";
    print_r(array_diff($arr16a, $arr16b, $arr16c));

    // ========================================================================
    echo "<h1>Функции для сортировки массивов</h1>";

    echo "<h2><strong>sort</strong> - по возрастанию элементов</h2>";
    $arr17 = [
        'key 1' => 'value 21',
        'key 2' => 'value 82',
        'key 3' => 'value 38',
        'key 4' => 'value 45',
        'key 5' => 'value 15'
    ];
    print_r($arr17);
    sort($arr17);
    echo "<div></div>";
    print_r($arr17);

    echo "<h2><strong>rsort</strong> - по убыванию элементов</h2>";
    $arr18 = [
        'key 1' => 'value 21',
        'key 2' => 'value 82',
        'key 3' => 'value 38',
        'key 4' => 'value 45',
        'key 5' => 'value 15'
    ];
    print_r($arr18);
    rsort($arr18);
    echo "<div></div>";
    print_r($arr18);


    echo "<h2><strong>asort</strong> - по возрастанию элементов с сохранением ключей</h2>";
    $arr19 = [
        'key 1' => 'value 21',
        'key 2' => 'value 82',
        'key 3' => 'value 38',
        'key 4' => 'value 45',
        'key 5' => 'value 15'
    ];
    print_r($arr19);
    asort($arr19);
    echo "<div></div>";
    print_r($arr19);

    echo "<h2><strong>arsort</strong> - по убыванию элементов с сохранением ключей</h2>";
    $arr20 = [
        'key 1' => 'value 21',
        'key 2' => 'value 82',
        'key 3' => 'value 38',
        'key 4' => 'value 45',
        'key 5' => 'value 15'
    ];
    print_r($arr20);
    arsort($arr20);
    echo "<div></div>";
    print_r($arr20);

    echo "<h2><strong>ksort</strong> - по возрастанию ключей</h2>";
    $arr21 = [
        'key 2' => 'value 21',
        'key 3' => 'value 82',
        'key 5' => 'value 38',
        'key 1' => 'value 45',
        'key 4' => 'value 15'
    ];
    print_r($arr21);
    ksort($arr21);
    echo "<div></div>";
    print_r($arr21);

    echo "<h2><strong>krsort</strong> - по убыванию ключей</h2>";
    $arr22 = [
        'key 2' => 'value 21',
        'key 3' => 'value 82',
        'key 5' => 'value 38',
        'key 1' => 'value 45',
        'key 4' => 'value 15'
    ];
    print_r($arr22);
    krsort($arr22);
    echo "<div></div>";
    print_r($arr22);

    // объявление класса сортируемых объектов
    class Person {
        private $name;
        private $age;
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age  = $age;
        }
        public function getName() {
            return $this->name;
        }
        public function getAge() {
            return $this->age;
        }
    }

    // функция сортировки по имени
    function sortByName(Person $a, Person $b) {
        if ($a->getName() === $b->getName()) {
            if ($a->getAge() === $b->getAge()) {
                $result = 0;
            } elseif ($a->getAge() > $b->getAge()) {
                $result = 1;
            } elseif ($a->getAge() < $b->getAge()) {
                $result = -1;
            }
        } elseif ($a->getName() > $b->getName()) {
            $result = 1;
        } elseif ($a->getName() < $b->getName()) {
            $result = -1;
        }
        return $result;
    }

    // функция сортировки по возрасту
    function sortByAge(Person $a, Person $b) {
        if ($a->getAge() === $b->getAge()) {
            if ($a->getName() === $b->getName()) {
                $result = 0;
            } elseif ($a->getName() > $b->getName()) {
                $result = 1;
            } elseif ($a->getName() < $b->getName()) {
                $result = -1;
            }
        } elseif ($a->getAge() > $b->getAge()) {
            $result = 1;
        } elseif ($a->getAge() < $b->getAge()) {
            $result = -1;
        }
        return $result;
    }

    // собственно сортировки с использованием функций
    echo "<h2><strong>usort</strong> - сортировка сотрудников по имени</h2>";
    $arr23 = [
        'person 1' => new Person("Надя", 33),
        'person 2' => new Person("Лена", 24),
        'person 3' => new Person("Петя", 28),
        'person 4' => new Person("Вася", 33),
        'person 5' => new Person("Лена", 20)
    ];
    print_r($arr23);
    usort($arr23, 'sortByName');
    echo "<div></div>";
    print_r($arr23);

    echo "<h2><strong>usort</strong> - сортировка сотрудников по возрасту</h2>";
    $arr24 = [
        'person 1' => new Person("Надя", 33),
        'person 2' => new Person("Лена", 24),
        'person 3' => new Person("Петя", 28),
        'person 4' => new Person("Вася", 33),
        'person 5' => new Person("Лена", 20)
    ];
    print_r($arr24);
    usort($arr24, 'sortByAge');
    echo "<div></div>";
    print_r($arr24);

    echo "<h2><strong>usort</strong> - сортировка сотрудников по имени с сохранением ключей</h2>";
    $arr25 = [
        'person 1' => new Person("Надя", 33),
        'person 2' => new Person("Лена", 24),
        'person 3' => new Person("Петя", 28),
        'person 4' => new Person("Вася", 33),
        'person 5' => new Person("Лена", 20)
    ];
    print_r($arr25);
    uasort($arr25, 'sortByName');
    echo "<div></div>";
    print_r($arr25);

    echo "<h2><strong>usort</strong> - сортировка сотрудников по возрасту с сохранением ключей</h2>";
    $arr26 = [
        'person 1' => new Person("Надя", 33),
        'person 2' => new Person("Лена", 24),
        'person 3' => new Person("Петя", 28),
        'person 4' => new Person("Вася", 33),
        'person 5' => new Person("Лена", 20)
    ];
    print_r($arr26);
    uasort($arr26, 'sortByAge');
    echo "<div></div>";
    print_r($arr26);

    echo "<h2><strong>uksort</strong> - сортировка массива по ключам с помощью функции</h2>";
    $arr27 = [
        '2016.10.05' => new Person("Надя", 33),
        '2012.05.29' => new Person("Лена", 24),
        '2010.12.08' => new Person("Петя", 28),
        '2015.04.22' => new Person("Вася", 33),
        '2011.10.15' => new Person("Лена", 20)
    ];

    function sortByBirthday($a, $b) {
        $a = substr($a, 5);
        $b = substr($b, 5);
        if     ($a === $b) { return  0; }
        elseif ($a  >  $b) { return  1; }
        elseif ($a  <  $b) { return -1; }
    }

    print_r($arr27);
    uksort($arr27, 'sortByBirthday');
    echo "<div></div>";
    print_r($arr27);

    echo "<h2><strong>natsort</strong> - натуральная сортировка</h2>";
    $arr28 = ["a10", "b14", "b10", "a6"];
    print_r($arr28);
    natsort($arr28);
    echo "<div></div>";
    print_r($arr28);

    echo "<h2><strong>array_multisort</strong>(<em>arr29a</em>, <em>arr29b</em>)</h2>";
    $arr29a = array(14, 25, 12, 36, 25);
    $arr29b = array(0, 1, 2, 3, 4);

    echo "<h3><em>arr29a</em></h3>";
    print_r($arr29a);
    echo "<h3><em>arr29b</em></h3>";
    print_r($arr29b);

    array_multisort($arr29a, $arr29b);

    echo "<h3>После <strong>array_multisort</strong> (параллельной сортировки)</h3>";

    echo "<h3><em>arr29a</em></h3>";
    print_r($arr29a);
    echo "<h3><em>arr29b</em></h3>";
    print_r($arr29b);
?>
</pre>
