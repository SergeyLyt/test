<?php

/*function get_type($a){

        echo gettype($a) . '<br>';

    }

get_type(4); // integer
get_type('Какой то текст'); // string
get_type(true); // boolean
get_type([1,2]); // array
get_type(1.2); // double
*/


/*$firstArr = [
    'one'   => 10,
    'two'   => [17, 28, 32],
    'three' => [10, 42],
    'foure' => 5,
    'five'  => [ 32, 57, 72]];

function sumRecursive($firstArr){
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
var_dump(sumRecursive($firstArr));*/


/*
function search ($string, $char) {
    foreach (count_chars($string, 1) as $i => $val) {
        if ( chr($i)  == $char) {
            echo $char. " встречается в строке $val раз(а).\n";
        }
    }
}
search('text have one b', 'b');*/

/*$square_main = ['h' => 10, 'w' => 20];
$square_litle = ['h=> 5, 'w' => 5];
 function square ($main, $litle) {
 returne ($main['h']*$main['w'])/($litle['h']*$litle['w'])
}
echo square($square_main, $square_litle);*/


