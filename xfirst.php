<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php tutorial</title>
</head>
<body>
	<?php
// 	echo "hello word <br>";
// $str1="This is a string <br>";
// echo $str1;
// $a =123;
// $b =44; 
// echo $a +$b ;




	// $fruits =  array('apple','orange','grapes');
	// var_dump($fruits);


	// $var1 = null;

	// $str1 = "my name is amit";
	// echo strlen($str1), "<br>";
	// echo str_word_count($str1),"<br>";
	// echo strrev($str1),"<br>";
	// echo strpos($str1, 'amit'),"<br>";
	// echo str_replace('is', 'are', $str1),"<br>";

	// define("pi", 3.14);
     // echo pi;

     // echo "The value of 4 +3 is ", 4+3 , "<br>";
     // echo "The value of 4 -3 is ", 4-3 , "<br>";
     // echo "The value of 4 *3 is ", 4*3 , "<br>";
     // echo "The value of 4 /3 is ", 4/3 , "<br>";
     // echo "The value of 4 %3 is ", 4%3 , "<br>";
     // echo "The value of 4 **3 is ", 4**3 , "<br>";
     // $x = 4;
     // echo $x, "<br>";
     // $x = $x + 2;
     // echo $x;

// 	$t = date("H");
// 	if ($t <"10")
// 	{
// 		echo $t . "is a good time";
// 	}
// 	else if ($t==12) 
// 	{
// 		echo "This is 12";
// 	}
// 	else 
// 	{
// 		echo "bed luck";
// 	}
// echo date_default_timezone_get();

	// $var1 = 2;
	// while ($var1 <=4)
	//  {
	// 	echo "The current value of the variable is ".$var1 . "<br>";
	// 	$var1 ++;

	// }

	// for ($i=0; $i < 7; $i++) { 
	// 	echo "currnet value of i is ",$i,"<br>",
	// 	"<hr>";
	// }

	// function average_numbers($num1,$num2,$num3)
	// {
	// 	$average = ($num1 + $num2+$num3)/3;
	// 	return $average;
     // }

	// echo average_numbers(11,9,17), "<br>";


	//  define("pi", 3.14);
     //  //echo pi,"<br>";


	// function area_cicle($radius)
	// {
	// 	$radius; 
	// 	$area = pi * $radius *$radius;
	// 	return $area;
	// }
	
	// echo "the area of our circle is ,<br>".area_cicle(12),"<br>";

	// function area_rectangle($length,$breadth)
	// {
	// 	$langth;  $breadth;
	// 	$area = $length * $breadth;
	// 	return $area;
	// }
	// echo "The area of rectangle is ,<br>". area_rectangle(5,6),"<br>";


	$numbers = array(6,8,3,9,2);//[6,8,3,9,2];

     sort($numbers);

	rsort($numbers);
	$length = count($numbers);

	for ($i=0; $i < $length; $i++) 
	{ 
		echo $numbers[$i];  
		echo "<br>";
	}


 ?>
 
</body>

</html> 