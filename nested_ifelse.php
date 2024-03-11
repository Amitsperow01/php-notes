<?php
// FIVE ELEMENTS NESTED IF 

$a = 50;
$b = 40;
$c = 90;
$d = 70;
$e = 80;

if ($a > $b) {
	if ($a > $c) {
		if ($a > $d) {
			if ($a > $e) {
				echo "A have high value 1";
			} else {
				echo "E have high value 1";
			}
		} else {
			if ($d > $e) {
				echo "D have high value 1";
			} else {
				echo "E have high value 2";
			}
		}
	} else {
		if ($c > $d) {
			if ($c > $e) {
				echo "C have high value 1";
			} else {
				echo "E have high value 3";
			}

		} else {
			if ($d > $e) {
				echo "D have high value 2";
			} else {
				echo "E have high value 4;";
			}
		}
	}

} else {
	if ($b > $c) {
		if ($b > $d) {
			if ($b > $e) {
				echo "B have high value 1";
			} else {
				echo "E have high value 5";
			}
		} else {
			if ($d > $e) {
				echo "D have high value 3";
			} else {
				echo "E have high value 6";
			}
		}
	} else {
		if ($c > $d) {
			if ($c > $e) {
				echo "C have high value 2";
			} else {
				echo "E have high value 7";
			}
		} else {
			if ($d > $e) {
				echo "D have high value 4";
			} else {
				echo "E have high value 8";
			}
		}
	}
}


echo "<br><hr>";

$x = 30;
$y = 20;
$z = 30;
$a = 40;
$b = 50;
$c = 60;

if ($x < $y) {
	if ($x < $z) {
		if ($x < $a) {
			if ($x < $b) {
				if ($x < $c) {
					echo "X have small value 1";
				} else {
					echo "C have small value 1";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 1";
				} else {
					echo "C have small value 2";
				}
			}
		} else {
			if ($a < $b) {
				if ($a < $c) {
					echo "A have small value 1";
				} else {
					echo "C have small value 3";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 2";
				} else {
					echo "C have small value 4";
				}

			}
		}
	} else {
		if ($z < $a) {
			if ($z < $b) {
				if ($z < $c) {
					echo "Z have small value 1";
				} else {
					echo "C have small value 5";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 3";
				} else {
					echo "C have small value 6";
				}
			}
		} else {
			if ($a < $b) {
				if ($a < $c) {
					echo "A have small value 2";
				} else {
					echo "C have small value 7";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 4";
				} else {
					echo "C have small value 8";
				}
			}
		}
	}
} else {
	if ($y < $z) {
		if ($y < $a) {
			if ($y < $b) {
				if ($y < $c) {
					echo "Y have small value 1";
				} else {
					echo "C have small value 9";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 5";
				} else {
					echo "C have small value 10";
				}
			}
		} else {
			if ($a < $b) {
				if ($a < $c) {
					echo "A have small value 2";
				} else {
					echo "C have small value 11";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 6";
				} else {
					echo "C have small value 12";
				}
			}
		}
	} else {
		if ($z < $a) {
			if ($z < $b) {
				if ($z < $c) {
					echo "Z have small value 2";
				} else {
					echo "C have small value 13";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 7";
				} else {
					echo "C have small value 14";
				}
			}
		} else {
			if ($a < $b) {
				if ($a < $c) {
					echo "A have small value 3";
				} else {
					echo "C have small value 15";
				}
			} else {
				if ($b < $c) {
					echo "B have small value 8";
				} else {
					echo "C have small value 16";
				}
			}
		}
	}
}



echo "<br><hr>";

//discount nested 

$age = 37;
$ismember = "no";

if ($age < 65) {
	if ($age > 18 && $ismember == "yes") {
		echo "you get 10% discount";
	} else {
		echo " discount = 0%";
	}
} else {
	if ($age >= 65) {
		echo "You are eligible for 15% discount";
	} else {
		echo "No discount";
	}
}




echo "<br><hr>";



if ($age >= 18) {
	if ($age < 65) {
		if ($ismember == "yes") {
			echo "You get 10% discount";
		} else {
			echo "you are not member so, 0% discount";
		}
	} else {
		echo " You are elegible for 15% discount";
	}
} else {
	echo "you not have valid age for discount %";
}

echo "<br><br>";
//tha shipping coast 


$weight = 12;
$destination = "canada";
$shippingcost = 0;


if ($weight < "5") {
	if ($destination == "us") {
		echo "Shipping cost of $destination=$5";
	} else {
		if ($destination == "canada") {
			echo "Shipping cost of  $destination=$10";
		} else {
			echo "Shipping cost of  $destination= $15";
		}
	}
} else {
	if ($weight >= "5") {
		if ($destination == "us") {
			echo "Shipping cost $destination=  $10";
		} else {
			if ($destination == "canada") {
				echo "Shipping cost of $destination=  $20";
			} else {
				echo "Shipping cost of $destination= $30";
			}
		}
	}
}

?>