<?php 
declare(strict_types=1);
namespace Main;

class Rectangle extends Forme2D {
    protected $length;
    protected $width;
    
    /**
     * __construct
     *
     * @param  mixed $length
     * @param  mixed $width
     * @return void
     */
    public function __construct(float $length,?float $width){
        $this->length = $length;
        $this->width = $width;
    }
    
    /**
     * perimeter
     *
     * @return void
     */
    public function perimeter() :float {
        return $this->length + $this->width;
    }
    
    /**
     * area
     *
     * @return void
     */
    public function area() :float {
        return $this->length * $this->width;
    }
}