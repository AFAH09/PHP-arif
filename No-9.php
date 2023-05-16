<?php
class Car
{
    public $brand;
    public $year;

    public function __construct($brand, $year)
    {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getInfo()
    {
        return $this->brand . ', ' . $this->year;
    }
}

$car1 = new Car('Toyota', 2020);
echo $car1->getInfo();

?>