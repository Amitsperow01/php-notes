
<?php

//echo $message = "hi This is my PHP function class";
//echo "<br>";
// echo strlen($message); // character count
//echo str_word_count ($message); // word count
//echo substr($message, 0, 20), "...";8 //echo strpos($message, "Hi");

//echo strrev ($message);
//echo strtoupper($message);
//echo strtolower($message);

//echo ucfirst (strtolower($message));
//$msg = strtolower($message);
//echo ucfirst ($msg);

//echo $domain = "www.domain1.com";
//echo "<br>";
//echo str_replace("domain1", "domn2", $domain);
//echo ucwords($message);
//https://www.w3schools.com/php/php_ref_string.asp




echo $marking=" this is The marking Page of Tag and Function";
echo"<i><b>";
echo "<br>";

echo str_replace("this","that",$marking);//replace word with another word
echo "<br>";
echo "<br>";

echo str_word_count($marking);//count word in pera
echo "<br>";echo "<br>";

echo strlen($marking);// length of pera
echo "<br>";echo "<br>";

echo strpos($marking,"marking");//find place of word in pera
echo "<br>";echo "<br>";

echo strrev($marking);//reverce form of sentence
echo "<br>";echo "<br>";


echo strtolower($marking);//all are small
echo "<br>";echo "<br>";


echo strtoupper($marking);//all are capital
echo "<br>";echo "<br>";

echo ucfirst($marking);
echo "<br>";echo "<br>";

echo ucfirst(strtolower($marking));//first latter is capital of line
echo "<br>";echo "<br>";

echo ucwords($marking) ;//capital latter of every word
echo "<br>";echo "<br>";

echo substr($marking,0,11),"...";// more pera hide in dot
echo "<br>";echo "<br>";


$age=15;
$numb=12235645.644;
echo is_int($age); // real form
echo "<br>";echo "<br>";

echo is_float($numb);//decimal form
echo "<br>";echo "<br>";

echo abs($numb);//absulute value of any dacimal and (-) no.
echo "<br>";echo "<br>";

echo round($numb);//round figure of any dacimal no.
echo "<br>";echo "<br>";
echo(round(0.60));  // returns 1
echo "<br>";echo "<br>";
echo(round(0.49));  // returns 0
echo "<br>";echo "<br>";

echo floor($numb);//lower sequnce of any dacimal no.
echo "<br>";echo "<br>";


echo ceil($numb);//upper sequnce of any dacimal no.
echo "<br>";echo "<br>";


echo max(15,12,5,8,25);//find maximum size of no.
echo "<br>";echo "<br>";

echo min(10,5,23,14,8);// find minimum size of no.
echo "<br>";echo "<br>";


echo number_format($numb);//arange no. in amount form.
echo "<br>";echo "<br>";

echo sqrt(43);// squareroot of (a)
echo "<br>";echo "<br>";

echo rand(100,999);//random no. of 3 digit
echo "<br>";echo "<br>";

echo(pi());
echo "<br>";echo "<br>";


echo trim($marking);// both side remove unwanter space
echo "<br>";echo "<br>";

echo str_repeat("wow &nbsp",10);
echo "<br>";echo "<br>";

//echo str_pad($marking,20,".");

// $a = readline('Enter your name:');
// //$b= explode('enter your class');
// echo $a;

?>