<?php
//table 
// $num = 4;

// for ($i = 1; $i <= 10; $i++) {
// 	echo "$num X $i=";
// 	echo $num * $i;
// 	echo "<br> ";
// }

// echo "<br>";

// //factroil of any value
// $num = 1;

// for ($i = 4; $i >= 1; $i--) {
// 	$num = $num * $i;
// }
// echo "$num";

// echo "<br>";

// for ($i = 1; $i <= 10; $i++) {
// 	echo "<br>";
// 	if ($i == 4 || $i == 8) {
// 		continue;
// 	}
// 	echo $i;
// 	}

// echo "<br>";

// square form
//$x = 15;

// for ($i = 1; $i <= 10; $i++) {
// 	$a= $i*$i;
// 	echo "$i X $i =";
// 	//echo "($a)<sup>1/2</sup>";
//  echo $a;
//  echo "<br>";
// }

// echo "<br>";

//cube root ;;

// for ($i = 1; $i <= 10; $i++) {
// 	$a= $i*$i*$i;
// 	echo "$i X $i X $i =";
//echo "($a)<sup>1/2</sup>";
//  echo $a;
//  echo "<br>";
// }

//loop 1 to 20 
//output=1 2 3 4 5 6 7....16 17 18 break;

// for ($i=1; $i <= 20; $i++) {
// 	if(($i<=13)&& ($i>7)){
// 		continue;
// 	}
// 	if($i>17){
// 		break;
// 	}
// 	echo $i;
// 	echo"<br> "; 
// }

// echo "<br>";

$a = 0;

for ($i = 0; $i <= 13; $i += 2) {
	$a = $a + $i;
}
echo "sum of  even No=$a";

echo "<br>";


// $a = 0;

// for ($i = 0; $i <=13; $i+=$i) {
// 	$a= $a+$i;
// }
// echo "sum of  even No=$a";

echo "<br>";





$a = 0;
$b = 1;

for ($i = 0; $i <= 15; $i++) {
	echo $a;
	$c = $a + $b;
	$b = $a;
	$a = $c;


	echo "<br>";
}

?>