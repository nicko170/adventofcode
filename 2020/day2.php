<?php

$input = file_get_contents(__DIR__ . '/input/day2');
$exploded = preg_split('/\r\n|\r|\n/', $input);

$valid = array_filter(array_map(function (string $pw) {
    if(preg_match("/(\d)-(\d)\s(.*?):\s(.*)/", $pw, $m)){
        $min = intval($m[1]);
        $max = intval($m[2]);
        $count = substr_count($m[4], $m[3]);

        var_dump($m);
        var_dump($count);
        var_dump($count >= $min && $count <= $max);
        return $count > $min && $count < $max ;
    }
}, $exploded));

echo "Part 1: " . count($valid) . "\r\n";