<meta charset="windows-1251">
<?php
// task 1
$a = 10;
$b = 2;
$sum = $a + $b;
$sub = $a - $b;
$div = $a / $b;
$multi = $a * $b;
echo ("сумма $sum , разность $sub , частное $div, произведение $multi </br>");
echo "<hr/>";
// task 2
$x = 2;
$y = 6;
$z = 9;
$sum = ( $x + 1 ) * 4 - 2 * ( $z - $x^2 + $y^2 );
echo ("результат 2 задания $sum </br>");
echo "<hr/>";
//task 3
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo("результат 3 задания $result </br>");
echo "<hr/>";
//task 4
$text1 = 'привет';
$text2 = 'мир!';
echo "$text1 + $text2 </br>";
echo "<hr/>";
//task 5
$name = 'Юра';
echo("Привет, $name </br>");
echo "<hr/>";
//task 6
$num = 12345;

$str = $num ."";
$sum = 0;

for($i = 0; $i < strlen($str); $i++)
{
    $sum = $sum + $str[$i];
}
echo ("$sum </br>");
echo "<hr/>";
// task 7 не смог.
/*$secInMin = 60;
$secInHour = $secInMin * 60;
$secInDay = $secInHour * 24;
echo ("секунд в часе $secInDay </br>");
$secInYear = $secInDay * 365;
echo ("секунд в году $secInYear </br>");
$currentDate = date_create();
$date = '2000-01-01 00:00:00';
$userDate = date_create($date);
$seconds = date_diff($currentDate, $userDate);
echo "$seconds";
*/
// task 8 ох уж это время



// task 9
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var ++;
$var --;
echo "$var </br>";

// task 10

define('SURNAME', "Боричевский");
$name = 'Кот';
$grandName = 'Эдуардович';
$allButtonName = $name."";
$firstButtonName = $allButtonName[0];
echo $firstButtonName;
if(SURNAME !== NULL) {
    $surname = SURNAME;
    echo ("Меня зовут $surname");

}
