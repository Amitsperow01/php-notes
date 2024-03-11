<?php
echo "<pre>";
// $num = [10, 20, 30, 40, 50];
// foreach ($num as $key => $value) {
// 	echo $key . "=>" . $value . "<br>";
// }
// echo "<br>";
// $num = [
// 	[10, 20, 30, 40, 50],
// 	[20, 10, 30, 50, 40]
// ];
// $output = [];
// foreach ($num as $i => $nval) {
// 	foreach ($nval as $j => $val) {
// 		$output[$j] = ($output[$j] ?? 0) + $val;
// 	}
// }
// print_r($output);

// echo "<br>";

// $student = ["name" => "rahul", "age" => 26, "class" => "dbms", "gander" => "male"];

// print_r($student);
// foreach ($student as $key => $_std) {
// 	echo "$key= $_std>br>";
// }

echo "<br>" . "------------------";

// $students = [
// 	["name" => "amit", "age" => 24, "class" => "php", "gander" => "male"],
// 	["name" => "rahul", "age" => 26, "class" => "dbms", "gander" => "male"],
// 	["name" => "rhohit", "age" => 21, "class" => "larveal", "gander" => "male"],
// 	["name" => "loki", "age" => 25, "class" => "php", "gander" => "male"],
// 	["name" => "ankit", "age" => 22, "class" => "dbms", "gander" => "male"],
// 	["name" => "kamal", "age" => 23, "class" => "larveal", "gander" => "male"]
// ];
// echo '<table border ="1" cellspacing="0 width="500">';
// echo '<tr>
// 	<th>Name</th>
// 	<th>Age</th>
// 	<th>Class</th>
// 	<th>Gander</th>
// 	</tr>';
// foreach ($students as $key => $_student) {
// 	echo "<tr>";

// 	foreach ($_student as $record) {
// 		echo "<td>$record</td>";
// 	}
// }

// echo '</table>';

// echo "<br>";

// $students = [
// 	["name" => "amit", "age" => 24, "class" => "php", "gander" => "male"],
// 	["name" => "rahul", "class" => "dbms", "age" => 26, "gander" => "male"],
// 	["age" => 21, "class" => "larveal", "name" => "rhohit", "gander" => "male"],
// 	["name" => "loki", "class" => "php", "age" => 25, "gander" => "male"],
// 	["age" => 22, "name" => "ankit", "class" => "dbms", "gander" => "male"],
// 	["name" => "jagu", "age" => 19, "gander" => "male", "class" => "larveal"]
// ];
// echo '<table border ="1" cellspacing="0 width="500">';

// echo '<tr>
// 	<th>S.No.</th>
// 	<th>Name</th>
// 	<th>Age</th>
// 	<th>Class</th>
// 	<th>Gander</th>
// 	</tr>';
// foreach ($students as $key => $_student) {
// 	echo "<tr>";
// 	echo "<td>" . ($key + 1) . "</td>";
// 	echo "<td>" . $_student["name"] . "</td>";
// 	echo "<td>" . $_student["age"] . "</td>";
// 	echo "<td>" . $_student["class"] . "</td>";
// 	echo "<td>" . $_student["gander"] . "</td>";
// 	echo "</tr>";
// }
// echo '</table>';
// print_r($students);

// echo "<br>";
// $input = [30, 10, 20, 60, 40];

// foreach ($input as $i => $count) {

// 	if ($input[$i] > ($input[$i + 1]??0)) {
// 		$c = ($input[$i + 1]??null);
// 		$input[$i + 1] = $input[$i];
// 		$input[$i] = $c;
// 	}
// }
// print_r($input);

// echo "<br>";

// $colors = ["red", "blue", "green", "blue", "yellow", "blue"];

// // $target_color="The color blue appears 3 times.";

// $targetColor = "blue";
// $num =null;
// foreach ($colors as $color) {
//     if ($color == $targetColor) {
//         $num++;
//     }
// }
// echo( "The color $targetColor appears $num times.");

// echo "<br>";

// $input = [10, 20, "10", 30, "20", 50, 60, 10, "30"];

// $num = 10;
// $out = 0;
// foreach ($input as $val) {
// 	if ($val === $num) {
// 		$out++;
// 	}
// }
// echo " the $num appears $out times";

// echo "<br>";

// $arr = array(1, 2, 3, 4);
// foreach ($arr as &$value) {
// 	$value *= 2;
// 	unset($value);
// }
// echo "<br>";

// $first = [1, 2, 3, 4, 5];
// $second = [6, 7, 8, 9, 10];
// //$output=[1,2,3,4,5,6,7,8,9,10]
// $equ = [];
// foreach ($first as $val1) {
// 	$equ[] = $val1;
// }
// foreach ($second as $val1) {
// 	$equ[] = $val1;
// }
// print_r($equ);
// echo "<br>";
// //----send method----
// $equ = $first;
// foreach ($second as $val1) {
// 	$equ[] = $val1;
// }
// print_r($equ);

// $first = [1, 2, 3, 4, 5];
// $second = [6, 7, 8, 9, 10];
// $third = [11, 12, 13, 14, 15];

//output=[7,9,11,13,15];
// $num=[];
// foreach($first as $i=> $val){
// 	$num[]=$val+$second[$i]+$third[$i];
// }
// print_r($num);

// $num=$first;
//  foreach($second as $sum){
// 	$num[]=$sum;
// }
// 	foreach($third as $sum){
// 		$num[]=$sum;
//  }print_r($num);


// $a = [1, 2, 3, 4, 5];
// $b = [6, 7, 8, 9, 10];
// $p = [11, 12, 13, 14, 15];

// $x = [$a, $b, $p];
// $output = [];

// for ($i = 0; $i < count($x); $i++) {
// 	$arR = $x[$i];
// 	for ($j = 0; $j < count($arR); $j++) {
// 		$output[] = $arR[$j];
// 	}
// }
// print_r($output);

echo "<br>";

//Calculate Average Grades
$grades = array(85, 92, 78, 88, 90);
$sum = 0;
foreach ($grades as $avg) {
	$sum += $avg;
}
echo " Average grades is " . $sum / count($grades);

echo "<br>";
//Find the Maximum and Minimum Values in one solutions:

$numbers = array(45, 17, 32, 88, 5, 72);

//Output:=Maximum value: 88..,,Minimum value: 5

$max = $min = $numbers[0];

foreach ($numbers as $num) {
	if ($max < $num) {
		echo $max = $num;
	}
	if ($min > $num) {
		$min = $num;
	}
}
echo "maximum value is $max" . "<br>";
echo "minimum value is $min";

echo "<br>";
echo "<br>";

//Counting Occurrences of Elements
$items = array("Apple", "Banana", "Orange", "Apple", "Banana", "Mango", "Apple");

// $output = [
// 	"Apple" => 3,
// 	"Banana" => 2,
// 	"Orange" => 1,
// 	"Mango" => 1
// ]
// $output = [];

// foreach($items as $_fruit)

// $output[$_fruit] = ($output[$_fruit] ?? 0) + 1;
// echo "<pre>";
// print_r($output);

// echo "<br>";
// echo "<br>";

$words = array("Hello", "world", "in", "PHP");

$output = "";

// foreach ($words as $word) {
// 	$output .= $word . ', ';
// }
// $output = rtrim($output, ', ');

// echo "Concatenated String: ".$output;
foreach ($words as $word) {
	if ($word == (count($words) - 1)) {
		$output = $word;
	} else {
		$output = $word . ",";
	}
}
echo "Concatenated String: " . $output;


?>