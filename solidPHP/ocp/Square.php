<?php


class Square {
    public $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area() {
        return pow($this->length, 2);
    }
}

//public function sum() {
//    foreach($this->shapes as $shape) {
//        if(is_a($shape, 'Square')) {
//            $area[] = pow($shape->length, 2);
//        } else if(is_a($shape, 'Circle')) {
//            $area[] = pi() * pow($shape->radius, 2);
//        }
//    }
//
//    return array_sum($area);
//}

//public function sum() {
//    foreach($this->shapes as $shape) {
//        $area[] = $shape->area();
//    }
//
//    return array_sum($area);
//}
//
//public function area();
//}

class Circle implements ShapeInterface {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

public function sum() {
    foreach($this->shapes as $shape) {
        if(is_a($shape, 'ShapeInterface')) {
            $area[] = $shape->area();
            continue;
        }

        throw new AreaCalculatorInvalidShapeException;
    }

    return array_sum($area);
}

