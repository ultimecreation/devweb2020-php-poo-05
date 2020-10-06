<?php
declare(strict_types=1);


abstract class Forme2D {
    
     
    /**
     * perimeter
     *
     * @return float
     */
    public abstract function perimeter() :float ;
    
    /**
     * area
     *
     * @return float
     */
    public abstract function area() :float ;
}