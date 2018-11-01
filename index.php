<!DOCTYPE html>
<html>
<body>
<?php
  class Circle
  {
      public $radius;
      public $color;
      public function __construct($radius, $color)
      {
          $this->radius = $radius;
          $this->color = $color;
      }
      public function Radius($radius)
      {
          $this->radius = $radius;
      }
      public function Color($color)
      {
          $this->color = $color;
      }
      public function calculateArea()
      {
          return pi() * pow($this->radius, 2);
      }
      public function toString()
      {
          echo 'CIRCLE : ' . "</br>";
          echo 'radius : ' . $this->radius . "</br>";
          echo 'color : ' . $this->color . "</br>";
      }
  }
  class Cylinder extends Circle
  {
      public $height;
      public function __construct($radius, $color, $height)
      {
          parent::__construct($radius, $color);
          $this->height = $height;
      }
      public function calculateVolume()
      {
          return parent::calculateArea() *  $this->height;
      }
      public function toString()
      {
          echo 'CYLINDER : ' . "</br>";
          echo 'radius : ' . $this->radius . "</br>" . 'color : ' . $this->color . "</br>" . 'height : ' . $this->height . "</br>";
      }
  }


  $circle = new Circle(8, 'green');
  $circle->toString() . "</br>";
  echo 'Area : ' . $circle->calculateArea() . "<br>";

  $cylinder = new Cylinder(9, 'red', 12);
  $cylinder->toString() . "</br>";
  echo 'Volume : ' . $cylinder->calculateVolume();


?>
</body>
</html>