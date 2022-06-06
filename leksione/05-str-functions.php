<?php

// trim(str):                   trims leading and trailing spaces
// rtrim(str):                  trims leading spaces (to the right)
// ltrim(str):                  trims trailing spaces (to the left)
// strlen(str):                 finds the length of the string
// strtoupper(str):             converts the string to upper-case
// strtolower(str):             converts the string to lower-case
// strcmp(str1, str2):          compares two strings
// substr(str, i, j):           finds a substring of the string
// strpos(str, sub):            find the position of the first occurrence
// str_word_count(str):         fund the number of words in the string
// strrev(str):                 reverses the string
// str_replace(old, new, str):  replaces 'old' values with 'new' values in the string
// explode(del, str, limit):    splits the string by the delimiter
// implode(del, array):         joins the string by the delimiter
// nl2br(str):                  formats the string

$str = 'Hello world!';
echo strlen($str); // 12
echo strtoupper($str); // HELLO WORLD!
echo substr($str, 6, 5); // world
echo substr($str, 6); // world!
echo strpos($str, 'ell'); // 1
echo strpos($str, 'ell', 2); // -1
echo strpos($str, 'o'); // 4