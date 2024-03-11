<?php

//  <!-- type of operator in php is 8

// 1->Arithmetic operator
// +,-,/,*,%(module),**(exponencial)

// 2->Assignment operator 
// =,+=,-=,*=,/=,%=,**=

// 3->Comparison oper.
// ==,===,!=,!==,<>,>,<,>=,<=,<=>

// 4->Increment/Decrement oper.
// ++ (pre/post increment), -- (pre/post Decrement)

// 5->Logical opr.
// $$(and),||(or),!(not)

// 6->String opr.
//   .(concatenation opr.),.=(con.. assignment opr)

// 7->Array opr.
//  same as comparison opr

// 8->Conditional assignment opr. 
// ?:(ternary opr), ??(null coalescing opr) -->


//1

$a = 15;
$b = 10;

$c = $a + $b;
echo $c;
echo "<br>";

$d = $a - $b;
echo $d;
echo "<br>";

$e = $a * $b;
echo $e;
echo "<br>";

$f = $a / $b;
echo $f;
echo "<br>";

$g = $a % $b;
echo $g;
echo "<br>";

$h = $a ** $b;
echo $h;
echo "<br>";



echo( $a -=$b);
echo "<br>";

echo( $a +=$b);
echo "<br>";


echo( $a *=$b);
echo "<br>";

echo( $a /=$b);
echo "<br>";

echo( $a **=$b);
echo "<br>";

echo( $a %=$b);
echo "<br>";
echo "<br>";echo "<br>";echo "<br>";


?>