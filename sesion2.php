<?php

session_start();
echo $_SERVER["PHP_SELF"] . "<br>";

echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["email"];



?>