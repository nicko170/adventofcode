<?php

$input = file_get_contents(__DIR__ . '/input/day2');
$exploded = array_map(fn($row) => explode(' ', $row), preg_split('/\r\n|\r|\n/', $input));

$vertical = $horizontal = $aim = $depth = 0 ;
foreach ($exploded as $movement) {
    switch($movement[0]){
        case 'forward':
            $horizontal+=$movement[1];
            if($aim) $depth+= $movement[1] * $aim;
            break;
        case 'up':
            $vertical-=$movement[1];
            $aim -= $movement[1];
            break;
        case 'down':
            $vertical+=$movement[1];
            $aim += $movement[1];
            break;
    }
}
echo "Part 1: " . $vertical . " - " . $horizontal . " RES: " . $vertical * $horizontal  . "\r\n";
echo "Part 2: " . $horizontal . " - " . $depth . " RES: " . $depth * $horizontal  . "\r\n";