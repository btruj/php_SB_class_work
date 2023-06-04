<?php
// Define a class named Snowboard
class Snowboard {
    // Declare two private properties: color and size
    private $color;
    private $size;

    // Define a constructor method that will run when a Snowboard object is created
    public function __construct($color, $size) {
        // The constructor accepts two parameters: color and size
        // It uses the setter methods to set the values of the color and size properties
        $this->setColor($color);
        $this->setSize($size);
    }

    // Define a getter method for the color property
    public function getColor() {
        // It returns the value of the color property
        return $this->color;
    }

    // Define a setter method for the color property
    public function setColor($color) {
        // It accepts one parameter, the new color
        // It sets the color property to the new color
        $this->color = $color;
    }

    // Define a getter method for the size property
    public function getSize() {
        // It returns the value of the size property
        return $this->size;
    }

    // Define a setter method for the size property
    public function setSize($size) {
        // It accepts one parameter, the new size
        // It sets the size property to the new size
        $this->size = $size;
    }

    // Define a method named ride
    public function ride() {
        // This method prints out a sentence describing the snowboard's color and size
        echo "I chose to ride the " . $this->getColor() ." size " . $this->getSize() ." snowboard today!";
    }
}

// Create a new Snowboard object with color 'red&black' and size '150cm'
$redBlackSnowboard = new Snowboard('red&black', '150cm');
// Call the ride method of the snowboard, which prints out a sentence describing the snowboard's color and size
$redBlackSnowboard->ride(); // Outputs: I chose to ride the red&black size 150cm snowboard today!

// Print the color of the snowboard by calling the getColor method
echo $redBlackSnowboard->getColor(); // Outputs: red&black
// Print the size of the snowboard by calling the getSize method
echo $redBlackSnowboard->getSize(); // Outputs: 150cm

// Change the color of the snowboard to 'blue' by calling the setColor method
$redBlackSnowboard->setColor('blue');
// Change the size of the snowboard to '152cm' by calling the setSize method
$redBlackSnowboard->setSize('152cm');

// Print the new color of the snowboard
echo $redBlackSnowboard->getColor(); // Outputs: blue
// Print the new size of the snowboard
echo $redBlackSnowboard->getSize(); // Outputs: 152cm

// Call the ride method of the snowboard again, which now prints out a sentence describing the snowboard's new color and size
$redBlackSnowboard->ride(); // Outputs: I chose to ride the blue size 152cm snowboard today!
?>