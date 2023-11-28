<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
  	// $name get from object
    
    $this->name = $name;
    // $this->name = public $name
  }
  
  // Output name
  function get_name() {
  	// Output public $name and it got value by function set_name()
    return $this->name;
  }
}

// Create Object $apple and $banana from class Fruit
$apple = new Fruit();
$banana = new Fruit();

// Assign value to object $apple and $banana using function set_name()
$apple->set_name('Apple');
$banana->set_name('Banana');

// Calling function get_name()
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
 
</body>
</html>
