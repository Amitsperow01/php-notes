<?php
for ($i = 1; $i <= 7; $i++) {
	for ($j = 1; $j <= 7; $j++) {
		if (($i == 1 && $j > 1 && $j < 7) || ($i == 2 && $j > 2 && $j < 7)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 3 && $j == 2) || ($i == 3 && $j > 3 && $j < 7)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 4 && $j > 1 && $j < 4) || ($i == 4 && $j > 4 && $j < 7)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 5 && $j > 1 && $j < 5) || ($i == 5 && $j > 5 && $j < 7)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 6 && $j > 1 && $j < 6) || ($i == 7 && $j > 1 && $j < 7)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "N";
		}
	}
	echo "<br>";
}

// echo "<br>";

//prime 2 to 100

// for ($i = 2; $i <= 100; $i++) {
// 	$prime = true;
// 	for ($j = 2; $j < $i; $j++) {
// 		if ($i % $j == 0) {
// 			$prime = false;
// 			break;
// 		}
// 	}
// 	if ($prime) {
// 		echo $i . " ";
// 	}

// }
// echo "<br>";

// for ($i = 1; $i <= 9; $i++) {
// 	for ($j = 1; $j <= 9; $j++) {
// 		if (($i == 1 && $j < 5) || ($i == 1 && $j > 5)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 2 && $j < 4) || ($i == 2 && $j == 5) || ($i == 2 && $j > 6) || ($i == 3 && $j > 3 && $j < 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 4 && $j == 1) || ($i == 4 && $j > 2 && $j < 8) || ($i == 4 && $j == 9)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 5 && $j < 3) || ($i == 5 && $j > 3 && $j < 7) || ($i == 5 && $j > 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 6 && $j == 1) || ($i == 6 && $j > 2 && $j < 8) || ($i == 6 && $j == 9)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 7 && $j > 3 && $j < 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 8 && $j < 4) || ($i == 8 && $j == 5) || ($i == 8 && $j > 6) || ($i == 9 && $j < 5) || ($i == 9 && $j > 5)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else {
// 			echo "* ";
// 		}
// 	}
// 	echo "<br>";
// }

// echo "<br>";
// $n = 5;
// $a = 1;
// for ($i = $n; $i > 0; $i--) {
// 	for ($j = $i; $j < $n + 1; $j++) {
// 		echo $a . " ";
// 		$a++;
// 	}
// 	echo "<br>";
// }

// echo "<br>";
//1  22  333 444 555 
// for ($i = 1; $i <= 5; $i++) {
// 	for ($j = $i; $j >= 1; $j--) {
// 		echo $i . " ";
// 	}
// 	echo "<br>";
// }

// echo "<br>";

// for ($i = 6; $i >= 1; $i--) {
// 	for ($j = $i; $j >= 1; $j--) {
// 		echo $i . " ";
// 	}
// 	echo "<br>";
// }
echo "<br>";
// circle  with *
// for ($i = 1; $i <= 7; $i++) {
// 	for ($j = 1; $j <= 7; $j++) {
// 		if (($i == 1 && $j < 3) || ($i == 1 && $j > 5)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 2 && $j == 1) || ($i == 2 && $j > 2 && $j < 6) || ($i == 2 && $j == 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 3 && $j > 1 && $j < 7) || ($i == 4 && $j > 1 && $j < 7) || ($i == 5 && $j > 1 && $j < 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 6 && $j == 1) || ($i == 6 && $j > 2 && $j < 6) || ($i == 6 && $j == 7)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else if (($i == 7 && $j < 3) || ($i == 7 && $j > 5)) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else {
// 			echo "* ";
// 		}
// 	}
// 	echo "<br>";
// }
// // echo "<br>";

// for ($i = 1; $i <= 5; $i++) {
// 	for ($j = 5; $j >= $i; $j--) {
// 		if ($j <=5 && $j > $i) {
// 			echo "&nbsp;&nbsp;&nbsp";
// 		} else {
// 			echo $i . " ";
// 		}
// 	}
// 	echo "<br>";
// }

// for ($i = 1; $i <= 5; $i++) {
// 	for ($j = 6; $j >= 1; $j--) {
// 		if ($j > $i) {
// 			echo "&nbsp;&nbsp";
// 		} else {
// 			echo $i . "&nbsp;&nbsp";
// 		}
// 	}
// 	echo "<br>";
// }
// // echo "<br>";

// for ($i =6; $i >=1; $i--) {
// 	for ($j = 6; $j >= 1; $j--) {
// 		if ($j > $i) {
// 			echo "&nbsp;&nbsp";
// 		} else {
// 			echo $i ."&nbsp;&nbsp";
// 		}
// 	}
// 	echo "<br>";
// }	



// 1
// 11
// 121
// 1331
// 14641
// $a=1;
// for ($i=1; $i <=6; $i++) { 
// 	echo " ".$a;
// 	 $a= $a*11;
// 	echo" "."<br>";
// }



// pascal triangle pattern 


echo "<br>";



for ($i=1; $i <=7; $i++) { 
	$a=1;
	for ($j=1; $j <=$i; $j++) { 
		echo $a." ";
		$a=$a*($i-$j)/$j;
	}
	echo"<br>";
}
?>

<!-- 
<style border=1px> </style>border=1px;
<table border=1px>
	 <?php

	// for ($i = 1; $i <= 10; $i++) {
	// 	echo "<tr>";
	// 	for ($j = 1; $j <= 10; $j++) {
	// 		echo "<td>" . $i * $j . "</td>";
	// 	}
	// 	echo "</tr>";
	// }
	?>
</table> -->



