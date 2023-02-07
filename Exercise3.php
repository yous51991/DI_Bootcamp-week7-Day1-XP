<?php

// Write a PHP class that sorts an ordered integer array with the help of sort() function.
class Mathematic
{

    public function sortArray(array $tab)
    {
        sort($tab);
        return $tab;
    }
}

$math = new Mathematic();
$newArray = $math->sortArray(array(11, -2, 4, 35, 0, 8, -9));
var_dump($newArray);


