<?php

/*PHP 7 Features:
The spaceship operator is used for comparing two expressions. 
It returns -1, 0 or 1 when $a is respectively less than, 
equal to, or greater than $b . 
Comparisons are performed according to PHP's usual type comparison rules.
*/

/*
<=> Spaceship Operator in PHP 
Return 0 - If both the sides have equal values.
Return 1 - If left side have greater values than right.
Return -1 - If Right side have greater values than Left.
*/


//Numbers
// $num1=200;
// $num2=200;
// echo $num1<=>$num2;

// //String
// $char="w";
// $charN="a";
// echo $char<=>$charN;


// //With Array
// $array = [];
// $array2 = [22,48,22];
// echo $array<=>$array2;

//Objects
// $char = (object)["a"=>"f"];
// $charN = (object)["a"=>"f"];
// echo $char<=>$charN;


if(($handle=fopen("democsv.csv","r"))!==FALSE){
    while(($row=fgetcsv($handle,100,","))!==FALSE){
        $data[]=$row;
    }
    fclose($handle);
}

//Sorted Array
// usort($data,function($left,$right){
// return $left[2]<=>$right[2];
// });

foreach($data as $person){
    echo $person[2].'<br/>';
}


?>