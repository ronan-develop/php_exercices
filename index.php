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