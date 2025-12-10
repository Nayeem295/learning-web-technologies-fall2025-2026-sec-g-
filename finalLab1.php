<?php

echo "<h2>Task 1</h2>";

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = $length<br>";
echo "Width = $width<br>";
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br>";






echo "<h2>Task 2</h2>";

$amount = 1000;
$vat = $amount * 0.15;

echo "Amount = $amount<br>";
echo "VAT (15%) = $vat<br>";






echo "<h2>Task 3</h2>";

$num = 25;

echo "Number = $num<br>";
if ($num % 2 == 0) {
    echo "$num is Even<br>";
} else {
    echo "$num is Odd<br>";
}








echo "<h2>Task 4</h2>";

$a = 10;
$b = 25;
$c = 15;

echo "Numbers: a = $a, b = $b, c = $c<br>";

if ($a >= $b && $a >= $c) {
    echo "Largest = $a<br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b<br>";
} else {
    echo "Largest = $c<br>";
}






echo "<h2>Task 5</h2>";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br>";



echo "<h2>Task 6</h2>";

$arr = array(5, 10, 15, 20, 25, 30);
$search = 20;
$found = false;

echo "Array: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
echo "<br>";
echo "Searching for: $search<br>";

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in the array<br>";
} else {
    echo "$search not found in the array<br>";
}


echo "<h2> Task 7<h2>";
echo "<h3>shape 1</h3><br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

echo "<h3>shape 2</h3><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}
echo "<br>";


echo "<h3>shape 3</h3><br>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
echo "<br>";

echo "<h2>Task 8</h2><br>";


$arr2D = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "<strong>2D Array:</strong><br>";
for ($i = 0; $i < count($arr2D); $i++) {
    for ($j = 0; $j < count($arr2D[$i]); $j++) {
        echo $arr2D[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";

echo "<h3>Shape from 2D Array</h3><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $arr2D[0][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";

$letters = [];
for ($i = 0; $i < count($arr2D); $i++) {
    for ($j = 0; $j < count($arr2D[$i]); $j++) {
        if (!is_numeric($arr2D[$i][$j])) {
            $letters[] = $arr2D[$i][$j];
        }
    }
}

echo "<h3>Shape from 2D Array</h3><br>";
$k = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$k] . " ";
        $k++;
    }
    echo "<br>";
}


?>










