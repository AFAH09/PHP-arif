<?php
class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

$circle1 = new Circle(10);
echo $circle1->calculateArea();
?>