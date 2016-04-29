<?php

$html = "<b>bold text</b><a href=howdy.html>click me</a>";

preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);

echo '<pre>';
print_r($matches);
foreach ($matches as $val) {
    echo "matched: " . $val[0] . "\n";
    echo "part 1: " . $val[1] . "\n";
    echo "part 2: " . $val[2] . "\n";
    echo "part 3: " . $val[3] . "\n";
    echo "part 4: " . $val[4] . "\n\n";
}