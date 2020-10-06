<?php
declare(strict_types=1);

class ParaRectangle extends Rectangle {
    use Forme3D;
    protected $height;

    public function __construct(float $length,float $width,float $height){
        parent::__construct($length,$width);
        $this->height = $height;
    }
    public  function volume() :float {
     return parent::area()*$this->height;
    }
}