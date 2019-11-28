<?php

function example1($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}

	if ($number == $sum)
		return 1;

	return 0;
}

$number = 153;
$flag = example1($number);
if ($flag == 1)
	echo "narcissistic(153) // this will return true";
else
	echo "narcissistic(111) // this will return fase"
?>

