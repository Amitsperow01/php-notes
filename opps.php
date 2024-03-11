<?php

// echo "<pre>";

// $num=["a"=>"AAA","b"=>"BBB","c"=>"CCC"];
// print_r($num);

// echo "--------------<br>";
// $num=json_encode($num);
// $num=json_decode($num);

// print_r($num);

// echo "<br>--------------<br>";

// $num=(array)$num;
// print_r($num);
// // echo $num->a; 

// class student
// {
// 	function __construct()
// 	{
// 		echo "Construct function called <br>";
// 	}

// 	function hello()
// 	{
// 		return "Hello ".$this->name();
// 	}
// 	protected function name()
// 	{
// 		return "Student Name";
// 	}
// 	function __destrruct()
// 	{
// 		echo "<br>Destruct Called...";
// 	}
// }

// $stuObj=new student();
// echo $stuObj->hello();
// echo $stuObj->name();


// class struct
// {
// 	public $num;
// 	function __construct($num)
// 	{
// 		$this->num=$num;
// 	}
// 	public function stpOne()
// 	{
// 		$out="";
// 		for($i=1;$i<=$this->num;$i++)
// 		{
// 			for($j=1;$j<=$i;$j++){
// 				$out.=$i." ";
// 			}
// 			$out.="<br>";
// 		}
// 		return $out;
// 	}

// }

// $strObj = new struct(5);
// echo $strObj->stpOne();

// class struct1
// {
// 	public $nums;
// 	public $num1;

// 	function __construct($nums,$num1)
// 	{
// 		$this->nums=$nums;
// 		$this->num1=$num1;
// 	}
// 	public function stpOne()
// 	{
// 		$out="";
// 		for($i=1;$i<=$this->nums;$i++)
// 		{
// 			for($j=1;$j<=$i;$j++){
// 				$out.=$i." ";
// 			}
// 			$out.="<br>";
// 		}
// 		return $out;
// 	}
// 	public function stpOn()
// 	{
// 		$out="";
// 		for($i=1;$i<=$this->nums;$i++)
// 		{
// 			for($j=1;$j<=$i;$j++){
// 				$out.=$j." ";
// 			}
// 			$out.="<br>";
// 		}
// 		return $out;
// 	}

// }

// $strObj = new struct1(5,6);
// echo $strObj->stpOne();
// echo"<br>";
// echo $strObj->stpOn();

// class Fruit
// {
// 	public $name, $weight, $quality;
// 	public function __construct($name, $weight, $quality)
// 	{
// 		$this->name = $name;
// 		$this->weight = $weight;
// 		$this->quality = $quality;

// 	}
// 	public function get_name()
// 	{
// 		return $this->name;
// 	}
// 	public function get_weight()
// 	{
// 		return $this->weight;
// 	}
// 	public function get_quality()
// 	{
// 		return $this->quality;
// 	}
// }
// $apple = new Fruit("apple", "50kg", "fresh");
// $banana = new Fruit("banana", "20kg", "rip");
// echo "name-" . " " . $apple->get_name();
// echo "<br>";
// echo "weight-" . " " . $apple->get_weight();
// echo "<br>";
// echo "quality-" . " " . $apple->get_quality();
// echo "<br>";
// echo "<br>";
// echo "name-" . " " . $banana->get_name();
// echo "<br>";
// echo "weight-" . " " . $banana->get_weight();
// echo "<br>";
// echo "quality-" . " " . $banana->get_quality();

// echo "<br>";
// echo "<br>";

// for ($i = 0; $i < 10; $i++)
// 	echo $i . " ";

// echo "<br>";
// echo "<br>";

// for ($i = 0; $i < 10; $i++):
// 	echo $i . " ";
// 	echo "<br>";
// endfor;

// echo "<br>";

class Pyramid
{
	public $count = 0;
	function __construct($noo)
	{
		$this->count = $noo;
	}
	private function stone()
	{
		$output = "";
		for ($i = 1; $i <= $this->count; $i++) {
			for ($j = 1; $j <= $i; $j++) {
				// { $output.= $j." ";
			}
			$output .= "<br>";
		}
		return $output;
	}
}

class Tables extends Pyramid // implements
{
	private $tabl = 0;
	function __construct($no)
	{
		$this->tabl = $no;
		// parent::_construct($no);
	}
	function getTable()
	{
		return $this->tableOf();
	}
	function getStructure()
	{ // return $this->stOne();
		return self::statFunct();
	}
	protected function tableOf()
	{
		$output = "";
		for ($i = 1; $i <= 10; $i++) {
			$output . $i * $this->tabl . "<br>";
		}
		return $output;
	}
	public static function statFunct()
	{
		return "This is static function";
	}
}

echo Tables::statFunct();

$tab0bj1 = new Tables(6);
// echo $tab0bj1->tabl;

echo $tab0bj1->getTable();
echo $tab0bj1->getStructure();

echo "<br>";

class ClassName {
	public static function staticMethod() {
	  echo "Hello World!";
	}
  }
  ClassName::staticMethod();
 
  echo "<br>";

  class greeting {
	public static function welcome() {
	  echo "Hello World!";
	}
  
	public function __construct() {
	  self::welcome();
	}
  }
  
  new greeting();

  echo "<br>";

  class domain {
	protected static function getWebsiteName() {
	  return "W3Schools.com";
	}
  }
  
  class domainW3 extends domain {
	public $websiteName;
	public function __construct() {
	  $this->websiteName = parent::getWebsiteName();
	}
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
  

  



?>