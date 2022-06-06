<?php

// fopen(filename, mode) where mode: w, r, a, x, w+, r+, a+, x+
// fclose(filename):            closes file
// boolean feof(filename):      checks if file has reached EOF
// char fgetc(filename):        gets next character in file
// string fgets(filename):      gets next word in file
// fwrite(filename, str):       writes content to file
// include(filename):           includes external file
// require(filename):           includes external file
// include_once(filename):      includes external file
// require_once(filename):      includes external file

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