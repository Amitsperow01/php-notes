<?php

session_start();

echo $_SERVER["PHP_SELF"] . "<br>";

$_SESSION["name"] = "Amit";

$_SESSION["email"] = "ak@gmail.com";

echo "<pre>";

print_r($_SESSION);


?>