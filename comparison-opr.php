<h1>comparision operator</h1>
<?php
// ==,===,!=,!==,<>,<,>=,<=,<=>
//output: boolean
echo "== operator <br>";
$a = 20; $b =20;
$output = ($a ==$b);
var_dump($output);



echo "<br><br>=== operator <br>";
$a = 20; $b ="20";
$output = ($a ===$b);
var_dump($output);


echo "<br><br>!= operator <br>";
$a = 20; $b ="30";
$output = ($a !=$b);
var_dump($output);

?>	