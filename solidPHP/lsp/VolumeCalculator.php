<?php

class VolumeCalculator extends AreaCalulator {
    public function construct($shapes = array()) {
        parent::construct($shapes);
    }

    public function sum() {
        // logic to calculate the volumes and then return and array of output
        return array($summedData);
    }
}

class SumCalculatorOutputter {
    protected $calculator;

    public function __constructor(AreaCalculator $calculator) {
        $this->calculator = $calculator;
    }

    public function JSON() {
        $data = array(
            'sum' => $this->calculator->sum();
    );

        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            ''
        ));
    }
}

$areas = new AreaCalculator($shapes);
$volumes = new AreaCalculator($solidShapes);

$output = new SumCalculatorOutputter($areas);
$output2 = new SumCalculatorOutputter($volumes);

public function sum() {
    // logic to calculate the volumes and then return and array of output
    return $summedData;
}