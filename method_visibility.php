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
    public function getProperties()
    {
        echo 'Public function getProperties';
        echo '<br />';
        echo $this->eyeColor;
        echo '<br />';
        echo $this->numOfFingers;
        echo '<br />';
        echo $this->category;
    }

    protected function displayProperties() {
        echo 'Protected function displayProperties';
        echo '<br />';
        echo $this->eyeColor;
        echo '<br />';
        echo $this->numOfFingers;
        echo '<br />';
        echo $this->category;

    }

    private function printProperties() {
        echo 'Private function printProperties';
        echo '<br />';
        echo $this->eyeColor;
        echo '<br />';
        echo $this->numOfFingers;
        echo '<br />';
        echo $this->category;

    }

}

$bob = new Human;

//echo '<br />';

/* Calling a method with visibility*/
//echo($bob->getProperties());
//echo($bob->displayProperties());
//echo($bob->printProperties());


/*
 * Class SuperHuman
 */
class SuperHuman extends Human {


    /* run  all methods inherited methods */
    public function AcessAllmethod() {

        $this->getProperties();
        $this->displayProperties();
       // $this->printProperties();

    }



}

$superman = new SuperHuman();


/* Calling a method having properties with visibility*/
echo($superman->AcessAllmethod());
