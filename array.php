<?php







// //indexing array
// $num = [10, 20, 30, 40, 50];

// $num[] = 60; //adding extra value

// echo count($num); //count of arrays

// echo "<pre>"; //well adjusted
// print_r($num);

// echo $num[3]; //finding value by index

// //Associative array

// $studentOne = [
// 	"name" => "Amit Kumar",
// 	"class" => "PHP Class",
// 	"gander" => "Male",
// 	"age" => 24
// ];
// echo "<pre>";
// print_r($studentOne);

// echo "<br>";
// // multiDimention Array

// $student = [
// 	[
// 		"name" => "Student 1",
// 		"Class" => "PHP 1",
// 		"Age" => "24"
// 	],
// 	[
// 		"name" => "Student 2",
// 		"Class" => "PHP 2",
// 		"Age" => "23"
// 	],
// 	[
// 		"name" => "Student 3",
// 		"Class" => "PHP 3",
// 		"Age" => "22"
// 	]
// ];

// echo "<pre>";
// print_r($student);

// echo "<br>";

// echo $student[0]["name"];
// echo "<br>";
// echo $student[1]["Class"];

// echo "<br>";

// $student = [
// 	[
// 		 "Student 1",
// 		 "PHP 1",
// 		 24
// 	],
// 	[
// 		 "Student 2",
// 		"PHP 2",
// 		23
// 	],
// 	[
// 		 "Student 3",
// 		 "PHP 3",
// 		22
// 	]
// ];
// echo $student[0][]=$student[1][]=$student[2][]="maths";



// echo "<pre>";
// print_r($student);

// echo "<br>";

// echo $student[0][2];
// echo "<br>";
// echo $student[1][0];
// echo "<br>";

// echo $student[1][]="maths";


echo "<br>";

$num = [
	10,
	20,
	30,
	40,
	50
];
$num[] = 60;

echo count($num) . "<br>";

for ($i = 0; $i < count($num); $i++) {
	echo $num[$i];
	echo "<br>";
}

echo "<br>";

foreach ($num as $key => $a) {
	echo $key."=>". $a;
	echo "<br>";
}

echo "<br>";

$student = [
	[
		 "Student 1",
		 "PHP 1",
		 24
	],
	[
		 "Student 2",
		"PHP 2",
		23
	],
	[
		 "Student 3",
		 "PHP 3",
		22
	]
];

foreach ($student as $std) {
	print_r($std);
	echo "<br>";
}

echo "<br>";


$studentOne = [
	"name" => "Amit Kumar",
	"class" => "PHP Class",
	"gander" => "Male",
	"age" => 24
];
foreach($studentOne as $student ){
	echo $student ;
echo "<br>";
}

echo "<br>";

$mulnum=[
	[10, 20,30,40],
	[50,60,70,80]
];
echo "<pre>";
// print_r($mulnum);
for($i=0;$i< count($mulnum);$i++){
	$innerArray= $mulnum[$i];
	// print_r($innerArray);
	for($j=0;$j<count($innerArray);$j++){
		// echo $innerArray[$j];
		echo $mulnum[$i][$j];
		echo "<br>";
	}
}
 








?>