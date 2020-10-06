<?php
declare(strict_types=1);
namespace Main;

require("Rectangle.php");



class Carre extends Rectangle {    
    /**
     * __construct
     *
     * @param  float $length
     * @return void
     */
    public function __construct(float $length){
        parent::__construct( $length,$width=null);
    }

    /**
     * perimeter
     *
     * @return void
     */    
    /**
     * perimeter
     *
     * @return float
     */
    public function perimeter() :float {
        return $this->length *2;
    }
    
    
    /**
     * area
     *
     * @return float
     */
    public function area() :float {
        return $this->length **2;
    }
}