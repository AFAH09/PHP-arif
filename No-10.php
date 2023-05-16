<?php
class Animal
{
    public $name;
    public $sound;

    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound()
    {
        echo $this->sound;
    }
}

$animal1 = new Animal('Cat', 'Meow');
$animal1->makeSound();
?>