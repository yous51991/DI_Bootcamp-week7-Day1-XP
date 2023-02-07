<?php

// Write a simple PHP class which displays the following string.
class Display { 

    public function displayString() {
        echo 'MyClass class has initialized !';
    }
}

$dis = new Display();
$dis->displayString();

?>