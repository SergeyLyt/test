<?php

//echo 7/3;  //Получить остаток деления 7 на 3

//echo 7+round(7,15);  //Получить целую часть сложения 7 и 7,15

//echo sqrt(25);  //Получить корень из 25



//$str = 'Десять негритят пошли купаться в море'; Получить 4-е слово из фразы
//$arr = explode(' ', $str);
//echo $arr[3];

$str = 'Десять негритят пошли купаться в море';
$arr = mb_substr($str, 16, 1);
echo $arr;


//$str = 'Десять негритят пошли купаться в море'; //Сделать заглавной первую букву во всех словах фразы
//echo mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');

//echo mb_strlen('Десять негритят пошли купаться в море');//Посчитать длину строки



//echo (true == 1); //Правильно ли утверждение true равно 1 ВЕРНО!
 
//echo (false === 0); //Правильно ли утверждение false тождественно 0 НЕ ВЕРНО!

//echo strlen('three');//Какая строка длиннее: three(5) < три(6)
//echo strlen('три'); 

//echo 125*13+7 > 223+28*2; //выводит true и значит первое больше чем второе
