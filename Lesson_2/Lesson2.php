<?php

// задание 1
// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
//Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
// Ноль можно считать положительным числом.
function compare(int $a, int $b) {
    if ($a >= 0 && $b >= 0) {
        return $a - $b;
    }
    if ($a < 0 && $b < 0) {
        return $a * $b;
    }
    return $a + $b;
}

$a = rand(-10, 10);
$b = rand(-10, 10);
echo 'Задание 1.<br>';
echo 'a = ' . $a . '<br>';
echo 'b = ' . $b . '<br>';
echo compare($a, $b) . '<hr>';
//Задание 2
//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
//switch организовать вывод чисел от $a до 15.
function getNumbers($a) {
    $result = '';
    switch ($a) {
        case 0:
            $result .= '0 ';
        case 1:
            $result .= '1 ';
        case 2:
            $result .= '2 ';
        case 3:
            $result .= '3 ';
        case 4:
            $result .= '4 ';
        case 5:
            $result .= '5 ';
        case 6:
            $result .= '6 ';
        case 7:
            $result .= '7 ';
        case 8:
            $result .= '8 ';
        case 9:
            $result .= '9 ';
        case 0:
            $result .= '10 ';
        case 11:
            $result .= '11 ';
        case 12:
            $result .= '12 ';
        case 13:
            $result .= '13 ';
        case 14:
            $result .= '14 ';
        case 15:
            $result .= '15 ';
    }
    return $result;
}

$a = rand(0, 15);
echo 'Задание 2.<br>';
echo 'a = ' . $a . '<br>';
echo getNumbers($a) . '<hr>';
//Задание 3
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//Обязательно использовать оператор return.
function add($a, $b)
{
    return $a + $b;
}

function subs($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function dev($a, $b)
{
    return $a / $b;
}

echo add(3, 4) . "<br>";
echo subs(3, 4) . "<br>";
echo mult(3, 4) . "<br>";
echo dev(3, 4) . "<br>";
//Задание 4
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 –
// значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case 'add':
            return $a + $b;
            break;

        case 'subs':
            return $a - $b;
            break;

        case 'mult':
            return $a * $b;
            break;

        case 'dev':
            return $a / $b;
            break;

        default:
            echo 'Введена неверная команда';
            break;
    }
}

echo mathOperation(3, 4, 'add') . "<br>";
echo mathOperation(3, 4, 'subs') . "<br>";
echo mathOperation(3, 4, 'mult') . "<br>";
echo mathOperation(3, 4, 'dev');
// Задание 5
// Посмотреть на встроенные функции PHP.
// Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php echo 'Текущий год: ' . date('Y'); ?>
</body>

</html>
 ?>
