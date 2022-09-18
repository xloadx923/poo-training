<?php

namespace Infos;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__class__,'autoload'));
    }

    static function autoload($class){
        $class = str_replace('Infos\\','',$class);
        $class = str_replace('\\','/',$class);

        require 'App/Objects/'.$class.'.php';
    }
}

?>