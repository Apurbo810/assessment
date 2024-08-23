<?php
function reverseString($string) {
    return strrev($string);
}

function countVowels($string) {
    $string = strtolower($string);

    $count = 0;

    foreach (str_split($string) as $char) {
        if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }
    
    return $count;
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    echo "String: $string, Vowel Count: " . countVowels($string) . ", Reversed String: " . reverseString($string) . "\n";
}
?>
