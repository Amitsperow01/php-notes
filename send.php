<?php

 $a=20;
$b=30;

echo $a??0;

//ternary operator (?:)
echo "<br>";
$data = ($a>$b)?"value of A":"valure of B";
echo $data;
echo "<br>";

$t =date("H");

if ($t <"18")
{
	echo "have a good time!";
}
else {
	echo"It's bad time!";
}
echo"<br>";

$favcolor = "yellow";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


?>