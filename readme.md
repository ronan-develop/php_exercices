# Exercices in php

1. Write a script which will display the following string :
   "The memory of that scene for me is like a frame of film forever frozen at that moment:
   the red carpet, the green lawn, the white house, the leaden sky. The new president and 
   his first lady. - Richard M. Nixon"
   and the words 'red', 'green' and 'white' will come from $color.
```php
$color = ['white', 'green', 'red', 'blue', 'black'];
```
   

2. Write a PHP script which will display the colors in the following way :

```bash
#Output :
green, red, white
```
$color = array('white', 'green', 'red')

3. Create a PHP script which displays the capital and country name from the above
   array $ceu. Sort the list by the capital of the country.
```php
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
```

4. Delete an element from the above PHP array. After deleting the element, integer keys 
must be normalized.
```php
$x = [1, 2, 3, 4, 5];
```
```bash
# Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
```   

5. Digital root is the recursive sum of all the digits in a number. Given n, take the sum
   of the digits of n. If that value has more than one digit, continue reducing in this
   way until a single-digit number is produced. The input will be a non-negative integer.
```bash
# (Exemple)
16  -->  1 + 6 = 7
942  -->  9 + 4 + 2 = 15  -->  1 + 5 = 6
132189  -->  1 + 3 + 2 + 1 + 8 + 9 = 24  -->  2 + 4 = 6
493193  -->  4 + 9 + 3 + 1 + 9 + 3 = 29  -->  2 + 9 = 11  -->  1 + 1 = 2
```



[//]: # (https://www.w3resource.com/php-exercises/php-array-exercises.php)