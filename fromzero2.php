 <?php
echo "<table border =\"1\" style='border-callapse: collapse'>";
for ($row = 1; $row <= 10; $row++) {
	echo "<tr> \n";
	for ($col = 1; $col <= 10; $col++) {
		$c = $col * $row;
		echo "<td>$c</td> \n";
	}
	echo "</tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3>Chess board</h3>
	<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

		<?php

		for ($row = 1; $row <= 8; $row++) {

			echo "<tr>";
			for ($col = 1; $col <= 8; $col++) {
				$total = $row + $col;
				if ($total % 2 == 0) {

					echo "<td height=30px width=30px bgcolor=#ffffff></td>";
				} else {
					echo "<td height=30px width=30px bgcolor=#000000></td>";
				}
			}
			echo "</tr>";
		}

		?>
	</table>
</body>

</html> 


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
<table border:="solid black" >
	select month
	<select>
		<?php

		for ($i = 1; $i <= 12; $i++) {


			echo "<option>$i</option>";
		}
		?>
	</select>

	</table>
</body>

</html>


<?php
echo "<br>";
echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or $column == 5 or ($row == $column and $column != 0 and $column != 6))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<br>";
}
echo "<br>";
echo "<br>";
// 335936
for ($i=1; $i <=10; $i++) { 
	# code...
}


?>