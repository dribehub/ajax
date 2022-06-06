<?php

// fopen(filename, mode) where mode: w, r, a, x, w+, r+, a+, x+
// fclose($file)
// boolean feof($file)
// char fgetc($file)
// string fgets($file)
// fwrite($file, $string)

// include(“header.php”)
// require(“header.php”)
// include_once(“header.php”)
// require_once(“header.php”)

$file1 = fopen("f1.txt", "r") or exit("Error Opening File");
$file2 = fopen("f2.txt", "w") or exit("Error Opening File");

while(!feof($file1)) {
    $line = fgets($file1);
    fwrite($file2, $line);
}

fclose($file1); 
fclose($file2);

$file = fopen("f2.txt", "r") or exit("Error Opening File");

while(!feof($file))
    echo fgets($file) . "<br>";

fclose($file);