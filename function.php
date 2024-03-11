function program <br><br>
<?php



// function family($name){
// 	 echo "$name smart.<br>";
// 	}
// family("janni");
// family ("hege");

// function name(int $a,int $b){
// 	return $a+$b;
// }

// echo name(5,5);//10

// function height($height = 40)
// {
// 	echo "The Height is:$height <br>";
// }


// height(50); //50
// height(); //40

// function name($b)
// {
// 	$a = "";
// 	for ($i = 1; $i <= $b; $i++) {
// 		$a .= $i . " ";
// 	}
// 	return $a;
// }


// // echo name(6);
// echo name(10) . "<br>";
// echo name(5);
// // echo name(68);
// // echo name(36);
// echo "<br>";
// echo "<br>";


// echo "<table border=1px>";
// for ($i = 1; $i <= 10; $i ++) {
// 	echo "<tr>";
// 	for ($j = 1; $j <=10; $j++) {
// 		echo "<td>".$j*$i."</td>";
// 	}
// 	echo "<tr>";
// }

// echo "</table>";

// echo "<br>";
//1--100
function table(){
echo "<table border=0px bgcolor=solidblack>";
$a=1;
for ($i = 1; $i <= 10; $i ++) {
	echo "<tr bgcolor=goldenyellow>";
	for ($j = 1; $j <=10; $j++) {
		echo "<td >".$a."</td>";
		$a++;
	}
	echo "</tr>";
}
// return $a;
}
echo "</table>";


echo table();

// echo"<br>";

//1--100
// function numaric(){
// echo" <table border =1px bgcolor= black>";
// for ($i=1; $i <=100; $i+=10) { 
// 	echo "<tr bgcolor=red>";
// 	$a="";
// 	for ($j=$i; $j <$i+10 ; $j++) { 
// 		"<td>".$a.=$j."</td> ";

// 	}echo "</tr>";
// }
// echo "</table>";

// return $a;

// }


// echo numaric();

//Write a function called isEven that takes an integer as a parameter and returns true if the number is even, and false otherwise.

// function isEven($a)
// {
// 	// $b=true;
// 	if ($a % 2 == 0) {
// 		return true . "true";
// 	} else {
// 		return false . "false";
// 	}
// }

// echo isEven(11);
// echo "<br>";

// Write a function called isPrime that checks if a given number is prime and returns true if it is, or false if it's not.

// function isPrime($a)
// {
// 	$p = true;
// 	for ($i = 2; $i < $a; $i++) {
// 		if ($a % $i == 0) {
// 			$p = false . "false";
// 			break;
// 		}
// 	}
// 	return $p;
// }
// echo isPrime(4);

// echo "<br>";

//Write a function called calculateBMI that calculates the BMI (Body Mass Index) of a person given their weight in kilograms and height in meters. The formula for BMI is BMI = weight (kg) / (height (m) * height (m)).

// function BMI($w, $h)
// {
// 	$a = ($w / ($h * $h));
// 	return $a;

// }

// echo BMI(63, 1.68);

echo "<br>";
//=================================================== 
echo "<br>";
//===================================================

echo "<br>";

// function num(){
// 	$a=1;$b=null;
// for ($i=1; $i <=5; $i++) { 
// 	$b.= $a."<br>";
// 	 $a= $a*11;
// 	// " <br>";
// }return $b;

// }
// echo num();
//===================================================
//1
//1 1
//1 2 1
// 1 3 3 1
// 1 4 6 4 1
// 1 5 10 10 5 1
// // 1 6 15 20 15 6 1
// function num()
// {
// 	$b = "";
// 	for ($i = 1; $i <= 7; $i++) {
// 		$a = 1;
// 		for ($j = 1; $j <= $i; $j++) {
// 			$b .= $a . " ";
// 			$a = $a * ($i - $j) / $j;
// 		}
// 		$b .= "<br>";
// 	}
// 	return $b;
// }

// echo num();

//===================================================
// echo "<br>";
//  function unit($unit)
// {
// 	if (($unit >= 1) && ($unit <= 50)) {
// 		$a = ($unit * 6); //300
// 	} else if (($unit > 50) && ($unit <= 150)) {
// 		$a = ($unit * 5) + 50; //550
// 	} else if (($unit > 150) && ($unit <= 250)) {
// 		$a = ($unit * 4) + 200; //600
// 	} else if ($unit > 250) {
// 		$a = ($unit * 3) + 450; // x+450
// 	}
// 	return "Amout Of $unit unit= " . $a;
// }

// echo unit(300);


// echo "<br>";



?>