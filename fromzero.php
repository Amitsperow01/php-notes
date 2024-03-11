<?php

// $a = 1;


// for ($i = 5; $i >= 1; $i--) {
// 	$a = $a * $i;
// }
// echo $a;


// echo "<br> ";

// $a = 1;
// $b = 0;

// for ($num = 0; $num < 17; $num++) {
// 	echo $b;
// 	$c = $a + $b;
// 	$a = $b;
// 	$b = $c;
// 	echo "<br> ";
// }
// echo "<br> ";


// $a = 1;
// for ($i = 0; $i <= 1000; ) {
// 	echo $i;
// 	$c = $a + $i;
// 	$a = $i;
// 	$i = $c;
// 	echo "<br>";
// }

//alphabets 

// for ($i = "a"; $i <= "z"; $i++) {
// 	echo $i;
// 	if ($i >= "z") {
// 		break;
// 	}
// }
// echo "<br>";
// echo "<br>";

//9 99 999 9999 99999

// $a = 10;
// for ($i = 1; $i <= 10; $i++) {
// 	$c = ($a ** $i - 1);
// 	echo $c;

// 	echo "<br>";
// }

echo "<br>";
echo "<br>";

//odd;even counts
// $a = $b = 0;

// for ($i = 1; $i <= 50; $i++) {
// 	$a += $i % 2 == 0;
// 	$b += $i % 2 == 1;
// }
// echo "Total Even Number = " . $a . "<br>";
// echo "Total Odd Number = " . $b;

// echo "<br>";
// echo "<br>";

// //odd;even counts
// $even = $odd = 0;

// for ($i = 1; $i <= 59; $i++) {
// 	if ($i % 2 == 0) {
// 		$even++;
// 	} else {
// 		$odd++;
// 	}
// }
// echo "Total Even Number = " . $even . "<br>";
// echo "Total Odd Number = " . $odd;

echo "<br>";
echo "<br>";


//example to demonstrate star pattern 
for($i=0;$i<8;$i++)
{
for($a=0;$a<=$i;$a++) {
echo "🐘";
}
echo "<br/>";
}

echo "<br>";
echo "<br>";

$b=6;
for ($i=0; $i <=$b ; $i++) { 
	for ($a=0; $a <=$i; $a++) { 
		echo '*';
		}
		echo '<br>';
}
for ($i=$b; $i >=1; $i--) { 
	for ($a=1; $a <=$i; $a++) { 
		echo '*';
	}echo '<br>';
}



//factor of any no.

// $a = 6;
// $b = 1;

// for ($i = 1; $i <= $a - 1; $i++) {
// 	$b *= ($i + 1);
// }
// echo " The factorial of $a = $b" . "\n";
// // echo "<br>";

// echo "<br>";
// echo "<br>";



// for ($a = 0; $a < 10; $a++) {
// 	for ($b = 0; $b < 10; $b++) {
// 		echo $a . $b . ", ";
// 	}
// }

echo "<br>";
echo "<br>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<table align:="left" border:="1" cellpadding="3" cellspacing="0">
		<?php
		for ($i = 1; $i <= 10; $i++) {
			echo "<tr>";
			for ($a = 1; $a <= 10; $a++) {
				echo "<td>$i*$a=" . $i * $a . "</td>";
			}
			echo "</tr>";
		}

		?>
	</table>
</body>

</html> 


