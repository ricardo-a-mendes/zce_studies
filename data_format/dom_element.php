<?php

$source = <<<CONTENT
<?xml version="1.0" encoding="UTF-8"?>
<html>
<body>

<ul>
    <li name="x1">List 1</li>
    <li name="x2">List 2</li>
    <li name="x3">List 3</li>
</ul>

</body>
</html>
CONTENT;

$dom = new DOMDocument();
$dom->loadXML($source);

$xpath = new SimpleXMLElement($dom->saveXML());
$result = $xpath->xpath('//*[@name]');
echo '<pre>';
print_r($result);
echo '</pre>';