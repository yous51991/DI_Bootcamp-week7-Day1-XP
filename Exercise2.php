<?php

// Write a PHP class that calculates the factorial of an integer
class Mathematic
{

    public function facto(Int $nb)
    {
        $fact = 1;
        for ($i = 1; $i <= $nb; $i++) {
            $fact = $fact * $i;
        }

        echo 'Le factoriel de ' . $nb . ' est ' . $fact;
    }
}

$math = new Mathematic();
$math->facto(4);

?>
