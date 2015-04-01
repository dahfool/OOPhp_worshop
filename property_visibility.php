<?php
/**
 * Class human
 */
class Human {


    public $eyeColor = 'blue';
    protected $numOfFingers = 10;
    private $category = 'Human';


    /**
     * getProperties
     *
     * echo all declared properties
     */
    function getProperties()
    {
        echo $this->eyeColor;
        echo '<br />';
        echo $this->numOfFingers;
        echo '<br />';
        echo $this->category;
    }

}

$bob = new Human;

/* accessing properties with visibility */
//echo($bob->eyeColor);
//echo($bob->numOfFingers);
//echo($bob->category);

//echo '<br />';

/* Calling a method having properties with visibility*/
//echo($bob->getProperties());


/*
 * Class SuperHuman
 */
class SuperHuman extends Human {

    /* overwriting protected property */
    protected $numOfFingers = 11;


}

$superman = new SuperHuman();

echo($superman->eyeColor);
//echo($superman->numOfFingers);
//echo($superman->category);
echo '<br />';

/* Calling a method having properties with visibility*/
echo($superman->getProperties());
