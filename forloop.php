<H1>for loop </H1><br>

selsct year
<select>
	<?php

	for ($a = 1947; $a <= date('Y '); $a++) {
		echo "<option>$a</option>
";
	}
	?>
</select>


<?php

echo "<br><hr>";


	
// Print Prime Numbers  1 to 100 :

$x = 100;
echo"prime no. of $x = ";

for ($i = 0; $i <=100; $i++) {
    if ( $i == 0)
        continue;
	echo $i;
	echo "\n";
  }

    $f = 1;
    
    for ($j = 2; $j < intval($i / 2) + 1; $j++) {
        if ($i % $j == 0) {
            $f = 0;
            break;
        }
    }
    if ($f == 1)
        echo $i." ";

echo "\n";





?>