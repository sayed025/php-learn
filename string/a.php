<?php
echo strlen("Hello world!");
echo strpos("Hello world!", "world");
$x = "Hello World!";
echo strtoupper($x);
echo strtolower($x);
echo str_replace("World", "Dolly", $x);
echo strrev($x);
echo trim($x);
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

echo substr($x, 6, 5);
echo substr($x, 6);
echo substr($x, -5, 3);
echo substr($x, 5, -3);

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
