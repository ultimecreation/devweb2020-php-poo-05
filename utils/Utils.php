<?php

declare(strict_types=1);

class Utils {
    
    /**
     * debug
     *
     * @param  array $var
     * @return void
     */
    public static function debug(array $var){
        echo "<pre>".print_r($var,true)."</pre>";
    }    
    /**
     * autoloadClasses
     *
     * @return bool
     */
    public static function autoloadClasses() :bool {
      
        // autoload classes
        return spl_autoload_register(function () {
            $files = array_diff(scandir('classes'),array('.','..'));
            foreach($files as $file){
                require_once "./classes/$file";
            }  
        });
    }
}