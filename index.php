
<?php
include_once ('class/Circle.php');
include_once ('class/Cylinder.php');
include_once ('class/Rectangle.php');
include_once ('class/Square.php');

$circle = new Circle('Circle 1', 3);
echo "Circle Area: " . $circle->getArea() . " <br>";
echo "Circle Perimeter: " . $circle->getPerimeter() . "<br>";

$cylinder = new Cylinder('Cylinder 1', 4, 5);
echo "Cylinder Area: " . $cylinder->getArea() . "<br>";
echo "Cylinder Perimeter: " . $cylinder->getPerimeter() . "<br>";

$rectangle = new Rectangle('Rectangle 1',5,7);
echo "Rectangle Area: " . $rectangle->getArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "<br>";

$square = new Square('Square 1',10, 10);
echo "Square Area: " . $square->getArea() . "<br>";
echo "Square Perimeter: " . $square->getPerimeter() . "<br>";