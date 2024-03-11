<?php

//five veriables

$Elvish = 50;
$Abhaishak = 10;
$c = 30;
$d = 20;
$e = 50;

if (($Elvish > $Abhaishak) && ($Elvish > $c) && ($Elvish > $d) && ($Elvish > $e)) {
	echo "Evish is BigBoss";
} else if (($Abhaishak > $c) && ($Abhaishak > $d) && ($Abhaishak > $e)) {
	echo "  Abhaishak is BigBoss";
} else if (($c > $d) && ($c > $e)) {
	echo "C is BigBoss";
} else if ($d > $e) {
	echo "D is BigBoss";
} else
	echo "E is BigBoss";


echo "<br><hr>";
// elictricy billing 

$unit = 150;


if (($unit >= 1) && ($unit <= 50)) {
	echo $unit * 6;
} else if (($unit > 50) && ($unit <= 150)) {
	echo $unit * 5 + 50;
} else if (($unit > 150) && ($unit <= 250)) {
	echo $unit * 4 + 200;
} else if ($unit > 250) {
	echo $unit * 3 + 450;
} else {
	echo "Default reading";
}

echo "<br><hr>";

// markes detail

$marks = 80.5;

if ($marks < 35) {
	echo "FAIL ";
} else if ($marks == 35) {
	echo "pass by grace";
} else if ($marks > 35 && $marks <= 59) {
	echo "pass with 3rd divison";
} else if ($marks > 59 && $marks <= 75) {
	echo "pass with 2nd divison";
} else if ($marks > 75 && $marks <= 100) {
	echo "pass with first divison";
}
echo "<br><hr>";
// positive or negative 
$num = 5;

if ($num == 0) {
	echo "value is Zero";
} else if ($num < 0) {
	echo "value is negative";
} else if ($num > -0) {
	echo "value is positive";
} else {
	echo "plz enter valid value";
}
echo "<br><hr>";

//odd ,even numbar

$value = 331;

if ($value % 2 == 0) {
	echo "even number";
} else {
	echo "<b>odd number";
}

echo "<br><hr>";

// leap year

$year = 14;

echo ($year % 4 == 0) ? "It's Leap Year" : "Normal Year";

echo "<br><hr>";

if ($year % 4 == 0) {
	echo "It's Leap Year";
} else {
	echo "Normal year";
}

echo "<br><hr>";
// six veriables big value

$a = 50;
$b = 10;
$c = 30;
$d = 20;
$e = 50;
$f = 70;

if (($a > $b) && ($a > $c) && ($a > $d) && ($a > $e) && ($a > $f)) {
	echo "A is BigBoss";
} else if (($b > $c) && ($b > $d) && ($b > $e) && ($b > $f)) {
	echo "  B is BigBoss";
} else if (($c > $d) && ($c > $e) && ($c > $f)) {
	echo "C is BigBoss";
} else if ($d > $e && ($d > $f)) {
	echo "D is BigBoss";
} else if ($e > $f) {
	echo "E is big";
} else {
	echo "F is BigBoss";
}

echo "<br><hr>";
// six variable small value

$z = 40;
$y = 10;
$x = 30;
$w = 80;
$v = 50;
$u = 60;

if (($z < $y) && ($z < $x) && ($z < $w) && ($z < $v) && ($z < $u)) {
	echo "z is Small Bro";
} else if (($y < $x) && ($y < $w) && ($y < $v) && ($y < $u)) {
	echo " Y is Small Bro";
} else if (($x < $w) && ($x < $v) && ($x < $u)) {
	echo "X is Small Bro";
} else if ($w < $v && ($w < $u)) {
	echo "W is Small Bro";
} else if ($v < $u) {
	echo "V is Small Bro";
} else {
	echo "U is Small Bro";
}
echo "<br><hr>";

// $a=$a+$b;
// $b=$a-$b;
// $a=$a-$b;
//  echo "$a<br>$b";
// seasion months

$month = "march";

if ($month == (" january ") || $month == ("february") || $month == ("december")) {
	echo "It's Winter";
} else if ($month == ("march") || $month == ("april") || $month == ("may")) {
	echo "It's Spring";
} else if ($month == ("june") || $month == ("july") || $month == ("august")) {
	echo "It's Summer";
} else if ($month == ("september") || $month == ("october") || $month == ("november")) {
	echo "It's autumn(fall)";
} else {
	echo "Invalid input ,please enter a valid month";
}
echo "<br><hr>";




$a = 20;
$b = 10;

$c = $a;
$a = $b;
$b = $c;
echo "$a<br>$b";

echo "<br><hr>";
$a = 20;
$b = 10;

$a = $a + $b; //a=20+10=30
$b = $a - $b; //20
$a = $a - $b; //10

echo "$a<br>$b";
echo "<br><hr>";

$a = 45;
$b = 36;
$c = 65;

$a = $a + $b + $c;
$b = $a - $b - $c;
$c = $a - $b - $c;
$a = $a - $b - $c;

echo "$a<br>$b<br>$c";

?>