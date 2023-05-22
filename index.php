<?php
/**
 * Exercice 1
 * POSITION
 */
$color = ['white', 'green', 'red', 'blue', 'black'];
echo "
The memory of that scene for me is like a frame of film forever frozen at that moment:
the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new 
president and his first lady. - Richard M. Nixon
\n";
/**
 * Exercice 2
 * BASIC SORT
 */
$color = ['white', 'green', 'red'];
sort($color);
foreach ($color as $y){
    echo $y . ", ";
}
echo "\n\n";
/**
 * Exercice 3
 * FILTER BY VALUE
 */
$ceu = [
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France" => "Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallinn",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valletta",
    "Austria" => "Vienna",
    "Poland"=>"Warsaw"
];
asort($ceu);
foreach ($ceu as $k => $c){
    echo "The capital of " . $k . " is " . $c . "\n";
}
echo "\n\n";
/**
 * Exercice 4
 */
$x = [1, 2, 3, 4, 5];
unset($x[3]);
$x = array_values($x);
print_r($x);
/**
 * Exercice 7
 * Morse code
 */
function decode_morse(string $code): string{
    $codex = [
        "a"=>".-",
        "b"=>"-...",
        "c"=>"-.-.",
        "d"=>"-..",
        "e"=>".",
        "f"=>"..-.",
        "g"=>"--.",
        "h"=>"....",
        "i"=>"..",
        "j"=>".---",
        "k"=>"-.-",
        "l"=>".-..",
        "m"=>"--",
        "n"=>"-.",
        "o"=>"---",
        "p"=>".--.",
        "q"=>"--.-",
        "r"=>".-.",
        "s"=>"...",
        "t"=>"-",
        "u"=>"..-",
        "v"=>"...-",
        "w"=>".--",
        "x"=>"-..-",
        "y"=>"-.--",
        "z"=>"--..",
        "0"=>"-----",
        "1"=>".----",
        "2"=>"..---",
        "3"=>"...--",
        "4"=>"....-",
        "5"=>".....",
        "6"=>"-....",
        "7"=>"--...",
        "8"=>"---..",
        "9"=>"----.",
        "."=>".-.-.-",
        ","=>"--..--",
        "?"=>"..--..",
        "!"=>"−·−·−−",
        "/"=>"-..-.",
        " " => "",
        "SOS"=>"···−−−···"
    ];
    $trad = "";
// identifier les mots
    $morse_array = explode("   ", $code);
    foreach ($morse_array as $item) {

        $word = explode(' ', $item);

        foreach ($word as $letter) {
            if (in_array($letter, $codex)) {
                $trad = $trad . "" . array_search($letter, $codex);
            }
        }
// ajout espace entre les mots
        $trad = $trad . " ";
    }
    return strtoupper(trim($trad));
}

decode_morse('.... . -.--   .--- ..- -.. .');

/**
 * Exercice 8
 */
function solution($str) {
    return $str === "" ? [] : str_split(
        strlen($str) % 2 === 0 ? $str : $str . '_', 2
    );
}