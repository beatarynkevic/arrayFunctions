<?php
$a = 'hello';
$$a = 'world';

echo "$a ${$a} <br>"; //hello world
echo "$a $hello <br>";

$b= 5;
$c = $b; //c tampa 5 ir nebepasikeicia jeigu pakeiciam b
// $c = &$b; //c pasikeicia, kai pakeiciam b
$b = 8;

echo $c . '<br>';

//explode

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
echo $pizza. '<br>';
$pieces = explode(" ", $pizza);
echo "<pre>";
print_r($pieces);

//implode

$masyvas = [1, 5, 8, 9];
$s = implode(" ", $masyvas);
echo $s . '<br>';

//preg_split()
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);


?>