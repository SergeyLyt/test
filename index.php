<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//var_dump(count($arr));//посчитать длину массива

//переместить первые 4 элемента массива в конец массива
/*$count = 0;
foreach ($arr as $k => $v){
    $arr[] = array_shift($arr);
   $count++;
   if($count>=4){
       break;
   };

}
var_dump($arr)*/;

//получить сумму 4,5,6 элемента
//echo ($arr[3] + $arr[4] + $arr[5]);


/*$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];*/
//var_dump(array_diff($secondArr,$firstArr)); //отсутствуют в первом массиве и присутствуют во втором

//var_dump(array_diff($firstArr,$secondArr)); //присутствую в первом и отсутствуют во втором

//var_dump(array_intersect($firstArr,$secondArr)); //значения которых совпадают

//var_dump(array_diff_assoc($firstArr,$secondArr)); //значения которых отличается

$firstArr = [
    'one'   => 1,
    'two'   => ['one' => 1, 'seven' => 22, 'three' => 32,],
    'three' => ['one' => 1, 'two' => 2,],
    'foure' => 5,
    'five'  => ['three' => 32, 'foure' => 5, 'five' => 12,]];

//получить все вторые элементы вложенных массиво

foreach ($firstArr as $k => $v){
    if (is_array($v)){
        var_dump(array_slice($v, 1, 1));
    }

}

//echo count ($firstArr, COUNT_RECURSIVE); //получить общее количество элементов в массиве

/*function sumRecursive($firstArr){
$sum = 0;
foreach($firstArr as $v) {
    if(is_array($v)){
        $sum += sumRecursive($v);
    } else{
        $sum += $v;
    }
}
        return $sum;
}
var_dump(sumRecursive($firstArr));*/ //получить сумму всех значений в массиве



