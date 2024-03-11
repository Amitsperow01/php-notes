<?php 
session_start();

function dd($data) {
   echo "<pre>";
   print_r($data);
   echo "</pre>";
   die();
}



$host = "localhost";
$username = "root";
$password = "";
$dbName = "php_project";

$conn = mysqli_connect($host, $username, $password, $dbName);
// echo "This is test";
if(!$conn) {
   echo "Connection faild";
    die();
} 


function random_str(
   int $length = 64,
   string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
   if ($length < 1) {
       throw new \RangeException("Length must be a positive integer");
   }
   $pieces = [];
   $max = mb_strlen($keyspace, '8bit') - 1;
   for ($i = 0; $i < $length; ++$i) {
       $pieces []= $keyspace[random_int(0, $max)];
   }
   return implode('', $pieces);
}


?>