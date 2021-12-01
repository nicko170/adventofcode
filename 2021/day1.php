<?php

$input = file_get_contents(__DIR__ . '/input/day1');
$exploded = array_map(fn($num) => intval($num), preg_split('/\r\n|\r|\n/', $input));

$count = $last = 0;
foreach ($exploded as $depth) {
    $count = $count + ($last === 0 ? 0 : $depth > $last);
    $last = $depth;
}
echo "Part 1: " . $count . "\r\n";


$i = $count = $last = 0;
while ($slice = array_slice($exploded, $i, 3)) {
    if (count($slice) === 3) {
        $depth = array_sum($slice);
        $count = $count + ($last === 0 ? 0 : $depth > $last);
        $last = $depth;
    }
    $i++;
}
echo "Part 2: " . $count . "\r\n";