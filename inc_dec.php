<?php

//Operators Exercise

// $x = 10;
// $y = 20;

// $x += $y;
// $y -= $y;
// $x *= $y;
// echo $x."<br>".$y;
// $x = $y;
// $y /= $y;
// $x %= $y;
// echo $x."<br>".$y;


$x = 10;
$y = 15;

$z = $x == $y; //false
echo $z . "<br>";
var_dump($z);
echo "<br>";
$z = $x === $y; //  false
var_dump($z);
echo "<br>";
$z = $x != $y; // true
var_dump($z);
echo $z . "-<br>";
$z = $x <> $y; //true
var_dump($z);
echo $z . "-<br>";
$z = $x !== $y; //true
var_dump($z);
echo $z . "-<br>";
$x = $z ? $x : $y; //true $x
var_dump($z);
echo $z . "-<br>";
$z = $x > $y; //false
var_dump($z);
echo $z . "-<br>";
$z = $x < $y; //true
var_dump($z);
echo $z . "-<br>";
$z = $x >= $y; //false
var_dump($z);
echo $z . "-<br>";
$z = $x <= $y; //true
var_dump($z);
echo "<br>";
$z = $x <=> $y;
var_dump($z);
echo $z . "<br>"; //less than y


echo "<br>";
echo "<br>";
echo "<br>";

$x = 11;
++$x;
echo $x++ . "<br>";//12
echo "<br>";
--$x;
$y = $x;
echo $x-- . "<br>";//12
echo "<br>";
echo $x += $x++;//x=x (12) + (x++)11=23

echo "<br>" . $y-- . "<br>" . --$y;//y--= 12,--y=10
echo "<br>";
echo $x -= ++$x;// 0
echo "<br>";


echo "<br>";
echo "<br>";
$x = true;
$y = false;
$x = ($x and $y);

$y = ($x or $y);
$y = ($x && $y);
$x = ($x || !$y);
// echo $x . "<br>" . $y;
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
echo !$x;
var_dump(!$x);


echo "<br>";
echo "<br>";


$text1 = "hye ";
$text2 = "bro ";
echo $text1 .= $text2 . "see here<br>";






?>