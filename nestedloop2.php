<?php

// hollo dimond

for ($i = 0; $i <= 10; $i++) {
	for ($j = 0; $j <= 10; $j++) {
		if (($i == 1 && $j == 5) || $i == 2 && $j > 3 && $j < 7) {
			echo "&nbsp;&nbsp;&nbsp";
		} elseif (($i == 3 && $j > 2 && $j < 8) || $i == 4 && $j > 1 && $j < 9) {
			echo "&nbsp;&nbsp;&nbsp";
		} elseif ($i == 5 && $j > 0 && $j < 10) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 6 && $j > 1 && $j < 9) || $i == 7 && $j > 2 && $j < 8) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 8 && $j > 3 && $j < 7) || ($i == 9 && $j == 5)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "* ";
		}
	}
	echo "<br>";
}

echo "<br>";

//A

for ($i = 0; $i <= 9; $i++) {
	for ($j = 0; $j <= 6; $j++) {
		if (($i == 0 && $j == 0) || $i == 0 && $j == 6 || ($i == 1 && $j > 0 && $j < 6) || ($i == 2 && $j > 0 && $j < 6)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 3 && $j > 0 && $j < 6) || ($i == 4 && $j > 0 && $j < 6)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 6 && $j > 0 && $j < 6) || ($i == 7 && $j > 0 && $j < 6)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 8 && $j > 0 && $j < 6) || ($i == 9 && $j > 0 && $j < 6)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "* ";
		}
	}
	echo "<br>";
}

echo "<br>";

//B

for ($i = 0; $i < 9; $i++) {
	for ($j = 0; $j <= 5; $j++) {
		if (($i == 0 && $j == 5) || ($i == 1 && $j >= 1 && $j <= 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 2 && $j >= 1 && $j <= 4) || ($i == 3 && $j >= 1 && $j <= 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 4 && $j == 5) || ($i == 5 && $j >= 1 && $j <= 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 5 && $j >= 1 && $j <= 4) || ($i == 6 && $j >= 1 && $j <= 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 7 && $j >= 1 && $j <= 4) || ($i == 8 && $j == 5)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "* ";
		}
	}
	echo "<br>";
}

echo "<br>";

//C

for ($i = 0; $i < 6; $i++) {
	for ($j = 0; $j < 5; $j++) {
		if (($i == 0 && $j == 0) || ($i == 1 && $j > 0) || ($i == 2 && $j > 0)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 3 && $j > 0) || ($i == 4 && $j > 0) || ($i == 5 && $j == 0)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "* ";
		}
	}
	echo "<br>";
}
echo "<br>";

//D

for ($i = 0; $i < 6; $i++) {
	for ($j = 0; $j < 5; $j++) {
		if (($i == 0 && $j == 4) || ($i == 1 && $j > 0 && $j < 4) || ($i == 2 && $j > 0 && $j < 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else if (($i == 3 && $j > 0 && $j < 4) || ($i == 4 && $j > 0 && $j < 4) || ($i == 5 && $j == 4)) {
			echo "&nbsp;&nbsp;&nbsp";
		} else {
			echo "* ";
		}
	}
	echo "<br>";
}
echo "<br>";

//E

for ($i=0; $i <7; $i++) { 
	for ($j=0; $j <6; $j++) { 
		if(($i==1 && $j>0)||($i==2 && $j>0) ){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==4 && $j>0)||($i==5 && $j>0)){
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}
echo "<br>";

//F

for ($i=0; $i <=7; $i++) { 
	for ($j=0; $j <6; $j++) { 
		if(($i==1 && $j>0)||($i==2 && $j>0)||($i==3 && $j>0)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==5 && $j>0)||($i==6 && $j>0)||($i==7 && $j>0)){
			echo "&nbsp;&nbsp;&nbsp";
		}else{
			echo "* ";
		}
	}echo "<br>";
}
echo "<br>";

//G

for ($i=0; $i <=8; $i++) { 
	for ($j=0; $j <=8; $j++) { 
		if(($i==0 && $j==0 )||($i==0 && $j==8)|| ($i==1 && $j>0 && $j<8)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==2 && $j>0)||($i==3 && $j>0)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==4 && $j>0 && $j<5)||($i==5 && $j>0 && $j<4)||($i==4 && $j==8) ||($i== 5 && $j>4 && $j<8)||($i==5 && $j==7)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if (($i==6 && $j>0 && $j<4)||($i==6 && $j>4 && $j<8)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==7 && $j>0 && $j<4 )||($i==7&& $j>4 && $j<8)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==8 && $j==0 )||($i==8 && $j>3 && $j<8)){
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}

echo "<br>";

//H

for ($i=0; $i <=6; $i++) { 
	for ($j=0; $j <6; $j++) { 
		if(($i==0 && $j>0 && $j<5)||(($i==1 && $j>0 && $j<5))){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==2 && $j>0 && $j<5)||($i==4 && $j>0 && $j<5)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if (($i==5 && $j>0 && $j<5)||($i==6 && $j>0 && $j<5)){
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}

echo "<br>";

//I

for ($i=0; $i <=6 ; $i++) { 
	for ($j=0; $j <=6; $j++) { 
		if(($i==1 && $j<3)||($i==1 && $j>3)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==2 && $j<3)||($i==2 && $j>3)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==3 && $j<3)||($i==3 && $j>3 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if (($i==4 && $j<3)||($i==4 && $j>3 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==5 && $j<3)||($i==5 && $j>3 )) {
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}

echo "<br>";

//J

for ($i=0; $i <=6; $i++) { 
	for ($j=0; $j <=7; $j++) { 
		if(($i==1 && $j<4)||($i==1 && $j>4)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==2 && $j<4)||($i==2 && $j>4)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==3 && $j<4)||($i==3 && $j>4)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==4 && $j>0 && $j<4)||($i==4 && $j>4)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==5 && $j>0 && $j<4)||($i==5 && $j>4)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==6 && $j==0)||($i==6 && $j>3)){
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}

echo "<br>";

for ($i=1; $i <=4; $i++) { 
	for ($j=1; $j <=4; $j++) { 
		if($i==1 && $j==4){
			echo "1";
		}else if(($i==2 && $j==3)){
			echo "2 &nbsp;&nbsp3";
		}else if($i==3 && $j==2) {
			echo "4 &nbsp;&nbsp;&nbsp;5 &nbsp;&nbsp;&nbsp; 6";
		}else if ($i==4 && $j==1){
			
				echo "7 &nbsp;&nbsp;&nbsp;8 &nbsp;&nbsp;&nbsp; 9 &nbsp;&nbsp;&nbsp; 10 ";
			
		}else {
			echo "&nbsp;&nbsp;&nbsp ";
		}
	}echo "<br>";
}


echo "<br>";

for ($i=1; $i <=9; $i++) { 
	for($j=1;$j<=5;$j++){
		if($i==1 && $j>1 && $j <5){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==2 && $j>1 && $j <4)||($i==2 && $j ==5)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==3 && $j>1 && $j <3)||($i==3 && $j>3 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==4 && $j>1 && $j <2)||($i==4 && $j>2)){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==5 && $j>1)||($i==6 && $j>1 && $j <2)||($i==6 && $j>2 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==7 && $j>1 && $j <3)||($i==7 && $j>3 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==8 && $j>1 && $j <4)||($i==8 && $j>4 )){
			echo "&nbsp;&nbsp;&nbsp";
		}else if(($i==9 && $j>1 && $j <5)){
			echo "&nbsp;&nbsp;&nbsp";
		}else {
			echo "* ";
		}
	}echo "<br>";
}
?>