<?php
//Задание 1
// С помощью цикла while вывести все числа в промежутке от 0 до 100,
// которые делятся на 3 без остатка.
  echo "задание 1 <br>";
  $i = 0;
  echo "вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.: ";
  while($i <= 100){
      if($i % 3 == 0){
          echo "$i ";
      }
      $i++;
  }
?>
<?php
// С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.
echo "<hr>";
echo "задание 2 <br>";
$i = 0;
do{
    if($i == 0){
        echo "$i - ноль.";
        echo "<br>";
    }
    elseif($i % 2 == 0){
        echo "$i - четное число.";
        echo "<br>";
    }
    else{
        echo "$i - нечетное число.";
        echo "<br>";
    }
    $i++;
}

while($i <= 10);
?>
<?php
// Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
//массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
//// Москва, Зеленоград, Клин
// Ленинградская область:
//// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)
////Шипово, Сапожок, Михайлов
 $array = [
     "Московская область" => ["Москва", "Зеленоград", "Клин"],
     "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
     "Рязанская область" => ["Шипово", "Сапожок", "Михайлов"]
 ];
 echo "<hr>";
 echo "задание 3 <br>";
 foreach ($array as $key => $value) {
      echo "$key: <br>";
     echo implode(", ", $value)."<br>";
 }
?>
<?php
// Объявить массив, индексами которого являются буквы русского языка, а значениями –
// соответствующие латинские
// буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Написать функцию транслитерации строк.
echo "<hr>";
echo "задание 4 <br>";
function letters_translate ($letter){
  $translate = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'e',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'iy',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ы' => 'y',
    'э' => 'ie',
    'ю' => 'yu',
    'я' => 'ya'
  ];
  return strtr($letter, $translate);
}
echo "текст для проверки <br>";
echo letters_translate("текст для проверки");
 ?>
 <?php
//Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 echo "<hr>";
 echo "задание 5 <br>";
 function replaceWhitespace($text){
  return str_replace(' ', '_', $text);
}

echo replaceWhitespace("текст для проверки");
?>

<?php
// Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
// for (…){ // здесь пусто}
echo "<hr>";
echo "задание 7 <br>";
for ($k = 0; $k < 10; print $k++ . ' ') {
};
  echo $k;
 ?>

 <?php
// Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
echo "<hr>";
echo "задание 8 <br>";
$array = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Шипово", "Сапожок", "Михайлов", "Кораблино"]
];
foreach ($array as $key => $value) {
     echo "$key: <br>" . "Города на букву К: <br>";
     foreach ($value as $sity) {
       if (mb_substr($sity, 0, 1) == "К") {
         echo $sity . " <br>";
       }
     }
  echo "<br>";
}

  ?>
  <?php
  // Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
  // производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании
  // url-адресов на основе названия статьи в блогах).
    echo "<hr>";
    echo "задание 9 <br>";

    function text_translate ($textENG){
      $translateRU = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'iy',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ы' => 'y',
        'э' => 'ie',
        'ю' => 'yu',
        'я' => 'ya'
      ];
      return strtr($textENG, $translateRU);
    }

    function replaceWhitespaces($textENG){
      return str_replace(' ', '_', $textENG);
    }
    function textRUtranslate ($textENG) {
      return replaceWhitespaces(text_translate($textENG));
    }
    echo "текст для проверки <br>";
    echo textRUtranslate("текст для проверки");
   ?>
