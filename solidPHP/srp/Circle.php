<?php


class Circle {
    public $radius;

    public function construct($radius) {
        $this->radius = $radius;
    }
}

class Square {
    public $length;

    public function construct($length) {
        $this->length = $length;
    }
}

class AreaCalculator {

    protected $shapes;

    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }

    public function sum() {
        // logic to sum the areas
        return array_sum($this->shapes);
    }

    public function output() {
        return implode('', array(
            "",
            "Sum of the areas of provided shapes: ",
            $this->sum(),
            ""
        ));
    }
}

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();

//$shapes = array(
//    new Circle(2),
//    new Square(5),
//    new Square(6)
//);
//
//$areas = new AreaCalculator($shapes);
//$output = new SumCalculatorOutputter($areas);
//
//echo $output->JSON();
//echo $output->HAML();
//echo $output->HTML();
//echo $output->JADE();