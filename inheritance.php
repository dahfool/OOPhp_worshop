<?php

include 'simple_class.php';

/**
 * Class SuperHuman
 *
 * SuperHuman inherits all methods and properties of Human
*/

class SuperHuman extends Human {

    public function fly()
    {
        echo 'i am flying....';
    }

}

$superman = new SuperHuman();

$superman->eyeColor = 'pink';

echo($superman->eyeColor);

echo '<br />';

echo($superman->wink());

echo '<br />';

echo($superman->fly());



