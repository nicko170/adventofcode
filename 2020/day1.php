<?php

$input = file_get_contents(__DIR__ . '/input/day1');
$exploded = array_map(fn($num) => intval($num), preg_split('/\r\n|\r|\n/', $input));

foreach ($exploded as $item1) {
    foreach($exploded as $item2){
        if(2020 === $item1 + $item2){
            echo "Part 1: " . ($item1 * $item2) . "\r\n";
            break 2;
        }
    }
}

foreach ($exploded as $item1) {
    foreach($exploded as $item2){
        foreach($exploded as $item3) {
            if (2020 === $item1 + $item2 + $item3) {
                echo "Part 1: " . ($item1 * $item2 * $item3) . "\r\n";
                break 3;
            }
        }
    }
}



