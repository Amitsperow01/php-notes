<?php
//String
$name="Amit";
$subject="PHP";
$class="$name   subject";

echo $name,"<br>",$subject;
echo "<br>";
var_dump($class);
echo "<br>";
echo "<br>";
//intiger
$numb =20;
echo $numb;
echo "<br>";
var_dump($numb);
echo "<br>";
echo "<br>";

//Float
$fnumb=10.66;
echo $fnumb;
echo "<br>";
var_dump($fnumb);
echo "<br>";
echo "<br>";

//Array
$gnumb=[12,03,7,19,16];
echo "<pre>";
sort($gnumb);
print_r($gnumb);
var_dump($gnumb);
echo "<br>";
echo "<br>";

//bool
$design=true;
echo $design;
var_dump($design);
echo "<br>";
echo "<br>";

$hnumb=12/4;
echo $hnumb;
echo "<br>";
var_dump($hnumb);echo "<br>";


$A=15;  $B=3;

echo $A + $B;echo "<br>";
echo $A - $B;echo "<br>";
echo $A * $B;echo "<br>";
echo $A / $B;echo "<br>";
echo $A % $B;echo "<br>";
echo $A ** $B;//Exponentiation

echo "<br>";
echo "<br>";
$pi;
echo pi();

echo "<br>";
echo "<br>";

function area_rectangle($length,$breadth)
{
$length;
$breadth;

$area =$length*$breadth;
return $area;
}
echo "area of rectangle is &nbsp;",area_rectangle(4,5);

echo "<br>";
echo "<br>";

function area_cicle($radius)
{
	$radius;
	$area= 3.14*$radius*$radius;
return $area;
}
echo"area of circle is &nbsp;&nbsp;",area_cicle(12);
echo"<br>";

function area_square($side)
{
	$side;
	$area=$side*$side;
	return $area;
}
echo "area od square is &nbsp;&nbsp",area_square(12);




?>