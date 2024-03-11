<?php


// class calculatuion{
// 	public $a,$b,$c;

// function sum(){
// 	$this->c=$this->a + $this->b ;
// 	return $this->c;
// }
// function sub(){
// 	$this->c=$this->a - $this->b ;
// 	return $this->c;
// }
// }

// $c1= new calculatuion();

// $c1->a=20;
// $c1->b= 10;

// $c2= new calculatuion();
// $c2->a= 60;
// $c2->b= 23;

// echo "sum of value ". $c1->sum()."<br>";
// echo "sub of value ".$c2->sub()."<br>";
// echo "sum of value ". $c2->sum()."<br>";
// echo "sub of value ".$c1->sub();

//construction ***********//
// class person
// {
// 	public $name;
// 	public $age ;

// 	function __construct($nam= "no name",$ag= "not filled"){
// 		$this->name=$nam;
// 		$this->age=$ag;
// 	}
// 	function show()
// 	{
// 		echo $this->name . " - " . $this->age . "<br>";
// 	}
// }

// $p1 = new person("amit",24);
// // $p1->name = "amit kumar";
// // $p1->age = "24";
// $p2 = new person("jagu",18);

// $p1->show();
// $p2->show();

//inheritance ***************///

// class Employee{
// // Properties & methods
// public $name;
// public $age;
// public $salary;

// function __construct($name, $age, $salary){
// 	$this->name = $name;
// 	$this->age = $age;
// 	$this->salary = $salary;
// }
// function info(){
// 	echo "<h3> Employee Profile</h3>";
// 	echo "Employee Name : ".$this->name."<br>";
// 	echo "Employee Age : ".$this->age."<br>";
// 	echo "Employee Salary : ".$this->salary;
// }

// }
// class manager extends Employee{
// //properties & methods 
// public $ta=1000;
// public $phone= 300;
// public $totalSalary;
// function info(){

// 	$this->totalSalary = $this->salary + $this->ta+ $this->phone;

// 	echo "<h3> Manager Profile</h3>";
// 	echo "Employee Name : ".$this->name."<br>";
// 	echo "Employee Age : ".$this->age."<br>";
// 	echo "Employee salary : ".$this->totalSalary."<br>";
// }
// }
// $e1 = new Employee("Ram",25,20000);
// $e2 = new manager("jagu",18,15000);
// $e1->info();
// $e2->info();

//Accesss Modifiers **************///

//Public **** proctected ***** Private ///

// class base{
// 	protected $name;
// 	 public function __construct($name){
// 		$this->name = $name;
// }
// protected function show(){
// 	echo" Your Name : ".$this->name."<br>";
// }

// }

// class driverd extends base{
// 	public function get(){
// 		echo" Your Name : ".$this->name."<br>";
// 	}
// }

// $test=new driverd ("amit");
// // $test ->name = "tima";

// $test->get();

//private **********---////

// class base{
// 	private $name;
// 	 public function __construct($name){
// 		$this->name = $name;
// }
// protected function show(){
// 	echo" Your Name : ".$this->name."<br>";
// }

// }

// class driverd extends base{
// 	public function get(){
// 		echo" Your Name : ".$this->name."<br>";
// 	}
// }

// // $test=new driverd ("amit");
// $test=new base ("amit");

// $test ->name = "tima";

// $test->get();

// Method overriding *********///

// class base{
// 	public $name ="Parent Class";

// 	public function calc($a,$b){
// 		return $a * $b;
// 	}
// }
// class driverd extends base{
// 	public $name = "Child Class";

// 	public function calc($a,$b){
// 		return $a + $b;
// 	}
// }

// // $test = new driverd();
// $test = new base();
// echo $test->calc("5","10");

//Abstract Classes *********/////
 
// abstract class ParentClass {

// 	public $name;

// 	abstract protected function calc($a,$b);
// }

// class ChildClass extends ParentClass {
// 	public function calc($c,$d) {
// 		// echo $c + $d;
// 		echo "hello";
	
// 	}
// }
// $test = new ChildClass();
// $test->calc(10,20);

//interface ***********////








?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>