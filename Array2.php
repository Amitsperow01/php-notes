<?php

// // for biggest value ----------------------
// $input=[50,30,15,45,44,20];
// // echo max($input);
// $output=$input[0];
// for($i=0;$i<count($input);$i++){
// 	if($input[$i]>$output){
// 		$output=$input[$i];

// 	}
// }
echo "<pre>";
// echo $output;
echo "<br>";

// for small value ----------------------------

// $input = [35,38,30,24,54,8,10];

// $output = $input[0];

// for($i = 0; $i < count($input); $i++) {
//     if($input[$i] < $output) {
//         $output = $input[$i];

//     } 
// }
// echo $output;

// echo "<br>";

// $input = [
// 	[10, 20, 30],
// 	[40, 50, 60],
// 	[60, 70, 80],
// ];
// //output=[110,140,170]
// for($i=0;$i<count($input[0]);$i++){
// 	$num=0;
// 	foreach($input as $a){
// 		$num+=$a[$i];
// 	}$output[]=$num;
// }echo "<pre>";
// print_r($output);
// echo "<br>";

//sort array
// $input = [10, 30, 20, 60, 40];

// sort($input);
// print_r($input);

// echo "<br>";
// // sum of column
// $input = [
//     [10, 20, 30],
//     [10, 20, 30],
//     [10, 20, 30],
//     [10, 20, 30]
// ];
// $output = [];
// for ($i = 0; $i <count($input[0]); $i++) {
//     $Sum = 0;
//     foreach ($input as $a) {
//         $Sum += $a[$i];
//     }
//     $output[] = $Sum;
// }
// print_r($output);

// $input=[
// 	[10,20,30],
// 	[40,50],
// 	[60,70,80]
// ];

//output=[60,90,210]
// $output=[];
// for ($i=0; $i <count($input) ; $i++) { 
// 	$a=$input[$i];
// 	$b=0;
// 	for ($j=0; $j <count($a); $j++) { 
// 		$b=$b+$a[$j];
// 	}$output[]=$b;
// }echo "<pre>";
// print_r($output);

//another method
// $output = [];
// for ($i = 0; $i < count($input); $i++) {
//     $sum = 0;
//     for ($j = 0; $j < count($input[$i]); $j++) {
//         $sum += $input[$i][$j];
//     }
//     $output[] = $sum;
// }

// print_r($output);


// $a = [1, 2, 3, 4];
// $b = [10,20,30,40];

// $c = array();
// for($i=0;$i<count($a);$i++) {
//   $c[$i] = $a[$i]+$b[$i];
// }
// print_r($c);


// $input = [
//     [10, 20, 30],
//     [40, 50, 60],
//     [60, 70, 80]
// ];
// //output=[ 110 140 170]
// $output = [];
// for ($i = 0; $i < count($input[0]); $i++) {
//     $sum = 0;
//     for ($j = 0; $j < count($input); $j++) {
//         $sum += $input[$j][$i];
//     }
//     $output[] = $sum;
// }
// print_r($output);


// $input = [
//     [10, 20, 30],
//     [10, 20, 30],
//     [10, 20, 30],
//     [10, 20, 30]
// ];

// $output = [];

// for ($i = 0; $i < count($input[0]); $i++) {
//     $num = 0;
//     for ($j = 0; $j < count($input); $j++) {
//         $num += $input[$j][$i];
//     }
//     $output[] = $num;
// }
// print_r($output);


// $a = [
//     [10, 20, 30],
//     [60, 40, 50],
//     [50, 10, 90],
//     [10, 20, 30]
// ];
// $b = [
//     [70, 80, 90],
//     [40, 50, 60],
//     [10, 20, 30],
//     [10, 20, 30]
// ];

// $output = [
//     [80, 100, 120],
//     [100, 90, 110],
//     [60, 30, 120]
// ];

// echo "<table border=1>";
// $output = [];

// for ($i = 0; $i < count($a); $i++) {
//     echo "<tr>";
//     for ($j = 0; $j < count($b[0]); $j++) {
//         echo "<td>" . $output[$i][$j] = $a[$i][$j] + $b[$i][$j] . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
// print_r($output); 


//output=[
//    [2,4,6,8,10,12,14,16,18,20]
//    [3,6,9,12,15,18,21,24,27,30]
//    [4,8,12,16,20,24,28,32,36,40]
//];

// $c = [];
// $a = 1;
// for ($i = 0; $i < 3; $i++) {
//     $a = $a + 1;
//     for ($j = 1; $j <= 10; $j++) {
//         $c[$i][] = ($a) * $j;

//     }
// }
// echo "<pre>";
// print_r($c);


// $a = [10, 20, 30, 40, 50, 60];
// $b = [60, 70, 80, 90, 100];
// //$output=[70,90,110,130,130,60]

// $output = [];

// $length = min(count($a), count($b));
// for ($i = 0; $i < $length; $i++) {
//     $output[] = $a[$i] + $b[$i];
// }
// for ($i = $length; $i < count($a); $i++) {
//     $output[] = $a[$i];
// }
// for ($i = $length; $i < count($b); $i++) {
//     $output[] = $b[$i];
// }
// print_r($output);


echo "<br>";
echo "<br>";


$a = [60, 70, 80, 90, 100];
$b = [10, 20, 30, 40, 50, 60];

$output = [];

$length = min(count($a), count($b));
for ($i = 0; $i < $length; $i++) {
    $output[] = $a[$i] + $b[$i];
}
for ($i = $length; $i < count($a); $i++) {
    $output[] = $a[$i];
}
for ($i = $length; $i < count($b); $i++) {
    $output[] = $b[$i];
}
foreach ($output as $value) {
    echo $value . " ";
}

?>


