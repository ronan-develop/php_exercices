<?php
/**
 * Exercice 1
 */
$color = ['white', 'green', 'red', 'blue', 'black'];
echo "
The memory of that scene for me is like a frame of film forever frozen at that moment:
   the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new 
president and 
   his first lady. - Richard M. Nixon
";
/**
 * Exercice 2
 */
$color = ['white', 'green', 'red'];
sort($color);
foreach ($color as $y){
    echo $y . ", ";
}
/**
 * Exercice 3
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
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valetta",
    "Austria" => "Vienna",
    "Poland"=>"Warsaw"
];
asort($ceu);
foreach ($ceu as $k => $c){
    echo "The capital of " . $k . " is " . $c . "\n";
}
// sort array by value
