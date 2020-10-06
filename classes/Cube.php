<?php
declare(strict_types=1);

class Cube extends Carre {
    use Forme3D;
    protected $height;
    
    /**
     * __construct
     *
     * @param  float $length
     * @return void
     */
    public function __construct(float $length){
        parent::__construct($length);
        $this->height = $length;
    }
        
    /**
     * volume
     *
     * @return float
     */
    public  function volume() :float {
       return parent::area()*$this->height;
    }
}