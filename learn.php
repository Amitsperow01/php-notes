<?php

for($i=0;$i<=5;$i++){  
    for($k=5;$k>=$i;$k--){  
    echo " &nbsp ";  
    }  
    for($j=1;$j<=$i;$j++){  
        echo "* ";  
    }  
    echo "<br>";  
    }	  
        for($i=4;$i>=1;$i--){  
        for($k=5;$k>=$i;$k--){  
        echo " &nbsp ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "* ";  
    }  
    echo "<br>";  
}  
echo "<br>";  

// echo "<br>";  

for ($i = 1; $i <= 20; $i++) {
    // echo "<br>";
	if ($i >6 && $i <=10 ) {
        continue;
	}else if($i>15){
        break;
    }
	echo $i." ";
}
echo "<br>";  

    $a=1;
    for ($i=1; $i <=5; $i++) {
        for ($j=1; $j <$i; $j++) { 
            echo $a." ";
        $a++;
        }
        echo "<br>";
    }
    
    echo "<br>";
for ($i=1; $i <=5; $i++) { 
   for ($j=5; $j >=$i; $j--) { 
   echo $i;
   }echo "<br>";
}


for ($i=5; $i >=1; $i--) { 
    for ($j=5; $j >=$i; $j--) { 
    echo $i;
    }echo "<br>";
 }


echo "<br>";

$output=[];

for ($i=1; $i <=10; $i++) { 
 
    $output[]=$i." ";
}echo "<pre>";
print_r($output);

?>