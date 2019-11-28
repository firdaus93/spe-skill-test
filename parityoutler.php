<?php

$array1 = array(0,1,2,3,4,5,6,7,8,9);
$oddarray = array();
$evenarray = array();

$count = 1;

echo "";
foreach ($array1 as $value)
 {
    echo "$value,";
}

echo "should return even:";

foreach ($array1 as $print)
{
    if ($count%2==1)
    {
        $evenarray = $print;
        echo "$print";
    }
    $count++;
}

echo "should return odd:";

foreach ($array1 as $print2) {
    if ($count%2!=1)
    {
        $oddarray[] = $print2;
        echo "$print2";
    }
    $count++;
}