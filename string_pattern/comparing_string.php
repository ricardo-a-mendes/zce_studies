<?php

var_dump("a" == "A"); //boolean false
var_dump("a" == "a"); //boolean true
var_dump("c" == "ç"); //boolean false
var_dump(2 == "2"); //boolean true
var_dump(2 === "2"); //boolean false

echo '<hr>';

// < 0 if str1 is less than str2;
// > 0 if str1 is greater than str2,
// and 0 if they are equal.
var_dump(strcmp("a", "A")); //int 1
var_dump(strcmp("A", "a")); //int -1
var_dump(strcmp("AB", "a")); //int -1
var_dump(strcmp("A", "A")); //int 0
var_dump(strcmp("a", "AB")); //int 1
var_dump(strcmp(1, "1")); //int 0

echo '<hr>';
var_dump(levenshtein("hang", "hand"));
var_dump(similar_text("hang", "hand"));