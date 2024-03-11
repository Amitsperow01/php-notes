<?php

// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5

// for ($i=1; $i <=5; $i++) 
//{ 
// 	for ($j=1; $j <=5; $j++)
// { 
// 		echo $j." ";
// 	}echo "<br>";
// }
// echo "<br";
// echo "<br";

// for ($i = 1; $i <= 5; $i++)
//  {
// 	for ($j = 1; $j <= $i; $j++) 
// 	{
// 		 echo $i." "; 
// 	}
// 	echo "<br";
// }

// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5


// for ($i = 1; $i <= 5; $i++)
// {
// 	for ($j = 1; $j <= $i; $j++)
// 	{
// 		echo $j . " ";
// 	}
// 	echo "<br>";
// }

// 1
// 1 2
// 1 2 3
// 1 2 3 4
// 1 2 3 4 5

// for ($i=1; $i <=5; $i++) { 
// 	for ($j=1; $j <=5; $j++) { 
// 		echo $i." ";
// 	}
// 	echo "<br>";
// }

// 1 1 1 1 1
// 2 2 2 2 2
// 3 3 3 3 3 
// 4 4 4 4 4 
// 5 5 5 5 5


// for ($i=5; $i >=1; $i--)
//  { 
// 	for ($j=5; $j >=$i; $j--)
// 	 { 
// 		echo $j." ";
// 	}
// 	echo "<br>";
// }
// 5
// 5 4
// 5 4 3
// 5 4 3 2
// 5 4 3 2 1



// for ($i=5; $i >=1 ; $i--)
// { 
// 	for ($j=1; $j <=$i; $j++)
// 	{ 
// 		echo $i." ";
// 	}
// 	echo "<br>";
// }

// 5 5 5 5 5
// 4 4 4 4
// 3 3 3
// 2 2 
// 1


// for ($i=1; $i <=5 ; $i++)
// { 
// 	for ($j=5; $j >=$i; $j--)
// 	{ 
// 		echo $j." ";
// 	}
// 	echo "<br>";
// }
// 5 4 3 2 1
// 5 4 3 2
// 5 4 3
// 5 4
// 5


$a = 1;
for ($i = 1; $i <= 4; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo $a . " ";
		$a++;
	}

	echo "<br>";
}

// 1
// 2 3
// 4 5 6
// 7 8 9 10

echo "<br>";


for ($i = 1; $i <= 5; $i++) {
	for ($j = 5; $j >= $i; $j--) {
		echo $j - $i + 1 . " ";
	}
	echo "<br>";
}
echo "<br>";

for ($i = 5; $i >= 1; $i--) {
	for ($j = $i; $j >= 1; $j--) {
		echo $j . " ";
	}
	echo "<br>";
}
// 5 4 3 2 1
// 4 3 2 1
// 3 2 1 
// 2 1 
// 1


echo "<br>";

for ($i = 1; $i <= 5; $i++) {
	for ($j = 0; $j <= 4; $j++) {
		echo ($i + $j) % 2 . " ";
	}
	echo "<br>";
}
// 1 0 1 0 1
// 0 1 0 1 0
// 1 0 1 0 1
// 0 1 0 1 0
// 1 0 1 0 1
echo "<br>";

// for ($i = 1; $i <= 5; $i++) {
// 	for ($j = 1; $j <= $i; $j++) {
// 		echo ($i + $j + 1) % 2 . " ";
// 	}
// 	echo "<br>";
// }
// // 1
// // 0 1
// // 1 0 1
// // 0 1 0 1
// // 1 0 1 0 1

// echo "<br>";
// echo "<br>";

// $num = 1;
// for ($j = $num; $j <= 10; $j++) {
// 	$fact = 1;

// 	for ($i = 1; $i <= $j; $i++) {
// 		$fact = $fact * $i;
// 	}
// 	echo "The factorial of $num = " . $fact;
// 	$num++;
// 	echo "<br>";
// }


for($i=1;$i<=5;$i++){
	// echo "*";
	for($a = 5; $a >= $i; $a--) {
		echo "&nbsp;&nbsp;&nbsp;";
	}
	for ($j=1; $j <=$i; $j++) { 
		echo $j." ";
	}echo "<br>";
}
// 1
// 1 2
// 1 2 3
// 1 2 3 4
// 1 2 3 4 5

echo "<br>";
?>


<style>
	table {
		border: 1px solid #000;
	}
</style>
<table cellspacing="0px">

	<?php
	function table(){
	for ($row = 1; $row <= 8; $row++) {
		echo "<tr . border= 0px black >";
		for ($col = 1; $col <= 8; $col++) {
			$c = $row + $col;
			if ($c % 2 == 0) {
				echo "<td bgcolor= black></td>";
			} else {
				echo "<td height=30 width=30 bgcolor= white></td>";
			}
		}
		echo "</tr>";


	}
	return $c;
	
}
echo table ();




	?>

</table>
</body>

</html>